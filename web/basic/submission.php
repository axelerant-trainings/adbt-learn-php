<?php
echo "Hello from " . __FILE__ . "<br /><pre>";

// echo 'Printing $_GET - Everything will be available over query prameter as well.<br />';
// var_dump($_GET);


// echo ' <br /><br />Printing $_POST <br />';
// var_dump($_POST);


echo ' <br /><br />Printing $_FILES <br />';
var_dump($_FILES);

$uploads_dir = __DIR__ . '/uploads';

$tmp_name = $_FILES["myfile"]["tmp_name"];
// basename() may prevent filesystem traversal attacks;
// further validation/sanitation of the filename may be appropriate
$name = basename($_FILES["myfile"]["name"]);
move_uploaded_file($tmp_name, "$uploads_dir/$name");
