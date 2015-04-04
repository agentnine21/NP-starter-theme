<?php
/**
 * The Blog Posts Index Page template
 *
 * This is the template that displays all pages by default.
 *
 * @package A921_Starter_Theme
 */

get_header(); ?>

<section id="primary" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		    <header class="entry-header">
		        <h1 class="entry-title">
		            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		        </h1>
		        <span class="entry-date"><?php echo get_the_date(); ?></span>
		    </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'a921-starter-theme' ) . '</span>', 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>