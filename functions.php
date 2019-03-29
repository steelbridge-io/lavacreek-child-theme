<?php
  /**
   * Created by PhpStorm.
   * User: chrisparsons
   * Date: 2019-03-28
   * Time: 13:59
   * Functions for Lava Creek Child Theme
   */

  add_action( 'wp_enqueue_scripts', 'lava_creek_enqueue_styles' );
  function lava_creek_enqueue_styles() {

    wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0' );
  }


/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

  /** If your site requires protocol relative url's for theme assets, uncomment the line below */
  // require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );
