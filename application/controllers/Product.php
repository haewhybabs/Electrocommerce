<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    // Public properties
    public $info;

    function __construct()
    {
        parent::__construct();

        // $this->load->model('ProductModel');
    }

    // Product Overview - Page Load
    public function product_overview()
    {
        // Assign page data
        $data['title'] = 'Product Overview';
        $data['pageTitle'] = 'Product Overview';
        $data['products'] = $this->ProductModel->GetProducts();

        $this->template->load('admin', 'XownCMS/product/product_overview', $data);
    }

    // Delete A Product
    public function delete_product($id)
    {
        $this->ProductModel->DeleteProductData($id);

        $this->session->set_flashdata('message', 'Product has been deleted successfully');

        redirect(site_url('product/product_inventory'));
    }

    // Load Product Data Edit Page
    public function edit_product($id)
    {
        // Assign page data
        $data['title'] = 'Edit Product';
        $data['pageTitle'] = 'Edit Product';
        $data['cat'] = $this->ProductModel->GetCategory();
        $data['products'] = $this->ProductModel->GetProductById($id);

        // Load Edit Page
        $this->template->load('admin', 'XownCMS/product/edit_product', $data);
    }

    // Update A Product
    public function update_product()
    {
        $get_prod_id = $this->ProductModel->get_latest_id();
        $id = $get_prod_id->prod_id;
        // Configure files to upload
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['file_name'] = 'file' . $id;

        // Load the upload library
        $this->load->library('upload', $config);

        // Fire the upload action
        $this->upload->do_upload('userfile');

        // Take input fields data
        $item = $this->input->post();

        $id = $this->input->post('product_id');

        // Take product field data
        $info = $this->upload->data();

        // Take product field data among others
        $item['productImage'] = $info['file_name'];

        // Fire the upload action
        $this->ProductModel->UpdateProductData($id, $item);

        // Flash successful update
        $this->session->set_flashdata('message', 'Product update is successfull');

        redirect(site_url('product/product_inventory'));
    }

    // Product Inventory - Page Load
    public function product_inventory()
    {
        // Assign page data
        $data['title'] = 'Product Inventory';
        $data['pageTitle'] = 'Product Inventory';
        $data['products'] = $this->ProductModel->GetProducts();

        $this->template->load('admin', 'XownCMS/product/product_inventory', $data);
    }

    // Add New Product - Page Load
    public function new_product()
    {
        $data['title'] = 'Add New Product';
        $data['pageTitle'] = 'Add New Product';
        $data['cat'] = $this->ProductModel->GetCategory();

        $this->template->load('admin', 'XownCMS/product/add_product', $data);
    }

    // Add New Product - Form Validation
    public function add_product()
    {
        $get_prod_id = $this->ProductModel->get_latest_id();
        $id = $get_prod_id->prod_id;
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['file_name'] = 'file' . $id;

        $this->load->library('upload', $config);

        // Set Rules
        $this->form_validation->set_rules('productName', 'Product Name', 'required');
        $this->form_validation->set_rules('productCategory', 'Product Category', 'required');
        $this->form_validation->set_rules('shortProductDesc', 'Short Product Description', 'required');
        $this->form_validation->set_rules('fullProductDesc', 'Full Product Description', 'required');
        $this->form_validation->set_rules('productPrice', 'Product Price', 'required');

        // Validate Form
        if (($this->form_validation->run()) && ($this->upload->do_upload('userfile'))) {

            $item = $this->input->post();

            $info = $this->upload->data();

            $item['productImage'] = $info['file_name'];

            $this->ProductModel->InsertProductData($item);

            $this->session->set_flashdata('message', 'Product is Successfully Added');

            redirect(site_url('product/product_inventory'));
        } else {

            $this->session->set_flashdata('error', 'Some error while trying to add the product');

            redirect(site_url('product/product_inventory'));
        }
    }

    // Product Category - Page Load
    public function product_category()
    {
        // Assign page data
        $data['title'] = 'Product Category';
        $data['pageTitle'] = 'Product Category';
        $data['category'] = $this->ProductModel->GetCategory();

        $this->template->load('admin', 'XownCMS/product/product_category', $data);
    }

    // Add Category - Form Validation
    public function add_category()
    {
        // Validate form
        $this->form_validation->set_rules('category-name', 'Category', 'required');

        if ($this->form_validation->run()) {

            $category = $this->input->post();

            $add_category = $this->ProductModel->InsertCategoryData($category);

            $this->session->set_flashdata('message', 'You Have Successfully Added A Category');

            redirect(site_url('product/product_category'));
        }
    }

    // Delete category
    public function delete_category($id)
    {
        $this->ProductModel->DeleteCategoryData($id);

        $this->session->set_flashdata('message', 'Product category is deleted successfully');

        redirect(site_url('product/product_category'));
    }

    // Edit category
    public function edit_category($id)
    {
        // Assign page data
        $data['title'] = 'Edit Category';
        $data['pageTitle'] = 'Edit Category';
        $data['category'] = $this->ProductModel->GetCategoryById($id);

        $this->template->load('admin', 'XownCMS/product/edit_category', $data);
    }

    // Update category
    public function update_category()
    {
        // Take data from input
        $category = $this->input->post();

        // The id being passed
        $id = $this->input->post('id');

        // Fire the upload action
        $this->ProductModel->UpdateCategoryData($id, $category);

        // Flash successful update
        $this->session->set_flashdata('message', 'Category update is successfull');

        redirect(site_url('product/product_category'));
    }

    // Product Specification - Page Load
    public function product_specification()
    {
        $data['title'] = 'Product Specification';
        $data['pageTitle'] = 'Add Specifications For A Product';
        $data['category'] = $this->ProductModel->GetCategory();

        $this->template->load('admin', 'XownCMS/product/product_specification', $data);
    }

    // The page to enter the product specification
    public function product_specs()
    {
        // Category Id 
        $categoryId = $this->input->post('productCategory');

        // Assign page data
        $data['title'] = 'Enter Product Specification';
        $data['pageTitle'] = 'Enter Product Specification';

        // Number of rows to populate
        $data['n_rows'] = $this->input->post('spec_num');

        // Products to fetch from database
        $data['products'] = $this->ProductModel->GetProductsByCategoryId($categoryId);

        $this->template->load('admin', 'XownCMS/product/product_specs', $data);
    }

    // The page to enter the product specification for a single product
    public function product_spec()
    {
        // Category Id 
        $productId = $this->input->post('prod_id');

        // Assign page data
        $data['title'] = 'Enter Product Specification';
        $data['pageTitle'] = 'Enter Product Specification';

        // Number of rows to populate
        $data['n_rows'] = $this->input->post('spec_num');

        // Products to fetch from database
        $data['product'] = $this->ProductModel->GetProductById($productId);

        $this->template->load('admin', 'XownCMS/product/product_specs', $data);
    }

    // Fire insert action for product specification
    public function add_specification()
    {
        $specs = $this->input->post('specification');

        // Validate form
        $this->form_validation->set_rules('productName', 'Product Name', 'required');
        $this->form_validation->set_rules('specification', 'Specification', 'required');

        for ($i = 0; $i < count($this->input->post('specification')); $i++) {

            $data = array(
                'product' => $this->input->post('productName'),
                'specification' => $this->input->post('specification')[$i],
            );

            // Loop the insert function
            $this->ProductModel->InsertProductSpecificationData($data);
        }

        $this->session->set_flashdata('message', 'Product specification is successully added');

        redirect(site_url('product/product_overview'));
    }

    // The function to add specification for a new category
    public function single_product_specs($id)
    {
        // Assign page data
        $data['title'] = 'Single Product Specification';
        $data['pageTitle'] = 'Single Product Specification';
        $data['products'] = $this->ProductModel->GetProductById($id);

        // Load page 
        $this->template->load('admin', 'XownCMS/product/single_product_specs', $data);
    }

    // The function to add specification for a new category
    public function single_product_specification()
    {
        // Category Id 
        $productId = $this->input->post('prod_id');

        // Assign page data
        $data['title'] = 'Enter Single Product Specification';
        $data['pageTitle'] = 'Enter Single Product Specification';

        // Number of rows to populate
        $data['n_rows'] = $this->input->post('spec_num');

        // Products to fetch from database
        $data['product'] = $this->ProductModel->GetProductById($productId);

        // Load page 
        $this->template->load('admin', 'XownCMS/product/single_product_specification', $data);
    }

    // View Product Page - A page in the back end to preview a product
    public function product_preview($id)
    {
        // Assign page data
        $data['title'] = 'Product Preview';
        $data['product'] = $this->ProductModel->GetProductById($id);
        $data['specification'] = $this->ProductModel->GetProductSpecificationById($id);
        $data['single_specification'] = $this->ProductModel->GetSingleProductSpecificationById($id);

        $this->template->load('admin', 'XownCMS/product/product_preview', $data);
    }

    // Edit product specificaton
    public function edit_specification($id)
    {
        // Assign page data
        $data['title'] = 'Edit Specification';
        $data['pageTitle'] = 'Edit Specification';

        $data['specData'] = $this->ProductModel->EditProductSpecification($id);

        $this->template->load('admin', 'XownCMS/product/edit_specification', $data);
    }

    // Update product category
    public function update_specification()
    {
        // TODO: Form validation
        $item = $this->input->post('specification');

        $id = $this->input->post('specification_id');

        // Fire the upload action
        $this->ProductModel->UpdateProductSpecification($id, $item);

        $this->session->set_flashdata('message', 'Specification is updated successfully');

        redirect(site_url('product/product_overview'));
    }

    // Delete a product specification
    public function delete_specification($id)
    {
        // Fire the delete action
        $this->ProductModel->DeleteProductSpecification($id);

        $this->session->set_flashdata('message', 'Specification is removed successfully');

        redirect(site_url('product/product_overview'));
    }

    // TODO: Load product specification

    /**
     * Website Queries Classes
     *
     * 
     */


    // Get all products


    // Top eight products in computer and accessories category
    public function top_eight_products()
    {
        $prods = $this->ProductModel->CATopEightProducts();

        $this->load->view('products/all_products');

        var_dump($prods);
    }

    // Load the products page
    public function product_page()
    {
        $this->load->view('products/product_detail');
    }

    public function all_products($id)
    {


        $data['categories'] = $this->ProductModel->get_all_categories();

        if ($id == 0) {
            $data['products'] = $this->ProductModel->get_all_product();
            $data['category'] = false;

        } else {
            $data['category'] = $this->ProductModel->selectcategory($id);

            $data['products'] = $this->ProductModel->get_all_products($id);

        }

        $this->load->view('products/all_products', $data);

    }

    public function products_category()
    {

        $id = $this->input->post('cat_id');
        if ($id == 0) {
            redirect('product/all_products/0');
        }
        $data[' category '] = $this->ProductModel->selectcategory($id);
        $data[' categories '] = $this->ProductModel->get_all_categories();
        $data[' products '] = $this->ProductModel->get_all_products($id);
        redirect('product/all_products/' . $id);


    }
}