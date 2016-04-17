<?php

// =============================================================================
// VIEWS/INTEGRITY/WP-INDEX.PHP
// -----------------------------------------------------------------------------
// Index page output for Integrity.
// =============================================================================

?>

<?php get_header(); ?>

<section class="blackboard landing-page">
    
    
    <div id="my-carousel" class="carousel carousel-fade slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner text-center carousel-fade" role="listbox">
            <div class="item slider-1 active">
                <div id="carousel-section">
                    <a href="#"></a>   
                    <h1>Every child deserves a platform</h1>
                </div>
            </div>
            <div class="item slider-2">
                <div id="carousel-section">
                    <a href="#"></a>
                    <h1>Every child deserves a platform</h1>
                </div>
            </div>
            <div class="item slider-3">
                <div id="carousel-section">
                    <a href="#"></a>
                    <h1>Every child deserves a platform</h1>
                </div>
            </div>
            <div class="item slider-4">
                <div id="carousel-section">
                    <a href="#"></a>
                    <h1>Every child deserves a platform</h1>
                </div>
            </div>
        </div> 
    </div>

    
    
    
    <!---<div class="container-fluid text-center">
        
        <div class="row">
            <h1>Hello!</h1>
            <h4>We Are Launching A New Website Soon</h4>
            <h3>For now, you can help us by:</h3>
            <div class="row links">
                <div class=" col-md-4 ">
                    <a href="<?php echo get_site_url(); ?>/index.php/volunteer"><span class="volunteer-link">Being A Volunteer</span></a>
                </div>
                <div class=" col-md-4 ">
                    <a href="<?php echo get_site_url(); ?>/index.php/donate-2"><span class="donation-link">Donation</span></a>
                </div>
                <div class=" col-md-4 ">
                    <a href="<?php echo get_site_url(); ?>/index.php/auction"><span class="auction-link">Take part in an auction</span></a>
                </div>
            </div>
            
        </div>
    </div>--->
</section>

<section id="theProjectHome">
    <div class="container-fluid" ng-controller="TheProjectController">
        <div class="row">
            <div class=" col-md-6 text-center icon">
               <i class="fa fa-lightbulb-o"></i>
            </div>
            <div class=" col-md-6 description">
                <h1 class="h-landmark ">{{ pageTitle }}</h1>
                <p>{{ pageDescription }}</p>
                <div class="">
                    <a href="<?php echo get_site_url(); ?>/index.php/about" class="about-lb read-more"><span>Read More</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

    </div>

</section>

<section class="floating-image-1 text-center">
    <h1>We help them break social barriers with social platforms.</h1>
</section>

    <section id="ourComponents">
        <div class="container-fluid our-components" ng-controller="OurComponentsController">
            <div class="row">
                <div class=" col-md-6 ">
                    <div class=" col-md-12 description">
                        <h1 class="h-landmark">{{ title }}</h1>
                        <p>{{ description }}</p>
                    </div>
                </div>
                <div class=" col-md-6 text-center icon">
                    <i class="fa fa-book"></i>
                </div>
            </div>
            <div class="row">
                
                <div class=" col-md-12 ">
                    <div class="main-container">
                        <div class=" col-md-3 components text-center" ng-repeat="component in components">
                            <div class="each-component">
                                <div class="each text-center">
                                    <h3>{{ component.name }}</h3>
                                    <div ng-bind-html="component.code | unsafe"></div>
                                    <a href="<?php echo get_site_url(); ?>/index.php/components" class="component-learn-more {{class}}" target="_blank"><span>Learn More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>

    <section id="madrasahs">
        <div class="container-fluid madrasahs" ng-controller="MadrasahsController">
            <div class="row">
                <div class=" col-md-6 text-center icon">
                    <i class="fa fa-university"></i>
                </div>
                <div class=" col-md-6 description">
                    <h1 class="">{{ title }}</h1>
                    <p>{{ description }}</p>
                    <div class="">
                    <a href="<?php echo get_site_url(); ?>/index.php/madrasahs-3" class="madrasah-lb read-more"><span>Read More</span></a>
                    </div>
                </div>
            </div>
            <!--<div class="row madrasah-list">
                <div class=" col-md-6 {{ madrasah.class }}" ng-repeat="madrasah in madrasahs">
                    <div class="">
                        <div class="text">
                            
                        </div>
                        <div class="picture"></div>
                    </div>
                </div>
            </div>-->
        </div>
    </section>

<section id="partnerSection" class="partners-section">
    <div class="container-fluid">
        <div class="row text-center">
            <h1>Our Partners</h1>
        </div>
        <div class="row partner">
            <div class=" col-md-6 partner-member">
               <div class="img-wrapper">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sponsors/DECP_JPEG.jpg"/> 
               </div>
                 <div class="caption text-center">
                    <h3>Educational And Counselling Psychology</h3>
                </div>
            </div>
           
            <div class=" col-md-6 partner-member">
                <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sponsors/tech-academy.png"/>
                </div>
                <div class="caption text-center">
                    <h3>The Tech Academy</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>