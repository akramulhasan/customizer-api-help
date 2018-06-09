<?php
// Header social
Kirki::add_field( 'law_kirki_id', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Social Links', 'genesis-sample' ),
	'section'     => 'header_section',
	'priority'    => 10,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Social Icon', 'genesis-sample' ),
	),
	'button_label' => esc_attr__('"Add new" Icon', 'genesis-sample' ),
	'settings'     => 'header_social',
	'default'      => array(
		array(
			'link_text' => esc_attr__( 'facebook', 'genesis-sample' ),
			'link_url'  => 'https://facebook.com',
		),
		array(
			'link_text' => esc_attr__( 'twitter', 'genesis-sample' ),
			'link_url'  => 'https://twitter.com',
		),
	),
	'fields' => array(
		'link_text' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Social network name', 'genesis-sample' ),
			'description' => esc_attr__( 'e.g: facebook', 'genesis-sample' ),
			'default'     => '',
		),
		'link_url' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'URL', 'genesis-sample' ),
			'description' => esc_attr__( 'e.g: http://www.facebook.com/yourID', 'genesis-sample' ),
			'default'     => '',
		),
	)
) );