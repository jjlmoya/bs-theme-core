<?php

if (!function_exists('zh_seo_setup')) :
    function zh_seo_setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('zh-post-thumbnail', '300', '300');
    }
endif; // zh_seo_setup
add_action('after_setup_theme', 'zh_seo_setup');

function zh_seo_add_woocommerce_support()
{
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width' => 300,
        'product_grid' => array(
            'default_rows' => 3,
            'min_rows' => 2,
            'max_rows' => 8,
            'default_columns' => 4,
            'min_columns' => 2,
            'max_columns' => 5,
        ),
    ));
}

add_action('after_setup_theme', 'zh_seo_add_woocommerce_support');

function zh_seo_scripts()
{
    $timestamp = '201904262215';
    wp_enqueue_script('zh-seo-script', get_template_directory_uri() . '/js/index.js', array(), $timestamp, true);
    $adminbar = is_admin_bar_showing();
    wp_localize_script('zh-seo-script', 'libreadminbar', array($adminbar));
}

function my_deregister_scripts()
{
    wp_deregister_script('wp-embed');
}


add_action('wp_footer', 'my_deregister_scripts');
add_action('wp_enqueue_scripts', 'zh_seo_scripts');

require_once get_template_directory(dirname(__FILE__)) . '/admin/pages/tracking.php';
require_once get_template_directory(dirname(__FILE__)) . '/admin/pages/colors.php';
require_once get_template_directory(dirname(__FILE__)) . '/admin/pages/header.php';
require_once get_template_directory(dirname(__FILE__)) . '/admin/pages/footer.php';
require_once get_template_directory(dirname(__FILE__)) . '/admin/pages/layout.php';



