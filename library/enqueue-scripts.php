<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


// Check to see if rev-manifest exists for CSS and JS static asset revisioning
//https://github.com/sindresorhus/gulp-rev/blob/master/integration.md

if ( ! function_exists( 'foundationpress_asset_path' ) ) :
	function foundationpress_asset_path( $filename ) {
		$filename_split = explode( '.', $filename );
		$dir            = end( $filename_split );
		$manifest_path  = dirname( dirname( __FILE__ ) ) . '/dist/assets/' . $dir . '/rev-manifest.json';

		if ( file_exists( $manifest_path ) ) {
			$manifest = json_decode( file_get_contents( $manifest_path ), true );
		} else {
			$manifest = [];
		}

		if ( array_key_exists( $filename, $manifest ) ) {
			return $manifest[ $filename ];
		}
		return $filename;
	}
endif;


if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

		// Enqueue the main Stylesheet.
		wp_enqueue_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/' . foundationpress_asset_path( 'app.css' ), array(), '2.10.4', 'all' );
      
		// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );
     

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );

		// Deregister the jquery-migrate version bundled with WordPress.
		wp_deregister_script( 'jquery-migrate' );

		// CDN hosted jQuery migrate for compatibility with jQuery 3.x
		wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', false );

		// Enqueue jQuery migrate. Uncomment the line below to enable.
    wp_enqueue_script( 'jquery-migrate' );

		// Enqueue Foundation scripts
		wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/dist/assets/js/' . foundationpress_asset_path( 'app.js' ), array( 'jquery' ), '2.10.4', true );
     
		//Enqueue FontAwesome from CDN. Uncomment the line below if you need FontAwesome.
		wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/5016a31c8c.js', array(), '4.7.0', true );

		// Add the comment-reply library on pages where it is necessary
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
    
    wp_enqueue_script( 'parallax', 'https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js', array(), '1.4.2', true );
    wp_enqueue_script( 'jquery-parallax', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), '20181212', true );
    
    $slider2img1 = 'main-stylesheet';  // Swap in your CSS Stylesheet ID

    $css1 = '';

    $slider_2_image1 = get_theme_mod( 'fp-slidertwo-one' ); // Assigning it to a variable to keep the markup clean.

    $css1 .= ( !empty($slider_2_image1) ) ? sprintf('
    li.orbit-item-1 {
    background: url(%s) no-repeat center;
    background-size: cover;
    }
    ', $slider_2_image1) : '';

    if ( $css1 ) {
    wp_add_inline_style( $slider2img1  , $css1 );
    }
    
    $slider2img2 = 'main-stylesheet';  // Swap in your CSS Stylesheet ID

    $css2 = '';

    $slider_2_image2 = get_theme_mod( 'fp-slidertwo-two' ); // Assigning it to a variable to keep the markup clean.

    $css2 .= ( !empty($slider_2_image2) ) ? sprintf('
    li.orbit-item-2 {
    background: url(%s) no-repeat center;
    background-size: cover;
    }
    ', $slider_2_image2) : '';

    if ( $css2 ) {
    wp_add_inline_style( $slider2img2  , $css2 );
    }
    
    $slider2img3 = 'main-stylesheet';  // Swap in your CSS Stylesheet ID

    $css3 = '';

    $slider_2_image3 = get_theme_mod( 'fp-slidertwo-three' ); // Assigning it to a variable to keep the markup clean.

    $css3 .= ( !empty($slider_2_image3) ) ? sprintf('
    li.orbit-item-3 {
    background: url(%s) no-repeat center;
    background-size: cover;
    }
    ', $slider_2_image3) : '';

    if ( $css3 ) {
    wp_add_inline_style( $slider2img3  , $css3 );
    }
    
    $slider2img4 = 'main-stylesheet';  // Swap in your CSS Stylesheet ID

    $css4 = '';

    $slider_2_image4 = get_theme_mod( 'fp-slidertwo-four' ); // Assigning it to a variable to keep the markup clean.

    $css4 .= ( !empty($slider_2_image4) ) ? sprintf('
    li.orbit-item-4 {
    background: url(%s) no-repeat center;
    background-size: cover;
    }
    ', $slider_2_image4) : '';

    if ( $css4 ) {
    wp_add_inline_style( $slider2img4  , $css4 );
    }
    
    $topcardimage = 'main-stylesheet';  // Swap in your CSS Stylesheet ID

    $css_topcardimage = '';

    $top_cardimage = get_theme_mod( 'fp-topcard-img' ); // Assigning it to a variable to keep the markup clean.

    $css_topcardimage .= ( !empty($top_cardimage) ) ? sprintf('
    .topcard.card .card-divider {
    background: url(%s) no-repeat center;
    background-size: cover;
    }
    ', $top_cardimage) : '';

    if ( $css_topcardimage ) {
    wp_add_inline_style( $topcardimage  , $css_topcardimage );
    } 
    
    $bottomcardimage = 'main-stylesheet';  // Swap in your CSS Stylesheet ID

    $css_bottomcardimage = '';

    $bottom_cardimage = get_theme_mod( 'fp-bottomcard-img' ); // Assigning it to a variable to keep the markup clean.

    $css_bottomcardimage .= ( !empty($bottom_cardimage) ) ? sprintf('
    .bottomcard.card .card-divider {
    background: url(%s) no-repeat center;
    background-size: cover;
    }
    ', $bottom_cardimage) : '';

    if ( $css_bottomcardimage ) {
    wp_add_inline_style( $bottomcardimage  , $css_bottomcardimage );
    } 
    
    $topgradientcolor = 'main-stylesheet';  // Swap in your CSS Stylesheet ID

    $css_topgradientcolor = '';

    $topgradient_color = esc_attr(get_theme_mod( 'fp-top-gradient-bg' )); 
    $middlegradient_color = get_theme_mod( 'fp-middle-gradient-bg' );
    $bottomgradient_color = get_theme_mod( 'fp-bottom-gradient-bg' );

    $css_topgradientcolor .= ( !empty($topgradient_color) ) ? sprintf('
    body.home.page-template-front {
      background: ' . $topgradient_color . ';
    }' ) : '';

    if ( $css_topgradientcolor ) {
    wp_add_inline_style( $topgradientcolor  , $css_topgradientcolor );
    } 
    

	} 
  endif; 
	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
