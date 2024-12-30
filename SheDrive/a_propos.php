<?php 
/* Template Name: a_propos */
get_header(); ?>

<section class="about-shedrive">
    <!-- Image principale -->
    <div class="banner-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_picture.png" 
             alt="À propos de SheDrive" 
             class="img-fluid w-100">
    </div>

 <!-- Section "Notre Histoire" -->
 <div class="container py-5">
    <div class="title">
    <h1 class="text-center mb-5"><strong>NOTRE HISTOIRE</strong></h1>
    </div>
        <div class="row align-items-center">
            <!-- Image -->
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/history.png" 
                     alt="Conductrice SheDrive" 
                     class="img-fluid rounded">
            </div>

            <!-- Texte -->
            <div class="col-md-5">
                <p>
                    <strong>SheDrive</strong> est né d’un constat simple : de nombreuses femmes recherchent un moyen de transport sûr et solidaire pour leurs déplacements.
                </p>
                <p>
                    Tout a commencé avec l’idée de créer un espace où les femmes peuvent voyager sans crainte, en se sentant soutenues et respectées. Nous savons que le monde des transports peut parfois sembler intimidant, voire dangereux pour certaines femmes, c’est pourquoi <strong>SheDrive</strong> a été conçu pour répondre spécifiquement à leurs besoins.
                </p>
                <p>
                    Nous souhaitons non seulement résoudre un problème de sécurité, mais aussi bâtir une communauté forte et bienveillante, où chaque trajet devient une opportunité d’échange et de solidarité. Que vous soyez une conductrice prête à partager vos trajets ou une passagère en quête de confort et de sérénité, notre plateforme a été pensée pour vous.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="deco">
<div class="text-center mb-5"><img src="<?php echo get_template_directory_uri() ?>/assets/img/deco.png" alt="Ligne décoratrice" width="1050" height="5"></div>
</section>



<section class="team-section py-5">
    <div class="container text-center">
        <!-- Titre principal -->
        <h1 class="mb-4"><strong>NOTRE ÉQUIPE</strong></h1>
        
        <!-- Texte d'introduction -->
        <p class="intro-text mb-5">
            SheDrive est porté par une petite mais passionnée équipe de deux personnes, unies par une vision commune : créer une plateforme qui change la manière dont les femmes voyagent. 
            Nous mettons tout en œuvre pour offrir une expérience sûre, solidaire et intuitive.
        </p>
        
        <!-- Titre des membres -->
        <h2 class="subtitle mb-4">Fondatrices et Responsables du Projet</h2>
        
        <!-- Image des membres -->
        <div class="team-image mb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/notre équipe.png" 
                 alt="Fondatrices SheDrive" 
                 class="img-fluid rounded">
        </div>
        
        <!-- Texte sous les membres -->
        <p class="team-description">
            Ensemble, nous gérons tous les aspects de SheDrive : stratégie, développement, design, communication, et gestion de la communauté. 
            Nos compétences complémentaires et notre engagement envers la sécurité des femmes nous permettent de relever chaque défi avec confiance.
        </p>
    </div>
</section>

       <!-- Section Nos Missions -->
<section class="missions-section py-5">
    <div class="container text-center">
        <!-- Titre -->
        <h2 class="mb-4"><strong>NOS MISSIONS</strong></h2>
        <!-- Texte introductif -->
        <p class="intro-text mb-5">
            Chez SheDrive, notre mission est de révolutionner la mobilité des femmes à travers trois grands axes :
        </p>
        <div class="row align-items-center">
            <!-- Texte des missions -->
            <div class="col-md-8 text-start">
                <ul class="missions-list list-unstyled">
                    <li class="mb-5">
                        <strong>1. Assurer la sécurité :</strong><br>
                        Offrir un environnement de confiance grâce à la vérification des profils, un système de notation et une gestion sécurisée des données.
                    </li>
                    <li class="mb-5">
                        <strong>2. Créer une communauté solidaire :</strong><br>
                        Favoriser les échanges bienveillants entre utilisatrices et renforcer les liens grâce à une plateforme dédiée à l’entraide et au partage.
                    </li>
                    <li>
                        <strong>3. Simplifier la mobilité :</strong><br>
                        Proposer une alternative pratique et accessible pour les déplacements, sans échange financier, tout en valorisant un modèle durable et responsable.
                    </li>
                </ul>
            </div>
            <!-- Icône des missions -->
            <div class="col-md-4 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/target.png" 
                     alt="Objectif SheDrive" 
                     class="img-fluid" 
                     width="150" height="150">
            </div>
        </div>
    </div>
</section>

<section class="deco">
<div class="text-center mb-5"><img src="<?php echo get_template_directory_uri() ?>/assets/img/deco.png" alt="Ligne décoratrice" width="1050" height="5"></div>
</section>

<section class="timeline-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">REJOIGNEZ <span class="highlight">SHEDRIVE</span> EN 5 ÉTAPES :</h2>
        <div class="row">
            <!-- Ligne de temps (image) -->
            <div class="col-lg-2 d-flex justify-content-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/steps.png" alt="Ligne de temps" class="timeline-image" width="40" height="425">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png" w alt="Illustration" class="timeline-illustration" width="100" height="450">
            </div>
        </div>
    </div>
</section>

<section class="deco">
<div class="text-center mb-5"><img src="<?php echo get_template_directory_uri() ?>/assets/img/deco.png" alt="Ligne décoratrice" width="1050" height="5"></div>
</section>

<div class="container">
        <div class="title">
            <h1 class="text-center mb-5"><strong>REJOIGNEZ-NOUS !</strong></h1>
        </div>
        <p class="text-center mb-5">Prête à rejoindre la communauté SheDrive et voyager en toute confiance ? 
            <br>Inscrivez-vous dès maintenant :</p>
        <p class="text-center mb-5"><a href="inscription.php" class="btn btn-faq">Inscription</a></p>
</div>

<?php get_footer(); ?>