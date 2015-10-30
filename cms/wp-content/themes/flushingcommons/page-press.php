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
 * template Name: Press
 */
global $seccion;
$seccion="press";
$actualpage=$wp_query->query["paged"];
if ($actualpage=="") {
	$actualpage=1;
}
get_header(); ?>
    <body class="Press">
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <div class="bg-nav large-12 medium-12 small-12">
               <?php get_template_part("inc/nav","header" ); ?>

            <section class="main-section">


<main id="top" role="main" class="press">
	<div class="pattern"></div>
	<div class="row">
		<h1 class="title-40">Press</h1>
		<?php
			$args_articulos=array(
            "posts_per_page"=>3, 
            "post_type"=>"post",
            "paged" => $actualpage,
            "orderby" => "date",
          );
			$noticias=new WP_Query($args_articulos);
			$maxpages=$noticias->max_num_pages;
			$cuenta=1;
		?>
		<?php if ( $noticias->have_posts() ) : while ( $noticias->have_posts() ) : $noticias->the_post(); ?>
		<div class="notice<?php if($cuenta==2){echo " middle-notice";} ?>">
			<figure class="column large-4 medium-12 small-12">
				<?php the_post_thumbnail("news-thumb"); ?>
			</figure>
			<div class="column large-pull-1 large-7 medium-12 small-12 header-notice">
				<h2><?php echo get_the_date("F d, Y"); ?></h2>
				<h1 class="column large-12 medium-10 small-12"><?php the_title(); ?></h1>
				<p class="column large-12 medium-12 small-12">
				<?php the_excerpt(); ?>
				</p>
				<a href="<?php the_permalink(); ?>" class="button"><?php _e("VIEW MORE","flushing");?><span></span></a>
			</div>
		</div>
		<?php 
			$cuenta++;
			endwhile; 
		?>
		<?php else: ?>
		<?php endif; ?>
	
		</div>
	<div class="paginator">
<?php if($maxpages > 1){ ?>
		<ul>
			<?php
						global $press;
						$base=$press."page/";
						if ($maxpages < 5) {
							$inicia=1;
							$final=$maxpages+1;
						}elseif ($maxpages > 5 && $actualpage < 5) {
							$inicia=1;
							$final=6;
						}elseif ($maxpages > 5 && $actualpage > 5) {
							$inicia=$actualpage-2;
							$final=$actualpage+3;
						}

						for ($i=$inicia; $i < $final ; $i++) { 
						?>

						<li><a href="<?php echo $base.$i ?>" <?php if($i==$actualpage){?>class="active"<?php } ?>><?php echo $i; ?></a> <?php if($i!=$final-1){echo "-";}?></li>

						<?php
					}

				?>
		</ul>
<?php } ?>
	</div>
</main>

<?php get_footer(); ?>
