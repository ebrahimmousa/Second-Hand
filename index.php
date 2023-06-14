<?php
require_once 'config/database.php';
require_once 'controllers/SellerController.php';
require_once 'controllers/ClothesController.php';


$action = $_GET['action'];
$task = $_GET['task'];


switch ($action){
    case 'seller':
        $seller = new SellerController();
        switch ($task){
            case 'listsellers':
                $seller->listAllSellers();
                break;

                case 'addseller':
                    include('views/add_seller.php'); 
                    break;
            
                case 'insertseller':
                    $seller->insertSeller();
                    $seller->listAllSellers();
                    break;

                case 'sellerinfo':
                    $id = $_GET['id'];
                    $seller->displaySellerInfo($id);
                    break;

            default :
                include('views/index.php'); 
                break;
        }
        break;

    case 'garments':
        $clothes = new ClothesController();
        switch ($task){
            case 'listallgarments':
                $clothes->listAllGarments();
                break;

            case 'addclothes':
                include('views/add_clothes.php'); 
                break;

            case 'insertclothes':
                $clothes->insertClothes();
                $clothes->listAllGarments(); 
                break;

            case 'setassold':
                $id = $_GET['id'];
                $clothes->setAsSold($id);
                $clothes->listAllGarments(); 
                break;

            default :
                include('views/index.php'); 
                break;
        }
        break;
    default :
        include('views/index.php'); 
        break;
}