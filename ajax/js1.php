<?php

error_reporting(0);

require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';

$uri = $_SERVER['QUERY_STRING'];

$parseURI = explode("?", $_SERVER['REQUEST_URI']);

$parseURL = explode("/", $parseURI[0]);

$url1 = $parseURL[1];
$url2 = $parseURL[2];
$url3 = $parseURL[3];
$url4 = $parseURL[4];
$url5 = $parseURL[5];

if ($_GET['scroll']) {

if ($url3) {
if ($url4) {
$data3 = $url3;
$data4 = $url4;
}
}
else {
$data3 = "";
$data4 = "";
}

$getScr = $_GET['scroll'];
$getScroll = $getScr - 1;
$step = $getScroll * 10;
$step2 = $step + 9;

if ($url5 == 'likes'){

dataLikes("$url4", false);

for($um=$step; $um<=$step2; $um++) { 
dataPin("pin", "ids", resLikesPinId($um), "", false); 
if (resLikesPinId($um)) {

myPinLikes2(resPinId(0), resPinThumb(0), $_GET['scroll'], resPinRepins(0), resPinLikes(0), resPinComments(0), resPinCommentsId(0), resPinAutor(0), resPinAutorThumb(0));

}
}

}

else {

dataPin("pin", $data3, $data4, "", false);

?>

<?php 


for($ux=$step; $ux<=$step2; $ux++) { 
if (resPinName($ux)) {

myPin2(resPinId($ux), resPinThumb($ux), $_GET['scroll'], resPinRepins($ux), resPinLikes($ux), resPinComments($ux), resPinCommentsId($ux), resPinAutor($ux), resPinAutorThumb($ux));

}
} 

}

}

?>
  
