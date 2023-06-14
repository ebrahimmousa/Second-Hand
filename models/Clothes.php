<?php

require_once 'config/database.php';
require_once 'models/row.php';

class Clothes extends Row {
    private $sellerId;
    private $price;
    private $isSold;
    private $description;

    public function getSellerId() {
        return $this->sellerId;
    }

    public function setSellerId($sellerId) {
        $this->sellerId = $sellerId;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }


    public function getdescription() {
        return $this->description;
    }

    public function setdescription($description) {
        $this->description = $description;
    }

    public function save() {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
         $stmt = $pdo->prepare('INSERT INTO garments (seller_id, name, price, description) VALUES (:seller_id, :name, :price, :description)');
        $stmt->bindParam(':seller_id', $this->sellerId, PDO::PARAM_INT);
        $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindParam(':price', $this->price, PDO::PARAM_INT);
        $stmt->bindParam(':description', $this->description, PDO::PARAM_STR);
        try {
            $stmt->execute();

          }
          
          catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
          }
    }

    public static function getAllGarments() {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $stmt = $pdo->prepare("SELECT * FROM garments");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $stmt = $pdo->prepare("SELECT * FROM clothes WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $result['id'];
        $this->sellerId = $result['seller_id'];
        $this->name = $result['name'];
        $this->price = $result['price'];
        $this->createdAt = $result['created_at'];
  

        return $clothes;
    }

    public function markAsSold($id) {
        
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $stmt = $pdo->prepare("UPDATE garments SET is_sold = 1 WHERE id = :id");
        $stmt->bindParam(':id', $id,  PDO::PARAM_INT);
        $stmt->execute();
    }
}
