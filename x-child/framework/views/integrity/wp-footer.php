<?php

// =============================================================================
// VIEWS/INTEGRITY/WP-FOOTER.PHP
// -----------------------------------------------------------------------------
// Footer output for Integrity.
// =============================================================================

?>

  <?php x_get_view( 'global', '_header', 'widget-areas' ); ?>
  <?php x_get_view( 'global', '_footer', 'scroll-top' ); ?>
  <?php x_get_view( 'global', '_footer', 'widget-areas' ); ?>
  <?php if ( x_get_option( 'x_footer_bottom_display', '1' ) == '1' ) : ?>

    <footer class="x-colophon bottom" role="contentinfo">
      <div class="x-container max width">
          

        <?php /*if ( x_get_option( 'x_footer_menu_display', '1' ) == '1' ) : ?>
          <?php x_get_view( 'global', '_nav', 'footer' ); ?>
        <?php endif; ?>

        <?php if ( x_get_option( 'x_footer_social_display', '1' ) == '1' ) : ?>
          <?php x_social_global(); ?>
        <?php endif; ?>

        <?php if ( x_get_option( 'x_footer_content_display', '1' ) == '1' ) : ?>
          <div class="x-colophon-content">
            <?php echo do_shortcode( x_get_option( 'x_footer_content' ) ); ?>
          </div>
        <?php endif;*/ ?>
          <section id="contact" class="contact">
            <div class="container-fluid">
                <div class="row contact-details-footer">
                    <div class=" col-md-3 ">
                        <div class="contact-text">
                            <h2>Contact: </h2>
                            <h4 class="office"><i class="fa fa-building-o"></i>House 31, road 1/A, block I, Banani, Dhaka 1213</h4>
                            <h4 class="email"><i class="fa fa-envelope-o"></i>leapingboundaries@gmail.com</h4>
                            <h4 class="phone"><i class="fa fa-phone-square"></i>017 - XXXX - XXXX</h4>
                        </div>
                    </div>
                    <div class=" col-md-3 ">
                        <div class="footer-nav">
                            <h2>Contribute: </h2>
                            <a href="<?php echo get_site_url(); ?>/index.php/auction"><p>Auctions</p></a>
                            <a href="<?php echo get_site_url(); ?>/index.php/donate"><p>Donate</p></a>
                            <a href="<?php echo get_site_url(); ?>/index.php/volunteer"><p>Volunteer</p></a>
                        </div>
                    </div>
                    <div class=" col-md-3 ">
                        <div class="visit">
                            <h2>Visit: </h2>
                            <a href="<?php echo get_site_url(); ?>/index.php/components"><p>Components</p></a>
                            <a href="<?php echo get_site_url(); ?>/index.php/madrasahs-3"><p>Madrasahs</p></a>
                            <a href="<?php echo get_site_url(); ?>/index.php/about"><p>About</p></a>
                            <a href="<?php echo get_site_url(); ?>/index.php/faq"><p>FAQ</p></a>
                            <a href="<?php echo get_site_url(); ?>/index.php/team"><p>Team</p></a>
                        </div>
                    </div>
                    <div class=" col-md-3 ">
                        <div class="social-media">
                            <h2>Follow us on: 
                                <a href="https://www.facebook.com/leapingboundaries/" target="_blank"><i class="fa fa-facebook-square"></i></a>  
                                <a href="https://twitter.com/LeapnBoundaries" target="_blank"><i class="fa fa-twitter"></i></a> 

                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

          
          
          
          <div class="row">
            <div class=" col-md-12 copyright">
                <p class="text-center">
                    &copy; Leaping Boundaries 2016  
                </p>  
            </div>
          </div>

      </div>
        <!--- jQuery ----->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        
        <!--- Bootstrap -->
        <script src="<?php echo get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js'; ?>"></script>
        
        <!--- Firebase --->
        <script src="https://cdn.firebase.com/js/client/2.4.1/firebase.js"></script>
        
        <!-- AngularFire -->
        <script src="https://cdn.firebase.com/libs/angularfire/1.1.4/angularfire.min.js"></script>
        
        <!--- Module ---->
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/app.js'; ?>"></script>
        
        <!--- Controllers --->
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/controllers/PagesController.js'; ?>"></script>
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/controllers/PagesController.js'; ?>"></script>
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/controllers/BidFormController.js'; ?>"></script>
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/controllers/MadrasahsController.js'; ?>"></script>
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/controllers/TheProjectController.js'; ?>"></script>
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/controllers/TheProjectController.js'; ?>"></script>
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/controllers/OurComponentsController.js'; ?>"></script>
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/controllers/TeamController.js'; ?>"></script>
        
        <!--- Directives --->
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/directives/biddingForm.js'; ?>"></script>
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/directives/theComponents.js'; ?>"></script>
        
        <!--- Services --->
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/services/pagesApi.js'; ?>"></script>
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/services/postsApi.js'; ?>"></script>
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/services/firebaseApi.js'; ?>"></script>
        <script src="<?php echo get_stylesheet_directory_uri() . '/js/services/teamPosts.js'; ?>"></script>
        
        
    </footer>

  <?php endif; ?>

<?php x_get_view( 'global', '_footer' ); ?>