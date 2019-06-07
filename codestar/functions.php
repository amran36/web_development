<?php 

// activating system of cs framework

define( 'CS_ACTIVE_FRAMEWORK', true ); // default true
define( 'CS_ACTIVE_METABOX', true ); // default true
define( 'CS_ACTIVE_TAXONOMY', true ); // default true
define( 'CS_ACTIVE_SHORTCODE', false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', false ); // default true

//Enable the light theme feature.

define( 'CS_ACTIVE_LIGHT_THEME',  true  ); // default false

//normal init of codestar example


function skima_codestar_init(){
    CSFramework_Metabox::instance( array() );
    CSFramework::instance( array(), array() );
}
add_action('init', 'skima_codestar_init');

// init from meal theme

function meal_codestar_init() {
	CSFramework_Metabox::instance( array() );
	CSFramework_Taxonomy::instance( array() );
	CSFramework_Shortcode_Manager::instance( array() );

	$settings = array(
		'menu_title'      => __( 'Meal Options', 'meal' ),
		'menu_type'       => 'submenu',
		'menu_parent'     => 'themes.php',
		'menu_slug'       => 'meal_option_panel',
		'framework_title' => __( 'Meal Options', 'meal' ),
		'menu_icon'       => 'dashicons-dashboard',
		'menu_position'   => 20,
		'ajax_save'       => false,
		'show_reset_all'  => true
	);

	new CSFramework( $settings, meal_get_theme_options() );
}

add_action( 'init', 'meal_codestar_init' );





// cs_framework_options example 


function philosophy_theme_option_init() {
    $settings = array(
        'menu_title'      => __( 'Philosophy Options', 'philosophy' ),
        'menu_type'       => 'submenu',
        'menu_parent'     => 'themes.php',
        'menu_slug'       => 'philosophy_option_panel',
        'framework_title' => __( 'Philosophy Options', 'philosophy' ),
        'menu_icon'       => 'dashicons-dashboard',
        'menu_position'   => 20,
        'ajax_save'       => false,
        'show_reset_all'  => true
    );

    $options = philosophy_theme_options();
    new CSFramework( $settings, $options );
}

add_action( "init", "philosophy_theme_option_init" );

function philosophy_theme_options() {
    $options   = array();
    $options[] = array(
        'name'   => 'footer_options',
        'title'  => __( 'Footer Options', 'philosophy' ),
        'icon'   => 'fa fa-edit',
        'fields' => array(
            array(
                'id'      => 'footer_tag',
                'type'    => 'switcher',
                'title'   => __( 'Tags Area Visible?', 'philosophy' ),
                'default' => '0'
            ),
            array(
                'id'    => 'social_facebook',
                'type'  => 'text',
                'title' => __( 'Facebook URL', 'philosophy' )
            ),
            array(
                'id'    => 'social_twitter',
                'type'  => 'text',
                'title' => __( 'Twitter URL', 'philosophy' )
            ),
            array(
                'id'    => 'social_pinterest',
                'type'  => 'text',
                'title' => __( 'Pinterest URL', 'philosophy' )
            ),
        )
    );

    $options[] = array(
        'name'   => 'section_1',
        'title'  => 'Section 1',
        'icon'   => 'fa fa-wifi',
        'fields' => array(

            // a field
            array(
                'id'    => 'metabox_option_id',
                'type'  => 'text',
                'title' => 'An Text Option',
            ),

            // a field
            array(
                'id'    => 'metabox_option_other_id',
                'type'  => 'textarea',
                'title' => 'An Textarea Option',
            ),

        ),
    );

    // begin section


    // begin section
    $options[] = array(
        'name'   => 'section_2',
        'title'  => 'Section 2',
        'icon'   => 'fa fa-heart',
        'fields' => array(

            // a field
            array(
                'id'    => 'metabox_option_2_id',
                'type'  => 'text',
                'title' => 'An Text Option',
            ),

        ),


    );

    $options[] = array(
        'name'   => 'group_section',
        'title'  => __('Group Section','philosophy'),
        'icon'   => 'fa fa-heart',
        'fields' => array(
            array(
                'id'              => 'group_field',
                'type'            => 'group',
                'title'           => __( 'Group Field', 'philosophy' ),
                'button_title'    => __( 'Add New', 'philosophy' ),
                'accordion_title' => __( 'Add New Data', 'philosophy' ),
                'fields'          => array(
                    array(
                        'id'    => 'text_data',
                        'type'  => 'text',
                        'title' => __( 'Some Text', 'philosophy' ),
                    ),
                    array(
                        'id'         => 'select_data',
                        'type'       => 'select',
                        'title'      => __( 'Select Book', 'philosophy' ),
                        'options'    => 'post',
                        'query_args' => array(
                            'posts_per_page' => - 1,
                            'post_type'      => 'book'
                        )
                    ),
                    array(
                        'id'    => 'image_data',
                        'type'  => 'image',
                        'title' => __( 'Upload Image', 'philosophy' ),
                    ),
                )
            ),
        )

    );



    return $options;
}

add_filter( 'cs_framework_options', 'philosophy_theme_options' );