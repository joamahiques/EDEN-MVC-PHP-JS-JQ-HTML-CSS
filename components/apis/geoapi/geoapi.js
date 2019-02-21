$(document).ready(function () {

    ////////////////////// API SELECT PROVINCIAS GEOAPI
    $.ajax({
                
        type: "GET",
       // dataType: "Json",
        url:"http://apiv1.geoapi.es/provincias?type=JSON&key="+keygeo+"&sandbox=0",
    })
    .done(function( data, textStatus, jqXHR ) {
        //console.log(data);
            $('#provinciaini').empty();
            //console.log(data);
            $("#provinciaini").append('<option disabled selected>Provincia</option>');
            $.each(data.data, function(index, list) {
                $("#provinciaini").append(
                     ' <option value="'+list.PRO+'">'+list.PRO+'</option> '
                
                    ) 
         
             });
        
    })// end done
    .fail(function( data, textStatus, jqXHR ) {
        console.log("HELLOOOOO FAIL"+data);
    })

   
});