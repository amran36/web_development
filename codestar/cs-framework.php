<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
function skima_option_settings($settings){
    $settings           = array(
      'menu_title'      => 'Theme Options',
      'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
      'menu_slug'       => 'skima-theme-option',
      'ajax_save'       => false,
      'show_reset_all'  => true,
      'framework_title' => 'Theme Options <small>by Md Amran Miah</small>',
    );
    return $settings;
}
add_filter('cs_framework_settings', 'skima_option_settings');


// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------


function skima_options( $options ){
    
$options[] = array(
  'name'   => 'overview',
  'title'  => __('Theme Overview', 'skima'),
  'icon'   => 'fa fa-id-card-o',
  'fields' => array(
        array(
            'type' => 'notice',
            'class' => 'danger',
            'content' => '<h3>Theme Overview</h3>',
        ),
        array(
            'type' => 'notice',
            'class' => 'success',
            'content' => 'Skima brings your site to life with immersive featured images and subtle animations. With a focus on business sites, it features multiple sections on the front page as well as widgets, navigation and social menus, a logo, and more. Personalize its asymmetrical grid with a custom color scheme and showcase your multimedia content with post formats. Our default theme for 2017 works great in many languages, for any abilities, and on any device.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam necessitatibus, a fugiat nihil autem iste eum nulla recusandae natus. Debitis.',
        ),
    ),
);





// ------------------------------
// Homepage Sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'homepage_options',
  'title'    =>  __('Homepgae Options', 'skima'),
  'icon'     => 'fa fa-home',
  'sections' => array(

    // sub section 1
    array(
      'name'     => 'hero_section',
      'title'    =>  __('Hero Content', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'hero_title',
          'type'    => 'text',
          'title'    =>  __('Hero text title', 'skima'),
          'default' => 'We’re Incredible. We Make Good Shit!',
        ),
        array(
          'id'    => 'hero_content',
          'type'    => 'textarea',
          'title'    => __('Hero text Content', 'skima'),
          'default' => 'Developer at Plentific, alumni of the Interactive Art Director programme at Hyper Island in Stockholm, Sweden I graduated with distinction from there.',
        ),
        array(
          'id'    => 'hero_button_text',
          'type'    => 'text',
          'title'    =>  __('Hero Button Text', 'skima'),
          'default' => 'Contact Us',
        ),
      )
    ),

    // sub section 2
    array(
      'name'     => 'home_promo',
      'title'    =>  __('Promo Section', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'promo_title',
          'type'    => 'text',
          'title'    =>  __('Promo title', 'skima'),
          'default' => 'We create beautiful designs for businesses to succeed & develop!',
        ),
        array(
          'id'    => 'promo_content',
          'type'    => 'textarea',
          'title'    => __('Promo Content', 'skima'),
          'default' => 'We are among those who love what they are doing! GUI development, icons and logos design, illustrations drawing and mobile application development - all these things do inspire us!

The world has become so fast paced that people don’t want to stand by reading a page of information.',
        ),
        array(
          'id'    => 'promo_image',
          'type'    => 'image',
          'title'    => __('Upload Promo Image', 'skima'),
          'default' => '',
        ),
      ),
    ),
      
    // sub section 3
    array(
      'name'     => 'home_service',
      'title'    =>  __('Service Section', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'service_title',
          'type'    => 'text',
          'title'    =>  __('Service title', 'skima'),
          'default' => 'Our Services',
        ),
        array(
          'id'    => 'service_content',
          'type'    => 'textarea',
          'title'    => __('Service Content', 'skima'),
          'default' => 'Wir verstehen uns als externes Lorem ipsum das und Brands auf ihrem yue sjvdi.',
        ),
      ),
    ),
      
  // sub section 4
    array(
      'name'     => 'portfolio_area',
      'title'    =>  __('portfolio Promo', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'portfolio_title',
          'type'    => 'text',
          'title'    =>  __('portfolio Promo title', 'skima'),
          'default' => 'Our Work Samples',
        ),
        array(
          'id'    => 'portfolio_content',
          'type'    => 'textarea',
          'title'    => __('portfolio Promo Content', 'skima'),
          'default' => 'Wir verstehen uns als externes Lorem ipsum das und Brands auf ihrem yue sjvdi.',
        ),
      ),
    ),

    // sub section 5
    array(
      'name'     => 'client_area',
      'title'    =>  __('Client Section', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'client_title',
          'type'    => 'text',
          'title'    =>  __('Client title', 'skima'),
          'default' => 'Clients We Have Worked',
        ),
        array(
          'id'    => 'client_content',
          'type'    => 'textarea',
          'title'    => __('Client Content', 'skima'),
          'default' => 'Wir verstehen uns als externes Lorem ipsum das Unternehmen und Brands auf ihrem Weg in eine erfolgreiche.',
        ),
        array(
          'id'    => 'client_logo',
          'type'    => 'gallery',
          'title'    => __('Upload Client logos', 'skima'),
          'after' => '<br/>Upload your client logos, where you have Worked',
        ),
      ),
    ),



    // sub section 6
    array(
      'name'     => 'video_area',
      'title'    =>  __('Video Section', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'video_visible',
          'type'    => 'switcher',
          'title'    =>  __('Hide Or Show Video Area', 'skima'),
          'default' => 1,
        ),
        array(
          'id'    => 'video_title',
          'type'    => 'text',
          'title'    =>  __('Video title', 'skima'),
          'default' => 'Our doors are now open- walk in!',
        ),
        array(
          'id'    => 'video_content',
          'type'    => 'textarea',
          'title'    => __('Video Content', 'skima'),
          'default' => 'We are now accepting new proposals and would be more than happy to hear from you. Get in touch with us today and see your business transformed.',
        ),
        array(
          'id'    => 'video_link',
          'type'    => 'text',
          'title'    => __('Video link here', 'skima'),
          'default' => 'https://www.youtube.com/watch?v=FBq2BGDAZ4Y',
          'after' => '<br/>Paste Video link here -> from youtube.',
        ),
      ),
    ),
      

    // sub section 7
    array(
      'name'     => 'contact_area',
      'title'    =>  __('Contact Info', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'contact_title',
          'type'    => 'text',
          'title'    =>  __('Contact title', 'skima'),
          'default' => 'Drop Us a Line',
        ),
        array(
          'id'    => 'contact_content',
          'type'    => 'textarea',
          'title'    => __('Contact Content', 'skima'),
          'default' => 'Wir verstehen uns als externes Lorem ipsum das Unternehmen und Brands auf ihrem Weg in eine erfolgreiche.',
        ),
      ),
    ),

    // sub section 8
    array(
      'name'     => 'footer_contact',
      'title'    =>  __('Footer Contact', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'contact_visible',
          'type'    => 'switcher',
          'title'    =>  __('Show/Hide Contact Info', 'skima'),
          'default' => 1,
        ),
        array(
          'id'    => 'contact_number',
          'type'    => 'text',
          'title'    =>  __('Contact Number', 'skima'),
          'default' => '+546 211 975 316 564 ',
        ),
        array(
          'id'    => 'contact_email',
          'type'    => 'text',
          'title'    => __('Contact Email', 'skima'),
          'default' => 'info@deviserweb.com',
        ),
        array(
          'id'    => 'contact_address',
          'type'    => 'textarea',
          'title'    => __('Contact Address', 'skima'),
          'default' => '27/A DeviserWeb selstrasse,DVG40479 Düsseldorf',
        ),
      ),
    ),



  ),
);
    

// ------------------------------
// About Sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'about_options',
  'title'    =>  __('About Options', 'skima'),
  'icon'     => 'fa fa-address-card-o',
  'sections' => array(

    // sub section 1
    array(
      'name'     => 'about_promo',
      'title'    =>  __('About Promo', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'about_promo_visible',
          'type'    => 'switcher',
          'title'    =>  __('Show/Hide Promo Area', 'skima'),
          'default' => 1,
          'after' => '<br/><br/><i>You can show/hide Promo area by this Switcher</i>',
        ),
        array(
          'id'    => 'about_promo_title',
          'type'    => 'text',
          'title'    =>  __('About Promo title', 'skima'),
          'default' => 'We create beautiful designs for businesses to succeed & develop!',
        ),
        array(
          'id'    => 'about_promo_content',
          'type'    => 'textarea',
          'title'    => __('About Promo Content', 'skima'),
          'default' => 'As soon as Computerized Tomography or CT scans became accessible in the 1970s, they reformed the practice of neurology. They did the scans by transmitting x-ray streams all the way through.

TAfter that, in the 1980s Magnetic Resonance Imaging or MRI scans came into the picture and astounded the medical society by not just taking.',
        ),
        array(
          'id'    => 'about_promo_image',
          'type'    => 'image',
          'title'    =>  __('About Promo Image', 'skima'),
          //'default' => '',
        ),
      )
    ),
      
    // sub section 2
    array(
      'name'     => 'about_heading',
      'title'    =>  __('About Heading', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'about_heading_visible',
          'type'    => 'switcher',
          'title'    =>  __('Show/Hide About Heading Area', 'skima'),
          'default' => 1,
        ),
        array(
          'id'    => 'about_heading_title',
          'type'    => 'text',
          'title'    =>  __('About Heading title', 'skima'),
          'default' => 'A sample heading goes here!',
        ),
        array(
          'id'    => 'about_heading_content',
          'type'    => 'textarea',
          'title'    => __('About Heading Content', 'skima'),
          'default' => 'According to the research firm Frost & Sullivan, the estimated size of the North American used test and measurement equipment market was $446.4 million in 2004 and is estimated to grow to $654.5 million by 2011. For over 50 years, companies and governments have procured used test and measurement instruments in order to realize a number of benefits including the need to:

Purchasing used, refurbished or rebuilt electronic test equipment is a great way for organizations to save 30-70% on their asset acquisition costs. Warranties and guarantees from used test equipment vendors are formidable.',
        ),
      )
    ),

      
    // sub section 3
    array(
      'name'     => 'client_feedback',
      'title'    =>  __('Client Feedback', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'client_visible',
          'type'    => 'switcher',
          'title'    =>  __('Show/Hide Client area', 'skima'),
          'desc'    =>  __('<i>You Can Show/Hide Client area by this switcher</i>', 'skima'),
          'default' => 1,
        ),
        array(
          'id'    => 'client_feedback_title',
          'type'    => 'text',
          'title'    =>  __('Client Feedback Title', 'skima'),
          'default' => 'Client Feedbacks',
        ),
        array(
          'id'    => 'client_feedback_content',
          'type'    => 'textarea',
          'title'    => __('Client Feedback Content', 'skima'),
          'default' => 'Wir verstehen uns als externes Lorem ipsum das Unternehmen und Brands auf ihrem Weg in eine erfolgreiche.',
        ),
          array(
          'id'        => 'client_groups',
          'type'      => 'group',
          'title'     => __('Add Client Reviews', 'skima'),
          'button_title'     => __('Add New Client', 'skiam'),
          'fields'    => array(
            array(
              'id'    => 'client_review_text',
              'type'  => 'textarea',
              'title' => __('Client Review Text', 'skima'),
              'after' => __('<i>Type your Client Review Message</i>', 'skima'),
            ),
            array(
              'id'    => 'client_image',
              'type'  => 'image',
              'title' => __('Client Image', 'skima'),
              'desc' => __('Upload Client Image', 'skima'),
            ),
            array(
              'id'    => 'client_name',
              'type'  => 'text',
              'title' => __('Client Name', 'skima'),
            ),
            array(
              'id'    => 'client_position',
              'type'  => 'text',
              'title' => __('Client Job Position', 'skima'),
            ),
            array(
              'id'    => 'client_company',
              'type'  => 'text',
              'title' => __('Client Company Name', 'skima'),
            ),
          ),
        ),
      )
    ),
   
    // sub section 4
    array(
      'name'     => 'team_area',
      'title'    =>  __('Team Member', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'team_visible',
          'type'    => 'switcher',
          'title'    =>  __('Show/Hide Team Section', 'skima'),
          'after' => __('<br/><br/>You Can Show/Hide Team Section by this switcher.', 'skima'),
          'default' => 1,
        ),
        array(
          'id'    => 'team_promo_title',
          'type'    => 'text',
          'title'    =>  __('Team Promo Title', 'skima'),
          'default' => 'Our Team Member',
        ),
        array(
          'id'    => 'team_promo_content',
          'type'    => 'textarea',
          'title'    => __('Team Promo Content', 'skima'),
          'default' => 'Wir verstehen uns als externes Lorem ipsum das Unternehmen und Brands auf ihrem Weg in eine erfolgreiche.',
        ),
          array(
          'id'        => 'team_groups',
          'type'      => 'group',
          'title'     => __('Add Team Member', 'skima'),
          'button_title'     => __('Add New Member', 'skiam'),
          'fields'    => array(
            array(
              'id'    => 'member_name',
              'type'  => 'text',
              'title' => __('Team Member Name', 'skima'),
              'desc' => __('Enter Team Member Name', 'skima'),
            ),
            array(
              'id'    => 'member_position',
              'type'  => 'text',
              'title' => __('Team Member Position', 'skima'),
              'desc' => __('Enter Team Member Position', 'skima'),
            ),
            array(
              'id'    => 'member_compnay_name',
              'type'  => 'text',
              'title' => __('Team Member compnay Name', 'skima'),
              'desc' => __('Enter Team Member compnay Name', 'skima'),
            ),
            array(
              'id'    => 'member_image',
              'type'  => 'image',
              'title' => __('Team Member Image', 'skima'),
              'desc' => __('Upload Team Member Image', 'skima'),
            ),
            array(
              'id'    => 'member_facebook_url',
              'type'  => 'text',
              'title' => __('Team Member facebook URL', 'skima'),
            ),
            array(
              'id'    => 'member_twitter_url',
              'type'  => 'text',
              'title' => __('Team Member Twitter URL', 'skima'),
            ),
            array(
              'id'    => 'member_google_url',
              'type'  => 'text',
              'title' => __('Team Member Google+ URL ', 'skima'),
            ),
          ),
        ),
      ),
    ),
      
    // sub section 5
    array(
      'name'     => 'about_cta',
      'title'    =>  __('About CTA', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'about_cta_visible',
          'type'    => 'switcher',
          'title'    =>  __('Show/Hide CTA area', 'skima'),
          'default' => 1,
        ),
        array(
          'id'    => 'about_cta_title',
          'type'    => 'textarea',
          'title'    =>  __('CTA Text', 'skima'),
          'default' => 'Can not find answer? Don’t worry, our awward winning support team will help you',
        ),
        array(
          'id'    => 'cta_button_text',
          'type'    => 'text',
          'title'    => __('CTA Button Text', 'skima'),
          'default' => 'Contact Us',
        ),
      )
    ),

   

  ),
);    

// ------------------------------
// About Sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'service_options',
  'title'    =>  __('Service Options', 'skima'),
  'icon'     => 'fa fa-address-card-o',
  'sections' => array(

    // sub section 1
    array(
      'name'     => 'service_feedback',
      'title'    =>  __('service Area', 'skima'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'id'    => 'service_visible',
          'type'    => 'switcher',
          'title'    =>  __('Show/Hide service area', 'skima'),
          'desc'    =>  __('<i>You Can Show/Hide service area by this switcher</i>', 'skima'),
          'default' => 1,
        ),
        array(
          'id'    => 'service_title',
          'type'    => 'text',
          'title'    =>  __('Service area Title', 'skima'),
          'default' => 'Choose Your Plan',
        ),
        array(
          'id'    => 'service_feedback_content',
          'type'    => 'textarea',
          'title'    => __('service Feedback Content', 'skima'),
          'default' => '',
        ),
          array(
          'id'        => 'pricing_groups',
          'type'      => 'group',
          'title'     => __('Add Pricing Reviews', 'skima'),
          'button_title'     => __('Add New Plan', 'skiam'),
          'fields'    => array(
            array(
              'id'    => 'pricing_title',
              'type'  => 'text',
              'title' => __('Pricing Title', 'skima'),
              'after' => __('<br/><i>Type your Pricing title here</i>', 'skima'),
            ),
            array(
              'id'    => 'pricing_plans',
              'type'  => 'textarea',
              'title' => __('Enter Pricing Plans here', 'skima'),
              'after' => __('<br/>Press Enter After Every <i>Plan.</i>', 'skima'),
            ),
            array(
              'id'    => 'price',
              'type'  => 'text',
              'title' => __('Plan Price', 'skima'),
              'after' => __('<br/><i>Enter here your plan price here with($) sin</i>', 'skima'),
            ),
            array(
              'id'    => 'price_action',
              'type'  => 'text',
              'title' => __('Plan Action Link', 'skima'),
              'after' => __('<br/><i>Enter here your plan link here</i>', 'skima'),
            ),
          ),
        ),
      ),
    ),
  ),
);
    
$options[]    = array(
  'name'      => 'section_1',
  'title'     => 'Section #1',
  'icon'      => 'fa fa-repeat',
  'fields'    => array(

    // a text field
    array(
      'id'    => 'section_1_text',
      'type'  => 'text',
      'title' => 'Text Option Field',
    ),

    // a textarea field
    array(
      'id'    => 'section_1_textarea',
      'type'  => 'textarea',
      'title' => 'Textarea Option Field',
    ),

  )
);
    

return $options;

}
add_filter('cs_framework_options', 'skima_options');





