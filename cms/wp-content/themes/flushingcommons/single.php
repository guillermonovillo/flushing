<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Exchange
 * @since Twenty Fifteen 1.0
 */
global $seccion;
$seccion="press";
get_header(); ?>
    <body class="Press-interna">
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <div class="bg-nav large-12 medium-12 small-12">
                <?php get_template_part("inc/nav","header"); ?>

            <section class="main-section">

<?php global $press; ?>
<main id="top" role="main" class="press-interna">
	<div class="pattern"></div>
	<div class="row">
		<h1 class="title-40">Press</h1>
		<div class="view-all over-gris">
			<a href="<?php echo $press; ?>" class="arrow-left-direction">View All</a>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<figure>
			<?php the_post_thumbnail("news-full"); ?>
		</figure>
		<div class="header-notice">
			<h2><?php echo get_the_date("F d, Y"); ?></h2>
			<h1 class="column large-6 medium-6 small-11"><?php the_title(); ?></h1>
		<p class="column large-pull-1 medium-pull-1 large-11 medium-11 small-12">
			<?php
				$content=get_the_content();
				//the_content();
				$content_clean=str_replace("<p>", "", $content);
				$parrafos=explode("\n", $content_clean);
				foreach ($parrafos as $text) {
					if(strlen($text)>10){
						echo $text;
						echo "<br /><br />";
					}
				}
			?>
		</p>
		</div>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
		<div class="view-all over-gris">
			<a href="<?php echo $press; ?>" class="arrow-left-direction"><?php _e("View All","flushing");?></a>
		</div>
	</div>
</main>

<?php get_footer(); ?>
