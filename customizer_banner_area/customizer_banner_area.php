<?php

$wp_customize->add_section('banner_section',array(
			'title' => 'Banner',
			'priority' => 10,
			'panel' => 'law_option_panel'
		));

//Banner background image
Kirki::add_field( 'theme_kirki_id', array(
	'type'        => 'image',
	'settings'    => 'bn_bg',
	'label'       => esc_attr__( 'Banner Background Image', 'genesis-sample' ),
	'section'     => 'banner_section',
	'default'     => get_stylesheet_directory_uri().'/path',
) );

// Banner Title
Kirki::add_field( 'theme_kirki_id', array(
	'type'     => 'text',
	'settings' => 'bn_title',
	'label'    => __( 'Banner Title', 'genesis-sample' ),
	'section'  => 'banner_section',
	'default'  => esc_attr__( 'CLIENT FOCUSED.', 'genesis-sample' ),
	'priority' => 10,
) );

// Banner Subtitle
Kirki::add_field( 'theme_kirki_id', array(
	'type'     => 'text',
	'settings' => 'bn_subtitle',
	'label'    => __( 'Banner Subtitle', 'genesis-sample' ),
	'section'  => 'banner_section',
	'default'  => esc_attr__( 'RESULTS ORIENTED.', 'genesis-sample' ),
	'priority' => 10,
) );

// Banner BTN Label
Kirki::add_field( 'theme_kirki_id', array(
	'type'     => 'text',
	'settings' => 'bn_btn_label',
	'label'    => __( 'Button Label', 'genesis-sample' ),
	'section'  => 'banner_section',
	'default'  => esc_attr__( 'BOOK CONSULTATION', 'genesis-sample' ),
	'priority' => 10,
) );

// Banner BTN link
Kirki::add_field( 'theme_kirki_id', array(
	'type'     => 'text',
	'settings' => 'bn_btn_link',
	'label'    => __( 'Button Link', 'genesis-sample' ),
	'section'  => 'banner_section',
	'default'  => esc_attr__( '#', 'genesis-sample' ),
	'priority' => 10,
) );