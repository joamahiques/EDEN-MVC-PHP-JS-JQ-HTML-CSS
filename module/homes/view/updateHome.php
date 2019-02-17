
<div id="contenido" class="content">
<div class="container_12">
<div class="grid_6">

            <h3 class="botno">ACTUALIZAR CASA
                <?php
                    // if ($error != '')
                    //     print ("<SPAN CLASS='error-message' color:red;>" . "* ".$error . "</SPAN>");
				?> 
            </h3>

<form method="post" name="formcasa" class="update" id="formcasa" autocomplete="on">
<div id="datoscasa">
    <p>
        <label for="nombre" class="update">Nombre</label>
        <input name="nombre" id="nombre" type="text" placeholder="Nombre" value="<?php echo $home['nombre'];?>" readonly />
        <span id="e_nombre" class="styerror"></span>
    </p>
    <p>
        <label for="localidad" class="update">Localidad</label>
        <input name="localidad" id="localidad" type="text" placeholder="localidad" value="<?php echo $home['localidad'];?>" />
        <span id="e_localidad" class="styerror"></span>
    </p>
    <p>
        <label for="provincia" class="update">Provincia</label>
        <select  name="provincia" id="provincia">
            <option <?php  if  ( $home['provincia']=="Alava")  echo  'selected'  ;  ?> value="Alava">Álava</option>
            <option <?php  if  ( $home['provincia']=="Albacete")  echo  'selected'  ;  ?> value="Albacete">Albacete</option >
            <option <?php  if  ( $home['provincia']=="Alicante")  echo  'selected'  ;  ?> value="Alicante"> Alicante</option>
            <option <?php  if  ( $home['provincia']=="Almeria")  echo  'selected'  ;  ?> value="Almeria">Almería</option>
            <option <?php  if  ( $home['provincia']=="Asturias")  echo  'selected'  ;  ?> value="Asturias">Asturias</option>
            <option <?php  if  ( $home['provincia']=="Avila")  echo  'selected'  ;  ?> value="Avila">Badajoz</option >
            <option <?php  if  ( $home['provincia']=="Badajoz")  echo  'selected'  ;  ?> value="Badajoz"> Alicante(Comunidad Valenciana)</option>
            <option <?php  if  ( $home['provincia']=="Barcelona")  echo  'selected'  ;  ?> value="Barcelona">Barcelona</option>
            <option <?php  if  ( $home['provincia']=="Burgos")  echo  'selected'  ;  ?> value="Burgos">Burgos</option>
            <option <?php  if  ( $home['provincia']=="Caceres")  echo  'selected'  ;  ?> value="Caceres">Cáceres</option >
            <option <?php  if  ( $home['provincia']=="Cadiz")  echo  'selected'  ;  ?> value="Cadiz"> Cádiz</option>
            <option <?php  if  ( $home['provincia']=="Cantabria")  echo  'selected'  ;  ?> value="Cantabria">Cantabria</option>
            <option <?php  if  ( $home['provincia']=="Castellon")  echo  'selected'  ;  ?> value="Castellon">Castellón</option>
            <option <?php  if  ( $home['provincia']=="CiudadReal")  echo  'selected'  ;  ?> value="CiudadReal">Ciudad Real</option >
            <option <?php  if  ( $home['provincia']=="Cordoba")  echo  'selected'  ;  ?> value="Cordoba">Córdoba</option>
            <option <?php  if  ( $home['provincia']=="Cuenca")  echo  'selected'  ;  ?>value="Cuenca">Cuenca</option>
            <option <?php  if  ( $home['provincia']=="Gerona")  echo  'selected'  ;  ?>value="Gerona">Gerona</option>
            <option <?php  if  ( $home['provincia']=="Granada")  echo  'selected'  ;  ?>value="Granada">Granada </option >
            <option <?php  if  ( $home['provincia']=="Guadalajara")  echo  'selected'  ;  ?>value="Guadalajara">Guadalajara</option>
            <option <?php  if  ( $home['provincia']=="Guipuzcoa")  echo  'selected'  ;  ?>value="Guipuzcoa">Guipúzcoa</option>
            <option <?php  if  ( $home['provincia']=="Huelva")  echo  'selected'  ;  ?>value="Huelva">Huelva</option>
            <option <?php  if  ( $home['provincia']=="Huesca")  echo  'selected'  ;  ?>value="Huesca">Huesca</option >
            <option <?php  if  ( $home['provincia']=="IslasBaleares")  echo  'selected'  ;  ?>value="IslasBaleares"> Islas Baleares</option>
            <option <?php  if  ( $home['provincia']=="Jaen")  echo  'selected'  ;  ?>value="Jaen">Jaén</option>
            <option <?php  if  ( $home['provincia']=="La Coruña")  echo  'selected'  ;  ?>value="La Coruña">La Coruña</option >
            <option <?php  if  ( $home['provincia']=="La Rioja")  echo  'selected'  ;  ?>value="La Rioja">La Rioja </option>
            <option <?php  if  ( $home['provincia']=="Las Palmas")  echo  'selected'  ;  ?>value="Las Palmas">Las Palmas</option>
            <option <?php  if  ( $home['provincia']=="Leon")  echo  'selected'  ;  ?>value="Leon">León</option>
            <option <?php  if  ( $home['provincia']=="Lerida")  echo  'selected'  ;  ?>value="Lerida">Lérida</option >
            <option <?php  if  ( $home['provincia']=="Lugo")  echo  'selected'  ;  ?>value="Lugo">Lugo</option>
            <option <?php  if  ( $home['provincia']=="Malaga")  echo  'selected'  ;  ?>value="Malaga">Málaga</option>
            <option <?php  if  ( $home['provincia']=="Madrid")  echo  'selected'  ;  ?>value="Madrid">Madrid</option>
            <option <?php  if  ( $home['provincia']=="Murcia")  echo  'selected'  ;  ?>value="Murcia">Murcia</option>
            <option <?php  if  ( $home['provincia']=="Navarra")  echo  'selected'  ;  ?>value="Navarra">Navarra </option >
            <option <?php  if  ( $home['provincia']=="Orense")  echo  'selected'  ;  ?>value="Orense">Orense</option>
            <option <?php  if  ( $home['provincia']=="Palencia")  echo  'selected'  ;  ?>value="Palencia">Palencia</option>
            <option <?php  if  ( $home['provincia']=="Pontevedra")  echo  'selected'  ;  ?>value="Pontevedra">Pontevedra</option>
            <option <?php  if  ( $home['provincia']=="Salamanca")  echo  'selected'  ;  ?>value="Salamanca">Salamanca</option>
            <option <?php  if  ( $home['provincia']=="Segovia")  echo  'selected'  ;  ?>value="Segovia">Segovia</option >
            <option <?php  if  ( $home['provincia']=="Sevilla")  echo  'selected'  ;  ?>value="Sevilla">Sevilla</option>
            <option <?php  if  ( $home['provincia']=="Soria")  echo  'selected'  ;  ?>value="Soria">Soria </option>
            <option <?php  if  ( $home['provincia']=="Tarragona")  echo  'selected'  ;  ?>value="Tarragona">Tarragona</option>
            <option <?php  if  ( $home['provincia']=="Tenerife")  echo  'selected'  ;  ?>value="Tenerife">Tenerife</option >
            <option <?php  if  ( $home['provincia']=="Teruel")  echo  'selected'  ;  ?>value="Teruel">Teruel</option>
            <option <?php  if  ( $home['provincia']=="Toledo")  echo  'selected'  ;  ?>value="Toledo">Toledo</option>
            <option <?php  if  ( $home['provincia']=="Valencia")  echo  'selected'  ;  ?>value="Valencia">Valencia</option>
            <option <?php  if  ( $home['provincia']=="Valladolid")  echo  'selected'  ;  ?>value="Valladolid">Valladolid</option>
            <option <?php  if  ( $home['provincia']=="Vizcaya")  echo  'selected'  ;  ?>value="Vizcaya">Vizcaya</option>
            <option <?php  if  ( $home['provincia']=="Zamora")  echo  'selected'  ;  ?>value="Zamora">Zamora</option >
            <option <?php  if  ( $home['provincia']=="Zaragoza")  echo  'selected'  ;  ?>value="Zaragoza">Zaragoza</option>
         </select> 
    </p>
    <p>
             <label for="fechaAlta" class="update">Fecha de Construcción</label> 
            <input id="datepicker" type="text" name="fechacons" placeholder="Fecha de Construcción" value="<?php echo $home['fechacons'];?>">
            <span id="e_fechacons" class="styerror"></span>
	</p>
</div>
<div id="datospropietario">
    <p>
        <label for="nombrePropietario" class="update">Nombre del Propietario</label>
        <input name="nombrePropietario" id="nombrePropietario" type="text" placeholder="nombre del propietario" value="<?php echo $home['nombrePropietario'];?>" readonly />
        <span id="e_nombrePropietario" class="styerror"></span>
    </p>
    <p>
        <label for="dni" class="update">DNI del Propietario</label>
        <input name="dni" id="dni" type="text" placeholder="DNI" value="<?php echo $home['dni'];?>" />
        <span id="e_dni" class="styerror"></span>
    </p>
    <p>
        <label for="email" class="update">Email del Propietario</label>
        <input name="email" id="email" type="text" placeholder="email" value="<?php echo $home['email'];?>" />
        <span id="e_email" class="styerror"></span>
    </p>
    <p>
        <label for="telefono" class="update">Teléfono del propietario</label>
        <input name="telefono" id="telefono" type="text" placeholder="telefono" value="<?php echo $home['telefono'];?>" />
        <span id="e_telefono" class="styerror"></span>
    </p>
</div>
<div id="carac">
    <div class="medio">
        <p>
            <label for="capacidad" class="update">Capacidad Total</label>
            <input name="capacidad" id="capacidad"" type="text"  placeholder="capacidad" value="<?php echo $home['capacidad'];?>" />
            <span id="e_capacidad"" class="styerror"></span>
        </p>
        <p>
            <label for="habitaciones" class="update">Num de Habitaciones</label>
            <input name="habitaciones" id="habitaciones"" type="text" placeholder="habitaciones" value="<?php echo $home['habitaciones'];?>" />
            <span id="e_habitaciones"" class="styerror"></span>
        </p>
    </div>
    <div class="medio">
        <p>
            <label for="fechaAlta" class="update">Fecha de Alta</label>
            <input id="datepicker2" type="text" name="fecha" value="<?php echo $home['fecha'];?>">
            <span id="e_fechaAlta" class="styerror"></span>
        </p>
        <p class="inputupdate"><label class="update">Reserva Completa:</label>	
        <span> Si <input <?php  if  ( $home['entera']=="si")  echo  'checked'  ;  ?> name="completa" type="radio" value="si"></span>
        <span> No <input <?php  if  ( $home['entera']=="no")  echo  'checked'  ;  ?> name="completa" type="radio" value="no"></span>
        <span id="e_completa"  class="styerror"></span>
        </p>
    </div>
        <p class="chec"><label class="update">Servicios: <span id="e_servicios" " class="styerror"></span></label>	
                <?php
                    $servicios=explode(":", $home['servicios']); //separa los datos del array 
                   
                ?>
            <span>Comidas<input <?php $busca_array=in_array("comidas", $servicios); if($busca_array){ echo "checked";} ?> type="checkbox" name="servicios[]" value="comidas"></span>
            <span>Piscina <input <?php $busca_array=in_array("piscina", $servicios); if($busca_array){ echo "checked";} ?> type="checkbox" name="servicios[]" value="piscina"></span>
            <span>Gimnasio  <input <?php $busca_array=in_array("gimnasio", $servicios); if($busca_array){ echo "checked";} ?> type="checkbox" name="servicios[]" value="gimnasio"></span>
            <span>Masajes<input <?php $busca_array=in_array("masajes", $servicios); if($busca_array){ echo "checked";} ?> type="checkbox" name="servicios[]" value="masajes"></span>
            <span>Hidromasaje<input <?php $busca_array=in_array("hidromasaje", $servicios); if($busca_array){ echo "checked";} ?> type="checkbox" name="servicios[]" value="hidromasaje"></span>
            <span>Acepta Mascotas<input <?php $busca_array=in_array("mascotas si", $servicios); if($busca_array){ echo "checked";} ?> type="checkbox" name="servicios[]" value="mascotas si"></span>
            <!-- <span id="e_servicios" " class="styerror"></span> -->
        </p>
        
        <p class="chec"><label class="update">Actividades: <span id="e_actividades"" class="styerror"></span></label>	
                <?php
                    $actividades=explode(":", $home['actividades']);
                   
                ?>
            <span>Yoga <input <?php $busca_array=in_array("yoga", $actividades); if($busca_array){ echo "checked";} ?> type="checkbox" name="actividades[]" value="yoga"></span>
            <span>Meditacion<input <?php $busca_array=in_array("meditacion", $actividades); if($busca_array){ echo "checked";} ?> type="checkbox" name="actividades[]" value="meditacion"></span>
            <span>Tai chi<input <?php $busca_array=in_array("tai chi", $actividades); if($busca_array){ echo "checked";} ?> type="checkbox" name="actividades[]" value="tai chi"></span>
            <span>Senderismo<input <?php $busca_array=in_array("senderismo", $actividades); if($busca_array){ echo "checked";} ?> type="checkbox" name="actividades[]" value="senderismo"></span>
            <!-- <span id="e_actividades"" class="styerror"></span> -->
        </p>
    </div>
    <div class="btns">
			<a class="btn"  name="alta"  onclick="validate_data()" type="button" value="Alta" id="alta" />Actualizar</a>
	</div>
    <div>
      <?php
            // if ($error_nom != "")
              // 	print ("<SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_nom . "</SPAN>");
         ?> 
    </div>
</form>
</div>
</div>
</div>