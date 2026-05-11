<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main py-5">
    <div class="container">
        <h1 class="h3 mb-2">Page not found</h1>
        <p class="text-muted mb-4">The page you are looking for doesn’t exist.</p>
        <a class="btn btn-primary" href="<?php echo esc_url(home_url('/')); ?>">Go to Home</a>
    </div>
</main>

<?php
get_footer();
