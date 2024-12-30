<?php 
/* Template Name: connexion */
get_header();  ?>

<section class="contact-shedrive">
   <!-- Image principale -->
   <div class="banner-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/connexion.png" 
             alt="Connexion" 
             class="img-fluid w-100">
    </div>
</section>

<section class="contact-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">CONNEXION</h2>
        <p class="text-center mb-5">Premier trajet ou retour à vos habitudes ?
        <br>Connectez-vous et profitez de SheDrive, une communauté solidaire et sécurisée.</p>
        <div class="row">
            <!-- Formulaire de contact -->
            <div class="col-mb-5">
                <form action="#" method="post" class="contact-form">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Mot De Passe" required>
                    </div>
                    <button type="submit" class="btn btn-send">Se connecter</button>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>