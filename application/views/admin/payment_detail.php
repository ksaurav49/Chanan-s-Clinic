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
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
<?php// include'include/header.php';?>
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
				<div class="col-lg-6">
			     
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
                            <h4 class="panel-title">ABC Payment</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                        	<!-- begin table-responsive -->
                        	<div class="table-responsive">
								<table class="table m-b-0">
                                                                    <?php
                                                                    $id = $this->uri->segment(2);
                                                                    $r=$this->db->query("select * from pay_sum where pay_id='$id'");
                                                                    $ro = $r->row();
                                                                    $query=$this->db->query("select * from patient where id='$id'");
                                                                    $row = $query->row();
                                                                    
                                                                    ?>
									<thead>
										<tr style="font-size:15px; padding:10px;">
											<th width="50%"></th>
											<th width="1%"></th>
											<th></th>
										</tr>
									</thead>
									<thead>
										<tr style="font-size:15px; padding:10px;">
											<th width="50%">Patient Id</th>
											<th width="1%">:</th>
											<th><?=$row->id?></th>
										</tr>
									</thead>
									<thead>
										<tr style="font-size:15px; padding:10px;">
											<th>Bill No.</th>
											<th width="1%">:</th>
											<th><?=$ro->id?></th>
										</tr>
									</thead>
									<thead>
										<tr style="font-size:15px; padding:10px;">
											<th>Patient Name</th>
											<th width="1%">:</th>
											<th><?=$row->fname?></th>
										</tr>
									</thead>
									<thead>
										<tr style="font-size:15px; padding:10px;">
											<th>Department</th>
											<th width="1%">:</th>
											<th>Physiotherapists</th>
										</tr>
									</thead>
									
								</table>
								
								
								<table class="table table-bordered m-b-0">
									
									<thead>
										<tr style="font-size:15px; padding:10px;">
											<th>Date</th>
											<th width="1%">:</th>
											<th>Treatment Fee</th>
											<th>Paid Fee</th>
											<th>Balance Fee</th>
										</tr>
									</thead>
									<tbody>
                                                                <?php
                                                                            $r=$this->db->query("select * from pay_sum where pay_id='$id'");
                                                                            foreach ($r->result() as $value) {
    

                                                                    ?>
										<tr>
											<th><?=$value->date?></th>
											<th width="1%">:</th>
											<th class="text-primary"><i class="fa fa-rupee"></i>&nbsp;<?=$value->total?></th>
											<th class="text-success"><i class="fa fa-rupee"></i>&nbsp;<?=$value->paid?></th>
											<th class="text-danger"><i class="fa fa-rupee"></i>&nbsp;<?=$value->rest?></th>
										</tr>
										
                                                                            <?php } ?>
									</tbody>
								</table>
								
                            </div>
							<!-- end table-responsive -->
                        </div>
                        <!-- end panel-body -->

                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
				</div>
			    <!-- begin col-6 -->
				<div class="col-lg-6">
			     
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
                            <h4 class="panel-title">Add Receipt Item </h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                        	<!-- begin table-responsive -->
                        	<div class="table-responsive">
                                                                <?php $a=date('Y-m-d'); ?>
                                    <form action="<?=base_url()?>AdminSideController/paySubmit/<?=$id?>" method="post">
								<table class="table table-responsive">
									<thead>
										<tr>
											<th >Receipt Date :</th>
											<th ><input type="text" name="date" value="<?=$a?>" style="padding:5px; border-radius:5px; background-color:transparent;" class="width-200 text-white" disabled=""></th>
                                                                                        <th></th>
										</tr>
									</thead>
									<thead>
										
									</thead>
									<tr>
											<th>Total amount:  <input style="padding:5px; width:200%; border-radius:5px; font-size:15px; background-color:transparent;" type="text" placeholder="Enter Total Amount" name="total" class="text-white"></th>
											<th></th>
											<th></th>
											
										</tr>
                                                                                <tr>
											<th>Amount paid:<input style="padding:5px; width:200%; border-radius:5px; font-size:15px; background-color:transparent;" type="text" placeholder="Enter Amount paid" name="paid" class="text-white"></th>
											<th></th>
											<th></th>
											
										</tr>
                                                                                <tr >
											
											<th><input type="submit" class="btn btn-primary btn-block"></th>
											<th ></th>
                                                                                        <th></th>
										</tr>
									
								</table>
                                    </form>
									
										
								
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

