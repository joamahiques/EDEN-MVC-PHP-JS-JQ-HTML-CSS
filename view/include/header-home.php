<body id="top">
<!--==============================header=================================-->
		<header>
			<div>
				<div id="rel">
                <div id="contenedor-slider" class="contenedor-slider">
               		 <h1>
						<a href="index.php?page=controllerhome&op=list">
							<img src="view/img/logo.png" alt="Eden">
						</a>
					</h1>
					
                    <div id="slider" class="slider">
                        <section class="slider__section"><img src="view/img/masqi-predeter.jpg" class="slider__img"></section>
                        <section class="slider__section"><img src="view/img/panoramica.jpg" class="slider__img"></section>
                        <section class="slider__section"><img src="view/img/casa1.jpg" class="slider__img"></section>
                        <section class="slider__section"><img src="view/img/masqi.jpg" class="slider__img"></section>
						<section class="slider__section"><img src="view/img/masqi2.png" class="slider__img"></section>

                    </div>
                    <div id="btn-prev" class="btn-prev">&#60;</div>
                    <div id="btn-next" class="btn-next">&#62;</div>
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
			</div>
			<div class="clear"></div>
			<?php
				//include 'menu.php';
			 ?> 
			</header>
