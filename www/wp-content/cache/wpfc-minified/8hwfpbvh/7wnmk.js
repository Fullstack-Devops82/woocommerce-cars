// source --> https://icontinentalenterprise.com/wp-content/plugins/order-tracking/js/ewd-otp-js.js?ver=4.9.8 
jQuery(document).ready(function() {
	jQuery(".ewd-otp-ajax-form").submit(function( event ) {
		event.preventDefault();
		EWD_OTP_Ajax_Reload();
	});

	jQuery('.ewd-otp-print-results').on('click', function() {
		var css_url = jQuery(this).data('cssurl');
		jQuery('head').append('<link rel="stylesheet" href="' + css_url + '" type="text/css" />');


		setTimeout(function() {window.print(); jQuery("LINK[href='" + css_url + "']").remove();}, 500);
	});
});


function EWD_OTP_Ajax_Reload() {
	var OrderNumber = jQuery('#ewd-otp-tracking-number').val();
	var FieldLabels = jQuery('#ewd-otp-field-labels').val();
	var OrderEmail = jQuery('#ewd-otp-email').val();
	jQuery('.ewd-otp-ajax-results').html('<h3>Retrieving results...</h3>');
	
	var data = 'Tracking_Number=' + OrderNumber + '&Field_Labels=' + FieldLabels + '&Order_Email=' + OrderEmail + '&action=ewd_otp_update_orders';
	jQuery.post(ajaxurl, data, function(response) {
		response = response.substring(0, response.length - 1);
		jQuery('.ewd-otp-ajax-results').html(response);
		EWD_OTP_ResizeImage();
	});
}

function EWD_OTP_ResizeImage() {
	var GraphicDiv = jQuery('.ewd-otp-status-graphic');

	if (GraphicDiv.hasClass('ewd-otp-Default') || GraphicDiv.hasClass('ewd-otp-Streamlined') || GraphicDiv.hasClass('ewd-otp-Sleek')) {
		var imgEmpty = jQuery('.ewd-otp-empty-display > img');
		var imgFull = jQuery('.ewd-otp-full-display > img');
		imgFull.width(imgEmpty.width());
		if (jQuery(window).width() > 600) {var divHeight = Math.max(imgEmpty.height(), 150);}
		jQuery('.ewd-otp-status-graphic').height(divHeight);
	}
} 
jQuery(window).resize(EWD_OTP_ResizeImage);
jQuery(document).ready(EWD_OTP_ResizeImage);

jQuery(document).ready(function() {
	jQuery('button[name="Customer_Download"]').on('click', function() {console.log("test");
		var Customer_ID = jQuery('input[name="Customer_ID"]').val();
		var Customer_Email = jQuery('input[name="Customer_Email"]').val();
		window.location = "index.php?OTPAction=EWD_OTP_ExportToExcel&Format_Type=CSV&Customer_ID=" + Customer_ID + "&Customer_Email=" + Customer_Email;
		return false;
	});
	jQuery('button[name="Sales_Rep_Download"]').on('click', function() {
		var Sales_Rep_ID = jQuery('input[name="Sales_Rep_ID"]').val();
		var Sales_Rep_Email = jQuery('input[name="Sales_Rep_Email"]').val();
		window.location = "index.php?OTPAction=EWD_OTP_ExportToExcel&Format_Type=CSV&Sales_Rep_ID=" + Sales_Rep_ID + "&Sales_Rep_Email=" + Sales_Rep_Email;
		return false;
	});
});