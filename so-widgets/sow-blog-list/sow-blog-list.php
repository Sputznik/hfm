<?php
/*
	Widget Name: Blog List
	Description: Orbit Blog list widget, can be a horizontal or vertical list depending on user's choice
	Author: Sputznik
	Author URI:
	Widget URI:
	Video URI:
*/
class SO_BLOG_LIST extends SiteOrigin_Widget {

	function __construct(){

    $form_options = array(
      'blog_list_type' => array(
        'type' => 'select',
        'label' => __( 'Choose a Blog List', 'siteorigin-widgets' ),
        'default' => 'horizontallist',
        'options' => array(
					'list' 				 => __( 'List', 'siteorigin-widgets' ),
					'grid' 				 => __( 'Grid', 'siteorigin-widgets' ),
					'scrolling' 	 => __( 'Scrolling List', 'siteorigin-widgets' ),
				),
      ),
			'post_category' => array(
        'type' => 'text',
        'label' => __( 'Blog Post Category', 'siteorigin-widgets' ),
    	),
			'post_count' => array(
        'type' => 'text',
        'label' => __( 'Number of posts to be shown', 'siteorigin-widgets' ),
        'default' => '4',
				'description'	=>	__( '-1 shows all the posts', 'siteorigin-widgets' )
    	),
    );

    parent::__construct(
      'sow-blog-list',
      __( 'Blog List', 'siteorigin-widgets' ),
      array(
        'description' =>  __( 'Orbit Blog list widget, can be a horizontal or vertical list depending on user\'s choice', 'siteorigin-widgets' ),
        'help'        =>  ''
      ),
      array(),
      $form_options,
      plugin_dir_path(__FILE__).'/so-widgets/sow-blog-list'
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
siteorigin_widget_register('sow-blog-list', __FILE__, 'SO_BLOG_LIST');
