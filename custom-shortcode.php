<?php

/*
Plugin Name: custom shortcode
Description: 
Version: 1.0.0
Author: Ajay
*/

add_shortcode('custom_shortcode','custom_shortcode_post');

function custom_shortcode_post() {
    $args_query = array(
        'post_status' => 'publish',
        'posts_per_page' => '5',
        'order by' => 'post_date'
        'order' => 'ASC');

$query = new WP_Query($args);

if ( $query->have_post() ) {
    while( $query->the_post() ){
        $query->the_post();
    }
}
wp_reset_postdata();

}

?>
