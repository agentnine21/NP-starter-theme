<?php
/**
 * Search form template
 *
 * @package A921_Starter_Theme
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="s" class="assistive-text"><?php _e( 'Search', 'a921-starter-theme' ); ?></label>
    <input type="text" class="field" name="s" id="s" placeholder="" />
    <!--add the hidden fields below (for example) if you want to limit search to certain post types (remove the [] if you're only searching one post type)
    <input type="hidden" name="post_type[]" value="post" />
    <input type="hidden" name="post_type[]" value="portfolio" /> -->
    <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'SEARCH', 'a921-starter-theme' ); ?>" />
</form>