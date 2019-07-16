<?php

if (!function_exists('bs_seo_setup')) :
    function bs_seo_setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('zh-post-thumbnail', '300', '300');
    }
endif;

function bs_seo_scripts()
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


function bs_woocommerce_script_cleaner()
{

    // Remove the generator tag
    remove_action('wp_head', array($GLOBALS['woocommerce'], 'generator'));
    // Unless we're in the store, remove all the cruft!
    if (!is_woocommerce() && !is_cart() && !is_checkout()) {
        wp_dequeue_script('selectWoo');
        wp_deregister_script('selectWoo');
        wp_dequeue_script('wc-add-payment-method');
        wp_dequeue_script('wc-lost-password');
        wp_dequeue_script('wc_price_slider');
        wp_dequeue_script('wc-single-product');
        wp_dequeue_script('wc-add-to-cart');
        wp_dequeue_script('wc-cart-fragments');
        wp_dequeue_script('wc-credit-card-form');
        wp_dequeue_script('wc-checkout');
        wp_dequeue_script('wc-add-to-cart-variation');
        wp_dequeue_script('wc-single-product');
        wp_dequeue_script('wc-cart');
        wp_dequeue_script('wc-chosen');
        wp_dequeue_script('woocommerce');
        wp_dequeue_script('prettyPhoto');
        wp_dequeue_script('prettyPhoto-init');
        wp_dequeue_script('jquery-blockui');
        wp_dequeue_script('jquery-placeholder');
        wp_dequeue_script('jquery-payment');
        wp_dequeue_script('fancybox');
        wp_dequeue_script('jqueryui');
    }
}

add_action('wp_enqueue_scripts', 'bs_woocommerce_script_cleaner', 99);
add_action('after_setup_theme', 'bs_seo_setup');
add_action('wp_footer', 'my_deregister_scripts');
add_action('wp_enqueue_scripts', 'bs_seo_scripts');
add_filter( 'woocommerce_enqueue_styles', '__return_false' );


