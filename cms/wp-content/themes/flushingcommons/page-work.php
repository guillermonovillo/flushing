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
 * template Name: Work
 */
global $seccion;
$seccion="work";
get_header(); ?>

    <body class="Work">
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <div class="bg-nav large-12 medium-12 small-12">
              <?php get_template_part("inc/nav","header"); ?>

            <section class="main-section">

                
<main id="top" role="main" class="work">
	<div class="bg-work"></div>
	<div class="row content-copy-one">
		<div class="large-11 medium-12 small-12 column content-left">
			<p class="title wow slideInRight" data-wow-duration=".6s" data-wow-delay="0s" data-wow-offset="100"><?php _e("OFFICES","flushing");?></p>
			<h1 class="title-40 wow slideInRight" data-wow-duration=".6s" data-wow-delay=".2s" data-wow-offset="100"><?php _e("Class A Office in the Heart of Flushing","flushing");?></h1>
			<p class="wow slideInRight" data-wow-duration=".6s" data-wow-delay=".4s" data-wow-offset="100"><?php _e("F&T Group, The Rockefeller Group, and AECOM Capital are proud to introduce the first glass curtain office tower in downtown Flushing. The modern and stylish design has been tailored to address the needs of discerning investors looking to have their business or medical practice in a Class A office space.","flushing");?></p>
		</div>
		<div class="large-1 medium-1 small-1 column content-right">
			<div class="box-green"></div>		
		</div>
		<div class="row slider">
			<div class="slide-1"></div>
			<div class="slide-2"></div>
			<div class="slide-3"></div>
		</div>
		<div class="content-building">
			<div class="content-left large-3 medium-3 column">
				<figure class="building"></figure>
			</div>
			<div class="content-right large-9 medium-9 small-12 column">
				<h2 class="title-40 wow slideInLeft" data-wow-duration=".6s" data-wow-delay="0s" data-wow-offset="150"><?php _e("Own a Piece of This Iconic Building in the Center of Flushing’s Thriving Business District","flushing");?></h2>
				<p class="wow slideInLeft" data-wow-duration=".6s" data-wow-delay=".2s" data-wow-offset="150"><?php _e("With office condominium units from 1,200 to over 4,000 gross sq.ft. and ample parking for more than 1,600 vehicles, Flushing Commons is the most preeminent corporate address for Flushing’s highly active business and medical community. Conceived by award-winning architects Perkins Eastman and built by Tishman Construction, the Offices at Flushing Commons has been thoughtfully designed to meet the needs of the most discerning medical professional, business owner and investor.","flushing");?></p>
				
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
