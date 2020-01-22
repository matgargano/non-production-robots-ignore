<?php
/*
 * Plugin Name: Force Robots Production Ignore
 * Plugin URI:  https://statenweb.com
 * Description: Force Robots Production Ignore
 * Version:     0.2.0
 */


class Force_Robots_Ignore {

	public static function init() {


		add_filter('robots_txt', function(){
		    return "User Agent:*".PHP_EOL."Disallow: /";

        }, PHP_INT_MAX );


	}
}

if ( isset( $_ENV['WP_ENV'] ) && $_ENV['WP_ENV'] !== 'production' ) {

	Force_Robots_Ignore::init();

}