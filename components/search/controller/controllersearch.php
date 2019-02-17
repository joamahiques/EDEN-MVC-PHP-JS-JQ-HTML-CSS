<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/';

    include($path ."components/search/model/DAOsearch.php");
    
        switch($_GET['op']){

            ///BUSCADOR
            case 'firstdrop':
            
                try{
                    $DAOsearch = new DAOsearch();
                    $rdo = $DAOsearch->readProvince();
        
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
                
            case 'seconddrop':
            
                try{
                    $DAOsearch = new DAOsearch();
                    $rdo = $DAOsearch->readMuni($_GET['id']);
        
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
            
            case 'autocomplete':
                    try{
                        $DAOsearch = new DAOsearch();
                        $rdo = $DAOsearch->autocomplete();
                    }catch (Exception $e){
                        echo json_encode("error");
                        exit;
                    }
                    if(!$rdo){
                        echo json_encode("error");
                        exit;
                    }else{
                        foreach ($rdo as $row) {
                                echo 
                                '<div class="autoelement">
                                 
                                    <a  class="element" data="'.$row['provincia'].'" id="'.$row['nombre'].'">'.utf8_encode($row['nombre']).'</a>
                                </div>';
                        }
                        exit;
                    }
                    break;
                
            default:
                include("view/inc/error/error404.php");
                break;
        }
        

?>
            