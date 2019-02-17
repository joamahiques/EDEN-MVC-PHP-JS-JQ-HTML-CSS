<?php
$path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
include($path . "model/connect.php");

class DAOfavor{
        
    function selectfavor(){
			$sql = "SELECT nombre,localidad,provincia,capacidad,entera FROM favoritos";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;

		}
    }
    
