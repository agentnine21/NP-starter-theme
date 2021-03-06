<?php
/**
 * Main Template File
 * 
 * This file is used to display a page when nothing more specific matches a query.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package A921_Starter_Theme
 */

get_header(); ?>

<section id="primary" role="main">

    <?php if ( have_posts() ) : ?>
        <!-- there IS content for this query -->

        <?php // check if we're on an archive page
        if ( is_archive() ) :
            // if so, print the archive title before the loop begins
            get_template_part( 'inc/archive-header' );
        endif; ?>
        
        <?php if ( category_description() ) :
            echo '<div class="description">';
                echo category_description();
            echo '</div>';
        endif; ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <a href="<?php the_permalink(); ?>">
                    	<h1><?php the_title(); ?></h1>
                    </a>
                    
                </header><!-- .entry-header -->
                
				<a href="<?php the_permalink(); ?>">
				            <?php the_post_thumbnail( 'thumbnail' ); ?>
				</a>
				
                	<?php the_excerpt(); ?>

            </article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile; ?>

        <?php get_template_part( 'inc/pagination' ); ?>
        
    <?php else : ?>
    	<!-- there IS NOT content for this query -->
    	
    	<?php get_template_part( 'content', 'none' ); ?>    
    	
    <?php endif; ?>
   

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>