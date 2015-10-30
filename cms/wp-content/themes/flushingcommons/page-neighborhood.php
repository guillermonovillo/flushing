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
 * template Name: Neighborhood
 */
global $seccion;
$seccion="neighborhood";
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
$actualid=get_the_id();
endwhile;
else:
endif; ?> ?>
    <body class="Neighborhood">
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <div class="bg-nav large-12 medium-12 small-12">
                <?php get_template_part("/inc/nav","header" ); ?>

            <section class="main-section">


<main id="top" role="main" class="neighborhood">
	<div class="bg-neighborhood"></div>
	<div class="row content-copy-one">
		<div class="large-11 medium-12 small-12 column content-left">
			<p class="title wow slideInRight" data-wow-duration=".6s" data-wow-delay="0s" data-wow-offset="100"><?php the_field("top_text"); ?></p>
			<h1 class="title-40 wow slideInRight" data-wow-duration=".6s" data-wow-delay=".2s" data-wow-offset="100"><?php the_field("title_line_1"); ?><br><?php the_field("title_line_2"); ?></h1>
			<p class="wow slideInRight" data-wow-duration=".6s" data-wow-delay=".4s" data-wow-offset="100"><?php the_field("text");?></p>
		</div>
		<div class="large-1 medium-1 small-1 column content-right">
			<div class="box-green"></div>
		</div>
		<div class="mapData hide">
			<ul>
				<?php
					$arg_map=array(
            			"nopaging"=>"true", 
            			"post_type"=>"point" 
          			);

          			$map_point = new WP_Query($arg_map);
          			$map_count=1;
				?>
				<?php if ( $map_point->have_posts() ) : while ( $map_point->have_posts() ) : $map_point->the_post(); 
					$puntos=get_field("map_point");
				?>
					<li><a href="#" data-iteration="<?php echo $map_count; ?>" data-coords="<?php echo $puntos["lat"].",".$puntos["lng"]; ?>" data-address="<?php the_field("name"); ?>, <?php the_field("address"); ?>" ></a></li>
				<?php 
					$map_count++;
					endwhile; 
				?>
				<?php else: ?>
				<?php endif; ?>
				
	      <!--<li><a href="#" data-iteration="2" data-coords="40.76086,-73.827106" data-address="Tus les jours, address example"></a></li>
	      <li><a href="#" data-iteration="3" data-coords="40.759416,-73.831997" data-address="Spicy &Tasty, address example"></a></li>
	      <li><a href="#" data-iteration="4" data-coords="40.758463,-73.829039" data-address="Kung fu Tea, address example"></a></li>
	      <li><a href="#" data-iteration="5" data-coords="40.761927,-73.830336" data-address="Joe’s Shangai, address example"></a></li>
	      <li><a href="#" data-iteration="6" data-coords="40.757804,-73.829638" data-address="Biang!, address example"></a></li>
	      <li><a href="#" data-iteration="7" data-coords="40.759394,-73.831888" data-address="Sentosa, address example"></a></li>
				<li><a href="#" data-iteration="2" data-coords="40.76109,-73.83062" data-address="Tai Pan Bakery, address example"></a></li>
	      <li><a href="#" data-iteration="3" data-coords="40.75985,-73.832662" data-address="Nan Xiang, address example"></a></li>
	      <li><a href="#" data-iteration="4" data-coords="40.762226,-73.829007" data-address="Little Sheep Mongolian Hot Pot, address example"></a></li>
	      <li><a href="#" data-iteration="5" data-coords="40.761138,-73.830131" data-address="Minni’s Shabu Shabu, address example"></a></li>
	      <li><a href="#" data-iteration="6" data-coords="40.761171,-73.830347" data-address="Zebra Lounge, address example"></a></li>
	      <li><a href="#" data-iteration="7" data-coords="40.757122,-73.829354" data-address="Xian Famous Food, address example"></a></li>-->
			</ul>
		</div>
		<div class="content-map">
			<div class="map-neighbor" id="map-canvas-neighbor"></div>
		</div>
	</div>
	<div class="content-foo text-center">
		<div class="content-title">
			<h1 class="title-40"><?php echo get_field("transportation_title", $actualid); ?></h1>
			<p class=""><?php echo get_field("transportation_text",$actualid); ?></p>
		</div>
		<div class="hover-transportation">
			<?php
					$boxes=get_field("transport_box", $actualid);
					$count=1;
					if(is_array($boxes)){
						foreach ($boxes as $box) {
							if(is_array($box["transport_image"])){
								$image="style='background-image: url(".$box["transport_image"]["sizes"]["transport-box"].");'";
							}else{
								$image="";
							}
							?>
						<figure class="hover-neighbor-<?php echo $count; ?>" <?php echo $image; ?>><span><?php echo $box["transport_title"]; ?><br><i><?php echo $box["transport_text"]; ?></i></span></figure>					
							<?php
							$count++;
						}
					}
			?>
		</div>
	</div>
</main>




<?php get_footer(); ?>
