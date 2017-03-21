<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package galira_1.0
 */

get_header(); ?>

	<div id="primary" class="content-area isi-konten col-md-7 col-md-offset-1">
		<main id="main" class="site-main" role="main">
		
		<!--Breadcrumb by yoast seo-->
		<p></p>
		<strong>Anda berada di </strong><i class="fa fa-share"><?php if ( function_exists('yoast_breadcrumb') ) 
		{yoast_breadcrumb('<id="breadcrumbs">','');} ?> </i>
		<!--Akhir Breadcrumb-->



		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
