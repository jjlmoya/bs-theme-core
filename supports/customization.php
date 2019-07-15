<?php

function bs_custom_logo_setup()
{
    $defaults = array(
        'height' => 100,
        'width' => 100,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'bs_custom_logo_setup');