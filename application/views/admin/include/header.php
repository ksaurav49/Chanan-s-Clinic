 <?php
  
                                                                                 
   error_reporting(0);
//$pname=$_REQUEST["page"];
$pname=$data;
$class1="";

if(strcmp($pname,"adminRegister")==0)
{
    $class3='active';
}
else if(strcmp($pname,"adminLogin")==0)
{
    $class3='active';
}
else if(strcmp($pname,"adminSlide")==0)
{
    $class2='active';
}
else if(strcmp($pname,"delSlider")==0)
{
    $class2='active';
}
else if(strcmp($pname,"ga")==0)
{
    $class4='active';
}
else if(strcmp($pname,"gad")==0)
{
    $class4='active';
}
else if(strcmp($pname,"gav")==0)
{
    $class4='active';
}
else if(strcmp($pname,"gadv")==0)
{
    $class4='active';
}
else if(strcmp($pname,"fam")==0)
{
    $class6='active';
}
else if(strcmp($pname,"apoint")==0)
{
    $class7='active';
}
else if(strcmp($pname,"apointt")==0)
{
    $class7='active';
}
else if(strcmp($pname,"pe")==0)
{
    $class8='active';
}
else if(strcmp($pname,"pay")==0)
{
    $class8='active';
}
else if(strcmp($pname,"ep")==0)
{
    $class8='active';
}
else if(strcmp($pname,"pd")==0)
{
    $class8='active';
}
else if(strcmp($pname,"evm")==0)
{
    $class9='active';
}


else
{
	$class1='active';
}

  if ($this->session->userdata('is_logged_in')){
                                                                
   $name=$this->session->userdata('name');
   $log="Logout";
   $path="adminSideController/logout";
   }else{
   $name=Admin;
   $log="Login";
   $path="adminLogin";
   }

?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
/* width */
::-webkit-scrollbar {
    width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 0 ; 
    border-radius: 10px;
	margin-left: 5px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: transparent; 
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #3A3B3D; 
}
</style>
</head>
<body>
	<!-- begin page-cover -->
	<div class="page-cover"></div>
	<!-- end page-cover -->
	
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><span class="navbar-logo"></span> <b>Chanan's - Clinic</b> Admin</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li>
					<form class="navbar-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</li>
				<li class="dropdown">
					<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                                            <i class="fa fa-sign-out"> <?=$log?></i>
						<!--<span class="label">5</span>-->
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
<!--						<li class="dropdown-header">NOTIFICATIONS (5)</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-bug media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
									<div class="text-muted f-s-11">3 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
									<i class="fa fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">John Smith</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">25 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
									<i class="fa fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Olivia</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">35 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-plus media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New User Registered</h6>
									<div class="text-muted f-s-11">1 hour ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-envelope media-object bg-silver-darker"></i>
									<i class="fa fa-google text-warning media-object-icon f-s-14"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New Email From John</h6>
									<div class="text-muted f-s-11">2 hour ago</div>
								</div>
							</a>
						</li>-->
						<li class="dropdown-footer text-center">
							<a href="<?=base_url()?><?=$path?>"><?=$log?></a>
						</li>
					</ul>
				</li>
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?=base_url()?>assetsAdmin/img/user/user-13.jpg" alt="" /> 
						<span class="d-none d-md-inline"><?=$name?></span> 
					</a>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div class="slimScrollDiv" style="position: relative; overflow: auto; width: auto; height: 100%;"><div data-scrollbar="true" data-height="100%" style="overflow: auto; width: auto; height: 100%;" data-init="true">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="image">
								<img src="<?=base_url()?>assetsAdmin/img/user/user-13.jpg" alt="">
							</div>
							<div class="info">
                                                           
								<?=$name?>
<!--								<small>Front end developer</small>-->
							</div>
						</a>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub <?=$class1?>">
						<a href="<?=base_url()?>adminDash">
					        <!--<b class="caret"></b>-->
						    <i class="fa fa-th-large"></i>
						    <span>Dashboard</span>
					    </a>
				<!--		<ul class="sub-menu">
						    <li class="active"><a href="index.php">Dashboard</a></li>
						</ul>-->
					</li>
                                        <li class="has-sub <?=$class6?>">
						<a href="<?=base_url()?>fam">
					        <!--<b class="caret"></b>-->
						    <i class="fa fa-question-circle" style="font-size:18px"></i>
						    <span>Faq Managment</span>
					    </a>
						
					</li>
                                        <li class="has-sub <?=$class9?>">
						<a href="<?=base_url()?>evm">
					        <!--<b class="caret"></b>-->
						    <i class="fa fa-question-circle" style="font-size:18px"></i>
						    <span>Event Managment</span>
					    </a>
						
					</li>
                                        
                                        <li class="has-sub <?=$class7?>">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-plus-square"></i>
						    <span>Appoint Managment</span>
						</a>
					    <ul class="sub-menu">
					        <li><a href="<?=base_url()?>apoint">New Appointment</a></li>
					        <li><a href="<?=base_url()?>apointt">Today's Appointment</a></li>
					    </ul>
					</li>
                                        <li class="has-sub <?=$class8?>">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-image"></i>
						    <span>Patient Managment</span>
						</a>
					    <ul class="sub-menu">
					        <li><a href="<?=base_url()?>pe">New Patient</a></li>
					        <li><a href="<?=base_url()?>ep">Patient List</a></li>
					    </ul>
					</li>
                                        
					
					<li class="has-sub <?=$class2?>">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-image"></i>
						    <span>Slider Managment</span>
						</a>
					    <ul class="sub-menu">
					        <li><a href="<?=base_url()?>adminSlide">Add Slider</a></li>
					        <li><a href="<?=base_url()?>delSlider">Delete slider</a></li>
					    </ul>
					</li>
					
                                        <li class="has-sub <?=$class4?>">
					    <a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-image"></i>
						    <span>Gallery Managment</span>
						</a>
					    <ul class="sub-menu">
					        <li><a href="<?=base_url()?>ga">Add image</a></li>
					        <li><a href="<?=base_url()?>gad">Delete image</a></li>
                                                <li><a href="<?=base_url()?>gav">Add video</a></li>
					        <li><a href="<?=base_url()?>gadv">Delete video</a></li>
					    </ul>
					</li>
                                        
                                        
					
					
					
					
					
					<li class="has-sub <?=$class3?>">
					    <a href="javascript:;">
					        <b class="caret"></b>
					        <i class="fa fa-key"></i>
					        <span>Login &amp; Register</span>
					    </a>
					    <ul class="sub-menu">
                                                <li><a href="<?=base_url()?>adminLogin">Login</a></li>
					        
					        <li><a href="<?=base_url()?>adminRegister">Register</a></li>
					    </ul>
					</li>
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 424.681px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>