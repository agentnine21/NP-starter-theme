<?php
/**
 * Single post template
 *
 * @package A921_Starter_Theme
 */

get_header(); ?>

<section id="primary">

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content' ); ?>

        <?php comments_template( '', true ); ?>

        <!-- Below is some between-post links (next post, previous post) -->
<nav id="nav-below">
    <div class="nav-previous"><?php previous_post_link( '%link', __( 'Previous', 'a921-starter-theme' ) ); ?></div>
    <div class="nav-next"><?php next_post_link( '%link', __( 'Next', 'a921-starter-theme' ) ); ?></div>
</nav>

        <!-- Use the wp_link_pages tag below if you want a multi-page post, along with the nextpage Quicktag in the WYSIWYG editor, as many times as you want. Otherwise, delete -->
<?php wp_link_pages( 
    array( 
        'before' => '<div class="page-link"><span>' . __( 'Pages:', 'a921-starter-theme' ) . '</span>', 
        'after' => '</div>' 
    ) 
); ?>        

    <?php endwhile; // end of the loop. ?>

</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>