<?php
/**
 * Twenty Twenty-Five Child theme functions.
 */
function twentytwentyfive_child_enqueue_styles() {
    $parent_handle = 'twentytwentyfive-style';

    wp_enqueue_style(
        'twentytwentyfive-child-style',
        get_stylesheet_uri(),
        array( $parent_handle ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_styles' );