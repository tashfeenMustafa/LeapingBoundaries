<?php 
/**
**
**Template Name: Auction
**
**/
?>

<?php get_header(); ?>

<section class="auction-page-details" ng-controller="BidFormController">
    
    <div class="container-fluid">
        <div class="row text-center page-heading">
            <h1><?php wp_title(''); ?></h1>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="auction-story text-center">
                <div class="auction-description text-center">
                    <?php the_field('auction_main_description'); ?>
                    <h3 class="instruct-details">For more information on Auctions, please visit <a href="<?php echo get_site_url(); ?>/index.php/faq"><span>FAQ</span></a></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row bids" ng-repeat="art in slant">
            <div class=" col-md-6 bid-image ">
                <img src="<? echo get_stylesheet_directory_uri(); ?>/img/slant-art/{{ art.artImageHTML }}" class="img-responsive" width="400">
            </div>
            <div class=" col-md-6 bid-details">
                <h2>{{ art.artName }}</h2>
                <p>{{ art.artDetails }}</p>
                <div class=" col-md-4 text-center prev-bid">
                    <h3>Highest Bid Made</h3>
                    <p>BDT <span style="color: #E58F65" ng-bind="art.prevBid"></span></p>
                </div>
                <div class=" col-md-8 text-center auction-countdown">
                    <p ng-bind-html="counter | unsafe"></p>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="container-fluid instructions text-center">
        <div class="row">
            <div class=" col-md-12 ">
                <h1>Instructions</h1>
            </div>
        </div>
        <div class="row instruct-details">
            <div class=" col-md-12 ">
                <h3>To buy the piece of art displayed here and to support our cause, please fill up the form below to participate in the auction</h3>
                <h3>Your bidding amount has to be larger than the highest bid made and the starting price<span style="color: #E58F65"> BDT 2500</span></h3>
                
            </div>
        </div>
    </div>
    
    
    <!--- BIDDING FORM --->
    
    <div name="bidform" class="container-fluid">
        
        <div class="row">
            
            
            
        </div>
        
        <div class="row" ng-init="initialize()">
            <form class="bidding-form">
    
                <div class=" col-md-12 input-group bidAmount">
                  
                    <span class="input-group-addon" id="basic-addon1">
                        Your Bidding Amount(BDT)
                    </span>
                  <input type="number" min="2500" ng-model="bid.amount" id="bidAmount" name="uAmount" class="form-control" placeholder="Amount" aria-describedby="basic-addon1" required>
                </div>
                <div class=" col-md-12 input-group bidArt">
                  
                    <span class="input-group-addon" id="basic-addon1">
                        Select Art
                    </span>
                    <select class="bidBranch" id="bidBranch" ng-model="bid.databaseBranch" required>
                        <option ng-repeat="option in options" value="{{option.value}}">{{ option.name }}</option>
                    </select>
                </div>
                <div class=" col-md-12 text-center error-message" ng-show="error">
                <p>* {{ errorMessage }}</p>
            </div>
                
                <div class=" col-md-12 input-group bidFirstName">
                  
                    <span class="input-group-addon" id="basic-addon1">
                        First Name
                    </span>
                  <input type="text" ng-model="bid.firstName" id="bidFirstName" name="uFirstName" class="form-control" placeholder="First Name" aria-describedby="basic-addon1" required>
                </div>
                
                <div class=" col-md-12 input-group bidLastName">
                  
                    <span class="input-group-addon" id="basic-addon1">
                        Last Name
                    </span>
                  <input type="text" ng-model="bid.lastName" id="bidLastName" name="uLastName" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1" required>
                </div>
                
                <div class=" col-md-12 input-group bidEmail">
                  
                    <span class="input-group-addon" id="basic-addon1">
                        Email
                    </span>
                  <input type="email" ng-model="bid.email" id="bidEmail" name="uEmail" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required>
                </div>
                
                <div class=" col-md-12 input-group bidPhone">
                  
                    <span class="input-group-addon" id="basic-addon1">
                        Phone
                    </span>
                  <input type="text" ng-model="bid.phone" id="bidPhone" name="uPhone" class="form-control" placeholder="Phone" aria-describedby="basic-addon1" required>
                </div>
                
                <div class=" col-md-12 input-group bidAddress">
                  
                    <span class="input-group-addon" id="basic-addon1">
                        Address
                    </span>
                  <input type="text" ng-model="bid.address" id="bidAddress" name="uAddress" class="form-control" placeholder="Address" aria-describedby="basic-addon1" required>
                </div>
                
                <div class=" col-md-12 bidButton">
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="button" ng-click="sendToFireBase(bid, slant)">Bid</button>
                    </span>

                </div>
                <div class=" col-md-12 text-center error-message" ng-show="!error">
                <p>* {{ errorMessage }}</p>
            </div>
            </form>
        </div>
    </div>
   
</section>

<?php get_footer(); ?>