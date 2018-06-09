<!-- Paste this code in place of Logo markup -->

                                <?php
                                // Display the Custom Logo
                                the_custom_logo();

                                // No Custom Logo, just display the site's name
                                if (!has_custom_logo()) {
                                    ?>
                                    <h4><?php bloginfo('name'); ?></h4>
                                    <?php
                                }
                                ?>