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
 * template Name: Home
 */
global $seccion;
$seccion="home";
get_header(); ?>

<body class="Home">
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <div class="bg-nav large-12 medium-12 small-12">
            	<?php get_template_part("inc/nav","header"); ?>
            	<?php 
            		global $neighborhood; 
            		global $live;
            		global $work;
            	?>
            <section class="main-section">

                
<main id="top" role="main" class="home">
	<section class="bg-home">
		<div class="title-home">
			<div class="row">
				<h1 class="title-40"><?php _e("A Crowning Achievement","flushing");?></h1>
				<p><?php _e("Flushing Commons is a crowning achievement. F&T Group, The Rockefeller Group, and AECOM Capital are proud to introduce a new standard of luxury at the most distinguished address in Flushing.","flushing");?></p>
				<a href="#project-home" class="button smooth"><?php _e("About The Project","flushing");?><span></span></a>
			</div>
		</div>
	</section>
	<div class="arrow-down-home">
		<a href="#down" class="smooth"></a>
	</div>
	<article id="down" class="content-home">
		<div class="row">
			<div class="content-copy-one">
				<div class="medium-9 small-10 column content-left">
					<h2 class="title-50 wow slideInRight" data-wow-duration=".6s" data-wow-delay="0s"><?php _e("The Most<br />Distinguished Address<br />in Flushing","flushing");?></h2>
					<p class="wow slideInRight" data-wow-duration=".6s" data-wow-delay=".2s"><?php _e("Flushing Commons is a community on the rise, one that will only grow in importance and prestige over time.","flushing");?></p>
				</div>
				<div class="medium-3 small-2 column content-right">
					<ul class="wow slideInRight" data-wow-duration=".6s" data-wow-delay=".4s">
						<li>絕</li>
						<li>佳</li>
						<li>位</li>
						<li>置</li>
					</ul>
					<div class="box-green"></div>
				</div>
			</div>
		</div>
		<div class="content-copy-two">
			<div class="live over-livework">
				<div class="over-live over hide-for-small-only">
					<h4><?php _e("Live At <br>Flushing Commons <br>Residences","flushing");?>
					</h4>
					<p><?php _e("Residences at Flushing Commons were built to higher standards of quality and furnished with premium finishes hand-picked by award-winning architectural and interior firm Perkins Eastman.","flushing");?>
						
					</p>
				</div>
				<figure onclick="window.open('<?php echo $live; ?>', '_self')">
					<h3><?php _e("Live","flushing");?></h3>
					<a href="<?php echo $live; ?>" class="hide-for-small-only"><?php _e("Explore","flushing");?></a>
				</figure>
			</div>
			<div class="work over-livework">
				<div class="over-work over hide-for-small-only">
					<h4><?php _e("Work At <br>Flushing Commons <br>Offices","flushing");?>
					</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed urna sed nisi tincidunt elementum. Vivamus et aliquam mi. Suspendisse dictum imperdiet risus. Nulla tincidunt tellus vitae nisl porta, malesuada interdum metus commodo.
					</p>
				</div>
				<figure onclick="window.open('<?php echo $work; ?>', '_self')">
					<h3><?php _e("Work","flushing");?></h3>
					<a href="<?php echo $work; ?>" class="hide-for-small-only"><?php _e("Explore","flushing");?></a>
				</figure>
			</div>
		</div>
		<aside id="project-home">
			<div class="project-home">
				<div class="content-copy-tri row">
					<h5 class="title-50 large-12 medium-12 small-12"><?php _e("The Project","flushing");?></h5>
					<p><?php _e("It is a manifestation of a vision conceived by three partners at the top of their respective fields. 1.8-million-square-foot, mixed-use development designed by Perkins Eastman is being built by Tishman Construction and will facilitate economic advancement and community growth. Flushing Commons features an open-air public plaza with outdoor cafés, restaurants and shops – a central gathering place perfect for families and friends to meet and enjoy community events and performances.","flushing");?></p>
					<a href="#" class="button view-features"><?php _e("View Project Features","flushing");?><span></span></a>
				</div>
			</div>
			<div class="project-features">
				<div class="row">
					<div class="medium-9 column">
						<a class="close-features" href="#"><?php _e("Close","flushing");?> <span>&#215;</span></a>
						<p class="title-project-features"><?php _e("PROJECT FEATURES","flushing");?></p>
						<div class="content-scroll-project">
							<p><i>1.5 </i> <?php _e("Acre open-air public plaza with outdoor café, restaurants and shops—a central gathering place, perfect for families and friends to meet and enjoy community events and performances","flushing");?></p> <br>
							<p><i>1,600 </i> <?php _e("Parking spaces for residents and visitors complete with valet service","flushing");?></p><br>
							<p><i>25- </i> <?php _e("Year ICAP tax abatement program for commercial space","flushing");?></p><br>
							<p><i>62,000 </i> <?php _e("Proposed square foot YMCA featuring a state-of-the art indoor swimming pool, basketball courts, fitness centers, running track and daycare","flushing");?></p><br>
							<p><i>148 </i> <?php _e("Premium one, two, three and four bedroom residences in Phase One, followed by 450 units proposed for Phase Two","flushing");?></p><br>
							<p><i>164,000 </i> <?php _e("Square feet of prime medical and professional office condominiums for sale","flushing");?></p><br>
							<p><i>421-A </i> <?php _e("15-year tax abatement program for residences","flushing");?></p><br>
							<p><i>53,000 </i> <?php _e("Square feet of prime retail opportunities","flushing");?></p><br>
						</div>
					</div>
					<div class="medium-3 column content-pattern pattern hide-for-small-only"></div>
				</div>
			</div>
		</aside>
	</article>
	<figure class="building-home">
		<div data-box-info="1" class="box-info-1 box-info">
			<span>
				<h2>450</h2>
				<i></i>
				<p><?php _e("Units proposed for Phase Two.","flushing");?></p>
			</span>
		</div>
		<div data-box-info="2" class="box-info-2 box-info">
			<span>
				<h2>1.5</h2>
				<i></i>
				<p><?php _e("Acre open-air public plaza with outdoor café, restaurants and shops—a central gathering place, perfect for families and friends to meet and enjoy community events and performances.","flushing");?></p>
			</span>
		</div>
		<div data-box-info="3" class="box-info-3 box-info">
			<span>
				<h2>148</h2>
				<i></i>
				<p><?php _e("Premium one, two, three and four bedroom residences in Phase One, followed by 450 units proposed for Phase Two.","flushing");?></p>
			</span>
		</div>
		<div data-box-info="4" class="box-info-4 box-info">
			<span>
				<h2>53,000</h2>
				<i></i>
				<p><?php _e("Square feet of prime retail opportunities.","flushing");?></p>
			</span>
		</div>
		<div data-box-info="5" class="box-info-5 box-info">
			<span>
				<h2>164,000</h2>
				<i></i>
				<p><?php _e("Square feet of Hightly Flexible Office Space.","flushing");?></p>
			</span>
		</div>
		<div class="content-shadow-building">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="1440px" height="863px" viewBox="0 0 1440 863" enable-background="new 0 0 1440 863" xml:space="preserve">
				<path d="M578.667,0l39.667,14.333l-3,3L634.667,25l6.667-2.333L707,47l1.333,7l116,45v43l8,6l-6,170.333l8.334,4.667
					L833,392l-44.667,34.667L787.75,380l-17.5-6.25L769.5,362l-59.75-12.334l-16.25,5.584l-67-27L606,341.5L569.25,321L552,330
					l-77.25,51.5L482,593l-48,58.333l-23.667-6L405.627,648L377,637.666L359,649L113,507.333l-3.333-26.667L124,473.333L104.667,262
					l3-2.667l-3-15.667l77.667-41l6.333,2l39-21.333L230,186l61.667-32.667l-3.333-1.667l43-22.333l58-27.333l-1.667-2.667L415.333,86
					l34,14.667l8-4.333l43.333-18.667v-38l13.333-7V22l40.333-22H0v863h517L359,740v-2.002l-87-55.333l-14.667,8L64,576.665v-70
					l5.294,3.177l30.04-22.51l12,25.333L359,653.332l18.333-12l28.293,9.366L359,684.665V688l50-40l26,7l49-60l-8-211c0,0,77-56,93-61
					l37,21l20-14l67,27l16-6l59,13v11l18,6v50.5l52-38.5l31,10L700,722l-14,18c0,0,16,37,13,50l4.333,73l-0.833-86l103-246l26,4.5
					l10.5-64l39,4.5l89,20l49.5,24.25l0.5,13.25l2.25,1.75l54.418,21.416v93.33l3.334-74.666l39.333,17.67l277.333-256.337
					l-7.333,66.667l-275.333,262l-37.334-15.334v4.67L1111.334,670L910,863h530V0H578.667z M1119.333,586.666l-40-15.333v-17.334
					L1022,532.666v-13.333l-52-26L980,328l8-10l6.667-70l50.666-37.333l21.334,6l9.333-6v-12l31.333-26H1120l16.667-8.667v-10l34-26
					l11.333,4l25.333-19.333L1260,130l-6.667,8l48,18.667v12l12,3.333L1288,392.666L1305.333,380L1332,392L1119.333,586.666z
					 M1396.668,331l-62.335,58.667L1305.667,377l-15.334,11.333L1315.5,170.75l-12-4.25v-10.75L1256.25,137l6.25-7.75L1206.75,110
					l-24,19l-13-3.5l-36,27.75l0.25,9l-14,8h-12.75l-9.5,7L1103,97.5l27.5-16.5V63.5l24-17L1192,27l138.333,45.667l1.667,7.667
					L1400.333,104l-3.665,40l22.665,5.333L1396.668,331z"/>
				<path data-box-shadow="2" class="building-shadow" d="M686,740l14-18l169-319l-31-10l-52,38.5V381l-18-6v-11l-59-13l-16,6l-67-27l-20,14l-37-21c-16,5-93,61-93,61
					l8,211l-49,60l-26-7l-50,40v49.998V740l158,123h186.333L699,790C702,777,686,740,686,740z"/>
				<polygon data-box-shadow="3" class="building-shadow" points="1288,392.666 1313.333,172 1301.333,168.666 1301.333,156.666 1253.333,138 1260,130
					1207.333,112.666 1182,132 1170.667,128 1136.667,154 1136.667,164 1120,172.666 1107.333,172.666 1076,198.666 1076,210.666
					1066.667,216.666 1045.333,210.666 994.667,248 988,318 980,328 970,493.333 1022,519.333 1022,532.666 1079.333,553.999
					1079.333,571.333 1119.333,586.666 1332,392 1305.333,380 "/>
				<polygon data-box-shadow="4" class="building-shadow" points="359,684.665 405.627,650.698 377.333,641.332 359,653.332 111.333,512.665 99.333,487.332
					69.294,509.842 64,506.665 64,576.665 257.333,690.665 272,682.665 359,737.998 359,688 "/>
				<polygon data-box-shadow="4" class="building-shadow" points="1389.335,403.33 1396.668,336.663 1119.335,593 1080.002,575.33 1076.668,649.996 1114.002,665.33
					"/>
				<polygon data-box-shadow="5" class="building-shadow" points="1076.668,654.666 1076.668,649.996 1076.668,556.666 1022.25,535.25 1020,533.5 1019.5,520.25
					970,496 881,476 842,471.5 831.5,535.5 805.5,531 702.5,777 703.333,863 878,863 910,863 1111.334,670 "/>
				<polygon data-box-shadow="5" class="building-shadow" points="1400.333,104 1332,80.333 1330.333,72.667 1192,27 1154.5,46.5 1130.5,63.5 1130.5,81 1103,97.5
					1097.75,177.25 1107.25,170.25 1120,170.25 1134,162.25 1133.75,153.25 1169.75,125.5 1182.75,129 1206.75,110 1262.5,129.25
					1256.25,137 1303.5,155.75 1303.5,166.5 1315.5,170.75 1290.333,388.333 1305.667,377 1334.333,389.667 1396.668,331
					1419.333,149.333 1396.668,144 "/>
				<polygon data-box-shadow="1" class="building-shadow" points="514,32.666 500.667,39.667 500.667,77.667 457.333,96.333 449.333,100.667 415.333,86
					387.667,99.333 389.333,102 331.333,129.333 288.333,151.666 291.667,153.333 230,186 227.667,183.333 188.667,204.666
					182.333,202.666 104.667,243.666 107.667,259.333 104.667,262 124,473.333 109.667,480.666 113,507.333 359,649 377,637.666
					405.627,648 410.333,645.333 434,651.333 482,593 474.75,381.5 552,330 569.25,321 606,341.5 626.5,328.25 693.5,355.25
					709.75,349.666 769.5,362 770.25,373.75 787.75,380 788.333,426.667 833,392 834.667,323 826.333,318.333 832.333,148 824.333,142
					824.333,99 708.333,54 707,47 641.333,22.667 634.667,25 615.333,17.333 618.333,14.333 578.667,0 554.333,0 514,22 "/>
			</svg>
		</div>
		<img id="img-building-home" class="img-building-home" name="buildinghome" src="<?php echo DIR; ?>/img/building-home.jpg" width="1440" height="863" border="0" id="buildinghome" usemap="#m_buildinghome" alt="" />
		<map name="m_buildinghome" class="m_buildinghome" id="m_buildinghome">
			<area class="building-area" data-box-area="2" shape="poly" coords="361,739,360,689,413,651,435,655,488,597,481,384,569,331,613,346,636,334,699,361,711,351,765,366,771,378,782,383,781,443,843,393,864,401,699,774,699,861,458,859,454,799,361,739" href="javascript:;" alt="" />
			<area class="building-area" data-box-area="3" shape="poly" coords="971,490,981,327,991,319,993,247,1046,210,1066,217,1076,209,1076,198,1110,173,1121,177,1138,165,1137,157,1171,129,1183,133,1207,115,1257,128,1253,137,1299,159,1301,169,1309,174,1291,391,1309,381,1329,390,1117,583,1083,571,1082,550,1030,527,1025,516,971,490" href="javascript:;" alt="" />
			<area class="building-area" data-box-area="5" shape="poly" coords="1292,390,1309,378,1333,389,1395,334,1399,327,1421,150,1399,144,1399,105,1331,80,1331,72,1195,25,1131,63,1127,83,1104,98,1099,178,1109,171,1121,174,1135,165,1135,155,1170,127,1183,131,1205,111,1263,127,1255,138,1301,156,1303,169,1312,171,1292,390" href="javascript:;" alt="" />
			<area class="building-area" data-box-area="1" shape="poly" coords="109,481,123,472,105,260,105,245,416,85,451,101,501,80,501,41,515,32,515,21,555,0,577,0,616,15,707,48,709,55,824,100,826,319,833,322,835,401,782,443,785,381,773,377,767,365,710,349,698,360,635,331,612,343,569,327,479,382,479,427,485,599,436,653,379,637,360,649,112,507,109,481" href="javascript:;" alt="" />
			<area class="building-area" data-box-area="5" shape="poly" coords="881,863,911,862,1109,672,1073,655,1080,553,1025,526,1023,517,965,491,946,488,893,457,871,474,843,472,831,534,805,531,703,775,705,862,881,863" href="javascript:;" alt="" />
			<area class="building-area" data-box-area="4" shape="poly" coords="1115,668,1075,649,1079,573,1117,587,1395,335,1389,404,1115,668" href="javascript:;" alt="" />
			<area class="building-area" data-box-area="4" shape="poly" coords="359,737,357,687,412,649,380,640,360,653,113,511,100,488,89,494,69,509,63,505,65,568,63,573,255,691,269,683,359,737" href="javascript:;" alt="" />
		</map>
	</figure>
	<div class="map-static">
		<div class="row">
			<div class="box-green box-green-map large-5 medium-6 column text-center">
				<div class="content-centered">
					<h6 class="title-40">
						<?php _e("In the Pulse of City Life","flushing");?>
					</h6>
					<p>
						<?php _e("Offering a wide variety of specialty shops, retail, entertainment, banks and transportation, Flushing Commons is ideally located in a diverse community cradled in the luxury of convenience, enabling Flushing to realize its full potential.","flushing");?>
					</p>
					<a href="<?php echo $neighborhood; ?>" class="button"><?php _e("View Neighbourhood","flushing");?><span></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="box-green-mob small-12 column text-center">
		<div class="content-centered">
			<h6 class="title-40">
				<?php _e("In the Pulse of City Life","flushing");?>
			</h6>
			<p>
				<?php _e("Offering a wide variety of specialty shops, retail, entertainment, banks and transportation, Flushing Commons is ideally located in a diverse community cradled in the luxury of convenience, enabling Flushing to realize its full potential.","flushing");?>
			</p>
		</div>
	</div>
</main>
<?php get_footer(); ?>
