<?php
   $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
   include($path ."model/connect.php");


    class DAOFavorites{

        function insertFavorites($home){
           // echo('insert!!');
           $sql="INSERT INTO favoritos SELECT * from casas WHERE nombre='$home'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }
        function readFavorites(){
            
            $sql = "SELECT nombre FROM favoritos";
             
             $conexion = connect::con();
             $res = mysqli_query($conexion, $sql);
             connect::close($conexion);
             return $res;
         }

         function deleteFavorites($home){
            
            $sql = "DELETE FROM `favoritos` WHERE nombre='$home'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
         }

    }