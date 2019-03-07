<?php

	$path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
    include($path ."model/connect.php");
    include($path ."module/homes/model/Dates.php");
	class DAOcart{

        function insert_cart($datos, $user){
            print_r($datos) ;
            //die();
            foreach ($datos as $row) {
                $user = $user;
                $nombre = $row['Home'];
                $precio = $row['Price'];
                $cantidad = $row['Qty'];
                $total = $row['Total']; 
            
            // $sql ="INSERT INTO `carro`(`nombre`, `cantidad`, `precio`, `total`)
            // VALUES ('$nombre','$cantidad','$precio','$total')";
            $sql ="INSERT INTO `carro`(`ID`,`IDclient`, `IDproducto`, `nombre`, `cantidad`, `precio`, `total`) 
            VALUES (null,(SELECT id from users WHERE email='$user') ,(SELECT id from casas WHERE nombre='$nombre'),'$nombre' ,'$cantidad',
            (SELECT precionoche from casas WHERE nombre='$nombre'),(SELECT (precionoche*$cantidad)as total from casas WHERE nombre='$nombre'))";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            
            }
            connect::close($conexion);
            return $res;
            
        }

        function read_cart($user){
            $sql = "SELECT * FROM `carro` WHERE IDclient=(SELECT id FROM users WHERE  email='$user')";
             $conexion = connect::con();
             $res = mysqli_query($conexion, $sql);
             connect::close($conexion);
             return $res;

        }




    }