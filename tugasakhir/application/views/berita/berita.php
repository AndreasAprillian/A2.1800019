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
		<div class="col-lg-12">
								<div class="card">
									<div class="card-head style-primary">
										<header>
										 <h3><b>Berita</b></h3><br>
										</header>
										</div>
										</div>
										</div>
						<div id="content">
		<div class="col-lg-3">
								<div class="card">
									<div class="card-head style-primary">
										<header>
										<i class="fa fa-calendar"></i> Agenda
										</header>
										<div class="tools">
											<a class="btn btn-icon-toggle btn-close"></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body">
										<tr><h5 align="left"><span class="text-xl"><a href="<?php echo site_url('agenda/Lihat/37');?>" >Workshop Penulisan Karya Tulis Ilmiah</a></span></h5>
										<h5 align="left"><span class="text-l">Aula SMKN 1 Sumedang</span></h5>
										<h5 align="left"><span class="text-l">21 Oktober 2016</span></h5>
										<hr>
										<tr><h5 align="left"><span class="text-xl"><a href="<?php echo site_url('agenda/Lihat/36');?>" >Perkemahan Pengenalan Kepramukaan 2016/2017</a></span></h5>
										<h5 align="left"><span class="text-l">Kampus Belakang SMKN 1 Sumedang</span></h5>
										<h5 align="left"><span class="text-l">02 Oktober 2016</span></h5>
										<hr>
										<tr><h5 align="left"><span class="text-xl"><a href="<?php echo site_url('agenda/Lihat/35');?>" >Pemilihan Ketua Osis</a></span></h5>
										<h5 align="left"><span class="text-l">Kampus Belakang SMKN 1 Sumedang</span></h5>
										<h5 align="left"><span class="text-l">29 September 2016</span></h5>
										<hr>
										<p><button type="button" class="btn ink-reaction btn-raised btn-xs btn-primary"><a href="<?php echo site_url('agenda/LihatSemua');?>" >Semua Agenda -></a></button></p>
										<hr>
									</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
		<div class="section-body contain-lg">
						<div class="row">
							<div class="col-sm-9">
								<div class="card card-tiles style-default-light">
									<div class="row">

		<?php foreach($a as $d){ ?>
		<div class="col-sm-12">
		<article>
		<div class="card-body style-primary">
		<h2><?php echo $d['judul'];?></h2>
		<div class="opacity-75"><?php echo $d['date'];?> - <?php echo $d['time'];?> by <?php echo $d['author'];?></div>
		</div>
		<div class="card-body">
		<img class="img-responsive" src="<?php echo base_url($d['thumbnail'])?>">
		<a class="btn btn-default" href="<?php echo base_url()."index.php/berita/baca/".$d['id_berita']; ?>">Lihat Detail</a>
		</div>
		</article>
		</div>
		<?php } ?>
		</div>
		</div>
			</div>
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