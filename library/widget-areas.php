<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
	function foundationpress_sidebar_widgets() {
		register_sidebar(
			array(
				'id'            => 'sidebar-widgets',
				'name'          => __( 'Sidebar widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-widgets',
				'name'          => __( 'Footer widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);
    
    register_sidebar(
			array(
				'id'            => 'front-page-1',
				'name'          => __( 'Front Page Area &#35;1', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);
    
    register_sidebar(
			array(
				'id'            => 'front-page-2',
				'name'          => __( 'Front Page Area &#35;2', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);
    
    register_sidebar(
			array(
				'id'            => 'front-page-3',
				'name'          => __( 'Front Page Area &#35;3', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);
    
    register_sidebar(
			array(
				'id'            => 'front-page-4',
				'name'          => __( 'Front Page Area &#35;4', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);
	}

	add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
