<?php
	@session_start();
	include("view/include/top-page.php");
?>
<div id="wrapper">		
    <div id="header">    	
    	<?php

			if ((!isset($_GET['page'])) || ($_GET['page']==="controllerhome") ){
				include("view/include/header-home.php");///si estamos en homepage
			}else{
				include("view/include/header.php");
			} 
    	?>        
    </div>  
     <div id="menu">
	 	<?php
			if(!isset($_SESSION['type'])){
				include("view/include/menu.php");
			}else if ($_SESSION['type']==='client'){
				include("view/include/menuuser.php");
				//echo ($_SESSION['mail']);
			}else if($_SESSION['type']==='admin'){
				include("view/include/menuadmin.php");
				//echo ($_SESSION['mail']);
			} 
			?>        
		 
    </div>	
    <div id="">
    	<?php 
			include("view/include/pages.php"); 
			include("components/login/view/login.html")//modal login
		?>        
    </div>
    <div id="footer">   	   
	    <?php
	        include("view/include/footer.php");
	    ?>        
    </div>
</div>

    