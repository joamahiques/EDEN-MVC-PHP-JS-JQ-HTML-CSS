<?php
    
    $path = $_SERVER['DOCUMENT_ROOT'] . '/www/EDEN/'; ///opt/lampp/htdocs
    include($path . "components/login/model/DAOlogin.php");
    include($path . "components/login/model/validatelogin.php");
	@session_start();
    
   
    
    switch($_GET['op']){
    ////////////LIST   
        case 'view':
            include("module/login/view/login.html");
            
        break;

        case 'register':

                $valide = validateregister();
               
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
			
		case 'autologin':
				try {
					$daologin = new DAOlogin();
					$rlt = $daologin->select_user($_POST['mail']);
				} catch (Exception $e) {
					echo "error";
					exit();
				}
				if(!$rlt){
					echo "Error al registrarse";
					echo ($_POST['user']);
					exit();
				}else{

					$value = get_object_vars($rlt);
					$_SESSION['type'] = $value['type'];
					$_SESSION['user'] = $value['name'];
					$_SESSION['avatar'] = $value['avatar'];
					$_SESSION['mail'] = $value['email'];
					echo json_encode($value);
					//echo 'ok';
					exit();
				}
				break;

        case 'login':
				try {
					$daologin = new DAOlogin();
					$rlt = $daologin->select_user($_POST['mail']);
				} catch (Exception $e) {
					echo "error";
					exit();
				}
				if(!$rlt){
					echo "El usuario no existe";
					exit();
				}else{
					$value = get_object_vars($rlt);
					if (password_verify($_POST['password'],$value['userpass'])) {
						if (isset($_SESSION['purchase']) && $_SESSION['purchase'] === 'on')
							echo 'okay';
						else
							
						$_SESSION['type'] = $value['type'];
						$_SESSION['user'] = $value['name'];
						$_SESSION['avatar'] = $value['avatar'];
						$_SESSION['mail'] = $value['email'];
						//echo 'ok';
						echo json_encode($value);
						exit();
					}else {
						echo "No coinciden los datos";
						exit();
					}
				}	
				break;

			
			case 'logout':
				error_reporting(0);
				session_unset($_SESSION['type']);
				session_unset($_SESSION['user']);
				session_unset($_SESSION['avatar']);
				session_destroy();
				echo "home";
				// if(session_destroy()) {
				// 	echo "home";
				// }
			break;
				
   
        default:
				include("view/include/error/error404.php");
		break;
	}
    

?>
            