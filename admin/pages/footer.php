<?php
function bs_theme_footer_settings_menu()
{

    add_theme_page('BS Theme: Footer', 'Footer', 'manage_options', 'bs_theme_footer', 'bs_theme_footer_page');
}

add_action('admin_menu', 'bs_theme_footer_settings_menu');


function bs_theme_callback_contact_email()
{
    ?>
    <input type="email" name="bs_theme_contact_email" id="bs_theme_contact_email"
           value="<?php echo get_option('bs_theme_contact_email'); ?>"/>
<?php }

function bs_theme_callback_contact_address()
{
    ?>
    <input type="text" name="bs_theme_contact_address" id="bs_theme_contact_address"
           value="<?php echo get_option('bs_theme_contact_address'); ?>"/>
<?php }

function bs_theme_callback_contact_email_cta()
{
    ?>
    <input type="text" name="bs_theme_contact_email_cta" id="bs_theme_contact_email_cta"
           value="<?php echo get_option('bs_theme_contact_email_cta'); ?>"/>
<?php }

function bs_theme_callback_about_us_label()
{
    ?>
    <input type="text" name="bs_theme_about_us_label" id="bs_theme_about_us_label"
           value="<?php echo get_option('bs_theme_about_us_label'); ?>"/>
<?php }


function bs_theme_footer_about_us_page_setup()
{

    $section = 'bs_theme_footer_about_us_section';
    $pageAdmin = 'bs-theme-footer';
    $fields = array(
        array(
            'id' => 'contact_email',
            'name' => 'Contact Email'
        ),
        array(
            'id' => 'contact_address',
            'name' => 'Contact Address'
        ),
        array(
            'id' => 'contact_email_cta',
            'name' => 'CTA Email'
        ),
        array(
            'id' => 'about_us_label',
            'name' => 'About Us Label'
        )
    );
    add_settings_section($section, 'About Us:', null, $pageAdmin);
    bs_theme_footer_page_setup($fields, $pageAdmin, $section);
}


function bs_theme_footer_page_setup($fields, $pageAdmin, $section)
{
    foreach ($fields as $field) {
        add_settings_field('bs_theme_' . $field['id'], $field['name'], 'bs_theme_callback_' . $field['id'], $pageAdmin, $section);
        register_setting($section, 'bs_theme_' . $field['id']);
    }
}

function bs_theme_footer_page()
{
    ?>

    <div classs="wrap">
        <h1>BS Theme Configuration: Footer</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('bs_theme_footer_about_us_section');
            do_settings_sections('bs-theme-footer');
            submit_button();
            ?>
        </form>
    </div>
    <?php


}

add_action('admin_init', 'bs_theme_footer_about_us_page_setup');
