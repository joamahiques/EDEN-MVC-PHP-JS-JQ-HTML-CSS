
///////////////////////////////FAVORITOS

console.log("Favorites");   

$(document).ready(function () {

   
    setTimeout(function(){
    ////leemos favoritos para que aparezcan los corazones pintados
    if(localStorage.getItem("user")!=null){
        $.ajax({
                
            type: "GET",
            dataType: "json",
            url: "components/favorites/controller/controllerfavorites.php?op=readfavorites",
        })
        .done(function( data, textStatus, jqXHR ) {
        //console.log( data );
            $.each(data, function(i, item) {///bucle para buscar los elementos que coincidan con los id de favoritos y los pintamos
                // console.log( item.nombre );
                var id= document.getElementById(item.nombre);
                //var id2= $('"#'+item.nombre+'"')
                // console.log( id );
                //console.log( id2 );
                $(id).children("i").addClass("fas");    
            });

        });  
    }
///añadir o borrar de favoritos
    $(".corazon").on("click", function () {//cuando hacemos clic en el corazón

        if(localStorage.getItem("user")===null){
            
                    var $form_modal = $('.cd-user-modal'),
                    $form_login = $form_modal.find('#cd-login'),
                    $form_signup = $form_modal.find('#cd-signup'),
                    $form_forgot_password = $form_modal.find('#cd-reset-password'),
                    $form_modal_tab = $('.cd-switcher'),
                    $tab_login = $form_modal_tab.children('li').eq(0).children('a'),
                    $tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
                    $forgot_password_link = $form_login.find('.cd-form-bottom-message a'),
                    $back_to_login_link = $form_forgot_password.find('.cd-form-bottom-message a'),
                    $main_nav = $('.main-nav');
                    
                    $("#formregister")[0].reset();
                    $("#formlogin")[0].reset();
                    $(".has-error").removeClass('has-error');
                    $('.is-visible').removeClass('is-visible');
                    $form_modal.addClass('is-visible');	
                    //show the selected form
                    ( $(event.target).is('.cd-signup') ) ? signup_selected() : login_selected();
                    function login_selected(){
                        $form_login.addClass('is-selected');
                        $form_signup.removeClass('is-selected');
                        $form_forgot_password.removeClass('is-selected');
                        $tab_login.addClass('selected');
                        $tab_signup.removeClass('selected');
                    }
                
                    function signup_selected(){
                        $form_login.removeClass('is-selected');
                        $form_signup.addClass('is-selected');
                        $form_forgot_password.removeClass('is-selected');
                        $tab_login.removeClass('selected');
                        $tab_signup.addClass('selected');
                    }
        }else{
   
                    var id = this.getAttribute('id');
                // console.log(id);
                    
                    if($(this).children("i").hasClass("fas")){///si está en favoritos, borralo
                        
                        $(this).children("i").removeClass("fas");//cambiamos la clase al corazón para que se despinte
                            
                            $.ajax({
                            
                                type: "GET",
                                dataType: "json",
                                url: "components/favorites/controller/controllerfavorites.php?op=favoritesDelete&id=" + id+"&email="+localStorage.getItem("email"),
                            })
                            
                            .done(function( data, textStatus, jqXHR ) {
                            // console.log("si es favorito22");
                                
                            });
                    
                    }else{ //si no está en favoritos, agrégalo
                        
                        $(this).children("i").addClass("fas");///añadimos la clase FAS, corazón pintado
                        console.log(localStorage.getItem("email"));
                            $.ajax({
                                    
                                type: "GET",
                                dataType: "json",
                                url: "components/favorites/controller/controllerfavorites.php?op=favorites&id=" + id+"&email="+localStorage.getItem("email"),
                            })
                            .done(function( data, textStatus, jqXHR ) {
                                
                            
                            });
                    }//end if
        }//end if
    });

}, 500);
});