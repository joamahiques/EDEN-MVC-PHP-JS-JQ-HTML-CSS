<body id="top">
<!--==============================header=================================-->
		<header class="header">
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="index.php?page=controllerhome&op=list">
							<img src="view/img/logo.png" alt="The healthy homes">
						</a>
					</h1>
				</div>
				<form class="search">
						
							<select id="drop1">
								<option value="0">Selecciona Provincia</option>
							</select>
						
							<select id="drop2">
								<option value="0">Selecciona Municipio</option>
							</select>
							
							<div class="autocomplete"> 
								<div id="optionsauto"></div> 
							 	<input id="autocom" type="text" />
   						 	</div>	
   						
							<div ><a id="searchlist">BUSCAR</a></div>   <!--<button class="btn">BUSCAR</button>-->
           			 </form>
			</div>
			<div class="clear"></div>
			<?php
				//include 'menu.php';
			 ?> 
			</header>
