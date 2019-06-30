<?php
require_once get_template_directory(dirname(__FILE__)) . '/service/NavService.php';
$nav = new NavService('footer');
?>
    <footer class="og-footer-classic a-bg--dark l-flex l-flex--wrap a-pad u-shadow--top">
        <?php echo $nav->getFooterElements() ?>
    </footer>

<?php
$trackingCode = get_option('bs_analytics_ua');
if (!empty($trackingCode)) {
    ?>e
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<? echo get_option('bs_analytics_ua') ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', <? echo get_option('bs_analytics_ua') ?>);
    </script>e
    <?
}
?>