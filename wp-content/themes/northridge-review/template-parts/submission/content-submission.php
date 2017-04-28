<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Northridge_Review
 * @since 1.0
 * @version 1.0
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('card mb-4'); ?>>

  <header>
    <?php if ( '' !== get_the_post_thumbnail() ) : ?>
      <div class="">
        <?php get_the_post_thumbnail(); ?>
      </div>
    <?php endif; ?>
  </header>

  <div class="">
    <?php the_title( '<h1 class="">', '</h1>' ); ?>
    <div><?php get_the_post_thumbnail(); ?></div>
    <h2 class=""><?php the_author(); ?> on <?php the_time('F jS, Y') ?></h2>

    <?php
      the_content( sprintf(
        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'northridge-review' ),
        get_the_title()
      ) );

      wp_link_pages( array(
        'before'      => '<div class="page-links">' . __( 'Pages:', 'northridge-review' ),
        'after'       => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after'  => '</span>',
      ) );
    ?>
  </div>

</article>

