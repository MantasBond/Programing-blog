$(document).ready(function() {

			$('#newpwd').submit(function (event) {
				event.preventDefault();
				var old_pwd = $("#old-pwd").val();
				var new_pwd = $("#new-pwd").val();
				var re_pwd = $("#re-pwd").val();
				var submit = $("#newpwd-submit").val();
				$(".newpwd-message").load("includes/cpwd.inc.php", {
					old_pwd: old_pwd ,
					new_pwd: new_pwd,
					re_pwd: re_pwd,
					submit: submit
				});
			});

		});
