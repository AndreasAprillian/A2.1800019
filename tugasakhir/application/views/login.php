<!DOCTYPE html>
<html lang="en">
	<head>
		<title>stmnagri1smd.sch.id</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/login.png" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('<?php echo base_url();?>assets/img/img16.jpg')"></div>
			<div class="spacer"></div>
			<div class="card contain-sm style-transparent">
				<div class="card-body">
					<div class="row">
					<div class="col-sm-5">
							<img src="<?php echo base_url();?>assets/img/login.png" height="200" width="170" alt="Site Logo">
							</div>
						<div class="col-sm-6">
							<br/>
							<span class="text-lg text-bold text-primary">SMK Negeri 1 Sumedang</span>
							<br/><br/>
							<form class="form floating-label" action="<?php echo site_url('login/verifikasi');?>" accept-charset="utf-8" method="post">
							<?php echo $this->session->flashdata('pesan') ?>
								<div class="form-group">
									<input type="text" class="form-control" id="username" name="username">
									<label for="username">ID Pengguna</label>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="password" name="password">
									<label for="password">Kata Sandi</label>
								</div>
								<br/>
								<div class="row">
									<div class="col-xs-6 text-left">
										<div class="checkbox checkbox-inline checkbox-styled">
											<label>
												<input type="checkbox"> <span>Ingat Saya ?</span>
											</label>
										</div>
									</div><!--end .col -->
									<div class="row">
									<div class="col-xs-6 text-right">
									<button class="btn btn-primary btn-raised"><a href="<?php echo site_url('home/web');?>">Home</a></button>
										<input class="btn btn-primary btn-raised" type="submit" name="masuk" value="Login">
									</div><!--end .col -->
									</div>
								</div><!--end .row -->
							</form>
						</div><!--end .col -->
						
							</div><!--end .row -->
						</div><!--end .card-body -->
					</div><!--end .card -->
				</section>
				<!-- END LOGIN SECTION -->

				<!-- BEGIN JAVASCRIPT -->
				<script src="<?php echo base_url();?>assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
				<script src="<?php echo base_url();?>assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
				<script src="<?php echo base_url();?>assets/js/libs/bootstrap/bootstrap.min.js"></script>
				<script src="<?php echo base_url();?>assets/js/libs/spin.js/spin.min.js"></script>
				<script src="<?php echo base_url();?>assets/js/libs/autosize/jquery.autosize.min.js"></script>
				<script src="<?php echo base_url();?>assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
				<script src="<?php echo base_url();?>assets/js/core/source/App.js"></script>
				<script src="<?php echo base_url();?>assets/js/core/source/AppNavigation.js"></script>
				<script src="<?php echo base_url();?>assets/js/core/source/AppOffcanvas.js"></script>
				<script src="<?php echo base_url();?>assets/js/core/source/AppCard.js"></script>
				<script src="<?php echo base_url();?>assets/js/core/source/AppForm.js"></script>
				<script src="<?php echo base_url();?>assets/js/core/source/AppNavSearch.js"></script>
				<script src="<?php echo base_url();?>assets/js/core/source/AppVendor.js"></script>
				<script src="<?php echo base_url();?>assets/js/core/demo/Demo.js"></script>
				<!-- END JAVASCRIPT -->

			</body>
		</html>
