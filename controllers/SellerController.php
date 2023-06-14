<?php

require_once 'models/Seller.php';

class SellerController {

    public function test()
    {
        $this->model = new Seller();
        include('views/index.php'); 
    }

    public function listAllSellers() {
        $model = new Seller();
        $this->sellers= $model->getSellers();
        include('views/listSellers.php'); 
    }

    public function displaySellerInfo($id){
        $model = new Seller();
        $this->seller= $model->getSellerById($id);
        $this->sellerInfo= $model->getSellerInfo($id);
        include('views/seller_details.php'); 

    }

         // Handle form submission to add a new seller
    public function insertseller() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            $newseller = new Seller();
            $newseller->setName($name);
            $newseller->setEmail($email);
            $newseller->setPassword($password);
            $newseller->setPhone($phone);
            $newseller->setAddress($address);
            $newseller->save();
        }

    }
}
