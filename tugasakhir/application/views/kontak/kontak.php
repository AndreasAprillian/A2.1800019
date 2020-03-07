	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="<?php echo site_url('home');?>">
									<img src="<?php echo base_url();?>assets/img/logo.png"  height="110" width="230" alt="Site Logo">
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					<ul class="header-nav header-nav-options">

						<li>
							<!-- Search form -->
							<form class="navbar-search" role="search">
								<div class="form-group">
									<input type="text" class="form-control" name="headerSearch" placeholder="Cari">
								</div>
								<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
							</form>
						</li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-options -->
					
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		<!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN CONTENT-->
			<div id="content">
			
							<div class="col-md-12">
							<div class="card">
								<div class="card-body">
								<div class="col-md-5">
								<div align="center">
								<div class="card">
									<div class="card-head style-primary">
										<header>
										<h3><b>Kontak Kami</b></h3>
										</header>
										</div>
								<div class="card-body">
								<h4 align="left"><span class="text-l"><b>SMK NEGERI 1 SUMEDANG</b><hr>
								<i class="md md-location-on"></i> Jln. Mayor Abdurakhman No.209
								Sumedang 45322,Jawabarat<br> 
								<i class="md md-phone"></i> Telephone: 0261-202056<br> 
								<i class="md md-email"></i> Email: 
								<a href="http://www.gmail.com/smkn1smd@gmail.com">smkn1smd@gmail.com</a><br>
								</span></h4>
								<hr>
								<h6 align="left"><span class="text-xl">
								<i class="fa fa-facebook-official"></i><a href="http://www.facebook.com/smkn1sumedang"> Facebook</a><br>
								<i class="fa fa-twitter"></i><a href="http://www.twitter.com/smkn1sumedang"> Twitter</a><br>
								<i class="fa fa-instagram"></i><a href="http://www.instagram.com/smkn1sumedang"> Instagram</a><br>
								</span></h6>
								</div>
								</div>
								</div>
								</div>
								<div class="col-md-7">
								<div align="center">
								<div class="card">
									<div class="card-head style-primary">
										<header>
										<h3><b>Peta</b></h3>
										</header>
										</div>
								<div class="card-body">
								<img class="img-responsive" src="<?php echo base_url() ?>/assets/img/map.png "/>
                            </div>
								</div>
								</div>
								</div>
				</div>
		</div>	
 </div>	
						<div class="col-md-12">
						<?php echo form_open('kontak/post_saran');?>
						<div class="card">
						<div class="card-head style-primary">
						<header>
						<h3><b>Kotak Saran / Keluhan</b></h3>
						</header>
						</div>
						<div class="card-body">
						<form class="form" role="form">
							<div class="col-md-6">
							<div class="form-group floating-label">
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
							</div>
							</div>
							<div class="col-md-6">
							<div class="form-group floating-label">
						<input type="text" class="form-control" name="email" id="email" placeholder="Email">							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group floating-label">
						<input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subjek">							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group floating-label">
							<textarea name="pesan" id="pesan" class="form-control" name="pesan" rows="3" placeholder="Pesan"></textarea>
							</div>
							</div>
							<div class="pull-right">
                                <button type="submit" name="saran" class="btn btn-block ink-reaction btn-primary">Kirim Saran</button>
                            </div><!-- /.form-actions -->
						</div>
						</div>
						</div>
						</div>
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="<?php echo base_url();?>html/dashboards/dashboard.html">
							<span class="text-lg text-bold text-primary ">SMK Negeri 1 Sumedang</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">
					<?php $this->load->view('menu');?>
					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2016</span> <strong>STM Nesas</strong> <br>

						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->

		</div><!--end #base-->
			</div><!--end .section-body -->
				