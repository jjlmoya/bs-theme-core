<?php
function bs_theme_tracking_settings_menu()
{

    add_theme_page('BS Theme: Tracking', 'Tracking', 'manage_options', 'bs_theme_tracking', 'bs_theme_tracking_page');
}

add_action('admin_menu', 'bs_theme_tracking_settings_menu');


function bs_theme_setting_analytics()
{
    ?>
    <input type="text" name="bs_analytics_ua" id="bs_analytics_ua"
           value="<?php echo get_option('bs_analytics_ua'); ?>"/>
<?php }

function bs_theme_tracking_page_setup()
{
    add_settings_section('bs_theme_tracking_section', 'Tracking:', null, 'bs-theme-tracking');
    add_settings_field('bs_analytics_ua', 'Tracking Code (Analytics) (ex: UA-123456-1)', 'bs_theme_setting_analytics', 'bs-theme-tracking', 'bs_theme_tracking_section');

    register_setting('bs_theme_tracking_section', 'bs_analytics_ua');
}

function bs_theme_tracking_page()
{
    ?>

    <div class="wrap">
        <h1>BS Theme Configuration: Tracking</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('bs_theme_tracking_section');
            do_settings_sections('bs-theme-tracking');
            submit_button();
            ?>
        </form>
    </div>
    <?php


}

add_action('admin_init', 'bs_theme_tracking_page_setup');
