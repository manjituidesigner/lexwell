<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

function lexwell_theme_setup(): void
{
    load_theme_textdomain('lexwell', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 120,
        'width'       => 360,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'lexwell'),
        'footer'  => __('Footer Menu', 'lexwell'),
    ]);
}
add_action('after_setup_theme', 'lexwell_theme_setup');

function lexwell_register_widget_areas(): void
{
    register_sidebar([
        'name'          => __('Sidebar', 'lexwell'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'lexwell'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'lexwell_register_widget_areas');

class Lexwell_Bootstrap_Navwalker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null): void
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0): void
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes, true);

        $classes[] = 'nav-item';
        if ($has_children && $depth === 0) {
            $classes[] = 'dropdown';
        }
        if ($has_children && $depth > 0) {
            $classes[] = 'dropdown-submenu';
        }

        $class_names = implode(' ', array_filter($classes));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= $indent . '<li' . $class_names . '>';

        $atts = [];
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '';
        $atts['class'] = 'nav-link';

        if ($has_children && $depth === 0) {
            $atts['class'] .= ' dropdown-toggle';
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-expanded'] = 'false';
            $atts['role'] = 'button';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if ($value === '') {
                continue;
            }
            $value = $attr === 'href' ? esc_url($value) : esc_attr($value);
            $attributes .= ' ' . $attr . '="' . $value . '"';
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        $item_output = '';
        $item_output .= $args->before ?? '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= ($args->link_before ?? '') . $title . ($args->link_after ?? '');
        $item_output .= '</a>';
        $item_output .= $args->after ?? '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

function lexwell_enqueue_assets(): void
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'lexwell-plus-jakarta-font',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'lexwell-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        [],
        '5.3.3'
    );

    wp_enqueue_style(
        'lexwell-aos',
        'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css',
        [],
        '2.3.4'
    );
    wp_enqueue_style(
        'lexwell-swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        [],
        '11'
    );

    wp_enqueue_style(
        'lexwell-main',
        get_template_directory_uri() . '/assets/css/main.css',
        ['lexwell-bootstrap', 'lexwell-plus-jakarta-font'],
        $theme_version
    );

    // add new
wp_enqueue_style(
    'lexwell-global',
    get_template_directory_uri() . '/assets/css/global.css',
    ['lexwell-bootstrap', 'lexwell-plus-jakarta-font'],
    $theme_version
);

wp_enqueue_style(
    'lexwell-header',
    get_template_directory_uri() . '/assets/css/header.css',
    ['lexwell-global'],
    $theme_version
);

wp_enqueue_style(
    'lexwell-footer',
    get_template_directory_uri() . '/assets/css/footer.css',
    ['lexwell-global'],
    $theme_version
);

wp_enqueue_style(
    'lexwell-home',
    get_template_directory_uri() . '/assets/css/home.css',
    ['lexwell-global'],
    $theme_version
);

wp_enqueue_style(
    'lexwell-responsive',
    get_template_directory_uri() . '/assets/css/responsive.css',
    ['lexwell-global'],
    $theme_version
);
    //

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_script(
        'lexwell-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.3',
        true
    );

    wp_enqueue_script(
        'lexwell-aos',
        'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js',
        [],
        '2.3.4',
        true
    );
    wp_enqueue_script(
        'lexwell-swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        [],
        '11',
        true
    );

    wp_enqueue_script(
        'lexwell-main',
        get_template_directory_uri() . '/assets/js/main.js',
        ['lexwell-bootstrap', 'lexwell-aos'],
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'lexwell_enqueue_assets');

function lexwell_customize_register(WP_Customize_Manager $wp_customize): void
{
    $wp_customize->add_section('lexwell_hero', [
        'title'    => __('Hero', 'lexwell'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('lexwell_hero_person_image', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'lexwell_hero_person_image_control',
        [
            'label'    => __('Hero Person Image', 'lexwell'),
            'section'  => 'lexwell_hero',
            'settings' => 'lexwell_hero_person_image',
        ]
    ));
}
add_action('customize_register', 'lexwell_customize_register');

function lexwell_add_resource_hints(array $urls, string $relation_type): array
{
    if ($relation_type === 'preconnect') {
        $urls[] = [
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        ];
    }

    return $urls;
}
add_filter('wp_resource_hints', 'lexwell_add_resource_hints', 10, 2);
