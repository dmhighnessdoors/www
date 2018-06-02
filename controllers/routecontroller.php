<?php

    $HOME_URL = '/projects/hd/';    //On Fasils machine
    //$HOME_URL = '/hd/';           //On Farhas machine
    //$HOME_URL = '/demo/';         //Demo on PRD

    //Load json data
    if(!isset($GLOBALS['categories'])){
        $GLOBALS['categories'] = 'loaded';
        //echo 'Categories loaded';
    } else {
        //echo 'Categories from memory cahce';
    }
    

    function routePrimaryContent(){
        global $HOME_URL;
        if($_SERVER['REQUEST_URI'] == $HOME_URL){
            include 'partials/_home.php';
        } else {
            echo '<h1>You are on some other page</h1>';
        }
    }
?>