<?php

require_once get_template_directory(dirname(__FILE__)) . '/service/ThemeService.php';

function bs_theme_colors_settings_menu()
{

    add_theme_page('BS Theme: Brand & Colors', 'Brand & Colors', 'manage_options', 'bs_theme_colors', 'bs_theme_colors_page');

}

add_action('admin_menu', 'bs_theme_colors_settings_menu');

function bs_theme_setting_theme()
{
    $brands = ThemeService::$brands;
    $selectedBrand = get_option('bs_theme_brand');
    ?>
    <select name="bs_theme_brand" id="bs_theme_brand">
        <?
        foreach ($brands as $brand) {
            ?>
            <option value="<? echo $brand; ?>" <?
            echo $brand === $selectedBrand ? 'selected=' : '' ?>><? echo $brand; ?></option>
            <?
        }
        ?>
    </select>

<?php }

function bs_theme_color_page_setup()
{
    add_settings_section('bs_theme_brand_section', 'Colors & Styles:', null, 'bs-theme-color');
    add_settings_field('bs_theme_brand', 'Theme', 'bs_theme_setting_theme', 'bs-theme-color', 'bs_theme_brand_section');

    register_setting('bs_theme_brand_section', 'bs_theme_brand');
}


function bs_theme_colors_page()
{ ?>
    <div class="wrap">
        <h1>BS Theme Configuration: Colors & Brand</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('bs_theme_brand_section');
            do_settings_sections('bs-theme-color');
            submit_button();
            ?>
        </form>
    </div>

    <?php

}

add_action('admin_init', 'bs_theme_color_page_setup');
