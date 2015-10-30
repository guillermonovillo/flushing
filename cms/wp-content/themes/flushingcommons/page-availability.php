<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Exchange
 * @since Twenty Fifteen 1.0
 * template Name: Availability
 */

get_header(); ?>
    <body class="Availability">
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <div class="bg-nav large-12 medium-12 small-12">
                <?php get_template_part("inc/nav","header"); ?>

            <section class="main-section">

                
<main id="top" role="main" class="availability">
<!-- START HEADER-->
<div class="content-availability hide-for-small">
	<figure class="content-left">
		<!-- TITLE MOBILE -->
		<div class="show-for-medium ">
			<div class="title-mobile box-green">
				<div class="align">
					<h1 class="title-40">
						<?php _e("Explore The Largest Project Going On In Flushing, New York","flushing");?>
					</h1>
				</div>
			</div>
		</div>
		<!-- HEADER CENTRAL = MAP HOVER SHADOW-->

		<div id="point-1" class="point-1 point">
			<span>
				<h2><?php _e("Explore","flushing");?></h2>
				<h3><?php _e("Residences","flushing");?></h3>
			</span>
		</div>
		<div id="point-2" class="point-2 point">
			<span>
				<h2><?php _e("Explore","flushing");?></h2>
				<h3><?php _e("Offices","flushing");?></h3>
			</span>
		</div>
		<div class="content-shadow">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 726 728" enable-background="new 0 0 726 728" xml:space="preserve">
				<g>
					<path d="M0,0v728h726V0H0z M107,417.5l38.5-26.5l8,2.5l44.5-32v-97l63.5-58.5l42.5,34v305.5l-197,41V417.5z M481.75,684.25
						l-415.5-7.75L65,600l404.5-83l12.25,6.25V684.25z M607,536h-22v149h-35.5H486l-2-164l-14.5-7l-160.833,30.334v-315L531,51.333
						l115.333,234l2.334,272L607,536z"/>
					<polygon id="point-shadow-1" class="point-shadow-1" points="531,51.333 308.667,229.333 308.667,544.334 469.5,514 484,521 486,685 549.5,685 585,685 585,536 607,536
						648.667,557.333 646.333,285.333"/>
					<polygon id="point-shadow-2" class="point-shadow-3" points="304,240 261.5,206 198,264.5 198,361.5 153.5,393.5 145.5,391 107,417.5 107,586.5 304,545.5"/>
				</g>
			</svg>
		</div>
		<img id="img-availability" class="img-availability" name="imgbaseavailability" src="<?php echo DIR; ?>/img/img-base-availability.jpg" width="726" height="728" border="0" id="imgbaseavailability" usemap="#m_imgbaseavailability" alt="" />
		<map class="mapping" name="m_imgbaseavailability" id="m_imgbaseavailability">
			<area class="map-point" id="map-1" shape="poly" coords="263,206,304,239,307,546,108,588,108,417,113,415,112,400,199,333,199,264,263,206" href="#residences" alt="" />
			<area class="map-point" id="map-2" shape="poly" coords="322,542,465,514,484,520,487,638,561,635,586,635,581,537,609,531,620,539,618,300,544,101,320,260,322,542" href="#offices" alt="" />
		</map>

	<!-- END MAP HOVER SHADOW-->
	</figure>
	<div class="content-right">
		<div class="box-green">
			<h1 class="title-40">
				<?php _e("Explore <br>The Largest <br>Project Going On <br>In Flushing, New York","flushing");?>
			</h1>
		</div>
		<figure>
			<img src="<?php echo DIR; ?>/img/img-thumb-availability-left.jpg" alt="" />
			<img src="<?php echo DIR; ?>/img/img-thumb-availability-right.jpg" alt="" />
		</figure>
	</div>

	<!-- HEADER CENTRAL = CONTENT INFO OFFICES-->
	<div class="content-info-offices">
		<div class="content-left over-gris">
			<div class="titles">
				<div class="align row">
					<h2 class="show-for-large-up"><?php _e("Availability","flushing");?></h2>
					<h2 class="show-for-medium title-40"><?php _e("Offices Availabilities","flushing");?></h2>
					<p>
						<?php _e("Select by Floor","flushing");?>
					</p>
					<a class="show-for-medium close-floorplans arrow-vector see-all" href="#"><span></span><?php _e("Go Back","flushing");?></a>
				</div>
			</div>
			<a class="show-for-large-up close-floorplans see-all" href="#"><?php _e("Close","flushing");?> <span>&#215;</span></a>
			<figure>
				<svg version="1.1" class="building" id="building-residences" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1074.499 616.004" enable-background="new 0 0 1074.499 616.004"
					 xml:space="preserve">

					<text class="text-1" transform="matrix(1 0 0 1 986.3198 580.1816)" fill="#B88F54"  font-size="18"><?php _e("1st Floor","flushing");?></text>
					<line class="text-1" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="585.059" x2="984" y2="573.133"/>
					<text class="text-2" transform="matrix(1 0 0 1 986.3198 537.9238)" fill="#B88F54"  font-size="18"><?php _e("2nd Floor","flushing");?></text>
					<line class="text-2" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="542.801" x2="984" y2="530.875"/>
					<text class="text-3" transform="matrix(1 0 0 1 986.3198 496.4395)" fill="#B88F54"  font-size="18"><?php _e("3rd Floor","flushing");?></text>
					<line class="text-3" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="501.317" x2="984" y2="489.391"/>
					<text class="text-4" transform="matrix(1 0 0 1 986.3198 457.6836)" fill="#B88F54"  font-size="18"><?php _e("4th Floor","flushing");?></text>
					<line class="text-4" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="462.561" x2="984" y2="450.635"/>
					<text class="text-5" transform="matrix(1 0 0 1 986.3198 416.9395)" fill="#B88F54"  font-size="18"><?php _e("5th Floor","flushing");?></text>
					<line class="text-5" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="421.817" x2="984" y2="409.891"/>
					<text class="text-6" transform="matrix(1 0 0 1 986.3198 377.8672)" fill="#B88F54"  font-size="18"><?php _e("6th Floor","flushing");?></text>
					<line class="text-6" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="382.745" x2="984" y2="370.819"/>
					<text class="text-7" transform="matrix(1 0 0 1 986.3198 337.166)" fill="#B88F54"  font-size="18"><?php _e("7th Floor","flushing");?></text>
					<line class="text-7" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="342.044" x2="984" y2="330.119"/>
					<text class="text-8" transform="matrix(1 0 0 1 986.3198 301.1719)" fill="#B88F54"  font-size="18"><?php _e("8th Floor","flushing");?></text>
					<line class="text-8" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="306.049" x2="984" y2="294.124"/>
					<text class="text-9" transform="matrix(1 0 0 1 986.3198 261.1777)" fill="#B88F54"  font-size="18"><?php _e("9th Floor","flushing");?></text>
					<line class="text-9" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="266.056" x2="984" y2="254.13"/>
					<text class="text-10" transform="matrix(1 0 0 1 986.3198 221.4043)" fill="#B88F54"  font-size="18"><?php _e("10th Floor","flushing");?></text>
					<line class="text-10" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="226.282" x2="984" y2="214.356"/>
					<text class="text-11" transform="matrix(1 0 0 1 986.3198 178.1221)" fill="#B88F54"  font-size="18"><?php _e("11th Floor","flushing");?></text>
					<line class="text-11" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="183" x2="984" y2="171.074"/>
					<text class="text-12" transform="matrix(1 0 0 1 986.3198 138.748)" fill="#B88F54"  font-size="18"><?php _e("12th Floor","flushing");?></text>
					<line class="text-12" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="143.626" x2="984" y2="131.7"/>
					<text class="text-13" transform="matrix(1 0 0 1 986.3198 88.624)" fill="#B88F54"  font-size="18"><?php _e("13th Floor","flushing");?></text>
					<line class="text-13" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="956.666" y1="93.502" x2="984" y2="81.576"/>
					<rect class="floor f2" data-building="2" x="611.332" y="520.75" opacity="0.65" fill="#C2E6CA" enable-background="new    " width="283.75" height="43"/>
					<rect class="floor f1" data-building="1" x="611.332" y="563.75" opacity="0.65" fill="#C2E6CA" enable-background="new" width="283.75" height="43"/>
					<rect class="floor f12" data-building="12" x="611.332" y="124.002" opacity="0.65" fill="#C2E6CA" enable-background="new" width="283.75" height="39.248"/>
					<rect class="floor f13" data-building="13" x="611.332" y="63.002" opacity="0.65" fill="#C2E6CA" enable-background="new" width="283.75" height="61"/>
					<rect class="floor f3" data-building="3" x="611.332" y="477.75" opacity="0.65" fill="#C2E6CA" enable-background="new" width="283.75" height="43"/>
					<rect class="floor f4" data-building="4" x="611.332" y="438.25" opacity="0.65" fill="#C2E6CA" enable-background="new" width="283.75" height="39.5"/>
					<rect class="floor f5" data-building="5" x="611.332" y="398.75" opacity="0.65" fill="#C2E6CA" enable-background="new" width="283.75" height="39.5"/>
					<rect class="floor f6" data-building="6" x="611.332" y="359.25" opacity="0.65" fill="#C2E6CA" enable-background="new" width="283.75" height="39.5"/>
					<rect class="floor f7" data-building="7" x="611.332" y="319.75" opacity="0.65" fill="#C2E6CA" enable-background="new" width="283.75" height="39.5"/>
					<rect class="floor f8" data-building="8" x="611.332" y="281.75" opacity="0.65" fill="#C2E6CA" enable-background="new" width="283.75" height="38"/>
					<rect class="floor f9" data-building="9" x="611.332" y="242.25" opacity="0.65" fill="#C2E6CA" enable-background="new" width="283.75" height="39.5"/>
					<rect class="floor f10" data-building="10" x="611.332" y="202.75" opacity="0.65" fill="#C2E6CA" enable-background="new" width="283.75" height="39.5"/>
					<rect class="floor f11" data-building="11" x="611.332" y="163.25" opacity="0.65" fill="#C2E6CA" enable-background="new" width="283.75" height="39.5"/>

				</svg>
				<img class="building" src="<?php echo DIR; ?>/img/availability/residences.png" alt="" />
			</figure>
		</div>
		<div class="content-right">
			<div class="select-floor show-for-medium arrow-vector">
				<a href="#" class="close-floor-tablet"><?php _e("Select by Floor","flushing");?></a><span></span>
			</div>
			<div class="over-gris title-floor">
				<div id="title-offices" class="title-building"></div>
				<a class="show-for-medium arrow-vector see-all" href="#"><span></span><?php _e("Back","flushing");?></a>
				<a class="show-for-large-up arrow-vector see-all" href="#"><span></span><?php _e("See all","flushing");?></a>
				<a class="arrow-vector btnBack" href="#"><span></span><?php _e("Back","flushing");?></a>
			</div>
			<div class="line-gold"></div>
			<div class="view-floorplan">
				<div class="floorplan">
					<img src="" alt="" class="error"/>
				</div>
				<div class="foo-floorplan">
					<img src="" alt="" />
				</div>
			</div>
			<div class="not-result"></div>
			<ul class="list-floorplan list-floorplan-off"></ul>
			<div class="overlay"></div>
		</div>
	</div>
	<!-- END CONTENT CONTENT INFO OFFICES-->

	<!-- HEADER CENTRAL = CONTENT INFO RESIDENCES-->
	<div class="content-info-residences">
		<div class="content-left over-gris">
			<div class="titles">
				<div class="align row">
					<h2 class="show-for-large-up"><?php _e("Availability","flushing");?></h2>
					<h2 class="show-for-medium title-40"><?php _e("Residences Availabilities","flushing");?></h2>
					<p>
						<?php _e("Select by Floor","flushing");?>
					</p>
					<a class="show-for-medium close-floorplans arrow-vector see-all" href="#"><span></span><?php _e("Go Back","flushing");?></a>
				</div>
			</div>
			<a class="show-for-large-up close-floorplans see-all" href="#"><?php _e("Close","flushing");?> <span>&#215;</span></a>
			<figure>
				<svg version="1.1" class="building" id="building-offices" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1076.833 616.004" enable-background="new 0 0 1076.833 616.004" xml:space="preserve">
					<rect class="floor f14" data-building="14" x="353.655" y="145.335" opacity="0.65" fill="#C2E6CA" enable-background="new" width="586.92" height="32.297"/>
					<rect class="floor f15" data-building="15" x="353.655" y="109.835" opacity="0.65" fill="#C2E6CA" enable-background="new" width="539.92" height="35.5"/>
					<rect class="floor f16" data-building="16" x="353.655" y="79.835" opacity="0.65" fill="#C2E6CA" enable-background="new" width="539.92" height="30"/>
					<rect class="floor f17" data-building="17" x="353.655" y="23.835" opacity="0.65" fill="#C2E6CA" enable-background="new" width="539.92" height="56"/>
					<rect class="floor f13" data-building="13" x="353.655" y="177.632" opacity="0.65" fill="#C2E6CA" enable-background="new" width="586.92" height="28.979"/>
					<rect class="floor f12" data-building="12" x="353.655" y="206.61" opacity="0.65" fill="#C2E6CA" enable-background="new" width="586.92" height="26.391"/>
					<rect class="floor f11" data-building="11" x="353.655" y="233.001" opacity="0.65" fill="#C2E6CA" enable-background="new" width="586.92" height="33.999"/>
					<rect class="floor f10" data-building="10" x="353.655" y="267" opacity="0.65" fill="#C2E6CA" enable-background="new" width="586.92" height="25.333"/>
					<rect class="floor f9" data-building="9" x="353.655" y="292.333" opacity="0.65" fill="#C2E6CA" enable-background="new" width="586.92" height="34.833"/>
					<rect class="floor f8" data-building="8" x="353.655" y="327.167" opacity="0.65" fill="#C2E6CA" enable-background="new" width="586.92" height="24.959"/>
					<rect class="floor f7" data-building="7" x="353.655" y="352.125" opacity="0.65" fill="#C2E6CA" enable-background="new" width="586.92" height="34.541"/>
					<rect class="floor f6" data-building="6" x="353.655" y="386.667" opacity="0.65" fill="#C2E6CA" enable-background="new" width="586.92" height="25.24"/>
					<rect class="floor f5" data-building="5" x="353.655" y="411.907" opacity="0.65" fill="#C2E6CA" enable-background="new" width="586.92" height="33.985"/>
					<rect class="floor f4" data-building="4" x="353.655" y="445.893" opacity="0.65" fill="#C2E6CA" enable-background="new" width="586.92" height="16.13"/>
					<text class="text-4" transform="matrix(1 0 0 1 990.3208 449.457)" fill="#B88F54" font-size="18"><?php _e("4th Floor","flushing");?></text>
					<line class="text-4" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="454.334" x2="987.999" y2="442.409"/>
					<text class="text-5" transform="matrix(1 0 0 1 990.3208 422.1992)" fill="#B88F54"  font-size="18"><?php _e("5th Floor","flushing");?></text>
					<line class="text-5" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="427.077" x2="987.999" y2="415.151"/>
					<text class="text-6" transform="matrix(1 0 0 1 990.3208 393.7148)" fill="#B88F54"  font-size="18"><?php _e("6th Floor","flushing");?></text>
					<line class="text-6" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="398.592" x2="987.999" y2="386.667"/>
					<text class="text-7" transform="matrix(1 0 0 1 990.3208 363.959)" fill="#B88F54"  font-size="18"><?php _e("7th Floor","flushing");?></text>
					<line class="text-7" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="368.836" x2="987.999" y2="356.911"/>
					<text class="text-8" transform="matrix(1 0 0 1 990.3208 334.2148)" fill="#B88F54"  font-size="18"><?php _e("8th Floor","flushing");?></text>
					<line class="text-8" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="339.092" x2="987.999" y2="327.167"/>
					<text class="text-9" transform="matrix(1 0 0 1 990.3208 305.1426)" fill="#B88F54"  font-size="18"><?php _e("9th Floor","flushing");?></text>
					<line class="text-9" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="310.02" x2="987.999" y2="298.094"/>
					<text class="text-10" transform="matrix(1 0 0 1 990.3208 275.4414)" fill="#B88F54"  font-size="18"><?php _e("10th Floor","flushing");?></text>
					<line class="text-10" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="280.32" x2="987.999" y2="268.394"/>
					<text class="text-11" transform="matrix(1 0 0 1 990.3208 245.4473)" fill="#B88F54"  font-size="18"><?php _e("11th Floor","flushing");?></text>
					<line class="text-11" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="250.325" x2="987.999" y2="238.399"/>
					<text class="text-12" transform="matrix(1 0 0 1 990.3208 215.4531)" fill="#B88F54"  font-size="18"><?php _e("12th Floor","flushing");?></text>
					<line class="text-12" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="220.332" x2="987.999" y2="208.406"/>
					<text class="text-13" transform="matrix(1 0 0 1 990.3208 186.6797)" fill="#B88F54"  font-size="18"><?php _e("13th Floor","flushing");?></text>
					<line class="text-13" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="191.558" x2="987.999" y2="179.632"/>
					<text class="text-14" transform="matrix(1 0 0 1 990.3208 155.6797)" fill="#B88F54"  font-size="18"><?php _e("14th Floor","flushing");?></text>
					<line class="text-14" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="160.558" x2="987.999" y2="148.632"/>
					<text class="text-15" transform="matrix(1 0 0 1 990.3208 122.7065)" fill="#B88F54"  font-size="18"><?php _e("15th Floor","flushing");?></text>
					<line class="text-15" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="127.585" x2="987.999" y2="115.659"/>
					<text class="text-16" transform="matrix(1 0 0 1 990.3208 89.6235)" fill="#B88F54"  font-size="18"><?php _e("16th Floor","flushing");?></text>
					<line class="text-16" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="94.502" x2="987.999" y2="82.576"/>
					<text class="text-17" transform="matrix(1 0 0 1 990.3208 46.6235)" fill="#B88F54"  font-size="18"><?php _e("17th Floor","flushing");?></text>
					<line class="text-17" fill="none" stroke="#B88F54" stroke-miterlimit="10" x1="960.667" y1="51.502" x2="987.999" y2="39.576"/>
				</svg>
				<img class="building" src="<?php echo DIR; ?>/img/availability/building.png" alt="" />
			</figure>
		</div>
		<div class="content-right">
			<div class="select-floor show-for-medium arrow-vector">
				<a href="#" class="close-floor-tablet"><?php _e("Select by Floor","flushing");?></a><span></span>
			</div>
			<div class="over-gris title-floor">
				<div id="title-residences" class="title-building"></div>
				<a class="show-for-medium arrow-vector see-all" href="#"><span></span><?php _e("Back","flushing");?></a>
				<a class="show-for-large-up arrow-vector see-all" href="#"><span></span><?php _e("See all","flushing");?></a>
				<a class="arrow-vector btnBack" href="#"><span></span><?php _e("Back","flushing");?></a>
			</div>
			<div class="line-gold"></div>
			<div class="view-floorplan">
				<div class="floorplan">
					<img src="" alt="" class="error" />
				</div>
				<div class="foo-floorplan">
					<img src="<?php echo DIR; ?>/img/availability/img-foo-floorplan.png" alt="" />
				</div>
			</div>
			<div class="not-result"></div>
			<ul class="list-floorplan list-floorplan-res"></ul>
			<div class="overlay"></div>
		</div>
	</div>
	<!-- END CONTENT CONTENT INFO RESIDENCES-->
</div>
	<!-- END HEADER-->

	<!-- ///// START MOBILE HOME AVAILABILITY ////// -->
	<div class="show-for-small">
		<div class="availability-home-mobile">
			<div class="title-sm">
				<h1>
					<?php _e("Explore The Largest Project Going On In Flushing, New York","flushing");?>
				</h1>
			</div>
			<div class="img-cover">
				<div class="nav">
					<div class="align">
						<a href="#" id="btn-residences" class="btn-residences button"><?php _e("Residences","flushing");?></a>
						<a href="#" id="btn-offices" class="btn-offices button"><?php _e("Offices","flushing");?></a>
					</div>
				</div>
			</div>
			<div class="content-search">
				<a href="#" class="search-again"><span>&#215;</span><?php _e("Search Again","flushing");?></a>
			</div>
		</div>
		<!-- ////// START LIST SELECT FLOORPLAN RESIDENCES MOBILE//////// -->
		<div id="list-residences-mobile" class="list-residences-mobile">
			<div class="title-sm">
				<h1>
					<?php _e("Choose Floor","flushing");?>
				</h1>
			</div>
			<div class="wrapper">
				<div class="bg-img bg-arrow-up"></div>
				<div class="wll-wrapper">
					<ul class="floor-button-residences">
						<li><a href="#" class="floor f4" data-building="4"><?php _e("Floor 4","flushing");?></a></li>
						<li><a href="#" class="floor f5" data-building="5"><?php _e("Floor 5","flushing");?></a></li>
						<li><a href="#" class="floor f6" data-building="6"><?php _e("Floor 6","flushing");?></a></li>
						<li><a href="#" class="floor f7" data-building="7"><?php _e("Floor 7","flushing");?></a></li>
						<li><a href="#" class="floor f8" data-building="8"><?php _e("Floor 8","flushing");?></a></li>
						<li><a href="#" class="floor f9" data-building="9"><?php _e("Floor 9","flushing");?></a></li>
						<li><a href="#" class="floor f10" data-building="10"><?php _e("Floor 10","flushing");?></a></li>
						<li><a href="#" class="floor f11" data-building="11"><?php _e("Floor 11","flushing");?></a></li>
						<li><a href="#" class="floor f12" data-building="12"><?php _e("Floor 12","flushing");?></a></li>
						<li><a href="#" class="floor f13" data-building="13"><?php _e("Floor 13","flushing");?></a></li>
						<li><a href="#" class="floor f14" data-building="14"><?php _e("Floor 14","flushing");?></a></li>
					</ul>
				</div>
				<div class="bg-img bg-arrow-down"></div>
			</div>
		</div>
		<!-- ////// END LIST SELECT FLOORPLAN RESIDENCES MOBILE//////// -->

		<!-- ////// START LIST FLOORPLAN RESIDENCES MOBILE//////// -->
		<div class="floorplans-residences-mobile">
			<div class="title-sm">
				<h1>
					<?php _e("Choose Unit","flushing");?>
				</h1>
			</div>
			<ul class="list-floorplan list-floorplan-res"></ul>
		</div>
		<!-- ////// END LIST FLOORPLAN RESIDENCES MOBILE//////// -->

		<!-- ////// START VIEW FLOORPLAN RESIDENCES MOBILE//////// -->
		<div class="view-floorplan">
			<div class="title-sm">
				<div class="align">
					<div id="title-residences" class="title-building"></div>
					<a href="" class="download-mobile"><?php _e("Download Floorplan","flushing");?></a>
				</div>
			</div>
			<div class="floorplan">
				<img src="" alt="" class="error" />
			</div>
		</div>
		<!-- ////// END VIEW FLOORPLAN RESIDENCES MOBILE//////// -->

		<!-- ////// START LIST SELECT FLOORPLAN OFFICES MOBILE//////// -->
		<div id="list-offices-mobile" class="list-offices-mobile">
			<div class="title-sm">
				<h1>
					<?php _e("Choose Floor","flushing");?>
				</h1>
			</div>
			<div class="wrapper">
				<div class="bg-img bg-arrow-up"></div>
				<div class="wll-wrapper">
					<ul class="floor-button-offices">
						<li><a href="#" class="floor f2" data-building="2"><?php _e("Floor 2","flushing");?></a></li>
						<li><a href="#" class="floor f3" data-building="3"><?php _e("Floor 3","flushing");?></a></li>
						<li><a href="#" class="floor f4" data-building="4"><?php _e("Floor 4","flushing");?></a></li>
						<li><a href="#" class="floor f5" data-building="5"><?php _e("Floor 5","flushing");?></a></li>
						<li><a href="#" class="floor f6" data-building="6"><?php _e("Floor 6","flushing");?></a></li>
						<li><a href="#" class="floor f7" data-building="7"><?php _e("Floor 7","flushing");?></a></li>
						<li><a href="#" class="floor f8" data-building="8"><?php _e("Floor 8","flushing");?></a></li>
						<li><a href="#" class="floor f9" data-building="9"><?php _e("Floor 9","flushing");?></a></li>
						<li><a href="#" class="floor f10" data-building="10"><?php _e("Floor 10","flushing");?></a></li>
						<li><a href="#" class="floor f11" data-building="11"><?php _e("Floor 11","flushing");?></a></li>
					</ul>
				</div>
				<div class="bg-img bg-arrow-down"></div>
			</div>
		</div>
		<!-- ////// END LIST SELECT FLOORPLAN OFFICES MOBILE//////// -->

		<!-- ////// START LIST FLOORPLAN OFFICES MOBILE//////// -->
		<div class="floorplans-offices-mobile">
			<div class="title-sm">
				<h1>
					<?php _e("Choose Unit","flushing");?>
				</h1>
			</div>
			<div class="not-result"></div>
			<ul class="list-floorplan list-floorplan-off"></ul>
		</div>
		<!-- ////// END LIST FLOORPLAN OFFICES MOBILE//////// -->

		<!-- ////// START VIEW FLOORPLAN OFFICES MOBILE//////// -->
		<div class="view-floorplan">
			<div class="title-sm">
				<div class="align">
					<div id="title-offices" class="title-building"></div>
					<a href="#" class="download-mobile"><?php _e("Download Floorplan","flushing");?></a>
				</div>
			</div>
			<div class="floorplan">
				<img src="" alt="" class="error" />
			</div>
		</div>
		<!-- ////// END VIEW FLOORPLAN OFFICES MOBILE//////// -->

	</div>
	<!-- ///// END MOBILE ////// -->
</main>
<?php get_footer(); ?>
