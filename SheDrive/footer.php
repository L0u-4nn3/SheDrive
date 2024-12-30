<?php wp_footer(); ?>

<footer>

   <!-- Section Newsletter -->
<div class="newsletter-section" style="position: relative; height: 400px; overflow: hidden; text-align: center; background-color: #d4b5b6;">
    <?php
    // Récupérer l'article avec le slug "newsletter-ing"
    $args = array(
        'name' => 'newsletter-ing',
        'post_type' => 'post',
        'post_status' => 'publish',
        'numberposts' => 1
    );
    $newsletter_post = get_posts($args);

    // Si l'article est trouvé, afficher l'image mise en avant
    if (!empty($newsletter_post) && has_post_thumbnail($newsletter_post[0]->ID)) :
        $image_url = get_the_post_thumbnail_url($newsletter_post[0]->ID, 'full');
    ?>
        <img src="<?php echo esc_url($image_url); ?>" alt="Newsletter" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
    <?php endif; ?>

    <!-- Contenu texte de la newsletter -->
    <div class="container text-overlay" style="position: relative; z-index: 1; top: 50%; transform: translateY(-50%); color: white; max-width: 600px; margin: 0 auto; text-align: center;">
        <h2>Inscrivez-vous à notre Newsletter</h2>
        <p>Ne manquez rien ! Recevez les dernières infos et restez connectée avec la communauté SheDrive.</p>
        <form class="newsletter-form" style="display: flex; justify-content: center; gap: 10px;">
            <input type="email" class="newsletter-input" placeholder="Votre email" required style="padding: 10px; width: 60%; border: none; border-radius: 5px;">
            <button type="submit" class="btn btn-newsletter" style="padding: 10px 20px; background-color: #c69798; border: none; color: white; cursor: pointer;">➤</button>
        </form>
    </div>
</div>

    <!-- Section Footer Principal -->
    <div class="footer-main">
        <div class="container d-flex justify-content-between align-items-start">
            <!-- Logo et RGPD -->
            <div class="footer-logo">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo sd p-a finale.png'); ?>" alt="SheDrive Logo" width="275" height="75">
                <p><a href="<?php echo esc_url(home_url('/rgpd')); ?>">Règlement RGPD et protection des données</a></p>
            </div>

            <!-- Contact -->
            <div class="footer-contact">
                <h5>CONTACT</h5>
                <p><a href="mailto:support@shedrive.be">support@shedrive.be</a></p>
            </div>

            <!-- Service Client -->
            <div class="footer-service">
                <h5>SERVICE CLIENT</h5>
                <p><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></p>
                <p><a href="<?php echo esc_url(home_url('/faq')); ?>">Aide & FAQ</a></p>
            </div>

            <!-- Réseaux Sociaux -->
            <div class="footer-reseaux">
                <h5>RÉSEAUX</h5>
                <p><a href="https://instagram.com/shedrive_be" target="_blank">@shedrive_be</a></p>
                <p><a href="https://facebook.com/shedrive_fc" target="_blank">@shedrive_fc</a></p>
            </div>
        </div>
    </div>

    <!-- Mention Légale -->
    <div class="footer-legal text-center">
        © SheDrive - Tous droits réservés.
    </div>
</footer>
