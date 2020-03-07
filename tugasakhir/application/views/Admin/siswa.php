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
								<div class="card card-underline">
									<div class="card-head">
										<ul class="nav nav-tabs pull-right" data-toggle="tabs">
											<li class="active"><a href="#first2">Kelas X</a></li>
											<li><a href="#second2">Kelas XI</a></li>
											<li><a href="#third2">Kelas XII</a></li>
										</ul>
										<header>Siswa</header>
									</div>
									<div class="card-body tab-content">
									<?php echo $this->session->flashdata('delete') ?>
									<?php echo $this->session->flashdata('update') ?>
									<?php echo $this->session->flashdata('add') ?>
									<div align="right">
										<a href="<?php echo site_url('admin/add_siswa')?>"><button class="btn btn-primary btn-raised"><i class="md md-add"></i>Tambah</button></a>
										</div>
										<div class="tab-pane active" id="first2">
										<div class="col-lg-offset-1 col-md-10">
										<div class="panel-group" id="accordion1">
										<?php foreach($a as $x){ ?>										
										<div class="card panel">
										<div class="card-head style-primary-light collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-<?php echo $x->id;?>" aria-expanded="false">
											<header><?php echo $x->kelas;?></header>
											<div class="tools">
												<div class="btn-group">
												</div>
												<a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
											</div>
										</div>
										<div id="accordion1-<?php echo $x->id;?>" class="collapse" aria-expanded="false" style="">
											<div class="card-body">
								<div class="col-md-12">
								<div class="card">
									<div class="card-body">
									<div class="card style-primary">
										<table class="table table-hover no-margin">
											<thead>
												<tr>
													<th>No</th>
													<th>NISN</th>
													<th>NIS</th>
													<th>Nama Lengkap</th>
													<th>Jenis Kelamin</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											<?php $siswa = $this->m_direktori->GetSiswa($x->kelas)->result(); $i = 1; foreach($siswa as $s){ ?> 
												<tr>
													<td><?php echo $i ?></td>
													<td><?php echo $s->nisn;?></td>
													<td><?php echo $s->nis;?></td>
													<td><?php echo $s->nama;?></td>
													<td><?php echo $s->jk;?></td>
													<td>
													<a href="<?php echo site_url('admin/edit_datasiswa/'.$s->id.'')?>"><button type="button" class="btn btn-default-bright btn-raised" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Data"><i class="md md-edit"></i></button></a>	
													<a href="<?php echo site_url('admin/do_deletesiswa/'.$s->id.'')?>"><button type="button" class="btn btn-default-bright btn-raised" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus Data"><i class="md md-delete"></i></button></a>
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
									</div><!--end .panel -->
									<?php } ?>
										</div><!--end .panel-group -->
							</div><!--end .col -->		
										</div>
										<div class="tab-pane" id="second2">
										<div class="col-lg-offset-1 col-md-10">
										<div class="panel-group" id="accordion2">
										<?php foreach($b as $xi){ ?>										
										<div class="card panel">
										<div class="card-head style-primary-light collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#accordion2-<?php echo $xi->id;?>" aria-expanded="false">
											<header><?php echo $xi->kelas;?></header>
											<div class="tools">
												<div class="btn-group">
												</div>
												<a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
											</div>
										</div>
										<div id="accordion2-<?php echo $xi->id;?>" class="collapse" aria-expanded="false" style="">
											<div class="card-body">

											<div class="col-md-12">
								<div class="card">
									<div class="card-body">
									<div class="card style-primary">
										<table class="table table-hover no-margin">
											<thead>
												<tr>
													<th>No</th>
													<th>NISN</th>
													<th>NIS</th>
													<th>Nama Lengkap</th>
													<th>Jenis Kelamin</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											<?php $siswa = $this->m_direktori->GetSiswa($xi->kelas)->result(); $i = 1; foreach($siswa as $s){ ?> 
												<tr>
													<td><?php echo $i ?></td>
													<td><?php echo $s->nisn;?></td>
													<td><?php echo $s->nis;?></td>
													<td><?php echo $s->nama;?></td>
													<td><?php echo $s->jk;?></td>
													<td>
													<a href="<?php echo site_url('admin/edit_datasiswa/'.$s->id.'')?>"><button type="button" class="btn btn-default-bright btn-raised" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Data"><i class="md md-edit"></i></button></a>
													<a href="<?php echo site_url('admin/do_delete/'.$s->id.'')?>"><button type="button" class="btn btn-default-bright btn-raised" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus Data"><i class="md md-delete"></i></button></a>
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
									</div><!--end .panel -->
									<?php } ?>
									</div><!--end .panel-group -->
							</div><!--end .col -->

										</div>
										<div class="tab-pane" id="third2">
										<div class="col-lg-offset-1 col-md-10">
										<div class="panel-group" id="accordion3">
										<?php foreach($c as $xii){ ?>
										<div class="card panel">
										<div class="card-head style-primary-light collapsed" data-toggle="collapse" data-parent="#accordion3" data-target="#accordion3-<?php echo $xii->id;?>" aria-expanded="false">
											<header><?php echo $xii->kelas;?></header>
											<div class="tools">
												<div class="btn-group">
												</div>
												<a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
											</div>
										</div>
										<div id="accordion3-<?php echo $xii->id;?>" class="collapse" aria-expanded="false" style="">
											<div class="card-body">

											<div class="col-md-12">
								<div class="card">
									<div class="card-body">
									<div class="card style-primary">
										<table class="table table-hover no-margin">
											<thead>
												<tr>
													<th>No</th>
													<th>NISN</th>
													<th>NIS</th>
													<th>Nama Lengkap</th>
													<th>Jenis Kelamin</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											<?php $siswa = $this->m_direktori->GetSiswa($xii->kelas)->result(); $i = 1; foreach($siswa as $s){ ?> 
												<tr>
													<td><?php echo $i ?></td>
													<td><?php echo $s->nisn;?></td>
													<td><?php echo $s->nis;?></td>
													<td><?php echo $s->nama;?></td>
													<td><?php echo $s->jk;?></td>
													<td>
													<a href="<?php echo site_url('admin/edit_datasiswa/'.$s->id.'')?>"><button type="button" class="btn btn-default-bright btn-raised" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Data"><i class="md md-edit"></i></button></a>
													<a href="<?php echo site_url('admin/do_delete/'.$s->id.'')?>"><button type="button" class="btn btn-default-bright btn-raised" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus Data"><i class="md md-delete"></i></button></a>
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
									</div><!--end .panel -->
									<?php } ?>
										</div><!--end .panel-group -->
							</div><!--end .col -->
										
										</div>
									</div>
								</div><!--end .card -->
							</div><!--end .col -->
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