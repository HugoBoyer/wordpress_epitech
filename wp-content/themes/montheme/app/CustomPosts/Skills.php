<?php


namespace App\CustomPosts;

use PostTypes\PostType;

class Skills
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
            'name'     => 'skills',
            'singular' => __('Skill', 'montheme'),
            'plural'   => __('Skills', 'montheme'),
            'slug'     => 'skills',
        ];

        $skills = new PostType($names, $options);
        $skills->register();
    }
}