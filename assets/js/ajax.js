function shortenurl(load,ready){
	var sendurl = document.getElementById('url').value;
	var sendkey = document.getElementById('keyword').value;
	$('#ref-settings').hide();
	$('#nav-settings').hide();
	$('.options').hide();
	$('#description').html(load);
	$('#button').css('cursor', 'pointer');
	$('#button').prop('disabled', false);
	$('#url').prop('disabled', false);
	$('#url').css('margin-left', '0px');
	$('#button-ic').removeClass('icon-unlink').addClass('icon-spin3 animate-spin');
	$('#button').css('cursor', 'default');
	$('#button').prop('disabled', true);
	$('#url').prop('disabled', true);
	$.ajax({
        url: '/assets/scripts/include/geturl.php',
        data: {url: sendurl, keyword: sendkey},
        dataType: 'JSON',
        type: 'POST',
        success: function(response) {
					geturlResponse(response,ready);
					}
	});
}

function geturlResponse(response,ready) {
	if(response[0].stat == 'success') {
		$('#button').prop('onclick', null).off('click');
		$('#url').css('width', '250px');
		$('#url').val(response[0].input);
		$('#description').css('color', '#cc1cae');
		$('#description').html(ready);
		$('#button-ic').removeClass('icon-spin3 animate-spin').addClass('icon-docs');
		$('#button').attr('data-clipboard-text',response[0].input);
		$('#button').css('cursor', 'pointer');
		$('#button').prop('disabled', false);
		$('#button').click(function() {
			var clipboard = new Clipboard('#button');
			clipboard.on('success', function(e) {
				console.log(e);
			});
			clipboard.on('error', function(e) {
				console.log(e);
			});
		});
		$('.ref-reload').unbind('mouseenter mouseleave');
		$('#ref-reload').css('cursor', 'default');
		$('#ref-reload').prop('disabled', true);
		$('#ref-reload').fadeIn();
		var i = 10;
		var x = setInterval(function() {
			i--;
			$('#button-reload').html(i)
			if (i == 0) {
			clearInterval(x);
			$('#ref-reload').css('cursor', 'pointer');
			$('#ref-reload').prop('disabled', false);
			$('.ref-reload').bind('mouseenter mouseleave');
			$('#button-reload').html('');
			$('#button-reload').addClass('icon-ccw');
			}
		}, 1000);
	}
	if(response[0].stat == 'fail') {
		$('#url').val('');
		$('#url').css('color', '#e00000');
		$('#url').prop('disabled', false);
		$('#url').css('cursor', 'auto');
		$('#button-ic').removeClass('icon-spin3 animate-spin').addClass('icon-unlink');
		$('#button').prop('disabled', false);
		$('#button').css('cursor', 'pointer');
		$('#url').val(response[0].input);
	}
}