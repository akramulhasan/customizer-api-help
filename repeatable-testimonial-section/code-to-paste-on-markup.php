<?php
// Theme_mod settings to check.
$all_testimonial = get_theme_mod( 'testimonial'); ?>


    <?php foreach( $all_testimonial as $testimonial ) : ?>

<?php 

$c_name = $testimonial['client_name'];
$c_degig = $testimonial['client_degig'];
$c_thumb = wp_get_attachment_url($testimonial['client_thumb']);
$c_comment = $testimonial['client_comment'];


?>

<!-- Content will go here -->

    <?php endforeach; ?>