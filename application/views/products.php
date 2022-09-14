<header class="header_in">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-12">
				<div id="logo">
					<a href="<?php echo site_url('') ?>">
						<img src="<?php echo base_url(); ?>assets/img/logo_sticky.png" width="200" height="57" alt="" class="logo_sticky">
					</a>
				</div>
			</div>
			<div class="col-lg-9 col-12">
				<ul id="top_menu">
					<li><a href="<?php echo base_url(); ?>" class="btn_add">Buat Pesanan <i class="icon-edit-alt"></i></a></li>
				</ul>
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
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</header>
<!-- /header -->

<div class="filters_listing version_2">
	<div class="container">
		<ul class="clearfix">
			<li>
				<div class="switch-field">
					<input type="radio" id="all" name="listing_filter" value="all" checked>
					<label for="all">All</label>
					<input type="radio" id="popular" name="listing_filter" value="popular">
					<label for="popular">Popular</label>
					<input type="radio" id="latest" name="listing_filter" value="latest">
					<label for="latest">Latest</label>
				</div>
			</li>
			<li>
				<div class="layout_view">
					<a href="row-listings-filterscol.html#0" class="active"><i class="icon-th"></i></a>
					<a href="row-listings-filterscol.html#0"><i class="icon-th-list"></i></a>
					<a href="row-listings-filterscol.html#0"><i class="icon-map"></i></a>
				</div>
			</li>
			<li>
				<a class="btn_map" data-toggle="collapse" href="row-listings-filterscol.html#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
			</li>
		</ul>
	</div>
	<!-- /container -->
</div>
<!-- /filters -->

<div class="collapse" id="collapseMap">
	<div id="map" class="map"></div>
</div>
<!-- /Map -->

<div class="container margin_60_35">
	<div class="row">
		<aside class="col-lg-3" id="sidebar">
			<div id="filters_col">
				<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>

				<div class="collapse show" id="collapseFilters">
					<div class="filter_type">
						<h6>Category</h6>
						<ul>
							<li>
								<label class="container_check">Venue <small>123</small>
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Event <small>56</small>
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Talent <small>33</small>
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
					<div class="filter_type">
						<h6>Distance</h6>
						<div class="distance"> Radius around selected destination <span></span> km</div>
						<input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal">
					</div>
					<div class="filter_type">
						<h6>Rating</h6>
						<ul>
							<li>
								<label class="container_check">Superb 9+ <small>21</small>
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Very Good 8+ <small>33</small>
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Good 7+ <small>213</small>
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Pleasant 6+ <small>23</small>
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
				</div>
				<!--/collapse -->
			</div>
			<!--/filters col-->
		</aside>
		<!-- /aside -->

		<div class="col-lg-9">

			<div id="product_list">

			</div>



			<p class="text-center"><a href="row-listings-filterscol.html#0" class="btn_1 rounded add_top_30">Load more</a></p>
		</div>
		<!-- /col -->
	</div>
</div>
<!-- /container -->

<script>
	$(document).ready(function() {

		$.ajax({
			url: "<?php echo site_url('products/get_partner_list') ?>",
			type: "GET",
			dataType: "JSON",
			success: function(data) {
				var products = '';

				$.each(data, function(i, value) {
					products += `
					<div class="strip list_view">
						<div class="row no-gutters">
							<div class="col-lg-5">
								<figure>
									<a href="<?php echo site_url('profile') ?>"><img src="<?php echo base_url(); ?>assets/img/location_1.jpg" class="img-fluid" alt="">
										<div class="read_more"><span>Read more</span></div>
									</a>
									<small>` + value.partner_category + `</small>
								</figure>
							</div>
							<div class="col-lg-7">
								<div class="wrapper">
									<h3><a href="<?php echo site_url('profile') ?>">` + value.name + `</a></h3>
									<small>` + value.city + `, ` + value.province + `</small>
									<p>` + value.description + `</p>
									<a href="` + value.maps + `"> <i class="ti-map"></i> Lihat di maps</a>
									
								</div>
								<ul>
									<li>
										<span class="loc_open">Now Open</span>
									</li>
									<li>
										<a href="<?php echo site_url('products/partner/')?>`+value.slug+`"><div class="score"><strong>Pesan Sekarang</strong></div></a>
									</li>
								</ul>
							</div>
						</div>
					</div>`;
				});
				$('#product_list').html(products)
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Error get data from ajax');
			}
		});
	})
</script>
