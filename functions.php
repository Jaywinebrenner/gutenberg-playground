<?php
/**
 * cb_neat functions and definitions
 *
 */

if ( ! function_exists( 'cb_neat_setup' ) ) :
	/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
	function cb_neat_setup()
	{
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on cb_neat, use a find and replace
		* to change 'some-like-it-neat' to the name of your theme in all the template files
		*/
		load_theme_textdomain( 'some-like-it-neat', get_template_directory() . '/library/languages' );

		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		*/
		add_theme_support( 'post-thumbnails' );

		/*
		* Enable title tag support for all posts.
		*
		* @link http://codex.wordpress.org/Title_Tag
		*/
		add_theme_support( 'title-tag' );

		/*
		* Add Editor Style for adequate styling in text editor.
		*
		* @link http://codex.wordpress.org/Function_Reference/add_editor_style
		*/
		add_editor_style( '/assets/css/editor-style.css' );

		/**
		* Including Theme Hook Alliance (https://github.com/zamoose/themehookalliance).
		*/
		include get_template_directory() . '/library/vendors/theme-hook-alliance/tha-theme-hooks.php' ;

		/**
		 * Including TGM Plugin Activation
		 */
		include_once get_template_directory() . '/library/vendors/tgm-plugin-activation/class-tgm-plugin-activation.php' ;

		include_once get_template_directory() . '/library/vendors/tgm-plugin-activation/tgm-plugin-activation.php' ;

	}
endif; // cb_neat_setup
add_action( 'after_setup_theme', 'cb_neat_setup' );

/**
 * Enqueue scripts.
 */
if ( ! function_exists( 'cb_neat_scripts' ) ) :
	function cb_neat_scripts() {

		wp_deregister_script('jquery');
	 	wp_register_script('jquery', get_theme_file_uri("/assets/js/jquery-3.2.1.min.js"), false, null);
	 	wp_enqueue_script('jquery');

		// wp_register_script('instafeed', get_theme_file_uri("/assets/js/instafeed.min.js"), false, null);
		// wp_enqueue_script('instafeed');

		// wp_register_script('slick', get_theme_file_uri("/assets/js/slick.js"), false, null);
		// wp_enqueue_script('slick');

		// wp_register_script('scrollreveal', get_theme_file_uri("/assets/js/scrollreveal.min.js"), false, null);
		// wp_enqueue_script('scrollreveal');




        /**
         * Concatenate Scripts. Checks the directory below for js files. If there are js files they will be concatenated and minified in either
         * development.js or production.js. NOTE - You will have to stop and restart gulp. Also, these scripts run on all pages. Make sure
         * your scripts actually need to run on all pages before concatenating.
         */
        $directory = get_template_directory() . '/assets/js/app/';
        $files = glob($directory . '*.js');
        if ( $files !== false ) {
            $filecount = count( $files );

            if ( ! $filecount == 0 ) {
                if ( SCRIPT_DEBUG || WP_DEBUG ) :
                    // Concatonated Scripts
                    wp_enqueue_script( 'cb_neat-js', get_theme_file_uri( '/assets/js/development.js' ), array( 'jquery' ), '1.0.0', false );
                else :
                    // Concatonated Scripts
                    wp_enqueue_script( 'cb_neat-js', get_theme_file_uri( '/assets/js/production-min.js' ), array( 'jquery' ), '1.0.0', false );
                endif;
            }
        }
	}
	add_action( 'wp_enqueue_scripts', 'cb_neat_scripts' );
endif; // Enqueue scripts

/**
 * Enqueue styles.
 */

if ( ! function_exists( 'cb_neat_styles' ) ) :

	function cb_neat_styles() {
		if ( SCRIPT_DEBUG || WP_DEBUG ) :
			wp_register_style(
				'cb_neat-style', // handle name
                get_parent_theme_file_uri( '/assets/css/style.css' ), '', '1.2', 'screen'
			);
			wp_enqueue_style( 'cb_neat-style' );

			else :
			wp_register_style(
				'cb_neat-style', // handle name
                get_parent_theme_file_uri( '/assets/css/style-min.css' ), '', '1.2', 'screen'
			);
			wp_enqueue_style( 'cb_neat-style' );
		endif;
	}
  add_action( 'wp_enqueue_scripts', 'cb_neat_styles' );

endif; // Enqueue styles



// Theme images sizes
function add_image_sizes() {
	 // add_image_size( 'YOUR_IMAGE_SIZE', 300, 185, 'center');
}

add_action( 'after_setup_theme', 'add_image_sizes' );
