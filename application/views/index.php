<?php $this->load->view('layouts/header'); ?>

<!-- Content -->
<main id="content">

    <!-- Slid Sec -->
    <section class="slid-sec">
        <div class="container">
            <div class="container-fluid">
                <div class="row">

                    <!-- Main Slider  -->
                    <div class="col-md-12 no-padding">

                        <!-- Main Slider Start -->
                        <div class="tp-banner-container">
                            <div class="tp-banner">
                                <ul>

                                    <!-- SLIDE  -->
                                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                        data-saveperformance="off">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo base_url(); ?>public_assets/images/iphone-banner.jpg"
                                            alt="slider" data-bgposition="center bottom" data-bgfit="cover"
                                            data-bgrepeat="no-repeat">

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption lfb tp-resizeme scroll" data-x="left" data-hoffset="60"
                                            data-y="center" data-voffset="80" data-speed="800" data-start="1300"
                                            data-easing="Power3.easeInOut" data-elementdelay="0.1"
                                            data-endelementdelay="0.1" data-endspeed="300" data-scrolloffset="0"
                                            style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a> </div>
                                    </li>

                                    <!-- SLIDE  -->
                                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                        data-saveperformance="off">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo base_url(); ?>public_assets/images/laptops-banner.jpg"
                                            alt="slider" data-bgposition="center bottom" data-bgfit="cover"
                                            data-bgrepeat="no-repeat">

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption lfb tp-resizeme scroll" data-x="left" data-hoffset="60"
                                            data-y="center" data-voffset="80" data-speed="800" data-start="1300"
                                            data-easing="Power3.easeInOut" data-elementdelay="0.1"
                                            data-endelementdelay="0.1" data-endspeed="300" data-scrolloffset="0"
                                            style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a> </div>
                                    </li>

                                    <!-- SLIDE  -->
                                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                        data-saveperformance="off">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo base_url(); ?>public_assets/images/smartphone-banner.jpg"
                                            alt="slider" data-bgposition="center bottom" data-bgfit="cover"
                                            data-bgrepeat="no-repeat">

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption lfb tp-resizeme scroll" data-x="left" data-hoffset="60"
                                            data-y="center" data-voffset="80" data-speed="800" data-start="1300"
                                            data-easing="Power3.easeInOut" data-elementdelay="0.1"
                                            data-endelementdelay="0.1" data-endspeed="300" data-scrolloffset="0"
                                            style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Main Slider  -->
                    <!-- <div class="col-md-3 no-padding">  -->

                    <!-- New line required  -->
                    <!-- <div class="product">
                <div class="like-bnr">
                  <div class="position-center-center">
                    <h5>New line required</h5>
                    <h4>Smartphone s7</h4>
                    <span class="price">&#x20A6;25,995.99</span> </div>
                </div>
              </div> -->

                    <!-- Weekly Slaes  -->
                    <!-- <div class="week-sale-bnr">
                <h4>Weekly <span>Sale!</span></h4>
                <p>Saving up to 50% off all online
                  store items this week.</p>
                <a href="#." class="btn-round">Shop now</a> </div>
            </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Shipping Info -->
    <section class="shipping-info">
        <div class="container">
            <ul>

                <!-- Free Shipping -->
                <li>
                    <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
                    <div class="media-body">
                        <h5>Free Shipping</h5>
                        <span>On order over &#x20A6;99</span>
                    </div>
                </li>
                <!-- Money Return -->
                <li>
                    <div class="media-left"> <i>&#x20A6;</i> </div>
                    <div class="media-body">
                        <h5>Money Return</h5>
                        <span>30 Days money return</span>
                    </div>
                </li>
                <!-- Support 24/7 -->
                <li>
                    <div class="media-left"> <i class="flaticon-operator"></i> </div>
                    <div class="media-body">
                        <h5>Support 24/7</h5>
                        <span>Hotline: (+234) 023 456 7890 </span>
                    </div>
                </li>
                <!-- Safe Payment -->
                <li>
                    <div class="media-left"> <i class="flaticon-business"></i> </div>
                    <div class="media-body">
                        <h5>Safe Payment</h5>
                        <span>Protect online payment</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- tab Section -->
    <section class="featur-tabs padding-top-60 padding-bottom-60">
        <div class="container">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
                <li role="presentation" class="active"><a href="#featur" aria-controls="featur" role="tab"
                        data-toggle="tab">Featured</a></li>
                <li role="presentation"><a href="#special" aria-controls="special" role="tab"
                        data-toggle="tab">Special</a></li>
                <li role="presentation"><a href="#on-sal" aria-controls="on-sal" role="tab" data-toggle="tab">Onsale</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Featured -->
                <div role="tabpanel" class="tab-pane active fade in" id="featur">
                    <!-- Items Slider -->
                    <div class="item-slide-5 with-nav">
                        <!-- Product -->
                        <?php foreach ($random as $ca) : ?>
                        <div class="product">
                            <article> <img class="img-responsive"
                                    src="<?php echo base_url(); ?>uploads/<?= $ca->productImage; ?>" alt="">
                                <!--<span class="sale-tag">-25%</span>-->

                                <!-- Content -->
                                <span class="tag">
                                    <?= $ca->title; ?></span> <a href="#." class="tittle">
                                    <?= $ca->productName; ?></a>
                                <!-- Reviews -->
                                <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <span class="margin-left-10">5
                                        Review(s)</span></p>
                                <div class="price">&#x20A6;
                                    <?= number_format($ca->productPrice); ?>.00 </div>
                                <a href="#addToCart" id="cart" class="cart-btn" onclick='cart(<?= $ca->prod_id; ?>)'
                                    data-id="<?= $ca->prod_id; ?>"><i class="icon-basket-loaded"></i></a>
                            </article>
                        </div>
                        <?php endforeach; ?>
                        <!-- Product -->



                    </div>
                </div>

                <!-- Special -->
                <div role="tabpanel" class="tab-pane fade" id="special">
                    <!-- Items Slider -->
                    <div class="item-col-5">

                        <!-- Product -->
                        <?php foreach ($random as $ca) : ?>
                        <div class="product">
                            <article> <img class="img-responsive"
                                    src="<?php echo base_url(); ?>uploads/<?= $ca->productImage; ?>" alt="">
                                <!--<span class="sale-tag">-25%</span>-->

                                <!-- Content -->
                                <span class="tag">
                                    <?= $ca->title; ?></span> <a href="#." class="tittle">
                                    <?= $ca->productName; ?></a>
                                <!-- Reviews -->
                                <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <span class="margin-left-10">5
                                        Review(s)</span></p>
                                <div class="price">&#x20A6;
                                    <?= number_format($ca->productPrice); ?>.00 </div>
                                <a href="#addToCart" id="cart" class="cart-btn" onclick='cart(<?= $ca->prod_id; ?>)'
                                    data-id="<?= $ca->prod_id; ?>"><i class="icon-basket-loaded"></i></a>
                            </article>
                        </div>
                        <?php endforeach; ?>

                        <!-- Product -->

                    </div>
                </div>

                <!-- on sale -->
                <div role="tabpanel" class="tab-pane fade" id="on-sal">
                    <!-- Items Slider -->
                    <div class="item-col-5">

                        <!-- Product -->
                        <?php foreach ($random as $ca) : ?>
                        <div class="product">
                            <article> <img class="img-responsive"
                                    src="<?php echo base_url(); ?>uploads/<?= $ca->productImage; ?>" alt="">
                                <!--<span class="sale-tag">-25%</span>-->

                                <!-- Content -->
                                <span class="tag">
                                    <?= $ca->title; ?></span> <a href="#." class="tittle">
                                    <?= $ca->productName; ?></a>
                                <!-- Reviews -->
                                <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <span class="margin-left-10">5
                                        Review(s)</span></p>
                                <div class="price">&#x20A6;
                                    <?= number_format($ca->productPrice); ?>.00 </div>
                                <a href="#addToCart" id="cart" class="cart-btn" onclick='cart(<?= $ca->prod_id; ?>)'
                                    data-id="<?= $ca->prod_id; ?>"><i class="icon-basket-loaded"></i></a>
                            </article>
                        </div>
                        <?php endforeach; ?>

                        <!-- Product -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Computers and Accessories -->
    <section class="light-gry-bg padding-top-60 padding-bottom-30">
        <div class="container">

            <!-- heading -->
            <div class="heading">
                <h2>Computers and Accessories</h2>
                <hr>
            </div>

            <!-- Items -->
            <div class="item-col-5">

                <!-- Product -->
                <!-- <div class="product col-2x">
                    <div class="like-bnr">
                        <div class="position-center-center">
                            <h5>Smart Watch 2.0</h5>
                            <p>Space Gray Aluminum Case
                                with Black/Volt Real Sport Band <span>38mm | 42mm</span> </p>
                            <a href="<?= base_url('product/top_eight_products'); ?>" class="btn-round">View Detail</a>
                        </div>
                    </div>
                </div> -->

                <!-- Product -->
                <!-- <form id="cart-user" method="POST" action="<?= base_url(); ?>ShoppingCart/add_to_cart"> -->
                <?php foreach ($computerAccessories as $ca) : ?>

                <div class="product">
                    <article> <img class="img-responsive"
                            src="<?php echo base_url(); ?>uploads/<?= $ca->productImage; ?>" alt="">
                        <!--<span class="sale-tag">-25%</span>-->

                        <!-- Content -->
                        <span class="tag">
                            <?= $ca->title; ?></span> <a href="#." class="tittle">
                            <?= $ca->productName; ?></a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">&#x20A6;
                            <?= number_format($ca->productPrice); ?>.00 </div>
                        <a href="#addToCart" id="cart" class="cart-btn" onclick='cart(<?= $ca->prod_id; ?>)'
                            data-id="<?= $ca->prod_id; ?>"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <?php endforeach; ?>
                <!-- </form> -->

            </div>
        </div>
    </section>

    <!-- Phones and Tablets -->
    <section class="light-gry-bg padding-top-60 padding-bottom-30">
        <div class="container">

            <!-- heading -->
            <div class="heading">
                <h2>Phones and Tablets</h2>
                <hr>
            </div>

            <!-- Items -->
            <div class="item-col-5">

                <!-- Product -->
                <!-- <div class="product col-2x">
                    <div class="like-bnr">
                        <div class="position-center-center">
                            <h5>Smart Watch 2.0</h5>
                            <p>Space Gray Aluminum Case
                                with Black/Volt Real Sport Band <span>38mm | 42mm</span> </p>
                            <a href="#." class="btn-round">View Detail</a>
                        </div>
                    </div>
                </div> -->

                <!-- Product -->
                <?php foreach ($phone as $ca) : ?>

                <div class="product">
                    <article> <img class="img-responsive"
                            src="<?php echo base_url(); ?>uploads/<?= $ca->productImage; ?>" alt="">
                        <!--<span class="sale-tag">-25%</span>-->

                        <!-- Content -->
                        <span class="tag">
                            <?= $ca->title; ?></span> <a href="#." class="tittle">
                            <?= $ca->productName; ?></a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">&#x20A6;
                            <?= number_format($ca->productPrice); ?>.00 </div>
                        <a href="#addToCart" id="cart" class="cart-btn" onclick='cart(<?= $ca->prod_id; ?>)'
                            data-id="<?= $ca->prod_id; ?>"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>
                <?php endforeach; ?>

                <!-- Product -->

            </div>
        </div>
    </section>

    <!-- Electronics -->
    <section class="light-gry-bg padding-top-60 padding-bottom-30">
        <div class="container">

            <!-- heading -->
            <div class="heading">
                <h2>Electronics</h2>
                <hr>
            </div>

            <!-- Items -->
            <div class="item-col-5">

                <!-- Product -->
                <!-- <div class="product col-2x">
                    <div class="like-bnr">
                        <div class="position-center-center">
                            <h5>Smart Watch 2.0</h5>
                            <p>Space Gray Aluminum Case
                                with Black/Volt Real Sport Band <span>38mm | 42mm</span> </p>
                            <a href="#." class="btn-round">View Detail</a>
                        </div>
                    </div>
                </div> -->

                <!-- Product -->

                <?php foreach ($elect as $ca) : ?>

                <div class="product">
                    <article> <img class="img-responsive"
                            src="<?php echo base_url(); ?>uploads/<?= $ca->productImage; ?>" alt="">
                        <!--<span class="sale-tag">-25%</span>-->

                        <!-- Content -->
                        <span class="tag">
                            <?= $ca->title; ?></span> <a href="#." class="tittle">
                            <?= $ca->productName; ?></a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">&#x20A6;
                            <?= number_format($ca->productPrice); ?>.00 </div>
                        <a href="#addToCart" id="cart" class="cart-btn" onclick='cart(<?= $ca->prod_id; ?>)'
                            data-id="<?= $ca->prod_id; ?>"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>
                <?php endforeach; ?>

                <!-- Product -->

            </div>
        </div>
    </section>

    <!-- Main Tabs Sec -->
    <section class="main-tabs-sec padding-top-60 padding-bottom-0">
        <div class="container">
            <ul class="nav margin-bottom-40" role="tablist">
                <li role="presentation" class="active"><a href="#tv-au" aria-controls="featur" role="tab"
                        data-toggle="tab"> <i class="flaticon-computer"></i> Home Appliances <span>236
                            item(s)</span></a>
                </li>
                <li role="presentation"><a href="#smart" aria-controls="special" role="tab" data-toggle="tab"><i
                            class="flaticon-smartphone"></i>Networking <span>150 item(s)</span></a></li>
                <li role="presentation"><a href="#deks-lap" aria-controls="on-sal" role="tab" data-toggle="tab"><i
                            class="flaticon-laptop"></i>Office Equipment <span>268 item(s)</span></a></li>
                <!-- <li role="presentation"><a href="#game-com" aria-controls="special" role="tab" data-toggle="tab"><i
                            class="flaticon-gamepad-1"></i>Game Console <span>79 item(s)</span></a></li>
                <li role="presentation"><a href="#watches" aria-controls="on-sal" role="tab" data-toggle="tab"><i
                            class="flaticon-computer-1"></i>Watches <span>105 item(s)</span></a></li>
                <li role="presentation"><a href="#access" aria-controls="on-sal" role="tab" data-toggle="tab"><i
                            class="flaticon-keyboard"></i>Accessories <span>816 item(s)</span></a></li> -->
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- TV & Audios -->
                <div role="tabpanel" class="tab-pane active fade in" id="tv-au">

                    <!-- Items -->
                    <div class="item-slide-5 with-bullet no-nav">
                        <!-- Product -->
                        <!-- Product -->
                        <?php foreach ($home as $ca) : ?>
                        <div class="product">
                            <article> <img class="img-responsive"
                                    src="<?php echo base_url(); ?>uploads/<?= $ca->productImage; ?>" alt="">
                                <span class="sale-tag">-25%</span>

                                <!-- Content -->
                                <span class="tag"><?= $ca->title; ?></span> <a href="#." class="tittle">
                                    <?= $ca->productName; ?></a>
                                <!-- Reviews -->
                                <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                    <span class="margin-left-10">5 Review(s)</span></p>
                                <div class="price">&#x20A6;
                                    <?= number_format($ca->productPrice, 2); ?></div>
                                <a href="#addToCart" id="cart" class="cart-btn" onclick='cart(<?= $ca->prod_id; ?>)'
                                    data-id="<?= $ca->prod_id; ?>"><i class="icon-basket-loaded"></i></a>
                            </article>
                        </div>
                        <?php endforeach; ?>




                    </div>
                </div>

                <!-- Smartphones -->
                <div role="tabpanel" class="tab-pane fade" id="smart">
                    <!-- Items -->
                    <div class="item-col-5">

                        <!-- Product -->
                        <?php foreach ($network as $ca) : ?>
                        <div class="product">
                            <article> <img class="img-responsive"
                                    src="<?php echo base_url(); ?>uploads/<?= $ca->productImage; ?>" alt="">
                                <span class="sale-tag">-25%</span>

                                <!-- Content -->
                                <span class="tag"><?= $ca->title; ?></span> <a href="#." class="tittle">
                                    <?= $ca->productName; ?></a>
                                <!-- Reviews -->
                                <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                    <span class="margin-left-10">5 Review(s)</span></p>
                                <div class="price">&#x20A6;
                                    <?= number_format($ca->productPrice, 2); ?></div>
                                <a href="#addToCart" id="cart" class="cart-btn" onclick='cart(<?= $ca->prod_id; ?>)'
                                    data-id="<?= $ca->prod_id; ?>"><i class="icon-basket-loaded"></i></a>
                            </article>
                        </div>
                        <?php endforeach; ?>


                        <!-- Product -->

                    </div>
                </div>
                <!-- Desk & Laptop -->
                <div role="tabpanel" class="tab-pane fade" id="deks-lap">

                    <!-- Items -->
                    <div class="item-col-5">

                        <!-- Product -->
                        <?php foreach ($office as $ca) : ?>
                        <div class="product">
                            <article> <img class="img-responsive"
                                    src="<?php echo base_url(); ?>uploads/<?= $ca->productImage; ?>" alt="">
                                <span class="sale-tag">-25%</span>

                                <!-- Content -->
                                <span class="tag"><?= $ca->title; ?></span> <a href="#." class="tittle">
                                    <?= $ca->productName; ?></a>
                                <!-- Reviews -->
                                <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                    <span class="margin-left-10">5 Review(s)</span></p>
                                <div class="price">&#x20A6;
                                    <?= number_format($ca->productPrice, 2); ?></div>
                                <a href="#addToCart" id="cart" class="cart-btn" onclick='cart(<?= $ca->prod_id; ?>)'
                                    data-id="<?= $ca->prod_id; ?>"><i class="icon-basket-loaded"></i></a>
                            </article>
                        </div>
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Selling Week -->
    <section class="padding-top-60 padding-bottom-60">
        <div class="container">

            <!-- heading -->
            <!-- <div class="heading">
          <h2>From our Blog</h2>
          <hr>
        </div>
        <div id="blog-slide" class="with-nav">  -->

            <!-- Blog Post -->
            <!-- <div class="blog-post">
            <article> <img class="img-responsive" src="<?php echo base_url(); ?>public_assets/images/blog-img-1.jpg" alt="" > <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why there’s nothing else like Mac. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a> </article>
          </div> -->

            <!-- Blog Post -->
            <!-- <div class="blog-post">
            <article> <img class="img-responsive" src="<?php echo base_url(); ?>public_assets/images/blog-img-2.jpg" alt="" > <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">Get the power to take your business to the
              next level. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a> </article>
          </div> -->

            <!-- Blog Post -->
            <!-- <div class="blog-post">
            <article> <img class="img-responsive" src="<?php echo base_url(); ?>public_assets/images/blog-img-3.jpg" alt="" > <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why there’s nothing else like Mac. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a> </article>
          </div> -->
            <!-- </div> -->
        </div>
    </section>

    <!-- Clients img -->
    <section class="light-gry-bg clients-img">
        <div class="container">
            <ul>
                <li><img src="<?php echo base_url(); ?>public_assets/images/infinix-logo.png" alt=""></li>
                <li><img src="<?php echo base_url(); ?>public_assets/images/hauwaii-logo.png" alt=""></li>
                <li><img src="<?php echo base_url(); ?>public_assets/images/itel-logo.png" alt=""></li>
                <li><img src="<?php echo base_url(); ?>public_assets/images/gionee-logo.png" alt=""></li>
                <li><img src="<?php echo base_url(); ?>public_assets/images/dell-logo.png" alt=""></li>
            </ul>
        </div>
    </section>

    <!-- Newslatter -->
    <!-- <section class="newsletter">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Subscribe our Newsletter <span>Get <strong>25% Off</strong> first purchase!</span></h3>
          </div>
          <div class="col-md-6">
            <form>
              <input type="email" placeholder="Your email address here...">
              <button type="submit">Subscribe!</button>
            </form>
          </div>
        </div>
      </div>
    </section> -->
</main>
<!-- End Content -->
<script>
$(document).ready(function() {
    $('#blockcart-modal').hide();
})

function cart(id) {
    $('.cart[data-id=' + id + ']').prop('checked', true);

    var id = id;

    $.ajax({
        type: "POST",
        url: "<?= base_url('ShoppingCart/add_to_cart'); ?>",
        dataType: "html",
        data: {
            'id': id,
        },
        success: function(data) {
            $('#blockcart-modal').show();
            $('#blockcart-modal').replaceWith(data);
            $('.exit-modal').click(function() {
                $('#blockcart-modal').hide();
            });

            // location.reload(true);

            setTimeout(function() {

                window.location.reload();

            }, 3000);
        },
        error: function() {
            alert('Error Occur....!!');
        }
    });
}

$(document).ready(function() {
    $('button#exit-modal').click(function(m) {
        $('#blockcart-modal').modal('hide');
    })
})
</script>

<?php $this->load->view('layouts/footer'); ?>