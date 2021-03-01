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
			url  : 'data2.php',
			data : data,
			beforeSend: function(){	
				
				$("#login_button").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span> processing... </span>');
            },
            cache: false,
			success : function(response){	
                response = JSON.parse(response);					
				if(response.status==200){		
                   // $("#success").show();				
						//$("#success").html('<div class="alert alert-icon alert-success" role="alert"><em class="icon ni ni-check-circle-cut"></em><strong>Success</strong> Data recharge of <strong>'+response.transid+'</strong> to <strong>'+response.phone+'</strong> is successful.</div>');
						// $("#login_button").html('<div class="text-center"><div class="spinner-border spinner-border-sm" role="status"><span class="sr-only">airtime recharge successful...</span></div></div>');
                       // $("#login_button").html('<em class="icon ni ni-check-circle-cut"></em> Completed');		
                        
					
                    setTimeout(' window.location.href = "confirm/'+response.transid+'"; ',2000);
				} else if (response.status==201) {									
					
                        $("#error").show();					
						$("#error").html('<div class="alert alert-icon alert-warning" role="alert"><em class="icon ni ni-alert-circle"></em><strong>Error</strong> Insufficient Funds, Top Up Wallet</div>');
						$("#login_button").html('Proceed');
				
                }
                
			}
		});
        $("#login-form")[0].reset();  
        
    } 
    
});