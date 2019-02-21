<?php
    
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
    include($path . "module/login/model/DAOlogin.php");
    include($path . "module/login/model/validatelogin.php");

    // print_r($_SERVER['DOCUMENT_ROOT']);
    // die();
   
    
    switch($_GET['op']){
    ////////////LIST   
        case 'view':
            include("module/login/view/login.html");
            
        break;

        case 'register':
        //include("module/login/model/validatelogin.php");

                $valide = validateregister();
                // echo $valide['result'];
                // echo $valide['check'];
                // echo $valide;
                // exit();
                
                //if($valide['result']){
                if(!$valide){
					try {
						$daologin = new DAOlogin();
                         $rlt = $daologin->insert_user($_POST['user'], $_POST['mail'], $_POST['password']);
					} catch (Exception $e) {
						echo "Error al registrarse1";
						exit();
					}
					if(!$rlt){
                        echo "Error al registrarse";
                        echo ($_POST['user']);
						exit();
					}else{
						if (isset($_SESSION['purchase']) && $_SESSION['purchase'] === 'on'){
							echo 'okay';
							exit();
						}else{
							echo 'ok';
							exit();	
						}
					}	
				}else{
					echo "ERROR: Este email ya está registrado";
					exit();
				}
            break;
        
        case 'login':
			try {
				$daologin = new DAOlogin();
				$rlt = $daologin->select_login($_POST['mail']);
			} catch (Exception $e) {
				echo "error";
				exit();
			}
			if(!$rlt){
				echo "El usuario no existe";
				exit();
			}else{
				$value = get_object_vars($rlt);
				if (password_verify($_POST['password'],$value['password'])) {
					if (isset($_SESSION['purchase']) && $_SESSION['purchase'] === 'on')
						echo 'okay';
					else
						echo 'ok';
					$_SESSION['type'] = $value['type'];
					$_SESSION['user'] = $value['user'];
					//$_SESSION['tiempo'] = time();
					exit();
				}else {
					echo "No coinciden los datos";
					exit();
				}
			}	
			break;
   
        default:
			include("view/inc/error/error404.php");
		break;
	}
    

?>
            