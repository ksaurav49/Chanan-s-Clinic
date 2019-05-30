
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
	<link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/transparent/style.min.css" rel="stylesheet" />
	<link href="../assets/css/transparent/style-responsive.min.css" rel="stylesheet" />
	<link href="../assets/css/transparent/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<?php include'include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Managed Tables</a></li>
				<li class="breadcrumb-item active">Buttons</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Managed Tables - Buttons <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-2 -->

			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-lg-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">DataTable - Buttons</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin alert -->
                        <div class="alert alert-warning fade show">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                        </div>
                        <!-- end alert -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th width="1%"></th>
                                    	<th width="1%" data-orderable="false"></th>
                                        <th class="text-nowrap">Rendering engine</th>
                                        <th class="text-nowrap">Browser</th>
                                        <th class="text-nowrap">Platform(s)</th>
                                        <th class="text-nowrap">Engine version</th>
                                        <th class="text-nowrap">CSS grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                    	<td width="1%" class="f-s-600">1</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td>4</td>
                                        <td>X</td>
                                    </tr>
                                    <tr class="even gradeC">
                                    	<td width="1%" class="f-s-600">2</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.0</td>
                                        <td>Win 95+</td>
                                        <td>5</td>
                                        <td>C</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                    	<td width="1%" class="f-s-600">3</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.5</td>
                                        <td>Win 95+</td>
                                        <td>5.5</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="even gradeA">
                                    	<td width="1%" class="f-s-600">4</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                                        <td>Trident</td>
                                        <td>Internet Explorer 6</td>
                                        <td>Win 98+</td>
                                        <td>6</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                    	<td width="1%" class="f-s-600">5</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                                        <td>Trident</td>
                                        <td>Internet Explorer 7</td>
                                        <td>Win XP SP2+</td>
                                        <td>7</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="even gradeA">
                                    	<td width="1%" class="f-s-600">6</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                                        <td>Trident</td>
                                        <td>AOL browser (AOL desktop)</td>
                                        <td>Win XP</td>
                                        <td>6</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">7</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Firefox 1.0</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.7</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">8</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Firefox 1.5</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">9</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Firefox 2.0</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">10</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Firefox 3.0</td>
                                        <td>Win 2k+ / OSX.3+</td>
                                        <td>1.9</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">11</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Camino 1.0</td>
                                        <td>OSX.2+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">12</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Camino 1.5</td>
                                        <td>OSX.3+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">13</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Netscape 7.2</td>
                                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                                        <td>1.7</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">14</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Netscape Browser 8</td>
                                        <td>Win 98SE+</td>
                                        <td>1.7</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">15</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Netscape Navigator 9</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">16</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.0</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td>1</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">17</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.1</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td>1.1</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">18</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.2</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td>1.2</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">19</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.3</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td>1.3</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">20</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.4</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td>1.4</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">21</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.5</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td>1.5</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">22</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.6</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td>1.6</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">23</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.7</td>
                                        <td>Win 98+ / OSX.1+</td>
                                        <td>1.7</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">24</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.8</td>
                                        <td>Win 98+ / OSX.1+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">25</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Seamonkey 1.1</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">26</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Epiphany 2.20</td>
                                        <td>Gnome</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">27</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                                        <td>Webkit</td>
                                        <td>Safari 1.2</td>
                                        <td>OSX.3</td>
                                        <td>125.5</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">28</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                                        <td>Webkit</td>
                                        <td>Safari 1.3</td>
                                        <td>OSX.3</td>
                                        <td>312.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">29</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                        <td>Webkit</td>
                                        <td>Safari 2.0</td>
                                        <td>OSX.4+</td>
                                        <td>419.3</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">30</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                                        <td>Webkit</td>
                                        <td>Safari 3.0</td>
                                        <td>OSX.4+</td>
                                        <td>522.1</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">31</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                                        <td>Webkit</td>
                                        <td>OmniWeb 5.5</td>
                                        <td>OSX.4+</td>
                                        <td>420</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">32</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                                        <td>Webkit</td>
                                        <td>iPod Touch / iPhone</td>
                                        <td>iPod</td>
                                        <td>420.1</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">33</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                                        <td>Webkit</td>
                                        <td>S60</td>
                                        <td>S60</td>
                                        <td>413</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">34</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                                        <td>Presto</td>
                                        <td>Opera 7.0</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td>-</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">35</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                                        <td>Presto</td>
                                        <td>Opera 7.5</td>
                                        <td>Win 95+ / OSX.2+</td>
                                        <td>-</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">36</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                                        <td>Presto</td>
                                        <td>Opera 8.0</td>
                                        <td>Win 95+ / OSX.2+</td>
                                        <td>-</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">37</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                                        <td>Presto</td>
                                        <td>Opera 8.5</td>
                                        <td>Win 95+ / OSX.2+</td>
                                        <td>-</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">38</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                                        <td>Presto</td>
                                        <td>Opera 9.0</td>
                                        <td>Win 95+ / OSX.3+</td>
                                        <td>-</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">39</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                                        <td>Presto</td>
                                        <td>Opera 9.2</td>
                                        <td>Win 88+ / OSX.3+</td>
                                        <td>-</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">40</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                                        <td>Presto</td>
                                        <td>Opera 9.5</td>
                                        <td>Win 88+ / OSX.3+</td>
                                        <td>-</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">41</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                                        <td>Presto</td>
                                        <td>Opera for Wii</td>
                                        <td>Wii</td>
                                        <td>-</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">42</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                                        <td>Presto</td>
                                        <td>Nokia N800</td>
                                        <td>N800</td>
                                        <td>-</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">43</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                        <td>Presto</td>
                                        <td>Nintendo DS browser</td>
                                        <td>Nintendo DS</td>
                                        <td>8.5</td>
                                        <td>C/A<sup>1</sup></td>
                                    </tr>
                                    <tr class="gradeC">
                                    	<td width="1%" class="f-s-600">44</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                                        <td>KHTML</td>
                                        <td>Konqureror 3.1</td>
                                        <td>KDE 3.1</td>
                                        <td>3.1</td>
                                        <td>C</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">45</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                                        <td>KHTML</td>
                                        <td>Konqureror 3.3</td>
                                        <td>KDE 3.3</td>
                                        <td>3.3</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">46</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                                        <td>KHTML</td>
                                        <td>Konqureror 3.5</td>
                                        <td>KDE 3.5</td>
                                        <td>3.5</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeX">
                                    	<td width="1%" class="f-s-600">47</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                                        <td>Tasman</td>
                                        <td>Internet Explorer 4.5</td>
                                        <td>Mac OS 8-9</td>
                                        <td>-</td>
                                        <td>X</td>
                                    </tr>
                                    <tr class="gradeC">
                                    	<td width="1%" class="f-s-600">48</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                                        <td>Tasman</td>
                                        <td>Internet Explorer 5.1</td>
                                        <td>Mac OS 7.6-9</td>
                                        <td>1</td>
                                        <td>C</td>
                                    </tr>
                                    <tr class="gradeC">
                                    	<td width="1%" class="f-s-600">49</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                                        <td>Tasman</td>
                                        <td>Internet Explorer 5.2</td>
                                        <td>Mac OS 8-X</td>
                                        <td>1</td>
                                        <td>C</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">50</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                                        <td>Misc</td>
                                        <td>NetFront 3.1</td>
                                        <td>Embedded devices</td>
                                        <td>-</td>
                                        <td>C</td>
                                    </tr>
                                    <tr class="gradeA">
                                    	<td width="1%" class="f-s-600">51</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                                        <td>Misc</td>
                                        <td>NetFront 3.4</td>
                                        <td>Embedded devices</td>
                                        <td>-</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeX">
                                    	<td width="1%" class="f-s-600">52</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                                        <td>Misc</td>
                                        <td>Dillo 0.8</td>
                                        <td>Embedded devices</td>
                                        <td>-</td>
                                        <td>X</td>
                                    </tr>
                                    <tr class="gradeX">
                                    	<td width="1%" class="f-s-600">53</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                                        <td>Misc</td>
                                        <td>Links</td>
                                        <td>Text only</td>
                                        <td>-</td>
                                        <td>X</td>
                                    </tr>
                                    <tr class="gradeX">
                                    	<td width="1%" class="f-s-600">54</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                                        <td>Misc</td>
                                        <td>Lynx</td>
                                        <td>Text only</td>
                                        <td>-</td>
                                        <td>X</td>
                                    </tr>
                                    <tr class="gradeC">
                                    	<td width="1%" class="f-s-600">55</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                                        <td>Misc</td>
                                        <td>IE Mobile</td>
                                        <td>Windows Mobile 6</td>
                                        <td>-</td>
                                        <td>C</td>
                                    </tr>
                                    <tr class="gradeC">
                                    	<td width="1%" class="f-s-600">57</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                                        <td>Misc</td>
                                        <td>PSP browser</td>
                                        <td>PSP</td>
                                        <td>-</td>
                                        <td>C</td>
                                    </tr>
                                    <tr class="gradeU">
                                    	<td width="1%" class="f-s-600">58</td>
                                    	<td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                        <td>Other browsers</td>
                                        <td>All others</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>U</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		
 <?php include'include/footer.php';?>

<!-- end theme-panel -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../assets/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../assets/js/theme/transparent.min.js"></script>
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="../assets/js/demo/table-manage-buttons.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			TableManageButtons.init();
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

