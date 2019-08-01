<header class="og-logo-inline
    a-bg--mono-0
    l-flex l-grid-column--full
    u-layer-3 u-shadow--bottom l-position
    bs_viewport">
    <a href="/">
        <?php
        if (function_exists('the_custom_logo')) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            if (!empty($logo))
                $image = new ImageOptimizer('', 'Bonseo', 'Bonseo', 'Logo Bonseo');
            $image->modifier = 'l-column--1-1 l-position--absolute  a-pad-0';
            $image->fullUrl = esc_url($logo[0]);
            $image->imageModifier = 'a-image l-position--absolute l-position--absolute--center-x og-logo-inline__image';
            {
                echo $image->render();
            }
        }
        ?>
    </a>
    <!--
    <nav class="og-logo-inline__navigation og-logo-inline__navigation--left l-flex l-flex-item--align-center l-column--1-1 l-flex--justify-end">
        <a href="/bonseo/servicios"
           class="a-text a-text--link a-text--capitalize og-logo-inline__navigation__link">Servicios</a>
        <a href="/bonseo/hazlo-tu-mismo"
           class="a-text a-text--link a-text--capitalize og-logo-inline__navigation__link">DIY</a>
    </nav>
    <nav class="og-logo-inline__navigation og-logo-inline__navigation--right l-flex l-flex-item--align-center l-column--1-1 l-flex--justify-start">
        <a href="/bonseo/seo"
           class="a-text a-text--link a-text--capitalize og-logo-inline__navigation__link">SEO</a>
        <a href="/bonseo/cursos"
           class="a-text a-text--link a-text--capitalize og-logo-inline__navigation__link">Cursos</a>
    </nav>
    -->
    <div class="og-logo-inline__mobile__menu a-svg a-svg--secondary l-position--absolute l-position--absolute--center-x">
        <svg class="a-svg--burger" enable-background="new 0 0 300 300" height="512" viewBox="0 0 300 300"
             width="512"
             xmlns="http://www.w3.org/2000/svg">
            <path d="m121.297 146h-62.594c-11.414 0-20.703-9.289-20.703-20.703v-62.594c0-11.414 9.289-20.703 20.703-20.703h62.594c11.414 0 20.703 9.289 20.703 20.703v62.594c0 11.414-9.289 20.703-20.703 20.703zm-62.594-88c-2.594 0-4.703 2.109-4.703 4.703v62.594c0 2.594 2.109 4.703 4.703 4.703h62.594c2.594 0 4.703-2.109 4.703-4.703v-62.594c0-2.594-2.109-4.703-4.703-4.703z"/>
            <path d="m241.297 146h-62.594c-11.414 0-20.703-9.289-20.703-20.703v-62.594c0-11.414 9.289-20.703 20.703-20.703h62.594c11.414 0 20.703 9.289 20.703 20.703v62.594c0 11.414-9.289 20.703-20.703 20.703zm-62.594-88c-2.594 0-4.703 2.109-4.703 4.703v62.594c0 2.594 2.109 4.703 4.703 4.703h62.594c2.594 0 4.703-2.109 4.703-4.703v-62.594c0-2.594-2.109-4.703-4.703-4.703z"/>
            <path d="m121.297 258h-62.594c-11.414 0-20.703-9.289-20.703-20.703v-62.594c0-11.414 9.289-20.703 20.703-20.703h62.594c11.414 0 20.703 9.289 20.703 20.703v62.594c0 11.414-9.289 20.703-20.703 20.703zm-62.594-88c-2.594 0-4.703 2.109-4.703 4.703v62.594c0 2.594 2.109 4.703 4.703 4.703h62.594c2.594 0 4.703-2.109 4.703-4.703v-62.594c0-2.594-2.109-4.703-4.703-4.703z"/>
            <path d="m241.297 258h-62.594c-11.414 0-20.703-9.289-20.703-20.703v-62.594c0-11.414 9.289-20.703 20.703-20.703h62.594c11.414 0 20.703 9.289 20.703 20.703v62.594c0 11.414-9.289 20.703-20.703 20.703zm-62.594-88c-2.594 0-4.703 2.109-4.703 4.703v62.594c0 2.594 2.109 4.703 4.703 4.703h62.594c2.594 0 4.703-2.109 4.703-4.703v-62.594c0-2.594-2.109-4.703-4.703-4.703z"/>
        </svg>
    </div>
</header>
<nav class="og-menu-classic bs_state a-pad l-position a-bg--gradient--light u-layer-4"
     data-close=".og-menu-classic__close, .bs_overflow_layer"
     data-block="true"
     data-active=".og-logo-inline__mobile__menu">
    <div class="og-menu-classic__close a-text--secondary">
        X
    </div>
    <!--
    <nav class="og-menu-classic__navigation
                a-mar--top-40
                l-flex l-flex--direction-column l-flex--align-center a-pad">
        <a class="og-menu-classic__element
             a-text a-text--secondary a-text--link a-text--link--secondary
            a-pad--bottom" href="#"> Enlace 0</a>
        <a class="og-menu-classic__element
             a-text a-text--secondary a-text--link a-text--link--secondary
            a-pad--bottom" href="#"> Enlace 1</a>
        <a class="og-menu-classic__element
             a-text a-text--secondary a-text--link a-text--link--secondary
            a-pad--bottom" href="#"> Enlace 2</a>
        <a class="og-menu-classic__element
             a-text a-text--secondary a-text--link a-text--link--secondary
            a-pad--bottom" href="#"> Enlace 3</a>
        <a class="og-menu-classic__element
             a-text a-text--secondary a-text--link a-text--link--secondary
            a-pad--bottom" href="#"> Enlace 4</a>
        <a class="og-menu-classic__element
             a-text a-text--secondary a-text--link a-text--link--secondary
            a-pad--bottom" href="#"> Enlace 5</a>
        <a class="og-menu-classic__element
             a-text a-text--secondary a-text--link a-text--link--secondary
            a-pad--bottom" href="#"> Enlace 6</a>
        <a class="og-menu-classic__element
             a-text a-text--secondary a-text--link a-text--link--secondary
            a-pad--bottom" href="#"> Enlace 7</a>
        <a class="og-menu-classic__element
             a-text a-text--secondary a-text--link a-text--link--secondary
            a-pad--bottom" href="#"> Enlace 8</a>
        <a class="og-menu-classic__element
             a-text a-text--secondary a-text--link a-text--link--secondary
            a-pad--bottom" href="#"> Enlace 9</a>
    </nav>
    -->
</nav>
