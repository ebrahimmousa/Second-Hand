<?php

require_once 'config/database.php';
require_once 'models/row.php';

class Seller extends Row {
    private $email;
    private $phone;
    private $password;
    private $address;
    private $lastLogIn;
    private $isActive;

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getphone() {
        return $this->phone;
    }

    public function setphone($phone) {
        $this->phone = $phone;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }


    public function save() {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $stmt = $pdo->prepare("INSERT INTO sellers (name, email, password, address, phone) VALUES (:name, :email, :password, :address, :phone)");
        $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
        $stmt->bindParam(':address', $this->address, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $this->phone, PDO::PARAM_INT);

        $stmt->execute();
    }

    public static function getSellers() {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $stmt = $pdo->prepare("SELECT * FROM sellers order by  name ");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getSellerById($id) {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $stmt = $pdo->prepare("SELECT * FROM sellers where id = :id ");
        $stmt->bindParam(':id', $id , PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function getSellerInfo($id) {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $stmt = $pdo->prepare("SELECT * FROM garments where seller_id = :seller_id ");
        $stmt->bindParam(':seller_id', $id , PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
