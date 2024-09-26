<footer>
    <?php
    if (has_nav_menu('footer')) {
        wp_nav_menu(array(
            'theme_location' => 'footer',   // Localisation du menu défini dans functions.php
            'menu_class'     => 'footer-menu',  // Classe CSS pour le styliser
            'container'      => 'nav',      // Conteneur HTML pour le menu (optionnel)
            'container_class' => 'footer-nav-container' // Classe CSS du conteneur (optionnel)
        ));
    }
    ?>

</footer>

</body>

</html>