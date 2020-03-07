	<body class="menubar-hoverable header-fixed ">

		<header id="header" class="header-inverse ">
			<div class="headerbar">
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
							<form class="navbar-search" role="search">
								<div class="form-group">
									<input type="text" class="form-control" name="headerSearch" placeholder="Cari">
								</div>
								<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
							</form>
						</li>
					</ul>
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
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</header>
		<div id="base">

			<div id="content">
				<section>
					<div class="section-header">

					<div class="col-md-12">
				<div class="card">
				<div class="card-body small-padding style-primary">				
				<td><h5 align="center"><span class="text-xxl">Selamat datang kembali Admin !</span></h5></td>
				</div>
				</div>
				<div class="col-md-6">
				<div class="card">
									<div class="card-body">
									<span class="text-lg text-primary"><i class="md-speaker-notes"></i> Komentar</span>
										<div class="knob knob-primary knob-default-dark-track size-4"><div style="display:inline;width:160px;height:160px;"><canvas width="160" height="160"></canvas><input type="text" class="dial" data-min="0" data-max="100" data-thickness=".1" value="<?php echo $kml ?>" data-readonly="true" readonly="readonly" style="width: 84px; height: 53px; position: absolute; vertical-align: middle; margin-top: 53px; margin-left: -122px; border: 0px; background: none; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 32px; line-height: normal; font-family: Arial; text-align: center; color: rgb(10, 168, 158); padding: 0px; -webkit-appearance: none;"></div></div>
									</div><!--end .card-body -->
								</div>
								</div>
								<div class="col-md-6">
				<div class="card">
									<div class="card-body">
									<span class="text-lg text-primary"><i class="md-thumbs-up-down"></i> Kritik Dan Saran</span>
										<div class="knob knob-primary knob-default-dark-track size-4"><div style="display:inline;width:160px;height:160px;"><canvas width="160" height="160"></canvas><input type="text" class="dial" data-min="0" data-max="100" data-thickness=".1" value="<?php echo $psa ?>" data-readonly="true" readonly="readonly" style="width: 84px; height: 53px; position: absolute; vertical-align: middle; margin-top: 53px; margin-left: -122px; border: 0px; background: none; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 32px; line-height: normal; font-family: Arial; text-align: center; color: rgb(10, 168, 158); padding: 0px; -webkit-appearance: none;"></div></div>
									</div>
								</div>

								</div>
						</div>
					</div>
				</section>
			</div>

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