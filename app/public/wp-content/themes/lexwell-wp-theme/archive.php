<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main py-5">
    <div class="container">
        <header class="mb-4">
            <?php the_archive_title('<h1 class="h3 mb-1">', '</h1>'); ?>
            <?php the_archive_description('<div class="text-muted">', '</div>'); ?>
        </header>

        <?php if (have_posts()) : ?>
            <div class="row g-4">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <?php get_template_part('template-parts/content', 'card'); ?>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="mt-4">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
