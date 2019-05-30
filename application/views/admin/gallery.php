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
  	<link href="<?=base_url()?>assetsAdmin/plugins/isotope/isotope.css" rel="stylesheet" />
  	<link href="<?=base_url()?>assetsAdmin/plugins/lightbox/css/lightbox.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<link href="<?=base_url()?>assetsAdmin/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
         <script type="application/javascript" src="<?= base_url()?>assets/sweet.js"></script>
	<!-- ================== END BASE JS ================== -->
	<?php// include'include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;"> Gallery Management</a></li>
				<li class="breadcrumb-item active">Add New in Gallery</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Add Images Or Videos <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin #options -->
            <div id="options" class="m-b-10">
                <span class="gallery-option-set" id="filter" data-option-key="filter">
                    <a href="#show-all" class="btn btn-default btn-xs " data-option-value=".gallery-group-1">Show All</a>
                    <a href="#gallery-group-1" class="btn btn-default btn-xs active" data-option-value="">-</a>
                </span>
            </div>
            <!-- end #options -->
			<div class="row">
				
			<div class="col-lg-2"></div>
                
			    <div class="col-lg-8">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Add Images Or Videos...</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?= base_url()?>AdminSideController/gallerySubmit" method="post" enctype="multipart/form-data" data-parsley-validate="true">
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Select Gallery * :</label>
									<div class="col-md-8 col-sm-8">
                                                                            <input class="form-control" type="file" id="fullname" name="image" placeholder="Required" data-parsley-required="true" accept="video/*,image/*" />
                                                                            <span class="text-danger" style="font-size: 10px;font-weight: bold">Note* :- Resolution of image must be (331 x 332)</span>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Image or Videos Name * :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="fullname" name="name" placeholder="Required" data-parsley-required="true" />
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="discr">Discription * :</label>
									
									<div class="col-md-8 col-sm-8">
										<textarea class="form-control" id="message" name="descr" rows="4" placeholder="Message Range from 20 - 400" required></textarea>
									</div>
								</div>
								
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">
                                                                            <button type="submit" class="btn btn-primary">Submit</button>
									</div>
                                                                        
								</div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
			<div class="col-lg-2"></div>
			</div>
            <!-- begin #gallery -->
            
            <!-- end #gallery -->
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
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
	<script src="<?=base_url()?>assetsAdmin/plugins/isotope/jquery.isotope.min.js"></script>
  	<script src="<?=base_url()?>assetsAdmin/plugins/lightbox/js/lightbox.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/gallery.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/parsley/dist/parsley.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/highlight/highlight.common.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/render.highlight.js"></script>
	 <?php

    if($this->session->flashdata('item')){
        $item=$this->session->flashdata('item');
    if($item == "yes"){ ?>
         <script> swal("Successfully added!!!", "Browse to add more..", "success");</script>
    <?php }else if ($item == "no"){ ?>
        <script>swal("opps something went wrong!!!", "Please try again...", "error");</script>
   <?php     
    }
    }

?>
	<script>
		$(document).ready(function() {
			App.init();
			Gallery.init();
		});
	</script>
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>

	
</html>

