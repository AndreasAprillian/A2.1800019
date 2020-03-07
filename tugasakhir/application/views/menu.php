

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="<?php echo site_url('home/web');?>">
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Home</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->
						<li>
							<a href="<?php echo site_url('profil');?>" >
								<div class="gui-icon"><i class="md md-account-balance"></i></div>
								<span class="title">Profil Sekolah</span>
							</a>
						</li><!--end /menu-li -->
						<!-- BEGIN EMAIL -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-group"></i></div>
								<span class="title">Direktori</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="<?php echo site_url('direktori/siswa')?>" ><span class="title">Siswa</span></a></li>
								<li><a href="<?php echo site_url('direktori/guru')?>" ><span class="title">Guru</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
								<span class="title">Paket Keahlian</span>
							</a>
							<!--start submenu -->
							<ul>
							<?php
							$q = $this->m_jurusan->GetJurusanA()->result();
								foreach ($q as $r){
							?>
								<li><a href="<?php echo base_url();?>index.php/jurusan/paket/<?php echo $r->kode	;?>" ><span class="title"><?php echo $r->nama;?></span></a></li>
							<?php } ?>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="<?php echo site_url('berita/news')?>" >
								<div class="gui-icon"><i class="md md-my-library-books"></i></div>
								<span class="title">Berita</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN UI -->
						<li>
							<a href="<?php echo site_url('galeri/album')?>">
								<div class="gui-icon"><i class="md md-landscape"></i></div>
								<span class="title">Galeri</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END UI -->

						<!-- BEGIN TABLES -->
						<li>

							<a href="<?php echo site_url('kontak');?>">
								<div class="gui-icon"><i class="md md-phone"></i></div>
								<span class="title">Kontak Kami</span>
							</a>
						</li><!--end /menu-li -->
						<li>

							<a href="<?php echo site_url('login')?>">
								<div class="gui-icon"><i class="fa fa-sign-in"></i></div>
								<span class="title">Log In</span>
							</a>
						</li>
						
					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->