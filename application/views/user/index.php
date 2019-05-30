
<script type="text/javascript">
    $(document).ready(function() {
        $('#ajax').click(function() {
    
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var email = $("#email").val();
    var date = $("#date").val();
    var time = $("#time").val();
    var phone = $("#phone").val();
    var adress = $("#adress").val();
    
    
    //
    
    jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "User_c/appointment_submit",
dataType: 'json',
data: {fname: fname, lname: lname, email: email, date: date, time: time, phone: phone, adress: adress},
 error: function(res) {
              alert('Something is wrong');
           },
success: function(res) {
if (res)
{
    $("#a").css("display", "block");
    $("#a").fadeOut(3000);
   // swal("Query submitted!", "We will get you soon!!!", "success");


}
}
});
    });
    });

 </script>




		
			<main id="main" class="site-main no_spacing">

	<div class="container-fluid no-padding">

		<div class="content-area no-sidebar col-md-12 no-padding">
<div id="post-6" class="post-6 page type-page status-publish hentry">

	<h2 class="no-padding no-margin hide">Doctor Home Page</h2>

	
	<div class="entry-content">

		<?php //include'include/slider.php';?>
		
		<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">		<!-- Container -->
		<div class="section-header-box">
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>Welcome to Our Clinic</h3>
				</div><!-- Section Header /- -->
			</div>
		</div>
		</div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="container fixedlayout"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8"><div class="vc_column-inner "><div class="wpb_wrapper">	<!-- Welcome Section -->
	<div class="welcome-section other-services container-fluid no-left-padding no-right-padding">
		<!-- Container -->
		<div class="container">
				
					<div class="row">
						<div class="our-clinic">
							<div class="row welcome-left">
																			<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="other-services-block">
																												<div class="services-block-icon">
																<i class="fa fa-ambulance"></i>
															</div>
																												<div class="other-services-content">
														<h5>Emergency services</h5><p>Dolor sit amet consecdi pisicing eliamsed do eiusmod tempornu</p>
													</div>
												</div>
											</div>
																						<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="other-services-block">
																												<div class="services-block-icon">
																<i class="fa fa-users"></i>
															</div>
																												<div class="other-services-content">
														<h5>Qualified Doctors</h5><p>Dolor sit amet consecdi pisicing eliamsed do eiusmod tempornu</p>
													</div>
												</div>
											</div>
																						<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="other-services-block">
																												<div class="services-block-icon">
																<i class="fa fa-phone-square"></i>
															</div>
																												<div class="other-services-content">
														<h5>24/7 support</h5><p>Dolor sit amet consecdi pisicing eliamsed do eiusmod tempornu</p>
													</div>
												</div>
											</div>
																						<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="other-services-block">
																												<div class="services-block-icon">
																<i class="fa fa-calendar"></i>
															</div>
																												<div class="other-services-content">
														<h5>Online appointment</h5><p>Dolor sit amet consecdi pisicing eliamsed do eiusmod tempornu</p>
													</div>
												</div>
											</div>
																		</div>
						</div>
					</div>
							</div><!-- Container /- -->
	</div><!-- Welcome Section /- -->
	</div></div></div>
		<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4">
			<div class="vc_column-inner ">
			<div class="wpb_wrapper">			
				<div class="clinic-form">
				<div class="appoinment-form">
					<h5><i class="fa fa-calendar-check-o"></i>Make Appointment</h5>					

    <form  method="post" class="wpcf7-form"   name="branddet" role="form">

<div class="form-group col-md-12 no-padding">
	<span class="wpcf7-form-control-wrap your-name">
            <input type="text" placeholder="First name" name="First name" value="" size="40" id="fname" class="appoint wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Your Name" required />
	</span>
</div>
<div class="form-group col-md-12 no-padding">
	<span class="wpcf7-form-control-wrap your-subject">
            <input type="text" placeholder="Last name" name="your-subjec" value="" id="lname" size="40" class="appoint wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Subject" required >
	</span>
</div>
<div class="form-group col-md-12 no-padding">
	<span class="wpcf7-form-control-wrap your-email">
            <input type="email" name="your-email" value="" id="email" size="40" class="appoint wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email Address" required />
	</span>
</div>

<div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
       <span class="wpcf7-form-control-wrap your-date">
           <input type="date" name="your-date" value="" id="date" class="appoint wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" required>
	</span>
</div>
<div class="form-group input-group col-md-12 no-padding appointment-options">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6 ">
	<span class="wpcf7-form-control-wrap your-time">
            <select name="your-time" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required id="time">
				<option value="Time">Time</option>
				<option value="09:00">09:00</option>
				<option value="10:00">10:00</option>
				<option value="11:00">11:00</option>
				<option value="12:00">12:00</option>
				<option value="13:00">13:00</option>
				<option value="14:00">14:00</option>
				<option value="15:00">15:00</option>
				<option value="16:00">16:00</option>
				<option value="17:00">17:00</option>
				<option value="18:00">18:00</option>
				<option value="19:00">19:00</option>
			</select>
	</span>
	</div>
<div class="col-md-6 col-sm-6 col-xs-6">
		<span class="wpcf7-form-control-wrap your-department">
                    <input type="number" placeholder="Mobile number" name="your-date" value="" id="phone" class="appoint wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" required>
	</span>
	</div>
</div>
</div>
<div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
	<span class="wpcf7-form-control-wrap your-message">
            <textarea name="your-message" placeholder="Your adress" id="adress" cols="40" rows="2" class="appoint wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Your Message..." required></textarea>
	</span>
</div>
        <input type="button" value="Submit" id="ajax" class="btn btn-info btn-block"><br>
       
    </form>
                                       
                                        <div class="alert alert-success fade in" id="a" style="display:none">
                                            <strong>Successfully submitted!!</strong> Your appointment will be Fixed soon.
  
</div>
					
									</div>
			</div>
			</div></div></div>
		</div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">		<!-- Gallery Section -->
		<div id="gallery-section" class="gallery-section container-fluid no-left-padding no-right-padding">
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
		</div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">	<!-- Services Section -->
	<div class="services-section container-fluid no-left-padding no-right-padding">
		<!-- Container -->
		<div class="container">
			<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="service-content">
					<h5>We Offer Best Medical Services</h5><p>When you travel abroad for medical care, you want everything to go smoothly.</p>
							<div class="medical-services">
								<div class='col-md-4 col-sm-4 col-xs-4 medical-box'><i class='fa fa-calendar-plus-o'></i><p>Easy Appointments</p></div><div class='col-md-4 col-sm-4 col-xs-4 medical-box'><i class='fa fa-ambulance'></i><p>Transportation</p></div><div class='col-md-4 col-sm-4 col-xs-4 medical-box'><i class='fa fa-thumbs-up'></i><p>Care management</p></div>							</div>
							<a href="#" class="learn-more" title="Learn More">Learn More</a><span>Or</span><a href="#" class="learn-more appointment" title="Make an Appointment">Make an Appointment</a>				</div>
			</div>
								<div class="col-md-5 col-sm-12 col-xs-12 services-img">
						<img width="458" height="532" src="<?=base_url()?>assets/wp-content/uploads/2017/03/services-458x532.jpg" class="attachment-doctor_458_532 size-doctor_458_532" alt="" srcset="https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/services-458x532.jpg 458w, https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/services-258x300.jpg 258w, https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/services.jpg 591w" sizes="(max-width: 458px) 100vw, 458px" />					</div>
							</div><!-- Container /- -->
	</div><!-- Services Section -->
	</div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">	<!-- Testimonial Section -->
	<div class="testimonial-section container-fluid no-left-padding no-right-padding">
						<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Testimonials</h3>
					</div><!-- Section Header /- -->	
				</div>
								<div class="testimonial-slider">		
													<div class="testimonial-box">
									<div class="testimonial-content">
										<i><img width="116" height="116" src="<?=base_url()?>assets/wp-content/uploads/2017/03/testi-1.jpg" class="attachment-doctor_120_120 size-doctor_120_120" alt="" srcset="https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/testi-1.jpg 116w, https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/testi-1-100x100.jpg 100w" sizes="(max-width: 116px) 100vw, 116px" /></i><h5>Allan Smith</h5><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet olum</p>
									</div>
								</div>
																<div class="testimonial-box">
									<div class="testimonial-content">
										<i><img width="116" height="116" src="<?=base_url()?>assets/wp-content/uploads/2017/03/testi-2.jpg" class="attachment-doctor_120_120 size-doctor_120_120" alt="" srcset="https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/testi-2.jpg 116w, https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/testi-2-100x100.jpg 100w" sizes="(max-width: 116px) 100vw, 116px" /></i><h5>Allan Smith</h5><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet olum</p>
									</div>
								</div>
																<div class="testimonial-box">
									<div class="testimonial-content">
										<i><img width="116" height="116" src="<?=base_url()?>assets/wp-content/uploads/2017/03/testi-3.jpg" class="attachment-doctor_120_120 size-doctor_120_120" alt="" srcset="https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/testi-3.jpg 116w, https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/testi-3-100x100.jpg 100w" sizes="(max-width: 116px) 100vw, 116px" /></i><h5>Allan Smith</h5><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet olum</p>
									</div>
								</div>
																<div class="testimonial-box">
									<div class="testimonial-content">
										<i><img width="116" height="116" src="<?=base_url()?>assets/wp-content/uploads/2017/03/testi-1.jpg" class="attachment-doctor_120_120 size-doctor_120_120" alt="" srcset="https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/testi-1.jpg 116w, https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/testi-1-100x100.jpg 100w" sizes="(max-width: 116px) 100vw, 116px" /></i><h5>Allan Smith</h5><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet olum</p>
									</div>
								</div>
																<div class="testimonial-box">
									<div class="testimonial-content">
										<i><img width="116" height="116" src="<?=base_url()?>assets/wp-content/uploads/2017/03/testi-2.jpg" class="attachment-doctor_120_120 size-doctor_120_120" alt="" srcset="https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/testi-2.jpg 116w, https://themewisdom.com/demo/wpm/doctor/wp-content/uploads/2017/03/testi-2-100x100.jpg 100w" sizes="(max-width: 116px) 100vw, 116px" /></i><h5>Allan Smith</h5><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet olum</p>
									</div>
								</div>
												</div>
					</div><!-- Testimonial Section /- -->
	</div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">	<!-- Team Section -->
	<div id="team-section" class="team-section container-fluid no-left-padding no-right-padding">
		<!-- Container -->
		<div class="container">
								<!-- Section Header -->
					<div class="section-header">
						<h3>Doctors</h3>
					</div>
										<div class="team-carousel">
															<div class="col-md-12">
										<div class="team-content">
											<div class="team-box">
												<img width="240" height="274" src="<?=base_url()?>assets/wp-content/uploads/2017/03/team-1.png" class="attachment-doctor_240_274 size-doctor_240_274" alt="" /><h5>Alan Dark</h5>											</div>
											<span class="team-catagory">Pathologist</span>										</div>
									</div>
																		<div class="col-md-12">
										<div class="team-content">
											<div class="team-box">
												<img width="240" height="274" src="<?=base_url()?>assets/wp-content/uploads/2017/03/team-2.png" class="attachment-doctor_240_274 size-doctor_240_274" alt="" /><h5>Knox Ulmar</h5>											</div>
											<span class="team-catagory">Cardiologist</span>										</div>
									</div>
																		<div class="col-md-12">
										<div class="team-content">
											<div class="team-box">
												<img width="240" height="274" src="<?=base_url()?>assets/wp-content/uploads/2017/03/team-3.png" class="attachment-doctor_240_274 size-doctor_240_274" alt="" /><h5>Jeremy Duncan</h5>											</div>
											<span class="team-catagory">Neurologist</span>										</div>
									</div>
																		<div class="col-md-12">
										<div class="team-content">
											<div class="team-box">
												<img width="240" height="274" src="<?=base_url()?>assets/wp-content/uploads/2017/03/team-4.png" class="attachment-doctor_240_274 size-doctor_240_274" alt="" /><h5>Tedd Justice</h5>											</div>
											<span class="team-catagory">Pediatrician</span>										</div>
									</div>
														</div>
							</div><!-- Container /- -->
	</div><!-- Team Section /- -->
	</div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">		<!-- Latest News -->
		<!-- Latest News /- -->
		</div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">	<!-- Offer Section -->
                                <div class="offer-section container-fluid no-left-padding no-right-padding" style='background-image: url(<?= base_url()?>assets/wp-content/uploads/2017/03/offer-bg.jpg);'>
		<!-- Container -->
		<div class="container">
								<!-- Section Header -->
					<div class="section-header">
						<h3>What We Offer</h3>
					</div><!-- Section Header /- -->
										<div class="offer-carousel">
															<div class="offer-box">
										<i class="fa fa-hospital-o"></i><h5>Intensive Care</h5><p>Mister we could use a man like Herbert Hoover again. Love exciting and new. Come aboardwere expecting you.</p>
<a href="#" title="Read More">Read More</a>									</div>
																		<div class="offer-box">
										<i class="fa fa-ambulance"></i><h5>24/7 Ambulance</h5><p>In crack commando was sent to prison by a military court for a crime they didn't commit. These men prompt-</p>
<a href="#" title="Read More">Read More</a>									</div>
																		<div class="offer-box">
										<i class="fa fa-smile-o"></i><h5> Friendly Doctors</h5><p>Come aboard expecting you. Love life's sweetest reward Let it flow it floats back to you. It's a beautiful Day.</p>
<a href="#" title="Read More">Read More</a>									</div>
														</div>
							</div><!-- Container -->
	</div><!-- Offer Section /- -->
	</div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">	<!-- Department Section -->
	<div class="department-section container-fluid no-left-padding no-right-padding">
		<!-- Container -->
		<div class="container">
								<div class="department-header">
						<h5>Departments</h5>
					</div>
						
					<div class="row">
															<div class="col-md-2 col-sm-6 col-xs-6 department-box">
										<div class="department-img-block">
											<img width="77" height="85" src="<?=base_url()?>assets/wp-content/uploads/2017/03/dept-1.png" class="attachment-full size-full" alt="" /><a href="service-details/index.html" title="Neurology">Neurology</a>										</div>
									</div>
																		<div class="col-md-2 col-sm-6 col-xs-6 department-box">
										<div class="department-img-block">
											<img width="69" height="85" src="<?=base_url()?>assets/wp-content/uploads/2017/03/dept-2.png" class="attachment-full size-full" alt="" /><a href="service-details/index.html" title="Cardiology">Cardiology</a>										</div>
									</div>
																		<div class="col-md-2 col-sm-6 col-xs-6 department-box">
										<div class="department-img-block">
											<img width="85" height="85" src="<?=base_url()?>assets/wp-content/uploads/2017/03/dept-3.png" class="attachment-full size-full" alt="" /><a href="service-details/index.html" title="Dermatology">Dermatology</a>										</div>
									</div>
																		<div class="col-md-2 col-sm-6 col-xs-6 department-box">
										<div class="department-img-block">
											<img width="85" height="85" src="<?=base_url()?>assets/wp-content/uploads/2017/03/dept-4.png" class="attachment-full size-full" alt="" /><a href="service-details/index.html" title="Gastroenterology">Gastroenterology</a>										</div>
									</div>
																		<div class="col-md-2 col-sm-6 col-xs-6 department-box">
										<div class="department-img-block">
											<img width="87" height="85" src="<?=base_url()?>assets/wp-content/uploads/2017/03/dept-5.png" class="attachment-full size-full" alt="" /><a href="service-details/index.html" title="Pediatrician">Pediatrician</a>										</div>
									</div>
																		<div class="col-md-2 col-sm-6 col-xs-6 department-box">
										<div class="department-img-block">
											<img width="57" height="85" src="<?=base_url()?>assets/wp-content/uploads/2017/03/dept-6.png" class="attachment-full size-full" alt="" /><a href="service-details/index.html" title="Otolaryngology">Otolaryngology</a>										</div>
									</div>
																		<div class="col-md-2 col-sm-6 col-xs-6 department-box">
										<div class="department-img-block">
											<img width="31" height="85" src="<?=base_url()?>assets/wp-content/uploads/2017/03/dept-7.png" class="attachment-full size-full" alt="" /><a href="service-details/index.html" title="Hematology">Hematology</a>										</div>
									</div>
																		<div class="col-md-2 col-sm-6 col-xs-6 department-box">
										<div class="department-img-block">
											<img width="65" height="85" src="<?=base_url()?>assets/wp-content/uploads/2017/03/dept-8.png" class="attachment-full size-full" alt="" /><a href="service-details/index.html" title="Radiation">Radiation</a>										</div>
									</div>
																		<div class="col-md-2 col-sm-6 col-xs-6 department-box">
										<div class="department-img-block">
											<img width="85" height="85" src="<?=base_url()?>assets/wp-content/uploads/2017/03/dept-9.png" class="attachment-full size-full" alt="" /><a href="service-details/index.html" title="Podiatry">Podiatry</a>										</div>
									</div>
																		<div class="col-md-2 col-sm-6 col-xs-6 department-box">
										<div class="department-img-block">
											<img width="85" height="85" src="<?=base_url()?>assets/wp-content/uploads/2017/03/dept-10.png" class="attachment-full size-full" alt="" /><a href="service-details/index.html" title="Rheumatology">Rheumatology</a>										</div>
									</div>
														</div>
										<div class="show-all">
						<a href="#" title="show all">show all</a>
					</div>
							</div><!-- Container /- -->
	</div><!-- Department Section -->
	</div></div></div></div>

		
	</div><!-- .entry-content -->

	
</div><!-- #post-## -->
	</div><!-- content-area + page_layout_css -->

		
	</div><!-- .container /- -->

</main><!-- .site-main -->

			<!-- Footer Main -->

		<?php //include'include/footer.php';?>
		
		

	</div>
</body>

</html>