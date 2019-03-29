<?php
$this->load->view('layouts/header');
?>

    <main>
        <div id="content" class="site-content ">
            <div class="page-top custom-header">
                <div class="header-image ztl-breadcrumb-show">
                    <div class="ztl-header-image" style="background-color:#f2f2f2;">
                        <div class="container container-title">
                            <h1 class="ztl-accent-font custom-header-title" style="color:#8f3238;">
                                Contact Us
                            </h1>
                        </div>
                    </div>
                    <div class="ztl-breadcrumb-container">
                        <div class="container">
                            <nav role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                                <ul class="trail-items">
                                    <meta name="numberOfItems" content="2" />
                                    <meta name="itemListOrder" content="Ascending" />
                                    <li class="trail-item trail-begin"><a href="<?php echo base_url('home'); ?>" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
                                        <meta itemprop="position" content="1" />
                                    </li>
                                    <li class="trail-item trail-end"><span itemprop="item"><span itemprop="name">Contact</span></span>
                                        <meta itemprop="position" content="2" />
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">

                        <article id="post-314" class="post-314 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1492467318243 vc_row-no-padding">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="ztl_map_canvas" id="ztl_map_5bffa7988b28f" style="height:400px; width:100%;"></div>

                                                <script type="text/javascript">
                                                    (function($) {
                                                        "use strict";
                                                        var map;
                                                        var mapId = "ztl_map_5bffa7988b28f";

                                                        function initialize() {
                                                            var featureOpts = [{
                                                                "stylers": [{
                                                                    "saturation": "-100"
                                                                }]
                                                            }, {
                                                                "featureType": "road",
                                                                "elementType": "geometry",
                                                                "stylers": [{
                                                                    "visibility": "simplified"
                                                                }, {
                                                                    "color": "#ff6d50"
                                                                }]
                                                            }, {
                                                                "featureType": "road",
                                                                "elementType": "labels.text.stroke",
                                                                "stylers": [{
                                                                    "color": "#FFFFFF"
                                                                }]
                                                            }, {
                                                                "featureType": "water",
                                                                "elementType": "geometry",
                                                                "stylers": [{
                                                                    "color": "#365379"
                                                                }]
                                                            }, {
                                                                "featureType": "poi",
                                                                "elementType": "labels",
                                                                "stylers": [{
                                                                    "visibility": "off"
                                                                }]
                                                            }, {
                                                                "featureType": "road",
                                                                "elementType": "labels.text.fill",
                                                                "stylers": [{
                                                                    "color": "#545454"
                                                                }]
                                                            }, {
                                                                "featureType": "water",
                                                                "elementType": "labels",
                                                                "stylers": [{
                                                                    "visibility": "off"
                                                                }]
                                                            }, {
                                                                "featureType": "landscape.man_made",
                                                                "stylers": [{
                                                                    "color": "#F5F5F5"
                                                                }]
                                                            }, {
                                                                "featureType": "landscape.natural",
                                                                "stylers": [{
                                                                    "color": "#F5F5F5"
                                                                }]
                                                            }, {
                                                                "featureType": "poi",
                                                                "stylers": [{
                                                                    "color": "#E8E8E8"
                                                                }]
                                                            }];

                                                            var mapOptions = {
                                                                zoom: 16,
                                                                center: new google.maps.LatLng(53.491782, -2.265462),
                                                                mapTypeId: mapId,
                                                                streetViewControl: false,
                                                                mapTypeControl: false,
                                                                panControl: false,
                                                                zoomControl: 1,
                                                                scrollwheel: 0,
                                                                draggable: false,
                                                            };

                                                            map = new google.maps.Map(document.getElementById("ztl_map_5bffa7988b28f"), mapOptions);
                                                            var customMapType = new google.maps.StyledMapType(featureOpts);
                                                            map.mapTypes.set(mapId, customMapType);

                                                            var image = {
                                                                url: "http://www.zoutula.com/themes/enfant-school/wp-content/uploads/2017/04/pin_school_7.png",
                                                                // This marker is 64 pixels wide by 64 pixels high.
                                                                scaledSize: new google.maps.Size(128, 128),
                                                                // The origin for this image is (0, 0).
                                                                origin: new google.maps.Point(0, 0),
                                                                // The anchor for this image is the base of the flagpole at (0, 32).
                                                                anchor: new google.maps.Point(64, 64)
                                                            };

                                                            //add custom marker
                                                            var marker = new google.maps.Marker({
                                                                position: map.getCenter(),
                                                                map: map,
                                                                icon: image
                                                            });

                                                            google.maps.event.addDomListener(window, "resize", function() {
                                                                map.setCenter(mapOptions.center);
                                                            });

                                                        }
                                                        $(document).ready(function() {
                                                            google.maps.event.addDomListener(window, "load", initialize);
                                                        });

                                                    }(jQuery));
                                                </script>
                                                <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1492526895254 vc_row-has-fill">

                                    <!-- Location -->
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-3 vc_col-xs-12">
                                        <div class="vc_column-inner vc_custom_1492537332846">
                                            <div class="wpb_wrapper">
                                                <div class="vc_icon_element vc_icon_element-outer vc_custom_1492535066449 vc_icon_element-align-center vc_icon_element-have-style">
                                                    <div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-have-style-inner vc_icon_element-size-ztl-lg vc_icon_element-style-rounded-outline vc_icon_element-outline vc_icon_element-background-color-custom" style="border-color:#f2f2f2">
                                                        <span class="vc_icon_element-icon flaticon-school" style="color:#ff4e31 !important"></span></div>
                                                </div>
                                                <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                                <h5 style="color:;line-height:1.3;" class=" ztl-accent-font ztl-center ztl-font-normal">ADDRESS</h5>
                                                <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>

                                                <div class="wpb_text_column wpb_content_element  ztl-contact-box">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">Lagos, Nigeria
                                                            <br /> Km 24, Lekki-Epe Expressway,
                                                            <br /> By EKDC Substation, Ajah.</p>

                                                    </div>
                                                </div>
                                                <div class="vc_empty_space" style="height: 5px"><span class="vc_empty_space_inner"></span></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Phone and Email -->
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-3 vc_col-xs-12">
                                        <div class="vc_column-inner vc_custom_1492537340935">
                                            <div class="wpb_wrapper">
                                                <div class="vc_icon_element vc_icon_element-outer vc_custom_1492535765207 vc_icon_element-align-center vc_icon_element-have-style">
                                                    <div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-have-style-inner vc_icon_element-size-ztl-lg vc_icon_element-style-rounded-outline vc_icon_element-outline vc_icon_element-background-color-grey">
                                                        <span class="vc_icon_element-icon flaticon-grades" style="color:#ff4e31 !important"></span></div>
                                                </div>
                                                <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                                <h5 style="color:;line-height:1.3;" class=" ztl-accent-font ztl-center ztl-font-normal">PHONE &amp; EMAIL</h5>
                                                <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>

                                                <div class="wpb_text_column wpb_content_element  ztl-contact-box">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">+234 803 696 0891,
                                                            <!-- <br /> +234 803 696 0891 -->
                                                            <br /> childofpromiseschool<br>@gmail.com
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="vc_empty_space" style="height: 5px"><span class="vc_empty_space_inner"></span></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Business Hours -->
                                    <!-- <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
                                        <div class="vc_column-inner vc_custom_1492537350599">
                                            <div class="wpb_wrapper">
                                                <div class="vc_icon_element vc_icon_element-outer vc_custom_1492535834780 vc_icon_element-align-center vc_icon_element-have-style">
                                                    <div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-have-style-inner vc_icon_element-size-ztl-lg vc_icon_element-style-rounded-outline vc_icon_element-outline vc_icon_element-background-color-grey">
                                                        <span class="vc_icon_element-icon flaticon-teacher-desk" style="color:#ff4e31 !important"></span></div>
                                                </div>
                                                <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                                <h5 style="color:;line-height:1.3;" class=" ztl-accent-font ztl-center ztl-font-normal">OPEN HOURS</h5>
                                                <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>

                                                <div class="wpb_text_column wpb_content_element  ztl-contact-box">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">Monday-Friday,
                                                            <br /> 8:00 &#8211; 15:00
                                                            <br /> Weekend Closed</p>

                                                    </div>
                                                </div>
                                                <div class="vc_empty_space" style="height: 5px"><span class="vc_empty_space_inner"></span></div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- Open Hours -->
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-3 vc_col-xs-12">
                                        <div class="vc_column-inner vc_custom_1492537356190">
                                            <div class="wpb_wrapper">
                                                <div class="vc_icon_element vc_icon_element-outer vc_custom_1492625220775 vc_icon_element-align-center vc_icon_element-have-style">
                                                    <div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-have-style-inner vc_icon_element-size-ztl-lg vc_icon_element-style-rounded-outline vc_icon_element-outline vc_icon_element-background-color-grey">
                                                        <span class="vc_icon_element-icon flaticon-clock-1" style="color:#ff4e31 !important"></span></div>
                                                </div>
                                                <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                                <h5 style="color:;line-height:1.3;" class=" ztl-accent-font ztl-center ztl-font-normal">OPEN HOURS</h5>
                                                <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>

                                                <div class="wpb_text_column wpb_content_element  ztl-contact-box">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">Monday-Friday,
                                                            <br /> 8:00 &#8211; 15:00
                                                            <br /> Weekend Closed</p>

                                                    </div>
                                                </div>
                                                <div class="vc_empty_space" style="height: 5px"><span class="vc_empty_space_inner"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1435087865321">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <h2 style="color:;" class=" ztl-accent-font ztl-center ztl-font-normal">SEND A MESSAGE!</h2>
                                                <p style="color:;" class=" ztl-main-font ztl-center ztl-font-normal">We would love to hear from you!</p>
                                                <div class="ztl-divider  center primary ">
                                                    <span style="border-color:; " class="circle">
                    <span style="background-color:; "></span>
                                                    <span style="background-color:; "></span>
                                                    </span>
                                                </div>
                                                <div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1435087871722">
                                    <div class="ztl-contact-form wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div role="form" class="wpcf7" id="wpcf7-f3273-p314-o1" lang="en-US" dir="ltr">
                                                    <div class="screen-reader-response"></div>
                                                    <form action="" method="post" class="wpcf7-form" novalidate="novalidate">
                                                        <div style="display: none;">
                                                            <input type="hidden" name="_wpcf7" value="3273" />
                                                            <input type="hidden" name="_wpcf7_version" value="5.0.5" />
                                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f3273-p314-o1" />
                                                            <input type="hidden" name="_wpcf7_container_post" value="314" />
                                                        </div>
                                                        <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name *" /></span> </p>
                                                        <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email *" /></span> </p>
                                                        <p><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject" /></span></p>
                                                        <p> <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message *"></textarea></span> </p>
                                                        <div class="ztl-button-three">
                                                            <button type="submit">Send Message</button>
                                                        </div>
                                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                    </form>
                                                </div>
                                                <div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1492613299452 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1492613286270">
                                            <div class="wpb_wrapper">
                                                <div class="ztl-subscriber  ">
                                                    <div class="row">
                                                        <div class="ztl-col col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <div class="ztl-icon" style="background-color:#ffffff">
                                                                <span class="flaticon-grades" style="color:#ff4e31"></span>
                                                            </div>
                                                            <div class="content" style="color:#8f3238">
                                                                <div class="line-1">
                                                                    <h2>Want to Hear From Us?</h2>
                                                                </div>
                                                                <div class="line-2">
                                                                    <script>
                                                                        (function() {
                                                                            if (!window.mc4wp) {
                                                                                window.mc4wp = {
                                                                                    listeners: [],
                                                                                    forms: {
                                                                                        on: function(event, callback) {
                                                                                            window.mc4wp.listeners.push({
                                                                                                event: event,
                                                                                                callback: callback
                                                                                            });
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        })();
                                                                    </script>
                                                                    <!-- MailChimp for WordPress v4.2.5 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                                                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-4271" method="post" data-id="4271" data-name="Subscribe Enfant">
                                                                        <div class="mc4wp-form-fields">
                                                                            <div class="ztl-subscribe-form">
                                                                                <div>
                                                                                    <input class="ztl-input" type="email" name="EMAIL" placeholder="Your email address" required />
                                                                                </div>
                                                                                <div class="ztl-button-three  ztl-subscribe-button">
                                                                                    <button>Sign up</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <label style="display: none !important;">Leave this field empty if you're human:
                                                                            <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
                                                                        </label>
                                                                        <input type="hidden" name="_mc4wp_timestamp" value="1543481240" />
                                                                        <input type="hidden" name="_mc4wp_form_id" value="4271" />
                                                                        <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                                                        <div class="mc4wp-response"></div>
                                                                    </form>
                                                                    <!-- / MailChimp for WordPress Plugin -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                            </div>
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-## -->
                    </div>
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
    </main>

<?php
$this->load->view('layouts/footer');
?>