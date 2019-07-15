<?php


if (function_exists('the_custom_logo') && !empty(get_option('bs_theme_allow_splash'))) {
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    ?>
    <section class="og-banner-screen
                l-position--fixed
                a-bg--gradient--light
                l-grid-column--full
                l-flex l-flex--align-center l-flex--direction-column l-flex--justify-center bs_splash_screen a-splash a-splash--fade u-layer-5 a-bg--light">
        <div class="og-banner-screen__logo l-position
                u-shadow--bottom
                a-bg--mono-0
                l-flex l-flex--justify-center l-flex--align-center
                a-border--rounded">
            <picture class="a-text--center bs_viewport a-mi a-mi--float bs_viewport a-pad-0">
                <img class="a-image og-banner-screen__image a-image--cover a-mar-auto"
                     src="<? echo esc_url($image[0]) ?>">
            </picture>
        </div>
    </section>

    <?php
}
?>