<?php 
/**
 * @Packge       : Zeus
 * @Version      : 1.0
 * @Author       : Hasan Fardous
 * @Author URI 	 : https://github.com/hasanfardous
 *
 *
 * Template Name: Homepage Template
 */
 
	get_header();

    /**
     * Banner Start
     *
     * @Hook zeus_banner_part
     *
     * @Hooked zeus_banner_part_cb 10
     *
     */
	do_action( 'zeus_banner_part' );
	

    /**
     * About Area Start
     *
     * @Hook zeus_about_part
     *
     * @Hooked zeus_about_part_cb 10
     *
     */
    do_action( 'zeus_about_part' );
	

    /**
     * Service Area Start
     *
     * @Hook zeus_service_part
     *
     * @Hooked zeus_service_part_cb 10
     *
     */
    do_action( 'zeus_service_part' );
	

    /**
     * Clients Area Start
     *
     * @Hook zeus_clients_part
     *
     * @Hooked zeus_clients_part_cb 10
     *
     */
    do_action( 'zeus_clients_part' );

	get_footer();
?>