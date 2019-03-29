<?php $this->load->view('layouts/header'); ?>
<style>
.settings {
    color: red;
}
</style>

<div class="linking">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Cell Phones & Accessories</li>
        </ol>
    </div>
</div>

<!-- Content -->
<div id="content">

    <!-- Products -->
    <section class="padding-top-40 padding-bottom-60">
        <div class="container">
            <div class="row">

                <!-- Products -->
                <div class="col-md-9">

                    <!-- Short List -->
                    <div class="short-lst">
                        <?php if ($category == false) : ?>

                        <h2>All Products</h2>
                        <?php else : ?>


                        <h2><?= $category->title; ?></h2>
                        <?php endif; ?>
                        <ul>
                            <!-- Short List -->


                            <li>
                                <form action="<?= base_url(); ?>product/products_category" method="post">
                                    <select class="form-group" name="cat_id">
                                        <option value="0">Select Category</option>
                                        <?php foreach ($categories as $cat) : ?>

                                        <option value="<?= $cat->id; ?>"><?= $cat->title; ?></option>
                                        <?php endforeach; ?>

                                    </select><input type="submit" class="btn-round" value="submit">
                                </form>

                            </li>

                            <!-- Grid Layer -->
                            <li class="grid-layer"> <a href="#."><i class="fa fa-list margin-right-10"></i></a> <a
                                    href="#."><i class="fa fa-th"></i></a> </li>
                        </ul>
                    </div>

                    <!-- Items -->
                    <div class="col-list">
                        <!-- Product -->
                        <?php foreach ($products as $pro) : ?>
                        <div class="product">
                            <article>
                                <!-- Product img -->
                                <div class="media-left">
                                    <div class="item-img"> <img class="img-responsive"
                                            src="<?php echo base_url(); ?>uploads/<?= $pro->productImage; ?>" alt="">
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="media-body">
                                    <div class="row">
                                        <!-- Content Left -->

                                        <div class="col-sm-7"> <span class="tag">Tablets</span> <a href="#."
                                                class="tittle"><?= $pro->productName; ?></a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <span class="margin-left-10">5
                                                    Review(s)</span></p>

                                            <ul class="bullet-round-list">
                                                <?php
                                                $spec = $this->ProductModel->get_spec_by_id($pro->prod_id);
                                                foreach ($spec as $s) : ?>

                                                <li><?= $s->specification; ?>/li>
                                                    <?php endforeach; ?>
                                                    <!-- <li>Processor: 2.5 GHz None</li>
                                                <li>RAM: 8 GB</li>
                                                <li>Hard Drive: Flash memory solid state</li>
                                                <li>Graphics : Intel HD Graphics 520 Integrated</li> -->
                                            </ul>
                                        </div>
                                        <!-- Content Right -->
                                        <div class="col-sm-5 text-center"> <a href="#." class="heart"><i
                                                    class="fa fa-heart"></i></a> <a href="#." class="heart navi"><i
                                                    class="fa fa-navicon"></i></a>
                                            <div class="position-center-center">


                                                <div class="price">&#x20A6;
                                                    <?php echo number_format($pro->productPrice, 2); ?></div>
                                                <p>Availability: <span class="in-stock">In stock</span></p>


                                                <a href="#addToCart" id="cart" class="btn-round"
                                                    onclick='cart(<?= $pro->prod_id; ?>)'
                                                    data-id="<?= $pro->prod_id; ?>"><i
                                                        class="icon-basket-loaded"></i>Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php endforeach; ?>

                        <!-- Product -->





                        <!-- pagination -->
                        <ul class="pagination">
                            <li> <a href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li> <a href="#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Your Recently Viewed Items -->
    <section class="padding-bottom-60">
        <div class="container">

            <!-- heading -->
            <div class="heading">
                <h2>Your Recently Viewed Items</h2>
                <hr>
            </div>
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav">
                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive"
                            src="<?php echo base_url(); ?>public_assets/images/item-img-1-1.jpg" alt="">
                        <!-- Content -->
                        <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For
                            Playing Game</a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00 </div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>
                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive"
                            src="<?php echo base_url(); ?>public_assets/images/item-img-1-2.jpg" alt=""> <span
                            class="sale-tag">-25%</span>

                        <!-- Content -->
                        <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con
                            8GB</a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00 <span>$200.00</span></div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive"
                            src="<?php echo base_url(); ?>public_assets/images/item-img-1-3.jpg" alt="">
                        <!-- Content -->
                        <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch
                            M26 Touch Bluetooh </a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00</div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive"
                            src="<?php echo base_url(); ?>public_assets/images/item-img-1-4.jpg" alt=""> <span
                            class="new-tag">New</span>

                        <!-- Content -->
                        <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth
                            Con Air Mouse</a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00</div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive"
                            src="<?php echo base_url(); ?>public_assets/images/item-img-1-5.jpg" alt="">
                        <!-- Content -->
                        <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full
                            HD</a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00</div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive"
                            src="<?php echo base_url(); ?>public_assets/images/item-img-1-6.jpg" alt=""> <span
                            class="sale-tag">-25%</span>

                        <!-- Content -->
                        <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con
                            8GB</a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00 <span>$200.00</span></div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive"
                            src="<?php echo base_url(); ?>public_assets/images/item-img-1-7.jpg" alt="">
                        <!-- Content -->
                        <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch
                            M26 Touch Bluetooh </a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00</div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>

                <!-- Product -->
                <div class="product">
                    <article> <img class="img-responsive"
                            src="<?php echo base_url(); ?>public_assets/images/item-img-1-8.jpg" alt=""> <span
                            class="new-tag">New</span>

                        <!-- Content -->
                        <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth
                            Con Air Mouse</a>
                        <!-- Reviews -->
                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5
                                Review(s)</span></p>
                        <div class="price">$350.00</div>
                        <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients img -->
    <section class="light-gry-bg clients-img">
        <div class="container">
            <ul>
                <li><img src="<?php echo base_url(); ?>public_assets/images/c-img-1.png" alt=""></li>
                <li><img src="<?php echo base_url(); ?>public_assets/images/c-img-2.png" alt=""></li>
                <li><img src="<?php echo base_url(); ?>public_assets/images/c-img-3.png" alt=""></li>
                <li><img src="<?php echo base_url(); ?>public_assets/images/c-img-4.png" alt=""></li>
                <li><img src="<?php echo base_url(); ?>public_assets/images/c-img-5.png" alt=""></li>
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

<?php $this->load->view('layouts/footer'); ?>