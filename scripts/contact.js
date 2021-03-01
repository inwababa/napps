$('document').ready(function() { 
	/* handling form validation */
	$("#contactForm").validate({
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
		var data = $("#contactForm").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'dcontact.php',
			data : data,
			beforeSend: function(){	
				
				$("#login_button").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span> processing... </span>');
            },
            cache: false,
			success : function(response){	
                response = JSON.parse(response);					
				if(response.status==200){		
                   $("#success").show();				
						$("#success").html('<div class="alert alert-icon alert-success" role="alert"><em class="fas fa-check-circle"></em> Form submitted successfully, we will contact you back shortly, Thank you.</div>');
                       $("#login_button").html('<em class="fas fa-check-circle"></em> Completed');		
                        
				} else if (response.status==201) {									
					
                        $("#error").show();					
						$("#error").html('<div class="alert alert-icon alert-warning" role="alert"><em class="icon ni ni-alert-circle"></em><strong>Error</strong> Try again later!</div>');
						$("#login_button").html('Submit');
				
                }
                
			}
		});
        $("#contactForm")[0].reset();  
        
    } 
    
});