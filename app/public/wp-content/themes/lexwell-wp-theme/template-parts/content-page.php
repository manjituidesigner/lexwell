<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('lw-page py-5'); ?>>
    <div class="container">
        <header class="mb-4">
            <?php the_title('<h1 class="h3">', '</h1>'); ?>
        </header>

        <div class="lw-content">
            <?php the_content(); ?>
        </div>
    </div>
</article>
