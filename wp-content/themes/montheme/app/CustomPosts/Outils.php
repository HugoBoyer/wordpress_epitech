<?php


namespace App\CustomPosts;

use PostTypes\PostType;

class Outils
{
    public static function init() {
        // Post type options
        $options = [
            'exclude_from_search' => true,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => false,
            'show_in_admin_bar' => true,
            'show_in_rest' => true,
            'capability_type' => 'post',
            'supports' => [ 'title', 'editor', 'thumbnail' ],
            'has_archive' => false,
            'can_export' => true,
            'delete_with_user' => false,
        ];

        $names = [
            'name'     => 'outils',
            'singular' => __('Outil', 'montheme'),
            'plural'   => __('Outils', 'montheme'),
            'slug'     => 'outils',
        ];

        $outils = new PostType($names, $options);
        $outils->register();
    }
}