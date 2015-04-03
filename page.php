<?php
/**
 * The Page template
 *
 * This is the template that displays all pages by default.
 *
 * @package A921_Starter_Theme
 */

get_header(); ?>

<section id="primary" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content' ); ?>

    <?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>