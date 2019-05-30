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
                <script type="application/javascript" src="<?= base_url()?>assets/sweet.js"></script>
	<!-- ================== END BASE JS ================== -->
<?php //include'include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Gallery Management</a></li>
				<li class="breadcrumb-item active">Gallery View</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Gallery View Table <small>Manage Gallery...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">

			    <!-- begin col-6 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="table-basic-7">
                    	<!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Chanan's - Clinic Gallery Management <span class="label label-success m-l-5 t-minus-1">NEW</span></h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                        	<!-- begin table-responsive -->
             
                        	<div class="table-responsive">
								<table class="table table-striped m-b-0">
									<thead>
										<tr>
                                                                                        <th>S.no</th>
											<th>Image View</th>
											<th>Image Name</th>
											<th>Image Desription</th>
											
											
											<th width="1%">Action</th>
										</tr>
									</thead>
									<tbody>
                   <?php
                   $j=0;
                   $query=$this->db->query("select * from gall");
               foreach ($query->result() as $row)
             {
              $image= $row->image;
              $i=$row->id;
              $name= $row->name;
              $descr= $row->descr;
              $j++;
              if($row->type=="video"){
              ?>
										<tr>
                                                                                    <td><?=$j?></td>
                                                                                    
											<td class="with-img">
                                                                                            
												<iframe src="<?=$row->img?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                                                           
                                                                                                        
                                                                                                  
											</td>
											
											<td><?=$row->class?></td>
											<td><?=$row->descr?></td>
											
											<td class="with-btn" nowrap>
												
                                                                                            <a href="<?=base_url()?>AdminSideController/galleryDelSubmitv/<?=$row->id?>/<?=$row->img?>" class="btn btn-sm btn-primary width-60" style="margin-top: 3px">Delete</a>
											</td>
										</tr>
              <?php } }?>
										
									</tbody>
								</table>
							</div>
							<!-- end table-responsive -->
                        </div>
                        <!-- end panel-body -->
                        <!-- begin hljs-wrapper -->
                       <!-- <div class="hljs-wrapper">
                        <pre><code class="html">&lt;table class="table"&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;!-- with image --&gt;
      &lt;td class="with-img"&gt;...&lt;/td&gt;
		
      &lt;!-- with button --&gt;
      &lt;td class="with-btn"&gt;...&lt;/td&gt;
		
      &lt;!-- with button group --&gt;
      &lt;td class="with-btn-group"&gt;...&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
						</div>-->
                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
			    </div>
			    <!-- end col-6 -->
			</div>
			<!-- end row -->
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
	<script src="<?=base_url()?>assetsAdmin/plugins/highlight/highlight.common.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/render.highlight.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
        <?php

    if($this->session->flashdata('item')){
        $item=$this->session->flashdata('item');
    if($item == "yes"){ ?>
         <script> swal("Successfully deleted!!!", "Browse to add more..", "success");</script>
    <?php }else if ($item == "no"){ ?>
        <script>swal("opps something went wrong!!!", "Please try again...", "error");</script>
   <?php     
    }
    }

?>
	<script>
		$(document).ready(function() {
			App.init();
			Highlight.init();
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

