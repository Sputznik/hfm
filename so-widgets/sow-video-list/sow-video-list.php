<?php
/*
	Widget Name: Video List
	Description: Orbit Video list widget, can be a horizontal or vertical list depending on user's choice
	Author: Sputznik
	Author URI:
	Widget URI:
	Video URI:
*/
class SO_VIDEO_LIST extends SiteOrigin_Widget {

	function __construct(){

    $form_options = array(
      'video_list_type' => array(
        'type' => 'select',
        'label' => __( 'Choose a Video List', 'siteorigin-widgets' ),
        'default' => 'horizontallist',
        'options' => array(
					'horizontallist' => __( 'Horizontal List', 'siteorigin-widgets' ),
					'verticallist' => __( 'Vertical List', 'siteorigin-widgets' ),
				),
      ),
			'video_count' => array(
        'type' => 'text',
        'label' => __( 'Number of posts to be shown', 'siteorigin-widgets' ),
        'default' => '4',
				'description'	=>	__( '-1 shows all the posts', 'siteorigin-widgets' )
    	),
    );

    parent::__construct(
      'sow-video-list',
      __( 'Video List', 'siteorigin-widgets' ),
      array(
        'description' =>  __( 'Orbit Video list widget, can be a horizontal or vertical list depending on user\'s choice', 'siteorigin-widgets' ),
        'help'        =>  ''
      ),
      array(),
      $form_options,
      plugin_dir_path(__FILE__).'/so-widgets/sow-video-list'
    );
  }//construct function ends here

	function get_template_name($instance) {
		return 'template';
	}
	function get_template_dir($instance) {
		return 'templates';
	}
    function get_style_name($instance) {
        return '';
    }
}
siteorigin_widget_register('sow-video-list', __FILE__, 'SO_VIDEO_LIST');
