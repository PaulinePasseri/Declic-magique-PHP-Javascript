<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/22175fe4ef.js" crossorigin="anonymous"></script>

    <!-- Fonts Google comme dans ton HTML -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bahiana&display=swap" rel="stylesheet">

    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo déclic magique"/>
    <ul>
        <li><a href="<?php echo home_url(); ?>" class="nav">Accueil</a></li>
        <li><a href="<?php echo site_url('/about'); ?>" class="nav">Qui suis-je ?</a></li>
        <li><a href="<?php echo site_url('/blog'); ?>" class="nav">Blog</a></li>
    </ul>
</nav>
