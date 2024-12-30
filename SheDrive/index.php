<?php 
get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">

<section class="banniere">
    <div class="row">
        <div class="col-6"> 
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo sd p-a finale.png" alt="logo" class="logo" width="500" height="150"><br>
            <h2>le covoiturage entre femmes,<br> par des femmes.</h2><br>
            <a href="a_propos.php" class="btn btn-faq banniere-button">Découvrez plus</a>
        </div>
        <div class="col-6">
            <?php
            // Récupérer l'article nommé "image principale - page d'accueil"
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'name' => 'image-principale-page-daccueil' // Slug de l'article
            );
            $query = new WP_Query($args);

            // Afficher l'image mise en avant
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    if (has_post_thumbnail()) :
                        ?>
                      <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="img-fluid banniere-image">
                        <?php
                    endif;
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p>Aucune image trouvée.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="what">
    <div class="container">
        <div class="row align-items-center">
            <!-- Colonne image -->
            <div class="col-md-6 position-relative">
                <?php
                // Récupère l'article avec le slug "image-le-saviez-vous"
                $args = array('name' => 'image-le-saviez-vous', 'post_type' => 'post', 'post_status' => 'publish', 'numberposts' => 1);
                $image_post = get_posts($args);
                if (!empty($image_post)) {
                    echo get_the_post_thumbnail($image_post[0]->ID,'full', array('class' => 'custom-image'));
                }
                ?>
            </div>

             <!-- Colonne texte avec le rectangle -->
             <div class="col-md-6 position-relative text-with-rectangle">
    <div class="text-content">
        <h2 class="text-large bold-text"><strong>SHEDRIVE, C'EST QUOI</strong></h2>
        <p class="text-large">SheDrive est une plateforme de covoiturage dédiée aux femmes.<br>Notre objectif ? Offrir un espace sécurisé et solidaire.</p>
        <h2 class="text-large bold-text"><strong>NOTRE OBJECTIF ?</strong></h2>
        <p class="text-large">Offrir un espace sécurisé, solidaire et pratique pour vos déplacements. Chaque membre bénéficie d’une identification vérifiée pour garantir une confiance mutuelle.</p>
        <p class="text-large">Avec SheDrive, voyagez en toute sérénité, que ce soit pour vos trajets quotidiens ou des voyages plus longs.</p>
    </div>
    <div class="vertical-rectangle"></div> <!-- Rectangle ajouté ici, après le texte -->
</div>
</section>
<section class="did-you-know-section py-5">
    <div class="container text-center">
        <!-- Titre de la section -->
        <h2 class="fw-bold mb-4">LE SAVIEZ-VOUS ?</h2>
        
        <!-- Récupération de l'article pour l'image -->
        <?php
        // Récupérer l'article avec le slug "le-saviez-vous-img"
        $args = array(
            'name' => 'le-saviez-vous-img',
            'post_type' => 'post',
            'post_status' => 'publish',
            'numberposts' => 1
        );
        $image_post = get_posts($args);
        $image_url = !empty($image_post) ? get_the_post_thumbnail_url($image_post[0]->ID, 'full') : '';
        ?>

        <!-- Affichage de l'image avec le cadre -->
        <?php if ($image_url): ?>
            <div class="image-wrapper" style="position: relative;">
                <img src="<?php echo $image_url; ?>" alt="Le saviez-vous ?" class="img-fluid rounded-frame">
            </div>
        <?php else: ?>
            <p>Aucune image trouvée pour cette section.</p>
        <?php endif; ?>
    </div>
</section>
<section class="services-section py-5">
    <div class="container">
        <h2 class="text-center mb-4">NOS SERVICES</h2>
        <p class="text-center mb-5">
            Ce que nous proposons pour améliorer votre expérience de covoiturage
        </p>
        <div class="row">
            <?php
            // Définir les slugs des articles pour chaque service
            $services = [
                'nos-services-img-1' => [
                    'title' => 'Covoiturage Sécurisé',
                    'description' => 'Des trajets entre femmes pour garantir votre sécurité. Avec SheDrive, voyagez sans appréhension grâce à un système conçu pour offrir un environnement sûr.',
                ],
                'nos-services-img-2' => [
                    'title' => 'Communauté Solidaire',
                    'description' => 'Partagez vos expériences avec d’autres femmes bienveillantes. Créez des liens uniques et échangez avec une communauté qui partage vos valeurs.',
                ],
                'nos-services-img-3' => [
                    'title' => 'Engagement Bénévole',
                    'description' => 'Aucun échange financier, basé sur le partage et l’entraide. Ce concept valorise l’esprit d’entraide et encourage une mobilité inclusive.',
                ],
                'nos-services-img-4' => [
                    'title' => 'Trajet sur le Chemin',
                    'description' => 'Les conductrices proposent des places uniquement pour les trajets qu’elles effectuent déjà. Un modèle simple et pratique, sans détour inutile.',
                ],
            ];

            // Boucle pour afficher chaque service
            foreach ($services as $slug => $content) {
                // Récupérer l'article correspondant au slug
                $args = array(
                    'name' => $slug,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'numberposts' => 1
                );
                $service_post = get_posts($args);

                // Récupérer l'URL de l'image à la une
                $image_url = !empty($service_post) ? get_the_post_thumbnail_url($service_post[0]->ID, 'medium') : 'path/to/placeholder.jpg'; // Image par défaut
            ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card text-center">
                    <!-- Image -->
                    <img src="<?php echo $image_url; ?>" alt="<?php echo esc_attr($content['title']); ?>" class="img-fluid rounded-top">
                    <!-- Contenu -->
                    <div class="service-content bg-light-pink p-3">
                        <h5 class="service-title"><?php echo $content['title']; ?></h5>
                        <p><?php echo $content['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="deco">
    <div class="text-center mb-5">
        <?php
        // Récupérer l'article pour la courbe (slug: courbe-img)
        $args_courbe = array(
            'name' => 'courbe-img',
            'post_type' => 'post',
            'post_status' => 'publish',
            'numberposts' => 1
        );
        $courbe_post = get_posts($args_courbe);
        $courbe_url = !empty($courbe_post) ? get_the_post_thumbnail_url($courbe_post[0]->ID, 'full') : '';

        if ($courbe_url): ?>
            <img src="<?php echo $courbe_url; ?>" alt="Courbe décorative" width="1050" height="5">
        <?php else: ?>
            <p>Image de la courbe introuvable.</p>
        <?php endif; ?>
    </div>
</section>

<section class="timeline-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">REJOIGNEZ <span class="highlight">SHEDRIVE</span> EN 5 ÉTAPES :</h2>
        <div class="row">
            <!-- Ligne de temps (image) -->
            <div class="col-lg-2 d-flex justify-content-center">
                <?php
                // Récupérer l'article pour la ligne de temps (slug: ligne-de-temps-img)
                $args_timeline = array(
                    'name' => 'ligne-de-temps-img',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'numberposts' => 1
                );
                $timeline_post = get_posts($args_timeline);
                $timeline_url = !empty($timeline_post) ? get_the_post_thumbnail_url($timeline_post[0]->ID, 'full') : '';

                if ($timeline_url): ?>
                    <img src="<?php echo $timeline_url; ?>" alt="Ligne de temps" class="timeline-image" width="40" height="425">
                <?php else: ?>
                    <p>Image de la ligne de temps introuvable.</p>
                <?php endif; ?>
            </div>
            <!-- Texte des étapes -->
            <div class="col-lg-6">
                <div class="timeline-text">
                    <!-- Étape 1 -->
                    <div class="step-content">
                        <h5>1. Inscription</h5>
                        <p>Créez un compte en remplissant un formulaire avec vos informations personnelles et en téléchargeant une pièce d’identité. Ce processus garantit un accès sécurisé.</p>
                    </div>
                    <!-- Étape 2 -->
                    <div class="step-content">
                        <h5>2. Vérification d'identité</h5>
                        <p>L'équipe SheDrive valide votre identité en quelques heures. Une fois approuvée, vous recevez un e-mail de confirmation pour activer votre compte.</p>
                    </div>
                    <!-- Étape 3 -->
                    <div class="step-content">
                        <h5>3. Connexion</h5>
                        <p>Accédez à la plateforme avec votre e-mail et mot de passe pour commencer à utiliser nos services.</p>
                    </div>
                    <!-- Étape 4 -->
                    <div class="step-content">
                        <h5>4. Rechercher ou créer un trajet</h5>
                        <p>
                            • Trouvez un trajet en indiquant votre point de départ, destination, et horaire souhaité.<br>
                            • Si vous êtes conductrice, proposez un trajet en partageant les détails de votre itinéraire.
                        </p>
                    </div>
                    <!-- Étape 5 -->
                    <div class="step-content">
                        <h5>5. Organiser votre trajet</h5>
                        <p>Utilisez la messagerie intégrée pour discuter avec les autres utilisateurs et finaliser les détails du voyage.</p>
                    </div>
                </div>
            </div>
            <!-- Illustration à droite -->
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png" alt="Illustration" class="timeline-illustration" width="100" height="450">
            </div>
        </div>
    </div>
</section>

<section class="testimonial-section py-5">
  <div class="container">
    <h2 class="text-center mb-5">CE QUE LES AUTRES FEMMES PENSENT DE <span class="highlight">SHEDRIVE</span></h2>
    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
      <!-- Slides dynamiques -->
      <div class="carousel-inner">
        <?php
        // Tableau d'images des témoignages
        $testimonials = [
          get_template_directory_uri() . '/assets/img/temoignage_ikram.png',
          get_template_directory_uri() . '/assets/img/temoignage_delphinem.png',
          get_template_directory_uri() . '/assets/img/temoignage_hawa.png',
        ];
        $active = 'active'; // Pour ajouter la classe active au premier élément
        foreach ($testimonials as $testimonial) : ?>
          <div class="carousel-item <?php echo $active; ?>">
            <img src="<?php echo $testimonial; ?>" class="d-block w-100 testimonial-image" alt="Témoignage">
          </div>
          <?php $active = ''; // Retirer la classe active après la première image ?>
        <?php endforeach; ?>
      </div>
      <!-- Flèches de contrôle -->
      <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
      </a>
      <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>
  </div>
</section>

<section class="contact-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">CONTACTEZ-NOUS DÈS MAINTENANT </h2>
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
