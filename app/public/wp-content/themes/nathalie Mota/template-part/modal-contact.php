<div id="contactModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>

        <!-- Ajout de l'image au-dessus du formulaire -->
        <div class="modal-header">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Contact header.png" alt="Contact Header">
        </div>

        <!-- Utilisation du shortcode pour afficher l'image -->
        <div class="modal-header">
            <?php echo do_shortcode('[contact_header_image]'); ?>
        </div>

        <!-- Formulaire Contact Form 7 -->
        <?php echo do_shortcode('[contact-form-7 id="2b2072e" title="Contact form 1"]'); ?>
    </div>
</div>