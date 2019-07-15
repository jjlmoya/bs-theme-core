<?php

require_once get_template_directory(dirname(__FILE__)) . '/service/ThemeService.php';

function bs_theme_layout_settings_menu()
{

    add_theme_page('BS Theme: Layout & Pages', 'Layout & Pages', 'manage_options', 'bs_theme_layout', 'bs_theme_layout_page');

}

add_action('admin_menu', 'bs_theme_layout_settings_menu');

function bs_theme_setting_layout()
{
    $themeService = new ThemeService();
    $selectedlayout = get_option('bs_theme_layout');
    ?>
    <select name="bs_theme_layout" id="bs_theme_layout">
        <?
        foreach ($themeService->get_layouts() as $layout) {
            ?>
            <option value="<? echo $layout['id']; ?>" <?
            echo $layout['id'] === $selectedlayout ? 'selected=' : '' ?>><? echo $layout['name']; ?></option>
            <?
        }
        ?>
    </select>
<?php }

function bs_theme_layout_page_setup()
{
    add_settings_section('bs_theme_layout_section', 'layout & Styles:', null, 'bs-theme-layout');
    add_settings_field('bs_theme_layout', 'Theme', 'bs_theme_setting_layout', 'bs-theme-layout', 'bs_theme_layout_section');

    register_setting('bs_theme_layout_section', 'bs_theme_layout');
}


function bs_theme_layout_page()
{ ?>
    <div class="wrap">
        <h1>BS Theme Configuration: layout & layout</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('bs_theme_layout_section');
            do_settings_sections('bs-theme-layout');
            submit_button();
            ?>
        </form>
    </div>

    <?php

}

add_action('admin_init', 'bs_theme_layout_page_setup');
