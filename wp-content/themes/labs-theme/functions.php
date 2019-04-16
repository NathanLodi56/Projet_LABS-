<?php
/**
 * Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
 *
 * @return void
 */
function ajout_css_js()
{
  // Ajout des scripts css
  // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/all.min.css');
  wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css');
  wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
  wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');

  // Ajout des scripts js
  // https://developer.wordpress.org/reference/functions/wp_enqueue_script/
  wp_enqueue_script('jquery-nat', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', null, true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery-nat'], null, true);
  wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/magnific-popup.min.js', ['jquery-nat'], null, true);
  wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', ['bootstrap'], null, true);
  wp_enqueue_script('circle-progress', get_template_directory_uri() . '/js/circle-progress.min.js', ['jquery-nat'], null, true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', ['jquery-nat'], null, true);



}
// Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des css et scripts.
// Cette écouteur va déclancher la fonction ajout_css_js()
// https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
add_action('wp_enqueue_scripts', 'ajout_css_js');
?>