<?php
/*
 * Plugin Name: Force Robots Production Ignore
 * Plugin URI:  https://statenweb.com
 * Description: Force Robots Production Ignore
 * Version:     0.2.0
 */


class Force_Robots_Ignore {

	public static function init() {


		add_filter('option_blog_public', '__return_false' );


	}
}

if ( isset( $_ENV['WP_ENV'] ) && $_ENV['WP_ENV'] !== 'production' ) {

	Force_Robots_Ignore::init();

}