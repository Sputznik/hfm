<?php

$list_type = $instance['blog_list_type'];
$post_category = isset( $instance['post_category'] ) && $instance['post_category'] ? $instance['post_category'] : "";
$count = $instance['post_count'];

// Includes orbit template for different list layouts
$shortcode_str = "[orbit_query post_type='post' style='$list_type' posts_per_page='$count'";

if( $post_category ){
  $shortcode_str .= " tax_query='category:$post_category'";
}
$shortcode_str .= "]";

echo do_shortcode( $shortcode_str );

?>
