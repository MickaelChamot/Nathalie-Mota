<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <title>Nathalie Mota</title>

</head>

<header class="site-header">
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo du site">
            </a>
        </div>

        <!-- Menu -->
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'menu_class' => 'menu',
                'container' => false,
            ));
            ?>

        </nav>
    </div>

</header>

<body>