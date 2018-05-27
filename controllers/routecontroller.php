<?php

    $HOME_URL = '/projects/hd/';
    

    function routePrimaryContent(){
        global $HOME_URL;
        if($_SERVER['REQUEST_URI'] == $HOME_URL){
            include 'partials/_home.php';
        } else {
            echo '<h1>You are on some other page</h1>';
        }
    }
?>