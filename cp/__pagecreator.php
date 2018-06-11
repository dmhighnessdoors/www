<!-- CSS -->
<link rel='stylesheet' href='../css/global.css'>
    <link rel='stylesheet' href='../css/structure.css'>
    <link rel='stylesheet' id='style-static' href='../css/be_style.css'>
    <link rel='stylesheet' href='../css/custom.css'>
    <script src="../js/jquery-2.1.4.min.js"></script>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="../plugins/rs-plugin/css/settings.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js"></script>


<style type="text/css" media="screen">
    #editor { 
        width:100%;
        height:500px;
    }
</style>




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

        <div id="editor">

        </div>

        <input type="hidden" name="pageId" value="<?php echo $pageId; ?>" />


        <input type="submit" value="UpdatePage" id="submitbutton" />
    </p>
</form>


<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/html");
    editor.setValue(<?php echo json_encode($page['body']) ?>);

    editor.getSession().on("change", function () {
        $('#body').val(editor.getSession().getValue());
    });
</script>