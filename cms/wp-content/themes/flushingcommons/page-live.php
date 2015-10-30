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
 * template Name: Live
 */
global $seccion;
$seccion="live";
get_header(); ?>

<body class="Live">
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <div class="bg-nav large-12 medium-12 small-12">
                <?php get_template_part("inc/nav","header"); ?>
            <section class="main-section">

                
<main id="top" role="main" class="live">
	<div class="bg-live"></div>
	<div class="row content-copy-one">
		<div class="large-1 medium-1 small-1 column content-right">
			<div class="box-cake"></div>		
		</div>
		<div class="large-push-1 medium-push-1 small-push-1 large-11 medium-11 small-11 column content-left">
			<p class="title wow slideInLeft" data-wow-duration=".6s" data-wow-delay="0s"><?php _e("RESIDENCES","flushing");?></p>
			<h1 class="title-40 wow slideInLeft" data-wow-duration=".6s" data-wow-delay=".2s"><?php _e("Create Your Legacy","flushing");?></h1>
			<p class="wow slideInLeft" data-wow-duration=".6s" data-wow-delay=".4s"><?php _e("The home is fundamentally tied to family. It is a symbol of what you have accomplished and a monument to past endeavors. It is a place for nurturing and growth. Be a part of Flushing Commons and start new traditions which will live on for generations to come.","flushing");?></p>
			
		</div>
		<div class="row slider">
			<a href="#" data-reveal-id="kitchen" class="slide-1"><span><?php _e("Kitchen","flushing");?></span></a>
			<a href="#" data-reveal-id="living" class="slide-2"><span><?php _e("Living Room","flushing");?></span></a>
		</div>
		<div class="content-foo">
			<div class="large-push-1 large-5 medium-push-1 medium-5 small-11 small-push-1 column content-left">
				<h1 class="title-40 wow slideInLeft" data-wow-duration=".6s" data-wow-delay="0s"><?php _e("Experience Distinction","flushing");?></h1>
				<p class="wow slideInLeft" data-wow-duration=".6s" data-wow-delay=".2s"><?php _e("Residences at Flushing Commons were built to the highest standards of quality. Furnished with premium finishes hand-picked by award-winning architectural and interior design firm Perkins Eastman, every residence has been carefully planned to create a warm and luxurious living space.","flushing");?></p>
			</div>
			<div class="large-6 medium-6 small-12 column img-foo-live">
				<img src="<?php echo DIR; ?>/img/img-foo-live.jpg" alt="">
			</div>
		</div>
	</div>
	<div class="line-explore">
		<div class="row">
			<div class="large-push-1 large-5 medium-push-1 medium-5 small-12 small-push-0 column">
				<figure>
					<img src="<?php echo DIR; ?>/img/img-floor-live.png" alt="">
				</figure>
			</div>
			<div class="large-6 medium-6 column">
				<p class="copy-line-foo wow slideInLeft" data-wow-duration=".6s" data-wow-delay="0s" data-wow-offset="100"><?php _e("Premium one, two, three and four-bedroom 
		penthouse residences in phase one, followed by 450 units proposed for phase two.","flushing");?></p>	
<!--				<a href="availability.html" class="button">Explore Availabilities<span></span></a>-->
			</div>
		</div>
	</div>
</main>
<div id="kitchen" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
  <img src="<?php echo DIR; ?>/img/slide-live-1.jpg" alt="">
</div>
<div id="living" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
  <img src="<?php echo DIR; ?>/img/slide-live-2.jpg" alt="">
</div>

<?php get_footer(); ?>
