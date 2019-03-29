<!-- Footer -->
<footer>
    <div class="container">

        <!-- Footer Upside Links -->
        <div class="foot-link">
            <ul>
                <li><a href="<?php echo base_url('about/index'); ?>"> About Us </a></li>
                <li><a href="<?php echo base_url('about/privacy_policy'); ?>"> Privacy Policy </a></li>
                <li><a href="<?php echo base_url('about/return_policy'); ?>"> Return Policy </a></li>
                <li><a href="<?php echo base_url('#.'); ?>"> Site Map </a></li>
                <li><a href="<?php echo base_url('about/trade_in_or_cash'); ?>"> Trade in or Cash </a></li>
                <li><a href="<?php echo base_url('about/gadget_financing'); ?>"> Gadget Financing </a></li>
                <li><a href="<?php echo base_url('about/terms_and_conditions'); ?>"> Terms &amp; Conditions </a></li>
                <li><a href="<?php echo base_url('contact'); ?>"> Contact Us </a></li>
            </ul>
        </div>
        <div class="row">

            <!-- Contact -->
            <div class="col-md-4">

                <!-- Contact title -->
                <h4> Contact GadgetGub </h4>

                <!-- Contact Address -->
                <p> 3A, Somoye Osundairo Street, Computer Village, Ikeja, Lagos, Nigeria </p>

                <!-- Phone and Email -->
                <p>Phone: (+234) 90 555 532 22</p>
                <p>Email: info@gadgethub.com</p>
                <div class="social-links"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i
                            class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> <a
                        href="#."><i class="fa fa-pinterest"></i></a> <a href="#."><i class="fa fa-instagram"></i></a>
                    <a href="#."><i class="fa fa-google"></i></a> </div>
            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h4>Categories</h4>
                <ul class="links-footer">
                    <?php $limit = 7;
                    $get_cat = $this->ProductModel->get_lim_cat($limit);
                    foreach ($get_cat as $cat) : ?>
                    <li><a href="<?= base_url(); ?>product/all_products/<?= $cat->id; ?>"><?= $cat->title; ?></a></li>
                    <?php endforeach; ?>

                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h4>Customer Services</h4>
                <ul class="links-footer">
                    <li><a href="#.">Shipping & Returns</a></li>
                    <li><a href="#."> Secure Shopping</a></li>
                    <li><a href="#."> International Shipping</a></li>
                    <li><a href="#."> Affiliates</a></li>
                    <li><a href="#."> Contact </a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-2">
                <h4>Information</h4>
                <ul class="links-footer">
                    <li><a href="#.">Our Blog</a></li>
                    <li><a href="#."> About Our Shop</a></li>
                    <li><a href="#."> Secure Shopping</a></li>
                    <li><a href="#."> Delivery infomation</a></li>
                    <li><a href="#."> Store Locations</a></li>
                    <li><a href="#."> FAQs</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Rights -->
<div class="rights">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p>Copyright &copy;
                    <?php echo $date = date('Y'); ?> <a href="#." class="ri-li"> GadgetHub Ltd </a> All rights reserved
                </p>
            </div>
            <div class="col-sm-6 text-right"> <img src="<?php echo base_url(); ?>public_assets/images/card-icon.png"
                    alt=""> </div>
        </div>
    </div>
</div>

<!-- End Footer -->

<!-- GO TO TOP  -->
<a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
<!-- GO TO TOP End -->
</div>
<!-- End Page Wrapper -->

<div id="blockcart-modal">

</div>

<!-- JavaScripts -->
<script src="<?php echo base_url(); ?>public_assets/js/vendors/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>public_assets/js/vendors/wow.min.js"></script>
<script src="<?php echo base_url(); ?>public_assets/js/vendors/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public_assets/js/vendors/own-menu.js"></script>
<script src="<?php echo base_url(); ?>public_assets/js/vendors/jquery.sticky.js"></script>
<script src="<?php echo base_url(); ?>public_assets/js/vendors/owl.carousel.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="<?php echo base_url(); ?>public_assets/rs-plugin/js/jquery.tp.t.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public_assets/rs-plugin/js/jquery.tp.min.js"></script>
<script src="<?php echo base_url(); ?>public_assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>public_assets/js/rTabs.js"></script>
<script src="<?php echo base_url(); ?>public_assets/js/shoppingcartasync.js"></script>
</body>

</html>