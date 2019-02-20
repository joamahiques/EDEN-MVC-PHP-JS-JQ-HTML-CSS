<?php

	if (isset($_GET['page'])){
		
		switch($_GET['page']){
			
			case "controllerhome";
				include("module/home/controller/".$_GET['page'].".php");
				break;
			case "controller_homes";
				include("module/homes/controller/".$_GET['page'].".php");
				break;
			case "favorites";
				include("module/userfavorites/view/".$_GET['page'].".php");
				break;
			case "controllershop";
				include("module/shop/controller/".$_GET['page'].".php");
				break;
			case "controller-contact";
				include("module/contact/controller/".$_GET['page'].".php");
				break;
			case "controller-login";
				include("module/login/view/login.html");
				break;
			case "404";
				include("view/include/error/error404.php");
				break;
			case "503";
				include("view/include/error/error503.php");
				break;
			default;
				include("module/home/view/home.php");
				break;
		}
	}else{
		$_GET['op']='list';
		include("module/home/controller/controllerhome.php");
	}
?>