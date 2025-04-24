<?php
/* Template Name: Qui suis-je */
get_header(); ?>

<section class="about-header">
    <h1>Qui suis-je ?</h1>
    <p class="about-subtitle">Je suis <strong>Florence</strong>, je suis maman de 2 enfants...</p>
</section>

<img class="wave-pattern" src="<?php echo get_template_directory_uri(); ?>/assets/images/Header/wave-pattern.svg" alt="effet de vagues">

<section class="about-content">
    <h2>Un peu de mon histoire</h2>

    <div class="about-paragraph1">
        <p>Pendant des années, j'ai lutté contre une forme de mal-être que je ne comprenais pas...
        <!-- Reste du texte identique à ton fichier -->
        </p>
    </div>

    <div class="about-paragraph2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-me-picture.jpg" alt="Florence en bord de mer">
        <p><span class="about-text-highlight">Puis un matin, tout a basculé.</span><br><br>
        Alors que je criais une fois de plus sur mes enfants...
        </p>
    </div>

    <div class="about-paragraph3">
        <p>À ce moment-là, ma seule priorité était d'aller mieux...
        </p>
    </div>

    <div class="about-video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/aoFOFG5835A?si=vqkbO2-SmN6JZRcC?controls=1"
        title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</section>

<?php get_footer(); ?>
