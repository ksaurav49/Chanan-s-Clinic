<?php //include'header.php';?>

<?php //include'banner.php';?>
		<!-- Container -->
		<div class="container">
			<h3>GALLERY</h3>		
		</div><!-- Container /- -->		
						<div class="breadcrumb">
					<div class="container">
						<div class="breadcrumb-content">
							<!-- Breadcrumb NavXT 6.1.0 -->
<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Doctor." href="http://themewisdom.com/demo/wpm/doctor" class="home"><span property="name">Home</span></a><meta property="position" content="1"></span> &harr; <span property="itemListElement" typeof="ListItem"><span property="name">GALLERY</span><meta property="position" content="2"></span>						</div>
					</div>
				</div>
					</div><main id="main" class="site-main no_spacing">

	<div class="container no-padding">

		<div class="content-area no-sidebar col-md-12 no-padding">
<div id="post-17" class="post-17 page type-page status-publish hentry">

	<h2 class="no-padding no-margin hide">GALLERY</h2>

	
	<div class="entry-content">

		<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">		<!-- Gallery Section -->
		<div class="gallery-section gallery-section1 container-fluid no-left-padding no-right-padding">
			<!-- Container -->
			<div class="container">
				<ul id="filters" class="portfolio-categories no-left-padding">
					<li><a data-filter="*" class="active" href="#">Show All</a></li>
					
						<?php 	
                                                $quer=$this->db->query("select * from category");
                                                                    foreach ($quer->result() as $row)
                                                                        {	
										?>
										<li><a data-filter=".<?=$row->cat_name?>" href="#" title="Cardiology"><?=$row->cat_name?></a></li>
											
										<?php 
									} 
						?>			
				</ul>
				<div class="gallery-img-list">
					<ul class="portfolio-list no-left-padding">
						<?php 	
								
                                                                        foreach($results as $data) {
                                                                             if($data->type == "image") {
										?>
						
										<li class="col-md-4 col-sm-4 col-xs-6 <?=$data->class?>">
									<div class="content-image-block">
                                                                           
										<img width="384" height="384" src="<?=base_url()?>assets/image/gallery/<?=$data->img?>" class="attachment-doctor_384_384 size-doctor_384_384 wp-post-image" alt=""  sizes="(max-width: 384px) 100vw, 384px" />
                                                                                
										<div class="content-block-hover">
											<span><?=$data->class?> Department</span><h5>Happy patient</h5><span class="sl-wrapper"><span class="sl-loader"></span></span>
                                                                                        <a class="zoom-in" href="<?=base_url()?>assets/image/gallery/<?=$data->img?>">
												<i class="fa fa-expand"></i></a>											<a href="<?=base_url()?>gallery-item/happy-patient-14/index.html">
											<i class="fa fa-file-text-o"></i></a>
										</div>
                                                                                </div>
                                                                                    </li>
                                                                               
                                                                           <?php } ?> 
									
								 
                                                                                    
						
						
										<?php 
									} 
						?>
                                                                
					
						
	
                                                    <?php  foreach($results as $data) { ?>
                                                        
					<?php					
                                    if($data->type == "video"){ ?>
                                         <li class="col-md-4 col-sm-4 col-xs-6 <?=$data->class?>">
                                             <div>
                                        <iframe height="384" width="384" src="<?=$data->img?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                                                  
                                    </div>
                                                    </li>  
                                  <?php } } ?>
        				
        
					
					</ul>
                                  
                                    
                                    
                                    
                                    <?php echo $links; ?>
				</div>
			</div><!-- Container /- -->
		</div><!-- Gallery Section -->
		</div></div></div></div>

		
	</div><!-- .entry-content -->

	
</div><!-- #post-## -->
	</div><!-- content-area + page_layout_css -->

		
	</div><!-- .container /- -->

</main><!-- .site-main -->

			<!-- Footer Main -->
<?php //include'footer.php';?>

<script type='text/javascript' src='<?=base_url()?>assets/wp-content/plugins/contact-form-7/includes/js/scriptsaead.js?ver=5.0.3'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCBBAFR8PNKvWJLk-cete22sgI30m_AZzg%20&amp;callback=initMap'></script>
<script type='text/javascript' src='<?=base_url()?>assets/wp-content/themes/doctor/assets/js/lib4e44.js?ver=1.3'></script>
<script type='text/javascript'>
			var templateUrl = "wp-content/themes/doctor/index.html";
			var WPAjaxUrl = "wp-admin/admin-ajax.html";
		
</script>
<script type='text/javascript' src='<?=base_url()?>assets/wp-content/themes/doctor/assets/js/slick/slick.min4e44.js?ver=1.3'></script>
<script type='text/javascript' src='<?=base_url()?>assets/wp-content/themes/doctor/assets/js/functions4e44.js?ver=1.3'></script>
<script type='text/javascript' src='<?=base_url()?>assets/wp-includes/js/wp-embed.min5010.js?ver=4.9.8'></script>
<script type='text/javascript' src='<?=base_url()?>assets/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min4245.js?ver=5.5.2'></script>
	</div>
</body>


</html>