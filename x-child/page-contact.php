<?php
/*
** Template Name: Contact
*/
?>

<?php get_header(); ?>


<section id="contact">
    <div class="container-fluid">
        <div class="row text-center page-heading">
            
            <h1><?php wp_title(''); ?></h1>
        </div>
        <div class="row contact-details">
            <div class=" col-md-6 ">
                <div class="map google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5786799832117!2d90.4024132144378!3d23.798012992873954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70f8eeca771%3A0x5c9ff32be204490b!2sRd+No+1%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1457591196145" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class=" col-md-6 ">
                <div class="contact-page-details">
                    <h4 class="office"><i class="fa fa-building-o"></i>House 31, road 1/A, block I, Banani, Dhaka 1213</h4>
                    <h4 class="email"><i class="fa fa-envelope-o"></i>leapingboundaries@gmail.com</h4>
                    <h4 class="phone"><i class="fa fa-phone-square"></i>017 - XXXX - XXXX</h4>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>