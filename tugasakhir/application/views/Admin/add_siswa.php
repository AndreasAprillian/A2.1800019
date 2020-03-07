	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN HEADER-->
		<header id="header" class="header-inverse ">
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="<?php echo site_url();?>">
								<img src="<?php echo base_url();?>assets/img/logo_admin.png"  height="110" width="210" alt="Site Logo">
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
					</ul><!--end .header-nav-options -->
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="<?php echo base_url();?>assets/img/profil.jpg" alt="" />
								<span class="profile-info">
									Andreas Aprillian
									<small>Admin</small>
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<li><a href="<?php echo base_url();?>html/pages/profile.html">Configurasi</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo base_url();?>index.php/admin/logout/"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		<!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header">
					<div class="row">
					<div class="col-md-12">
			<div class="card">
			<div class="card-head style-primary">
			<header>
			<h3><b>Tambah Siswa</b></h3><br>
			</header>
			</div>
			<div class="card-body">
			<form role="form" method="POST" action="<?php echo site_url('admin/do_add')?>">
			<div class="col-md-4">
			<div class="form-group">
			<input type="text" name="nisn" class="form-control" placeholder="NISN">
			</div>
			</div>
			<div class="col-md-3">
			<div class="form-group">
			<input type="text" name="nis" class="form-control" placeholder="NIS">
			</div>
			</div>
			<div class="col-md-3">
			<div class="form-group">
			<input type="text" name="kelas" class="form-control" placeholder="Kelas">
			</div>
			</div>
			<div class="col-md-10">
			<div class="form-group">
			<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
			<br>
			<div>
			<label class="radio-inline radio-styled">
			<input type="radio" name="jk"><span>Laki-laki</span>
			</label>
			<label class="radio-inline radio-styled">
			<input type="radio" name="jk"><span>Perempuan</span>
			</label>
			</div>
			</div>
			</div>
			<div class="col-md-12">
			<div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-raised"><i class="md md-check"></i> Simpan</button>
            <button type="reset" class="btn btn-primary btn-raised"><i class="md md-refresh"></i> Reset</button>
            </div>
            </div>
			</form>
					</div>
					</div>
					</div>
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="<?php echo site_url('home');?>">
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
					

						</div>
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="<?php echo base_url();?>html/dashboards/dashboard.html">
							<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">
				<?php $this->load->view('menu_admin');?>
					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2016</span> <strong>Admin Nesas</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			</div><!--end #base-->