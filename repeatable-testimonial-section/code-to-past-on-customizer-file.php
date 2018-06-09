<?php

$wp_customize->add_section('testi_section',array(
			'title' => 'Testimonial',
			'priority' => 10,
			'panel' => 'law_option_panel'
		));


// Testimonial Repeater
Kirki::add_field( 'law_kirki_id', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Testimonial', 'genesis-sample' ),
	'section'     => 'testi_section',
	'priority'    => 10,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Testimonial', 'genesis-sample' ),
	),
	'button_label' => esc_attr__('Add New Testimonial', 'genesis-sample' ),
	'settings'     => 'testimonial',
	'default'      => array(
		array(
			'client_name' => esc_attr__( 'Client Name', 'genesis-sample' ),
			'client_degig'  => 'CEO',
			'client_thumb'  => get_stylesheet_directory_uri().'/assets/images/tes/t1.jpg',
			'client_comment'  => 'Some comments of client',
		),
		array(
			'client_name' => esc_attr__( 'Client Name', 'genesis-sample' ),
			'client_degig'  => 'CEO',
			'client_thumb'  => get_stylesheet_directory_uri().'/assets/images/tes/t1.jpg',
			'client_comment'  => 'Some comments of client',
		),

	),
	'fields' => array(
		'client_name' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Client Name', 'genesis-sample' ),
			'default'     => '',
		),
		'client_degig' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Client Designation', 'genesis-sample' ),
			'description' => esc_attr__( 'e.g: CEO', 'genesis-sample' ),
			'default'     => '',
		),
		'client_thumb' => array(
			'type'        => 'image',
			'label'       => esc_attr__( 'Client Photo', 'genesis-sample' ),
			'default'     => '',
			'description'     => 'N.B: Recommended size 100x100',
		),
		'client_comment' => array(
			'type'        => 'textarea',
			'label'       => esc_attr__( 'Client Comment', 'genesis-sample' ),
			'default'     => 'Some comments of client',
		),
	)
) );