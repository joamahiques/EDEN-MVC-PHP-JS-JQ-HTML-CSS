
///FUNCTION FOR EXTERN VARIABLES
function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        if(pair[0] == variable) {
            return pair[1];
        }
    }
    return false;
 }

 ///km aleatorios entre 2 numeros
 function numeroAleatorio(min, max) {
    var num=Math.round(Math.random() * (max - min) + min);
    //console.log(num);
    return num;
    }

$(document).ready(function(){
    
    // function datePic() {
       
    $("#datepicker").datepicker({
            firstDay: 1,
            language: "es",
            dateFormat: 'dd/mm/yy', 
            changeMonth: true, 
            changeYear: true, 
            maxDate: "+0M, +0D",
            yearRange: '1890:2050',
            onSelect: function(value, ui) {
        }
    });
    $("#datepicker2").datepicker({
            firstDay: 1,
            language: "es",
            dateFormat: 'dd/mm/yy', 
            changeMonth: true, 
            changeYear: true, 
            maxDate: "+0M, +0D",
            yearRange: '1990:2050',
            showButtonPanel: true,
            onSelect: function(selectedDate) {
        }
    });



//////////    TOASTR
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "show",
    "hideMethod": "fadeOut"
  }
/////////// Pintar en el menú el profile
  if (document.getElementById('btnprofile')){
    $('#menuprofile').prepend(localStorage.getItem("user"));
    $('#avatar').attr("src", localStorage.getItem("avatar"));
    console.log(localStorage.getItem("avatar"));
    //   console.log("profile");
    //   console.log(localStorage.getItem("user"));
      $('#menuprofile').on('click', function(){
            $('#submenu').toggle( "slow" );
      })
      $('#contenido').on('click', function(){
             $('#submenu').fadeOut( "slow" );
      })
  }
});/////////ebd ready
