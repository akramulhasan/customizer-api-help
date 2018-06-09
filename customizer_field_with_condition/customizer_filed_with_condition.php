<?php
// section
$wp_customize->add_section('page_section_id',array(
	'title' => 'Page Options',
	'priority' => 10,
	'panel' => 'general_section_panel_id'
));

// Enable or Disable section
Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'     => 'switch',
	'settings' => 'enable_page_title_bg',
	'label'    => __( 'Page Banner', 'sb_proffice' ),
	'section'  => 'page_section_id',
	'default'  => '1',
	'priority' => 10,

) );

//field visibility based on pevious settings

Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'        => 'image',
	'settings'    => 'pg_bg_image',
	'label'       => esc_attr__( 'Upload Banner Image', 'textdomain' ),
	'description' => esc_attr__( 'Recommended size: 1920x300px', 'textdomain' ),
	'section'     => 'page_section_id',
	'default'     => get_theme_file_uri().'/assets/images/slider/page-banner.jpg',
	//this is the responsible parameter
	'active_callback' => array(
		array(
			'setting'  => 'enable_page_title_bg',
			'operator' => '==',
			'value'    => '1',
		),
	),
) );