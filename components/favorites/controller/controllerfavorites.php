<?php
@session_start();
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/';

    include($path ."components/favorites/model/DAOFavorites.php");
    
        switch($_GET['op']){
            
            case 'favorites':
                try{
                    $DAOFavorites = new DAOFavorites();
                    $rdo = $DAOFavorites->insertFavorites($_GET['id'],$_GET['email']);//$_SESSION['mail]
        
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                break;
            
            case 'readfavorites':
                try{
                    $DAOFavorites = new DAOFavorites();
                    //$rdo = $DAOFavorites->readFavorites($_GET['email']);
                    $rdo = $DAOFavorites->readFavorites($_SESSION['mail']);
        
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
            
            case 'favoritesDelete':
            
               try{
                   $DAOFavorites = new DAOFavorites();
                   $rdo = $DAOFavorites->deleteFavorites($_GET['id'],$_GET['email']);
               }catch (Exception $e){
                   //echo ("conexion");
                   $callback = 'index.php?page=503';
                   die('<script>window.location.href="'.$callback .'";</script>');
               }
                break;
            
            default:
                include("view/inc/error/error404.php");
                break;
            }

?>