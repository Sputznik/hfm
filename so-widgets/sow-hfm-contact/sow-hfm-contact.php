<?php
/*
	Widget Name: HFM Contact Page Widget
	Description: HFM Contact Page Widget
	Author: Sputznik
	Author URI:
	Widget URI:
	Video URI:
*/
class SO_HFM_CONTACT extends SiteOrigin_Widget {

	function __construct(){

    $form_options = array(
			'contact_headline' => array(
			 	'type' => 'text',
			 	'label' => __( 'Headline', 'siteorigin-widgets' ),
			 	'default' => 'Get in Touch'
	 		),
			'background_image' => array(
					'type' => 'media',
					'label' => __( 'Choose Background Image', 'siteorigin-widgets' ),
					'choose' => __( 'Choose image', 'siteorigin-widgets' ),
					'update' => __( 'Set image', 'siteorigin-widgets' ),
					'library' => 'image',
					'fallback' => true
			),
			'contact_items' => array(
				'type' 	=> 'repeater',
				'label' => __( 'Contact Information' , 'siteorigin-widgets' ),
				'item_name'  => __( 'Contact item', 'siteorigin-widgets' ),
				'fields' => array(
					'info_icon_class' => array(
						'type' => 'text',
						'label' => __( 'Icon Class', 'siteorigin-widgets' ),
					),
					'info_title' => array(
						'type' => 'text',
						'label' => __( 'Title', 'siteorigin-widgets' ),
						// 'default' => 'Some default text.'
					),
					'info_desc' => array(
						'type' => 'textarea',
						'label' => __( 'Description', 'siteorigin-widgets' ),
						'rows' => 10
					),
				)
			),
    );

    parent::__construct(
      'sow-hfm-contact',
      __( 'HFM Contact Page Widget', 'siteorigin-widgets' ),
      array(
        'description' =>  __( 'HFM Contact Page Widget', 'siteorigin-widgets' ),
        'help'        =>  ''
      ),
      array(),
      $form_options,
      plugin_dir_path(__FILE__).'/so-widgets/sow-hfm-contact'
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
siteorigin_widget_register('sow-hfm-contact', __FILE__, 'SO_HFM_CONTACT');
