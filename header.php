<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>
    <body <?php body_class(); ?>>
  <header class="header">
    <a href="<?php echo home_url('/'); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
      <div>SheDrive</div>
    </a>  

        <nav>
            <a href="#">À propos</a>
            <a href="#">Aide & FAQ</a>
            <a href="#">Contact</a>
            <a href="#">Inscription</a>
            <a href="#">Profil</a>
        </nav>

  </header>
