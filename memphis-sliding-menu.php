<?php
/*
 
Plugin Name: Memphis Sliding Menu
Plugin URI: http://
Description: A sliding menu for WordPress
Author: Ian Howatson
Version: 2.0.3
Author URI: http://www.kingofnothing.net/
Date: 12/07/2016

Copyright 2016 Ian Howatson  (email : ian.howatson@kingofnothing.net)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
include 'mslide-settings.php';
include 'mslide-functions.php';
include 'mslide-shortcode.php';
include 'mslide-dashboard.php';
include 'mslide-inline-css.php';
include 'mslide-inline-admin-css.php';
add_action( 'widgets_init', 'mslide_widget' );
add_action( 'wp_enqueue_scripts', 'mslide_script' );
add_action( 'admin_enqueue_scripts', 'mslide_admin_script' );
add_action('admin_head', 'mslide_admin_document_ready');
add_action('admin_init', 'mslide_admin');
add_action('admin_menu', 'mslide_dashboard_menu');

?>