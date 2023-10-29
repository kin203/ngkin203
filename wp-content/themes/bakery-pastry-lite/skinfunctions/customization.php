<?php

function bakery_pastry_lite_customize_register($wp_customize) {

    $wp_customize->add_section('bakery_pastry_lite_header', array(
        'title'       => esc_html__(' Header Phone, email and address', 'bakery-pastry-lite'),
        'description' => '',
        'priority'    => 30,
    ));

    $wp_customize->add_section('bakery_pastry_lite_social', array(
        'title'       => esc_html__(' Social Link', 'bakery-pastry-lite'),
        'description' => '',
        'priority'    => 35,
    ));

    $wp_customize->add_section('bakery_pastry_lite_footer', array(
        'title'       => esc_html__(' Footer', 'bakery-pastry-lite'),
        'description' => '',
        'priority'    => 37,
    ));

    //  =============================
    //  = Text Input phone number                =
    //  =============================
    $wp_customize->add_setting('bakery_pastry_lite_phone', array(
        'default'           => '',
        'sanitize_callback' => 'bakery_pastry_lite_sanitize_phone_number'
    ));

    $wp_customize->add_control('bakery_pastry_lite_phone', array(
        'label'   => esc_html__('Phone Number', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_header',
        'setting' => 'bakery_pastry_lite_phone',
        'type'    => 'text'
    ));

    //  =============================
    //  = Text Input Email                =
    //  =============================
    $wp_customize->add_setting('bakery_pastry_lite_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email'
    ));

    $wp_customize->add_control('bakery_pastry_lite_email', array(
        'label'   => esc_html__('Email', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_header',
        'setting' => 'bakery_pastry_lite_email',
        'type'    => 'email'
    ));

    
    //  =============================
    //  = Text Input facebook                =
    //  =============================
    $wp_customize->add_setting('bakery_pastry_lite_fb', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('bakery_pastry_lite_fb', array(
        'label'   => esc_html__('Facebook', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_social',
        'setting' => 'bakery_pastry_lite_fb',
        'type'    => 'url'
    ));
    //  =============================
    //  = Text Input Twitter                =
    //  =============================
    $wp_customize->add_setting('bakery_pastry_lite_twitter', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('bakery_pastry_lite_twitter', array(
        'label'   => esc_html__('Twitter', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_social',
        'setting' => 'bakery_pastry_lite_twitter',
        'type'    => 'url'
    ));
    //  =============================
    //  = Text Input googleplus                =
    //  =============================
    $wp_customize->add_setting('bakery_pastry_lite_youtube', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('bakery_pastry_lite_youtube', array(
        'label'   => esc_html__('YouTube', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_social',
        'setting' => 'bakery_pastry_lite_youtube',
        'type'    => 'url'
    ));
    //  =============================
    //  = Text Input linkedin                =
    //  =============================
    $wp_customize->add_setting('bakery_pastry_lite_in', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('bakery_pastry_lite_in', array(
        'label'   => esc_html__('Linkedin', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_social',
        'setting' => 'bakery_pastry_lite_in',
        'type'    => 'url'
    ));

    //  =============================
    //  = Text Input pininterest                =
    //  =============================
    $wp_customize->add_setting('bakery_pastry_lite_pin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('bakery_pastry_lite_pin', array(
        'label'   => esc_html__('Pinterest', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_social',
        'setting' => 'bakery_pastry_lite_pin',
        'type'    => 'url'
    ));
    //  =============================
    //  = slider section              =
    //  =============================
    $wp_customize->add_section('bakery_pastry_lite_banner', array(
        'title'       => esc_html__(' Home banner Text', 'bakery-pastry-lite'),
        'description' => esc_html__('add home banner text here.', 'bakery-pastry-lite'),
        'priority'    => 36,
    ));

// Banner heading Text
    $wp_customize->add_setting('banner_heading', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('banner_heading', array(
        'type'    => 'text',
        'label'   => esc_html__('Add Banner heading here', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_banner',
        'setting' => 'banner_heading'
    )); // Banner heading Text
    // Banner heading Text
    $wp_customize->add_setting('banner_sub_heading', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('banner_sub_heading', array(
        'type'    => 'text',
        'label'   => esc_html__('Add Banner sub heading here', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_banner',
        'setting' => 'banner_sub_heading'
    )); // Banner heading Text
    //  =============================
    //  = url banner readmoret                =
    //  =============================
    $wp_customize->add_setting('bakery_pastry_lite_slider_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('bakery_pastry_lite_slider_url', array(
        'label'   => esc_html__('Url', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_banner',
        'setting' => 'bakery_pastry_lite_slider_url',
        'type'    => 'url'
    ));

    // Banner heading Text
    $wp_customize->add_setting('bakery_pastry_lite_slider_readmore', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('bakery_pastry_lite_slider_readmore', array(
        'type'    => 'text',
        'label'   => esc_html__('Add button text here', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_banner',
        'setting' => 'bakery_pastry_lite_slider_readmore'
    )); // Banner heading Text
    
    //  =============================
    //  = Footer              =
    //  =============================
    // Footer design and developed
    $wp_customize->add_setting('bakery_pastry_lite_design', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));

    $wp_customize->add_control('bakery_pastry_lite_design', array(
        'label'   => esc_html__('Design and developed', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_footer',
        'setting' => 'bakery_pastry_lite_design',
        'type'    => 'textarea'
    ));
    // Footer copyright
    $wp_customize->add_setting('bakery_pastry_lite_copyright', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));

    $wp_customize->add_control('bakery_pastry_lite_copyright', array(
        'label'   => esc_html__('Copyright', 'bakery-pastry-lite'),
        'section' => 'bakery_pastry_lite_footer',
        'setting' => 'bakery_pastry_lite_copyright',
        'type'    => 'textarea'
    ));
}

add_action('customize_register', 'bakery_pastry_lite_customize_register');

if (!function_exists('bakery_pastry_lite_sanitize_page')) :

    function bakery_pastry_lite_sanitize_page($page_id, $setting) {
        // Ensure $input is an absolute integer.
        $page_id = absint($page_id);
        // If $page_id is an ID of a published page, return it; otherwise, return the default.
        return ( 'publish' === get_post_status($page_id) ? $page_id : $setting->default );
    }



endif;