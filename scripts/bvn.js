$('document').ready(function() { 
	/* handling form validation */
	$("#login-form2").validate({
		rules: {
			bvn: {
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
		var data = $("#login-form2").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'bvn.php',
			data : data,
			beforeSend: function(){	
				$("#error1").fadeOut();
				$("#login_button2").html('&nbsp; Verifying ...');
			},
			success : function(response){						
				if(response=="ok"){									
					$("#login_button2").html('BVN Verification Successful &nbsp; <i class="fas fa-check-circle"></i>  ');
					setTimeout('window.location.href = "dashboard"; ',2000);
				} else {									
					$("#error1").fadeIn(1000, function(){						
						$("#error1").html(' <blockquote><i class="fas fa-info"></i> &nbsp; Error While Validating BVN, Try Again Later! </blockquote>');
						$("#login_button2").html('<button class="btn btn-primary btn-block" name="login_button2" id="login_button2" type="submit" >Validate BVN <i class="fas fa-chevron-right"></i></button>');
					});
				}
			}
		});
		return false;
	}   
});