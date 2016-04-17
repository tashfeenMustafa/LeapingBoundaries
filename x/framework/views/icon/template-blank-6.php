<?php

// =============================================================================
// VIEWS/ICON/TEMPLATE-BLANK-6.PHP (No Container | No Header, No Footer)
// -----------------------------------------------------------------------------
// A blank page for creating unique layouts.
// =============================================================================

?>

<?php x_get_view( 'global', '_header' ); ?>

  <?php x_get_view( 'global', '_slider-above' ); ?>
  <?php x_get_view( 'global', '_slider-below' ); ?>

  <div class="x-main full" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-wrap">
          <?php x_get_view( 'global', '_content', 'the-content' ); ?>
        </div>
      </article>

    <?php endwhile; ?>

  </div>

  <?php x_get_view( 'icon', '_template-blank-sidebar' ); ?>
  <?php x_get_view( 'global', '_footer', 'scroll-top' ); ?>

<?php x_get_view( 'global', '_footer' ); ?>