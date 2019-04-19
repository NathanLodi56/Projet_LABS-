<?php
use App\Features\PostTypes\ServicesPostType as ServicesPostType;
use App\Features\MetaBoxes\ServicesDetailsMetabox; 
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


add_action('init',[ServicesPostType::class,'register']);
//add_action('init',[ServicesDetailsMetabox::class,'add_meta_box']);
add_action('add_meta_boxes_service', [ServicesDetailsMetabox::class,'add_meta_box']);  

