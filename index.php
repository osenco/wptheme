<?php
/**
 * @package WPTHEME
 * @subpackage Header Template
 * @author Osen Concepts < hi@osen.co.ke >
 * @since 0.1.0
 */
?>

<?php get_header(); ?>
<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <h3>By <?php the_author(); ?> on <?php the_date(); ?></h3>
  <article><?php the_content(); ?></article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>