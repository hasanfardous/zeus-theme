<?php 
	$siteUrl 		= home_url('/');
	$footer_logo 	= empty( zeus_opt( 'zeus_footer_logo_contents' ) ) ? ZEUS_DIR_IMGS_URI . 'footer-logo.png' : wp_get_attachment_image_src( zeus_opt( 'zeus_footer_logo_contents' ) , 'zeus_site_logo_82x20' )[0];
	$copy_right_txt = empty( zeus_opt( 'zeus_footer_copyright_text' ) ) ? __( 'Gaya UI Kit that can help you design easy  <br>entire websites in Sketch & Photoshop.', 'zeus' ) : zeus_opt( 'zeus_footer_copyright_text' );
?>

	<div class="copyright_area">
		<div class="footer_border"></div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="copy_right_text d-flex">
						<a href="<?php echo esc_url( $siteUrl )?>" class="logo">
							<img src="<?php echo esc_url( $footer_logo )?>" alt="footer logo">
						</a>
						<p><?php echo wp_kses_post( $copy_right_txt ); ?></p>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="copy_right_links">
						<?php
						if(has_nav_menu('footer-bottom-menu')) {
							wp_nav_menu(array(
								'menu'           => 'footer-bottom-menu',
								'theme_location' => 'footer-bottom-menu',
								'menu_id'        => null,
								'container'      => false,
								'menu_class'     => null,
								'depth'          => 1
							));
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- back-top_start  -->
	<div id="back-top" style="display: block;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>
    <!-- back-top_end -->