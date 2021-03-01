$('document').ready(function() { 
	/* handling form validation */
	$("#login-form1").validate({
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
		var data = $("#login-form1").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'data8.php',
			data : data,
			beforeSend: function(){	
				
				$("#login_button1").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span> checking transaction id... </span>');
            },
            cache: false,
			success : function(response){	
                response = JSON.parse(response);					
				if(response.status==200){		
                   // $("#success").show();				
						//$("#success").html('<div class="alert alert-icon alert-success" role="alert"><em class="icon ni ni-check-circle-cut"></em><strong>Success</strong> Data recharge of <strong>'+response.transid+'</strong> to <strong>'+response.phone+'</strong> is successful.</div>');
						// $("#login_button").html('<div class="text-center"><div class="spinner-border spinner-border-sm" role="status"><span class="sr-only">airtime recharge successful...</span></div></div>');
                       // $("#login_button").html('<em class="icon ni ni-check-circle-cut"></em> Completed');		
                        
					
                    setTimeout(' window.location.href = "invoice/'+response.transid+'"; ',2000);
				} else if (response.status==201) {									
					
                        $("#error1").show();					
						$("#error1").html('<div class="alert alert-icon alert-warning" role="alert"><em class="fas fa-check-circle"></em><strong> Error</strong> Invalid Transaction ID Supplied</div>');
						$("#login_button1").html('Download Invoice');
				
                }
                
			}
		});
        $("#login-form1")[0].reset();  
        
    } 
    
});