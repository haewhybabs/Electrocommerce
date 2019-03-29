<?php $this->load->view('layouts/header'); ?>
<div id="content">

    <!-- Ship Process -->
    <div class="ship-process padding-top-30 padding-bottom-30">
        <div class="container">
            <ul class="row">

                <!-- Step 1 -->
                <li class="col-sm-3 current">
                    <div class="media-left"> <i class="flaticon-shopping"></i> </div>
                    <div class="media-body"> <span>Step 1</span>
                        <h6>Shopping Cart</h6>
                    </div>
                </li>

                <!-- Step 2 -->
                <li class="col-sm-3">
                    <div class="media-left"> <i class="flaticon-business"></i> </div>
                    <div class="media-body"> <span>Step 2</span>
                        <h6>Payment Methods</h6>
                    </div>
                </li>

                <!-- Step 3 -->
                <li class="col-sm-3">
                    <div class="media-left"> <i class="flaticon-delivery-truck"></i> </div>
                    <div class="media-body"> <span>Step 3</span>
                        <h6>Delivery Methods</h6>
                    </div>
                </li>

                <!-- Step 4 -->
                <li class="col-sm-3">
                    <div class="media-left"> <i class="fa fa-check"></i> </div>
                    <div class="media-body"> <span>Step 4</span>
                        <h6>Confirmation</h6>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Shopping Cart -->
    <section class="shopping-cart padding-bottom-60">
        <form method="post" action="<?= base_url(); ?>shoppingcart/update_cart">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Items</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Total Price </th>
                            <th>&nbsp; </th>
                        </tr>
                    </thead>
                    <tbody><?php $i = 1; ?>

                        <?php foreach ($cart_items as $item) : ?>
                        <?php echo form_hidden($i . '[rowid]', $item['rowid']); ?>
                        <!-- Item Cart -->
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="media-left"> <a href="#."> <img
                                                src="<?= base_url(); ?>uploads/<?= $item['options']['image_path'] ?>"
                                                alt="<?= $item['name'] ?>" class="img-responsive"> </a> </div>
                                    <div class="media-body">
                                        <p><strong><?= $item['name']; ?></strong></p>

                                        <p style="font-size:9px;"><?php
                                                                    $spec = $this->ProductModel->get_spec_by_id($item['id']);
                                                                    foreach ($spec as $s) : ?>


                                            *<?= $s->specification; ?>:;

                                            <?php endforeach; ?>

                                        </p>

                                    </div>
                                </div>
                            </td>
                            <td class="text-center padding-top-60">
                                &#x20A6;<?= number_format($item['price'], 2); ?></td>
                            <td class="text-center">
                                <!-- Quinty -->

                                <div class="quinty padding-top-20">
                                    <input type="number" name="<?php echo $i . '[qty]'; ?>" min="1"
                                        value="<?= $item['qty']; ?>">
                                </div>
                            </td>
                            <td class="text-center padding-top-60">
                                &#x20A6;<?= number_format($item['price'] * $item['qty'], 2); ?></td>
                            <td class="text-center padding-top-60"><a
                                    href="<?= base_url(); ?>shoppingcart/cart_remove/<?= $item['rowid']; ?>"
                                    class="remove"><i class="fa fa-close"></i></a></td>
                        </tr>
                        <?php $i++;
                        endforeach; ?>

                        <!-- Item Cart -->

                    </tbody>
                </table>

                <!-- Promotion -->
                <div class="promo">
                    <!-- <div class="coupen">
                        <label> Promotion Code
                            <input type="text" placeholder="Your code here">
                            <button type="submit"><i class="fa fa-arrow-circle-right"></i></button>
                        </label>
                    </div> -->

                    <!-- Grand total -->
                    <div class="g-totel">
                        <h5>Grand total: <span>&#x20A6;<?php echo $this->cart->format_number($this->cart->total()); ?>
                            </span></h5>
                    </div>
                </div>

                <!-- Button -->
                <div class="pro-btn"> <button type="submit" class="btn-round" style="background:#006699;">Update
                        Cart</button><a href="<?= base_url(); ?>product/all_products"
                        class="btn-round btn-light">Continue
                        Shopping</a> <a href="<?= base_url(); ?>shoppingcart/payment/<?= $item['rowid']; ?>"
                        class="btn-round">Go
                        Payment
                        Methods</a> </div>

            </div>
        </form>
    </section>

    <!-- Clients img -->
    <section class="light-gry-bg clients-img">
        <div class="container">
            <ul>
                <li><img src="images/c-img-1.png" alt=""></li>
                <li><img src="images/c-img-2.png" alt=""></li>
                <li><img src="images/c-img-3.png" alt=""></li>
                <li><img src="images/c-img-4.png" alt=""></li>
                <li><img src="images/c-img-5.png" alt=""></li>
            </ul>
        </div>
    </section>

    <!-- Newslatter -->
    <section class="newslatter">
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
    </section>
</div>


<?php $this->load->view('layouts/footer'); ?>