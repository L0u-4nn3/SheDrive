<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">
</head>
<body>


<nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <!-- Logo à gauche -->
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo blanc SD.png" alt="logo" class="logo" width="150" height="50">
            </a>
            <!-- Bouton pour mobile -->
            <button class="navbar-toggler" type="button" id="navbarToggler">
                <span class="navbar-toggler-icon">&#9776;</span> <!-- Icône hamburger -->
            </button>
            <!-- Menu principal -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php wp_nav_menu([
                    'theme_location' => 'header', // localisation de mon menu
                    'container' => false, // retire le container
                    'menu_class' => 'navbar-nav me-auto', // classe pour <ul></ul>

                ]); ?>
            </div>
        </div>
    </nav>

</body>