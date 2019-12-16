<?php
// Custom Post Type Videos

add_filter( 'orbit_post_type_vars', function( $post_types ){

	$post_types['videos'] = array(
		'slug' 		=> 'videos',
		'labels'	=> array(
			'name' 					=> 'Videos',
			'singular_name' => 'Video',
      'add_new'       => 'Add New',
      'add_new_item'  => 'Add New Video',
      'all_items'     =>  'All Videos'
		),
		'public'		=> true,
		'supports'	=> array( 'title', 'editor','thumbnail' )
	);

	return $post_types;

} );

//Creates a meta field for cpt videos
add_filter( 'orbit_meta_box_vars', function( $meta_box ){
	$meta_box['videos'] = array(
		array(
			'id'			=> 'videos-meta-fields',
			'title'		=> 'Additional Information',
			'fields'	=> array(
				'spotify'	=> array(
					'type' => 'text',
					'text' => 'Spotify'
				),
				'apple_music'	=> array(
					'type' => 'text',
					'text' => 'Apple Music'
				),
				'sound_cloud'	=> array(
					'type' => 'text',
					'text' => 'Sound Cloud'
				),
			)
		)
	);
	return $meta_box;
});

/* PUSH INTO THE GLOBAL VARS OF ORBIT TAXNOMIES */
add_filter( 'orbit_taxonomy_vars', function( $orbit_tax ){

  $resources_taxonomies = array(
    'video_category'       => 'Video Category',
  );

  foreach( $resources_taxonomies as $slug => $label ){
    $orbit_tax[ $slug ]	= array(
      'label'			  => $label,
      'slug' 			  => $slug,
      'post_types'	=> array( 'videos' )
    );
  }

  return $orbit_tax;

} );
