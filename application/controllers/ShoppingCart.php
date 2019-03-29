<?php defined('BASEPATH') or exit('No direct script access allowed');

class ShoppingCart extends CI_Controller
{
    // Constructor
    function __construct()
    {
        parent::__construct();

        // Load cart library
        $this->load->library('cart');
        // $this->load->library('control');

        // Load cart model
        // $this->load->model(['ShoppingCartModel', 'ProductModel']);
    }

    // Function to add items to cart
    public function add_to_cart()
    {
        $id = $this->input->post('id');

        $data = $this->ShoppingCartModel->GetCartItem($id);
        $item = array(
            'id' => $data->prod_id,
            'qty' => 1,
            'price' => $data->productPrice,
            'name' => $data->productName,
            'options' => array('image_path' => $data->productImage)
        );

        $this->cart->insert($item);

        $data = '';

        $data .= '
        <div id="blockcart-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block;" data-modal-class="exit">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="header-wrapper">
                        <!-- Header title text -->
                        <div class="header-title">
                            <h4 class="modal-title text-xs-center" id="myModalLabel">
                                Product successfully added to your shopping cart
                            </h4>
                        </div>
                        <!-- Exit button -->
                        <button type="button" class="close exit-modal" data-dismiss="modal" aria-label="Close" data-modal-selector="">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 divide-right col-xs-6 fst-col">
    
                            <div class="img-cont-wrap"><img class="img-responsive" src="' . base_url() . 'uploads/' . $item['options']['image_path'] . '" alt="" title="" itemprop="image"></div>
                            <div class="cont-contr">
                                <h6 class="product-name">' . $item['name'] . '</h6>
                                <div>&#8358;' . number_format($item['price']) . '</div>
    
                                <div><strong>Quantity:</strong>&nbsp;' . $item['qty'] . '</div>
                            </div>
    
    
                        </div>
    
                        <div class="col-md-5  col-xs-6 divide-left scd-col">
                            <div class="cart-content">
                                <p class="cart-products-count">There are 10 items in your cart.</p>
                                <p><strong>Total products:</strong>&nbsp;$232.31</p>
                                <p><strong>Total shipping:</strong>&nbsp;$7.00 </p>
                                <p><strong>Taxes</strong>&nbsp;$0.00</p>
                                <p><strong>Total:</strong>&nbsp;$239.31 (tax excl.)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-round  btn-effect btn-active  btn-cart exit-modal" data-dismiss="modal"><span>Continue Shopping</span></button>
                    <a href="//cyberwire.joommasters.com/index.php?controller=cart&amp;action=show" class="btn-default  btn-effect  btn-cart">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
        ';
        echo $data;
    }

    // Function to get cart items
    public function get_cart_items()
    {

        $cartResult = '';

        $cartResult .= '
            <div id="blockcart-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block;">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title text-xs-center" id="myModalLabel">
                    Product successfully added to your shopping cart
                </h4>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 divide-right col-xs-6">
                    
                        <div><img class="product-image" src="' . base_url() . 'uploads/' . $itemData['options']['image_path'] . '" alt="" title="" itemprop="image"></div> 
                            <div>      
                            <h6 class="h6 product-name">' . $itemData['name'] . '</h6>
                            &#8358;' . number_format($itemData['price']) . '
                            
                                                <span><strong>Size</strong>: S</span><br>
                                                <span><strong>Color</strong>: White</span><br>
                                            <strong>Quantity:</strong>&nbsp;' . $itemData['qty'] . '
                        </div>
                        
                    
                    </div>
                    <div class="col-md-7  col-xs-6 divide-left">
                    <div class="cart-content">
                                        <p class="cart-products-count">There are 10 items in your cart.</p>
                                    <p><strong>Total products:</strong>&nbsp;$232.31</p>
                        <p><strong>Total shipping:</strong>&nbsp;$7.00 </p>
                                        <p><strong>Taxes</strong>&nbsp;$0.00</p>
                                    <p><strong>Total:</strong>&nbsp;$239.31 (tax excl.)</p>
                        <button type="button" class="btn-default  btn-effect btn-active  btn-cart" data-dismiss="modal">Continue shopping</button>
                        <a href="//cyberwire.joommasters.com/index.php?controller=cart&amp;action=show" class="btn-default  btn-effect  btn-cart">Proceed to checkout</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        ';

        return $cartResult;
    }

    public function cart_view()
    {
        $data['cart_items'] = $this->cart->contents();

        $this->load->view('shoppingcart', $data);
        //var_dump($data);
    }

    // Function to clear the cart
    public function empty_cart()
    {
        $this->cart->destroy();
    }

    public function update_cart()
    {
        $data = $this->input->post();
        $this->cart->update($data);
        //var_dump($data);

        redirect('shoppingcart/cart_view');

    }

    public function cart_remove($id)
    {
        $row_id = $id;
        $qty = 0;
        $array = array('rowid' => $row_id, 'qty' => $qty);
        $this->cart->update($array);
        redirect('shoppingcart/cart_view', 'refresh');

    }

    public function shipping_info()
    {


    }

    public function payment($ref)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $ref = $ref . substr(str_shuffle($chars), 0, 8);

        if ($this->session->userdata('logged_user') == false) {
            $arr = array(
                'ref' => $ref,
            );
            $this->session->set_userdata('payment', $arr);
            redirect('user');
        }

        $email = $this->session->userdata('logged_user')['email'];
        $callback = base_url() . 'shoppingcart/verify_payment';
        $amount = $this->cart->total() * 100;

        $this->paystack->initialize($ref, $email, $callback, $amount);

    }

    public function verify_payment()
    {

        if ($this->paystack->verify == true) {
            //payment is successful

        } else {
            //payment not successful
        }


    }
}