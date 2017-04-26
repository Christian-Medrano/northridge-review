<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Northridge_Review
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			$args = array( 'post_type' => 'fourohfive_project', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<div class="post-preview grayscale">';
				
				echo '<a href="'.get_permalink().'" class="thumb" style="background-image: url(\''.get_the_post_thumbnail_url().'\');"></a>';
				
				echo '<div class="content-preview">';
				echo '<h2>'.get_the_title().'</h2>';
				echo '<p class="work">';
				if (get_the_excerpt()){
					echo get_the_excerpt();
				}
				echo '</p>';
				echo '<a href="'.get_permalink().'">Read more</a>';
			  	echo '</div>';
				echo '</div>';
				
			endwhile;

			wp_reset_query();


			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
