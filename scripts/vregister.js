$('document').ready(function() { 
	/* handling form validation */
	$("#register-form").validate({
		rules: {
			password: {
				required: true,
			},
			email: {
				required: true,
				email: true
			},
		},
		messages: {
			password:{
			  required: "please enter your password"
			 },
			email: "please enter your email address",
		},
		submitHandler: submitForm	
	});	   
	/* Handling login functionality */
	function submitForm() {		
		var data = $("#register-form").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'vregister.php',
			data : data,
			beforeSend: function(){	
				$("#error").fadeOut();
				$("#register_button").html('<span class="fa fa-recycle"></span> &nbsp; sending ...');
			},
			success : function(response){						
				if(response=="ok"){									
					$("#register_button").html('<img src="ajax-loader.gif" /> &nbsp; Creating your Accounting ...');
					setTimeout(' window.location.href = "account"; ',2000);
				} else {									
					$("#error").fadeIn(1000, function(){						
						$("#error").html('<div class="alert alert-danger"> <span class="fa fa-info"></span> &nbsp; '+response+' !</div>');
						$("#register_button").html('<span class="fa fa-plus"></span> &nbsp; Sign UP');
					});
				}
			}
		});
		return false;
	}   
});