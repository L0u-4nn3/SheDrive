<?php 
/* Template Name: inscription */
get_header(); ?>

<section class="inscription-shedrive">
   <!-- Image principale -->
   <div class="banner-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inscription_photo.png" 
             alt="Inscription" 
             class="img-fluid w-100">
    </div>
</section>

<section class="contact-section py-5">
    <div class="container">
        <div class="title">
        <h1 class="text-center mb-5"><strong>INSCRIPTION</strong></h1>
        </div>
        <p class="text-center mb-5"> Rejoignez nous dès maintenant en remplissant le formulaire ci-dessous et nous l’envoyer.
<br>Nous vous recontacterons afin de vérifier votre identité.
Toutes les femmes, y compris les femmes trans, sont les bienvenues.
Veuillez fournir une pièce d’identité valide lors de la vérification.
Quand votre identité sera validé, nous vous enverrons un code d’activation
pour que vous puissiez faire parti intégrante de la communauté SheDrive ! 
</p>
        <div class="row">
            <!-- Formulaire de contact -->
            <div class="col-mb-5">
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
                        <input type="text" class="form-control" id="pseudo" placeholder="Pseudo" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="birthday" placeholder="Date de naissance" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="password" placeholder="Mot de passe" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Confirmer mot de passe" required>
                    </div>
                    <form class="form-upload" method="post" enctype="multipart/form-data">
        <div class="upload-container">
            <label for="id-upload" class="upload-label">
                <span>Pièce d'identité</span>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/camera_icon.png'); ?>" alt="Icône caméra" class="camera-icon">
            </label>
            <input type="file" id="id-upload" class="upload-input" name="identity_file" accept=".jpg, .png, .pdf" required>
            <p>Veuillez télécharger une photo de votre pièce d’identité (recto / verso)</p>
            <small>(Formats acceptés : JPG, PNG, PDF)</small>
        </div>
        <p class="info-text">
            La pièce d’identité sera définitivement supprimée de nos bases dès la vérification de votre inscription
        </p>
        <div class="terms-container">
            <input type="checkbox" id="terms" name="accept_terms" required>
            <label for="terms">J’accepte les <a href="/conditions-generales" target="_blank">conditions générales</a></label>
        </div>
        <button type="submit" class="btn btn-send">Envoyer</button>
    </form>
                <p class="text-center login-link">
                <strong>Vous avez déjà un compte ? <a href="/login">connectez-vous ici</a>
                </strong></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>