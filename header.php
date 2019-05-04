<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="UmQSGMihPdUb0lHaMY5ptFS2u0oQkfK5UGiHwqGG4_U"/>
</head>
<body <?php body_class('p-wordpress sky'); ?>>
<?php
require_once get_template_directory(dirname(__FILE__)) . '/service/ModelService.php';
new ModelService('ImageOptimizer');
?>
<div>