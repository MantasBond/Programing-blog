$(document).ready(function() {

			$('#signup').submit(function (event) {
				event.preventDefault();
				var first = $("#sign-first").val();
				var last = $("#sign-last").val();
				var uid = $("#sign-uid").val();
				var pwd = $("#sign-pwd").val();
				var repwd = $("#sign-repwd").val();
				var submit = $("#sign-submit").val();
				$(".sign-message").load("includes/signup.inc.php", {
					first: first,
					last: last,
					uid: uid,
					pwd: pwd,
					repwd: repwd,
					submit: submit
				});
			});

		});
