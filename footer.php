<?php 
/**
 * @Packge       : Zeus
 * @Version      : 1.0
 * @Author       : Hasan Fardous
 * @Author URI 	 : https://github.com/hasanfardous
 *
 */
 
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( 'Direct script access denied.' );
    }

        /**
         * Footer Area
         *
         * @Footer
         * @Back To Top Button
         *
         * @Hook zeus_footer
         *
         * @Hooked  zeus_footer_area 
         *
         */

		do_action( 'zeus_footer' );

	wp_footer(); 
 ?>
</body>
</html>