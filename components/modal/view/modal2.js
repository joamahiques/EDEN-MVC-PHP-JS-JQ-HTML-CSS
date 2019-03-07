$(document).ready(function () {
    //console.log("modaljs");
   
    
    $('body').on("click",".read", function () {
        var id = this.getAttribute('id');
        
        $.ajax({
            // En data puedes utilizar un objeto JSON, un array o un query string
            //data: {"parametro1" : "valor1"},
            type: "GET",//Cambiar a type: POST si necesario
            // Formato
            dataType: "json",
            // URL
           url: "components/modal/controller/controllerModal.php?op=read_modal&modal=" + id,
        })
         .done(function( data) {
                 //console.log( "La solicitud se ha completado correctamente." );
                 //console.log( data );
                 $('#modalcontent').empty();
                 $('#nombre').html(data.nombre);
                 $('<div></div>').attr('id','Div1').appendTo('#modalcontent');
                 $('<div></div>').attr('id','Div2').appendTo('#modalcontent');
                 $('<div></div>').attr('id','preciocasa').appendTo('#modalcontent');
                
                 $("#Div1").html(
                            '<br><span>Localidad:   <span id="localidad">'+data.localidad+'</span></span></br>'+
                            '<br><span>Provincia:   <span id="prov">'+data.provincia+'</span></span></br>'+
                            '<br><span>Capacidad Total:     <span id="capacidad">'+data.capacidad+'</span></span></br>'+
                            '<br><span>Propietario:     <span id="nombrePropietario">'+data.nombrePropietario+'</span></span></br>'+
                            '<br><span>DNI:     <span id="dni">'+data.dni+'</span></span></br>'+
                            '<br><span>Teléfono:    <span id="telefono">'+data.telefono+'</span></span></br>'+
                            '<br><span>Email:     <span id="email">'+data.email+'</span></span></br>'
                 )
                 $("#Div2").html(
                            '<br><span>Num Habitaciones:     <span id="habitaciones">'+data.habitaciones+'</span></span></br>'+
                            '<br><span>Reserva Completa:     <span id="entera">'+data.entera+'</span></span></br>'+
                            '<br><span>Servicios:     <span id="servicios">'+data.servicios+'</span></span></br>'+
                            '<br><span>Actividades:     <span id="actividades">'+data.actividades+'</span></span></br>'+
                            '<br><span>Fecha de contrucción:     <span id="fechacons">'+data.fechacons+'</span></span></br>'+
                            '<br><span>Años de la casa:     <span id="edadcasa">'+data.edadcasa+'</span></span></br>'+
                            '<br><span>Fecha de alta:     <span id="fecha">'+data.fecha+'</span></span></br>'
                 )
                 $("#preciocasa").html('<br><span>Precio:     <span id="precio">'+data.precionoche+'</span></span></br>')

                modal(data.nombre);
            
         })
         .fail(function( jqXHR, textStatus, errorThrown ) {
             if ( console && console.log ) {
                 console.log( "La solicitud a fallado: " +  textStatus);
             }
        });
        
    });
 });

function modal(data){
                $("#details_home").show();

                $("#home_modal").dialog({
                    open: function() {
                        $(".ui-dialog-buttonset").prepend("<span class='ui-button ' >Nº Noches:<input type='number' name='quantity' id='quantity' class='quantity' min='1' max='20' step='1'value='1'></span>");
                    },
                    title:data,
                    //width: 500, 
                    height: 570, 
                    resizable: "false",
                    modal: "true", 
                    buttons: {
                        
                        Reservar: function(){ addToCart();$(this).dialog("close");},//$(this).dialog("close")
                        Ok: function () {
                            $(this).dialog("close");
                        }
                    },
                    show: {
                        effect: "fade",
                        duration: 1000
                    },
                    hide: {
                        effect: "fade",
                        duration: 1000
                    }
                });
                
}