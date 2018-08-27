<?php

// Env

$sr_page_protocol = ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] ) ? 'https://' : 'http://';
$sr_page_url      = $sr_page_protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$sr_domain        = $sr_page_protocol . $_SERVER['HTTP_HOST'];

if ( strpos( $sr_page_url, '?') > -1 ) {
  $sr_page_url = substr( $sr_page_url, 0, strpos( $sr_page_url, '?') );
}

// Globals

define( 'SR_VERSION', '1.0.0' );
define( 'SR_DEBUG', true );
define( 'SR_DEV', ( strpos( $sr_page_url, '.test') !== false || strpos( $sr_page_url, 'localhost') !== false ) );
