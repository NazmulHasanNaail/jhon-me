<?php
// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $prefix = 'jhon_me_options';

    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Theme Options',
      'menu_slug'  => 'jhon-me-options',
    ) );


    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/inc/csf-section/typography.php');
    require_once(__ROOT__.'/inc/csf-section/header.php');
    require_once(__ROOT__.'/inc/csf-section/menu.php');
    require_once(__ROOT__.'/inc/csf-section/contact.php');
    require_once(__ROOT__.'/inc/csf-section/background.php');
    require_once(__ROOT__.'/inc/csf-section/breadcrumb.php');
    require_once(__ROOT__.'/inc/csf-section/footer.php');
    require_once(__ROOT__.'/inc/csf-section/banner.php');
    require_once(__ROOT__.'/inc/csf-section/about.php');
    require_once(__ROOT__.'/inc/csf-section/services.php');
    require_once(__ROOT__.'/inc/csf-section/my-work.php');
    require_once(__ROOT__.'/inc/csf-section/counter.php');
  
  }