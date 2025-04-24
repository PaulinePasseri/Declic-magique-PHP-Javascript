<?php
/* Template Name: Quizz */
get_header(); ?>

<main class="main-quizz-content">
    <section class="quizz-header">
        <h1>Evalue ta charge mentale en 5 minutes !</h1>
        <p class="quizz-subtitle">
            Ce test rapide mesure ton <strong>indice C. M.</strong> (Charge Mentale) et te propose des <strong>solutions adaptées</strong> pour retrouver <strong>équilibre et bien-être.</strong>
        </p>
    </section>

    <img class="wave-pattern" src="<?php echo get_template_directory_uri(); ?>/assets/images/Header/wave-pattern.svg" alt="effet de vagues">

    <div>
        <p class="quizz-form-title">
            Une fois réalisé tu recevras directement ton <strong>analyse personnalisée</strong> dans ta <strong>boîte mail</strong> ainsi qu'une surprise !
        </p>

        <form action="" method="get" class="quizz-form">
            <div class="quizz-form-input">
                <label for="prenom" class="quizz-label">Prénom*</label>
                <input type="text" name="prenom" id="prenom" placeholder="Entre ton prénom" class="quizz-input" />
            </div>
            <div class="quizz-form-input">
                <label for="email" class="quizz-label">Email*</label>
                <input type="email" name="email" id="email" placeholder="Entre ton email" class="quizz-input" />
            </div>
            <div>
                <input type="submit" value="Envoyer" class="button submit-button"/>
            </div>
        </form>
    </div>

    <section class="quizz-instructions">
        <strong>L'objectif est d'évaluer ton état actuel selon 6 catégories</strong>
        <div class="quizz-categories">
            <p><strong>Catégorie 1</strong> - Organisation familiale</p>
            <p><strong>Catégorie 2</strong> - Vie professionnelle</p>
            <p><strong>Catégorie 3</strong> - Charge émotionnelle</p>
            <p><strong>Catégorie 4</strong> - Gestion des imprévus</p>
            <p><strong>Catégorie 5</strong> - Prise de temps pour soi</p>
            <p><strong>Catégorie 6</strong> - Symptômes de la charge mentale</p>
        </div>
    </section>

    <section class="quizz-content">
        <h2 id="category-title"></h2>
        <img id="category-image" src="" alt="" class="quizz-content-img">
        <div id="question-container" class="question-container"></div>
    </section>

    <div class="navigation">
        <button id="prevBtn"><i class="fa-solid fa-angle-left"></i></button>
        <button id="nextBtn"><i class="fa-solid fa-angle-right"></i></button>
    </div>
</main>

<?php get_footer(); ?>
