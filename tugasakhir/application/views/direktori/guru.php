	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="/">
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
		<div id="content">
		<div class="row">
			<div class="col-md-12">
			<div class="card">
			<div class="card-head style-primary">
			<header>
			<h3><b>Guru</b></h3><br>
			</header>
			</div>
									<div class="card-body">
									<div class="card style-primary">
										<table class="table table-hover no-margin">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama</th>
													<th>NIP</th>
													<th>Jabatan</th>
												</tr>
											</thead>
											<tbody>
											<?php $i = 1; foreach($g as $p){ ?> 
												<tr>
													<td><?php echo $i ?></td>
													<td><?php echo $p->nama;?></td>
													<td><?php echo $p->nip;?></td>
													<td><?php echo $p->jabatan;?></td>
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

		</div><!--end #base-->
			</div><!--end .section-body -->