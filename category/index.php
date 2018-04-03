<?php

require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';

$content = "Hello! " . $_SERVER['REQUEST_URI'];

$uri = $_SERVER['QUERY_STRING'];

$parseURI = explode("?", $_SERVER['REQUEST_URI']);
$parseURI = explode("?", $_SERVER['REQUEST_URI']);

$parseURL = explode("/", $parseURI[0]);

$url1 = $parseURL[1];
$url2 = $parseURL[2];
$url3 = $parseURL[3];
$url4 = $parseURL[4];

// если аякс 
if ($_GET['ajax']){
	
if ($_SERVER['REQUEST_URI'] !== '/'){
	
if ($url3 === 'boards'){
	
require_once '/var/www/www-root/data/www/pinct.ru/ajax-boards.php';

}

elseif ($url3 === 'likes'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-likes.php';

}

elseif ($url3 === 'followers'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-followers.php';

}

elseif ($url3 === 'followings'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-followings.php';

}

elseif ($url3 === 'repins'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-repins.php';

}

elseif ($url3 === 'account-plus'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-account-plus.php';

}

else {

if ($url1 === 'users'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-users.php';

}

elseif ($url1 === 'settings'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-settings.php';

}

elseif ($url1 === 'category'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-category.php';

}

elseif ($url1 === 'tags'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-tags.php';

}
}
}	

if (!$url1){
    require_once '/var/www/www-root/data/www/pinct.ru/ajax-content.php';
	}

}

elseif ($_GET['pin-view']){
if ($url1 === 'pin') {

require_once '/var/www/www-root/data/www/pinct.ru/ajax-pin.php';

}
}

else {
// и не главная
if ($_SERVER['REQUEST_URI'] !== '/'){

if ($url3){

if ($url3 === 'boards'){
	
if (!$url4){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/boards.php';

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}

elseif ($url3 === 'likes'){
	
if (!$url4){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/likes.php';

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}

elseif ($url3 === 'followers'){
	
if (!$url4){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/followers.php';

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}
}

elseif ($url3 === 'followings'){
	
if (!$url4){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/followings.php';

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}

elseif ($url3 === 'repins'){
	
if (!$url4){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/repins.php';

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}

elseif ($url3 === 'account-plus'){
	
if (!$url4){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/account-plus.php';

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}

elseif (($url3 !== 'followers') and ($url3 !== 'followings') and ($url3 !== 'likes') and ($url3 !== 'boards') and ($url3 !== 'repins') and ($url3 !== 'account-plus')) {

require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}

else {
	
if ($url1){

if ($url1 === 'users'){

dataProfile($url2, false);
if (resProfileUsers()){

require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/users.php';

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}

elseif ($url1 === 'pin') {
	
if (!$url2){

dataViewPin($url2, false);
if (resViewPinId()){

require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/pin.php';

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}

elseif ($url1 === 'settings'){
	
if (!$url2){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/settings.php';

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}

elseif ($url1 === 'logout'){
	
if (!$url3){

require_once '/var/www/www-root/data/www/pinct.ru/logout.php';

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}

elseif ($url1 === 'category'){
	
if (!$url3){
	
dataCategory("$url2", false);
if (resCategoryId()){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/category.php';

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}

elseif ($url1 === 'tags'){
	
if (!$url3){
	
dataGetTags($url2, false);
if (resGetTagsId(0)){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/tags.php';

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}
else {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/404.php';

}

}
}
}
}

else {
    require_once 'content.php';
	}
}




?>