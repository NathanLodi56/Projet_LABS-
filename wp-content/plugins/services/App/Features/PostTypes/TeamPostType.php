<?php
/*
 * Plugin Name: Team
 * Author: Muchas Caras 
 * Text Domain: Team 
 * Domain Path: /languages
 */

namespace App\Features\PostTypes;

class TeamPostType
{
    public static $slug = 'Team';

    public static function register()
    {
        add_theme_support('post-thumbnails');
        register_post_type(
            self::$slug,

            [
                'labels' => [
                    'name' => __('Team '),
                    'singular_name' => __('team'),
                    'add_new' => __('Ajouter'),
                    'add_new_item' => __("Ajouter le nom, du nouveau membre de la team"),
                    'edit_item' => __('Modifier la team'),
                    'new_item' => __('Nouveau dans la team'),
                    'view_item' => __('Voir la team'),
                    'view_items' => __('Voir les membres de la team '),
                    'search_items' => __('Rechercher dans la  team '),
                    'not_found' => __('Pas de membres de la team trouvées.'),
                    'n ot_found_in_trash' => ('Pas de team  dans la corbeille.'),
                    'all_items' => __('Toutes les membres de la team '),
                    'archives' => __('team  archivées'),
                    'filter_items_list' => __('Filtre de team'),
                    'items_list_navigation' => __('Navigation de la team'),
                    'items_list' => __('Liste team'),
                    'item_published' => __('team publiée.'),
                    'item_pu blished_privately' => __('team publiée en privé.'),
                    'item_ reverted_to_draft' => __('La team est retournée au brouillon.'),
                    'item_scheduled' => __('team planifiée.'),
                    'item_updated' => __('team mise à jours.'),
                ],
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'Team'

                ],
            
                'taxonomies' => ['category','post_tag'],
                'menu_icon' => 'dashicons-book',
                'supports' =>  ['title', 'editor', 'excerpt', 'thumbnail'],
            ]
        );
    }
}

