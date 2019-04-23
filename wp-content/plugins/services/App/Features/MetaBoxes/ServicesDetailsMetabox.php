<?php
namespace App\Features\MetaBoxes;

use App\Features\PostTypes\ServicesPostType;

class ServicesDetailsMetabox
{
  public static $slug = 'services_details_metabox';
  /**
   * Ajout d'une méta box au type de contenu qui sont passer dans le tableau $screens
   * https://developer.wordpress.org/plugins/metadata/custom-meta-boxes/
   *
   * @return void
   */
  public static function add_meta_box()
  {
    $screen = [ServicesPostType::$slug];
    add_meta_box(
      self::$slug,           // Unique ID
      __("Détails en rapport avec le service"),  // Box title
      [self::class, 'render'],  // Content callback, must be of type callable
      $screen                   // Post type
    );
  }
  /**
   * Fonction pour rendre le code html dans la metabox
   *
   * @return void
   */
  public static function render()
  {
   
    view('metaboxes/services-detail');
  }
  /**
   * sauvegarde des données de la metabox
   *
   * @param [type] $post_id reçu par le do_action
   * @return void
   */
  //$post_id est remplie par l'id du post contenu dans l'url de la page
  public static function save($post_id)
  {
    // On verifie que $_POST ne soit pas vide pour effectuer l'action uniquement à la sauvegarde du post Type
    // $_POST est une variable globale php qui contient les données qu'on envoi via un formulaire,notre page recette n'est en soit qu'un formulaire avec des inputs et des textarea qu'on rempli et ce qu'on dit en soit c'est :
    // Si notre $_POST est différent de vide alors on execute les lignes suivantes
    if (count($_POST) != 0) {
      // On stock dans une variable la valeur de l'input dont le name est 'rat_time_preparation'
      $mutliple_icones = $_POST['icones_services'];
      // https://developer.wordpress.org/reference/functions/update_post_meta/
      update_post_meta($post_id, 'icones_services', $mutliple_icones);
    }
  }

}
