<?php get_header(); ?>

<main class="blog-main">
    <section class="blog-header">
        <?php if (is_category()) : ?>
            <h1>Catégorie : <?php single_cat_title(); ?></h1>
        <?php elseif (is_tag()) : ?>
            <h1>Étiquette : <?php single_tag_title(); ?></h1>
        <?php elseif (is_author()) : ?>
            <h1>Auteur : <?php the_author(); ?></h1>
        <?php elseif (is_date()) : ?>
            <h1>Archives pour <?php the_time('F Y'); ?></h1>
        <?php else : ?>
            <h1>Le Blog</h1>
            <p class="blog-subtitle">Mes derniers partages pour t’aider à retrouver légèreté et clarté 🧘‍♀️</p>
        <?php endif; ?>
    </section>

    <section class="blog-posts">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="blog-post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="blog-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="blog-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>

        <div class="pagination">
            <?php
                the_posts_pagination(array(
                    'mid_size' => 1,
                    'prev_text' => '← Précédent',
                    'next_text' => 'Suivant →',
                ));
            ?>
        </div>

        <?php else : ?>
            <p>Aucun article trouvé pour le moment.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
