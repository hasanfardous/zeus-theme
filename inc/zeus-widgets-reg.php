<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}

/**
 * @Packge       : Zeus
 * @Version      : 1.0
 * @Author       : Hasan Fardous
 * @Author URI 	 : https://github.com/hasanfardous
 *
 */
 

function zeus_widgets_init() {
    // sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'zeus' ),
        'id'            => 'zeus-post-sidebar',
        'before_widget' => '<div id="%1$s" class="single_sidebar_widget widget blog-post-archives %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    
    // footer widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Footer One', 'zeus' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="col-lg-4 col-md-4"><div id="%1$s" class="footer_widget widget footer_1 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="footer_title"><h3>',
        'after_title'   => '</h3></div>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'zeus' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="col-lg-4 col-md-4"><div id="%1$s" class="footer_widget widget footer_2 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="footer_title"><h3>',
        'after_title'   => '</h3></div>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'zeus' ),
        'id'            => 'footer-3',
        'before_widget' => '<div id="%1$s" class="footer_3 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer_title"><h3>',
        'after_title'   => '</h3></div>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Four', 'zeus' ),
        'id'            => 'footer-4',
        'before_widget' => '<div class="col-xl-4 col-lg-4"><div id="%1$s" class="footer_widget widget footer_4 %2$s""><div class="footer_title">',
        'after_widget'  => '</div></div></div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'zeus_widgets_init' );
