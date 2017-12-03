$(document).ready(function() {

			$('#loginForm').submit(function (event) {
				event.preventDefault();
				var log_uid = $("#login-uid").val();
				var log_pwd = $("#login-pwd").val();
				var log_submit = $("#login-submit").val();
				$(".login-message").load("includes/login.inc.php", {
					uid: log_uid,
					pwd: log_pwd,
					submit: log_submit
				});
			});

		});
