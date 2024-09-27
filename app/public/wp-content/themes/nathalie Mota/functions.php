<?php
function register_my_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Menu principal', 'text-domain'),
            'footer' => __('pied de page', 'text-domain')
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');

function my_theme_enqueue_styles()
{
    // Charger le fichier style.css principal
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Charger un fichier CSS personnalisé (par exemple custom.css)
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/custom.css', array('main-style'), filemtime(get_template_directory() . '/custom.css'), 'all');

    // Enregistrement du JavaScript
    wp_enqueue_script('modal-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Shortcode pour afficher l'image du header de contact
function display_contact_header_image()
{
    $image_url = get_template_directory_uri() . '/assets/images/Contact header.png';
    return '<img src="' . esc_url($image_url) . '" alt="Contact Header" class="contact-header-image">';
}
add_shortcode('contact_header_image', 'display_contact_header_image');
