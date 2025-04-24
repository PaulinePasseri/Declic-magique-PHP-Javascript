<?php get_header(); ?>

<section class="header">
    <div class="header-text">
        <div>
            <h1>Déclic magique</h1>
            <p class="header-subtitle">Florence Hoarau ~ Coach experte en charge mentale et déclencheuse de déclics</p>
        </div>
        <div class="CTA">
            <p class="cta-text">Tu en as assez de subir la charge mentale et tu veux reprendre le contrôle de ta vie rapidement ?<br><br>Découvre comment grâce au test du déclic !</p>
            <button class="button"><a href="<?php echo site_url('/quizz'); ?>">Faire le test</a></button>
        </div>
    </div>
    <div class="header-illustration">
        <div class="header-picture">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Header/header-picture.png" alt="Florence est en train de sauter, souriante, les bras écartés">
        </div>
        <div class="header-circles">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Header/circle-pattern.svg" alt="3 cercles de couleurs derrière l'image de Florence">
        </div>
    </div>
</section>

<img class="wave-pattern" src="<?php echo get_template_directory_uri(); ?>/assets/images/Header/wave-pattern.svg" alt="effet de vagues">

<section class="about-me">
    <h2>Qui suis-je ?</h2>
    <div class="about-me-content">
        <div class="about-me-picture">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/about-me-mainpicture.png" alt="portrait de Florence">
        </div>
        <div class="about-me-text">
            <p>Je suis Florence, je suis maman de 2 enfants et j’ai connu cet état de mal-être. <br><br>Dès lors que je m’en suis sortie, je n’avais qu’un désir : vous accompagner vers vos propres déclics.</p>
            <button class="button"><a href="<?php echo site_url('/about'); ?>">En savoir plus</a></button>
        </div>
    </div>
</section>

<section class="testimonies">
    <h2>Témoignages</h2>
    <p class="testimonies-subtitle">Elles ont atteint l'objectif du déclic pour plus de sérénité</p>
    <div class="testimonies-list">
        <div class="testimonies-content">
            <div class="testimonies-notation">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                <p class="testimonies-text">Coucou Florence,<br>
                Moi ce que j'ai aimé dans cet accompagnement, c'est qu'à la différence d'une psy, on ne vient pas juste pour étaler nos problèmes...</p>
                <strong class="testimonies-name">Marine C.</strong>
            </div>
        </div>
        <div class="testimonies-bulletpoints"></div>
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

<?php get_footer(); ?>
