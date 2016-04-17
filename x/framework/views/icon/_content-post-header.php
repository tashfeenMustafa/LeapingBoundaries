<?php

// =============================================================================
// VIEWS/ICON/_CONTENT-POST-HEADER.PHP
// -----------------------------------------------------------------------------
// Standard <header> output for various posts.
// =============================================================================

?>

<header class="entry-header">
  <?php if ( is_single() ) : ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
  <?php else : ?>
    <h2 class="entry-title">
      <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to: "%s"', '__x__' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php x_the_alternate_title(); ?></a>
    </h2>
  <?php endif; ?>
  <?php x_icon_entry_meta(); ?>
  <?php if ( get_post_format() == 'quote' ) : ?>
    <p class="entry-title-sub"><?php echo get_post_meta( get_the_ID(), '_x_quote_quote', true ); ?></p>
  <?php endif; ?>
</header>