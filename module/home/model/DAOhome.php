<?php
   $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
   include($path ."model/connect.php");


    class DAOhome{

        function select_all_homes(){
			$sql = "SELECT * FROM casas ORDER BY provincia ASC LIMIT 9";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }
        
        function select_all_homes_and_order($datos){
			$proini=$datos;
			
			$sql = "SELECT * FROM casas WHERE provincia LIKE '$proini' ORDER BY localidad ASC,capacidad ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        // function insertFavorites($home){
        //    // echo('insert!!');
        //    $sql="INSERT INTO favoritos SELECT * from casas WHERE nombre='$home'";
			
		// 	$conexion = connect::con();
        //     $res = mysqli_query($conexion, $sql);
        //     connect::close($conexion);
        //     return $res;
        // }
        // function readFavorites(){
            
        //     $sql = "SELECT nombre FROM favoritos";
             
        //      $conexion = connect::con();
        //      $res = mysqli_query($conexion, $sql);
        //      connect::close($conexion);
        //      return $res;
        //  }

        //  function deleteFavorites($home){
            
        //     $sql = "DELETE FROM `favoritos` WHERE nombre='$home'";
			
		// 	$conexion = connect::con();
        //     $res = mysqli_query($conexion, $sql);
        //     connect::close($conexion);
        //     return $res;
        //  }

        //  function readProvince(){
            
        //     $sql = "SELECT DISTINCT provincia FROM casas ORDER BY provincia ASC";
             
        //      $conexion = connect::con();
        //      $res = mysqli_query($conexion, $sql);
        //      connect::close($conexion);
        //      return $res;
        //  }

        //  function readMuni($provi){
            
        //     $sql = "SELECT DISTINCT localidad FROM casas WHERE provincia='$provi' ORDER BY localidad ASC";
             
        //      $conexion = connect::con();
        //      $res = mysqli_query($conexion, $sql);
        //      connect::close($conexion);
        //      return $res;
        //  }

        //  function autocomplete(){
        //     $val = $_POST['auto'];
        //     $local = $_POST['drop2'];
        //    //$sql = "SELECT *  FROM casas WHERE nombre LIKE '".$val. "%'";
        //     $sql = "SELECT *  FROM casas WHERE localidad='$local' and nombre LIKE '".$val. "%'";
             
        //      $conexion = connect::con();
        //      $res = mysqli_query($conexion, $sql);
        //      connect::close($conexion);
        //      return $res;
        //  }
    }