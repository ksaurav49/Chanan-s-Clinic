<!DOCTYPE html>

<html lang="en">
	
<head>
	<meta charset="utf-8" />
	<title>Chanan's - Clinic | Admin</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	<!--<link href="<?=base_url()?>assetsAdmin/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />-->
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
        <script type="text/javascript">
    $(document).ready(function() {
        $('#ajax').click(function() {
    alert("hh");
    var fname = $("#fname").val();
    var email = $("#email").val();
    var lname = $("#lname").val();
    var date = $("#date").val();
    var depart = $("#depart").val();
    var adress = $("#adress").val();
    var phone = $("#phone").val();
    alert(depart);
    
    //swal("hello");
    
    jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "AdminSideController/patientEntrySubmit",
dataType: 'json',
data: {fname: fname,lname: lname, email: email, phone: phone, date: date, depart: depart,adress: adress},
success: function(res) {
if (res)
{
    $("#a").css("display", "block");
    setTimeout(function() {
    $('#a').fadeOut('slow','swing');
}, 3000);
    
  $('.appoint').val("");
// Show Entered Value

}
}
});
    });
    });

 </script>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Patient Entry Form</a></li>
				<li class="breadcrumb-item active">Patient entry</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">New Patient <small>Patient Details...</small></h1>
			<!-- end page-header -->
			
			<!-- begin wizard-form -->
			<form  action="<?=base_url()?>AdminSideController/patientEntrySubmit" method="post" name="form-wizard" class="form-control-with-bg">
				<!-- begin wizard -->
				<div id="wizard">
					<!-- begin wizard-step -->
					<ul>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-1">
								<span class="number">1</span> 
								<span class="info text-ellipsis">
									Personal Info
									<small class="text-ellipsis">Name, Address, Dipartment and DOB</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-2">
								<span class="number">2</span> 
								<span class="info text-ellipsis">
									Enter your contact
									<small class="text-ellipsis">Email and phone no. is required</small>
								</span>
							</a>
						</li>
						
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-4">
								<span class="number">3</span> 
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
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-white">Personal info about yourself</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">First Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
                                                                                            <input type="text" id="fname" name="fname" placeholder="John" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Last Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" id="lname" name="lname" placeholder="Smith" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">D.O.B <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="date" id="date" name="date" placeholder="Smith" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Department <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" id="depart" name="depart" placeholder="Physiotherapists" class="form-control" data-parsley-group="step-1" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Address <span class="text-danger">*</span></label>
											<div class="col-md-9">
												<input type="text"id="adress" name="adress" placeholder="Address " class="form-control m-b-10" />
												
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
									<div class="col-md-8 md-offset-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-white">Your contact info, so that we can easily reach you</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Phone Number <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="number" name="phone" id="phone" placeholder="123-456-7890" data-parsley-group="step-2" data-parsley-required="true" data-parsley-type="number" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Email Address <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="email" name="email" id="email" placeholder="someone@example.com" class="form-control" data-parsley-group="step-2" data-parsley-required="true" data-parsley-type="email" />
											</div>
										</div>
                                                                                <div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Appointment time <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="number" name="time" id="email" placeholder="someone@example.com" class="form-control" data-parsley-group="step-2" data-parsley-required="true" data-parsley-type="email" />
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
						<!-- end step-2 -->
						<!-- begin step-4 -->
						<div id="step-4">
							<div class="jumbotron m-b-0 text-center">
								
                                                            <button class="btn btn-primary btn-lg" type="submit">Click here to submit</button>
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
<?php// include'include/footer.php';?>
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

