<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/';

    include($path ."module/home/model/DAOhome.php");
    
        switch($_GET['op']){
            
            case 'list':
                if(isset($_POST['provinciaini'])){
                    $proini = $_POST["provinciaini"];
                    try{
                        $DAOhome = new DAOhome();
                        $rdo = $DAOhome->select_all_homes_and_order($proini);
                     }catch (Exception $e){
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }
                }else{
                    try{
                        $DAOhome = new DAOhome();
                        $rdo = $DAOhome->select_all_homes();
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }
                }
                if(!$rdo){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    include("module/home/view/home.php");
                }
                break;
           
            // case 'favorites':
            //     try{
            //         $DAOhome = new DAOhome();
            //         $rdo = $DAOhome->insertFavorites($_GET['id']);
        
            //     }catch (Exception $e){
            //         $callback = 'index.php?page=503';
            //         die('<script>window.location.href="'.$callback .'";</script>');
            //     }
            //     break;
            
            // case 'readfavorites':
            //     try{
            //         $DAOhome = new DAOhome();
            //         $rdo = $DAOhome->readFavorites();
        
            //     }catch (Exception $e){
            //         echo json_encode("error");
            //         exit;
            //     }
            //     if(!$rdo){
            //         echo json_encode("error");
            //         exit;
            //     }else{
            //         $favor = array();///inicializamos el array
            //         foreach ($rdo as $row) {
            //             array_push($favor, $row);//lo rellenamos con array_push
            //         }
            //         echo json_encode($favor);///lo pasamos a json
            //         exit;
            //     }
            //      break;
            
            // case 'favoritesDelete':
            
            //    try{
            //        $DAOhome = new DAOhome();
            //        $rdo = $DAOhome->deleteFavorites($_GET['id']);
            //    }catch (Exception $e){
            //        //echo ("conexion");
            //        $callback = 'index.php?page=503';
            //        die('<script>window.location.href="'.$callback .'";</script>');
            //    }
            //     break;
    ///BUSCADOR
            // case 'firstdrop':
            
            //     try{
            //         $DAOhome = new DAOhome();
            //         $rdo = $DAOhome->readProvince();
        
            //     }catch (Exception $e){
            //         echo json_encode("error");
            //         exit;
            //     }
            //     if(!$rdo){
            //         echo json_encode("error");
            //         exit;
            //     }else{
            //         $favor = array();///inicializamos el array
            //         foreach ($rdo as $row) {
            //             array_push($favor, $row);//lo rellenamos con array_push
            //         }
            //         echo json_encode($favor);///lo pasamos a json
            //         exit;
            //     }
            //     break;
                
            // case 'seconddrop':
            
            //     try{
            //         $DAOhome = new DAOhome();
            //         $rdo = $DAOhome->readMuni($_GET['id']);
        
            //     }catch (Exception $e){
            //         echo json_encode("error");
            //         exit;
            //     }
            //     if(!$rdo){
            //         echo json_encode("error");
            //         exit;
            //     }else{
            //         $favor = array();///inicializamos el array
            //         foreach ($rdo as $row) {
            //             array_push($favor, $row);//lo rellenamos con array_push
            //         }
            //         echo json_encode($favor);///lo pasamos a json
            //         exit;
            //     }
            //     break;
            
            // case 'autocomplete':
            //         try{
            //             $DAOhome = new DAOhome();
            //             $rdo = $DAOhome->autocomplete();
            //         }catch (Exception $e){
            //             echo json_encode("error");
            //             exit;
            //         }
            //         if(!$rdo){
            //             echo json_encode("error");
            //             exit;
            //         }else{
            //             foreach ($rdo as $row) {
            //                     echo 
            //                     '<div class="autoelement">
                                 
            //                         <a  class="element" data="'.$row['provincia'].'" id="'.$row['nombre'].'">'.utf8_encode($row['nombre']).'</a>
            //                     </div>';
            //             }
            //             exit;
            //         }
            //         break;
                
            default:
                include("view/inc/error/error404.php");
                break;
        }
        

?>
            