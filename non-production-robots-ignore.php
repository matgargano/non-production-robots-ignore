<?php

class Force_Robots_Ignore {

	public static function init() {
		add_filter( 'robots_txt', array( __CLASS__, 'hide_non_prod' ) );
	}

	/**
	 * Add disallow all if we are not in production
	 *
	 * @param $robots_txt
	 *
	 * @return string
	 */
	public static function hide_non_prod( $robots_txt ) {

		return 'User-agent: *' . PHP_EOL . 'Disallow: /';

	}

}

if ( isset( $_ENV['WP_ENV'] ) && $_ENV['WP_ENV'] !== 'production' ) {

	Force_Robots_Ignore::init();

}