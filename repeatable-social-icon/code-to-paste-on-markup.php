<?php
// Theme_mod settings to check.
$all_links = get_theme_mod( 'header_social'); ?>


    <?php foreach( $all_links as $link ) : ?>


<li><a href="<?php echo $link['link_url']; ?>">
	<i class="icofont icofont-social-<?php echo $link['link_text']; ?>"></i>
	</a>
</li>

                        

    <?php endforeach; ?>