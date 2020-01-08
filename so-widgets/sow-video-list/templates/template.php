<?php

$list_type = $instance['video_list_type'];
$video_category = $instance['video_category'];
$count = $instance['video_count'];

// Includes orbit template for different list layouts
$shortcode_str = "[orbit_query post_type='videos' style='$list_type' posts_per_page='$count' tax_query='video_category:$video_category']";

echo do_shortcode( $shortcode_str );

?>
