$(document).ready(function () {
    
    $('#table_crud').DataTable();
    //console.log("functions homes")
    
    ////// API SELECT PROVINCIAS CREATE
    $.ajax({
                
        type: "GET",
       // dataType: "Json",
        url:"http://apiv1.geoapi.es/provincias?CPRO=22&CMUM=907&type=JSON&key=3ad4830012c35080613cd2d7c035c55a191d137e22977496db224724cfd53ad0&sandbox=0",
    })
    .done(function( data, textStatus, jqXHR ) {
        //console.log(data);
            $('#provincia').empty();
            //console.log(data);
            $("#provincia").append('<option disabled selected>Provincia</option>');
            $.each(data.data, function(index, list) {
                $("#provincia").append(
                     ' <option value="'+list.PRO+'">'+list.PRO+'</option> '
                
                    ) 
         
             });
        
    })// end done
    .fail(function( data, textStatus, jqXHR ) {
        console.log("HELLOOOOO FAIL"+data);
    })


    

});

