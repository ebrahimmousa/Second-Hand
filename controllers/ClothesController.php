<?php

require_once 'models/Clothes.php';

class ClothesController {
    

    public function listAllGarments(){
        $model = new Clothes();
        $this->garments = $model->getAllGarments();
        include('views/listGarments.php'); 
    }


    public function index() {
        $clothes = Clothes::getAll();
        require 'views/clothes/index.php';
    }

       // Handle form submission to add new clothes
    public function insertClothes() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $sellerId = $_POST['seller_id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            
            $newclothes = new Clothes();
            $newclothes->setSellerId($sellerId);
            $newclothes->setName($name);
            $newclothes->setPrice($price);
            $newclothes->setDescription($description);

            $newclothes->save();

        }

    }

    public function setassold($id) {
        $clothes = new Clothes();
        $clothes->markAsSold($id);
    }
}
