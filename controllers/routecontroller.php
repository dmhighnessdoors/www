<?php

    $HOME_URL = '/projects/hd/';    //On Fasils machine
    //$HOME_URL = '/hd/';           //On Farhas machine
    //$HOME_URL = '/demo/';         //Demo on PRD
    //$HOME_URL = '/';              //PRD

    $PRODUCT_URL = 'product/model/';

    //load the base json files
    function loadBaseFiles(){
        global $categories, $products;

        $categories = json_decode(file_get_contents("data/categories.json"), true);
        $products = json_decode(file_get_contents("data/products.json"), true);
    }
    

    function routePrimaryContent(){
        global $HOME_URL,$PRODUCT_URL, $isProduct, $product;
        $currentUrl = $_SERVER['REQUEST_URI'];

        if($currentUrl == $HOME_URL){
            include 'partials/_home.php';
        }
        else if(strpos($currentUrl, $PRODUCT_URL) !== false){
            //Its a product url
            $isProduct = true;
            //$product = json_decode(file_get_contents("data/products.json"), true);
            include 'partials/_product.php';
        }else {
            echo '<h1>You are on some other page</h1>';
        }
    }

    function getFullUrl($id){
        global $HOME_URL;
        return $HOME_URL . $id;
    }


    loadBaseFiles();
?>