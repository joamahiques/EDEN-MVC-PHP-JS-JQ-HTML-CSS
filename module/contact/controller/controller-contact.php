<?php
    
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
    include($path . "module/homes/model/DAOhomes.php");
    @session_start();

    switch($_GET['op']){
        ////////////LIST   
            case 'list';
            // echo("hello contact");
            // die();
                include("module/contact/view/contactus.php");
                
                break;
            }