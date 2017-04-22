<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Northridge_Review
 */

get_header(); ?>
 <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main ps-3" role="main">

		<header class="page-header">
				<h1 class="page-title"><?php echo $term->name; ?> Archives</h1>
			</header><!-- .page-header -->

		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>


			<div class="post-preview grayscale">
				<?php 
					echo '<a href="'.get_permalink().'" class="thumb">';
					echo the_post_thumbnail();
					echo '</a>';
				 ?>
				<div class="content-preview">
					<h2><?php the_title(); ?></h2>
					<p class="work">
						<?php if (get_the_excerpt()){ echo get_the_excerpt();} ?>
					</p>
					<a href="'.get_permalink().'">Read more</a>
				</div>
			</div>

			<hr>

        <?php endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
