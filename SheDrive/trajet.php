<?php 
/* Template Name: trajet */
get_header(); ?>

<section class="trajet-shedrive">
   <!-- Image principale -->
   <div class="banner-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trajet_photo.png" 
             alt="Trajet" 
             class="img-fluid w-100">
    </div>
</section>

<div class="trajet-page">
        <section class="container mt-4 text-center">
            <div class="title">
            <h1 class="section-title"><strong>PROPOSEZ VOTRE TRAJET</strong></h1>
            </div>
            <p class="section-description">
                Un trajet à proposer ? Indiquez votre itinéraire et laissez les passagères trouver leur place à vos côtés
            </p>
        </section>
        <div class="container d-flex justify-content-center mt-5">
            <div class="form-container p-4">
                <form>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control input-field" placeholder="Point de départ">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control input-field" placeholder="Destination">
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <input type="date" class="form-control input-field">
                        </div>
                        <div class="col-md-6">
                            <input type="time" class="form-control input-field">
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <select class="form-control input-field select-field">
                                <option selected>Nombre de places</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control input-field" rows="3" placeholder="Informations complémentaires"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-send">Publier</button>
                </form>
            </div>
        </div>
    </div>

    <section class="search-section py-5">
    <div class="container text-center">
        <!-- Titre principal -->
        <h2 class="mb-3">RECHERCHER UN TRAJET</h2>
        <p class="mb-5">Recherchez rapidement un trajet en utilisant nos filtres par ville, date ou nombre de places.</p>
        <div class="row justify-content-center">
            <!-- Carte de recherche -->
            <div class="col-md-8">
                <div class="card p-4" style="background-color: #f5ebe7; border-radius: 10px;">
                    <form>
                        <div class="mb-3 row align-items-center">
                            <label for="departure" class="col-sm-4 col-form-label text-start">Point de départ :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="departure" placeholder="Ex : Schaerbeek">
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label for="destination" class="col-sm-4 col-form-label text-start">Destination :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="destination" placeholder="Ex : Grimbergen">
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label for="date" class="col-sm-4 col-form-label text-start">Date :</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="date">
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label for="seats" class="col-sm-4 col-form-label text-start">Nombre de places :</label>
                            <div class="col-sm-8">
                                <select class="form-select" id="seats">
                                    <option value="" disabled selected>Choisir...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-4 py-2" style="background-color: #d8b1b6; border: none; border-radius: 5px;">
                                Chercher
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="deco">
    <div class="text-center mb-5"><img src="<?php echo get_template_directory_uri() ?>/assets/img/deco.png" alt="Ligne décoratrice" width="1050" height="5"></div>
</section>

<section class="container my-5">
    <h2 class="text-center mb-4">LES TRAJETS PROPOSÉS</h2>
    <p class="text-center mb-5">
        Besoin de vous déplacer ? Explorez les trajets disponibles et choisissez celui qui correspond à vos besoins.
    </p>

    <?php
    // Exemple de trajets (remplacez par une requête à votre base de données)
    $trajets = [
        [
            'nom' => 'Clara',
            'age' => 19,
            'photo' => 'profile1.jpg',
            'depart' => 'Uccle',
            'destination' => 'Ganshoren',
            'date' => '18 Janvier 2025',
            'heure' => 'Vers 21h',
            'places' => '02',
            'info' => 'Bonjour à toutes, je propose un trajet à destination de Ganshoren le Samedi 1 février 2025. Idéalement aux alentours de 21h. Je vais à une soirée d’anniversaire ce jour-là. Je suis flexible pour le point de départ, tant que celui-ci reste dans les environs d’Uccle. PS : Je suis également ouverte à partager les frais de route pendant le trajet !'
        ],
        [
            'nom' => 'Murielle',
            'age' => 41,
            'photo' => 'profile2.jpg',
            'depart' => 'Forest',
            'destination' => 'Waterloo',
            'date' => '18 Janvier 2025',
            'heure' => '18h30',
            'places' => '03',
            'info' => 'Bonjour, je propose un trajet vers Waterloo après ma journée de travail. Départ prévu vers 18h30, avec une certaine flexibilité. Trajet calme garanti, n’hésitez pas à me contacter si vous avez besoin d’un retour dans cette direction ;)'
        ]
    ];

    // Boucle pour afficher chaque trajet
    foreach ($trajets as $trajet) : ?>
        <div class="card mb-4 shadow-sm">
            <div class="card-body d-flex">
                <!-- Image de profil -->
                <div class="me-4">
                    <img src="<?php echo $trajet['photo']; ?>" alt="<?php echo $trajet['nom']; ?>, <?php echo $trajet['age']; ?> ans" class="rounded-circle" width="100" height="100">
                    <p class="text-center mt-2"><strong><?php echo $trajet['nom']; ?>, <?php echo $trajet['age']; ?> ans</strong></p>
                </div>
                <!-- Informations -->
                <div class="flex-grow-1">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label"><strong>Point de départ :</strong></label>
                            <input type="text" class="form-control" value="<?php echo $trajet['depart']; ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Destination :</strong></label>
                            <input type="text" class="form-control" value="<?php echo $trajet['destination']; ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Date :</strong></label>
                            <input type="text" class="form-control" value="<?php echo $trajet['date']; ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Heure :</strong></label>
                            <input type="text" class="form-control" value="<?php echo $trajet['heure']; ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Nombre de place :</strong></label>
                            <input type="text" class="form-control" value="<?php echo $trajet['places']; ?>" readonly>
                        </div>
                    </div>
                    <p class="mt-3"><strong>Informations complémentaires :</strong> <?php echo $trajet['info']; ?></p>
                    <button class="btn btn-primary">Contacter</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>


<?php get_footer(); ?>