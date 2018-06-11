<?php
    $page_title = ' | Highness doors';
    $server_url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'];
    $page_url =  $server_url . $_SERVER['REQUEST_URI'];
    $image_url = $server_url.$HOME_URL.'images/hd/logo.jpg';

    if($isProduct){
        $page_title = $productPage['name'].$page_title;
        $image_url = $server_url.$HOME_URL.'images/hd/products/'.$productPage['pictures'][0];
    }else if($isCategory){
        $page_title = $categoryPage['name'].$page_title;
        $image_url = $server_url.$HOME_URL.'images/hd/category/'.$categoryPage['pictures'][0];
    }else if($isPage){
        $page_title = $page['title'].$page_title;
        $image_url = $server_url.$HOME_URL.'images/hd/logo.jpg';
    }
?>

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title><?php echo $page_title ?></title>
    <meta name="description" content="HIGHNESS the name of quality is aimed towards designing and manufacturing of highest quality Doors. We can also custom make our products to suit any size and configuration to meet our client requirements.">
    <base href="<?php echo $HOME_URL; ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="always" />
    <meta name="DC.Format" schema="DCterms:IMT" content="text/html" />
    <meta name="DC.Type" content="text/html">
    <meta name="DC.Title" xml:lang="EN" content="Manufacturing FRP Doors and Frames" />
    <meta name="DC.Creator" content="Highness FRP Industries">
    
    <meta name="DC.Publisher" content="Highness FRP Industries">
    <meta name="DC.Date" scheme="ISO8601" content="2017-12-11T04:51:59.025Z">
    <meta name="DC.Description" xml:lang="EN" content="HIGHNESS the name of quality is aimed towards designing and manufacturing of highest quality Doors.We can also custom make our products to suit any size and configuration to meet our client requirements.">
    <meta name="DC.Rights" content="Highness FRP Industries">
    <meta name="DC.Language" content="en-US">

    <meta property="og:title" content="<?php echo $page_title ?>" >
    <meta property="og:type" content="article" >
    
    <meta property="og:url" content="<?php echo $page_url ?>" >
    <meta property="og:image" content="<?php echo $image_url ?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pompiere:400">

    <!-- CSS -->
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/structure.css'>
    <link rel='stylesheet' id='style-static' href='css/be_style.css'>
    <link rel='stylesheet' href='css/custom.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">

    <script src="js/jquery-2.1.4.min.js"></script>

</head>