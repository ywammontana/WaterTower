
		jQuery(document).ready(function() {
			
			//Get all H2 Headings and store content in headers variable
			//Also add an ID to each of the H2 headings so that each bookmark
			//functions properly when clicked
			var headers = Array();
			jQuery(".entry h2").each(function(i, val){
				var ID = jQuery(this).text().replace(/[^a-z0-9\s]/gi, '').replace(/\ /g, '-').toLowerCase();
				
				headers[i] = jQuery(this).text();
				jQuery(this).attr('id', ID);
			})
			
			//Display list of all H2 Headings
			if (headers.length > 1) {
				jQuery(headers).each(function(i, val) {
					var slug = val.replace(/[^a-z0-9\s]/gi, '').replace(/\ /g, '-').toLowerCase();
					
					jQuery('.side-nav-by-heading').append(
						'<dd data-magellan-arrival="' + slug + '"><a href="#' + slug + '">' + val + '</dd>'
					);
				});
			} else {
				jQuery('.widget_page_directory_widget').css('display', 'none');
			}
			
		});
		
	