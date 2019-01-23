<?php
/**
 * hoangvvo Theme Customizer
 *
 * @package hoangvvo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function hoangvvo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'image-home-header' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'hoangvvo_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'hoangvvo_customize_partial_blogdescription',
		) );
	}
	$wp_customize->add_section( 'hoangvvo_section' , array(
		'title'      => __( 'Hoang Vo Settings', 'hoangvvo' ),
		'priority'   => 30,
		'capability'  => 'edit_theme_options'
	));
	$wp_customize->add_setting('image-home-header-bg', array(
		'default'           => '',
		'transport' => 'refresh', 
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image-home-header-bg', array(
        'label'    => __('My background', 'hoangvvo'),
        'section'  => 'hoangvvo_section',
        'settings' => 'image-home-header-bg'
	)));
	/* Placeholder */
	$wp_customize->add_setting('image-placeholder-honor', array(
		'default'           => '',
		'transport' => 'refresh', 
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image-placeholder-honor', array(
        'label'    => __('Honor Placeholder', 'hoangvvo'),
        'section'  => 'hoangvvo_section',
        'settings' => 'image-placeholder-honor'
	)));
	/*social-link*/
	$wp_customize->add_setting( 'linkedin-link', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => ''
	  ) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'linkedin-link',
			array(
				'label'          => __( 'Linkedin', 'hoangvvo' ),
				'section'        => 'hoangvvo_section',
				'settings'       => 'linkedin-link',
				'type'           => 'text',
				'input_attrs'	=> array(
					'type' => 'url'
				)
			)
		)
	);

	$wp_customize->add_setting( 'instagram-link', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => ''
	  ) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'instagram-link',
			array(
				'label'          => __( 'Instagram', 'hoangvvo' ),
				'section'        => 'hoangvvo_section',
				'settings'       => 'instagram-link',
				'type'           => 'text',
				'input_attrs'	=> array(
					'type' => 'url'
				)
			)
		)
	);

    
	
}
add_action( 'customize_register', 'hoangvvo_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function hoangvvo_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function hoangvvo_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function hoangvvo_customize_preview_js() {
	wp_enqueue_script( 'hoangvvo-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'hoangvvo_customize_preview_js' );
