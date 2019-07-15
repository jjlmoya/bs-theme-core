<?php
function bs_theme_splash_settings_menu()
{

    add_theme_page('BS Theme: Splash', 'Splash', 'manage_options', 'bs_theme_splash', 'bs_theme_splash_page');
}

add_action('admin_menu', 'bs_theme_splash_settings_menu');


function bs_theme_callback_allow_splash()
{
    $allowedSplash = get_option('bs_theme_allow_splash');
    ?>
    <input type="checkbox"
           name="bs_theme_allow_splash"
           id="bs_theme_allow_splash" <?php echo !empty($allowedSplash) ? 'checked="checked"' : '' ?> />
    <?php
}

function bs_theme_splash_loading_page_setup()
{

    $section = 'bs_theme_splash_loading_section';
    $pageAdmin = 'bs-theme-splash';
    $fields = array(
        array(
            'id' => 'allow_splash',
            'name' => 'Habilitar Splash'
        )
    );
    add_settings_section($section, 'Splash Configuration:', null, $pageAdmin);
    bs_theme_splash_page_setup($fields, $pageAdmin, $section);
}


function bs_theme_splash_page_setup($fields, $pageAdmin, $section)
{
    foreach ($fields as $field) {
        add_settings_field('bs_theme_' . $field['id'], $field['name'], 'bs_theme_callback_' . $field['id'], $pageAdmin, $section);
        register_setting($section, 'bs_theme_' . $field['id']);
    }
}

function bs_theme_splash_page()
{
    ?>s

    <div classs="wrap">
        <h1>BS Theme Configuration: Splash</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('bs_theme_splash_loading_section');
            do_settings_sections('bs-theme-splash');
            submit_button();
            ?>
        </form>
    </div>
    <?php


}

add_action('admin_init', 'bs_theme_splash_loading_page_setup');
