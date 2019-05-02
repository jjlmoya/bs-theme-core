<?php
require_once get_template_directory(dirname(__FILE__)) . '/service/NavService.php';
$nav = new NavService('footer');


?>

<footer class="og-footer-classic a-bg--dark l-flex l-flex--wrap a-pad u-shadow--top">
    <?php echo $nav->getFooterElements() ?>
</footer>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128687860-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-128687860-2');
</script>