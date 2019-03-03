<div id="contenido" class="content">
    <div class="container_12">
    	<div class="flex">
                <h3>LISTA DE CASAS</h3>
                <a class="btn1" href="index.php?page=controller_homes&op=create">Añadir Casa</a>
    	</div>
    	<div class="list">
    		<table width=100% id="table_crud">
                <thead>
                    <tr>
                        <td><b>Nombre</b></th> 
                        <td><b>Localidad</b></th>
                        <td><b>Provincia</b></th>
                        <td><b>Capacidad</b></th>
                        <td><b>Precio</b></th>
                    <th class="td1"><b>Accion</b></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td><br>NO HAY NINGUNA CASA</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) { //bucle para pintar todos las casas de la tabla
                       		echo '<tr>';
                    	   	echo '<td><br>'. $row['nombre'] . '</br></td>';
                            echo '<td><br>'. $row['localidad'] . '</br></td>';
                            echo '<td><br>'. $row['provincia'] . '</br></td>';
                            echo '<td><br>'. $row['capacidad'] . '</br></td>';
                            echo '<td><br>'. $row['precionoche'] . '€</br></td>';
                            echo '<td><br>';
                    	   	echo "<a  class='read'  id='".$row['nombre']."'>Read</a>";
                    	   	echo '&nbsp;';
                    	   	echo '<a class="btn" href="index.php?page=controller_homes&op=update&id='.$row['nombre'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="btn" href="index.php?page=controller_homes&op=delete&id='.$row['nombre'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </tbody>
            </table>
            
        </div>
        <div class="flex">
                <a class="btn1" href="index.php?page=homepage">INICIO</a>
                <a class="btn1" href="index.php?page=controller_homes&op=deleteall">Borrar todo</a>
    	</div>
    </div>
</div>

<!-- modal window -->
<section id="home_modal">
    <div id="details_home" hidden>
        <div id="details">
            <div id="container">
                <div class="grid2">
                    <div class="text1"><span id="nombre"></span></div> 
                    <div class="flex2" id="modalcontent">
                        <!-- Content -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>
   
</section>
