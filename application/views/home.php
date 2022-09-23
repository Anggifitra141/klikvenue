<header class="header menu_fixed">
	<div id="logo">
		<a href="<?php echo site_url(''); ?>" title="Sparker - Directory and listings template">
			<img src="<?php echo base_url(); ?>assets/img/logo.png" width="200" height="57" alt="" class="logo_normal">
			<img src="<?php echo base_url(); ?>assets/img/logo_sticky.png" width="200" height="57" alt="" class="logo_sticky">
		</a>
	</div>
	<!-- <ul id="top_menu">
			<li><a href="<?php echo base_url(); ?>" class="btn_add">Buat Pesanan  <i class="icon-edit-alt"></i></a></li>
		</ul> -->
	<!-- /top_menu -->
	<a href="#menu" class="btn_mobile">
		<div class="hamburger hamburger--spin" id="hamburger">
			<div class="hamburger-box">
				<div class="hamburger-inner"></div>
			</div>
		</div>
	</a>
	<nav id="menu" class="main-menu">
		<ul>
			<li><span><a href="<?php echo base_url(); ?>">Beranda</a></span></li>
			<li><span><a href="<?php echo base_url(); ?>">Tentang</a></span></li>
			<li><span><a href="<?php echo base_url(); ?>">Venue</a></span></li>
			<li><span><a href="<?php echo base_url(); ?>">Event</a></span></li>
			<li><span><a href="<?php echo base_url(); ?>">Talent</a></span></li>
			<li><span><a href="<?php echo base_url(); ?>">Bermitra</a></span></li>
		</ul>
	</nav>
</header>
<!-- /header -->

<main class="pattern">
	<section class="hero_single version_2">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-6" style="background-color: #1A1A1A, 100%">
						<h3>Yuk, Tentukan acara terbaikmu <span class="bg-linear"> sekarang disini ! </span> </h3>
						<p>Dengan KlikVenue segala aktivitas penunjang kegiatan dapat dicari dengan mudah, cepat dan lengkap</p>
					</div>

					<div class="col-md-12">
						
						<div class="tab-content">
							<div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
								<form id="form-search" method="post" action="<?php echo site_url('search')?>">
									<div class="row no-gutters custom-search-input-2">
										<div class="col-lg-4">
											<div class="form-group">
											<select class="wide" name="type">
												<option value="">Apa yang kamu cari ?</option>	
												<option value="Venue">Venue</option>
												<option value="Event">Event</option>
												<option value="Talent">Talent</option>
											</select>
												<i class="icon_search"></i>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group">											
												<div id="list_city"></div>
												<i class="icon_pin_alt"></i>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group">
												<input class="form-control dates" name="date" type="text" placeholder="Kapan ?">
												<i class="icon_calendar"></i>
											</div>
										</div>
						
										<div class="col-lg-2">
											<input type="submit" value="Search">
										</div>
									</div>
									<!-- /row -->
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- /hero_single -->

	<div class="main_categories">
		<div class="container">
			<ul class="clearfix">
				<li>
					<a href="#">
						<i class="icon-location"></i>
						<h3>Venue</h3>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="icon-calendar"></i>
						<h3>Events</h3>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="icon-star"></i>
						<h3>Talents</h3>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="icon-dot-3"></i>
						<h3>More</h3>
					</a>
				</li>
			</ul>
		</div>
		<!-- /container -->
	</div>

	<!-- /main_categories -->

	<div class="bg_color_1">
		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2> <i class="bg-linear">Kenapa KlikVenue ? &emsp;</i> </h2>

			</div>
			<div class="row justify-content-between">
				<div class="col-lg-6 wow" data-wow-offset="150">
					<center>
						<h4><strong>Planning Menjadi Mudah dan<br> Cepat Secara Online.</strong></h4>
					</center><br />
					<figure class="block-reveal">
						<div class="block-horizzontal"></div>
						<img src="<?php echo base_url(); ?>assets/img/about_1.jpg" class="img-fluid" alt="">
					</figure>
				</div>
				<div class="col-lg-5">
					<button class="btn btn-sm" style="border-radius:0px; background-color:#00966C; color:#fff;"><i class="icon-search"></i></button>
					<p style="margin-bottom: 15px">
					<h5><strong>Pencarian mudah</strong></h5>
					Fitur pencarian yang pintar dan menggunakan bahasa sederhana tanpa membingungkan proses pencarian
					</p>
					<button class="btn btn-sm" style="border-radius:0px; background-color:#FFB31C; color:#fff;"><i class="icon-money" style="color:#fff;"></i></button>
					<p style="margin-bottom: 15px">
					<h5><strong>Biaya terjangkau</strong></h5>
					Terus bersaing dengan harga pasar agar pengguna merasakan pengalaman dengan harga rendah
					</p>
					<button class="btn btn-sm" style="border-radius:0px; background-color:#FD7185; color:#fff;"><i class="icon-user-1"></i></button>
					<p style="margin-bottom: 15px">
					<h5><strong>1500+ Mitra kerja</strong></h5>
					Terus bersaing dengan harga pasar agar pengguna merasakan pengalaman dengan harga rendah
					</p>
				</div>
			</div>
			<!--/row-->
		</div>
		<!--/container-->
	</div>
	<!--/bg_color_1-->

	<div class="bg_color_1">
		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2><i class="bg-linear">Yang Kami Sediakan &emsp;</i></h2>
				<p>Kami menyediakan beberapa pilihan untuk anda.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img style="width:100%" src="<?php echo base_url(); ?>assets/img/product/venue-room.jpeg" alt="">
							<div class="info">
								<h3>Venue terbaik</h3>
								<div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div>
								<small>750 ruang</small> <br /><br />
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img style="width:100%" src="<?php echo base_url(); ?>assets/img/product/hotel-room.png" alt="">
							<div class="info">
								<h3>Hotel terjangkau</h3>
								<div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div>
								<small>600 ruang</small> <br /><br />
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img style="width:100%" src="<?php echo base_url(); ?>assets/img/product/office-room.png" alt="">
							<div class="info">
								<h3>Ruang Bekerja</h3>
								<div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div>
								<small>450 ruang</small> <br /><br />
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img style="width:100%" src="<?php echo base_url(); ?>assets/img/product/talent.png" alt="">
							<div class="info">
								<h3>Talent berpengalaman</h3>
								<div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div>
								<small>400 talenta</small> <br /><br />
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img style="width:100%" src="<?php echo base_url(); ?>assets/img/product/event.png" alt="">
							<div class="info">
								<h3>Event paling berkesan</h3>
								<div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div>
								<small>650 acara</small> <br /><br />
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img style="width:100%" src="<?php echo base_url(); ?>assets/img/product/music.png" alt="">
							<div class="info">
								<h3>Sewa Perlengkapan</h3>
								<div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div>
								<small>400 alat</small> <br /><br />
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_color_1 -->

	<div class="bg_color_1">
		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Venue</h2>

			</div>
			<div class="row justify-content-between">
				<div class="col-lg-6 wow" data-wow-offset="150">
					<center>
						<h4><strong>Planning Menjadi Mudah dan<br> Cepat Secara Online.</strong></h4>
					</center><br />
					<figure class="block-reveal">
						<div class="block-horizzontal"></div>
						<img src="<?php echo base_url(); ?>assets/img/about_1.jpg" class="img-fluid" alt="">
					</figure>
				</div>
				<div class="col-lg-5">
					<button class="btn btn-sm" style="border-radius:0px; background-color:#00966C; color:#fff;"><i class="icon-search"></i></button>
					<p style="margin-bottom: 15px">
					<h5><strong>Pencarian mudah</strong></h5>
					Fitur pencarian yang pintar dan menggunakan bahasa sederhana tanpa membingungkan proses pencarian
					</p>
					<button class="btn btn-sm" style="border-radius:0px; background-color:#FFB31C; color:#fff;"><i class="icon-money" style="color:#fff;"></i></button>
					<p style="margin-bottom: 15px">
					<h5><strong>Biaya terjangkau</strong></h5>
					Terus bersaing dengan harga pasar agar pengguna merasakan pengalaman dengan harga rendah
					</p>
					<button class="btn btn-sm" style="border-radius:0px; background-color:#FD7185; color:#fff;"><i class="icon-user-1"></i></button>
					<p style="margin-bottom: 15px">
					<h5><strong>1500+ Mitra kerja</strong></h5>
					Terus bersaing dengan harga pasar agar pengguna merasakan pengalaman dengan harga rendah
					</p>
				</div>
			</div>
			<!--/row-->
		</div>
		<!--/container-->
	</div>
	<!--/bg_color_1-->

	<div class="bg_color_1">
		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2> Event </h2>

			</div>
			<div class="row justify-content-between">
			<div class="col-lg-5">
					<button class="btn btn-sm" style="border-radius:0px; background-color:#00966C; color:#fff;"><i class="icon-search"></i></button>
					<p style="margin-bottom: 15px">
					<h5><strong>Pencarian mudah</strong></h5>
					Fitur pencarian yang pintar dan menggunakan bahasa sederhana tanpa membingungkan proses pencarian
					</p>
					<button class="btn btn-sm" style="border-radius:0px; background-color:#FFB31C; color:#fff;"><i class="icon-money" style="color:#fff;"></i></button>
					<p style="margin-bottom: 15px">
					<h5><strong>Biaya terjangkau</strong></h5>
					Terus bersaing dengan harga pasar agar pengguna merasakan pengalaman dengan harga rendah
					</p>
					<button class="btn btn-sm" style="border-radius:0px; background-color:#FD7185; color:#fff;"><i class="icon-user-1"></i></button>
					<p style="margin-bottom: 15px">
					<h5><strong>1500+ Mitra kerja</strong></h5>
					Terus bersaing dengan harga pasar agar pengguna merasakan pengalaman dengan harga rendah
					</p>
				</div>
				<div class="col-lg-6 wow" data-wow-offset="150">
					<center>
						<h4><strong>Planning Menjadi Mudah dan<br> Cepat Secara Online.</strong></h4>
					</center><br />
					<figure class="block-reveal">
						<div class="block-horizzontal"></div>
						<img src="<?php echo base_url(); ?>assets/img/about_1.jpg" class="img-fluid" alt="">
					</figure>
				</div>
				
			</div>
			<!--/row-->
		</div>
		<!--/container-->
	</div>
	<!--/bg_color_1-->

	<div class="bg_color_1">
		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Talent</h2>

			</div>
			<div class="row justify-content-between">
				<div class="col-lg-6 wow" data-wow-offset="150">
					<center>
						<h4><strong>Planning Menjadi Mudah dan<br> Cepat Secara Online.</strong></h4>
					</center><br />
					<figure class="block-reveal">
						<div class="block-horizzontal"></div>
						<img src="<?php echo base_url(); ?>assets/img/about_1.jpg" class="img-fluid" alt="">
					</figure>
				</div>
				<div class="col-lg-5">
					<button class="btn btn-sm" style="border-radius:0px; background-color:#00966C; color:#fff;"><i class="icon-search"></i></button>
					<p style="margin-bottom: 15px">
					<h5><strong>Pencarian mudah</strong></h5>
					Fitur pencarian yang pintar dan menggunakan bahasa sederhana tanpa membingungkan proses pencarian
					</p>
					<button class="btn btn-sm" style="border-radius:0px; background-color:#FFB31C; color:#fff;"><i class="icon-money" style="color:#fff;"></i></button>
					<p style="margin-bottom: 15px">
					<h5><strong>Biaya terjangkau</strong></h5>
					Terus bersaing dengan harga pasar agar pengguna merasakan pengalaman dengan harga rendah
					</p>
					<button class="btn btn-sm" style="border-radius:0px; background-color:#FD7185; color:#fff;"><i class="icon-user-1"></i></button>
					<p style="margin-bottom: 15px">
					<h5><strong>1500+ Mitra kerja</strong></h5>
					Terus bersaing dengan harga pasar agar pengguna merasakan pengalaman dengan harga rendah
					</p>
				</div>
			</div>
			<!--/row-->
		</div>
		<!--/container-->
	</div>
	<!--/bg_color_1-->


	<div class="container margin_60_35">
		<!--
			<div class="main_title_3">
				<span></span>
				<h2>Produk ter-hits saat ini</h2>
				<p>Booking meeting room, event dan talents terbaik pilihanmu</p>
				<a href="<?php echo base_url(); ?>assets/grid-listings-filterscol.html">See all</a>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-3 col-sm-6">
					<a href="<?php echo base_url(); ?>assets/detail-shop.html" class="grid_item small">
						<figure>
							<img src="<?php echo base_url(); ?>assets/img/shop_1.jpg" alt="">
							<div class="info">
								<h3>Hotel ABC</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?php echo base_url(); ?>assets/detail-shop.html" class="grid_item small">
						<figure>
							<img src="<?php echo base_url(); ?>assets/img/shop_2.jpg" alt="">
							<div class="info">
								<h3>Louis Vuitton</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?php echo base_url(); ?>assets/detail-shop.html" class="grid_item small">
						<figure>
							<img src="<?php echo base_url(); ?>assets/img/shop_3.jpg" alt="">
							<div class="info">
								<h3>Burberry</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?php echo base_url(); ?>assets/detail-shop.html" class="grid_item small">
						<figure>
							<img src="<?php echo base_url(); ?>assets/img/shop_4.jpg" alt="">
							<div class="info">
								<h3>Pinko</h3>
							</div>
						</figure>
					</a>
				</div>
			</div>

			<div class="row add_bottom_30">
				<div class="col-lg-3 col-sm-6">
					<a href="<?php echo base_url(); ?>assets/detail-hotel.html" class="grid_item small">
						<figure>
							<img src="<?php echo base_url(); ?>assets/img/hotel_1.jpg" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel Mariott</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?php echo base_url(); ?>assets/detail-hotel.html" class="grid_item small">
						<figure>
							<img src="<?php echo base_url(); ?>assets/img/hotel_2.jpg" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel Concorde</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?php echo base_url(); ?>assets/detail-hotel.html" class="grid_item small">
						<figure>
							<img src="<?php echo base_url(); ?>assets/img/hotel_3.jpg" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel La Defanse</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?php echo base_url(); ?>assets/detail-hotel.html" class="grid_item small">
						<figure>
							<img src="<?php echo base_url(); ?>assets/img/hotel_4.jpg" alt="">
							<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
								<h3>Hotel Carlton</h3>
							</div>
						</figure>
					</a>
				</div>
			</div>		
			
			<div class="main_title_3">
				<span></span>
				<h2>Lokasi Terpopuler</h2>
				<p>Lokasi terpopuler KlikVenue</p>
				<a href="<?php echo base_url(); ?>assets/grid-listings-filterscol.html">See all</a>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-3 col-sm-6">
					<a href="<?php echo base_url(); ?>assets/detail-hotel.html" class="grid_item small">
						<figure>
							<img src="<?php echo base_url(); ?>assets/img/jakarta.jpeg" alt="">
							<div class="info">
								<h3>Jakarta</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?php echo base_url(); ?>assets/detail-hotel.html" class="grid_item small">
						<figure>
							<img src="<?php echo base_url(); ?>assets/img/bandung.jpeg" alt="">
							<div class="info">
								<h3>Bandung</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?php echo base_url(); ?>assets/detail-hotel.html" class="grid_item small">
						<figure>
							<img src="<?php echo base_url(); ?>assets/img/bogor.jpeg" alt="">
							<div class="info">
								<h3>Bogor</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?php echo base_url(); ?>assets/detail-hotel.html" class="grid_item small">
						<figure>
							<img src="<?php echo base_url(); ?>assets/img/surabaya.jpeg" alt="">
							<div class="info">
								<h3>Surabaya</h3>
							</div>
						</figure>
					</a>
				</div>

			</div>
      -->

		<div class="main_title_3">
			<span></span>
			<h2>Vendor Terpercaya Kami</h2>
			<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			<a href="<?php echo base_url(); ?>assets/grid-listings-filterscol.html">See all</a>
		</div>
		<div class="row ">
			<div class="col-lg-2 col-sm-6">
				<a href="<?php echo base_url(); ?>assets/detail-restaurant.html" class="grid_item small">
					<figure>
						<img src="<?php echo base_url(); ?>assets/img/restaurant_1.jpg" alt="">
						<div class="info">
							<h3>Da Alfredo</h3>
						</div>
					</figure>
				</a>
			</div>
			<div class="col-lg-2 col-sm-6">
				<a href="<?php echo base_url(); ?>assets/detail-restaurant.html" class="grid_item small">
					<figure>
						<img src="<?php echo base_url(); ?>assets/img/restaurant_2.jpg" alt="">
						<div class="info">
							<h3>Bistroter</h3>
						</div>
					</figure>
				</a>
			</div>
			<div class="col-lg-2 col-sm-6">
				<a href="<?php echo base_url(); ?>assets/detail-restaurant.html" class="grid_item small">
					<figure>
						<img src="<?php echo base_url(); ?>assets/img/restaurant_3.jpg" alt="">
						<div class="info">
							<h3>Da Luigi</h3>
						</div>
					</figure>
				</a>
			</div>
			<div class="col-lg-2 col-sm-6">
				<a href="<?php echo base_url(); ?>assets/detail-restaurant.html" class="grid_item small">
					<figure>
						<img src="<?php echo base_url(); ?>assets/img/restaurant_4.jpg" alt="">
						<div class="info">
							<h3>Marco King</h3>
						</div>
					</figure>
				</a>
			</div>
			<div class="col-lg-2 col-sm-6">
				<a href="<?php echo base_url(); ?>assets/detail-restaurant.html" class="grid_item small">
					<figure>
						<img src="<?php echo base_url(); ?>assets/img/restaurant_4.jpg" alt="">
						<div class="info">
							<h3>Marco King</h3>
						</div>
					</figure>
				</a>
			</div>
			<div class="col-lg-2 col-sm-6">
				<a href="<?php echo base_url(); ?>assets/detail-restaurant.html" class="grid_item small">
					<figure>
						<img src="<?php echo base_url(); ?>assets/img/restaurant_4.jpg" alt="">
						<div class="info">
							<h3>Marco King</h3>
						</div>
					</figure>
				</a>
			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->

	<div class="call_section">
		<div class="wrapper">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h2><i class="bg-linear"> Cara Kerja KlikVenue &emsp;</i></h2>
					<p>Anda dapat memanfaatkan KlikVenue dengan mudah dan cepat.</p>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="box_how">
							<i class="pe-7s-search"></i>
							<h3>Cari Produk</h3>
							<p>Cari produk kami berdasarkan kategori (Venue, Event, Talent)</p>
							<span></span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box_how">
							<i class="pe-7s-info"></i>
							<h3>Dapatkan Informasi Produk</h3>
							<p>Dapatkan informasi mengenai produk kami (detail, gambar, rating, review customer)</p>
							<span></span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box_how">
							<i class="pe-7s-like2"></i>
							<h3>Book Produk</h3>
							<p>Book produk kami dalam sekali klik</p>
						</div>
					</div>
				</div>
				<!-- /row -->
				<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5s"><a href="<?php echo base_url(); ?>assets/account.html" class="btn_1 rounded">Mulai Sekarang</a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>assets/account.html" class="btn_1 rounded">Daftar Vendor</a></p>
			</div>
			<canvas id="hero-canvas" width="1920" height="1080"></canvas>
		</div>
		<!-- /wrapper -->
	</div>
	<!--/call_section-->

	<div class="bg_color_1">
		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2><i class="bg-linear">Ingin buat event tapi gamau ribet ? &emsp;</i></h2><br />
				<p style="font-size:1rem;">Dengan KlikVanue kamu dapat menyewa event organizer langsung dari Klikvanue sendiri,<br /> tentunya dengan rentetan pengalaman dalam membuat event yang luar biasa menakjubkan.</p>
			</div>
			<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5" style="visibility: visible; animation-name: bounceIn;"><a href="account.html" class="btn_1 rounded"><i class="icon-mail-alt"></i> Ask Proposal</a></p>
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_color_1 -->

	<div class="container margin_60_35">
	<div class="main_title_2">
			<span><em></em></span>
			<h2><i class="bg-linear">Kontak</i></h2><br />
			<p style="font-size:1rem;">Silahkan hubungi kami disini untuk informasi lebih lanjut.</p>
		</div>
		<div class="row justify-content-center">
		
			<div class="col-xl-6 col-lg-6 pr-xl-5">
				<div class="main_title_3">
					<span></span>
					<h2>Kirim pesan anda </h2>
					<p>Kami akan merespon dalam waktu cepat </p>
				</div>
				<div id="message-contact"></div>
					<form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" type="text" id="name_contact" name="name_contact">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Last name</label>
									<input class="form-control" type="text" id="lastname_contact" name="lastname_contact">
								</div>
							</div>
						</div>
						<!-- /row -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" id="email_contact" name="email_contact">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Telephone</label>
									<input class="form-control" type="text" id="phone_contact" name="phone_contact">
								</div>
							</div>
						</div>
						<!-- /row -->
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" id="message_contact" name="message_contact" style="height:150px;"></textarea>
						</div>
					
						<p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded" id="submit-contact"></p>
					</form>
			</div>
			<div class="col-xl-6 col-lg-6 pl-xl-5">
				<div class="box_contacts">
					<i class="ti-headphone"></i>
					<h2>Telepon</h2>
					<a href="contacts.html#0">0812 1238 4083</a>
				</div>
				<div class="box_contacts">
					<i class="ti-email"></i>
					<h2>Email</h2>
					<a href="contacts.html#0">hallo@klikvanue.com</a>
				</div>
				<div class="box_contacts">
					<i class="ti-home"></i>
					<h2>Alamat</h2>
					<a href="contacts.html#0">Ruko Inkopal Jl Raya Kramat No. 27 <br>Jakarta Pusat 12540.</a>
				</div>
			</div>
		</div>
	</div>

</main>
<script>
	$(document).ready(function () {
		
		$.ajax({
			url: "<?php echo site_url('search/get_city_list/')?>",
			type: "GET",
			dataType: "JSON",
			async:true,
			success: function(data) {
				var options = '<select class="wide" name="city" id="city"><option value="">Dimana ?</option><option value="">Semua Kota</option>';
					$.each(data, function(index, item) {
						options += "<option value='"+item.name+"'>" + item.name+ "</option>";
					});
					options += "</select>" 
					$('#list_city').html(options);
					$('#city').niceSelect();
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Error get data from ajax');
			}
		});

	});
</script>	




