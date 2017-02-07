jQuery( document ).ready(function($) {		

	$('select').select2({
		theme: "bootstrap"
	});
	$('.q-item button').on('click', function(){
		$('.q-item').removeClass('show');
		$(this).parent('.q-item').addClass('show');
	});
	
	// SLIDE PUSH MOBILE MENU
	var showRightPush = document.getElementById( 'navbar-toggle' ),
		menuRight = document.getElementById( 'mobilemenu' ),
		body = document.body;
	showRightPush.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( body, 'cbp-spmenu-push-toleft' );
		classie.toggle( menuRight, 'cbp-spmenu-open' );
	};
	
	new WOW().init();
});