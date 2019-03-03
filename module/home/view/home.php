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

<!-- LOGIN  -->
<!-- <div class="cd-user-modal"> this is the entire modal form, including the background -->
    <!-- <div class="cd-user-modal-container"> this is the container wrapper -->
        <!-- <ul class="cd-switcher">
            <li><a href="#0">Sign in</a></li>
            <li><a href="#0">New account</a></li>
        </ul> -->

        <!-- <div id="cd-login"> log in form -->
            <!-- <form class="cd-form" id="formlogin" name="formlogin">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="signin-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signin-email" type="text" name="mail" placeholder="E-mail">
                    <span class="cd-error-message"></span>
                    <span class="cd-error-message"></span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input class="full-width has-padding has-border" id="signin-password" type="text" name="password"  placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message"></span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="remember-me" checked>
                    <label for="remember-me">Remember me</label>
                </p>

                <p class="fieldset">
                    <button type="submit" class="full-width">Login</button> -->
                    <!-- <input class="full-width" type="submit" value="Login"></button> -->
                <!-- </p>
            </form>
            
            <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p> -->
            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        <!-- </div> cd-login -->

        <!-- <div id="cd-signup"> sign up form -->
            <!-- <form class="cd-form" name="formregister" id="formregister">
                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">Username</label>
                    <input class="full-width has-padding has-border" id="signup-username" name="user"type="text" placeholder="Username">
                    <span class="cd-error-message"></span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signup-email" name="mail" type="text" placeholder="E-mail">
                    <span class="cd-error-message"></span>
                    <span id="error_register"><span class="cd-error-message"></span></span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Password</label>
                    <input class="full-width has-padding has-border" id="signup-password" name="password" type="text"  placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message"></span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-rpassword">Repeat Password</label>
                    <input class="full-width has-padding has-border" name="rpassword" id="signup-password" type="text"  placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message"></span>
                </p>
                
                <p class="fieldset">
                    <input type="checkbox" id="accept-terms">
                    <span class="cd-error-message"></span>
                    <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                </p>

                <p class="fieldset">
                <button type="submit" class="full-width">Create account</button> -->
                    <!-- <input class="full-width has-padding" type="submit" value="Create account"> -->
                <!-- </p>
            </form> -->

            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        <!-- </div> cd-signup -->

        <!-- <div id="cd-reset-password"> reset password form -->
            <!-- <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p> -->

            <!-- <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form> -->

            <!-- <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p> -->
        <!-- </div> cd-reset-password -->
        <!-- <a href="#0" class="cd-close-form">Close</a> -->
    <!-- </div> cd-user-modal-container -->
<!-- </div> cd-user-modal -->