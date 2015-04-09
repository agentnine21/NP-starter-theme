<?php
/**
 * Template Name: Squeeze Page
 *
 * This is a full width page template (no sidebar).
 *
 * @package A921_Starter_Theme
 */

get_header(); ?>

<section id="primary" class="squeeze-page" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>
                <div>
                	<a href="<?php the_field( 'button_url' ); ?>" class="button">
                    		<?php the_field( 'button_text' ); ?>
                	</a>
                </div>
                <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'a921-starter-theme' ) . '</span>', 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_footer(); ?>