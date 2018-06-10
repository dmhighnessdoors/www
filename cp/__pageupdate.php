<?php
$title = $_POST['title'];
$body = $_POST['body'];
$pageId = $_POST['pageId'];

$file = "../data/pages/".$pageId.".json";
$content['id'] = $pageId;
$content['title'] = $title;
$content['body'] = $body;

$fp = fopen($file, 'w');
fwrite($fp, json_encode($content));
fclose($fp);

header("Location: __pagecreator.php?page-id=".$pageId);
die();
?>