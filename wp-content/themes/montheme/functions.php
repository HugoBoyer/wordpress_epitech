<?php  

if (!file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    die(__('You must run <code>composer install</code> from the theme directory.', 'montheme'));
}
require_once $composer;

use App\CustomPosts\Skills;
use App\CustomPosts\Outils;

function montheme_supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menu');
    register_nav_menu('header', 'en tête du menu');

    Skills::init();
    Outils::init();
}

function add_custom_sizes() {
    add_image_size( 'project-item-size', 640, 410, array('center', 'center'), true );
}
function add_custom_skills_sizes() {
    add_image_size( 'project-item-skills-size', 122, 80, array('center', 'center'), true );
}

function montheme_register_assets () {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    wp_enqueue_style('lgmac_custom', get_template_directory_uri() . '/style.css');
}

add_action('after_setup_theme', 'montheme_supports');
add_action('after_setup_theme', 'add_custom_sizes',  101 ); 
add_action('wp_enqueue_scripts', 'montheme_register_assets');