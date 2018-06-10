<!-- CSS -->
<link rel='stylesheet' href='../css/global.css'>
    <link rel='stylesheet' href='../css/structure.css'>
    <link rel='stylesheet' id='style-static' href='../css/be_style.css'>
    <link rel='stylesheet' href='../css/custom.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="../plugins/rs-plugin/css/settings.css">



<!-- Include external CSS. -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />


<?php
    $pageId = $_GET['page-id'];
    $file = "../data/pages/".$pageId.".json";

    if(file_exists($file)){
        echo '<h1>Editing an existing file '.$pageId.'</h1>';
        $page = json_decode(file_get_contents($file), true);
    } else {
        echo '<h1>Creating a new page '.$pageId.'</h1>';
    }
?>


<form id="pageform" method="post" action="__pageupdate.php">
    <h4>Update contents for page <?php echo $pageId; ?></h4>
    <p>
        <span>
            <input type="text" name="title" id="title" value="<?php echo $page['title'] ?>" aria-required="true" aria-invalid="false" placeholder="Enter page title">
        </span>
        <br/>
        <span> 								
            <textarea name="body" cols="40" id="body" rows="15" aria-required="true" aria-invalid="false" placeholder="Enter body html"><?php echo $page['body'] ?></textarea>
        </span>
        <br/>

        <input type="hidden" name="pageId" value="<?php echo $pageId; ?>" />


        <input type="submit" value="UpdatePage" id="submitbutton" />
    </p>
</form>


<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/js/froala_editor.pkgd.min.js"></script>
 
    <!-- Initialize the editor. -->
    <script> $(function() { $('textarea').froalaEditor() }); </script>