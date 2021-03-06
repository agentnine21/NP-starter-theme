<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package A921_Starter_Theme
 */

get_header(); ?>

<section id="primary" role="main">

    <?php if ( have_posts() ) : ?>

        <header class="archive-header">
            <h1 class="archive-title">
                <?php printf( __( 'Search Results for: %s', 'a921-starter-theme' ), '<span>' . get_search_query() . '</span>' ); ?>
            </h1>
        </header>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php
                get_template_part( 'content');
            ?>

        <?php endwhile; ?>

        <?php get_template_part( 'inc/pagination' ); ?>

    <?php else : ?>

        <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>