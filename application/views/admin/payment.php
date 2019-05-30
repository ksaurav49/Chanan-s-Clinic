<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->
	
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
<?php //include'include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Payment Desk</a></li>
				<li class="breadcrumb-item active">Payment Detail...</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Payment Desk <small>Payments...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-6 -->
				<div class="col-lg-3"> 
					
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-11">
                        <!-- begin panel-heading -->
                
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form" action="search.php" method="POST">
								<div class="form-group m-r-10">
									<select style="width:100%; padding:5px; color:white; background-color:transparent; border-radius:10px;">
										<option style="width:100%; padding:5px;margin-top:10px; color:black; background-color:transparent; border-radius:10px;">2017-2018</option>
										
										<option style="width:100%; padding:5px;margin-top:10px; color:black; background-color:transparent; border-radius:10px;">2018-2019</option>
									</select>
								</div>
								<div class="form-group m-r-10">
									<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter Patient Id Or Name" />
								</div>
								
								<button type="submit" class="btn btn-sm btn-primary m-r-5">Search</button>
							</form>
                        </div>
                        <!-- end panel-body -->
                        <!-- begin hljs-wrapper -->

                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
                </div>
					
			        <!-- begin panel -->
				<div class="col-lg-9">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="table-basic-6">
                    	<!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">ABC Payment Details</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                        	<!-- begin table-responsive -->
                        	<div class="table-responsive">
								
			<h1 class="page-header">Patient Name: ABC <small>Payment Detail...</small></h1>
								<table class="table table-bordered m-b-0">
									<thead>
										<tr style="font-size:15px; padding:10px;">
											<th width="50%">Treatment Fee</th>
											<th width="1%">:</th>
											<th><i class="fa fa-rupee"></i>&nbsp;1000</th>
										</tr>
									</thead>
									<thead>
										<tr style="font-size:15px; padding:10px;">
											<th>Tax</th>
											<th width="1%">:</th>
											<th><i class="fa fa-rupee"></i>&nbsp;100</th>
										</tr>
									</thead>
									<thead>
										<tr style="font-size:20px; padding:10px;">
											<th>Total Fee</th>
											<th width="1%">:</th>
											<th ><i class="fa fa-rupee"></i>&nbsp;1100</th>
										</tr>
									</thead>
									<thead>
										<tr style="font-size:20px; padding:10px;">
											<th>Paid Fee</th>
											<th width="1%">:</th>
											<th class="text-success"><i class="fa fa-rupee"></i>&nbsp;1200</th>
										</tr>
									</thead>
									<thead>
										<tr style="font-size:20px; padding:10px;">
											<th>Balance Fee</th>
											<th width="1%">:</th>
											<th class="text-danger"><i class="fa fa-rupee"></i>&nbsp;-100</th>
										</tr>
									</thead>
								</table>
									<td class="with-btn" nowrap>
											<a href="extra_profile.php" class="btn btn-sm btn-primary width-80 height-40 m-r-2" style="margin-top:20px; padding:10px;" >Profile</a>
										</td>
										<td class="with-btn" nowrap>
											<a href="payment_detail.php"  style="float:right; margin-top:20px;padding:10px;" class="btn btn-sm btn-success width-80 height-40 m-r-2">Pay Fee</a>
										</td>
								
                            </div>
							<!-- end table-responsive -->
                        </div>
                        <!-- end panel-body -->

                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
				</div>
			</div>
	</div>
			   
	</div>
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
	<script src="<?=base_url()?>assetsAdmin/plugins/highlight/highlight.common.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/render.highlight.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
			Highlight.init();
		});
	</script>
	
</body>


</html>

