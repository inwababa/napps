$('document').ready(function() { 
	/* handling form validation */
		$("#login-form3").validate({
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
		var data = $("#login-form3").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'vphone.php',
			data : data,
			beforeSend: function(){	
				$("#error").fadeOut();
				$("#login_button3").html('<span class="fa fa-recycle"></span> &nbsp; Applying Changes ...');
			},
			success : function(response){						
				if(response=="ok"){									
					$("#login_button3").html('<span class="fa fa-unlock"></span> &nbsp; Phone Updated Successfully.');
					//setTimeout(' window.location.href = "dashboard"; ',2000);
					location.reload();
				} else {									
					$("#error").fadeIn(1000, function(){						
						$("#error").html('<blockqoute> <span class="fa fa-info"></span> &nbsp; Error while applying changes, pls check and try again.</blockqoute>');
						$("#login_button3").html('<span class="fa fa-lock"></span> &nbsp; Update Phone Number');
					});
				}
			}
		});
		return false;
	}   
});