<div id="contenido" class="content">
    <div class="container_12">
        <div class="grid_12">            
            
        <br>Ordenadas por provincia, localidad y capacidad</br>
       
            <div id="inicio">
    	
                <?php                
                    //leemos y pintamos casas
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="3">NO HAY NINGUNA CASA</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) { //bucle para pintar todos las casas de la tabla
                            echo '<div class="grid">';
                            echo '<div class="text1 flex">'. $row['nombre'] . '<a class="corazon" id="'.$row['nombre'].'"><i class="far fa-heart"></i></a></div>';
                            echo '<br>Localidad:  '. $row['localidad'] . '</br>';
                            echo '<br id="jolo">Provincia:  '. $row['provincia'] . '</br>';
                            echo '<br>Capacidad:  '. $row['capacidad'] . '</br>';
                            echo '<br>Precio Noche:  '. $row['precionoche'] . '</br>';
                            echo '</br>';
                            echo '</br>';
                            // echo '<a class="btn1" href="index.php?page=controller_homes&op=read&id='.$row['nombre'].'">READ MORE</a>';
                            echo "<a  class='read'  id='".$row['nombre']."'>READ MORE</a>";
                            echo '&nbsp;';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
            <div class='club'>
                <h2>Ofertas cerca de tí</h2>
                <div id ="inicioclub"></div>
            </div>
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
