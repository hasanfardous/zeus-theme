<?php
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Zeus_Line_Separator' ) ) :
class Zeus_Line_Separator extends WP_Customize_Control {

	// Whitelist content parameter
	public $content = '';

	/**
	 * Render the control's content.
	 *
	 * Allows the content to be overriden without having to rewrite the wrapper.
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	public function render_content() {
		echo '<hr class="customizer-separator-line"/>';
	}
}
endif;