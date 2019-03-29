<?php defined('BASEPATH') or exit('No direct script access allowed');

class ShoppingCartModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // Function to add an item to cart
    public function GetCartItem($id)
    {
        // Get cart item by id
        return $this->db->where('prod_id', $id)->get('tbl_products')->row();
    }

    // Function to retrieve cart items
    public function GetCartItems()
    {
        return $this->cart->contents();
    }
}
