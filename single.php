<?php get_header(); ?>

<main class="single-post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post-content">
            <h1 class="post-title"><?php the_title(); ?></h1>

            <div class="post-meta">
                <span>Publié le <?php the_time('j F Y'); ?></span>
                <span>par <?php the_author(); ?></span>
            </div>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="post-body">
                <?php the_content(); ?>
            </div>
        </article>

        <nav class="post-navigation">
            <div class="nav-previous"><?php previous_post_link('%link', '← Article précédent'); ?></div>
            <div class="nav-next"><?php next_post_link('%link', 'Article suivant →'); ?></div>
        </nav>

        <section class="comments-section">
            <?php comments_template(); ?>
        </section>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
