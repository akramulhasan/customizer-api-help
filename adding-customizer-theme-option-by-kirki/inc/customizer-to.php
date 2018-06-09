<?php
function mytheme_theme_options($wp_customize){

	$wp_customize->add_panel( 'mytheme_option_panel', array(
	    'priority'       => 10,
	    'capability'     => 'edit_theme_options',
	    'title'          => 'Theme Option',
	    'description'    => 'Options of mytheme theme',
	) );

	

 include('customizer-to-header.php');
// include('customizer-to-banner.php');
// include('customizer-to-cat-bar.php');
// include('customizer-to-cd.php'); //CountDown
// include('customizer-to-pack.php'); //Plan&Pricing
// include('customizer-to-blog.php'); //Recent Post
// include('customizer-to-cta.php'); //CTA
// include('customizer-to-tm.php'); //Testimonial
// include('customizer-to-brand.php'); //Brand
// include('customizer-to-footer.php'); //Footer
/**
 * Adding Kirki config file
 */
include('kirki-config.php');


}
add_action('customize_register','mytheme_theme_options');