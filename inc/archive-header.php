<header class="archive-header">
    <h1 class="archive-title">
    <?php
        if ( is_category() ) :
            single_cat_title();

        elseif ( is_tag() ) :
            single_tag_title();

        elseif ( is_author() ) :
            printf( __( 'Author: %s', 'a921-starter-theme' ), '<span>' . get_the_author() . '</span>' );

        elseif ( is_day() ) :
            printf( __( 'Day: %s', 'a921-starter-theme' ), '<span>' . get_the_date() . '</span>' );

        elseif ( is_month() ) :
            printf( __( 'Month: %s', 'a921-starter-theme' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'starter-theme' ) ) . '</span>' );

        elseif ( is_year() ) :
            printf( __( 'Year: %s', 'a921-starter-theme' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'a921-starter-theme' ) ) . '</span>' );
        else :
            _e( 'Archives', 'a921-starter-theme' );

        endif;
    ?>
    </h1>
</header><!-- .page-header -->