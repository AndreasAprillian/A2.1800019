	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="<?php echo site_url('home/web');?>">
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
			<div class="col-md-12">
			<div class="card">
			<div class="card-head style-primary">
			<header>
			<h3><b>Galeri</b></h3><br>
			</header>
			</div>
			<br>
			<br>
			<div class="col-md-3">
			<div class="card">
			<div class="card-head style-primary">
			<header>
			<h3><b>Album</b></h3><br>
			</header>
			</div>
			<div class="card-body">
			<div class="card-body no-padding">
										<ul class="list">
											<li class="tile">
												<a class="tile-content ink-reaction">
												<?php 
			foreach ($album as $aa){
				echo '<a href="'.site_url('galeri/album/'.$aa->album.'').'">'.str_replace('_',' ',$aa->album).'</a><br>';
			}
			?>
												</a>
											</li>
										</ul>
									</div><!--end .card-body -->
			
			</div>
			</div>
			</div>
			<div class="col-md-9">
			<div class="card">

			<?php
			if (empty($nalbum)){ 
				foreach ($a as $r){
			?>
			<div class="col-md-4">
			<div class="card-body">
			<a data-toggle="modal" data-target="#modal-<?php echo $r->id ?>">
				<img class="img-responsive"  src="<?php echo base_url($r->img) ?>"/>
			</a>
			</div>
			</div>
			<div class="modal fade" id="modal-<?php echo $r->id ?>" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
			
				<img class="img-responsive"  src="<?php echo base_url($r->img) ?>"/>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
			<?php }
			}else{
				foreach ($b as $z){
				?>
			<div class="col-md-4">
			<div class="card-body">
			<a target="blank" href="<?php echo base_url($z->img);?>">
				<img class="img-responsive"  src="<?php echo base_url($z->img) ?>"/>
			</a>
			</div>
			</div>

			<?php
			}
			} ?>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div><!--end #content-->
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