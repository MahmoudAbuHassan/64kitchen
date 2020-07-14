<?php 
/**
 * 64 Kitchen Theme Customizer
 * @package 64 Kitchen
 */

function sixty4kitchen_customizer( $wp_customize ){
    // Copyright Section

    $wp_customize->add_section(
        'sec_copyright', array(
            'title'         => 'Copyright Settings',
            'description'   => 'Copyright Section'
        )
    );

        // Field 1 - Copyright Text Box
            $wp_customize->add_setting(
                'set_copyright', array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_copyright', array(
                    'label'         => 'Copyright',
                    'description'   => 'Please, add your copyright information here',
                    'section'       => 'sec_copyright',
                    'type'          => 'text'
                )
            );
}
add_action( 'customize_register', 'sixty4kitchen_customizer' );