
<!DOCTYPE html>

<html lang="en">
	
<head>
	<meta charset="utf-8" />
	<title>Admission Form</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/style.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?=base_url()?>assetsAdmin/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
<?php// include'include/header.php';?>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">PAdmission Form</a></li>
				<li class="breadcrumb-item active">Student entry</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">New Student <small>Student Details...</small></h1>
			<!-- end page-header -->
			
			<!-- begin wizard-form -->
			<form action="https://seantheme.com/" method="POST" name="form-wizard" class="form-control-with-bg">
				<!-- begin wizard -->
				<div id="wizard">
					<!-- begin wizard-step -->
					<ul>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-1">
								<span class="number">1</span> 
								<span class="info text-ellipsis">
									Form Info
									<small class="text-ellipsis">Form No., Admission No., Class and Session</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-2">
								<span class="number">2</span> 
								<span class="info text-ellipsis">
									Personal Info
									<small class="text-ellipsis">Name, Father Name, Mother Name and DOB</small>
								</span>
							</a>
						</li>
						<li class="col-md-2 col-sm-4 col-6">
							<a href="#step-3">
								<span class="number">3</span> 
								<span class="info text-ellipsis">
									Enter Your Full Address
									<small class="text-ellipsis">Permanent Address and Local Address</small>
								</span>
							</a>
						</li>
						<li class="col-md-2 col-sm-4 col-6">
							<a href="#step-4">
								<span class="number">4</span> 
								<span class="info text-ellipsis">
									Academic Detail
									<small class="text-ellipsis">Academic Record and last School Name</small>
								</span>
							</a>
						</li>
						
						<li class="col-md-2 col-sm-4 col-6">
							<a href="#step-5">
								<span class="number">5</span> 
								<span class="info text-ellipsis">
									Completed
									<small class="text-ellipsis">Complete Registration</small>
								</span>
							</a>
						</li>
					</ul>
					<!-- end wizard-step -->
					<!-- begin wizard-content -->
					<div>
						<!-- begin step-1 -->
						<div id="step-1">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-white">Form No., Admission No., Class and Session</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Enquiry Form No.</label>
											<div class="col-md-6">
												<input type="text" name="form_no" placeholder="#7231" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Admition No. </label>
											<div class="col-md-6">
												<input type="text" name="admission_no" placeholder="312" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Class </label>
											<div class="col-md-6">
												<input type="text" name="class" placeholder="Ist" class="form-control" data-parsley-group="step-1" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Session</label>
											<div class="col-md-6">
												<input type="text" name="session" placeholder="2018" class="form-control" data-parsley-group="step-1" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
									</div>
									<!-- end col-8 -->
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-1 -->
						
						<!-- begin step-2 -->
						<div id="step-2">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-white">Personal info </legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Name of Student <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="sname" placeholder="Student Name" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Father's Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="fname" placeholder="Father's Name" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Mother's Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="mname" placeholder="Mother's Name" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Occuption </label>
											<div class="col-md-6">
												<input type="text" name="ic" placeholder="Occuption" class="form-control" data-parsley-group="step-2" data-parsley-required="true" />
											</div>
										</div>
										<!-- begin form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Contact No.</label>
											<div class="col-md-6">
												<input type="number" name="mobile" placeholder="Mobile No." class="form-control m-b-10" />
											</div>
										</div>
										<!-- end form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Date of Birth <span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<input type="date" name="dob" value="Date Of Birth" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
												
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Place of Birth <span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<input type="text" name="pob" placeholder="Place Of Birth" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
												
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Gender <span class="text-danger">&nbsp;</span></label>
											
												<input style="width:20px; margin-left:20px" type="radio" value="male" name="gender" placeholder="Male" class="form-control"data-parsley-group="step-2" data-parsley-required="true" checked />
											<label class="col-md-1 col-form-label text-md-left">Male</label>
												<input type="radio" style="width:20px;margin-left:20px" value="female" name="gender" value="Female" class="form-control" data-parsley-group="step-2" data-parsley-required="true" />
											<label class="col-md-1 col-form-label text-md-left">Female</label>
												
											
										</div>
										<!-- end form-group -->
										
									</div>
									<!-- end col-8 -->
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-2 -->
						<!-- begin step-3 -->
						<div id="step-3">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 md-offset-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-white">Enter Your Full Address</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Permanent Address</label>
											<div class="col-md-6">
												<input type="text" name="paddress" placeholder="Full Address" data-parsley-group="step-3" data-parsley-required="true" class="form-control m-b-10 " />
												
												<input type="text" name="pdist" placeholder="Enter District" data-parsley-group="step-3" data-parsley-required="true" class="form-control m-b-10 " />
												
												<input type="text" name="pcity" placeholder="Enter City" data-parsley-group="step-3" data-parsley-required="true" class="form-control m-b-10 " />
												
												<input type="text" name="ppost" placeholder="Enter Post-Office" data-parsley-group="step-3" data-parsley-required="true" class="form-control m-b-10 " />
												
												<input type="text" name="ppin" placeholder="Enter Pin-Code" data-parsley-group="step-3" data-parsley-required="true" class="form-control m-b-10 " />
											</div>
										</div>
										
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">local Address (Optional)</label>
											<div class="col-md-6">
												<input type="text" name="laddress" placeholder="Full Address" data-parsley-group="step-3"  class="form-control m-b-10 " />
												
												<input type="text" name="ldist" placeholder="Enter District" data-parsley-group="step-3"  class="form-control m-b-10 " />
												
												<input type="text" name="lcity" placeholder="Enter City" data-parsley-group="step-3"  class="form-control m-b-10 " />
												
												<input type="text" name="lpost" placeholder="Enter Post-Office" data-parsley-group="step-3"  class="form-control m-b-10 " />
												
												<input type="text" name="lpin" placeholder="Enter Pin-Code" data-parsley-group="step-3"  class="form-control m-b-10 " />
											</div>
										</div>
										
										<!-- end form-group -->
										
										
									</div>
									<!-- end col-8 -->
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-3 -->
						
						<!-- begin step-1 -->
						<div id="step-4">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-white">Academic Detail</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Age On 1st April 2018</label>
											<div class="col-md-2">
												<label class="col-md-3 col-form-label text-md-left">Year</label>
												<input type="text" name="year" placeholder="08" data-parsley-group="step-4" data-parsley-required="true" class="form-control" />
											</div>
											<div class="col-md-2">
												<label class="col-md-3 col-form-label text-md-left">Month</label>
												<input type="text" name="month" placeholder="05" data-parsley-group="step-4" data-parsley-required="true" class="form-control" />
											</div>
											<div class="col-md-2">
												<label class="col-md-3 col-form-label text-md-left">Day</label>
												<input type="text" name="day" placeholder="25" data-parsley-group="step-4" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Category <span class="text-danger">&nbsp;</span></label>
											
												<input style="width:20px; margin-left:20px" type="radio" value="gen" name="cat"  class="form-control"data-parsley-group="step-4" data-parsley-required="true" checked />
											<label class="col-md-1 col-form-label text-md-left">General</label>
												<input type="radio" style="width:20px;margin-left:20px" value="obc" name="cat" value="Female" class="form-control" data-parsley-group="step-4" data-parsley-required="true" />
											<label class="col-md-1 col-form-label text-md-left">OBC</label>
												
												<input style="width:20px; margin-left:20px" type="radio" value="sc" name="cat"  class="form-control"data-parsley-group="step-4" data-parsley-required="true"/>
											<label class="col-md-1 col-form-label text-md-left">SC</label>
												<input type="radio" style="width:20px;margin-left:20px" value="st" name="cat" value="Female" class="form-control" data-parsley-group="step-4" data-parsley-required="true" />
											<label class="col-md-1 col-form-label text-md-left">ST</label>
											
											
										</div>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Religion </label>
											<div class="col-md-6">
												<input type="text" name="religion" placeholder="Hindu" data-parsley-group="step-4" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Name of the Last School</label>
											<div class="col-md-6">
												<input type="text" name="school" placeholder="VLM" class="form-control" data-parsley-group="step-4" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Midium of Study <span class="text-danger">&nbsp;</span></label>
											
												<input style="width:20px; margin-left:20px" type="radio" value="english" name="midium"  class="form-control"data-parsley-group="step-4" data-parsley-required="true" checked />
											<label class="col-md-1 col-form-label text-md-left">English</label>
												<input type="radio" style="width:20px;margin-left:20px" value="obc" name="midium" value="hindi" class="form-control" data-parsley-group="step-4" data-parsley-required="true" />
											<label class="col-md-1 col-form-label text-md-left">Hindi</label>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-form-label text-md-right">Detail of Last Academic Record <span class="text-danger">&nbsp;</span></label>
											<table class="table table-bordered">
												<thead>
													<tr>
														<th>Class</th>
														<th>Board</th>
														<th>Institution</th>
														<th>Year</th>
														<th>Percentage</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<input type="text" name="class" placeholder="Class" data-parsley-group="step-4" data-parsley-required="true" class="form-control" />
														</td>
														<td>
															<input type="text" name="board" placeholder="Name Of Board" data-parsley-group="step-4" data-parsley-required="true" class="form-control" />
														</td>
														<td>
															<input type="text" name="institution" placeholder="Name Of Institute" data-parsley-group="step-4" data-parsley-required="true" class="form-control" />
														</td>
														<td>
															<input type="text" name="year" placeholder="Year" data-parsley-group="step-4" data-parsley-required="true" class="form-control" />
														</td>
														<td>
															<input type="text" name="percentage" placeholder="Percentage in Class" data-parsley-group="step-4" data-parsley-required="true" class="form-control" />
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- end col-8 -->
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-4 -->
						<!-- begin step-4 -->
						<div id="step-5">
							<div class="jumbotron m-b-0 text-center">
								<h2 class="text-white">Register Successfully</h2>
								<p><a href="generate_bill.php" class="btn btn-primary btn-lg">Go To Bill Section</a></p>
							</div>
						</div>
						<!-- end step-4 -->
					</div>
					<!-- end wizard-content -->
				</div>
				<!-- end wizard -->
			</form>
			<!-- end wizard-form -->
		</div>
		<!-- end #content -->
<?php //include'include/footer.php';?>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?=base_url()?>assetsAdmin/crossbrowserjs/html5shiv.js"></script>
		<script src="<?=base_url()?>assetsAdmin/crossbrowserjs/respond.min.js"></script>
		<script src="<?=base_url()?>assetsAdmin/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?=base_url()?>assetsAdmin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/theme/transparent.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/parsley/dist/parsley.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/form-wizards-validation.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			FormWizardValidation.init();
		});
	</script>
</body>


</html>

