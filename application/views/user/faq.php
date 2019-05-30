<?php// include'include/header.php';?>

<?php// include'include/banner.php';?>

		<!-- Container -->
		<div class="container">
			<h3>FAQ'S</h3>		
		</div><!-- Container /- -->		
						<div class="breadcrumb">
					<div class="container">
						<div class="breadcrumb-content">
							<!-- Breadcrumb NavXT 6.1.0 -->
<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Doctor." href="http://themewisdom.com/demo/wpm/doctor" class="home"><span property="name">Home</span></a><meta property="position" content="1"></span> &harr; <span property="itemListElement" typeof="ListItem"><span property="name">FAQ'S</span><meta property="position" content="2"></span>						</div>
					</div>
				</div>
					</div>
<main id="main" class="site-main page_spacing">

	<div class="container no-padding">
		<div class="col-md-2"></div>
		<div class="content-area content-left col-md-8 col-sm-8">
<div id="post-21" class="post-21 page type-page status-publish hentry">

	<h2 class="no-padding no-margin hide">FAQ'S</h2>

	
	<div class="entry-content">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">			
				<div class="clinic-form">
				<div class="appoinment-form">
					<h5><i class="fa fa-calendar-check-o"></i>Ask Any Questions ?</h5>					

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
					
									</div>
			</div>
			</div></div>
		
		<div class="vc_row wpb_row vc_row-fluid">
			<div class="wpb_column vc_column_container vc_col-sm-12">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">			
						<br><br><br>
						
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4"></div>
						<div class="col-md-4">
						
						<aside id="search-3" class="widget widget_search">
							<div class="header-search">
	<form method="get" id="s-730" class="searchform" action="http://themewisdom.com/demo/wpm/doctor/">
		<div class="input-group">
			<input type="text" name="s" id="header_s730" placeholder="Enter a keyword and press enter..." class="form-control" required>
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="icon icon-Search"></i></button>
			</span>
		</div><!-- /input-group -->
	</form>
</div>
<div class="page_search">
	<form method="get" id="215" class="searchform" action="http://themewisdom.com/demo/wpm/doctor/">
		<div class="input-group">
			<input type="text" name="s" id="s-215" placeholder="Search . . ." class="form-control" required>
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
			</span>
		</div><!-- /input-group -->
	</form>
</div></aside>
							
						</div> </div>
						
						
						
				<aside id="widget-accordion-5" class="widget widget_accordion"><h3 class="widget-title">Your Questions...</h3>			<div class="accordion-box">
				<div class="panel-group" id="accordion-1" role="tablist" aria-multiselectable="true">
						<?php 
                                               
                                   $i=1;
                                   $r= $this->db->query("select * from query where status='Replied..'");
                                   foreach ($r->result() as $row)
                                    {

                                    ?>								
					<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="faqheading-796<?=$i?>">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-1" href="#faqcontent-796<?=$i?>" aria-expanded="true"><?=$row->subject?></a>
										</h4>
									</div>
									<div id="faqcontent-796<?=$i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqheading-796<?=$i?>">
										<div class="panel-body">
                                                                                    <p style="font-size: 15px; font-weight: bold"> <?=$row->message?> ? <br><br></p><p><?=$row->ans?></p><br>
                                                                                    <span style="margin-left: 90%"><b>~ </b><?=$row->name?></span>

											
										</div>
									</div>
                                    </div> <?php $i++; }  ?>
												</div>
			</div>
			</aside>
			</div></div></div></div>

		
	</div><!-- .entry-content -->

	
</div><!-- #post-## -->
	</div><!-- content-area + page_layout_css -->

			</div><!-- End Sidebar -->
	
	</div><!-- .container /- -->

</main><!-- .site-main -->
			<!-- Footer Main -->
<?php //include'include/footer.php';?>

<script type='text/javascript' src='<?=base_url()?>assets/wp-content/plugins/contact-form-7/includes/js/scriptsaead.js?ver=5.0.3'></script>
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
	</div>
</body>

</html>