<?php
class Products extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ProductsModel');

        // load form and url helpers
        $this->load->helper(array('form', 'url'));

        // load form_validation library
        $this->load->library('form_validation');
    }

    function index()
    {
        $data = $this->ProductsModel->productsList();
        $this->load->view('home', ['data' => $data]);
    }

    function create()
    {
        $this->load->view('create');
    }
    function save()
    {
        $this->form_validation->set_rules('name', 'Please enter name', 'required');
        $this->form_validation->set_rules('type', 'Please enter type', 'required');
        $this->form_validation->set_rules('options_type', 'Please enter option type', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('create');
        } else {
            $status = $this->ProductsModel->saveProduct();
            return redirect('/', 'refresh');
            if ($status) {
                return redirect('/', 'refresh');
            } else {
                return redirect('products/edit/' . $id, 'refresh');
            }
        }
    }

    function edit($id)
    {
        $data = $this->ProductsModel->productsInfo($id);
        $this->load->view('edit', ['data' => $data]);
    }

    function update($id)
    {
        $status = $this->ProductsModel->updateProduct($id);
        if ($status) {
            return redirect('/', 'refresh');
        } else {
            return redirect('products/edit/' . $id, 'refresh');
        }
    }

    function delete($id)
    {
        $status = $this->ProductsModel->deleteProduct($id);
        if ($status) {
            return redirect('/', 'refresh');
        } 
    }

    function inactive()
    {
        $data = $this->ProductsModel->productsListInactive();
        $this->load->view('inactive', ['data' => $data]);
    }

    function active($id)
    {
        $status = $this->ProductsModel->activeProduct($id);
        if ($status) {
            return redirect('/', 'refresh');
        } 
    }
}
