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

<div class="footer_top_area">
	<div class="container">
		<div class="row">
			<?php
				echo '<div class="col-xl-8 col-lg-8"><div class="row">';
					// Footer widget 1
					if( is_active_sidebar( 'footer-1' ) ){
						dynamic_sidebar( 'footer-1' );
					}

					// Footer widget 2
					if( is_active_sidebar( 'footer-2' ) ){
						dynamic_sidebar( 'footer-2' );
					}

					// Footer widget 3
					if( is_active_sidebar( 'footer-3' ) ){
						echo '<div class="col-lg-4 col-md-4"><div class="footer_widget">';
							dynamic_sidebar( 'footer-3' );
						echo '</div></div>';
					}
				echo '</div></div>';

				// Footer widget 4
				if( is_active_sidebar( 'footer-4' ) ){
					dynamic_sidebar( 'footer-4' );
				}
			?>
		</div>
	</div>
</div>