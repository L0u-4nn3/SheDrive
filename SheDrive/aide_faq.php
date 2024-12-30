
<?php 
/* Template Name: aide_faq */
get_header(); ?>

<section class="faq-shedrive">
   <!-- Image principale -->
   <div class="banner-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/faq_photo.png" 
             alt="Aide & FAQ" 
             class="img-fluid w-100">
    </div>
</section>

<div class="container">
    <div class="title">
    <h1 class="text-center mb-5"><strong>AIDE & FAQ</strong></h1>
    </div>
    <p class="text-center mb-5">Bienvenue dans notre centre d'aide ! Vous trouverez ici les réponses aux questions fréquentes ainsi que des outils pour vous guider dans l'utilisation de SheDrive.</p>

    <div class="container mt-5">
        <!-- Section: Questions générales -->
        <h2 class="mt-4">QUESTIONS GÉNÉRALES</h2>
        <div class="accordion" id="generalAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        Qu’est-ce que SheDrive ?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#generalAccordion">
                    <div class="accordion-body">
                        SheDrive est une plateforme de covoiturage dédiée aux femmes, offrant un environnement sécurisé et convivial pour organiser des trajets entre conductrices et passagères.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Comment m’inscrire ?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#generalAccordion">
                    <div class="accordion-body">
                        Pour vous inscrire, cliquez sur "Inscription" sur la page d'accueil. Renseignez vos informations personnelles, vérifiez votre adresse e-mail, et vous pourrez commencer à utiliser la plateforme.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Comment fonctionne la vérification d’identité ?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#generalAccordion">
                    <div class="accordion-body">
                        La vérification d’identité se fait via un processus sécurisé. Vous devrez fournir une pièce d’identité officielle pour que votre profil soit validé.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Quelles sont les politiques de vérification pour les femmes transgenres ?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#generalAccordion">
                    <div class="accordion-body">
                        Nous incluons toutes les femmes, y compris les femmes transgenres. Les mêmes politiques de vérification d’identité s’appliquent, et nous encourageons un environnement inclusif et respectueux.
                    </div>
                </div>
            </div>
        </div>
        <!-- Section: Utilisation de la plateforme -->
        <h2 class="mt-5">UTILISATION DE LA PLATEFORME</h2>
        <div class="accordion" id="platformAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        Comment rechercher un trajet ?
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#platformAccordion">
                    <div class="accordion-body">
                        Les utilisatrices peuvent rechercher un trajet sur la page "Trajets", où un système de filtres est disponible pour affiner les résultats selon leurs préférences.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        Comment publier un trajet ?
                    </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#platformAccordion">
                    <div class="accordion-body">
                        Les utilisatrices peuvent rechercher un trajet sur la page “Trajets”, où un système de filtres est disponible pour affiner les résultats selon leurs préférences 
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading7">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        Comment contacter une conductrice ou une passagère ?
                    </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#platformAccordion">
                    <div class="accordion-body">
                        Une fois un trajet réservé, vous pouvez utiliser le chat intégré pour contacter la conductrice ou la passagère.
                    </div>
                </div>
            </div>
        </div>
            <!-- Section: Sécurité et confidentialité -->
        <h2 class="mt-5">SÉCURITÉ ET CONFIDENTIALITÉ</h2>
        <div class="accordion" id="securityAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading8">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                        Quelles sont les mesures de sécurité mises en place ?
                    </button>
                </h2>
                <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#securityAccordion">
                    <div class="accordion-body">
                        SheDrive garantit un environnement sûr grâce à la vérification des profils des utilisatrices et la modération des trajets et des évaluations. 
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading9">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                        Comment signaler un problème ou un comportement inapproprié ?
                    </button>
                </h2>
                <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#securityAccordion">
                    <div class="accordion-body">
                        Vous pouvez signaler un problème via l’onglet "Signaler un problème" sur votre tableau de bord. Tous les signalements sont pris en compte rapidement.
                    </div>
                </div>
            </div>
        </div>
           <!-- Section: Assistance techniques -->
        <h2 class="mt-5">ASSISTANCE TECHNIQUES</h2>
        <div class="accordion" id="technicalAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading10">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                        Je n’arrive pas à me connecter, que faire ?
                    </button>
                </h2>
                <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#technicalAccordion">
                    <div class="accordion-body">
                        Vérifiez que votre adresse e-mail et votre mot de passe sont corrects. Si le problème persiste, utilisez l’option "Mot de passe oublié".
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading11">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                        Que faire si j’ai oublié mon mot de passe ?
                    </button>
                </h2>
                <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#technicalAccordion">
                    <div class="accordion-body">
                        Cliquez sur "Mot de passe oublié" sur la page de connexion et suivez les instructions pour réinitialiser votre mot de passe.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading12">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                        Comment mettre à jour mes informations personnelles ?
                    </button>
                </h2>
                <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#technicalAccordion">
                    <div class="accordion-body">
                        Allez dans votre tableau de bord, cliquez sur "Profil", puis sur "Modifier". Vous pourrez alors mettre à jour vos informations.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="deco">
<div class="text-center mb-5"><img src="<?php echo get_template_directory_uri() ?>/assets/img/deco.png" alt="Ligne décoratrice" width="1050" height="5"></div>
</section>

<section class="contact-section py-5">
    <div class="container">
        <p class="text-center mb-5">Vous n’avez pas trouvé votre réponse ?
        <br>Contactez-nous directement, et nous vous répondrons dans les plus brefs délais !</p>
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
                        <textarea class="form-control" id="message" rows="4" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-send">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>