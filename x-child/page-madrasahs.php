<?php 
/**
*** Template Name: Madrasahs
**/
?>

<?php get_header(); ?>

<section id="madrasah-page" class="madrasah-page">
    <div class="container-fluid text-center">
        <div class="row page-heading">

            <h1><?php wp_title(''); ?></h1>
        </div>
    </div>
    
    <div class="container-fluid" ng-controller="MadrasahsController">
        <div class="row madrasah.list">
            <div class=" col-md-12 text {{ madrasah.class }}" ng-repeat="madrasah in madrasahs">
                <h4 class="madrasah-name">{{ madrasah.name }}</h4>
                <p class="madrasah-details">{{ madrasah.details }}</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>