<?php

	$path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
    include($path . "module/shop/model/DAOShop.php");
	@session_start();
	//echo ('datatable confavo');
	//die();
	
    switch ($_GET['op']) {
       
        case 'view':
            
            include("module/shop/view/shop.php");
            
            break;
       
        case 'list':
        
            try{
                $DAOshop = new DAOShop();
                $rdo = $DAOshop->select_all_homes();
        
                }catch (Exception $e){
                    echo json_encode("error");
                    exit;
                }
                if(!$rdo){
                    echo json_encode("error");
                    exit;
                }else{
                    $favor = array();///inicializamos el array
                    foreach ($rdo as $row) {
                        array_push($favor, $row);//lo rellenamos con array_push
                    }
                    echo json_encode($favor);///lo pasamos a json
                    exit;
                }
                break;
			
       case 'searchProvince1':
                 
                try{
                    $DAOshop = new DAOShop();
                    $rdo = $DAOshop->select_all_homes_and_order($_GET['provi']);

                }catch (Exception $e){
                    echo json_encode("error");
                    exit;
                }
                if(!$rdo){
                    echo json_encode("error");
                    exit;
                }else{
                    $favor = array();///inicializamos el array
                    foreach ($rdo as $row) {
                        array_push($favor, $row);//lo rellenamos con array_push
                    }
                    echo json_encode($favor);///lo pasamos a json
                    exit;
                }
                break;
                
            
        case 'searchPorYLoc':
                try{
                    $DAOshop = new DAOShop();
                $rdo = $DAOshop->selectProviYLoca($_GET['provi'],$_GET['local']);

            }catch (Exception $e){
                echo json_encode("error");
                exit;
            }
            if(!$rdo){
                echo json_encode("error");
                exit;
            }else{
                $favor = array();///inicializamos el array
                foreach ($rdo as $row) {
                    array_push($favor, $row);//lo rellenamos con array_push
                }
                echo json_encode($favor);///lo pasamos a json
                exit;
            }
            break;

        case 'searchComplete':
                try{
                    $DAOshop = new DAOShop();
                $rdo = $DAOshop->alldrops($_GET['provi'],$_GET['local'],$_GET['val']);

            }catch (Exception $e){
                echo json_encode("error");
                exit;
            }
            if(!$rdo){
                echo json_encode("error");
                exit;
            }else{
                $favor = array();///inicializamos el array
                foreach ($rdo as $row) {
                    array_push($favor, $row);//lo rellenamos con array_push
                }
                echo json_encode($favor);///lo pasamos a json
                exit;
            }
            break;
            
        case 'search':// solo po rlo escrito en el input de autocomplete
            try{
                $DAOshop = new DAOShop();
            $rdo = $DAOshop->search($_GET['val']);

            }catch (Exception $e){
                echo json_encode("error");
                exit;
            }
            if(!$rdo){
                echo json_encode("error");
                exit;
            }else{
                $favor = array();///inicializamos el array
                foreach ($rdo as $row) {
                    array_push($favor, $row);//lo rellenamos con array_push
                }
            echo json_encode($favor);///lo pasamos a json
            exit;
        }
        break;
			
		default:
			include("view/inc/error/error404.php");
			break;
	}
    

?>
            