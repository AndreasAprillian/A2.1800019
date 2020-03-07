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
		<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-body contain-lg">
						<div class="row">
							<div class="col-lg-12">
								<div class="card card-tiles style-default-light">

									<!-- BEGIN BLOG POST HEADER -->
									<div class="row style-primary">
										<div class="col-sm-9">
											<div class="card-body style-default-dark">
												<h2><?php echo $berita['judul']; ?></h2>
												<div class="text-default-light">Posted by <?php echo $berita['author'];; ?> at  <?php echo $berita['time'];?></a></div>
											</div>
										</div><!--end .col -->
										<div class="col-sm-3">
											<div class="card-body">
												<div class="hidden-xs">
													<h3 class="text-light"><?php echo $berita['date']; ?></h3>
													<?php echo $kml ?> comments <i class="fa fa-comment-o"></i>
													<div class="stick-top-right">
														<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Contact me"><i class="fa fa-envelope"></i></a><br/>
														<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Follow me"><i class="fa fa-twitter"></i></a><br/>
														<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Personal info"><i class="fa fa-facebook"></i></a>
													</div>
												</div>
												<div class="visible-xs">
													<?php echo $berita['date']; ?> <?php echo $kml ?> <i class="fa fa-comment-o"></i>
												</div>
											</div>
										</div><!--end .col -->
									</div><!--end .row -->
									<!-- END BLOG POST HEADER -->

									<div class="row">

										<!-- BEGIN BLOG POST TEXT -->
										<div class="col-md-9">
											<article class="style-default-bright">
												<div>
													<img class="img-responsive" src="<?php echo base_url($berita['thumbnail']) ?>"/>
												</div>
												<div class="card-body">
													<p><?php echo $berita['isi']; ?></p>
												</div><!--end .card-body -->
											</article>
										</div><!--end .col -->
										<!-- END BLOG POST TEXT -->

										<!-- BEGIN BLOG POST MENUBAR -->
										<div class="col-md-3">
											<div class="card-body">
												<h3 class="text-light text-primary">Berita lainnya</h3>
												<ul class="nav nav-pills nav-stacked nav-transparent">
													<li><a href="<?php echo site_url('berita/baca/1');?>">PMR SMKN 1 Sumedang Juara Umum</a></li>
													<li><a href="<?php echo site_url('berita/baca/2');?>">Lowongan Pekerjaan PT. Trans</a></li>
													<li><a href="<?php echo site_url('berita/baca/3');?>">Job Fair 2016</a></li>
													<li><a href="<?php echo site_url('berita/baca/4');?>">Informasi Prakerin Kelas XI</a></li>
												</ul>
												<hr>
												<p><button type="button" class="btn ink-reaction btn-raised btn-xs btn-primary"><a href="<?php echo site_url('berita/news');?>" >Semua Berita -></a></button></p>
												<hr>
											</div><!--end .card-body -->
											<div class="card-body">
											<h3 class="text-light text-primary">Agenda</h3>
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
										</div><!--end .col -->
										<!-- END BLOG POST MENUBAR -->

									</div><!--end .row -->
								</div><!--end .card -->
							</div><!--end .col -->
						</div><!--end .row -->

						<!-- BEGIN COMMENTS -->
						<div class="row">
							<div class="col-md-9">
								<h4></h4>
								<ul class="list-comments">
									<?php foreach ($kmn as $k){?>
									<li>
										<div class="card">
											<div class="comment-avatar"><i class="glyphicon glyphicon-user opacity-50"></i></div>
											<div class="card-body">
												<h4 class="comment-title"><?php echo $k->nama;?> <small><?php echo $k->date;?> at <?php echo $k->time;?></small></h4>
												<p><?php echo $k->isi;?></p>
											</div>
										</div><!--end .card -->
									</li><!-- end comment -->
									<?php } ?>

								</ul>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END COMMENTS -->

						<!-- BEGIN LEAVE COMMENT -->
						<div class="row">
							<div class="col-md-9">
							<?php echo form_open('berita/post_comment');?>
							<input type="hidden" name="id_berita" value="<?php echo $berita['id_berita'];?>">
								<h4>Tinggalkan Komentar</h4>
								<form class="form" role="form">
								<div class="form-group">
									<div class="col-md-5">
									<div class="form-group floating-label">
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Anonymous" disabled>
									</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-5">
									<div class="form-group floating-label">
									<input type="text" class="form-control" id="email" name="email" placeholder="Anonymous@stmnagri.com" disabled>
									</div>
									</div>
								</div>
									<div class="col-md-10">
										<div class="form-group floating-label">
										<textarea name="isi" class="form-control" rows="3" placeholder=" Komentar"></textarea>
										</div>
										</div>
									<div class="form-footer col-md-offset-2">
										<button type="submit" name="komen" class="btn btn-primary">Kirim Komentar</button>
									</div>
								</form>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END LEAVE COMMENT -->

					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
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