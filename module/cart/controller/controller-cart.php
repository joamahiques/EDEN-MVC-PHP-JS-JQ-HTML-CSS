<?php
@session_start();
    
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
    include($path . "module/cart/model/DAOcart.php");
    


    switch($_GET['op']){
        ////////////LIST   
            case 'view';
                include("module/cart/view/cart.html");
            break;
            case 'insertcart';
                try {
                    $daocart = new DAOcart();
                    $rlt = $daocart->insert_cart($_POST['cart'],$_SESSION['mail']);
				} catch (Exception $e) {
					echo ("error");
					exit();
                }
                if(!$rlt){
					echo "error insert";
					exit();
				}else{
                    echo "insert";
                }
            break;

            case 'readcart';
                try {
                    $daocart = new DAOcart();
                    $rlt = $daocart->read_cart($_SESSION['mail']);
				} catch (Exception $e) {
					echo json_encode("error");
					exit();
                }
                if(!$rlt){
					echo json_encode($rlt);
					exit();
				}else{
                    $prod = array();///inicializamos el array
                    foreach ($rlt as $row) {
                        array_push($prod, $row);//lo rellenamos con array_push
                    }
                    echo json_encode($prod);///lo pasamos a json
                    exit;
                }
            break;
            case 'confirmpurchase';
            try {
                $daocart = new DAOcart();
                $rlt = $daocart->confirm_purchase($_SESSION['mail']);
            } catch (Exception $e) {
                echo json_encode("error");
                exit();
            }
            break;
            default;
                include("vista/include/error404.php");
            break;
    }