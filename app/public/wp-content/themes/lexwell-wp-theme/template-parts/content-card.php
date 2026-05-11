<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card h-100'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="ratio ratio-16x9">
            <?php the_post_thumbnail('medium', ['class' => 'card-img-top object-fit-cover']); ?>
        </a>
    <?php endif; ?>

    <div class="card-body">
        <?php the_title(sprintf('<h2 class="h6"><a class="text-decoration-none" href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
        <div class="text-muted small">
            <?php echo esc_html(get_the_date()); ?>
        </div>
    </div>
</article>
