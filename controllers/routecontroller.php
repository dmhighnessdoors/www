<?php

    $HOME_URL = '/projects/hd/';    //On Fasils machine
    //$HOME_URL = '/hd/';           //On Farhas machine
    //$HOME_URL = '/demo/';         //Demo on PRD
    //$HOME_URL = '/';              //PRD

    $PRODUCT_URL = 'product/model/';
    $CATEGORY_URL = 'category/';

    //load the base json files
    function loadBaseFiles(){
        global $categories, $products;

        $categories = json_decode(file_get_contents("data/categories.json"), true);
        $products = json_decode(file_get_contents("data/products.json"), true);
    }
    

    function routePrimaryContent(){
        global $HOME_URL,$PRODUCT_URL, $isProduct, $productPage, $partialBody, $isCategory, $categoryPage, $CATEGORY_URL, $categories;
        global $isHome, $isAboutUs, $isContactUs, $page, $isPage;
        global $productId;
        $currentUrl = $_SERVER['REQUEST_URI'];

        if($currentUrl == $HOME_URL){
            $partialBody = 'template/_home.php';
            $isHome = true;
        }
        else if(strpos($currentUrl, $PRODUCT_URL) !== false){
            //Its a product url
            $isProduct = true;
            $lastSlashIndex = strripos($currentUrl, '/');
            $productId = substr($currentUrl, $lastSlashIndex+1, strlen($currentUrl));
            $file = "data/product/".$productId.".json";
            if(file_exists($file)){
                $productPage = json_decode(file_get_contents($file), true);
                $partialBody = 'template/_product.php';
            } else {
                //Throw a 404 error
            }
            
            
        }
        else if(strpos($currentUrl, $CATEGORY_URL) !== false){
            //Its a category url
            $lastSlashIndex = strripos($currentUrl, '/');
            $categoryId = substr($currentUrl, $lastSlashIndex+1, strlen($currentUrl));
            
            foreach($categories as $category){
                if($category["id"] == 'category/'.$categoryId){
                    $categoryPage = $category;
                    $isCategory = true;
                    $partialBody = 'template/_category.php';
                    break;
                }
            }

            if(!$isCategory){
                //Throw 404 error
            }
                                    
            
        }else {
            $urlParts =  explode($HOME_URL, $currentUrl);
            unset($urlParts[0]);
            $pageId = join('/', $urlParts);
            $file = "data/pages/".$pageId.".json";
            if(file_exists($file)){
                $page = json_decode(file_get_contents($file), true);
                $partialBody = 'template/_page.php';
                $isPage = true;
            } else {
                //Throw a 404 error
            }
        }
    }

    function getFullUrl($id){
        global $HOME_URL;
        return $HOME_URL . $id;
    }


    loadBaseFiles();
    routePrimaryContent();
?>