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
						<li><span><a href="<?php echo base_url(); ?>">Rent Equipment</a></span></li>
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

<div id="carousel_in" class="owl-carousel owl-theme">
	<div class="item"><img src="<?php echo base_url(); ?>assets/img/carousel_detail_1.jpg" alt=""></div>
	<div class="item"><img src="<?php echo base_url(); ?>assets/img/carousel_detail_2.jpg" alt=""></div>
	<div class="item"><img src="<?php echo base_url(); ?>assets/img/carousel_detail_3.jpg" alt=""></div>
	<div class="item"><img src="<?php echo base_url(); ?>assets/img/carousel_detail_4.jpg" alt=""></div>
</div>

<nav class="secondary_nav sticky_horizontal_2">
	<div class="container">
		<ul class="clearfix">
			<li><a href="detail-carousel.html#description" class="active">Description</a></li>
			<li><a href="detail-carousel.html#reviews">Reviews</a></li>
			<li><a href="detail-carousel.html#sidebar">Booking</a></li>
		</ul>
	</div>
</nav>

<div class="container margin_60_35">
	<div class="row">
		<div class="col-lg-8">
			<section id="description">
				<div class="detail_title_1">
					<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
					<h1 id="partner_name"></h1>
					<div id="partner_address"></div>
				</div>
				<p id="partner_description"></p>
				<div id="partner_facility">

					<div class="row add_bottom_30">
						<div class="col-lg-12">
							<h5 class="add_bottom_15">Fasilitas</h5>
							<div id="facility"> </div>
						</div>
					</div>
				</div>

				<!-- /row -->
				<hr>
				<div id="partner_product"></div>


				<h3>Prices</h3>
				<table class="table table-striped add_bottom_45">
					<tbody>
						<tr>
							<td>Low (from 23/03 to 31/05)</td>
							<td>140$</td>
						</tr>
						<tr>
							<td>Middle (from 23/03 to 31/05)</td>
							<td>180$</td>
						</tr>
						<tr>
							<td>High (from 23/03 to 31/05)</td>
							<td>200$</td>
						</tr>
					</tbody>
				</table>
				<hr>
				<h3>Location</h3>
				<div id="map" class="map map_single add_bottom_45"></div>
				<!-- End Map -->
			</section>
			<!-- /section -->

			<section id="reviews">
				<h2>Reviews</h2>
				<div class="reviews-container add_bottom_30">
					<div class="row">
						<div class="col-lg-3">
							<div id="review_summary">
								<strong>8.5</strong>
								<em>Superb</em>
								<small>Based on 4 reviews</small>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="row">
								<div class="col-lg-10 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-10 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-10 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-10 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-lg-10 col-9">
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
							</div>
							<!-- /row -->
						</div>
					</div>
					<!-- /row -->
				</div>

				<div class="reviews-container">

					<div class="review-box clearfix">
						<figure class="rev-thumb"><img src="<?php echo base_url(); ?>assets/img/avatar1.jpg" alt="">
						</figure>
						<div class="rev-content">
							<div class="rating">
								<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
							</div>
							<div class="rev-info">
								Admin – April 03, 2016:
							</div>
							<div class="rev-text">
								<p>
									Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
								</p>
							</div>
						</div>
					</div>
					<!-- /review-box -->
					<div class="review-box clearfix">
						<figure class="rev-thumb"><img src="<?php echo base_url(); ?>assets/img/avatar2.jpg" alt="">
						</figure>
						<div class="rev-content">
							<div class="rating">
								<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
							</div>
							<div class="rev-info">
								Ahsan – April 01, 2016:
							</div>
							<div class="rev-text">
								<p>
									Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
								</p>
							</div>
						</div>
					</div>
					<!-- /review-box -->
					<div class="review-box clearfix">
						<figure class="rev-thumb"><img src="<?php echo base_url(); ?>assets/img/avatar3.jpg" alt="">
						</figure>
						<div class="rev-content">
							<div class="rating">
								<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
							</div>
							<div class="rev-info">
								Sara – March 31, 2016:
							</div>
							<div class="rev-text">
								<p>
									Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
								</p>
							</div>
						</div>
					</div>
					<!-- /review-box -->
				</div>
				<!-- /review-container -->
			</section>
			<!-- /section -->
			<hr>

			<div class="add-review">
				<h5>Leave a Review</h5>
				<form>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Name and Lastname *</label>
							<input type="text" name="name_review" id="name_review" placeholder="" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label>Email *</label>
							<input type="email" name="email_review" id="email_review" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label>Rating </label>
							<div class="custom-select-form">
								<select name="rating_review" id="rating_review" class="wide">
									<option value="1">1 (lowest)</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5" selected>5 (medium)</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10 (highest)</option>
								</select>
							</div>
						</div>
						<div class="form-group col-md-12">
							<label>Your Review</label>
							<textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
						</div>
						<div class="form-group col-md-12 add_top_20 add_bottom_30">
							<input type="submit" value="Submit" class="btn_1" id="submit-review">
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /col -->

		<aside class="col-lg-4" id="sidebar">
			<div class="box_detail booking">
				<div class="price">
					<span>45$ <small>person</small></span>
					<div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
				</div>

				<div class="form-group" id="input-dates">
					<input class="form-control" type="text" name="dates" placeholder="When..">
					<i class="icon_calendar"></i>
				</div>

				<div class="dropdown">
					<a href="" data-toggle="dropdown">Guests <span id="qty_total">0</span></a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="dropdown-menu-content">
							<label>Adults</label>
							<div class="qty-buttons">
								<input type="button" value="+" class="qtyplus" name="adults">
								<input type="text" name="adults" id="adults" value="0" class="qty">
								<input type="button" value="-" class="qtyminus" name="adults">
							</div>
						</div>
						<div class="dropdown-menu-content">
							<label>Childrens</label>
							<div class="qty-buttons">
								<input type="button" value="+" class="qtyplus" name="child">
								<input type="text" name="child" id="child" value="0" class="qty">
								<input type="button" value="-" class="qtyminus" name="child">
							</div>
						</div>
					</div>
				</div>
				<!-- /dropdown -->

				<div class="form-group">
					<input class="form-control" type="number" name="room" placeholder="Total Room ">
					<i class="icon-home-outline"></i>
				</div>

				<div class="form-group clearfix">
					<div class="custom-select-form">
						<select class="wide">
							<option>Room Type</option>
							<option>Single Room</option>
							<option>Double Room</option>
							<option>Suite Room</option>
						</select>
					</div>
				</div>
				<a href="checkout.html" class=" add_top_30 btn_1 full-width purchase">Purchase</a>
				<a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Add to wishlist</a>
				<div class="text-center"><small>No money charged in this step</small></div>
			</div>
			<ul class="share-buttons">
				<li><a class="fb-share" href="detail-carousel.html#0"><i class="social_facebook"></i> Share</a></li>
				<li><a class="twitter-share" href="detail-carousel.html#0"><i class="social_twitter"></i> Share</a></li>
				<li><a class="gplus-share" href="detail-carousel.html#0"><i class="social_googleplus"></i> Share</a></li>
			</ul>
		</aside>
	</div>
	<!-- /row -->
</div>
<!-- /container -->

<script>
	$(document).ready(function() {

		$.ajax({
			url: "<?php echo site_url('products/get_partner/') . $slug ?>",
			type: "GET",
			dataType: "JSON",
			success: function(data) {

				$('#partner_name').text(data.name);
				$('#partner_address').html("<a href='" + data.maps + "'> " + data.city + ", " + data.province + " </a>");
				$('#partner_description').text(data.description);

				if (data.facility != "") {
					var facility = "";
					facility += "<ul class='bullets'>";

					$.each(JSON.parse(data.facility), function(index1, item1) {
						facility += "<li>" + item1 + "</li>";
					});
					facility += "</ul>";

					$("#facility").append(facility);
				} else {
					$('#partner_facility').hide();
				}

				get_product(data.id);
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Error get data from ajax');
			}
		});
	})

	function get_product(partner_id) {
		$.ajax({
			url: "<?php echo site_url('products/get_partner_product') ?>/" + partner_id,
			type: "GET",
			dataType: "JSON",
			success: function(data) {
				if ($.trim(data)) {
					console.log(data);
					var product = "";
					$.each(data, function(i, value) {
						var price = value.price;
						product += `<div class="room_type">
														<div class="row">
															<div class="col-md-4">
																<div class="row">
																	<div class="col-md-12">
																		<img src="<?php echo base_url(); ?>assets/img/gallery/hotel_list_1.jpg" class="img-fluid" alt="">
																	</div>
																</div>
																<br>
																<div class="row">
																	<div class="col-md-12">
																		<div class="opening" style="padding:10px; text-align:center;">
																			<h5>Harga Mulai</h5>
																			<strong style="font-size:16px;"> IDR `+ value.price+` </strong><br>
																			Per ` + value.unit + `
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-8">
																<h4>Single Room</h4>
																<p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
																<h6>Termasuk</h6>
																<ul class="hotel_facilities">
																	<li><span class="icon-circle"></span> Single Bed</li>
																	<li><span class="icon-circle"></span> Single Bed</li>
																	<li><span class="icon-circle"></span> Single Bed</li>
																	<li><span class="icon-circle"></span> Single Bed</li>
																	<li><span class="icon-circle"></span> Single Bed</li>
																</ul>
																<br>
																<h6>Perlengkapan</h6>
																<ul class="hotel_facilities">
																	<li><span class="icon-circle"></span> Single Bed</li>
																	<li><span class="icon-circle"></span> Single Bed</li>
																	<li><span class="icon-circle"></span> Single Bed</li>
																	<li><span class="icon-circle"></span> Single Bed</li>
																	<li><span class="icon-circle"></span> Single Bed</li>
																</ul>


															</div>
														</div>
														<!-- /row -->
													</div>
												<hr>`;
					});



					$('#partner_product').html(product)
				}
			}
		});
	}
</script>
