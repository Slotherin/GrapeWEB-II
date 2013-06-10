$(document).ready(function() {
	
	$(document).on('click', '#login', function() {
		$.post('post/index', {
			'process': 'do_login',
			'username': $('#username').val(), 
			'password': $('#password').val()
		}, function(data) {
			if (data.indexOf('Error') > -1) {
				$.pnotify({
				    title: 'Login Error',
				    text: data.replace('Error:', ''),
				    history: false,
				    type: 'error'
				});
			} else {
				alert(1);
			}
		});
	});
	
	$(document).on('click', '#show_register', function() {
		$.post('post/index', {
			'process': 'show_register'
		}, function(data) {
			$('#main-form').slideUp(function() {
				$(this).html(data);
				$(this).slideDown();
			});
		});
	});
	
	$(document).on('click', '#show_login', function() {
		$.post('post/index', {
			'process': 'show_login'
		}, function(data) {
			$('#main-form').slideUp(function() {
				$(this).html(data);
				$(this).slideDown();
			});
		});
	});
	
});