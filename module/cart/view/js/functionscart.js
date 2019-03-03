

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
    
    // update qty if product is already present
    for (var i in cart) {
        if(cart[i].Product == name){
            cart[i].Qty = qty;
            showCart();
            saveCart();
            return;
        }
    }
    // create JavaScript Object
    var item = { Product: name,  Price: price, Qty: qty, Total: total }; 
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
        $("#cartBody").html('<p style="text-align:center">Tu Carrito está vacio</p>');
        return;
    }
}

function saveCart() {
    if ( window.localStorage){
        localStorage.cart = JSON.stringify(cart);
    }
}

function showCart() {
   
    if (cart.length == 0) {
        //console.log("length");
        $("#cartBody").html('<p style="text-align:center">Tu Carrito está vacio</p>');
        return;
    }
    
    $("#cartBody").empty();
    
    for (var i in cart) {
        var item = cart[i];
        var row = "<tr><td>" + item.Product + "</td><td id='iprice'>" +
                     item.Price + "</td><td>"+
                     "<input type='number' name='quantity' class='quantity' min='1' max='20' step='1'value='"+item.Qty+"'> </td><td id='cngtotal'>"
                     + item.Total + "€</td><td>"
                     + "<button onclick='deleteItem(" + i + ")'>Delete</button></td></tr>";
        $("#cartBody").append(row);
        
    }
    $(".quantity").on("change", function () {
        item.Qty=$(this).val();
        item.Price=$(this).parent().siblings("#iprice").text();
        item.Total = (item.Qty * item.Price);
        localStorage.setItem("total", item.Total);

        $(this).parent().siblings("#cngtotal").html(localStorage.getItem("total")+"€");
        //console.log(total);
    });
    $("#btnscart").append('<a id="comprarbtn"class="btn">Comprar</a>');
      
}
$(document).ready(function () {
    $("#comprarbtn").on("click", function () {
        if(localStorage.getItem("user")===null){
            loginauto();
        }else{
            ///al controllador a comprar
        }
    })
});