<?php
    
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
    include($path . "components/modal/model/DAOModal.php");
   
    // print_r($_SERVER['DOCUMENT_ROOT']);
    // die();
   
    
    switch($_GET['op']){
        case 'read_modal':
       
            try{
                $DAOmodal = new DAOModal();
            	$rdo = $DAOmodal->select_home($_GET['modal']);// modal
    
            }catch (Exception $e){
                echo json_encode("error");
                exit;
            }
            if(!$rdo){
                echo json_encode("error");
                exit;
            }else{
                $home=get_object_vars($rdo);
                echo json_encode($home);
                exit;
            }
        break;
   
    ////DEFAULT
    default;
        include("vista/include/error404.php");
        break;
    }