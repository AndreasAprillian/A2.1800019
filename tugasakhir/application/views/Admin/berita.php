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
			<h3><b>Berita</b></h3><br>
			</header>
			</div>
									<div class="card-body">
									<?php echo $this->session->flashdata('delete_berita') ?>
									<?php echo $this->session->flashdata('update_berita') ?>
									<?php echo $this->session->flashdata('add_berita') ?>
									<div align="right">
										<a href="<?php echo site_url('admin/add_berita')?>"><button class="btn btn-primary btn-raised"><i class="md md-add"></i>Tambah</button></a>
										</div>
									<div class="card style-primary">
										<table class="table table-hover no-margin">
											<thead>
												<tr>
													<th>No</th>
													<th>Judul</th>
													<th>Waktu/Tanggal</th>
													<th>Author</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											<?php $i = 1; foreach($n as $j){ ?> 
												<tr>
													<td><?php echo $i ?></td>
													<td><?php echo $j->judul;?></td>
													<td><?php echo $j->time;?> / <?php echo $j->date;?></td>
													<td><?php echo $j->author;?></td>
													<td>
													<a target="blank" href="<?php echo base_url();?>index.php/berita/baca/<?php echo $j->id_berita	;?>"> <button type="button" class="btn btn-default-bright btn-raised" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Data"><i class="md md-remove-red-eye"></i></button></a>
													<a href="<?php echo site_url('admin/edit_databerita/'.$j->id_berita.'')?>"><button type="button" class="btn btn-default-bright btn-raised" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Data"><i class="md md-edit"></i></button></a>
													<a href="<?php echo site_url('admin/do_deleteberita/'.$j->id_berita.'')?>"><button type="button" class="btn btn-default-bright btn-raised" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus Data"><i class="md md-delete"></i></button></a>
													</td>
												</tr>
												<?php $i = $i+1; } ?>
											</tbody>
										</table>
									</div><!--end .card-body -->
									</div>
								</div><!--end .card -->
									</div><!--end .col -->
			</div>

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