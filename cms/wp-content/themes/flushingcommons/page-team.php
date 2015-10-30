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
 * template Name: Team
 */
global $seccion;
$seccion="team";
get_header(); ?>
    <body class="Team">
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <div class="bg-nav large-12 medium-12 small-12">
                <?php get_template_part("inc/nav","header"); ?>

            <section class="main-section">


<main id="top" role="main" class="team">
	<div class="pattern"></div>
	<div class="row">
		<h1 class="title-40"><?php _e("The Team","flushing");?></h1>
		<figure>
			<span class="team-1"></span>
			<p>
				<?php the_field("f-t_text"); ?>
			</p>
			<a href="<?php the_field("f-t_url"); ?>" class="button"><?php _e("VISIT WEBSITE","flushing");?><span></span></a>
		</figure>
		<figure>
			<span class="team-2"></span>
			<p>
				<?php the_field("the_rockefeller_group_text"); ?>
			</p>
			<a href="<?php the_field("the_rockefeller_group_url"); ?>" target="_blank" class="button"><?php _e("VISIT WEBSITE","flushing");?><span></span></a>
		</figure>
		<figure>
			<span class="team-3"></span>
			<p>
				<?php the_field("aecom_text"); ?>
			</p>
			<a href="<?php the_field("aecom_url"); ?>" target="_blank" class="button"><?php _e("VISIT WEBSITE","flushing");?><span></span></a>
		</figure>
	</div>
</main>

<?php get_footer(); ?>
