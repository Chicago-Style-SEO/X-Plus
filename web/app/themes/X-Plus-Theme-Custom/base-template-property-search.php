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
<!-- breadcrumbs, under nav when no hero -->
<?php global $post; if ( is_page() && $post->post_parent ) { custom_breadcrumbs(); } ?>
<!-- end breadcrumbs -->
<div class="wrap" role="document">
    <div class="content row">
        <main class="main">
            <!-- ANYTHING INSIDE OF MAIN IS FULL WIDTH, ANTHTING INSIDE OF CONTAINER IS CONTAINED -->

            <!-- TOP MAIN SEARCH AREA -->
            <div class="simplePropertySearch">
                <h3>Find the home or investment property you’ve been looking for!</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 propertySearchFilter--simple">
                            <i class="fa fa-star-o"></i>
                            <span class="iconText">Featured</span>
                        </div>
                        <div class="col-md-2 propertySearchFilter--simple">
                            <i class="fa fa-plus"></i>
                            <span class="iconText">New Listings</span>
                        </div>
                        <div class="col-md-2 propertySearchFilter--simple" id="advancedSearchTrigger">
                            <i class="fa fa-search"></i>
                            <span class="iconText">Advanced</span>
                        </div>
                        <div class="col-md-6 propertySearchFilter--simple">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Search!</button>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TOP SEARCH AREA -->

            <!-- TOP ADVANCED SEARCH AREA -->
            <div class="advancedPropertySearch">
                <div class="container">
                    <div id="closeAndClearAdvancedSearch">
                        <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Property Type</h3>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Single Family Home</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Condo</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Town Home</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">2-Flat</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">3-Flat</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">4-Flat</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Investment Property</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Other</span>
                            </label>
                            <div class="resultsCountText">
                                <p>Your current search will display 10,900 listings in the Chicago area.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h3>Property Details</h3>

                            <div class="btn-group" role="group" aria-label="Number of Beds Range">
                                <span class="rangeToText rangeBedsText disabled">Beds: </span>
                                <select class="custom-select">
                                    <option selected disabled>Min</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="4">5</option>
                                    <option value="5">6</option>
                                </select>

                                <span class="rangeToText disabled">to</span>

                                <select class="custom-select">
                                    <option selected disabled>Max</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7+</option>
                                </select>
                            </div>

                            <div class="btn-group" role="group" aria-label="Number of Baths Range">
                                <span class="rangeToText rangeBedsText disabled">Baths: </span>
                                <select class="custom-select">
                                    <option selected disabled>Min</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>

                                <span class="rangeToText disabled">to</span>

                                <select class="custom-select">
                                    <option selected disabled>Max</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7+</option>
                                </select>
                            </div>

                            <div class="btn-group" role="group" aria-label="Number of Beds Range">
                                <span class="rangeToText rangeBedsText disabled">Square Feet: </span>
                                <section class="range-slider">
                                    <input value="300" min="300" max="10000" step="100" type="range">
                                    <input value="2500" min="400" max="10000" step="100" type="range">
                                    <span class="rangeValues"></span>
                                </section>
                            </div>
                            <div class="form-group">
                                <label for="searchStreet">Street name:</label>
                                <input type="text" class="form-control" id="searchStreet" placeholder="Burling Street">
                            </div>
                            <div class="form-group">
                                <label for="searchZips">Zip Code(s):</label>
                                <input type="text" class="form-control" id="searchZips" placeholder="60657, 60614">
                            </div>
                            <div class="form-group">
                                <label for="searchMLS">MLS #:</label>
                                <input type="text" class="form-control" id="searchMLS" placeholder="">
                            </div>

                            <div class="submitAdvancedSearch">
                                <button class="">SEARCH PROPERTIES</button>
                            </div>
                            <div id="clearAdvancedSearch"><span>Clear Filters</span></div>
                        </div>
                        <div class="col-md-4">
                            <h3>Price Range</h3>
                            <div class="btn-group" role="group" aria-label="Price Range Selector">
                                <span class="rangeToText rangeBedsText disabled">Within: </span>
                                <select class="custom-select">
                                    <option selected>No Min</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>

                                <span class="rangeToText disabled">to</span>

                                <select class="custom-select">
                                    <option selected>No Max</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7+</option>
                                </select>
                            </div>

                            <label class="mr-sm-2" for="listingStatus" id="listingStatusLabel">Status:</label>
                            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="listingStatus">
                                <option selected>Active Listings</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                            <div class="btn-group reducedPrice" role="group" aria-label="Reduction in Price">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Price Reduced</span>
                                </label>


                                <select class="custom-select">
                                    <option selected>In the last day</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7+</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TOP ADVANCED SEARCH AREA -->

            <!-- ANYTHING WITHIN CONTAINER IS CONTAINED AND NOT FULL WIDTH -->
            <div class="container">
                <?php include Wrapper\template_path(); ?>
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="searchResultsTitle">View Results</h3>
                    </div>
                    <div class="col-sm-6">
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="selectFilterMLS">
                            <option selected>Revelance</option>
                            <option value="Price High to Low">Price High to Low</option>
                            <option value="Price Low to High">Price Low to High</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="listing">
                            <div class="listing-image">
                                <img src="http://via.placeholder.com/350x150">
                            </div>
                            <div class="listing-price">
                                <span>$575,000</span>
                            </div>
                            <div class="listing-details">
                                <span class="address">
                                  123 Main St.<br>
                                  Chicago, IL 60613
                                </span>
                                <a class="listing-viewListing" href="#">
                                    View Listing <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="listing">
                            <div class="listing-image">
                                <img src="http://via.placeholder.com/350x150">
                            </div>
                            <div class="listing-price">
                                <span>$575,000</span>
                            </div>
                            <div class="listing-details">
                                <span class="address">
                                  123 Main St.<br>
                                  Chicago, IL 60613
                                </span>
                                <a class="listing-viewListing" href="#">
                                    View Listing <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="listing">
                            <div class="listing-image">
                                <img src="http://via.placeholder.com/350x150">
                            </div>
                            <div class="listing-price">
                                <span>$575,000</span>
                            </div>
                            <div class="listing-details">
                                <span class="address">
                                  123 Main St.<br>
                                  Chicago, IL 60613
                                </span>
                                <a class="listing-viewListing" href="#">
                                    View Listing <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="listing">
                            <div class="listing-image">
                                <img src="http://via.placeholder.com/350x150">
                            </div>
                            <div class="listing-price">
                                <span>$575,000</span>
                            </div>
                            <div class="listing-details">
                                <span class="address">
                                  123 Main St.<br>
                                  Chicago, IL 60613
                                </span>
                                <a class="listing-viewListing" href="#">
                                    View Listing <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="listing">
                            <div class="listing-image">
                                <img src="http://via.placeholder.com/350x150">
                            </div>
                            <div class="listing-price">
                                <span>$575,000</span>
                            </div>
                            <div class="listing-details">
                                <span class="address">
                                  123 Main St.<br>
                                  Chicago, IL 60613
                                </span>
                                <a class="listing-viewListing" href="#">
                                    View Listing <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="listing">
                            <div class="listing-image">
                                <img src="http://via.placeholder.com/350x150">
                            </div>
                            <div class="listing-price">
                                <span>$575,000</span>
                            </div>
                            <div class="listing-details">
                                <span class="address">
                                  123 Main St.<br>
                                  Chicago, IL 60613
                                </span>
                                <a class="listing-viewListing" href="#">
                                    View Listing <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="listing">
                            <div class="listing-image">
                                <img src="http://via.placeholder.com/350x150">
                            </div>
                            <div class="listing-price">
                                <span>$575,000</span>
                            </div>
                            <div class="listing-details">
                                <span class="address">
                                  123 Main St.<br>
                                  Chicago, IL 60613
                                </span>
                                <a class="listing-viewListing" href="#">
                                    View Listing <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="listing">
                            <div class="listing-image">
                                <img src="http://via.placeholder.com/350x150">
                            </div>
                            <div class="listing-price">
                                <span>$575,000</span>
                            </div>
                            <div class="listing-details">
                                <span class="address">
                                  123 Main St.<br>
                                  Chicago, IL 60613
                                </span>
                                <a class="listing-viewListing" href="#">
                                    View Listing <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="listing">
                            <div class="listing-image">
                                <img src="http://via.placeholder.com/350x150">
                            </div>
                            <div class="listing-price">
                                <span>$575,000</span>
                            </div>
                            <div class="listing-details">
                                <span class="address">
                                  123 Main St.<br>
                                  Chicago, IL 60613
                                </span>
                                <a class="listing-viewListing" href="#">
                                    View Listing <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
    jQuery('.slider-container').slick({
        infinite: true,
        slidesToShow: 1
    });
</script>
<!-- END -->
</body>
</html>
