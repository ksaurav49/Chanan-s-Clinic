<script type="text/javascript">
    $(document).ready(function() {
        $('#query').click(function() {
    
    var qname = $("#qname").val();
    var qemail = $("#qemail").val();
    var qsubject = $("#qsubject").val();
    var qdate = $("#qdate").val();
    var qmessage = $("#qmessage").val();
    //alert(qmessage);
    
    //
    
    jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "User_c/query_submit",
dataType: 'json',
data: {qname: qname, qemail: qemail, qsubject: qsubject, qdate: qdate, qmessage: qmessage},
 error: function() {
              alert('Something is wrong');
           },
success: function(res) {
if (res)
{
    //$('.appoin').val("");
    swal("Query submitted!", "We will get you soon!!!", "success");


}else{
    swal("opps!", "We will get you soon!!!", "success");
} 
}
});
    });
    });

 </script>
<footer id="footer-main" class="footer-main container-fluid no-left-padding no-right-padding" style="background-image: url(<?= base_url()?>assets/wp-content/plugins/doctor-toolkit/lib/images/footer-bg.jpg);">
				<!-- Container -->
				<div class="container">
					<div class="row">
														<div class="col-md-4 col-sm-6 col-xs-6 contact-info">
									<aside id="widget-info-2" class="widget widget_info"><h3 class="widget-title">Contact info</h3>		<div class="contact-information">
			<p><i class="fa fa-phone"></i><a href="tel:+386489550686" title="+386 489 550 686">+386 489 550 686</a></p>			<p><i class="fa fa-envelope"></i><a href="mailto:info@example.com" title="info@example.com">info@example.com</a></p>			<p><i class="fa fa-map-marker"></i>123, Las Vegas street lorem</p>			<div class="footer-social">
				<i class="fa fa-heart"></i>
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>					<li><a href="#"><i class="fa fa-twitter"></i></a></li>					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>					<li><a href="#"><i class="fa fa-tumblr"></i></a></li>					<li><a href="#"><i class="fa fa-vimeo"></i></a></li>					<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>				</ul>
			</div>
	    </div>
		</aside>								</div>
																<div class="col-md-4 col-sm-6 col-xs-6">
									<aside id="widget-workinghours-2" class="widget widget_workinghours"><h3 class="widget-title">Working Hours</h3>		<ul>
			<li><span>Monday</span> <b>9.00  AM  To  5.00 PM</b></li>			<li><span>tuesday</span> <b>9.00  AM  To  5.00 PM	</b></li>			<li><span>wednesday</span> <b>9.00  AM  To  5.00 PM</b></li>			<li><span>thursday</span> <b>9.00  AM  To  5.00 PM</b></li>			<li><span>friday</span> <b>9.00  AM  To  5.00 PM</b></li>			<li><span>Saturday</span> <b>11.00  AM  To  3.00 PM</b></li>			<li><span>Sunday</span> <b>Closed</b></li>		</ul>

		</aside>								</div>
																<div class="col-md-4 col-sm-6 col-xs-6 contact-form">
									<aside id="text-2" class="widget widget_text"><h3 class="widget-title">Any Questions ?</h3>			<div class="textwidget"><div role="form" class="wpcf7" id="wpcf7-f358-o2" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>

<!--yhi s-->
<form  method="post" class="wpcf7-form"  id="branddet" name="branddet" role="form">
    <?php echo validation_errors(); ?>

<div class="form-group col-md-12 no-padding">
	<span class="wpcf7-form-control-wrap your-name">
            <input type="text" maxlength="10" minlength="4" name="your-name" value="" size="40" id="qname" class="appoin wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Your Name" required />
	</span>
</div>
<div class="form-group col-md-12 no-padding">
	<span class="wpcf7-form-control-wrap your-email">
            <input type="email" name="your-email" value="" id="qemail" size="40" class="appoin wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email Address" required />
	</span>
</div>
<div class="form-group col-md-12 no-padding">
	<span class="wpcf7-form-control-wrap your-subject">
            <input type="text" name="your-subject"  maxlength="10" minlength="4" value="" id="qsubject" size="40" class="appoin wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Subject" required >
	</span>
</div>
<div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
       <span class="wpcf7-form-control-wrap your-date">
           <input type="date" name="your-date" value="" id="qdate" class="appoin wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" required>
	</span>
</div>

<div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
	<span class="wpcf7-form-control-wrap your-message">
            <textarea name="your-message"  maxlength="100" minlength="5" id="qmessage" cols="40" rows="2" class="appoin wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Your Message..." required></textarea>
	</span>
</div>
    <input type="button" value="Learn More" id="query" class="btn btn-info btn-block"><br>
       
    </form>
<!--<div class="alert alert-success fade in" id="b" style="display:none">
                                            <strong>Successfully submitted!!</strong> Your appointment will be Fixed soon.
  
</div>-->
<!--yhan tk-->




        
                                                                                </div></div>
		</aside>								</div>
													</div>
				</div><!-- Container /- -->
			</footer><!-- Footer Main /- -->
					<div class="footer-bottom">
			<!-- Container -->
			<div class="container">
				<p>© 2018 Doctor Theme. All Rights Reserved</p>
			</div><!-- Container /- -->
		</div>
					<script type="text/javascript">
				function revslider_showDoubleJqueryError(sliderID) {
					var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
					errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
					errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
					errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
					errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
						jQuery(sliderID).show().html(errorMessage);
				}
			</script>

			<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/themewisdom.com\/demo\/wpm\/doctor\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='<?src=base_url()?>assets/wp-content/plugins/contact-form-7/includes/js/scriptsaead.js?ver=5.0.3'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCBBAFR8PNKvWJLk-cete22sgI30m_AZzg%20&amp;callback=initMap'></script>
<script type='text/javascript' src='<?=base_url()?>assets/wp-content/themes/doctor/assets/js/lib4e44.js?ver=1.3'></script>
<script type='text/javascript'>
			var templateUrl = "<?=base_url()?>assets/wp-content/themes/doctor/index.html";
			var WPAjaxUrl = "<?=base_url()?>assets/wp-admin/admin-ajax.html";
		
</script>
<script type='text/javascript' src='<?=base_url()?>assets/wp-content/themes/doctor/assets/js/slick/slick.min4e44.js?ver=1.3'></script>
<script type='text/javascript' src='<?=base_url()?>assets/wp-content/themes/doctor/assets/js/functions4e44.js?ver=1.3'></script>
<script type='text/javascript' src='<?=base_url()?>assets/wp-includes/js/wp-embed.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='<?=base_url()?>assets/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min4245.js?ver=5.5.2'></script>