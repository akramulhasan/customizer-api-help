//Add custom icon on customizer menu
function sb_proffice_custom_customize_enqueue() {
wp_enqueue_style( 'sb_customizer-css', get_stylesheet_directory_uri() . '/assets/css/customizer-css.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'sb_proffice_custom_customize_enqueue' );