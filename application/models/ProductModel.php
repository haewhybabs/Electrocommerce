<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductModel extends CI_Model
{
    // Insert categories
    public function InsertCategoryData($category)
    {
        $insert = array(
            'title' => $category['category-name']
        );

        return $this->db->insert('tbl_product_category', $insert);
    }

    // Get Product Categories
    public function GetCategory()
    {
        return $this->db->limit(10)->get('tbl_product_category')->result();
    }
    public function get_all_cateogory()
    {
        return $this->db->get('tbl_product_category')->result();

    }
    public function count_all_category()
    {
        return $this->db->count_all_results('tbl_product_category');
    }

    // Delete Category
    public function DeleteCategoryData($id)
    {
        $this->db->where('id', $id)->delete('tbl_product_category');
    }

    // Edit Category
    public function GetCategoryById($id)
    {
        return $this->db->where('id', $id)->get('tbl_product_category')->row();
    }

    public function UpdateCategoryData($id, $category)
    {
        $insert = array(
            'title' => $category['category-name']
        );

        return $this->db->where('id', $id)->update('tbl_product_category', $insert);
    }

    // Get product id
    public function GetProductId()
    {
        $this->db->select('prod_id');

        $this->db->from('tbl_products');

        $this->db->order_by('id', 'DESC');

        $this->db->limit('1');

        $query = $this->db->get()->result();

        if ($query == null) {
            return false;
        } else {
            return $query;
        }
    }

    // Insert Products
    public function InsertProductData($item)
    {
        $items = array(
            'productName' => $item['productName'],
            'productCategory' => $item['productCategory'],
            'shortProductDesc' => $item['shortProductDesc'],
            'fullProductDesc' => $item['fullProductDesc'],
            'productPrice' => $item['productPrice'],
            'productImage' => $item['productImage'],
            'dateAdded' => date('Y-m-d')
        );

        return $this->db->insert('tbl_products', $items);
    }

    // Retrieve All Product Items
    public function GetProducts()
    {
        // return $this->db->get('tbl_products')->result();

        $this->db->select('tbl_products.*, tbl_product_category.*');

        $this->db->join('tbl_product_category', 'tbl_product_category.id = tbl_products.productCategory', 'left');

        return $this->db->get('tbl_products')->result();
    }

    // Get Products By Id
    public function GetProductById($id)
    {
        $this->db->where('tbl_products.prod_id', $id);

        // $this->db->select('tbl_products.*', 'tbl_product_category.*');

        $this->db->join('tbl_product_category', 'tbl_product_category.id = tbl_products.productCategory', 'left');

        return $this->db->get('tbl_products')->row();
    }

    // Get Product By Category Id
    public function GetProductsByCategoryId($categoryId)
    {
        return $this->db->where('productCategory', $categoryId)->get('tbl_products')->result();
    }

    // Delete Products
    public function DeleteProductData($id)
    {
        // $this->db->delete('tbl_products')->where($this->id, $id);
        $this->db->where('prod_id', $id);
        $this->db->delete('tbl_products');
    }

    // Update Products
    public function UpdateProductData($id, $item)
    {
        $items = array(
            'productName' => $item['productName'],
            'productCategory' => $item['productCategory'],
            'shortProductDesc' => $item['shortProductDesc'],
            'fullProductDesc' => $item['fullProductDesc'],
            'productPrice' => $item['productPrice'],
            'productImage' => $item['productImage'],
        );

        $this->db->where('prod_id', $id);
        $this->db->update('tbl_products', $items);
    }

    // Product Specifications
    public function InsertProductSpecificationData($specs)
    {
        //  $insertSpecs = array();

        // $insertSpecs = array(
        //     'product' => $specs['productName'],
        //     'specification' => $specs['specification']
        // );
        $this->db->insert('tbl_product_specification', $specs);
        $id = $this->db->insert_id();

        return $id;
    }

    // Get Product Specification by Id
    public function GetProductSpecificationById($prodId)
    {
        return $this->db->where('product', $prodId)->get('tbl_product_specification')->result();
    }

    // Get Single Product Specification by Id
    public function GetSingleProductSpecificationById($prodId)
    {
        return $this->db->where('product', $prodId)->get('tbl_product_specification')->row();
    }

    // Edit a product specification
    public function EditProductSpecification($specId)
    {
        return $this->db->where('specification_id', $specId)->get('tbl_product_specification')->row();
    }

    // Update a product specification
    public function UpdateProductSpecification($specId, $item)
    {
        $data = array(
            'specification' => $item
        );
        return $this->db->where('specification_id', $specId)->update('tbl_product_specification', $data);
    }

    // Update a product specificaion
    public function DeleteProductSpecification($specId)
    {
        return $this->db->where('specification_id', $specId)->delete('tbl_product_specification');
    }


    /*
     * Website Queries
     */


    // Get all product data
    public function GetSingleProductData()
    {
        $this->db->select('tbl_product.*, tbl_product_category.*, tbl_product_specification');

        $this->db->join('tbl_product_category', 'tbl_product_category.id = tbl_products.productCategory', 'left');

        $this->db->join('tbl_product_specification', 'tbl_product_specification.product = tbl_products.prod_id', 'left');

        $this->db->where('prod_id', $id);

        return $this->db->get('tbl_products')->row();
    }

    // Get all product data
    public function GetAllProductData()
    {
        $this->db->select('tbl_product.*, tbl_product_category.*, tbl_product_specification');

        $this->db->join('tbl_product_category', 'tbl_product_category.id = tbl_products.productCategory', 'left');

        $this->db->join('tbl_product_specification', 'tbl_product_specification.product = tbl_products.prod_id', 'left');

        return $this->db->get('tbl_products')->result();
    }

    // Computer Accessories Top Eight Products
    public function CATopEightProducts($id, $limit)
    {
        $this->db->select('tbl_products.*, tbl_product_category.*')
            ->join('tbl_product_category', 'tbl_product_category.id = tbl_products.productCategory', 'left');

        return $this->db->where('productCategory', $id)->limit($limit)->get('tbl_products')->result();
    }

    // Phones and Tablets Top Eight Products 
    public function PTTopEightProducts()
    {
        return $this->db->where('productCategory', '2')->limit('8')->get('tbl_products')->result();
    }

    // Electronics Top Eight Products
    public function ELTopEightProducts()
    {
        return $this->db->where('productCategory', '3')->limit('8')->get('tbl_products')->result();
    }
    public function get_latest_id()
    {
        return $this->db->select('prod_id')
            ->order_by('prod_id', 'DESC')
            ->limit('1')
            ->get('tbl_products')
            ->row();
    }

    public function get_all_products($id)
    {
        return
            $this->db->join('tbl_product_category', 'tbl_product_category.id=tbl_products.productCategory')
            ->where('tbl_products.productCategory', $id)
            ->get('tbl_products')->result();
    }

    public function get_all_product()
    {
        return
            $this->db->join('tbl_product_category', 'tbl_product_category.id=tbl_products.productCategory')
            ->order_by('prod_id', 'RANDOM')
            ->get('tbl_products')->result();
    }


    public function get_all_categories()
    {
        return $this->db->get('tbl_product_category')->result();
    }

    public function selectcategory($id)
    {
        return $this->db->where('id', $id)->get('tbl_product_category')->row();
    }

    public function get_spec_by_id($id)
    {
        return $this->db->where('product', $id)
            ->get('tbl_product_specification')->result();
    }

    public function get_random_product($limit)
    {

        $this->db->select('tbl_products.*, tbl_product_category.*')
            ->join('tbl_product_category', 'tbl_product_category.id = tbl_products.productCategory', 'left');

        return $this->db->limit($limit)->order_by('prod_id', 'RANDOM')->get('tbl_products')->result();

    }

    public function get_lim_cat($limit)
    {
        return $this->db->limit($limit)->get('tbl_product_category')->result();
    }
}