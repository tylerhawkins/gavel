		
			function update_current_user() {
				var arguments = {
					action: 'updateCurrentUser'
				} ;
	
				//POST the data and append the results to the results div
				jQuery.post(ajaxurl, arguments, function(response) {
						jQuery("#nb_current_user").html(response);
						var t=setTimeout("update_current_user()",2000);
				}); }

			// We launch the callback
			if (window.attachEvent) {window.attachEvent('onload', update_current_user);}
			else if (window.addEventListener) {window.addEventListener('load', update_current_user, false);}
			else {document.addEventListener('load', update_current_user, false);} 
			
			