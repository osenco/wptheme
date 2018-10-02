<?php
/**
 * @package WPTHEME
 * @subpackage Theme Customizations
 * @author Osen Concepts < hi@osen.co.ke >
 * @since 0.1.0
 */

add_action( 'customize_register', 'osen_customizer_pwa_settings' );
function osen_customizer_pwa_settings( $wp_customize )
{
	$wp_customize->add_section(
		'osen_manifest',
		array(
			'panel'		 => 'osen_options',
			'title'      => 'PWA Manifest',
			'priority'   => 20
		)
	);

	$wp_customize->add_setting(
		'osen_pwa_active',
		array(
			'default'     => '',
			'type'   => 'option',
		)
	);

	$wp_customize->add_control(
		'osen_pwa_active',
		array(
			'label' 		=> 'PWA Active',
			'section' 		=> 'osen_manifest',
			'settings' 		=> 'osen_pwa_active',
			'type' 			=> 'checkbox',
			'std'			=> '1',
		)
	);

	$wp_customize->add_setting(
		'osen_manifest_name',
		array(
			'default'     => get_bloginfo( 'name' ),
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		'osen_manifest_name',
		array(
			'label' 		=> 'App Name',
			'section' 		=> 'osen_manifest',
			'settings' 		=> 'osen_manifest_name',
			'type' 			=> 'text',
	  		'description' 	=> __( 'Application Name In Install Prompt' ),
			'input_attrs'	=> array(
				'name' 		=> 'osen_manifest_name'
			)
		)
	);

	$wp_customize->add_setting(
		'osen_manifest_short_name',
		array(
			'default'     => get_bloginfo( 'name' ),
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		'osen_manifest_short_name',
		array(
			'label' 		=> 'Short Name',
			'section' 		=> 'osen_manifest',
			'settings' 		=> 'osen_manifest_short_name',
			'type' 			=> 'text',
	  		'description' 	=> __( 'Application Name In App Launcher' ),
			'input_attrs' 	=> array(
				'name' 		=> 'osen_manifest_short_name'
			)
		)
	);

	$wp_customize->add_setting(
		'osen_manifest_description',
		array(
			'default'     => get_bloginfo( 'description' ),
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		'osen_manifest_description',
		array(
			'label' 		=> 'Description',
			'section' 		=> 'osen_manifest',
			'settings' 		=> 'osen_manifest_description',
			'name' 			=> 'osen_manifest_description',
			'type' 			=> 'text',
	  		'description' 	=> __( 'Application Description' ),
			'input_attrs' 	=> array(
				'name' 		=> 'osen_manifest_description'
			)
		)
	);

	$wp_customize->add_setting(
		'osen_manifest_language' ,
		array(
			'default'     => get_bloginfo( 'language' ),
			'transport'   => 'refresh',
		)
	);

	$wp_customize->add_control(
		'osen_manifest_language',
		array(
			'label' 		=> 'Language',
			'section' 		=> 'osen_manifest',
			'settings' 		=> 'osen_manifest_language',
			'name' 			=> 'osen_manifest_language',
			'type' 			=> 'text',
	  		'description' 	=> __( 'Application Language' ),
			'input_attrs' 	=> array(
				'name' 		=> 'osen_manifest_language'
			)
		)
	);

	$wp_customize->add_setting(
		'osen_manifest_display',
		array(
		  'default' => 'standalone'
		)
	);

	$wp_customize->add_control(
		'osen_manifest_display',
		array(
			'label' 			=> __( 'Display' ),
			'section' 			=> 'osen_manifest',
			'type' 				=> 'select',
			'description' 		=> __( 'App display for users' ),
			'choices' 			=> array(
				'fullscreen' 	=>	__( 'Full Screen' ),
				'standalone' 	=>	__( 'Stand Alone' ),
				'minimal-ui' 	=>	__( 'Minimal UI' ),
				'browser' 		=>	__( 'Standard Browser' )
			),
			'input_attrs' 		=> array(
				'name' 			=> 'osen_manifest_display'
			)
		)
	);

	$wp_customize->add_setting(
		'osen_manifest_orientation',
		array(
		  'default' => 'portrait'
		)
	);

	$wp_customize->add_control(
		'osen_manifest_orientation',
		array(
			'label' 			=> __( 'Orientation' ),
			'section' 			=> 'osen_manifest',
			'type' 				=> 'select',
			'description' 		=> __( 'Screen Orientation' ),
			'choices' 			=> array(
				'portrait'		=>	__( 'Portrait' ),
				'landscape'		=>	__( 'Landscape' )
			),
			'input_attrs' 		=> array(
				'name' 			=> 'osen_manifest_orientation'
			)
		)
	);

	$wp_customize->add_setting(
		'osen_manifest_color',
		array(
		  'default' => '#000000'
		)
	);

	$wp_customize->add_control(
		'osen_manifest_color',
		array(
			'label' 			=> __( 'Color' ),
			'section' 			=> 'osen_manifest',
			'type' 				=> 'color',
			'description' 		=> __( 'App Color' ),
			'input_attrs' 		=> array(
				'name' 			=> 'osen_manifest_color'
			)
		)
	);

	$wp_customize->add_setting(
		'osen_manifest_background_color',
		array(
		  'default' => '#ffffff'
		)
	);

	$wp_customize->add_control(
		'osen_manifest_background_color',
		array(
			'label' 			=> __( 'Background Color' ),
			'section' 			=> 'osen_manifest',
			'type' 				=> 'color',
			'description' 		=> __( 'App Background Color' ),
			'input_attrs' 		=> array(
				'name' 			=> 'osen_manifest_background_color'
			)
		)
	);
}