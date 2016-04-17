<?php 
/**
*** Template Name: Components
**/
?>

<?php get_header(); ?>

<section id="components" class="components">
    <div class="container-fluid text-center">
        <div class="row page-heading">

            <h1><?php wp_title(''); ?></h1>
        </div>
    </div>
    
    <div class="container-fluid" ng-controller="OurComponentsController">
        <div class="row text-center" ng-repeat="component in components">
            <div class=" col-md-12 ">
                <h1 class="about-heading-1"><div ng-bind-html="component.code | unsafe"></div>{{ component.name }}</h1>
                <p class="details">{{ component.details }}</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>