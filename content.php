<?php
/**
 * The default template for displaying content
 *
 * @package A921_Starter_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
    	<a href="<?php the_permalink(); ?>">
    		<h1 class="entry-title"><?php the_title(); ?></h1>
        </a>
        <span class="entry-date"><?php echo get_the_date(); ?></span>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'a921-starter-theme' ) . '</span>', 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->

    <footer class="entry-meta">

        <?php the_tags( '<div class="post-tags">' . __( 'Tagged: ', 'a921-starter-theme' ) , ', ', '</div>' ); ?>
        
        <?php the_category(' | '); ?>

        <div class="comments-link">
            <?php comments_popup_link( 
                 __( 'Leave a comment', 'a921-starter-theme' ), 
                 __( '1 comment', 'a921-starter-theme' ), 
                 __( '% comments', 'a921-starter-theme' ) ); 
            ?>
        </div>
    </footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->