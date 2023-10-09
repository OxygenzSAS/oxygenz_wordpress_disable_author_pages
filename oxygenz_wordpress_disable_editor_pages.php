<?php
/*
Plugin Name: Oxygenz - Disable editor pages
Description: Disable editor pages and links
Version: 1.1
Author: Oxygenz
*/

function rn_author_page_redirect() {
    if ( is_author() ) {
        wp_redirect( home_url() );
    }
}
add_action( 'template_redirect', 'rn_author_page_redirect' );

add_filter('author_link' ,'__return_false');