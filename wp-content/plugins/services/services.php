<?php
use App\Features\PostTypes\ServicesPostType as ServicesPostType;
use App\Features\MetaBoxes\ServicesDetailsMetabox; 
use App\Features\PostTypes\TeamPostType as TeamPostType;
use App\Features\MetaBoxes\TestimonialDetailsMetabox;
use App\Features\PostTypes\TestimonialPostType as TestimonialPostType;
/**
 * Plugin Name:     services
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          Muchas Caras 
 * Author URI:      YOUR SITE HERE
 * Text Domain:     services
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         services
 */
// Your code starts here.

require_once('autoload.php');

require_once('env.php');
require_once('helpers.php');

add_action('init',[ServicesPostType::class,'register']);
add_action('init',[TeamPostType::class,'register']);
add_action('init',[TestimonialPostType::class,'register']);

//add_action('init',[ServicesDetailsMetabox::class,'add_meta_box']);
add_action('add_meta_boxes_service', [ServicesDetailsMetabox::class,'add_meta_box']); 
add_action('add_meta_boxes_temoignages', [TestimonialDetailsMetabox::class,'add_meta_box_testi']); 
add_action('save_post_' . ServicesPostType::$slug, [ServicesDetailsMetabox::class, 'save']); 
add_action('save_post_' . TestimonialPostType::$slug, [TestimonialDetailsMetabox::class, 'save']); 



