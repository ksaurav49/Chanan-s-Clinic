<!DOCTYPE html>

<html lang="en">
	
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Profile Page</title>
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
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
	<link href="<?=base_url()?>assetsAdmin/plugins/superbox/css/superbox.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/lity/dist/lity.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
<?php// include'include/header.php';?>
		<!-- begin #content -->
		<div id="content" class="content content-full-width">
			<!-- begin profile -->
			<div class="profile">
				<div class="profile-header">
					<!-- BEGIN profile-header-cover -->
					<div class="profile-header-cover"></div>
					<!-- END profile-header-cover -->
					<!-- BEGIN profile-header-content -->
					<div class="profile-header-content">
						<!-- BEGIN profile-header-img -->
						<div class="profile-header-img">
							<img src="<?=base_url()?>assetsAdmin/img/user/user-13.jpg" alt="">
						</div>
                                                <?php
                                                $id = $this->uri->segment(2);
                   
                    $r=$this->db->query("select * from patient where id='$id'");
            $row = $r->row();
            ?>
						<!-- END profile-header-img -->
						<!-- BEGIN profile-header-info -->
						<div class="profile-header-info">
							<h4 class="m-t-10 m-b-5"><?=$row->fname?>  <?=$row->lname?></h4>
							
						</div>
						<!-- END profile-header-info -->
					</div>
					<!-- END profile-header-content -->
					<!-- BEGIN profile-header-tab -->
					<ul class="profile-header-tab nav nav-tabs">
						<li class="nav-item"><a href="#profile-about" class="nav-link active" data-toggle="tab">ABOUT</a></li>
						<li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">PHOTOS</a></li>
						<li class="nav-item"><a href="#profile-videos" class="nav-link" data-toggle="tab">VIDEOS</a></li>
						<li class="nav-item"><a href="#profile-friends" class="nav-link" data-toggle="tab">PAYMENTS</a></li>
					</ul>
					<!-- END profile-header-tab -->
				</div>
			</div>
			<!-- end profile -->
			<!-- begin profile-content -->
            <div class="profile-content">
            	<!-- begin tab-content -->
            	<div class="tab-content p-0">
            		<!-- begin #profile-about tab -->
            		<div class="tab-pane fade show active" id="profile-about">
						<!-- begin table -->
						<div class="table-responsive">
							<table class="table table-profile">
								<thead>
									<tr>
										<th></th>
										<th>
											<h4><?=$row->fname?> <?=$row->lname?> <small>ABOUT HERE</small></h4>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr class="highlight">
										<td class="field">First Name</td>
										<td><?=$row->fname?></td>
									</tr>
									<tr class="highlight">
										<td class="field">Last Name</td>
										<td><?=$row->lname?></td>
									</tr>
									<tr class="divider">
										<td colspan="2"></td>
									</tr>
									<tr>
										<td class="field">Mobile</td>
										<td><i class="fa fa-mobile fa-lg m-r-5"></i> <?=$row->phone?> </td>
									</tr>
									<tr>
										<td class="field">Email</td>
										<td><?=$row->email?></td>
									</tr>
									
									<tr class="divider">
										<td colspan="2"></td>
									</tr>
									<tr class="highlight">
										<td class="field">Address</td>
										<td><?=$row->adress?></td>
									</tr>
									<tr class="divider">
										<td colspan="2"></td>
									</tr>
									<tr>
										<td class="field">Country/Region</td>
										<td>
                                                                                    <i class="fa fa-flag">&nbsp;India</i>
										</td>
									</tr>
									
									
									<tr class="divider">
										<td colspan="2"></td>
									</tr>
									
								</tbody>
							</table>
						</div>
						<!-- end table -->
					</div>
                        <?php
                                                $id = $this->uri->segment(2);
                   
                    $res=$this->db->query("select * from gallery where pid='$id' AND type = 'image'");
                    $c=$res->num_rows();
           ?>
            		<!-- end #profile-about tab -->
            		<!-- begin #profile-photos tab -->
                        <div class="tab-pane fade in" id="profile-photos" >
            			<h4 class="m-t-0 m-b-20">Photos (<?=$c?>)</h4>
						<!-- begin superbox -->
						
                <!-- begin image -->
					
            <div id="gallery" class="gallery">
                <div class="image gallery-group-2">
                    <?php	 foreach ($res->result() as $roe)
                                    {
            ?>
                    <div class="image-inner">
                        <a href="<?=base_url()?>assets/image/pgallery/<?=$roe->image?>" data-lightbox="gallery-group-2">
                            <img src="<?=base_url()?>assets/image/pgallery/<?=$roe->image?>" alt="" />
                        </a>
                    </div>
                    <div class="image-info">
                        <h5 class="title"><?=$roe->name?></h5>
                        <div class="pull-right">
                            <small>On</small> <a href="javascript:;"><?=$roe->date?></a>
                        </div>
                        <div class="rating">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <div class="desc">
                            <?=$roe->descr?>
                        </div>
                    </div>
                     <?php } ?>
                </div>
               
                <!-- end image -->
						<!-- end superbox -->
            		</div>
            		<!-- end #profile-photos tab -->
					</div>
                                    <?php
                                                $id = $this->uri->segment(2);
                   
                    $resu=$this->db->query("select * from gallery where pid='$id' AND type = 'video'");
                    $cd=$resu->num_rows();
           ?>
            		
            		<!-- begin #profile-videos tab -->
            		<div class="tab-pane fade in" id="profile-videos">
            			<h4 class="m-t-0 m-b-20">Videos (<?=$cd?>)</h4>
            			<!-- begin row -->
            			<div class="row row-space-1">
            				<!-- begin col-3 -->
                                        <?php	 foreach ($resu->result() as $roee)
                                    {
            ?>	
            				<div class="col-md-6 ">
            					<iframe width="560" height="315" src="<?=$roee->image?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            				</div>
            				<!-- end col-3 -->
                                    <?php } ?>
            			</div>
            			<!-- end row -->
            		</div>
            		<!-- end #profile-videos tab -->
            		<!-- begin #profile-friends tab -->
            		<div class="tab-pane fade in" id="profile-friends">
            			<h4 class="m-t-0 m-b-20">Payment List</h4>
            			<!-- begin row -->
            			<div class="row row-space-2">
            				<!-- begin col-6 -->
							<div class="col-md-3 m-b-2">
            					
									<table id="data-table-colreorder" class="table table-striped table-bordered m-b-0">
                                <thead>
                                    <tr>
                                    	<th width="9%">S.no</th>
                                        
                       
                                        <th class="text-nowrap">Date</th>
                                        <th class="text-nowrap">Total Amount</th>
                                        <th class="text-nowrap">Amount paid</th>
                                        <th class="text-nowrap">Amount Left</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                   $l=0;
                                   $id = $this->uri->segment(2);
                                   $i=1;
                                   $r= $this->db->query("select * from pay_sum where p_id='$id'");
                                   foreach ($r->result() as $roww)
                                    {
                                       $l=$l+$roww->rest;
                                       $name=$row->name;
                                       $status=$row->status;
        
                                   
                                   
                                   ?>
									<tr>
                                    	<td width="9%" class="f-s-600"><?=$i?></td>
                                        <td><?=$roww->date?></td>
                                        <td><i class="fa fa-rupee">&nbsp;<?=$roww->total?></i></td>
                                        <td><i class="fa fa-rupee">&nbsp;<?=$roww->paid?></i></td>
                                        <td><i class="fa fa-rupee">&nbsp;<?=$roww->rest?></i></td>
                                        
                                        
										
                                    </tr>
<?php $i++; } ?>
                                   
                                </tbody>
                            </table>
								
            				</div>
							<div class="col-md-3 m-b-2"></div>
            				<!-- end col-6 -->
							<div class="col-md-3 m-b-2"></div>
            				<!-- begin col-6 -->
            				<div class="col-md-6 m-b-2">
            					<div class="p-10 ">
									<div class="media media-xs overflow-visible">
										
										<div class="media-body valign-middle">
											<b>Total Amount left:</b>
										</div>
										<div class="media-body valign-middle  overflow-visible">
											<div class="btn-group dropdown">
												<td class="with-btn" nowrap>
                                                                                                    <a href="" class="btn btn-sm btn-primary  m-r-2"><i class="fa fa-rupee">&nbsp;<?=$l?></i></a>
										</td>
											</div>
										</div>
									</div>
								</div>
            				</div>
            				<!-- end col-6 -->
							<div class="col-md-3 m-b-2"></div>
            			</div>
            			<!-- end row -->
            		</div>
            		<!-- end #profile-friends tab -->
				</div>
            	<!-- end tab-content -->
            </div>
			<!-- end profile-content -->
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
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/superbox/js/jquery.superbox.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/lity/dist/lity.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/profile.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Profile.init();
			
			Gallery.init();
		});
	</script>
</body>


</html>

