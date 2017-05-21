<?php

/**
 * Register Google font.
 */
function landscape_font_url() {
	$fonts_url = '';
	 
	/* Translators: If there are characters in your language that are not
	* supported by libre, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$libre = _x( 'on', 'libre font: on or off', 'theme-slug' );
	 
	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$open_sans = _x( 'on', 'Open Sans font: on or off', 'theme-slug' );
	 
	if ( 'off' !== $libre || 'off' !== $open_sans ) {
	$font_families = array();
	 
	if ( 'off' !== $libre ) {
	$font_families[] = 'Libre Baskerville:400,700';
	}
	 
	if ( 'off' !== $open_sans ) {
	$font_families[] = 'Open Sans:700italic,400,800,600';
	}
	 
	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);
	 
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	 
	return esc_url_raw( $fonts_url );
}


/**
 * Enqueue scripts and styles.
 */
function landscape_scripts() {
	/**
	 * If WP is in script debug, or we pass ?script_debug in a URL - set debug to true.
	 */
	$debug = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG == true ) || ( isset( $_GET['script_debug'] ) ) ? true : false;

	/**
	 * If we are debugging the site, use a unique version every page load so as to ensure no cache issues.
	 */
	$version = '1.0.0';

	/**
	 * Should we load minified scripts? Also enqueue live reload to allow for extensionless reloading.
	 */
	$suffix = '.min';
	if ( true === $debug ) {

		$suffix = '';
		wp_enqueue_script( 'live-reload', '//localhost:35729/livereload.js', array(), $version, true );

	}

	wp_enqueue_style( 'landscape-google-font', landscape_font_url(), array(), null );

	wp_register_style( 'landscape-genericons', get_stylesheet_directory_uri() . '/fonts/genericons.css', array(), $version );

	wp_enqueue_style( 'landscape-genericons' );

	wp_enqueue_style( 'landscape-dashicons', get_stylesheet_uri(), array( 'dashicons' ), '1.0' );

	wp_enqueue_style( 'landscape-style', get_stylesheet_directory_uri() . '/style' . $suffix . '.css', array(), $version );

	wp_enqueue_script( 'landscape-project', get_template_directory_uri() . '/js/project' . $suffix . '.js', array( 'jquery' ), $version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'landscape_scripts' );
