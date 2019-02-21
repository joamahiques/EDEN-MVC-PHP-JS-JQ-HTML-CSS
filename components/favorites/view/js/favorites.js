
///////////////////////////////FAVORITOS

console.log("Favorites");   

$(document).ready(function () {
   
    setTimeout(function(){
    ////leemos favoritos para que aparezcan los corazones pintados 
        $.ajax({
                
            type: "GET",
            dataType: "json",
            url: "components/favorites/controller/controllerfavorites.php?op=readfavorites" 
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
    
    
///añadir o borrar de favoritos
    $(".corazon").on("click", function () {//cuando hacemos clic en el corazón
   
        var id = this.getAttribute('id');
    // console.log(id);
        
        if($(this).children("i").hasClass("fas")){///si está en favoritos, borralo
            
            $(this).children("i").removeClass("fas");//cambiamos la clase al corazón para que se despinte
        
                $.ajax({
                
                    type: "GET",
                    dataType: "json",
                    url: "components/favorites/controller/controllerfavorites.php?op=favoritesDelete&id=" + id,
                })
                
                .done(function( data, textStatus, jqXHR ) {
                // console.log("si es favorito22");
                    
                });
        
        }else{ //si no está en favoritos, agrégalo
            
            $(this).children("i").addClass("fas");///añadimos la clase FAS, corazón pintado
                
                $.ajax({
                        
                    type: "GET",
                    dataType: "json",
                    url: "components/favorites/controller/controllerfavorites.php?op=favorites&id=" + id,
                })
                .done(function( data, textStatus, jqXHR ) {
                    
                
                });
        }//end if
    });
}, 500);
});