<?php

	$path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
	//include($path . "module/homes/model/DAOhomes.php");
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
			//var_dump($statement);
			// print_r($nombre);
				// if ($statement){  
				// 	//Ejecuta sentencia.
				// 	echo "NOOOO Hubo un problema con la consulta";
				// }
				// else{
				// 	echo "Hubo un problema con la consulta";
				// }
			$resultado = $statement->fetch();//devuelve false si no existe registro, 
			//var_dump($resultado);
			//die();
				// if($resultado != false){
				// 	echo ("la casa ya existe");
				// 	die();
				// }else if(!$resultado){
				// 	echo ("la casa no existe");
				// 	die();
				// }
				
			
            connect::close($conexion);
            return $resultado;
    }
    
    function insert_user($datos){
			
        $nombre=$_POST['user'];
        $email=$_POST['mail'];
        $passw=$_POST['password'];
        $type="client";
        $avatar="nada";
        
        $sql ="INSERT INTO `users`(`id`, `name`, `email`, `userpass`, `type`, `avatar`)
        VALUES (null,'$nombre','$email','$passw','$type', '$avatar')";
        

        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        
        return $res;
    }
}