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
 

	//  Call Header
	get_header();

	/**
	 * 404 page
	 * @Hook zeus_fof
	 * @Hooked zeus_fof_cb
	 *
	 */

	do_action( 'zeus_fof' );

	 // Call Footer
	 get_footer();
?>