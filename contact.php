<?php 
/* Template Name: contact */
get_header(); ?>

<section class="contact-shedrive">
   <!-- Image principale -->
   <div class="banner-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact_photo.png" 
             alt="Contact" 
             class="img-fluid w-100">
    </div>
</section>

<section class="contact-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">CONTACTEZ-NOUS DÈS MAINTENAT</h2>
        <div class="row">
            <!-- Informations de contact -->
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <div class="contact-info">
                    <h5>NOTRE EMAIL</h5>
                    <p>support-shedrive@gmail.com</p>
                    <h5>INSTAGRAM</h5>
                    <p>@shedrive_be</p>
                    <h5>FACEBOOK</h5>
                    <p>@shedrive_fc</p>
                    <p class="faq-text mt-4">
                        Consultez notre FAQ pour des réponses rapides :
                    </p>
                    <a href="<?php echo esc_url(home_url('/faq')); ?>" class="btn btn-faq">FAQ</a>
                </div>
            </div>
            <!-- Formulaire de contact -->
            <div class="col-lg-6">
                <form action="#" method="post" class="contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nom" placeholder="Nom" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="prenom" placeholder="Prénom" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Mail" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" rows="4" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-send">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>