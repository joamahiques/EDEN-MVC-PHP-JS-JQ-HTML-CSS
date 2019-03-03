
$(document).ready(function(){
    

///////////////  AJAX FOR ALL SEARCH
     function ajaxForSearch(durl) {
         var url=durl;
         //console.log(url);
         $.ajax({
            
            type: "GET",
            dataType: "json",
            url:url,
        })
        .done(function( data, textStatus, jqXHR ) {
            //console.log(data.length);
           if(data.length==0){
                $('#inicioshop').empty();
                $('<div><h3>Su búsqueda no dió resultados.</h3></div>').attr('id','list').appendTo('#inicioshop');
           }else{
                $('#inicioshop').empty();
                $.each(data, function(index, list) {
                    // console.log(data);
                    // console.log(index);
                    $('#inicioshop').append(
                        '<div class="grid">'+ 
                        '<div class="text1 flex">'+ list.nombre + '<a class="corazon" id="'+list.nombre+'"><i class="far fa-heart" ></i></a></div>'+
                        '<br><span>Localidad:   <span id="localidad">'+list.localidad+'</span></span></br>'+
                        '<br><span>Provincia:   <span id="prov">'+list.provincia+'</span></span></br>'+
                        '<br><span>Capacidad Total:     <span id="capacidad">'+list.capacidad+'</span></span></br>'+
                        '<div class="fright">'+
                        '<a  class="read"  id="'+list.nombre+'">READ MORE</a>'+
                        '</div>'+
                        '</div>'
                        
                    ) 
                });
               
            }
        })// end done
        .fail(function( data, textStatus, jqXHR ) {
            console.log("HELLOOOOO FAIL"+data);
        })

     }

/////  THE RESULTS
     $('#btnshop').on('click', function () {
        sessionStorage.setItem('provincia', 'null'); // save data
        sessionStorage.setItem('local', 'null'); // save data
        sessionStorage.setItem('val', 'null'); // save data

     });
    if (document.getElementById('inicioshop')) {
     
        
            var drop=sessionStorage.getItem('provincia');
            var drop1= sessionStorage.getItem('local'); 
            var drop2= sessionStorage.getItem('val'); 
            // console.log(drop+" provincia");
            // console.log(drop1+" localidad");
            // console.log(drop2+" valor");
            // console.log(drop2.length);

        // ajaxForSearch("module/shop/controller/controllershop.php?op=list");
            if ((!drop && !drop1 && !drop2) || (drop==='null' && drop1==='null' && drop2==='null')){
                console.log("vengo de menú");
                ajaxForSearch("module/shop/controller/controllershop.php?op=list");
            }else if((drop1==="false") && (drop2.length==0)){
                console.log("por provincia");
                ajaxForSearch("module/shop/controller/controllershop.php?op=searchProvince1&provi=" + drop);
                
            }else if((drop1!="false") && (drop2.length==0) ){
                console.log("por provincia i localidad");
                ajaxForSearch("module/shop/controller/controllershop.php?op=searchPorYLoc&provi=" + drop + '&local=' + drop1);
                
            }else if ((drop.length > 4)&&(drop1!="false") &&(drop2.length > 1)){
                console.log("busqueda completa");
                ajaxForSearch("module/shop/controller/controllershop.php?op=searchComplete&provi=" + drop + '&local=' + drop1 + '&val=' + drop2);
                
            }else if((drop=="false"||drop==0) &&(drop1=="false"||drop1==0) && (drop2.length > 0)){
                console.log("busqueda solo por valor del autocomplete");
                ajaxForSearch("module/shop/controller/controllershop.php?op=search&val=" + drop2 );
            }
    }//end if

   
});
