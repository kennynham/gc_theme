<?php
    // This is our header template
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--This tells the browser that the width of the layout viewport is the same as the device's screen width. -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css"> -->
        <!-- <link rel="stylesheet" href="<?php //bloginfo('template_url') ?>/style.css"> -->
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav>
            <div class="nav-links">
                <?php
                    wp_nav_menu($arg = array (
                        'menu_class' => 'nav-links',
                        'theme_location' => 'primary'
                    ));
                 ?>
            </div>
        </nav>
