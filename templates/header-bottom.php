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

// Header background image oparation

$class     = '';
$headerimg = '';
if( get_header_image() ){
    $headerimg = get_header_image();
    $class = ' header-image';
}
?>

<section class="hero-banner<?php echo esc_attr( $class ); ?>" <?php echo zeus_inline_bg_img( esc_url( $headerimg ) ); ?>>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="breadcrumb_tittle">
                <?php if ( is_singular( 'project' ) ) { ?>
                    <p class="zeus_project_date">
                        <?php echo get_the_time( 'F d, Y' ) . '<br>';?>
                    </p>
                    <?php
                }?>
                <h2>
                    <?php
                    if ( is_category() ) {
                        single_cat_title( __('Category: ', 'zeus') );

                    } elseif ( is_tag() ) {
                        single_tag_title( __('Tag Archive for - ', 'zeus') );

                    } elseif ( is_archive() ) {
                        echo get_the_archive_title();

                    } elseif ( is_page() ) {
                        echo get_the_title();

                    } elseif ( is_search() ) {
                        echo esc_html__( 'Search for: ', 'zeus' ) . get_search_query();

                    } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                        echo  get_the_title();

                    } elseif ( is_home() ) {
                        echo esc_html__( 'Blog', 'zeus' );

                    } elseif ( is_404() ) {
                        echo esc_html__( '404 error', 'zeus' );

                    }
                    ?>
                </h2>
                <?php
                    if ( function_exists( 'zeus_breadcrumbs' ) ) {
                        zeus_breadcrumbs();
                    }
                ?>
            </div>
        </div>
    </div>
</section>