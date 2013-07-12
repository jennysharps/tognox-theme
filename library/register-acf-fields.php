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
	register_field_group(
            array (
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
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'front-page.php',
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
            )
        );

        register_field_group(array (
		'id' => 'acf_related-citations',
		'title' => 'Related Citations',
		'fields' => array (
			array (
				'post_type' => array (
					0 => 'jls_citation',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'multiple' => 1,
				'allow_null' => 0,
				'key' => 'field_51d74ab1f271d',
				'label' => 'Citations',
				'name' => 'related_citations',
				'type' => 'post_object',
                                'instructions' => 'Choose all citations related to this project (Shift+click to select multiple citations).',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'main_projects',
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

        register_field_group(array (
		'id' => 'acf_quotation',
		'title' => 'Quotation',
		'fields' => array (
			array (
				'default_value' => '',
				'formatting' => 'html',
				'key' => 'field_51d616f61572c',
				'label' => 'Quote',
				'name' => 'quote',
				'type' => 'text',
			),
			array (
				'default_value' => '',
				'formatting' => 'html',
				'key' => 'field_51d6170b1572d',
				'label' => 'Attribution',
				'name' => 'attribution',
				'type' => 'text',
				'instructions' => 'Who said this?',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'front-page.php',
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

        register_field_group(
            array (
		'id' => 'acf_file-upload',
		'title' => 'File Upload',
		'fields' => array (
			array (
				'save_format' => 'object',
				'library' => 'all',
				'key' => 'field_51d5650761bbc',
				'label' => 'Related File',
				'name' => 'custom_attachment',
				'type' => 'file',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'jls_citation',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
            )
        );

        register_field_group(array (
		'id' => 'acf_github-info',
		'title' => 'GitHub Info',
		'fields' => array (
			array (
				'key' => 'field_51dbdf720cf88',
				'label' => 'URL to related GitHub Repo',
				'name' => 'github_repo',
				'type' => 'text',
				'default_value' => '',
				'formatting' => 'none',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'main_projects',
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

        register_field_group(array (
		'id' => 'acf_attached-files',
		'title' => 'Attached Files',
		'fields' => array (
			array (
				'key' => 'field_51df77196c34c',
				'label' => 'File 1 Name',
				'name' => 'file_1_name',
				'type' => 'text',
				'default_value' => 'Resume',
				'formatting' => 'html',
			),
			array (
				'key' => 'field_51df77e66c34d',
				'label' => 'File 1',
				'name' => 'file_1',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'all',
			),
			array (
				'key' => 'field_51df7a026c34e',
				'label' => 'File 2 Name',
				'name' => 'file_2_name',
				'type' => 'text',
				'default_value' => 'CV',
				'formatting' => 'html',
			),
			array (
				'key' => 'field_51df7a336c34f',
				'label' => 'File 2',
				'name' => 'file_2',
				'type' => 'file',
				'save_format' => 'url',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-template-about.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'normal',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}