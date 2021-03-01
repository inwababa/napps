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
			url  : 'deposit.php',
			data : data,
			beforeSend: function(){	
				$("#error").fadeOut();
				$("#login_button").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span> processing... </span>');
			},
			success : function(response){						
											
					$("#login_button").html('<div class="text-center"><div class="spinner-border spinner-border-sm" role="status"><span class="sr-only">processing</span></div></div>');
					setTimeout(' window.location.href = "user/depositconfirm/'+response+'"; ',3000);
			
			}
		});
		return false;
	}   
});