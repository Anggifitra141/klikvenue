<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>KLIKVENUE | #1 Marketplace for Event and Venu</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/vendors.css" rel="stylesheet">

    <!-- ALTERNATIVE COLORS CSS -->
	<link href="<?php echo base_url(); ?>assets/index.html#" id="colors" rel="stylesheet">

</head>

<body>
		
	<div id="page">
		
	<header class="header menu_fixed">
		<div id="logo">
			<a href="<?php echo base_url(); ?>assets/index.html" title="Sparker - Directory and listings template">
				<img src="<?php echo base_url(); ?>assets/img/logo.png" width="200" height="57" alt="" class="logo_normal">
				<img src="<?php echo base_url(); ?>assets/img/logo_sticky.png" width="200" height="57" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="<?php echo base_url(); ?>" class="btn_add">Buat Pesanan  <i class="icon-edit-alt"></i></a></li>
		</ul>
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
            <li><span><a href="<?php echo base_url(); ?>">Rent Equipment</a></span></li>
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
          <div class="col-xl-6 col-lg-6" style="background-color: #1A1A1A, 100%">
            <h3>Yuk, Tentukan <br/> <span class="bg-linear"> Acara Terbaikmu &emsp;&emsp;</span> Sekarang disini ! </h3>
            <p>Dengan KlikVenue segala aktivitas  penunjang kegiatan dapat dicari dengan mudah, cepat dan lengkap</p>
          </div>
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs" id="tab_checkout" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab_1" role="tab" aria-controls="tab_1" aria-selected="true">Venue</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab_2" role="tab" aria-controls="tab_2" aria-selected="false">Event</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab_3" role="tab" aria-controls="tab_2" aria-selected="false">Talent</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                  <form method="post" action="grid-listings-filterscol.html">
                    <div class="row no-gutters custom-search-input-2">
                      <div class="col-lg-3">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Venue apa yang kamu cari ?">
                          <i class="icon_search"></i>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Dimana ?">
                          <i class="icon_pin_alt"></i>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Kapan ?">
                          <i class="icon_calendar"></i>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Jumlah orang ?">
                          <i class="icon-users"></i>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <input type="submit" value="Search">
                      </div>
                    </div>
                    <!-- /row -->
                  </form>
                </div>
                <!-- /tab_1 -->
                <div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="tab_2">
                  <form method="post" action="grid-listings-filterscol.html">
                    <div class="row no-gutters custom-search-input-2">
                      <div class="col-lg-3">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Event apa yang kamu cari ?">
                          <i class="icon_search"></i>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Dimana ?">
                          <i class="icon_pin_alt"></i>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Kapan ?">
                          <i class="icon_calendar"></i>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Jumlah orang ?">
                          <i class="icon-users"></i>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <input type="submit" value="Search">
                      </div>
                    </div>
                    <!-- /row -->
                  </form>
                </div>
                <!-- /tab_2 -->
                <div class="tab-pane fade" id="tab_3" role="tabpanel" aria-labelledby="tab_2">
                  <form method="post" action="grid-listings-filterscol.html">
                    <div class="row no-gutters custom-search-input-2">
                      <div class="col-lg-3">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Talent apa yang kamu cari ?">
                          <i class="icon_search"></i>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Dimana ?">
                          <i class="icon_pin_alt"></i>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Kapan ?">
                          <i class="icon_calendar"></i>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Jumlah orang ?">
                          <i class="icon-users"></i>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <input type="submit" value="Search">
                      </div>
                    </div>
                    <!-- /row -->
                  </form>
                </div>
                <!-- /tab_3 -->
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
						<a href="<?php echo base_url(); ?>assets/grid-listings-filterscol.html">
							<i class="icon-location"></i>
							<h3>Venue</h3>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>assets/grid-listings-filterscol.html">
							<i class="icon-calendar"></i>
							<h3>Events</h3>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>assets/grid-listings-filterscol.html">
							<i class="icon-star"></i>
							<h3>Talents</h3>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>assets/grid-listings-filterscol.html">
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
					<h2> <i class="bg-linear">Kenapa KlikVenue ?  &emsp;</i> </h2>
					
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6 wow" data-wow-offset="150">
          <center><h4><strong>Planning Menjadi Mudah dan<br> Cepat Secara Online.</strong></h4></center><br/>
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="<?php echo base_url();?>assets/img/about_1.jpg" class="img-fluid" alt="">
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
							<img style="width:100%" src="<?php echo base_url();?>assets/img/product/venue-room.jpeg" alt="">
							<div class="info">
                  <h3>Venue terbaik</h3>
                  <div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div> 
                  <small>750 ruang</small>  <br/><br/>								     
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img style="width:100%" src="<?php echo base_url();?>assets/img/product/hotel-room.png" alt="">
							<div class="info">
                  <h3>Hotel terjangkau</h3>
                  <div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div> 
                  <small>600 ruang</small>  <br/><br/>								     
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
            <img style="width:100%" src="<?php echo base_url();?>assets/img/product/office-room.png" alt="">
							<div class="info">
                  <h3>Ruang Bekerja</h3>
                  <div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div> 
                  <small>450 ruang</small>  <br/><br/>								     
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
            <img style="width:100%" src="<?php echo base_url();?>assets/img/product/talent.png" alt="">
							<div class="info">
                  <h3>Talent berpengalaman</h3>
                  <div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div> 
                  <small>400 talenta</small>  <br/><br/>								     
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
            <img style="width:100%" src="<?php echo base_url();?>assets/img/product/event.png" alt="">
							<div class="info">
                  <h3>Event paling berkesan</h3>
                  <div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div> 
                  <small>650 acara</small>  <br/><br/>								     
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
            <img style="width:100%" src="<?php echo base_url();?>assets/img/product/music.png" alt="">
							<div class="info">
                  <h3>Sewa Perlengkapan</h3>
                  <div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div> 
                  <small>400 alat</small>  <br/><br/>								     
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

		<div class="container margin_60_35">
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
			</div>			<!-- /row -->
			
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
			<!-- /row -->
			
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
					<h2><i class="bg-linear">Ingin buat event tapi gamau ribet ? &emsp;</i></h2><br/>
					<p style="font-size:1rem;">Dengan KlikVanue kamu dapat menyewa event organizer langsung dari Klikvanue sendiri,<br/> tentunya dengan rentetan pengalaman dalam membuat event yang luar biasa menakjubkan.</p>
				</div>
				<div class="row">
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img style="width:100%" src="<?php echo base_url();?>assets/img/product/konser-festival.png" alt="">
							<div class="info">
                  <h3>Konser Festival</h3>
                  <div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div> 
                  <small>40 acara</small>  <br/><br/>								     
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
							<img style="width:100%" src="<?php echo base_url();?>assets/img/product/pesta-nikah.png" alt="">
							<div class="info">
                  <h3>Pesta Pernikahan</h3>
                  <div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div> 
                  <small>20 Acara</small>  <br/><br/>								     
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-sm-6">
					<a href="grid-listings-filterstop.html" class="grid_item">
						<figure>
            <img style="width:100%" src="<?php echo base_url();?>assets/img/product/meeting.png" alt="">
							<div class="info">
                  <h3>Acara Meeting</h3>
                  <div style="text-align:right; margin-top:-20px;"><i style="" class="icon-left"> </i> </div> 
                  <small>50 acara</small>  <br/><br/>								     
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

	</main>
	<!-- /main -->

	<footer class="plus_border">
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h3 data-target="#collapse_ft_1">Quick Links</h3>
					<div class="collapse dont-collapse-sm" id="collapse_ft_1">
						<ul class="links">
							<li><a href="<?php echo base_url(); ?>assets/index.html#0">About us</a></li>
							<li><a href="<?php echo base_url(); ?>assets/index.html#0">Faq</a></li>
							<li><a href="<?php echo base_url(); ?>assets/index.html#0">Help</a></li>
							<li><a href="<?php echo base_url(); ?>assets/index.html#0">My account</a></li>
							<li><a href="<?php echo base_url(); ?>assets/index.html#0">Create account</a></li>
							<li><a href="<?php echo base_url(); ?>assets/index.html#0">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h3 data-target="#collapse_ft_2">Categories</h3>
					<div class="collapse dont-collapse-sm" id="collapse_ft_2">
						<ul class="links">
							<li><a href="<?php echo base_url(); ?>assets/index.html#0">Shops</a></li>
							<li><a href="<?php echo base_url(); ?>assets/index.html#0">Hotels</a></li>
							<li><a href="<?php echo base_url(); ?>assets/index.html#0">Restaurants</a></li>
							<li><a href="<?php echo base_url(); ?>assets/index.html#0">Bars</a></li>
							<li><a href="<?php echo base_url(); ?>assets/index.html#0">Events</a></li>
							<li><a href="<?php echo base_url(); ?>assets/index.html#0">Fitness</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h3 data-target="#collapse_ft_3">Contacts</h3>
					<div class="collapse dont-collapse-sm" id="collapse_ft_3">
						<ul class="contacts">
							<li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
							<li><i class="ti-headphone-alt"></i>+39 06 97240120</li>
							<li><i class="ti-email"></i><a href="<?php echo base_url(); ?>assets/index.html#0">info@sparker.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h3 data-target="#collapse_ft_4">Keep in touch</h3>
					<div class="collapse dont-collapse-sm" id="collapse_ft_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
									<input type="submit" value="Submit" id="submit-newsletter">
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="<?php echo base_url(); ?>assets/index.html#0"><i class="ti-facebook"></i></a></li>
								<li><a href="<?php echo base_url(); ?>assets/index.html#0"><i class="ti-twitter-alt"></i></a></li>
								<li><a href="<?php echo base_url(); ?>assets/index.html#0"><i class="ti-google"></i></a></li>
								<li><a href="<?php echo base_url(); ?>assets/index.html#0"><i class="ti-pinterest"></i></a></li>
								<li><a href="<?php echo base_url(); ?>assets/index.html#0"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row">
				<div class="col-lg-6">
					<ul id="footer-selector">
						<li>
							<div class="styled-select" id="lang-selector">
								<select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
							</div>
						</li>
						<li>
							<div class="styled-select" id="currency-selector">
								<select>
									<option value="US Dollars" selected>US Dollars</option>
									<option value="Euro">Euro</option>
								</select>
							</div>
						</li>
						<li><img src="<?php echo base_url(); ?>assets/img/cards_all.svg" alt=""></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul id="additional_links">
						<li><a href="<?php echo base_url(); ?>assets/index.html#0">Terms and conditions</a></li>
						<li><a href="<?php echo base_url(); ?>assets/index.html#0">Privacy</a></li>
						<li><span>© 2020 Sparker</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="<?php echo base_url(); ?>assets/index.html#0" class="social_bt facebook">Login with Facebook</a>
				<a href="<?php echo base_url(); ?>assets/index.html#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="<?php echo base_url(); ?>assets/javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="<?php echo base_url(); ?>assets/register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/common_scripts.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/functions.js"></script>
	<script src="<?php echo base_url(); ?>assets/assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="<?php echo base_url(); ?>assets/js/animated_canvas_min.js"></script>

	<!-- COLOR SWITCHER  -->
	<script src="<?php echo base_url(); ?>assets/js/switcher.js"></script>
	<div id="style-switcher">
		<h6>Color Switcher <a href="<?php echo base_url(); ?>assets/index.html#"><i class="ti-settings"></i></a></h6>
		<div>
			<ul class="colors" id="color1">
				<li><a href="<?php echo base_url(); ?>assets/index.html#" class="default" title="Default"></a></li>
				<li><a href="<?php echo base_url(); ?>assets/index.html#" class="aqua" title="Aqua"></a></li>
				<li><a href="<?php echo base_url(); ?>assets/index.html#" class="green_switcher" title="Green"></a></li>
				<li><a href="<?php echo base_url(); ?>assets/index.html#" class="orange" title="Orange"></a></li>
				<li><a href="<?php echo base_url(); ?>assets/index.html#" class="beige" title="Beige"></a></li>
				<li><a href="<?php echo base_url(); ?>assets/index.html#" class="gray" title="Gray"></a></li>
				<li><a href="<?php echo base_url(); ?>assets/index.html#" class="green-2" title="Green"></a></li>
				<li><a href="<?php echo base_url(); ?>assets/index.html#" class="navy" title="Navy"></a></li>
				<li><a href="<?php echo base_url(); ?>assets/index.html#" class="peach" title="Peach"></a></li>
				<li><a href="<?php echo base_url(); ?>assets/index.html#" class="purple" title="Purple"></a></li>
				<li><a href="<?php echo base_url(); ?>assets/index.html#" class="red" title="Red"></a></li>
				<li><a href="<?php echo base_url(); ?>assets/index.html#" class="violet" title="Violet"></a></li>
			</ul>
		</div>
	</div>

</body>
</html>