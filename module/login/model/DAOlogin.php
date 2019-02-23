<?php

	$path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
    include($path ."model/connect.php");
    include($path ."module/homes/model/Dates.php");
	class DAOlogin{


    function validate(){
			
		$email=$_POST['mail'];
		try{
			$conexion = connect::con();
		}catch(Exception $e){
			echo "ERRORRRRRR";
		}
		
		$statement = $conexion->prepare("SELECT * FROM users WHERE email ='$email' LIMIT 1");
		$statement->execute();
		$resultado = $statement->fetch();//devuelve false si no existe registro, 
		connect::close($conexion);
		return $resultado;
    }
    
    function insert_user($datos){
			
        $nombre=$_POST['user'];
        $email=$_POST['mail'];
        $passw=$_POST['password'];
        $type="client";
		//$avatar="nada";
		$hashed_pass = password_hash($passw, PASSWORD_DEFAULT);
		$hashavatar= md5( strtolower( trim( $email ) ) );
		$avatar="https://www.gravatar.com/avatar/$hashavatar?s=40&d=identicon";
		
        $sql ="INSERT INTO `users`(`name`, `email`, `userpass`, `type`, `avatar`)
        VALUES ('$nombre','$email','$hashed_pass','$type', '$avatar')";
        

        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        
        return $res;
	}
	function select_user($datos){
			
       
        $email=$_GET['mail'];
		$sql = "SELECT * FROM users WHERE email='$email'";

        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql)->fetch_object();;
        connect::close($conexion);
        
        return $res;
    }
}