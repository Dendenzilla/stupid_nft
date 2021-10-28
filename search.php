
<?php get_header(); ?> 
    <main>
        <h2>Résultat(s) de la recherche</h2>
        <section class="search-results">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="search-results__item">
                        <a href="<?php echo get_permalink(); ?>" rel="noopener noreferrer">
                            <div class="search-results__item__img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <p><?php the_title(); ?></p>
                        </a>
                    </div>
                <?php endwhile;?>
            <?php endif; ?>
        </section>
    </main>
<?php get_footer(); ?>
