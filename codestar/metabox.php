<?php


// Page metabox example

function meal_section_picker_metabox($metaboxes){
	
    $page_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    if ( ! in_array( $current_page_template, array( 'page-templates/landing.php' ) ) ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal-page-sections',
        'title'     => __( 'Sections', 'meal' ),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'meal-page-sections-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'sections',
                        'title'   => __( 'Select sections', 'meal' ),
                        'type'    => 'group',
                        'button_title'    => __('New Section','meal'),
                        'accordion_title' => __('Add New Section','meal'),
                        'fields'=>array(
                            array(
                                'id'=>'section',
                                'title'=>__('Select sections','meal'),
                                'type'=>'select',
                                'options'=>'post',
                                'query_args'=>array(
                                    'post_type'=>'section',
                                    'posts_per_page'=>-1
                                )
                            )
                        )
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}
add_filter('cs_metabox_options','meal_section_picker_metabox');



// meatbox of pricing table

function meal_pricing_metabox($metaboxes){
    $page_id = 0;
    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    $current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
    if ( ! in_array( $current_page_template, array( 'page-templates/pricing.php' ) ) ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal-pricing-options',
        'title'     => __( 'Pricing Options', 'meal' ),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'meal-pricing-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'plan-one-title',
                        'title'   => __( 'Plan One Title', 'meal' ),
                        'type'    => 'text',
                    ),
	                array(
                        'id'    => 'plan-two-title',
                        'title'   => __( 'Plan Two Title', 'meal' ),
                        'type'    => 'text',
                    ),
	                array(
                        'id'    => 'plan-one-action',
                        'title'   => __( 'Plan One Url', 'meal' ),
                        'type'    => 'text',
                    ),
	                array(
                        'id'    => 'plan-two-action',
                        'title'   => __( 'Plan Two Url', 'meal' ),
                        'type'    => 'text',
                    ),
	                array(
                        'id'    => 'items',
                        'title'   => __( 'Items', 'meal' ),
                        'type'    => 'textarea',
                    ),
	                array(
                        'id'    => 'plan-one-items',
                        'title'   => __( 'Plan One Items', 'meal' ),
                        'type'    => 'textarea',
                    ),
	                array(
                        'id'    => 'plan-two-items',
                        'title'   => __( 'Plan Two Items', 'meal' ),
                        'type'    => 'textarea',
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}
add_filter('cs_metabox_options','meal_pricing_metabox');



// banner section metabox

function meal_banner_section_metabox($metaboxes){
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if('section'!=get_post_type($section_id)){
        return $metaboxes;
    }

    $section_meta = get_post_meta($section_id,'meal-section-type',true);
    $section_type = $section_meta['type'];
    if('banner'!=$section_type){
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal-section-banner',
        'title'     => __( 'Banner Settings', 'meal' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'meal-banner-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 'banner_image',
                        'title'   => __( 'Banner Image', 'meal' ),
                        'type'    => 'image',
                    ),
                    array(
                        'id'    => 'button_title',
                        'title'   => __( 'Button Title', 'meal' ),
                        'type'    => 'text',
                    ),array(
                        'id'    => 'button_target',
                        'title'   => __( 'Button Target', 'meal' ),
                        'type'    => 'text',
                    ),
                )
            ),

        )
    );

    return $metaboxes;
}
add_filter('cs_metabox_options','meal_banner_section_metabox');

// repatable group metaboxes with fieldset meta


function meal_chef_section_metabox( $metaboxes ) {
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }

    $section_meta = get_post_meta( $section_id, 'meal-section-type', true );
    $section_type = $section_meta['type'];
    if ( 'chef' != $section_type ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal-section-chef',
        'title'     => __( 'Chef Settings', 'meal' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'   => 'meal-chef-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'              => 'chef',
                        'type'            => 'group',
                        'title'           => __( 'Chefs', 'meal' ),
                        'button_title'    => __( 'New Chef', 'meal' ),
                        'accordion_title' => __( 'Add New Chef', 'meal' ),
                        'fields'          => array(
                            array(
                                'id'    => 'name',
                                'title' => __( 'Name', 'meal' ),
                                'type'  => 'text',
                            ),
                            array(
                                'id'    => 'image',
                                'title' => __( 'Image', 'meal' ),
                                'type'  => 'image',
                            ),
                            array(
                                'id'    => 'title',
                                'title' => __( 'title', 'meal' ),
                                'type'  => 'text',
                            ),
                            array(
                                'id'    => 'bio',
                                'title' => __( 'Bio', 'meal' ),
                                'type'  => 'textarea',
                            ),
                            array(
                                'id'        => 'social_profiles',
                                'type'      => 'fieldset',
                                'title'     => __( 'Social Profiles', 'meal' ),
                                'fields'    => array(

                                    array(
                                        'id'    => 'facebook',
                                        'type'  => 'text',
                                        'title' => __( 'Facebook', 'meal' ),
                                    ),
                                    array(
                                        'id'    => 'twitter',
                                        'type'  => 'text',
                                        'title' => __( 'Twitter', 'meal' ),
                                    ),
                                    array(
                                        'id'    => 'instagram',
                                        'type'  => 'text',
                                        'title' => __( 'Instagram', 'meal' ),
                                    ),

                                ),
                            ),
                        )
                    ),

                )
            ),

        )
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'meal_chef_section_metabox' );


// gallery metaboxes


function meal_gallery_section_metabox( $metaboxes ) {
	$section_id = 0;

	if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
		$section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
	}

	if ( 'section' != get_post_type( $section_id ) ) {
		return $metaboxes;
	}

	$section_meta = get_post_meta( $section_id, 'meal-section-type', true );
	$section_type = $section_meta['type'];
	if ( 'gallery' != $section_type ) {
		return $metaboxes;
	}

	$metaboxes[] = array(
		'id'        => 'meal-section-gallery',
		'title'     => __( 'Gallery Settings', 'meal' ),
		'post_type' => 'section',
		'context'   => 'normal',
		'priority'  => 'default',
		'sections'  => array(
			array(
				'name'   => 'meal-gallery-section-one',
				'icon'   => 'fa fa-image',
				'fields' => array(
					array(
						'id'      => 'nimages',
						'title'   => __( 'Number of Images', 'meal' ),
						'type'    => 'text',
						'default' => 6
					),
					array(
						'id'              => 'portfolio',
						'type'            => 'group',
						'title'           => __( 'Portfolio', 'meal' ),
						'button_title'    => __( 'New Image', 'meal' ),
						'accordion_title' => __( 'Add New Image', 'meal' ),
						'fields'          => array(
							array(
								'id'    => 'title',
								'title' => __( 'Title', 'meal' ),
								'type'  => 'text',
							),
							array(
								'id'    => 'image',
								'title' => __( 'Image', 'meal' ),
								'type'  => 'image',
							),
							array(
								'id'    => 'categories',
								'title' => __( 'Categories', 'meal' ),
								'type'  => 'text',
							),
						)
					),

				)
			),

		)
	);

	return $metaboxes;
}

add_filter( 'cs_metabox_options', 'meal_gallery_section_metabox' );

// select metabox example


function meal_services_section_metabox( $metaboxes ) {
    $section_id = 0;

    if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
        $section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if ( 'section' != get_post_type( $section_id ) ) {
        return $metaboxes;
    }

    $section_meta = get_post_meta( $section_id, 'meal-section-type', true );
    $section_type = $section_meta['type'];
    if ( 'services' != $section_type ) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id'        => 'meal-section-services',
        'title'     => __( 'services Settings', 'meal' ),
        'post_type' => 'section',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'   => 'meal-services-section-one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'              => 'services',
                        'type'            => 'group',
                        'title'           => __( 'Services', 'meal' ),
                        'button_title'    => __( 'New Service', 'meal' ),
                        'accordion_title' => __( 'Add New Service', 'meal' ),
                        'fields'          => array(
                            array(
                                'id'    => 'name',
                                'title' => __( 'Name', 'meal' ),
                                'type'  => 'text',
                            ),
                            array(
                                'id'    => 'icon',
                                'title' => __( 'Icon', 'meal' ),
                                'type'  => 'select',
                                'options'=>array(
                                    'flaticon-chicken'=>__('Chicken','meal'),
                                    'flaticon-pancake'=>__('Pancake','meal'),
                                    'flaticon-salad'=>__('Salad','meal'),
                                    'flaticon-vegetables'=>__('Vegetables','meal'),
                                    'flaticon-soup'=>__('Soup','meal'),
                                    'flaticon-tray'=>__('Tray','meal'),
                                )
                            ),
                            array(
                                'id'    => 'description',
                                'title' => __( 'Description', 'meal' ),
                                'type'  => 'textarea',
                            ),

                        )
                    ),

                )
            ),

        )
    );

    return $metaboxes;
}

add_filter( 'cs_metabox_options', 'meal_services_section_metabox' );

