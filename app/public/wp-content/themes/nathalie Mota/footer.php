<footer>
    <?php
    if (has_nav_menu('footer')) {
        wp_nav_menu(array(
            'theme_location' => 'footer',   // Localisation du menu défini dans functions.php
            'menu_class'     => 'footer-menu'  // Classe CSS pour le styliser

        ));
    }
    ?>
    <?php get_template_part('template-part/modal-contact'); ?>
 
</footer>
<?php wp_footer() ?>
</body>

</html>