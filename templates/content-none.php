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
?>
<div class="col-sm-12 text-center">
	<h1 class="blog-item-title p-b-30"><?php esc_html_e( 'Nothing Found', 'zeus' ); ?></h1>

	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	    <p><?php echo sprintf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'zeus' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

	<?php elseif ( is_search() ) : ?>
		
	    <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'zeus' ); ?></p>
	    	<div class="row content-none-search">
				<div class="col-sm-6 offset-sm-3 backtohome">
					<?php 
					$anchor = zeus_anchor_tag(
						array(
							'url' 	 => esc_url( site_url( '/' ) ),
							'text' 	 => esc_html__( 'Back to home page', 'zeus' ),
							'class'  => 'button-contactForm btn_1 boxed-btn'
						)
					);
					echo wp_kses_post( $anchor );
					?>
				</div>
			</div>

	<?php else : ?>

	    <p><?php wp_kses_post( _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'zeus' ) ); ?></p>
	    <?php get_search_form(); ?>

	<?php endif; ?>
</div>
