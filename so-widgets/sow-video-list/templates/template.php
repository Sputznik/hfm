<?php

$list_type = $instance['video_list_type'];
$count = $instance['video_count'];

// Includes orbit template horizontallist or verticallist
echo do_shortcode('[orbit_query post_type="videos" style="'.$list_type.'" posts_per_page="'.$count.'"]');

?>
