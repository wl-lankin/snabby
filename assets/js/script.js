$(document).ready(function() {
	$('.main-content').hide(0).delay(200).fadeIn(1500)
	document.addEventListener('touchstart', function(){}, true);
	$('#button').prop('disabled', true);
	$('#button').css('cursor', 'default');
	$('#ref-reload').hide();
	$('#url').on('input', function() {
		$('#button').css('background', '#cc1cae');
		$('#button-ic').css('color', '#ffffff');
		$('#button').prop('disabled', false);
		$('#button').css('cursor', 'pointer');
		if( !$(this).val() ) {
			$('#button').prop('disabled', true);
			$('#button').css('cursor', 'default');
			$('#button').css('background', '#ffffff');
			$('#button-ic').css('color', '#cc1cae');
		}
	});
	$('.nav-settings, .ref-settings').click(function() {
		$('.nav-settings, .ref-settings').toggleClass('nav-settings-highlight');
		$('.options').fadeToggle('slow');
	});
	$('#ref-reload').click(function() {
		//event.preventDefault();
		$('.main-content').fadeOut(500, newshort);
	});
	function newshort() {
		location.reload();
	}
	
});