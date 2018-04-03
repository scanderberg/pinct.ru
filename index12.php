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
	
if ($_SERVER['REQUEST_URI'] != '/'){
	
if ($url3 == 'boards'){
	
require_once '/var/www/www-root/data/www/pinct.ru/ajax-boards.php';

}

elseif ($url3 == 'likes'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-likes.php';

}

elseif ($url3 == 'followers'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-followers.php';

}

elseif ($url3 == 'followings'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-followings.php';

}

elseif ($url3 == 'repins'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-repins.php';

}

elseif ($url3 == 'account-plus'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-account-plus.php';

}

else {

if ($url1 == 'users'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-users.php';

}

elseif ($url1 == 'settings'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-settings.php';

}

elseif ($url1 == 'category'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-category.php';

}

elseif ($url1 == 'tags'){

require_once '/var/www/www-root/data/www/pinct.ru/ajax-tags.php';

}
}
}	

if (!$url1){
    require_once '/var/www/www-root/data/www/pinct.ru/ajax-content.php';
	}

}

elseif ($_GET['pin-view']){
if ($url1 == 'pin') {

require_once '/var/www/www-root/data/www/pinct.ru/ajax-pin.php';

}
}

else {
// и не главная
if ($_SERVER['REQUEST_URI'] != '/'){
	
if ($url3 == 'boards'){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/boards.php';

}

elseif ($url3 == 'likes'){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/likes.php';

}

elseif ($url3 == 'followers'){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/followers.php';

}

elseif ($url3 == 'followings'){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/followings.php';

}

elseif ($url3 == 'repins'){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/repins.php';

}

elseif ($url3 == 'account-plus'){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/account-plus.php';

}

else {

if ($url1 == 'users'){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/users.php';

}

elseif ($url1 == 'pin') {
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/pin.php';

}

elseif ($url1 == 'settings'){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/settings.php';

}

elseif ($url1 == 'category'){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/category.php';

}

elseif ($url1 == 'tags'){
	
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
require_once '/var/www/www-root/data/www/pinct.ru/top.php';
require_once '/var/www/www-root/data/www/pinct.ru/chat.php';

require_once '/var/www/www-root/data/www/pinct.ru/tags.php';

}
}
}

else {
    require_once 'content.php';
	}
}




?>