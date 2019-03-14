$(document).ready(function(){
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	///my profile
	// $('#myprofile').html(' <h2 class="flex1"> My Profile </h2>');
	
	
	
	//change tabs
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value  
		$(activeTab).fadeIn(); //Fade in the active ID content

		if (activeTab==='#myfavorites'){
			$('#myfavorites').html(' <h2 class="flex1"> My Favorites </h2>');
		}
		if (activeTab==='#mypurchases'){
			$('#mypurchases').html(' <h2 class="flex1"> My Purchases </h2><p>Hello hello my name is Federico</p>');
		}
		
	});

})