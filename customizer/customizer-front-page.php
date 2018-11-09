<?php

function hsCustomizer($wp_customize){

//https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_section

$wp_customize->add_panel('hosting_solution_theme' , array(

    'title'       => esc_html__('CUSTOM CONTROL Hosting Solution Theme'),
    'description' => esc_html__('In this section you can customize HOSTING SOLUTION Theme by Duilio Fugazzaro', 'hs'),
     'priority' => 18

  ));

$wp_customize->add_section('carousel_section' , array(

    'title'       => esc_html__('Homepage CUSTOM', 'hs'),
    'description' => esc_html__('In this section you can customize the Front Page', 'hs'),
    'panel' => 'hosting_solution_theme' ,

));


/**************************************
**   Controllo MEDIA LOGO upload   **
**************************************/

$wp_customize->add_setting('set_contr_crop_logo' , array(

  'default' => '',

));

$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize , 'contr_crop_logo' , array(

      'label'         => esc_html__('Upload Your LOGO', 'hs'),
      'description'   => esc_html__( 'In this section you can TO LOAD YOUR LOGO.', 'hs' ),
      'section'       => esc_html__('carousel_section' , 'hs'),
      'settings'      => esc_html__('set_contr_crop_logo'),
       'width'        => 260,
       'height'       => 53,
       'flex_width'   => false,
       'flex_height'  => false,

      'button_labels'   => array(
          'select'      => esc_html__('Insert your LOGO'),
          'change'      => esc_html__('Change your LOGO'),
          'remove'      => esc_html__('Remove your LOGO'),
          'placeholder' => esc_html__('No LOGO selected')

    ),

)));

/**************************************
  END  Controllo MEDIA LOGO upload
**************************************/

/**************************************
****   Controllo UPLOAD FILE   ********
**************************************/

  $wp_customize->add_setting('set_contr_upload' , array(
    'default' => '',

  ));

  $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize , 'contr_Upload' , array(


      'label'       => esc_html__('Upload File', 'hs'),
      'description' => esc_html__( 'In this section you can TO LOAD YOUR FILES.', 'hs' ),
      'section'     => esc_html__('carousel_section' , 'hs'),
      'settings'    => esc_html__('set_contr_upload'),

      'button_labels'   => array(
          'select'      => esc_html__('Insert your FILE'),
          'change'      => esc_html__('Change your FILE'),
          'remove'      => esc_html__('Remove your FILE'),
          'placeholder' => esc_html__('No FILE selected')

    ),

  )));

 /**************************************
 **** END  Controllo UPLOAD FILE   *****
 **************************************/

/*  Testo del bottone nel CAROUSEL */

//https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_setting

$wp_customize->add_setting('set_input_text' , array(

    'default'=> esc_html__('Insert custom text'),

));

//https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control

$wp_customize->add_control('input_text' , array(

    'label'       => esc_html__('Text Custom Button Carousel', 'hs'),
    'description' => esc_html__( 'In this section you can personalize the home page of your site.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('text' , 'hs'),
    'settings'    => 'set_input_text',

));

/* END Testo del bottone nel CAROUSEL */

/* Testo h1  sotto il CAROUSEL a SX */

$wp_customize->add_setting('set_input_text_h1' , array(

    'default'=> esc_html__('Insert custom text title section under the Carousel'),

));

$wp_customize->add_control('input_text_h1' , array(

    'label'       => esc_html__('Text title section under the Carousel', 'hs'),
    'description' => esc_html__( 'In this section you can personalize Text TITLE under the Carousel.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('textarea' , 'hs'),
    'settings'    => 'set_input_text_h1',

));

/* END Testo h1  sotto il CAROUSEL a SX */

/* Testo p  sotto il CAROUSEL a DX */

$wp_customize->add_setting('set_input_text_p' , array(

    'default'=> esc_html__('Insert custom text section under the Carousel'),

));

$wp_customize->add_control('input_textarea' , array(

    'label'       => esc_html__('Text custom section under Carousel', 'hs'),
    'description' => esc_html__( 'In this section you can personalize Text section under the Carousel.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('textarea' , 'hs'),
    'settings'    => esc_html__('set_input_text_p'),

));

/* END Testo p  sotto il CAROUSEL a DX */


/* Testo h1  SECTION VIDEO a SX */

$wp_customize->add_setting('set_input_text_h1_video' , array(

    'default'=> esc_html__('Insert custom text title section VIDEO SECTION'),

));

$wp_customize->add_control('input_text_h1_video' , array(

    'label'       => esc_html__('Text TITLE section VIDEO', 'hs'),
    'description' => esc_html__( 'In this section you can personalize TITLE VIDEO.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('text' , 'hs'),
    'settings'    => esc_html__('set_input_text_h1_video'),

));

/* END Testo h1  SECTION VIDEO a SX */

/* Testo p  SECTION VIDEO a DX */

$wp_customize->add_setting('set_input_text_p_video' , array(

    'default'=> esc_html__('Insert custom TEXT section VIDEO SECTION'),

));

$wp_customize->add_control('input_text_p_video' , array(

    'label'       => esc_html__('Text Custom section VIDEO', 'hs'),
    'description' => esc_html__( 'In this section you can personalize TEXT VIDEO.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('text' , 'hs'),
    'settings'    => esc_html__('set_input_text_p_video'),

));

/* END Testo p  SECTION VIDEO a DX */

/* Testo BOTTONE  SECTION VIDEO */

$wp_customize->add_setting('set_input_text_button_video' , array(

    'default'=> esc_html__('Insert custom TEXT BUTTON VIDEO SECTION'),

));

$wp_customize->add_control('input_text_button_video' , array(

    'label'       => esc_html__('Text Custom Button VIDEO', 'hs'),
    'description' => esc_html__( 'In this section you can personalize TEXT BUTTON VIDEO.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('text' , 'hs'),
    'settings'    => esc_html__('set_input_text_button_video'),

));

/* END Testo BOTTONE  SECTION VIDEO */

/* UPLOAD Video per VIDEO SECTION */

$wp_customize->add_setting('set_contr_Media_video' , array(

    'default'=> '',
));

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize , 'contr_Media_Video' , array(

    'label'       => esc_html__('Upload Video', 'hs'),
    'description' => esc_html__( 'In this section you can TO LOAD YOUR VIDEO.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'mime_type'   => esc_html__('video' , 'hs'),
    'settings'    => esc_html__('set_contr_Media_video'),

)));

/* END UPLOAD Video per VIDEO SECTION */

/* Testo h1 PRIMA riga SECTION-WHITE */

$wp_customize->add_setting('set_input_text_section_white' , array(

    'default'=> esc_html__('A QUALITY PROJECT FOR THE'),

));

$wp_customize->add_control('input_text_section_white' , array(

    'label'       => esc_html__('Custom text h1 FIRST line white section', 'hs'),
    'description' => esc_html__( 'In this section you can personalize text h1 FIRST line white section.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('text' , 'hs'),
    'settings'    => esc_html__('set_input_text_section_white'),

));
/* END Testo h1 PRIMA riga SECTION-WHITE */

/* Testo h1 SECONDA riga SECTION-WHITE */

$wp_customize->add_setting('set_input_text_section_white_second' , array(

    'default'=> esc_html__('DISSEMINATION OF HIGH QUALITY'),
    'sanitize_callback' => 'sanitize_duilio'

));

$wp_customize->add_control('input_text_section_white_second' , array(

    'label'       => esc_html__('Custom text h1 SECOND line white section', 'hs'),
    'description' => esc_html__( 'In this section you can personalize text h1 SECOND line white section.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('text' , 'hs'),

));
/* FINE Testo h1 SECONDA riga SECTION-WHITE */

/* Testo h1 TERZA riga SECTION-WHITE */

$wp_customize->add_setting('set_input_text_section_white_third' , array(

    'default'=> esc_html__('WEBSITES.'),

));

$wp_customize->add_control('input_text_section_white_third' , array(

    'label'       => esc_html__('Custom text h1 THIRD line white section', 'hs'),
    'description' => esc_html__( 'In this section you can personalize text h1 THIRD line white section.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('text' , 'hs'),
    'settings'    => esc_html__('set_input_text_section_white_third'),

));

/* PARAGRAFO SECTION-WHITE */

$wp_customize->add_setting('set_input_text_p_section_white' , array(

    'default'=> esc_html__('Insert custom text paragraph section white'),

));

$wp_customize->add_control('input_text_p_section_white' , array(

    'label'       => esc_html__('Custom text Paragraph SECTION WHITE', 'hs'),
    'description' => esc_html__( 'In this section you can personalize paragraph section white.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('textarea' , 'hs'),
    'settings'    => esc_html__('set_input_text_p_section_white'),

));

/* FINE PARAGRAFO SECTION-WHITE */

/* TEXT AREA */

require_once('custom-control/CustomClassTextareaEditor.php');

$wp_customize->add_setting('set_input_editor_textarea' , array(

    'default'=> 'DDDDDDDDD',

));
/* END TEXT AREA che non funziona */
$wp_customize->add_control(new CustomClassTextareaEditor ($wp_customize, 'input_text_area' , array(

    'label'       => esc_html__('SHORTCODE OF CONTACT FORM', 'hs'),
    'description' => esc_html__( 'In this section you can personalize SHORTCODE OF CONTACT FORM.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('input_text_area' , 'hs'),
    'settings'    => 'set_input_editor_textarea',

)));

/* Testo h2 SECTION VIOLET */

$wp_customize->add_setting('set_input_h2_text_section_violet' , array(

    'default'=> esc_html__('YOU ARE LOOKING FOR A DEVELOPER ADAPTED TO YOUR NEEDS..?'),

));

$wp_customize->add_control('input_h2_text_section_violet' , array(

    'label'       => esc_html__('Custom text h2 VIOLET section', 'hs'),
    'description' => esc_html__( 'In this section you can personalize text h2 VIOLET section.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('text' , 'hs'),
    'settings'    => esc_html__('set_input_h2_text_section_violet'),

));

/* End Testo he SECTION VIOLET */

/* Testo BOTTONE  SECTION VIDEO */

$wp_customize->add_setting('set_input_text_button_section_violet' , array(

    'default'=> esc_html__('Insert custom TEXT BUTTON SECTION VIOLET'),

));

$wp_customize->add_control('input_text_button_section_violet' , array(

    'label'       => esc_html__('Text Custom Button SECTION VIOLET', 'hs'),
    'description' => esc_html__( 'In this section you can personalize TEXT BUTTON SECTION VIOLET.', 'hs' ),
    'section'     => esc_html__('carousel_section' , 'hs'),
    'type'        => esc_html__('text' , 'hs'),
    'settings'    => esc_html__('set_input_text_button_section_violet'),

));

/* END Testo BOTTONE  SECTION VIDEO */
}

add_action('customize_register' , 'hsCustomizer');

function play_video(){
  $id_video = get_theme_mod('set_contr_Media_video');
  $url_video =  wp_get_attachment_url( $id_video ); ?>
  <video autoplay muted loop poster>
  <source src="<?php echo $url_video; ?>" type="video/mp4">

</video>

<?php

};
