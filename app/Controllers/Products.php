<?php

namespace App\Controllers;

class Products extends BaseController {
    public function index() {
        $productsModel = model('Products_model');
        $data['products'] = $productsModel->findAll();
        $data['title'] = "List of Products";

        return view('include/header', $data)
            .view('include\navbar')
            . view('products_view', $data)
            . view('include/footer');
    }

    public function add() {
        if ($this->request->is('POST')) {
            $productsModel = model('Products_model');
    
            $data = $this->request->getPost([
                'barcode',
                'productname',
                'description',
                'unit',
                'purchaseprice',
                'sellingprice',
                'wholesaleprice',
                'deliverydate',
                'supplier',
            ]);
    
            $productsModel->insert($data);
   
            return redirect()->to('products');
        }
    
        $data['title'] = "Add New Product";
    
        return view('include/header', $data)
            . view('include/navbar')
            . view('add_view', $data)
            . view('include/footer');
    }
    

    public function view($id = 0) {
        $productsModel = model('Products_model');
        $data['product'] = $productsModel->find($id);
        $data['title'] = "View Product";

        return view('include/header', $data)
            .view('include\navbar')
            . view('single_product_view', $data)
            . view('include/footer');
    }

    public function edit($id = 0) {
        $productsModel = model('Products_model');

        if($this->request->is('POST')){
            // Retrieve data from form
            $updatedData = $this->request->getPost([
                'barcode',
                'productname',
                'description',
                'unit',
                'purchaseprice',
                'sellingprice',
                'wholesaleprice',
                'deliverydate',
                'supplier',
            ]);

            $productsModel->update($id, $updatedData);
            return redirect()->to('products');
        }

        $data['product'] = $productsModel->find($id);
        $data['title'] = "Edit Product";

        return view('include/header', $data)
            . view('include/navbar')
            . view('edit_view', $data)
            . view('include/footer');
    }

    public function delete($id = 0) {
        $productsModel = model('Products_model');
        $productsModel->delete($id);
        return redirect()->to('products');
    }
}
