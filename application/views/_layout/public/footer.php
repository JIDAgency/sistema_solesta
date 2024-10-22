    <!-- Javascript Files -->
    <script src="app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="app-assets/js/designesia.js" type="text/javascript"></script>
    <script src="app-assets/js/swiper.js" type="text/javascript"></script>
    <script src="app-assets/js/custom-marquee.js" type="text/javascript"></script>
    <script src="app-assets/js/custom-swiper-1.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>

    <?php if (isset($scripts) && is_array($scripts)) : ?>
        <?php foreach ($scripts as $script) : ?>
            <script type="text/javascript" src="<?php echo !$script['es_rel'] ? $script['src'] : base_url() . 'assets/js/' . $script['src']; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

</body>

</html>