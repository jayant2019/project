<?php session_start();
	//echo $_SESSION['check_session'];
	if(empty($_SESSION['check_session'])):
		header('location:login');
	endif;
	require_once'config/query.php';
	$run_query=new query;
	if(!empty($_GET['page'])):
		$_view=$_GET['page'];
		//die;
	endif;
?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#ff685c">
		<meta name="theme-color" content="#32cafe">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Spain –  Bootstrap4 Admin Dashboard  Responsive MultiPurpose Template</title>
		<link rel="stylesheet" href="assets/fonts/fonts/font-awesome.min.css">

		<!-- Font family -->
		<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="assets/css/dashboard.css" rel="stylesheet" />
		<link href="custom/css/style.css" rel="stylesheet" />
		<!-- c3.js Charts Plugin -->
		<link href="assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

		<!--  Table Plugin -->
		<link href="assets/plugins/tables/style.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="assets/plugins/toggle-sidebar/sidemenu.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="assets/plugins/iconfonts/plugin.css" rel="stylesheet" />

	</head>
	<body class="app sidebar-mini rtl">
		<div id="global-loader" ></div>
		<div class="page">
			<div class="page-main">
				<div class="app-header header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index">
								Infonex
							</a>
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="d-none d-lg-block horizontal">
								<ul class="nav">
									

									
								</ul>
						    </div>

							<div class="d-flex order-lg-2 ml-auto">
							    <div class="mt-2">
									<div class="searching mt-2 ml-2 mr-3">
										<a href="javascript:void(0)" class="search-open mt-3">
											<i class="fa fa-search text-dark"></i>
										</a>
										<div class="search-inline">
											<form>
												<input type="text" class="form-control" placeholder="Search here">
												<button type="submit">
													<i class="fa fa-search"></i>
												</button>
												<a href="javascript:void(0)" class="search-close">
													<i class="fa fa-times"></i>
												</a>
											</form>
										</div>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex " >
									<a  class="nav-link icon full-screen-link">
										<i class="mdi mdi-arrow-expand-all"  id="fullscreen-button"></i>
									</a>
								</div>
								
								
								<div class="dropdown">
									<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
										<span class="avatar avatar-md brround"><img src="assets/images/faces/male/40.jpg" alt="Profile-img" class="avatar avatar-md brround"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center font-weight-sembold user text-capitalize"><?php echo $_SESSION['login_name'];?></a>

											<div class="dropdown-divider"></div>
										</div>
										<!-- <a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-settings"></i> Settings
										</a>
										<a class="dropdown-item" href="#">
											<span class="float-right"><span class="badge badge-primary">6</span></span>
											<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
										</a> -->
										<a class="dropdown-item" href="logout">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php require_once'sidebar_menu.php';?>
				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
				<?php 
					if(isset($_view) && $_view):
						require_once "page/".$_view.'.php';
					else:
						require_once"page/home.php";
					endif;
				?>
					</div>
				</div>
					<!--footer-->
					<footer class="footer">
						<div class="container">
							<div class="row align-items-center flex-row-reverse">
								<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
									Copyright © 2018 - 2019 <a href="#">Spain</a>. Designed by <a href="#">Spruko</a> All rights reserved.
								</div>
							</div>
						</div>
					</footer>
					<!-- End Footer-->
				</div>
			</div>
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- Dashboard Core -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script src="custom/custom.js"></script>
		<script src="custom/jquery.validate.min.js"></script>
		<script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
		<script src="assets/js/vendors/jquery.sparkline.min.js"></script>
		<script src="assets/js/vendors/selectize.min.js"></script>
		<script src="assets/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="assets/js/vendors/circle-progress.min.js"></script>
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/echarts/echarts.js"></script>

		<!-- Fullside-menu Js-->
		<script src="assets/plugins/toggle-sidebar/sidemenu.js"></script>

        <!-- peitychart -->
		<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
		<script src="assets/plugins/peitychart/peitychart.init.js"></script>

		<!-- c3.js Charts Plugin -->
		<script src="assets/plugins/charts-c3/d3.v5.min.js"></script>
		<script src="assets/plugins/charts-c3/c3-chart.js"></script>

		<!-- Input Mask Plugin -->
		<script src="assets/plugins/input-mask/jquery.mask.min.js"></script>

        <!-- Index Scripts -->
		<script src="assets/js/index.js"></script>
		<script src="assets/js/index2.js"></script>

		<!--Morris.js Charts Plugin -->
		<script src="assets/plugins/morris/raphael-min.js"></script>
		<script src="assets/plugins/morris/morris.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--  Chart js -->
		<script src="assets/plugins/chart/Chart.bundle.js"></script>

		<!-- Search Js-->
		<script src="assets/js/prefixfree.min.js"></script>

		<!-- Custom Js-->
		<script src="assets/js/custom.js"></script>

	</body>
</html>