<?php
/*
 * Plugin Name: témoignages
 * Author: Muchas Caras 
 * Text Domain: témoignages 
 * Domain Path: /languages
 */

namespace App\Features\PostTypes;

class TestimonialPostType
{
    public static $slug = 'temoignages';

    public static function register()
    {
        add_theme_support('post-thumbnails');
        register_post_type(
            self::$slug,

            [
                'labels' => [
                    'name' => __('témoignages '),
                    'singular_name' => __('témoignage'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __("Le nom de la personne qui témoigne"),
                    'edit_item' => __('Le nom de la personne qui témoigne'),
                    'new_item' => __('Nouveau témoignage'),
                    'view_item' => __('Voir le témoignage'),
                    'view_items' => __('Voir les différents témoignages '),
                    'search_items' => __('Rechercher dans les  témoignages '),
                    'not_found' => __('Pas de  témoignage trouvées.'),
                    'n ot_found_in_trash' => ('Pas de témoignage  dans la corbeille.'),
                    'all_items' => __('Toutes les témoignages '),
                    'archives' => __('témoignages  archivées'),
                    'filter_items_list' => __('Filtre de témoignage'),
                    'items_list_navigation' => __('Navigation de les témoignages'),
                    'items_list' => __('Liste des témoignages'),
                    'item_published' => __('témoignage publiée.'),
                    'item_pu blished_privately' => __('témoignage publiée en privé.'),
                    'item_ reverted_to_draft' => __('Le témoignage est retournée au brouillon.'),
                    'item_scheduled' => __('témoignage planifiée.'),
                    'item_updated' => __('témoignage mise à jours.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'temoignages'

                ],
                'taxonomies' => ['category','post_tag'],
                'menu_icon' => 'dashicons-book',
                'supports' =>  ['title', 'editor', 'excerpt', 'thumbnail'],
            ]
        );
    }
}

