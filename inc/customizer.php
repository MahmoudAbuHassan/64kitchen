<?php 
/**
 * 64 Kitchen Theme Customizer
 * @package 64 Kitchen
 */

function sixty4kitchen_customizer( $wp_customize ){
    // Copyright Section

    $wp_customize->add_section(
        'sec_copyright', array(
            'title'         => __( 'Copyright Settings', '64kitchen' ),
            'description'   => __( 'Copyright Section', '64kitchen' ),
        )
    );

    // Field 1 - Copyright Text Box
            $wp_customize->add_setting(
                'set_copyright', array(
                    'type'                  => 'theme_mod',
                    'default'               => 'true',
                    'sanitize_callback'     => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_copyright', array(
                    'label'         => __( 'Copyright','64kitchen' ),
                    'description'   => __( 'Please, add your copyright information here','64kitchen' ),
                    'section'       => 'sec_copyright',
                    'type'          => 'text'
                )
            );

// ------------------------------------------------------------------------------------------------
    

//  Slider Section
    
    $wp_customize->add_section(
        'sec_slider', array(
            'title'         => __( 'Slider Settings', '64kitchen' ),
            'description'   => __( 'Slider Section', '64kitchen' ),
        )
    );

// Field 1 - Slider Page Number 1

    $wp_customize->add_setting(
        'set_slider_page1', array(
            'type'                  => 'theme_mod',
            'default'               => '',
            'sanitize_callback'     => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_page1', array(
            'label'         => __( 'Set slidier page 1', '64kitchen' ),
            'description'   => __( 'Set slidier page 1', '64kitchen' ),
            'section'       => 'sec_slider',
            'type'          => 'dropdown-pages'
        )
    );
    
// Field 2 - Slider Button Text Number 1

    $wp_customize->add_setting(
        'set_slider_button_text1', array(
            'type'                  => 'theme_mod',
            'default'               => '',
            'sanitize_callback'     => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_text1', array(
            'label'         => __( 'Buttom Text for Page 1', '64kitchen' ),
            'description'   => __( 'Buttom Text for Page 1', '64kitchen' ),
            'section'       => 'sec_slider',
            'type'          => 'text'
        )
    );

// Field 3 - Slider Button URL Number 1

    $wp_customize->add_setting(
        'set_slider_button_url1', array(
            'type'                  => 'theme_mod',
            'default'               => '',
            'sanitize_callback'     => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_url1', array(
            'label'         => __( 'URL for Page 1', '64kitchen' ),
            'description'   => __( 'URL for Page 1', '64kitchen' ),
            'section'       => 'sec_slider',
            'type'          => 'url'
        )
    );

// Field 4 - Slider Page Number 2

    $wp_customize->add_setting(
        'set_slider_page2', array(
            'type'                  => 'theme_mod',
            'default'               => '',
            'sanitize_callback'     => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_page2', array(
            'label'         => __( 'Set slidier page 2', '64kitchen' ),
            'description'   => __( 'Set slidier page 2', '64kitchen' ),
            'section'       => 'sec_slider',
            'type'          => 'dropdown-pages'
        )
    );
    
// Field 5 - Slider Button Text Number 2

    $wp_customize->add_setting(
        'set_slider_button_text2', array(
            'type'                  => 'theme_mod',
            'default'               => '',
            'sanitize_callback'     => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_text2', array(
            'label'         => __( 'Buttom Text for Page 2', '64kitchen' ),
            'description'   => __( 'Buttom Text for Page 2', '64kitchen' ),
            'section'       => 'sec_slider',
            'type'          => 'text'
        )
    );

// Field 6 - Slider Button URL Number 2

    $wp_customize->add_setting(
        'set_slider_button_url2', array(
            'type'                  => 'theme_mod',
            'default'               => '',
            'sanitize_callback'     => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_url2', array(
            'label'         => __( 'URL for Page 2', '64kitchen' ),
            'description'   => __( 'URL for Page 2', '64kitchen' ),
            'section'       => 'sec_slider',
            'type'          => 'url'
        )
    );


// Field 7 - Slider Page Number 3

    $wp_customize->add_setting(
        'set_slider_page3', array(
            'type'                  => 'theme_mod',
            'default'               => '',
            'sanitize_callback'     => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_page3', array(
            'label'         => __( 'Set slidier page 3', '64kitchen' ),
            'description'   => __( 'Set slidier page 3', '64kitchen' ),
            'section'       => 'sec_slider',
            'type'          => 'dropdown-pages'
        )
    );
    
// Field 8 - Slider Button Text Number 3

    $wp_customize->add_setting(
        'set_slider_button_text3', array(
            'type'                  => 'theme_mod',
            'default'               => '',
            'sanitize_callback'     => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_text3', array(
            'label'         => __( 'Button Text for Page 3', '64kitchen' ),
            'description'   => __( 'Button Text for Page 3', '64kitchen' ),
            'section'       => 'sec_slider',
            'type'          => 'text'
        )
    );

// Field 9 - Slider Button URL Number 3

    $wp_customize->add_setting(
        'set_slider_button_url3', array(
            'type'                  => 'theme_mod',
            'default'               => '',
            'sanitize_callback'     => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_url3', array(
            'label'         => __( 'URL for Page 3', '64kitchen' ),
            'description'   => __( 'URL for Page 3', '64kitchen' ),
            'section'       => 'sec_slider',
            'type'          => 'url'
        )
    );


//---------------------------------------------------------------------------------------------
//  Home Page Settings
    
    $wp_customize->add_section(
        'sec_home_page', array(
            'title'         => __( 'Home Page Products and Blog Settings', '64kitchen' ),
            'description'   => __( 'Home Page Section', '64kitchen' ),
        )
    );

//  Popular Products

    //  Headline

        $wp_customize->add_setting(
            'set_popular_text', array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'sanitize_text_field'
            )
        );
        
        $wp_customize->add_control(
            'set_popular_text', array(
                'label'         => __( 'Set the headline',  '64kitchen' ),
                'description'   => __( 'Sorted by popularity',  '64kitchen' ),
                'section'       => 'sec_home_page',
                'type'          => 'text'
            )
        );

    // Number of products

        $wp_customize->add_setting(
            'set_popular_max_num', array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            'set_popular_max_num', array(
                'label'         => __( 'Popular Products Max Number', '64kitchen' ),
                'description'   => __( 'Popular Products Max Number', '64kitchen' ),
                'section'       => 'sec_home_page',
                'type'          => 'number'
            )
        );    

    //  Number of Columns

        $wp_customize->add_setting(
            'set_popular_max_col', array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            'set_popular_max_col', array(
                'label'         => __( 'Popular Products Max Columns', '64kitchen' ),
                'description'   => __( 'Popular Products Max Columns', '64kitchen' ),
                'section'       => 'sec_home_page',
                'type'          => 'number'
            )
        ); 
    
// New Arrivals

    //  Headline

        $wp_customize->add_setting(
            'set_new_arrivals_text', array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'sanitize_text_field'
            )
        );
        
        $wp_customize->add_control(
            'set_new_arrivals_text', array(
                'label'         => __( 'Set the headline', '64kitchen' ),
                'description'   => __( 'Sorted by newest date', '64kitchen' ),
                'section'       => 'sec_home_page',
                'type'          => 'text'
            )
        );

    // Number of Products

        $wp_customize->add_setting(
            'set_new_arrivals_max_num', array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            'set_new_arrivals_max_num', array(
                'label'         => __( 'New Arrivals Max Number', '64kitchen' ),
                'description'   => __( 'New Arrivals Max Number', '64kitchen' ),
                'section'       => 'sec_home_page',
                'type'          => 'number'
            )
        );    

    // Number of Columns

        $wp_customize->add_setting(
            'set_new_arrivals_max_col', array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            'set_new_arrivals_max_col', array(
                'label'         => __( 'New Arrivals Max Columns', '64kitchen' ),
                'description'   => __( 'New Arrivals Max Columns', '64kitchen' ),
                'section'       => 'sec_home_page',
                'type'          => 'number'
            )
        ); 
    
// Deal of the Week

    //  Headline

        $wp_customize->add_setting(
            'set_deal_text', array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'sanitize_text_field'
            )
        );
        
        $wp_customize->add_control(
            'set_deal_text', array(
                'label'         => __( 'Set the headline for your deal', '64kitchen' ),
                'description'   => __( 'deal', '64kitchen' ),
                'section'       => 'sec_home_page',
                'type'          => 'text'
            )
        );

    // Checkbox

        $wp_customize->add_setting(
            'set_deal_show', array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'sixty4kitchen_sanitize_checkbox'
            )
        );

        $wp_customize->add_control(
            'set_deal_show', array(
                'label'         => __( 'Show Deal of the Week?', '64kitchen' ),
                'section'       => 'sec_home_page',
                'type'          => 'checkbox'
            )
        ); 
    
    // Product ID
        
        $wp_customize->add_setting(
            'set_deal', array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            'set_deal', array(
                'label'         => __( 'Deal of the Week Product ID', '64kitchen' ),
                'description'   => __( 'Product ID to Display', '64kitchen' ),
                'section'       => 'sec_home_page',
                'type'          => 'number'
            )
        ); 

    // Blog

    //  Headline

    $wp_customize->add_setting(
        'set_blog_text', array(
            'type'                  => 'theme_mod',
            'default'               => '',
            'sanitize_callback'     => 'sanitize_text_field'
        )
    );
    
    $wp_customize->add_control(
        'set_blog_text', array(
            'label'         => __( 'Set the headline for your blog section', '64kitchen' ),
            'description'   => __( 'blog', '64kitchen' ),
            'section'       => 'sec_home_page',
            'type'          => 'text'
        )
    );

}
add_action( 'customize_register', 'sixty4kitchen_customizer' );

function sixty4kitchen_sanitize_checkbox( $checked ){
    return ( ( isset ( $checked )  && true == $checked ) ? true : false );
}