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
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
	<link href="<?=base_url()?>assetsAdmin/css/default/invoice-print.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
<?php// include'include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb hidden-print pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Payment Invoice</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header hidden-print">Invoice <small class="text-white">Payment Info...</small></h1>
			<!-- end page-header -->
			
			<!-- begin invoice -->
			<div class="invoice" style="background-color:white">
                <!-- begin invoice-company -->
                <div class="invoice-company text-black f-w-600">
                    <span class="pull-right hidden-print">
                    <a href="javascript:;" onclick="window.export()" class="btn btn-sm btn-warning m-b-10 p-l-5"><i class="fa fa-file-pdf t-plus-1 text-primary fa-fw fa-lg"></i> Export as PDF</a>
                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-primary m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
                    </span>
                    Chanan's Clinic, Inc
                </div>
                <!-- end invoice-company -->
                <!-- begin invoice-header -->
                <div class="invoice-header">
                    <div class="invoice-from">
                        <small class="text-black">from</small>
                        <address class="m-t-5 m-b-5 text-black">
                            <strong class="text-black">Chanan's Clinic, Inc.</strong><br />
                            Street Address<br />
                            City, Zip Code<br />
                            Phone: (123) 456-7890<br />
                            Fax: (123) 456-7890
                        </address>
                    </div>
                    <?php
                    $a=date('Y-m-d');
                    $id = $this->uri->segment(2);
                    //$id=$this->uri_segment(3);
                    $r=$this->db->query("select * from patient where id='$id'");
            $row = $r->row();
            
            
            ?>
                    <div class="invoice-to">
                        <small class="text-black">to</small>
                        <address class="m-t-5 m-b-5 text-black">
                            <strong class="text-black">Patient Name: <?=$row->fname?></strong><br />
                            <?=$row->adress?><br />
                            Phone: <?=$row->phone?><br />
                            Email: <?=$row->email?>
                        </address>
                    </div>
                    <div class="invoice-date">
                        <div class="date text-black m-t-5"><?=$a?></div>
                        <div class="invoice-detail text-black">
                            #0000123DSS<br />
                            Department : Physiotherapists
                        </div>
                    </div>
                </div>
                <!-- end invoice-header -->
                <!-- begin invoice-content -->
                <div class="invoice-content">
                	<!-- begin table-responsive -->
                    <div class="table-responsive">
                        <table class="table table-invoice">
                            <thead>
                                <tr>
                                    <th class="text-black">DATE</th>
                                    <th class="text-black">TOTAL Amount</th>
                                    <th class="text-center text-black" width="10%">TOtal paid</th>
                                    <th class="text-center text-black" width="10%">AMOUNT LEFT</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $l=0;
                                $query=$this->db->query("select * from pay_sum where p_id='$id'");
                                foreach ($query->result() as $value) {
    
                                    $l=$l+$value->rest;
                                
            ?>
                                <tr>
                                    <td>
                                        <span class="text-black"><i class="fa fa-calendar"></i>&nbsp;<?=$value->date?></span>
                                    </td>
                                    <td>
                                        <span class="text-black"><i class="fa fa-rupee"></i>&nbsp;<?=$value->total?></span>
                                    </td>
                                    <td>
                                        <span class="text-black"><i class="fa fa-rupee"></i>&nbsp;<?=$value->paid?></span>
                                    </td>
                                    <td>
                                        <span class="text-black"><i class="fa fa-rupee"></i>&nbsp;<?=$value->rest?></span>
                                    </td>
                                    
                                   
                                </tr>
                                
                 <?php } ?>              
                            </tbody>
                        </table>
                    </div>
                	<!-- end table-responsive -->
                	<!-- begin invoice-price -->
                    <div class="invoice-price">
                        <div class="invoice-price-left">
                            <div class="invoice-price-row text-black">
                                <div class="sub-price">
                                    <small class="text-black">TOTAL AMOUNT LEFT</small>
                                    <span class="text-black"></span>
                                </div>
                                <div class="sub-price">
                                    <i class="fa fa-plus text-muted"></i>
                                </div>
                                <div class="sub-price">
                                    <small class="text-black"></small>
                                    <span class="text-black"></span>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-price-right">
                            <small class="text-black"></small> <span class="f-w-600 text-black"><i class="fa fa-rupee"></i>&nbsp;<?=$l?></span>
                        </div>
                    </div>
                	<!-- end invoice-price -->
                </div>
                <!-- end invoice-content -->
                <!-- begin invoice-note -->
                <div class="invoice-note text-black">
                    * Make all cheques payable to [Chanan's Clinic]<br />
                    * Payment is due within 30 days<br />
                    * If you have any questions concerning this receipt, contact  us.
                </div>
                <!-- end invoice-note -->
                <!-- begin invoice-footer -->
                <div class="invoice-footer">
                    <p class="text-center text-black m-b-5 f-w-600">
                        THANK YOU 
                    </p>
                    <p class="text-center text-black">
                        <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> chanansclinic.com</span>
                        <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:016-18192302</span>
                        <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> clinic@gmail.com</span>
                    </p>
                </div>
                <!-- end invoice-footer -->
            </div>
			<!-- end invoice -->
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
	
	<script>
		$(document).ready(function() {
			App.init();
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

