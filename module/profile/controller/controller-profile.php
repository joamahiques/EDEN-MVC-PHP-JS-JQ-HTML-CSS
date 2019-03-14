<?php
    
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
    include($path . "components/login/model/DAOlogin.php");
    include($path . "components/login/model/validatelogin.php");
	@session_start();
    
   
    
    switch($_GET['op']){
    ////////////LIST   
        case 'view':
            include("module/profile/view/profile.html");
            
        break;
        default:
        include("view/include/error/error404.php");
        break;
}


?>