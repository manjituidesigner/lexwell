<?php

if (!defined('ABSPATH')) {
    exit;
}

?>

<footer class="lw-footer py-5 mt-auto border-top">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6">
                <div class="text-muted">&copy; <?php echo esc_html(date('Y')); ?> <?php echo esc_html(get_bloginfo('name')); ?>. All rights reserved.</div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-md-end">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'nav',
                        'fallback_cb'    => '__return_false',
                        'depth'          => 1,
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
