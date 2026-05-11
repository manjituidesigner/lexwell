<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();

while (have_posts()) {
    the_post();
    get_template_part('template-parts/content', get_post_type());

    the_post_navigation();

    if (comments_open() || get_comments_number()) {
        comments_template();
    }
}

get_footer();
