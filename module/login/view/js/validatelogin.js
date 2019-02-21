function valide_login(){
	var mailp = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	//console.log("valide_login");

	//Mail
	if(document.formlogin.mail.value.length === 0){
		//document.getElementById('e_mail').innerHTML = "Tienes que escribir el mail";
		$('#signin-email').addClass('has-error').next('span').addClass('is-visible').html("EL MAIL ES REQUERIDO");
		document.formlogin.mail.focus();
		return 0;
	}
	$('#signin-email').removeClass('has-error').next('span').removeClass('is-visible');

	if(!mailp.test(document.formlogin.mail.value)){
		//document.getElementById('e_mail').innerHTML = "El formato del mail es invalido";
		$('#signin-email').addClass('has-error').next('span').addClass('is-visible').html("EL FORMATO DE MAIL NO ES VÁLIDO");
		document.formlogin.mail.focus();
		return 0;
	}
	$('#signin-email').removeClass('has-error').next('span').removeClass('is-visible');
	//document.getElementById('e_mail').innerHTML = "";
	//Password
	if(document.formlogin.password.value.length === 0){
		console.log("pass");
		$('#signin-password').addClass('has-error').next().next('span').addClass('is-visible').html("LA CONTRASEÑA ES REQUERIDA");
		document.formlogin.password.focus();
		return 0;
	}
	//document.getElementById('e_password').innerHTML = "";
	$('#signin-password').removeClass('has-error').next().next('span').removeClass('is-visible');

	//document.formlogin.click();//click
	//document.formlogin.action="index.php?page=controller_login&op=list_login";
	
}

function valide_register(){
	var mailp = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	
	console.log("valide_register");
	//User
	if(document.formregister.user.value.length === 0){
		$('#signup-username').addClass('has-error').next('span').addClass('is-visible').html("EL USER ES REQUERIDO");;
		document.formregister.user.focus();
		return 0;
	}
	
	$('#signup-username').removeClass('has-error').next('span').removeClass('is-visible');

	//Mail
	if(document.formregister.mail.value.length === 0){
		$('#signup-email').addClass('has-error').next('span').addClass('is-visible').html("EL MAIL ES REQUERIDO");

		document.formregister.mail.focus();
		return 0;
	}
	$('#signup-email').removeClass('has-error').next('span').removeClass('is-visible');

	if(!mailp.test(document.formregister.mail.value)){
		$('#signup-email').addClass('has-error').next('span').addClass('is-visible').html("FORMATO DE MAIL NO VÁLIDO");
		document.formregister.mail.focus();
		return 0;
	}
	$('#signup-email').removeClass('has-error').next('span').removeClass('is-visible');

	//Password
	if(document.formregister.password.value.length === 0){
		$('#signup-password').addClass('has-error').next().next('span').addClass('is-visible').html("LA CONTRASEÑA ES REQUERIDA");
		document.formregister.password.focus();
		return 0;
	}
	$('#signup-password').removeClass('has-error').next().next('span').removeClass('is-visible');

	if(document.formregister.password.value.length < 6){
		$('#signup-password').addClass('has-error').next().next('span').addClass('is-visible').html("MÁS DE 6 CARACTERES");
		document.formregister.password.focus();
		return 0;
	}
	$('#signup-password').removeClass('has-error').next().next('span').removeClass('is-visible');

	//Repeat Password
	if(document.formregister.rpassword.value.length === 0){
		$('#signup-rpassword').addClass('has-error').next().next('span').addClass('is-visible').html("LA CONTRASEÑA ES REQUERIDA");
		document.formregister.rpassword.focus();
		return 0;
	}
	$('#signup-rpassword').removeClass('has-error').next().next('span').removeClass('is-visible');

	if(document.formregister.rpassword.value != document.formregister.password.value){
		$('#signup-rpassword').addClass('has-error').next().next('span').addClass('is-visible').html("LAS CONTRASEÑAS NO SON IGUALES");
		document.formregister.rpassword.focus();
		return 0;
	}
	$('#signup-rpassword').removeClass('has-error').next().next('span').removeClass('is-visible');

	//document.formregister.click();
	//document.formregister.action="index.php?page=controller_login&op=list_register";
}
//jQuery(document).ready(function($){
$(document).ready(function(){
	
	$("#formlogin").submit(function (e) {
		console.log("valide_login11");
		e.preventDefault();
		if(valide_login() != 0){
			var data = $("#formlogin").serialize();
			console.log(data);
			// $.ajax({
			// 	type : 'POST',
			// 	url  : 'module/login/controller/controller_login.php?&op=login&' + data,
			// 	data : data,
			// 	beforeSend: function(){	
			// 		$("#error_login").fadeOut();
			// 	},
			// 	success: function(response){			
			//    		console.log(response)		
			// 		if(response=="ok"){
			// 			setTimeout(' window.location.href = "index.php?page=controller_home&op=list"; ',1000);
			// 		}else if (response=="okay") {
			// 			InsertCompra(); //en cart.js
			// 		}else{
			// 			$("#error_login").fadeIn(1000, function(){						
			// 				$("#error_login").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
			// 			});
			// 		}
			// 	}
			// });
		}
	});

	$("#formregister").submit(function (e) {
		console.log("valide_register11");
		e.preventDefault();
		if (valide_register() != 0) {
			var data = $("#formregister").serialize();
			console.log(data);
			$.ajax({
				type : 'POST',
				url  : 'module/login/controller/controller-login.php?&op=register&' + data,
				data : data,
				beforeSend: function(){	
					console.log(data)
					$("#error_register").fadeOut();
				}
			})
				.done(function( response, textStatus, jqXHR ) {
					console.log(response);

					
					if(response==="ok"){
						console.log("OOKK");
						setTimeout(' window.location.href = "index.php?page=controllerhome&op=list"; ',1000);
					}else if (response=="okay") {
						alert("Debes realizar login para completar tu compra");
						setTimeout(' window.location.href = window.location.href; ',1000);
					}else{
						console.log("error-register fallo validateloginphp");
						$("#error_register").fadeIn(1000, function(){						
							$("#error_register").addClass('has-error').children('span').addClass('is-visible').html(response);

						});
					}
					 })
				.fail(function( response, textStatus, jqXHR ) {
					
					console.log("FALLOOOO");
				})
			// 	success: function(response){						
			// 		if(response==="ok"){
			// 			setTimeout(' window.location.href = "index.php?page=controller_home&op=list"; ',1000);
			// 		}else if (response=="okay") {
			// 			alert("Debes realizar login para completar tu compra");
			// 			setTimeout(' window.location.href = window.location.href; ',1000);
			// 		}else{
			// 			$("#error_register").fadeIn(1000, function(){						
			// 				$("#error_register").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'</div>');
			// 			});
			// 		}
			//   }
		
		}
	});
//});

//////////////////////////////

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

	//open modal
	$main_nav.on('click', function(event){
		console.log("modal");
		
			console.log("modal2");
			//limpiar formularios antes de abrir
			$("#formregister")[0].reset();
			$("#formlogin")[0].reset();
			$(".has-error").removeClass('has-error');
			$('.is-visible').removeClass('is-visible');
			$form_modal.addClass('is-visible');	
			//show the selected form
			( $(event.target).is('.cd-signup') ) ? signup_selected() : login_selected();
		

	});

	//close modal
	$('.cd-user-modal').on('click', function(event){
		if( $(event.target).is($form_modal) || $(event.target).is('.cd-close-form') ) {
			$form_modal.removeClass('is-visible');
		}	
	});
	//close modal when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$form_modal.removeClass('is-visible');
	    }
	});

	

	//switch from a tab to another
	$form_modal_tab.on('click', function(event) {
		event.preventDefault();
		( $(event.target).is( $tab_login ) ) ? login_selected() : signup_selected();
	});

	//hide or show password
	$('.hide-password').on('click', function(){
		var $this= $(this),
			$password_field = $this.prev('input');
		
		( 'password' == $password_field.attr('type') ) ? $password_field.attr('type', 'text') : $password_field.attr('type', 'password');
		( 'Hide' == $this.text() ) ? $this.text('Show') : $this.text('Hide');
		//focus and move cursor to the end of input field
		$password_field.putCursorAtEnd();
	});

	//show forgot-password form 
	$forgot_password_link.on('click', function(event){
		event.preventDefault();
		forgot_password_selected();
	});

	//back to login from the forgot-password form
	$back_to_login_link.on('click', function(event){
		event.preventDefault();
		login_selected();
	});

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

	function forgot_password_selected(){
		$form_login.removeClass('is-selected');
		$form_signup.removeClass('is-selected');
		$form_forgot_password.addClass('is-selected');
	}

	//REMOVE THIS - it's just to show error messages 
	$form_login.find('input[type="submit"]').on('click', function(event){
		event.preventDefault();
		$form_login.find('input[type="email"]').toggleClass('has-error').next('span').toggleClass('is-visible');
	});
	$form_signup.find('input[type="submit"]').on('click', function(event){
		event.preventDefault();
		$form_signup.find('input[type="email"]').toggleClass('has-error').next('span').toggleClass('is-visible');
	});


	//IE9 placeholder fallback
	//credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
	// if(!Modernizr.input.placeholder){
	// 	$('[placeholder]').focus(function() {
	// 		var input = $(this);
	// 		if (input.val() == input.attr('placeholder')) {
	// 			input.val('');
	// 	  	}
	// 	}).blur(function() {
	// 	 	var input = $(this);
	// 	  	if (input.val() == '' || input.val() == input.attr('placeholder')) {
	// 			input.val(input.attr('placeholder'));
	// 	  	}
	// 	}).blur();
	// 	$('[placeholder]').parents('form').submit(function() {
	// 	  	$(this).find('[placeholder]').each(function() {
	// 			var input = $(this);
	// 			if (input.val() == input.attr('placeholder')) {
	// 		 		input.val('');
	// 			}
	// 	  	})
	// 	});
	// }

});


//credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
jQuery.fn.putCursorAtEnd = function() {
	return this.each(function() {
    	// If this function exists...
    	if (this.setSelectionRange) {
      		// ... then use it (Doesn't work in IE)
      		// Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
      		var len = $(this).val().length * 2;
      		this.setSelectionRange(len, len);
    	} else {
    		// ... otherwise replace the contents with itself
    		// (Doesn't work in Google Chrome)
      		$(this).val($(this).val());
    	}
	});
};