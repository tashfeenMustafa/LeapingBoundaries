<?php

// =============================================================================
// FUNCTIONS/GLOBAL/ADMIN/THUMBNAILS/ICON.PHP
// -----------------------------------------------------------------------------
// Sets up entry thumbnail sizes based on Customizer options.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Icon Standard Entry Thumbnail Width
//   02. Icon Fullwidth Entry Thumbnail Width
// =============================================================================

// Icon Standard Entry Thumbnail Width
// =============================================================================

if ( ! function_exists( 'x_icon_post_thumbnail_width' ) ) :
  function x_icon_post_thumbnail_width() {

    //
    // 1. Subtract 16px due to padding around featured image.
    //

    $a = x_get_option( 'x_icon_layout_site' );
    $b = x_get_option( 'x_icon_layout_content' );
    $c = x_get_option( 'x_icon_sizing_site_width' );
    $d = x_get_option( 'x_icon_sizing_site_max_width' );

    $site_layout    = ( $a == '' ) ? 'full-width'      : $a;
    $content_layout = ( $b == '' ) ? 'content-sidebar' : $b;
    $site_width     = ( $c == '' ) ? 88 / 100          : $c / 100;
    $site_max_width = ( $d == '' ) ? 1200              : $d;
    $padding        = 16; // 1

    if ( $content_layout == 'full-width' ) {
      if ( $site_layout == 'full-width' ) {
        $output = $site_max_width - $padding;
      } elseif ( $site_layout == 'boxed' ) {
        $output = $site_max_width * $site_width - $padding;
      }
    } else {
      if ( $site_layout == 'full-width' ) {
        $output = round( $site_max_width - $padding );
      } elseif ( $site_layout == 'boxed' ) {
        $output = round( $site_max_width * $site_width - $padding );
      }
    }

    if ( $site_layout == 'full-width' ) {
      if ( $site_max_width < 979 * $site_width ) {
        $output = $site_max_width - $padding;
      } else {
        if ( $output < ( 979 * $site_width ) ) {
          $output = round( 979 * $site_width - $padding );
        }
      }
    } elseif ( $site_layout == 'boxed' ) {
      if ( $site_max_width * $site_width < 979 * $site_width * $site_width ) {
        $output = $site_max_width * $site_width - $padding;
      } else {
        if ( $output < ( 979 * $site_width * $site_width ) ) {
          $output = round( 979 * $site_width * $site_width - $padding );
        }
      }
    }

    return $output;

  }
  add_action( 'customize_save', 'x_icon_post_thumbnail_width' );
endif;



// Icon Fullwidth Entry Thumbnail Width
// =============================================================================

if ( ! function_exists( 'x_icon_post_thumbnail_width_full' ) ) :
  function x_icon_post_thumbnail_width_full() {

    //
    // 1. Subtract 16px due to padding around featured image.
    //

    $a = x_get_option( 'x_icon_layout_site' );
    $b = x_get_option( 'x_icon_sizing_site_width' );
    $c = x_get_option( 'x_icon_sizing_site_max_width' );

    $site_layout    = ( $a == '' ) ? 'full-width' : $a;
    $site_width     = ( $b == '' ) ? 88 / 100     : $b / 100;
    $site_max_width = ( $c == '' ) ? 1200         : $c;
    $padding        = 16; // 1

    if ( $site_layout == 'full-width' ) {
      $output = $site_max_width - $padding;
    } elseif ( $site_layout == 'boxed' ) {
      $output = $site_max_width * $site_width - $padding;
    }

    return $output;

  }
  add_action( 'customize_save', 'x_icon_post_thumbnail_width_full' );
endif;