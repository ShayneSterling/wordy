<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<?php if ( is_home() && ! is_front_page() ) : ?>
	<header class="page-header">
		<div class="wrap">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</div>
	</header>
<?php else : ?>
	<header class="page-header">
		
	</header>
<?php endif; ?>

<div id="prmary" class="cotent-area">
	<main id="main" class="site-main" role="main">
		<div class="main1">
			<div class="wrap">
				<h1>This is a test</h1>
			</div><!-- .wrap -->
		</div>
	</main><!-- #main -->
	<main id="main" class="site-main" role="main">
		<div class="main2">
			<div class="wrap">
				<p><?php
    // query for the about page
				$your_query = new WP_Query( 'pagename=services' );
    // "loop" through query (even though it's just one page) 
				while ( $your_query->have_posts() ) : $your_query->the_post(); the_title( '<h1 class="entry-title">', '</h1>' );
				the_content();
				endwhile;
    // reset post data (important!)
				wp_reset_postdata();
				?></p>
			</div><!-- .wrap -->
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
