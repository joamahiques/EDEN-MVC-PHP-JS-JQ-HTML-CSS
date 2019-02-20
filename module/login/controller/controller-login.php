<?php
    
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
    include($path . "module/login/model/DAOlogin.php");
   
    // print_r($_SERVER['DOCUMENT_ROOT']);
    // die();
   
    
    switch($_GET['op']){
    ////////////LIST   
        case 'view':
            include("module/login/view/login.html");
            
        break;
   
        default:
			include("view/inc/error/error404.php");
		break;
	}
    

?>
            