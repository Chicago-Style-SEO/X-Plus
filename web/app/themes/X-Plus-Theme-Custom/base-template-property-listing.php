<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
<!--[if IE]>
<div class="alert alert-warning">
    <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->
<?php
do_action('get_header');
get_template_part('templates/header');
?>
<div class="wrap" role="document">
    <div class="content row">
        <main class="main">
            <!-- ANYTHING INSIDE OF MAIN IS FULL WIDTH, ANTHTING INSIDE OF CONTAINER IS CONTAINED -->
            <div class="row single-property-hero">
                <div class="col-md-7">
                    <div class="property-slides">
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/house.jpg" alt="XPlus Property Listing Image" />
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/house-2.jpg" alt="XPlus Property Listing Image" />
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/house-3.jpg" alt="XPlus Property Listing Image" />
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/house-4.jpg" alt="XPlus Property Listing Image" />
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/house-5.jpg" alt="XPlus Property Listing Image" />
                    </div>

                </div>
                <div class="col-md-5 single-property-listing-data">
                    <h1><?php the_title(); ?></h1>
                    <div class="row container">
                        <div class="col-md-6">
                            <p><strong>Price:</strong> $367,000</p>
                            <p><strong>Address:</strong> 3337 Hutchinson St</p>
                            <p><strong>City:</strong> Chicago</p>
                            <p><strong>ZIP:</strong> 60657</p>
                            <p><strong>Bedrooms:</strong> 3</p>
                            <p><strong>Bathrooms:</strong> 2.5</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Square Feet:</strong> 2,650</p>
                            <p><strong>Additional Features:</strong> Basement</p>
                            <p><strong>MLS #:</strong> 1234567</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ANYTHING WITHIN CONTAINER IS CONTAINED AND NOT FULL WIDTH -->
            <div class="container">
                <div class="property-slide-thumbs">
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/house.jpg" alt="XPlus Property Listing Image" />
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/house-2.jpg" alt="XPlus Property Listing Image" />
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/house-3.jpg" alt="XPlus Property Listing Image" />
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/house-4.jpg" alt="XPlus Property Listing Image" />
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/house-5.jpg" alt="XPlus Property Listing Image" />
                </div>
                <div class="row">
                    <div class="col-md-6 single-listing-info single-listing-info--left">
                        <h3>Detailed Listing Description</h3>
                        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad architecto beatae consequatur dignissimos, eius esse expedita, inventore ipsam maiores molestias nam nostrum quae quibusdam ratione repellat tempore unde velit voluptatibus.</span><span>Animi fuga ipsa nisi non optio quasi rerum. Beatae commodi consectetur delectus eius eligendi explicabo fugiat hic ipsam laborum nihil nulla, omnis porro praesentium quasi ratione repellendus repudiandae voluptas voluptatum.</span><span>At beatae blanditiis commodi consectetur consequatur, cum delectus distinctio eaque ex fuga illo inventore iusto laudantium minus, mollitia nihil officia perspiciatis placeat qui quis quo ratione sed soluta tenetur, vero!</span><span>Aliquid atque blanditiis eum fugit inventore itaque iusto laboriosam laudantium nesciunt non? Impedit incidunt, possimus? Beatae eos explicabo natus non, ratione sint tempora velit. Doloremque ducimus ipsa numquam quae ratione!</span><span>Accusantium ad aspernatur culpa dignissimos distinctio exercitationem labore libero minima repellat similique? Debitis eos explicabo harum libero, odio officia porro quaerat quasi quo repellendus saepe sequi sit tenetur totam voluptates?</span></p>
                    </div>
                    <div class="col-md-6 single-listing-info single-listing-info--right">
                        <h3>Contact Listing Agent</h3>
                        <div class="row">
                            <div class="col-lg-5">
                                <img src="<?= get_template_directory_uri(); ?>/dist/images/weston-1.jpg" alt="XPlus Contact Listing Agent" />
                            </div>
                            <div class="col-lg-7">
                                <h4>WESTON HARDING</h4>
                                <div class="icon-text-container">
                                    <i class="fa fa-phone"></i><a href="#">123-456-7890</a>
                                </div>
                                <div class="icon-text-container">
                                    <i class="fa fa-at"></i><a href="#">weston@xplus.com</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <form action="" class="standard-form" id="contact-agent-form">
                                    <label for="firstName">Your Name</label>
                                    <input type="text" placeholder="Full Name" id="firstName" name="First Name">
                                    <label for="firstName">Your Name</label>
                                    <input type="text" placeholder="Full Name" id="firstName" name="First Name">
                                    <label for="firstName">Your Name</label>
                                    <input type="text" placeholder="Full Name" id="firstName" name="First Name">
                                    <div class="contact-options">
                                        <input type="radio" name="contact-reason" value="Schedule Showing"> Schedule Showing
                                        <input type="radio" name="contact-reason" value="Request Information"> Request Information<br>
                                        <input type="radio" name="contact-reason" value="other"> Email to a Friend
                                    </div>
                                    <button type="submit" class="primary-btn">SUBMIT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include Wrapper\template_path(); ?>

                <!-- SINGLE LISTING TABS AREA -->
                <div class="single-listing-tabs">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tabMap" aria-controls="home" role="tab" data-toggle="tab">Map</a>
                            </li>
                            <li role="presentation">
                                <a href="#tabAdditional" aria-controls="profile" role="tab" data-toggle="tab">Additional Details</a>
                            </li>
                            <li role="presentation">
                                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a>
                            </li>
                            <li role="presentation">
                                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tabMap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11866.488837339843!2d-87.66796685!3d41.965449050000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1a8f24d09708059!2sTarget!5e0!3m2!1sen!2sus!4v1502814068082" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tabAdditional">
                                <div class="row container">
                                    <div class="col-md-6">
                                        <p><strong>Price:</strong> $367,000</p>
                                        <p><strong>Address:</strong> 3337 Hutchinson St</p>
                                        <p><strong>City:</strong> Chicago</p>
                                        <p><strong>ZIP:</strong> 60657</p>
                                        <p><strong>Bedrooms:</strong> 3</p>
                                        <p><strong>Bathrooms:</strong> 2.5</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Square Feet:</strong> 2,650</p>
                                        <p><strong>Additional Features:</strong> Basement</p>
                                        <p><strong>MLS #:</strong> 1234567</p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">

                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings">

                            </div>
                        </div>

                    </div>
                </div>
                <!-- END SINGLE LISTING TABS -->

                <!-- EXPLORE NEARBY NEIGHBORHOODS - IMAGE WITH TEXT OVERLAY BOTTOM MODULE -->
                    <div class="nearbyNeighborhoods container">
                        <h4>Explore Nearby Neighborhoods</h4>
                        <div class="row">
                            <div class="col-md-4 nearbyModule">
                                <img src="https://images.pexels.com/photos/169647/pexels-photo-169647.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Nearby Neighborhoods X-Plus Real Estate">
                                <div class="nearbyModule-text">
                                    <p class="location">Lincoln Park</p>
                                </div>
                            </div>
                            <div class="col-md-4 nearbyModule">
                                <img src="https://images.pexels.com/photos/169647/pexels-photo-169647.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Nearby Neighborhoods X-Plus Real Estate">
                                <div class="nearbyModule-text">
                                    <p class="location">Lincoln Square</p>
                                </div>
                            </div>
                            <div class="col-md-4 nearbyModule">
                                <img src="https://images.pexels.com/photos/169647/pexels-photo-169647.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Nearby Neighborhoods X-Plus Real Estate">
                                <div class="nearbyModule-text">
                                    <p class="location">North Center</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END EXPLORE NEARBY NEIGHBORHOODS -->
            </div>
            <!-- END CONTAINER -->


        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
            <aside class="sidebar">
                <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
        <?php endif; ?>
    </div><!-- /.content -->
</div><!-- /.wrap -->
<?php
do_action('get_footer');
get_template_part('templates/footer');
wp_footer();
?>
<!-- IF TESTIMONIALS EXIST OR PAGE THAT NEEDS SLIDER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script>
    jQuery(document).ready(function(){
        jQuery('.property-slides').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.property-slide-thumbs'
        });
        jQuery('.property-slide-thumbs').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.property-slides',
            arrows: true,
            nextArrow: '<i class="fa fa-angle-right"></i>',
            prevArrow: '<i class="fa fa-angle-left"></i>',
            centerMode: false,
            focusOnSelect: true,
            variableWidth: true,
            draggable: true,
            autoplay: true
        });
    });
</script>
<!-- END -->
</body>
</html>
