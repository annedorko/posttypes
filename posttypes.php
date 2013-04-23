<?php
/*
Plugin Name: Custom Post Types
Plugin URI: http://github.com/annedorko/posttypes
Description: This plugin is an example usage of the Post Types class.
Version: 0.1
Author: Anne Dorko
Author URI: http://www.annedorko.com/
License: Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License
*/

require_once('classes/class.types.php');

$args = array( 'label' => 'post-type-name', 'labels' => array( 'name' => 'Post Types', 'singular_name' => 'Post Type' ) );
$new_post_type = new PostType( $args );
$new_post_type->register();