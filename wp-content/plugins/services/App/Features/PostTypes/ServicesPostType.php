<?php
/*
 * Plugin Name: Services
 * Author: Muchas Caras 
 * Text Domain: Services 
 * Domain Path: /languages
 */

namespace App\Features\PostTypes;

class ServicesPostType
{
    public static $slug = 'service';

    public static function register()
    {
        register_post_type(
            self::$slug,

            [
                'labels' => [
                    'name' => __('services '),
                    'singular_name' => __('service'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __('Ajouter une service'),
                    'edit_item' => __('Modifier la service'),
                    'new_item' => __('Nouvelle service'),
                    'view_item' => __('Voir la service'),
                    'view_items' => __('Voir les services '),
                    'search_items' => __('Rechercher des services '),
                    'not_found' => __('Pas de service trouvées.'),
                    'n ot_found_in_trash' => ('Pas de services  dans la corbeille.'),
                    'all_items' => __('Toutes les services '),
                    'archives' => __('services  archivées'),
                    'filter_items_list' => __('Filtre de service'),
                    'items_list_navigation' => __('Navigation de service'),
                    'items_list' => __('Liste service'),
                    'item_published' => __('service publiée.'),
                    'item_pu blished_privately' => __('service publiée en privé.'),
                    'item_ reverted_to_draft' => __('La service est retournée au brouillon.'),
                    'item_scheduled' => __('service planifiée.'),
                    'item_updated' => __('service mise à jours.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'services'

                ],
            
                'taxonomies' => ['category','post_tag'],
                'menu_icon' => 'dashicons-book',
                'supports' =>  ['title', 'editor', 'excerpt', 'thumbnail'],
            ]
        );
    }
}

