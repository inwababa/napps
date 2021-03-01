$('document').ready(function() { 
	/* handling form validation */
		$("#login-form").validate({
		rules: {
			dob: {
				required: true,
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
			url  : 'vprofile.php',
			data : data,
			beforeSend: function(){	
				$("#error").fadeOut();
				$("#login_button").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span> applying changes... </span>');
			},
			success : function(response){						
				if(response=="ok"){									
					$("#login_button").html('Profile Updated Successfully.');
					// setTimeout(' window.location.href = "dashboard"; ',2000);
					location.reload();
				} else {									
					$("#error").fadeIn(1000, function(){						
						$("#error").html('<div class="alert alert-icon alert-warning" role="alert"><em class="icon ni ni-alert-circle"></em><strong>Error</strong> please try again later.</div>');
						$("#login_button").html('<span class="icon-line-awesome-lock"></span> &nbsp; Update Profile');
					});
				}
			}
		});
		return false;
	}   
});