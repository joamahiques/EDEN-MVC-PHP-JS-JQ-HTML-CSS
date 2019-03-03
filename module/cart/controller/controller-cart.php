<?php
    
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
   // include($path . "module/cart/model/DAOcart.php");
    
    @session_start();

    switch($_GET['op']){
        ////////////LIST   
            case 'view';
                include("module/cart/view/cart.html");
            break;

            default;
                include("vista/include/error404.php");
            break;
    }