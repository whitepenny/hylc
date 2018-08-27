<?php
/*
Plugin Name: [wp] Share Icons
Description: [wp] Share Icons
Author: [whitepenny]
Author URI: http://www.whitepenny.com
*/

function sr_customize_register( $wp_customize ) {
  $wp_customize->add_section( 'sr_social_media' , array(
      'title'      => __( 'Social Media', 'woden' ),
      'priority'   => 999,
  ));

  $wp_customize->add_setting( 'sr_facebook_link' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sr_facebook_link', array(
    'label'        => __( 'Facebook URL', 'woden' ),
    'section'    => 'sr_social_media',
    'settings'   => 'sr_facebook_link',
  ) ) );

  $wp_customize->add_setting( 'sr_twitter_link' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sr_twitter_link', array(
    'label'        => __( 'Twitter URL', 'woden' ),
    'section'    => 'sr_social_media',
    'settings'   => 'sr_twitter_link',
  ) ) );

  $wp_customize->add_setting( 'sr_instagram_link' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sr_instagram_link', array(
    'label'        => __( 'Instagram URL', 'woden' ),
    'section'    => 'sr_social_media',
    'settings'   => 'sr_instagram_link',
  ) ) );

  $wp_customize->add_setting( 'sr_pinterest_link' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sr_pinterest_link', array(
    'label'        => __( 'Pinterest URL', 'woden' ),
    'section'    => 'sr_social_media',
    'settings'   => 'sr_pinterest_link',
  ) ) );

  $wp_customize->add_setting( 'sr_medium_link' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sr_medium_link', array(
    'label'        => __( 'Medium URL', 'woden' ),
    'section'    => 'sr_social_media',
    'settings'   => 'sr_medium_link',
  ) ) );

  $wp_customize->add_setting( 'sr_linkedin_link' , array(
    'default'     => '',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sr_linkedin_link', array(
    'label'        => __( 'LinkedIn URL', 'woden' ),
    'section'    => 'sr_social_media',
    'settings'   => 'sr_linkedin_link',
  ) ) );

}

add_action( 'customize_register', 'sr_customize_register' );