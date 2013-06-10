<?php

/* add_action('acf/register_fields', 'my_register_fields');

function my_register_fields() {
	//include_once('add-ons/acf-repeater/repeater.php');
	//include_once('add-ons/acf-gallery/gallery.php');
	//include_once('add-ons/acf-flexible-content/flexible-content.php');
}

// Options Page 
//include_once( 'add-ons/acf-options-page/acf-options-page.php' );
*/

/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */

if(function_exists("register_field_group")) {
	register_field_group(array (
		'id' => 'content-carousel',
		'title' => 'Content Carousel',
		'fields' => array (
			array (
				'post_type' => array (
					0 => 'main_projects',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'multiple' => 1,
				'allow_null' => 1,
				'key' => 'field_51b4fc8531236',
				'label' => 'Carousel Items',
				'name' => 'carousel_items',
				'type' => 'post_object',
				'instructions' => 'Choose all posts you would like to be featured in the carousel (Shift+click to select multiple posts).',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '2',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}