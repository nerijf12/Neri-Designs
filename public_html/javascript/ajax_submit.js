$(document).ready(function () {
	
	$('form #response').hide();
	
	$('#submit').click(function(e) {
		
		e.preventDefault();
		
		var valid = '';
		var required = ' is required';
		var name = $('form #name').val();
		var comment = $('form #comment').val();
		var email = $('form #email').val();
		var number = $('form #number').val();
		var honeypot = $('form #honeypot').val();
		var humancheck = $('form #humancheck').val();
		
		if (name == '' || name.length <=2) {
			valid = '<p>Your name' + required + '<p>';
		}
		
		if (!email.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
		valid += '<p>Your Email' + required + '</p>';
		}
		
		if (comment == '' || comment.length <= 5) {
		valid += '<p>A message' + required + '</p>';	
		}
		
		if (honeypot != 'http://') {
		valid += '<p>Spambots are not allowed.<p>';	
		}
		
		if (humancheck != '') {
		valid += '<p>A human user' + required + '<p>';	
		}
		
		if (valid != ''){
			
			$('form #response').removeClass().addClass('error')
			.html('<strong> Please correct the errors below.<strong>' +valid).fadeIn('fast');
		}// let the user know something is happening behind the scenes
		// serialize the form data and send to our ajax function
		else {
			
			$('form #response').removeClass().addClass('processing').html('Processing...').fadeIn('fast');										
			
			var formData = $('form').serialize();
			submitForm(formData);			
		}	
			
		
	});
	
});

// make our ajax request to the server
function submitForm(formData) {
	
	$.ajax({	
		type: 'POST',
		url: 'php/feedback.php',		
		data: formData,
		dataType: 'json',
		cache: false,
		timeout: 7000,
		success: function(data) { 			
			
			$('form #response').removeClass().addClass((data.error === true) ? 'error' : 'success')
						.html(data.msg).fadeIn('fast');	
						
			if ($('form #response').hasClass('success')) {
				
				setTimeout("$('form #response').fadeOut('fast')", 5000);
			}
		
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
						
			$('form #response').removeClass().addClass('error')
						.html('<p>There was an<strong> ' + errorThrown +
							  '</strong> error due to a<strong> ' + textStatus +
							  '</strong> condition.</p>').fadeIn('fast');			
		},				
		complete: function(XMLHttpRequest, status) { 			
			
			$('form')[0].reset();
		}
	});	
};