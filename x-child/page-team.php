<?php 
/**
***Template Name: Team
**/
?>

<?php get_header(); ?>


<section class="team-page">
    <div class="container-fluid">
        <div class="row text-center page-heading">
            <h1><?php wp_title(''); ?></h1>
        </div>
    </div>
    
    <div class="team-members" ng-controller="TeamController">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-md-3 text-center" ng-repeat="member in members">
                    <div class="thumbnail">
                        <img ng-src="{{ member.imgsrc }}" class="img-responsive"/>
                        <h3>{{ member.name }}</h3>
                        <p>{{ member.role }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>


<?php get_footer(); ?>