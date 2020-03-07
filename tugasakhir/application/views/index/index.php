<body class="menubar-hoverable header-fixed ">
		<header id="header" >
			<div class="headerbar">
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
						<li>
						
						
						</li>
							</ul>
						</li>
					</ul>
					
				</div>
			</div>
		</header>

		<div id="base">

			<div id="content">
			<section class="section-account">
			<div class="img-backdrop" style="background-image: url('<?php echo base_url();?>assets/img/portfolio.jpg')"></div>
			<div class="spacer"></div>
			<div class="card contain-xs style-transparent">
				<div class="card-body">
				</div>
				</div>
		</section>
			<div class="img-backdrop" style="background-image: url('<?php echo base_url();?>assets/img/portfolio.jpg')"></div>
				<section>
					<div class="section-body">
						<div class="row">
								

						</div>
					</div>
				<div class="col-md-12">
				<div class="card">
				<div class="card-body small-padding style-primary">				
				<td><h5 align="center"><span class="text-xxl">Selamat Datang di Website SMK Negeri 1 Sumedang.</span></h5></td>
				<td><h3 align="center"><span class="text-l">Dengan adanya situs ini menjadikan sebagai wadah media Informasi dan Komunikasi sebagai salah satu layanan sekolah di era teknologi ini.</span></h3></td>
				</div>
				</div>

						</div>

				</div>
							<div class="col-md-9">
							<div class="card">
									<div class="card-head style-primary">
										<header>
										<i class="md-my-library-books"></i> Berita
										</header>
										<div class="tools">
											<a class="btn btn-icon-toggle btn-close"></a>
										</div>
									</div>
								<div class="card-body">
								<?php foreach($a as $d){ ?>
							<div class="col-lg-3 col-sm-4">
								<div class="card">
									<div class="card-head style-primary">
										<header>
										<a href="<?php echo base_url()."index.php/berita/baca/".$d['id_berita']; ?>" ><?php echo $d['judul'];?></a>
										</header>
										<div class="tools">
											<a class="btn btn-icon-toggle btn-close"></a>
										</div>
									</div>
									<div class="card-body">
									<img class="img-responsive" src="<?php echo base_url($d['thumbnail'])?>">
										<h5 align="left"><span class="text-l"><?php echo $d['date'];?> - <?php echo $d['time'];?></span></h5>

									</div>
								</div>
							</div>
							<?php } ?>
										<br>
										<hr>
										<p><button type="button" class="btn ink-reaction btn-raised btn-xs btn-primary"><a href="<?php echo site_url('berita/news')?>" >Semua Berita -></a></button></p>
										<hr>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-sm-5">
								<div class="card">
									<div class="card-head style-primary">
										<header>
										<i class="fa fa-calendar"></i> Agenda
										</header>
										<div class="tools">
											<a class="btn btn-icon-toggle btn-close"></a>
										</div>
									</div>
									<div class="card-body">
									<?php foreach($b as $d){ ?>
										<tr><h5 align="left"><span class="text-xl"><a href="<?php echo base_url()."index.php/agenda/Lihat/".$d['no']; ?>" ><?php echo $d['tema']; ?></a></span></h5>
										<h5 align="left"><span class="text-l"><?php echo $d['tempat']; ?></span></h5>
										<h5 align="left"><span class="text-l"><?php echo $d['m_date']; ?></span></h5>
										<hr>
										<?php } ?>
										<p><button type="button" class="btn ink-reaction btn-raised btn-xs btn-primary"><a href="<?php echo site_url('agenda/LihatSemua');?>" >Semua Agenda -></a></button></p>
										<hr>

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
						<a href="html/dashboards/dashboard.html">
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
				</div>
			</div>

		</div>
			</div>
				