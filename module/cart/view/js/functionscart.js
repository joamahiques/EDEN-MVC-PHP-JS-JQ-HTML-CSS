
var cart = [];

$(function () {
    if (localStorage.cart){
        cart = JSON.parse(localStorage.cart);
        showCart();
    }
});
function addToCart() {
   
    var price = $("#precio").text();
    var name = $("#nombre").text();
    var qty = $("#quantity").val();
    var total = (price*qty);
    //pricetotal=pricetotal+total;

    $(".fa-shopping-cart").children('span').show().html(cart.length);
    // update qty if product is already present
    for (var i in cart) {
        if(cart[i].Home == name){
          cart[i].Qty = parseInt(cart[i].Qty)+parseInt(qty);
          cart[i].Total = parseInt(cart[i].Price)*parseInt(cart[i].Qty)
            showCart();
            saveCart();
            return;
        }
    }
    // create JavaScript Object
    var item = { Home: name,  Price: price, Qty: qty, Total: total }; 
    cart.push(item);
    saveCart();
    showCart();
}

function deleteItem(index){
    cart.splice(index,1); // delete item at index

    showCart();
    saveCart();
    if (cart.length == 0) {
        //console.log("length");
        $("#pricetotal").html('0');
        $("#cartBody").html('<p style="text-align:center">Tu Carrito está vacio</p>');
        $(".fa-shopping-cart").children('span').hide();
        return;
    }
    
}
/// localstorage
function saveCart() {
    if ( window.localStorage){
        localStorage.cart = JSON.stringify(cart);
    }
}


function showCart() {
    var pricetotal=0;
   $(".fa-shopping-cart").children('span').show().html(cart.length);

    if (cart.length == 0) {
        //console.log("length");
        var pricetotal=0;
        $("#pricetotal").html('0');
        $("#cartBody").html('<p style="text-align:center">Tu Carrito está vacio</p>');
        $(".fa-shopping-cart").children('span').hide();
        return;
    }
    
    $("#cartBody").empty();
    
    for (var i in cart) {
        var item = cart[i];
        var row = "<tr><td id='name'>" + item.Home + "</td><td id='iprice'>" +
                     item.Price + "</td><td>"+
                     "<input type='number' id='"+item.Home+"' name='quantity' class='quantity' min='1' max='20' step='1'value='"+item.Qty+"'> </td>"+
                     "<td><button onclick='deleteItem(" + i + ")'><i class='fas fa-check'></i></button></td>"+
                     "<td class='cngtotal'>" +item.Total+ "</td><tr>";
        $("#cartBody").append(row);
        pricetotal=pricetotal+parseInt(item.Total);
        $("#pricetotal").html(pricetotal);

    }
      
}
///change quantity input number
$(document).on('change','.quantity', function() { 
    
    //var changeqty = JSON.parse(localStorage.cart); 
    var nqty = $(this).val();

    for (var i in cart) {
        //console.log(cart[i].Home); 
        if(cart[i].Home ===  $(this).attr("id").substring()){
           // console.log(cart[i].Home); 
            cart[i].Qty = nqty;
            cart[i].Total = cart[i].Qty*cart[i].Price;
            //console.log(cart[i].Total);
            showCart();
            saveCart();
            return;
        }
    }
});

function modalcart(){
    $("#details_compra").show();

    $("#confirmcompra").dialog({
        open: function() {
            
        },
        title:"Confirmar compra",
        //width: 500, 
        height: 570, 
        resizable: "false",
        modal: "true", 
        buttons: {
            
            Comprar: function(){ $(this).dialog("close");},//confirmarcompra
            SeguirComprando: function () {////seguir comprando
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

$(document).ready(function () {
    $("#comprarbtn").on("click", function () {
        if(localStorage.getItem("user")===null){
            loginauto();
        }else{
            ///al controllador a comprar
            console.log(cart);
			$.ajax({
				type : 'POST',
				url  : 'module/cart/controller/controller-cart.php?&op=insertcart',
                data: {
                cart: cart
                },
				
			})
			.done(function(data){
                console.log(data);
                /////////confimr compra
                $.ajax({
                    type : 'POST',
                    url  : 'module/cart/controller/controller-cart.php?&op=readcart',///leemos ya de bbdd con los precios reales
                    dataType: "json",
                    
                    
                })
                .done(function(data){
                    var pricetotalf=0;
                    console.log('YUJJEE');
                    console.log(data);
                    for (var i in data) {
                        var item = data[i];
                        var row = "<tr><td style='width: 30%'>" + item.nombre + "</td>"+
                                    "<td>" + item.precio + "</td>"+
                                     "<td>"+item.cantidad+"</td>"+
                                     "<td>" +item.total+ "</td><tr>";
                        $("#contentcompra").append(row);
                        pricetotalf=pricetotalf+parseInt(item.total);
                        console.log(pricetotalf);
                        setTimeout(function(){
                        $("#pricetotalfinal").html(pricetotalf);}, 500);
                
                    }
                    modalcart();
                  
                })
                .fail(function(data){
                    console.log(data);

                })
            })
            .fail(function(data){
                console.log(data);
            })
        }
    })

    
});