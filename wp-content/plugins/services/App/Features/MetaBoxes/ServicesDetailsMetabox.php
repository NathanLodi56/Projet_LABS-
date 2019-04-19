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

    /* $path_racine = $_SERVER["DOCUMENT_ROOT"];
    include($path_racine . '/wp-content/plugins/services/resources/views/metaboxes/services-detail.html.php'); */
    echo "Hi";
  }
}


