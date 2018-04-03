<?php

 error_reporting(0);

$uri = $_SERVER['QUERY_STRING'];

$parseURI = explode("?", $_SERVER['REQUEST_URI']);

$parseURL = explode("/", $parseURI[0]);

$url1 = $parseURL[1];
$url2 = $parseURL[2];
 
if ($url2) {

echo "Привет " . $_SERVER['REQUEST_URI'];

} 

else {

    include_once 'content.php';
	
}

?>






