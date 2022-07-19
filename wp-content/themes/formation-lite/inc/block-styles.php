<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Formation Lite 1.0
	 *
	 * @return void
	 */
	function formation_lite_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'formation-lite-columns-overlap',
				'label' => esc_html__( 'Overlap', 'formation-lite' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'formation-lite-border',
				'label' => esc_html__( 'Borders', 'formation-lite' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'formation-lite-border',
				'label' => esc_html__( 'Borders', 'formation-lite' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'formation-lite-border',
				'label' => esc_html__( 'Borders', 'formation-lite' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'formation-lite-image-frame',
				'label' => esc_html__( 'Frame', 'formation-lite' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'formation-lite-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'formation-lite' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'formation-lite-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'formation-lite' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'formation-lite-border',
				'label' => esc_html__( 'Borders', 'formation-lite' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'formation-lite-separator-thick',
				'label' => esc_html__( 'Thick', 'formation-lite' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'formation-lite-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'formation-lite' ),
			)
		);
	}
	add_action( 'init', 'formation_lite_register_block_styles' );
}
