<?php
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('menus');

register_nav_menu('header', 'En tête du menu');

function charger_google_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Bungee&family=Hubballi&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'charger_google_fonts');

function styles_scripts()
{
  wp_enqueue_style(
    'bootstrap',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
  );
  wp_enqueue_script(
    'bootstrap-bundle',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
    false,
    1,
    true
  );
  wp_enqueue_script(
    'app-js',
    get_template_directory_uri() . '/assets/js/app.js',
    ['bootstrap-bundle'],
    1,
    true
  );
}
add_action('wp_enqueue_scripts', 'styles_scripts');

// Inclure app.css
function shedrive_enqueue_styles() {
    wp_enqueue_style('shedrive-style', get_stylesheet_uri()); // style.css du thème principal
    wp_enqueue_style('shedrive-app', get_template_directory_uri() . '/assets/css/app.css'); // app.css
}
add_action('wp_enqueue_scripts', 'shedrive_enqueue_styles');

// CUSTOM POSTS TYPES
function create_post_type()
{
  register_post_type('faqs', [
    'labels' => ['name' => 'FAQs'],
    'supports' => ['title', 'editor', 'thumbnail'],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'faqs']
  ]);
  register_post_type('services', [
    'labels' => ['name' => 'Services'],
    'supports' => ['title', 'editor', 'thumbnail'],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'services']
  ]);
}
add_action('init', 'create_post_type');

// MENUS
function menuheader_class($classes)
{
  $classes[] = 'nav-item';
  return $classes;
}
add_filter('nav_menu_css_class', 'menuheader_class');

function menuheader_link_class($attributes)
{
  $attributes['class'] = 'nav-link';
  return $attributes;
}
add_filter('nav_menu_link_attributes', 'menuheader_link_class');

function add_google_fonts() {
    wp_enqueue_style('hubballi-regular', false);
}
add_action('wp_enqueue_scripts', 'add_google_fonts');

// Fonction pour récupérer les témoignages (chemins des images)
function get_testimonials() {
    return [
        get_template_directory_uri() . '/assets/img/temoignage_ikram.png',
        get_template_directory_uri() . '/assets/img/temoignage_delphine.png',
        get_template_directory_uri() . '/assets/img/temoignage_hawa.png',
    ];
}

// Fonction pour générer les éléments de la carousel
function generate_testimonial_slides($testimonials) {
    $output = '';
    $active = 'active'; // Première image active par défaut

    foreach ($testimonials as $testimonial) {
        $output .= '<div class="carousel-item ' . $active . '">';
        $output .= '<img src="' . $testimonial . '" class="d-block w-100 testimonial-image" alt="Témoignage">';
        $output .= '</div>';
        $active = ''; // Retirer la classe active après la première itération
    }

    return $output;
}

// Fonction pour afficher la section témoignages
function display_testimonial_section() {
    $testimonials = get_testimonials();
    ?>
    <section class="testimonial-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Ce que les autres femmes pensent de <span class="highlight">SheDrive</span></h2>
            <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                <!-- Slides dynamiques -->
                <div class="carousel-inner">
                    <?php echo generate_testimonial_slides($testimonials); ?>
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
    <?php
}

function enqueue_bootstrap_scripts() {
    // Charger Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    // Charger jQuery
    wp_enqueue_script('jquery');

    // Charger Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_scripts');

// Fonction pour afficher le formulaire
function shedrive_traject_form() {
    ob_start(); // Capture le contenu pour le shortcode
    return ob_get_clean(); // Retourne le contenu pour le shortcode
    add_shortcode('propose_trajet_form', 'shedrive_traject_form');
}

?>