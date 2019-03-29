<?php $this->load->view('layouts/header'); ?>

<div id="wrapper" class="container">
    <div class="row">



        <div id="content-wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


            <section id="main">
                <div class="cart-block">
                    <h1>Shopping Cart</h1>
                </div>
                <div class="cart-grid">
                    <div class="row first">
                        <!-- Left Block: cart product informations & shpping -->
                        <div class="cart-grid-body col-xs-12 col-lg-8 col-sm-12 col-md-8">
                            <div class="cart-box">
                                <!-- cart products detailed -->
                                <div class="cart cart-container">

                                    <div class="cart-overview js-cart" data-refresh-url="//cyberwire.joommasters.com/index.php?controller=cart&amp;ajax=1&amp;action=refresh">
                                        <ul class="cart-items">
                                            <?php foreach ($cart_items as $item) : ?>
                                            <li class="cart-item">
                                                <div class="product-line-grid">
                                                    <!--  product left content: image-->
                                                    <div class="product-line-grid-left col-md-2 col-xs-4 left">
                                                        <span class="product-image media-middle">
                                                            <img src="<?= base_url(); ?>uploads/<?= $item['options']['image_path'] ?>" alt="<?= $item['name'] ?>">
                                                        </span>
                                                    </div>

                                                    <!--  product left body: description -->
                                                    <div class="product-line-grid-body col-md-5 col-xs-8 mid">
                                                        <div class="product-line-info">
                                                            <a class="label product-name" href="https://cyberwire.joommasters.com/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" data-id_customization="0"><?= $item['name'] ?></a>
                                                        </div>

                                                        <div class="product-line-info">
                                                            <span class="label">Price: </span>
                                                            <span class="value"><?= $item['price'] ?></span>


                                                        </div>
                                                        <div class="product-line-info">
                                                            <span class="label">Size:</span>
                                                            <span class="value">S</span>
                                                        </div>
                                                        <div class="product-line-info">
                                                            <span class="label">Color:</span>
                                                            <span class="value">White</span>
                                                        </div>

                                                    </div>

                                                    <!--  product left body: description -->
                                                    <div class="product-line-grid-right product-line-actions col-md-5 col-xs-12 right">
                                                        <div class="row">
                                                            <div class="col-md-10 col-xs-9">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-6 qty">
                                                                        <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input class="js-cart-line-product-quantity form-control" data-down-url="https://cyberwire.joommasters.com/index.php?controller=cart&amp;update=1&amp;id_product=1&amp;id_product_attribute=1&amp;token=180af3165094dff5bc9f6c62517cb983&amp;op=down" data-up-url="https://cyberwire.joommasters.com/index.php?controller=cart&amp;update=1&amp;id_product=1&amp;id_product_attribute=1&amp;token=180af3165094dff5bc9f6c62517cb983&amp;op=up" data-update-url="https://cyberwire.joommasters.com/index.php?controller=cart&amp;update=1&amp;id_product=1&amp;id_product_attribute=1&amp;token=180af3165094dff5bc9f6c62517cb983" data-product-id="1" type="text" value="2" name="product-quantity-spin" min="1" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-touchspin js-touchspin js-increase-product-quantity bootstrap-touchspin-up" type="button"><i class="material-icons touchspin-up"></i></button><button class="btn btn-touchspin js-touchspin js-decrease-product-quantity bootstrap-touchspin-down" type="button"><i class="material-icons touchspin-down"></i></button></span></div>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-6 price">
                                                                        <span class="product-price">
                                                                            <strong>
                                                                                $38.24
                                                                            </strong>
                                                                            <span class="value"> </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 col-xs-3 text-xs-right">
                                                                <div class="cart-line-product-actions ">
                                                                    <a class="remove-from-cart" rel="nofollow" href="https://cyberwire.joommasters.com/index.php?controller=cart&amp;delete=1&amp;id_product=1&amp;id_product_attribute=1&amp;token=180af3165094dff5bc9f6c62517cb983" data-link-action="delete-from-cart" data-id-product="1" data-id-product-attribute="1" data-id-customization="">
                                                                        <i class="material-icons pull-xs-left fa fa-trash"></i>
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                </div>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>

                                </div>


                                <a class="btn-default btn-shopping button-small btn-effect" href="https://cyberwire.joommasters.com/index.php">
                                    Continue shopping
                                </a>


                                <!-- shipping informations -->
                                <div>

                                </div>
                            </div>
                        </div>

                        <!-- Right Block: cart subtotal & cart total -->
                        <div class="cart-grid-right col-xs-12 col-lg-4 col-sm-12 col-md-4">
                            <div class="right-box">

                                <div class="card cart-summary">




                                    <div class="cart-detailed-totals">

                                        <div class="card-block">
                                            <div class="cart-summary-line" id="cart-subtotal-products">
                                                <span class="label js-subtotal">
                                                    9 items
                                                </span>
                                                <span class="value">$161.84</span>
                                            </div>
                                            <div class="cart-summary-line" id="cart-subtotal-shipping">
                                                <span class="label">
                                                    Shipping
                                                </span>
                                                <span class="value">$7.00</span>
                                                <div><small class="value"></small></div>
                                            </div>
                                        </div>



                                        <div class="block-promo">
                                            <div class="cart-voucher">

                                                <p>
                                                    <a class="collapse-button promo-code-button" data-toggle="collapse" href="#promo-code" aria-expanded="false" aria-controls="promo-code">
                                                        Have a promo code?
                                                    </a>
                                                </p>

                                                <div class="promo-code collapse" id="promo-code">

                                                    <form action="https://cyberwire.joommasters.com/index.php?controller=cart" data-link-action="add-voucher" method="post">
                                                        <input type="hidden" name="token" value="180af3165094dff5bc9f6c62517cb983">
                                                        <input type="hidden" name="addDiscount" value="1">
                                                        <input class="promo-input" type="text" name="discount_name" placeholder="Promo code">
                                                        <button type="submit" class="btn btn-primary"><span>Add</span></button>
                                                    </form>



                                                    <div class="alert alert-danger js-error" role="alert">
                                                        <i class="material-icons"></i><span class="ml-1 js-error-text"></span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>



                                        <hr>

                                        <div class="card-block">
                                            <div class="cart-summary-line cart-total">
                                                <span class="label">Total (tax excl.)</span>
                                                <span class="value">$168.84</span>
                                            </div>

                                            <div class="cart-summary-line">
                                                <small class="label">Taxes</small>
                                                <small class="value">$0.00</small>
                                            </div>
                                        </div>

                                        <hr>
                                    </div>



                                    <div class="checkout cart-detailed-actions card-block">
                                        <div class="text-xs-center">
                                            <a href="https://cyberwire.joommasters.com/index.php?controller=order" class="btn-default button-small btn-effect btn">Checkout</a>

                                        </div>
                                    </div>


                                </div>



                                <div id="block-reassurance">
                                    <ul>
                                        <li>
                                            <div class="block-reassurance-item">
                                                <span class="reassurance-img">
                                                    <img src="https://cyberwire-cff8.kxcdn.com/modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png" alt="Security policy (edit with Customer reassurance module)">
                                                </span>
                                                <span>Security policy (edit with Customer reassurance module)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="block-reassurance-item">
                                                <span class="reassurance-img">
                                                    <img src="https://cyberwire-cff8.kxcdn.com/modules/blockreassurance/img/ic_local_shipping_black_36dp_1x.png" alt="Delivery policy (edit with Customer reassurance module)">
                                                </span>
                                                <span>Delivery policy (edit with Customer reassurance module)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="block-reassurance-item">
                                                <span class="reassurance-img">
                                                    <img src="https://cyberwire-cff8.kxcdn.com/modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png" alt="Return policy (edit with Customer reassurance module)">
                                                </span>
                                                <span>Return policy (edit with Customer reassurance module)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>




    </div>
</div>

<?php $this->load->view('layouts/footer'); ?> 