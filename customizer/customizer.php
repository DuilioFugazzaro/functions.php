<?php

function hsCustomizer($wp_customize){

//codice theme Option

//https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_section

$wp_customize->add_section('test_section' , array(

    'title'       => esc_html__('Homepage CUSTOM', 'hs'),
    'description' => esc_html__('Description of new section', 'hs'),

));

//https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_setting

$wp_customize->add_setting('set_input_text' , array(

    'default'=> esc_html__('Insert custom text'),


));

//https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control

$wp_customize->add_control('input_text' , array(


    'label'       => esc_html__('Home Page CUSTOMIZATION PANEL', 'hs'),
    'description' => esc_html__( 'In this section you can personalize the home page of your site.', 'hs' ),
    'section'     => esc_html__('test_section' , 'hs'),
    'type'        => esc_html__('text' , 'hs'),
    'settings'    => 'set_input_text',


));







}

add_action('customize_register' , 'hsCustomizer');




 ?>
