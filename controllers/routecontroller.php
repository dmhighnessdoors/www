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
        global $HOME_URL,$PRODUCT_URL, $isProduct, $productPage, $partialBody;
        $currentUrl = $_SERVER['REQUEST_URI'];

        if($currentUrl == $HOME_URL){
            $partialBody = 'partials/_home.php';
        }
        else if(strpos($currentUrl, $PRODUCT_URL) !== false){
            //Its a product url
            $isProduct = true;
            $lastSlashIndex = strripos($currentUrl, '/');
            $productId = substr($currentUrl, $lastSlashIndex+1, strlen($currentUrl));
            $file = "data/product/".$productId.".json";
            if(file_exists($file)){
                $productPage = json_decode(file_get_contents("data/product/".$productId.".json"), true);
                $partialBody = 'partials/_product.php';
            } else {
                //Throw a 404 error
            }
            
            
        }else {
            echo '<h1>You are on some other page</h1>';
        }
    }

    function getFullUrl($id){
        global $HOME_URL;
        return $HOME_URL . $id;
    }


    loadBaseFiles();
    routePrimaryContent();
?>