<?php
	session_start();
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
		     include("view/include/menu.php");
		?> 
    </div>	
    <div id="">
    	<?php 
		    include("view/include/pages.php"); 
		?>        
    </div>
    <div id="footer">   	   
	    <?php
	        include("view/include/footer.php");
	    ?>        
    </div>
</div>

    