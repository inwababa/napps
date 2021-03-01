$('document').ready(function() { 
	/* handling form validation */
	$("#login-form").validate({
		rules: {
			password: {
				required: true,
			},
			user_email: {
				required: true,
				email: false
			},
		},
		messages: {
			password:{
			  required: "please enter your password"
			 },
			user_email: "please enter your email address",
		},
		submitHandler: submitForm	
	});	   
	/* Handling login functionality */
	function submitForm() {		
		var data = $("#login-form").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'vlogin.php',
			data : data,
			beforeSend: function(){	
				$("#error").fadeOut();
				$("#login_button").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span> verifying... </span>');
			},
			success : function(response){						
				if(response=="ok"){									
					$("#login_button").html('<div class="text-center"><div class="spinner-border spinner-border-sm" role="status"><span class="sr-only">login successful...</span></div></div>');
					setTimeout(' window.location.href = "user/dashboard"; ',3000);
				} else {									
					$("#error").fadeIn(1000, function(){						
						$("#error").html('<div class="alert alert-icon alert-warning" role="alert"><em class="icon ni ni-alert-circle"></em><strong>Invalid</strong> credentials supplied.</div>');
						$("#login_button").html('Login');
					});
				}
			}
		});
		return false;
	}   
});