<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>WebGIS - Information System of Kediri</title>
	<meta name="description" content="WebGIS Kediri" />
	<meta name="keywords" content="webgis, information, system, kediri, jawa" />
	<meta name="author" content="webgis"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Data table CSS -->
	<link href="<?php echo base_url() ;?>assets/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

	<!-- Morris Charts CSS -->
    <link href="<?php echo base_url() ;?>assets/vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="<?php echo base_url() ;?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper">

        <!-- Top Menu Items -->
		<?php $this->load->view('nav') ;?>	
		<!-- /Top Menu Items -->
			
		<!-- Left Sidebar Menu -->
		<?php $this->load->view('menu') ;?>
		<!-- /Left Sidebar Menu -->

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg  bg-blue">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-light">Information System of Kediri</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>speciality pages</span></a></li>
							<li class="active"><span>Welcome to WebGIS</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

				<!-- content here -->

				<!-- Row Header Information -->
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Perkebunan</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="sm-graph-box">
										<div class="row">
											<div class="col-xs-6">
												<div id="sparkline_1"></div>
											</div>
											<div class="col-xs-6">
												<div class="counter-wrap text-right">
													<span class="counter-cap"><i class="fa  fa-level-up txt-success"></i></span><span class="counter">15</span><span>%</span>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Penduduk</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="sm-graph-box">
										<div class="row">
											<div class="col-xs-6">
												<div id="sparkline_2"></div>
											</div>
											<div class="col-xs-6">
												<div class="counter-wrap text-right">
													<span class="counter-cap"><i class="fa  fa-level-up txt-success"></i></span><span class="counter">10</span><span>m</span>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Pertanian</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="sm-graph-box">
										<div class="row">
											<div class="col-xs-6">
												<div id="sparkline_6"></div>
											</div>
											<div class="col-xs-6">
												<div class="counter-wrap text-right">
													<span class="counter-cap"><i class="fa  fa-level-down txt-danger"></i></span><span class="counter">3</span><span>%</span>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Kecamatan</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="sm-graph-box">
										<div class="row">
											<div class="col-xs-6">
												<div id="sparkline_7"></div>
											</div>
											<div class="col-xs-6">
												<div class="counter-wrap text-right">
													<span class="counter-cap"><i class="fa  fa-level-down txt-danger"></i></span><span class="counter">1122</span>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /end Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Audience location</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-7">
											<div id="world_map_marker_1" style="height: 400px"></div>
										</div>
										<div class="col-sm-5">
											<div class="table-wrap">
												<table  class="table  top-countries" >
													<tbody>
														<tr>
															<td>
																<img src="dist/img/country/gb.svg" alt="user_img">	
															</td>
															<td>
																United Kingdom
															</td>
															<td>
																$50
															</td>
														</tr>
														<tr>
															<td>
																<img src="dist/img/country/my.svg" alt="user_img">	
															</td>
															<td>
																Malaysia
															</td>
															<td>
																$20
															</td>
														</tr>
														<tr>
															<td>
																<img src="dist/img/country/au.svg" alt="user_img">
															</td>
															<td>
																Australia
															</td>
															<td>
																$5
															</td>
														</tr>
														
														<tr>
															<td>
																<img src="dist/img/country/us.svg" alt="country">
															</td>
															<td>
																United States
															</td>
															<td>
																$5
															</td>
														</tr>
														
														<tr>
															<td>
																<img src="dist/img/country/fr.svg" alt="country">	
															</td>
															<td>
																France
															</td>
															<td>
																$5
															</td>
														</tr>
														<tr>
															<td>
																<img src="dist/img/country/jp.svg" alt="country">	
															</td>
															<td>
																japan
															</td>
															<td>
																$5
															</td>
														</tr>
														<tr>
															<td>
																<img src="dist/img/country/it.svg" alt="country">
															</td>
															<td>
																Italy
															</td>
															<td>
																$5
															</td>
														</tr>
													</tbody>
												</table>
											</div>
								
										</div>
									</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-lg-7">
                        <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><i class="icon-map mr-10"></i>Area Chart</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div id="morris_area_chart" class="morris-chart"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
                         <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><i class="icon-chart mr-10"></i>Audience age</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<canvas id="chart_2" height="344"></canvas>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->

				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div id="weather_1" class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><span></span><a href="javascript:void(0);"><i class="fa fa-angle-down fa-fw ml-10"></i></a></h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<h5 class="block nowday"></h5>
									<span class="block nowdate"></span>
									<div class="weather weatherapp mt-15"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><i class="icon-chart mr-10"></i>Interests</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<canvas id="chart_3" height="489"></canvas>
								</div>	
							</div>
						</div>
					</div>
				</div>

				<!-- end of content -->
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-5">
						<a href="index.html" class="brand mr-30"><img src="dist/img/logo-sm.png" alt="logo"/></a>
						<ul class="footer-link nav navbar-nav">
							<li class="logo-footer"><a href="#">Help</a></li>
							<li class="logo-footer"><a href="#">Download</a></li>
							<li class="logo-footer"><a href="#">About Us</a></li>
						</ul>
					</div>
					<div class="col-sm-7 text-right">
						<p>2017 &copy; WebGIS Information System of Kediri</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="<?php echo base_url() ;?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ;?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Data table JavaScript -->
	<script src="<?php echo base_url() ;?>assets/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ;?>assets/dist/js/dataTables-data.js"></script>
	<!-- Slimscroll JavaScript -->
	<script src="<?php echo base_url() ;?>assets/dist/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="<?php echo base_url() ;?>assets/dist/js/dropdown-bootstrap-extended.js"></script>
	<!-- Init JavaScript -->
	<script src="<?php echo base_url() ;?>assets/dist/js/init.js"></script>

	<!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url() ;?>assets/vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/vendors/bower_components/morris.js/morris.min.js"></script>
    <script src="<?php echo base_url() ;?>assets/dist/js/morris-data.js"></script>
	
	
</body>

</html>
