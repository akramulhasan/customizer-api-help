<?php

$wp_customize->add_section('header_section',array(
			'title' => 'Header',
			'priority' => 10,
			'panel' => 'mytheme_option_panel'
		));


// Header Email
Kirki::add_field( 'mytheme_kirki_id', array(
	'type'     => 'text',
	'settings' => 'header_email',
	'label'    => __( 'Email', 'mytheme' ),
	'section'  => 'header_section',
	'default'  => esc_attr__( 'hostlab@example.com', 'mytheme' ),
	'priority' => 10,
) );

// Header Phone
Kirki::add_field( 'mytheme_kirki_id', array(
	'type'     => 'text',
	'settings' => 'header_phone',
	'label'    => __( 'Phone', 'mytheme' ),
	'section'  => 'header_section',
	'default'  => esc_attr__( '+22 666-888-999', 'mytheme' ),
	'priority' => 10,
) );