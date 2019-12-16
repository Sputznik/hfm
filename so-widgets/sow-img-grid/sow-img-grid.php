<?php
/*
	Widget Name: Three Column Image Grid
	Description: Three Column Image Grid
	Author: Sputznik
	Author URI:
	Widget URI:
	Video URI:
*/
class SO_IMAGE_GRID extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'sow-img-grid',
			// The name of the widget for display purposes.
			__('HFM Image Grid', 'siteorigin-widgets'),
			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __( 'Three column image grid', 'siteorigin-widgets' ),
				'help'        => '',
			),
			//The $control_options array, which is passed through to WP_Widget
			array(),
			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'img_grid_items' => array(
					'type' 	=> 'repeater',
					'label' => __( 'Image Repeater' , 'siteorigin-widgets' ),
					'item_name'  => __( 'Add Image', 'siteorigin-widgets' ),
					'fields' => array(
						'image' => array(
	              'type' => 'media',
	              'label' => __( 'Choose Image', 'siteorigin-widgets' ),
	              'choose' => __( 'Choose image', 'siteorigin-widgets' ),
	              'update' => __( 'Set image', 'siteorigin-widgets' ),
	              'library' => 'image',
	              'fallback' => true
	          ),
					)
				),
			),
			//The $base_folder path string.
			get_template_directory()."/so-widgets/sow-img-grid"
		);
	}
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
siteorigin_widget_register('sow-img-grid', __FILE__, 'SO_IMAGE_GRID');
