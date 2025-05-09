<?php
/*
Template Name: Landing Page
*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/22175fe4ef.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bahiana&display=swap" rel="stylesheet">
    <title>Déclic magique</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body>
    <nav>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo déclic magique"/>
        <ul>
            <li><a href="<?php echo home_url(); ?>" class="nav">Accueil</a></li>
            <li><a href="<?php echo home_url('/about'); ?>" class="nav">Qui suis-je ?</a></li>
            <li><a href="<?php echo home_url('/blog'); ?>" class="nav">Blog</a></li>
        </ul>
    </nav>

    <section class="header">
        <div class="header-text">
            <div>
                <h1>Déclic magique</h1>
                <p class="header-subtitle">Florence Hoarau ~ Coach experte en charge mentale et declencheuse de declics</p>
            </div>
            <div class="CTA">
                <p class="cta-text">Tu en as assez de subir la charge mentale et tu veux reprendre le controle de ta vie rapidement ?<br><br>Découvre comment grâce au test du declic !</p>
                <button class="button"><a href="<?php echo home_url('/quizz'); ?>">Faire le test</a></button>
            </div>
        </div>
        <div class="header-illustration">
            <div class="header-picture">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Header/header-picture.png" alt="Florence est en train de sauter, souriante, les bras ecartes">
            </div>
            <div class="header-circles">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Header/circle-pattern.svg" alt="3 cercles de couleurs derriere l'image de Florence">
            </div>
        </div>
    </section>
    <img class="wave-pattern" src="<?php echo get_template_directory_uri(); ?>/assets/images/Header/wave-pattern.svg" alt="effet de vagues">
    
    <section class="about-me">
        <h2>Qui suis-je ?</h2>
        <div class="about-me-content">
            <div class="about-me-picture">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-me-mainpicture.png" alt="portrait de Florence">
            </div>
            <div class="about-me-text">
                <p>Je suis Florence, je suis maman de 2 enfants et j’ai connu cet état de mal-être. <br><br>Dès lors que je m’en suis sortie, je n’avais qu’un désir : vous accompagner vers vos propres declics.</p>
                <button class="button"><a href="<?php echo home_url('/about'); ?>">En savoir plus</a></button>
            </div>
        </div>
    </section>
    
    <section class="testimonies">
        <h2>Témoignages</h2>
        <p class="testimonies-subtitle">Elles ont atteint l'objectif du declic pour plus de serenite</p>
        <div class="testimonies-list">
            <div class="testimonies-content">
                <div class="testimonies-notation">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <p class="testimonies-text">Coucou Florence,<br>
                        Moi ce que j'ai aimé dans cet accompagnement, c'est qu'à la différence d'une psy, on ne vient pas juste pour étaler nos problèmes. On vient pour trouver ensemble des solutions à l'aide de méthodes et d'exercices concrets. Tu es de bons conseils et comme tu as aussi connu des situations difficiles, tu parles d'expériences, et ça change tout ! Et enfin, tu es gentille et souriante.</p>
                    <strong class="testimonies-name">Marine C.</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="blog">
        <h2>Blog</h2>
        <div class="blog-list">
            <div class="blog-content"></div>
            <div class="blog-content"></div>
            <div class="blog-content"></div>
        </div>
    </section>

    <footer>
        
    </footer>
</body>
</html>
