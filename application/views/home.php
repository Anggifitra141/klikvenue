<header class="header menu_fixed">
		<div id="logo">
			<a href="<?php echo site_url(''); ?>" title="Sparker - Directory and listings template">
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
                  <form method="post" action="<?php echo site_url('search');?>">
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
					<h2><i class="bg-linear">Ingin buat event tapi gamau ribet ? &emsp;</i></h2><br/>
					<p style="font-size:1rem;">Dengan KlikVanue kamu dapat menyewa event organizer langsung dari Klikvanue sendiri,<br/> tentunya dengan rentetan pengalaman dalam membuat event yang luar biasa menakjubkan.</p>
				</div>
				<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5" style="visibility: visible; animation-name: bounceIn;"><a href="account.html" class="btn_1 rounded"><i class="icon-mail-alt"></i>  Ask Proposal</a></p>
			</div>
			<!-- /container -->	
		</div>
		<!-- /bg_color_1 -->
  
  </main>