<!DOCTYPE html>
<html lang='ru'>
<head>
 
<title><?php 
   
$uri = $_SERVER['QUERY_STRING'];

$parseURI = explode("?", $_SERVER['REQUEST_URI']);

$parseURL = explode("/", $parseURI[0]);

$url1 = $parseURL[1];
$url2 = $parseURL[2];
$url3 = $parseURL[3];
$url4 = $parseURL[4];
   
if ($_SERVER['REQUEST_URI'] != '/'){
	
if ($url3){
	
if ($url3 === 'boards'){

dataProfile($url2, false);

$description = "Коллекции пользователя";

?>
Коллекции пользователя <?php if (resProfileName()){ if (resProfileSoname()){ echo resProfileName() . " " . resProfileSoname(); }} else { echo resProfileUsers(); } ?> | Pinct<?php

}

elseif ($url3 === 'likes'){
	
if (!$url4){

dataProfile($url2, false);

$description = "Лайки пользователя";

?>
То, что понравилось пользователю <?php if (resProfileName()){ if (resProfileSoname()){ echo resProfileName() . " " . resProfileSoname(); }} else { echo resProfileUsers(); } ?> | Pinct<?php

}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}

}

elseif ($url3 === 'followers'){

if (!$url4){
	
dataProfile($url2, false);

$description = "Подписчики пользователя";

?>
Подписчики пользователя <?php if (resProfileName()){ if (resProfileSoname()){ echo resProfileName() . " " . resProfileSoname(); }} else { echo resProfileUsers(); } ?> | Pinct<?php

}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}

}

elseif ($url3 === 'followings'){
	
if (!$url4){

dataProfile($url2, false);

$description = "Подписки пользователя";

?>
Пользователи, за которыми следует <?php if (resProfileName()){ if (resProfileSoname()){ echo resProfileName() . " " . resProfileSoname(); }} else { echo resProfileUsers(); } ?> | Pinct<?php

}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}

}

elseif ($url3 === 'repins'){
	
if (!$url4){

dataProfile($url2, false);

$description = "Репосты пользователя";

?>
Репосты пользователя <?php if (resProfileName()){ if (resProfileSoname()){ echo resProfileName() . " " . resProfileSoname(); }} else { echo resProfileUsers(); } ?> | Pinct<?php

}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}

}

elseif ($url3 === 'account-plus'){

if (!$url4){
	
$description = "Платный аккаунт с дополнительными возможностями";

?>
Аккаунт+ | Pinct<?php

}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}

}

elseif (($url3 !== 'followers') and ($url3 !== 'followings') and ($url3 !== 'likes') and ($url3 !== 'boards') and ($url3 !== 'repins') and ($url3 !== 'account-plus')) {

?>
Страница не найдена / Not Found 404 | Pinct<?php

}

}

else {

if ($url1){

if ($url1 === 'users'){
	
dataProfile($url2, false);
if (resProfileUsers()){
	
$description = "Страница пользователя";
	
?>
Пользователь <?php if (resProfileName()){ if (resProfileSoname()){ echo resProfileName() . " " . resProfileSoname(); }} else { echo resProfileUsers(); } ?> | Pinct<?php
}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}
}

elseif ($url1 === 'pin') {
	
if (!$url3){

dataViewPin($url2, false);
if (resViewPinId()){
	
$description = "Идея - " . resViewPinName();
	
?>
<?php echo resViewPinName(); ?> | Pinct<?php
}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}
}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}
}

elseif ($url1 === 'board') {
	
if (!$url3){

dataMyBoards($url2, false);
if (resMyBoardsId()){
	
$description = "Список коллкций пользователя " . resMyBoardsUsers(0);
	
?>
<?php echo resMyBoardsName(0); ?> - Коллекция пользователя <?php echo resMyBoardsUsers(0); ?> | Pinct<?php
}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}
}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}
}

elseif ($url1 === 'settings'){

if (!$url2){
	
$description = "Настройки пользователя, уведомления, приватность, загрузка аватарки.";

?>
Настройки | Pinct<?php

}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}
}

elseif ($url1 === 'feed'){
	
if (!$url2){
	
$description = "Сайт с классными идеями и коллекциями интерьера, кулинарных шедевров и рецептов, инфографики, лайфхаков, модных трендов, селфи знаменитостей, путешествий, юмора, ярких событий, архитектуры, технологий и т.д.";

?>
Pinct | Коллекции и идеи со всего мира<?php

}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php

}

}

elseif ($url1 === 'category'){
	
if (!$url3){

dataCategory("$url2", false);
if (resCategoryId()){
	
$description = "Идеи в категории " . resCategoryName();
	
?>
<?php echo resCategoryName(); ?> | Pinct<?php
}

else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}

}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}
}

elseif ($url1 === 'tags'){
	
if (!$url3){

dataGetTags($url2, false);
if (resGetTagsId(0)){
	
$description = "Идеи по тегу " . resGetTagsName(0);
	
?>
Хеш-тэг #<?php echo resGetTagsName(0); ?> | Pinct<?php
}

else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}

}
else {
	
$description = "Эта страница не существует или была удалена.";
	
?>
Страница не найдена / Not Found 404 | Pinct<?php
}
}

elseif (($url1 !== 'users') and ($url1 !== 'settings') and ($url1 !== 'category') and ($url1 !== 'pin') and ($url1 !== 'tags') and ($url1 !== 'logout') and ($url1 !== 'feed') and ($url1 !== 'board')) {

$description = "Эта страница не существует или была удалена.";

?>
Страница не найдена / Not Found 404 | Pinct<?php

}

}
}
}

else {
	
$description = "Сайт с классными идеями и коллекциями интерьера, кулинарных шедевров и рецептов, инфографики, лайфхаков, модных трендов, селфи знаменитостей, путешествий, юмора, ярких событий, архитектуры, технологий и т.д.";
	
?>
Pinct | Коллекции и идеи со всего мира<?php
	}
?></title>
   
   <meta charset='utf-8'>
   
   <meta name="application-name" content="Pinct">
   <meta name="description" content="<?php echo $description; ?>">
   
   <link rel="icon" href="http://pinct.ru/img/favicon.ico" type="image/x-icon" />

   <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <link href='http://pinct.ru/newstyle.css' rel='stylesheet'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type='text/javascript' src='http://pinct.ru/js/easing.js'></script>
<script type='text/javascript' src='http://pinct.ru/infinity/jquery.masonry.min.js'></script>
<script type='text/javascript' src='http://pinct.ru/infinity/jquery.infinitescroll.js'></script>
<script type='text/javascript' src='http://pinct.ru/js/pinct1-1.js'></script>
<script type='text/javascript' src='http://pinct.ru/js/pinct2-1.js'></script>

 </head>

<body class='allwidth' id='allbody' onload='loadStart(), start(), loadDark()'>

<div align='center' class='loading-box'>
<div align='center' class='loading-icon'>
<img class='loading-icon' src='http://pinct.ru/img/logo-loading.gif' align='bottom' width='212'/>
</div>
</div>


 
<div id='load-view'></div>

<div id='re-img888' class='box-re'>

<div align='center' class='boxed-repin' id='photo-repin'>

aaaaaaaaacefwre

</div>
  
</div>
 
<nav id='response-nav' class='navmenu'>
 
<a href='' return='false'><div id='response-show' class='navmenushow'>
&nbsp;&nbsp;

 <div id='tooltip-menu' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-left-top.png' align='left' width='17'/>раскрыть
</div>

</div>

<div id='response-show2' class='navmenushow2'>
&nbsp;&nbsp;

 <div id='tooltip-menu' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-left-top.png' align='left' width='17'/>свернуть
</div>

</div></a>

<a href='#' return='false'><div id='response-cat' class='navmenucat'>
 <i>&nbsp;&nbsp;</i>
 
 
 
 
<?php dataAllCategory(false); ?>
 
<div id='modal-cat' class='modalmenu'>
 <img src='http://pinct.ru/img/tik-left.png' align='left' width='25'/>
 
 
 
<div class='leftmodalmenu'>
 
 <ul>
 
 <?php 
 
$l=0;
for($l=0; $l<=17; $l++) { 
if (resAllCategoryName($l)) {
?>
 
 <a class='account' href='http://pinct.ru/category/<?php echo resAllCategoryUrl($l); ?>' 

 <?php  if ($l == 0) { 
 echo "class='first-el'"; 
  }
  if ($l == 17) { 
echo "class='last-el'"; 
 } ?>

 return='false'><li>
<?php echo resAllCategoryName($l); ?>
 </li></a>

 <?php } } ?>
 

 
 </ul>
 
 </div>
 
 <div class='centermodalmenu'>
 
 <ul>
 
 <?php 
 
$m=0;
for($m=18; $m<=35; $m++) { 
if (resAllCategoryName($m)) {
?>
 
 <a class='account' href='http://pinct.ru/category/<?php echo resAllCategoryUrl($m); ?>' 

 <?php  if ($m == 18) { 
 echo "class='first-el'"; 
  }
  if ($m == 35) { 
echo "class='last-el'"; 
 } ?>

 return='false'><li>
<?php echo resAllCategoryName($m); ?>
 </li></a>

 <?php } } ?>

 </ul>
 
 </div>
 
 <div class='rightmodalmenu'>
 
 <ul>      

 <?php 
 
$n=0;
for($n=36; $n<=rowsAllCategory(); $n++) { 
if (resAllCategoryName($n)) {
?>
 
 <a class='account' href='http://pinct.ru/category/<?php echo resAllCategoryUrl($n); ?>' 

 <?php  if ($n == 36) { 
 echo "class='first-el'"; 
  }
  if ($n == rowsAllCategory()) { 
echo "class='last-el'"; 
 } ?>

 return='false'><li>
<?php echo resAllCategoryName($n); ?>
 </li></a>

 <?php } } ?>
 
 </ul>
 
 </div>
 
 
 
 
 
 
 
 
 
</div>
 
 
 
 
 <div id='tooltip-menu' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-left.png' align='left' width='17'/>категории
</div>
 
</div></a>

<a href='#' return='false'><div id='response-topp' class='navmenutopp'>
 &nbsp;&nbsp;
 
   <div id='tooltip-menu2' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-left.png' align='left' width='17'/>популярное
</div>
 
</div></a>
 
<a href='#' return='false'><div id='response-new' class='navmenunew'>
 &nbsp;&nbsp;

    <div id='tooltip-menu3' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-left.png' align='left' width='17'/>новое
</div>
 
</div></a>
 
<a href='#' return='false'><div id='response-video' class='navmenuvideo'>
 &nbsp;&nbsp;
 
     <div id='tooltip-menu4' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-left.png' align='left' width='17'/>видеоролики
</div>
 
</div></a>

<a href='#' return='false'><div id='response-hash' class='navmenuhash'>
<i>&nbsp;&nbsp;</i>
 
 
 <div id='modal-hash' class='modalhash'>
<img src='http://pinct.ru/img/tik-left.png' align='left' width='25'/>
 
 
 
 <div class='leftmodalhash'>
 
 
 <ul>
 <a href='#' class='first-el' return='false'><li>
30&nbsp;секунд&nbsp;до&nbsp;Марса
 </li></a>
 <a href='#' return='false'><li>
Воландеморт
 </li></a>
  <a href='#' return='false'><li>
Гарри&nbsp;Поттер
 </li></a>
  <a href='#' return='false'><li>
Джек&nbsp;Воробей
 </li></a>
  <a href='#' return='false'><li>
Котэ
 </li></a>
  <a href='#' return='false'><li>
Кларк&nbsp;Кент
 </li></a>
  <a href='#' class='last-el' return='false'><li>
Гостиная
 </li></a>
 </ul>
 
 
 
 
 
 
 </div>
 
 
 
 
</div>
 
 
      <div id='tooltip-menu5' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-left.png' align='left' width='17'/>#теги
</div>
 
</div></a>

<a href='#' return='false'><div id='response-part' class='navmenupart'>
<i>&nbsp;</i>
 
 <div id='modal-part' class='modalpart'>
<img src='http://pinct.ru/img/tik-left.png' align='left' width='25'/>
 
 
 
 <div class='leftmodalpart'>
 
 
 <ul>
 <a href='#' class='first-el' return='false'><li>
Как&nbsp;стать&nbsp;партнёром?
 </li></a>
 <a href='#' return='false'><li>
Как&nbsp;это&nbsp;работает?
 </li></a>
  <a href='#' class='last-el' return='false'><li>
Как&nbsp;вывести&nbsp;средства?
 </li></a>
 </ul>
 
 
 </div>
 
</div>
 
 
       <div id='tooltip-menu6' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-left.png' align='left' width='17'/>заработать!
</div>
 
</div></a>
 
<a href='#' return='false'><div id='response-about' class='navmenupart'>
<i>&nbsp;&nbsp;</i>
 
 <div id='modal-about' class='modalabout'>
<img src='http://pinct.ru/img/tik-left.png' align='left' width='25'/>
 
 
 
 <div class='leftmodalabout'>
 
 
 <ul>
 <a href='#' class='first-el' return='false'><li>
Политика&nbsp;приватности
 </li></a>
 <a href='#' return='false'><li>
Миссия&nbsp;проекта
 </li></a>
  <a href='#' class='last-el' return='false'><li>
Контактные&nbsp;данные
 </li></a>
 </ul>
 
 
 
 
 
 
 </div>
 
 
 
 
</div>


 
        <div id='tooltip-menu7' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-left.png' align='left' width='17'/>о&nbsp;сайте
</div>
 
</div></a>

<a href='#' return='false'><div id='response-help' class='navmenuhelp'>
<i>&nbsp;&nbsp;</i>
 
 <div id='modal-help' class='modalhelp'>
<img src='http://pinct.ru/img/tik-left.png' align='left' width='25'/>
 
 
 
 <div class='leftmodalhelp'>
 
 
 <ul>
 <a href='#' class='first-el' return='false'><li>
Как&nbsp;зарегистрироваться?
 </li></a>
 <a href='#' return='false'><li>
Как&nbsp;стать&nbsp;партнёром?
 </li></a>
  <a href='#' return='false'><li>
Как&nbsp;оплатить&nbsp;аккаунт+?
 </li></a>
 </ul>
 
 
 
 
 
 
 </div>
 
 
 
 
</div>
 
         <div id='tooltip-menu8' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-left.png' align='left' width='17'/>помощь
</div>
 
</div></a>
 
 
 
 
 
 
 
</nav>
 
<div class='loadbox'>

<div class='loadbar'></div>
 
</div>
 
<header class='top-menu top-defaul' id='menutop'>

<div id='top-left' class='menuleft'>

<div id='boxed-menu' class='boxmenu'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div id='tooltip-menu11' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>открыть&nbsp;меню
</div>

</div>

<div id='boxed-menu2' class='boxmenu2'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div id='tooltip-menu12' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>скрыть&nbsp;меню
</div>

</div>


  
  <div id='top-form' class='searchform'>
  
<div class='smart-search'></div>
  
  <form name='form-search' id='search' action='cat.php'>
  
  <input type='text' name='search' id='search' placeholder='Поиск по Pinct.ru'>
  
  <input type='image' name='image-search' id='image-search' src='http://pinct.ru/img/main-search.png'>
  
  </form>
  </div>
  
</div>

<a href='http://pinct.ru/' class='account' return='false'><div id='top-logo' class='logo'>
<img class='show' src='http://pinct.ru/img/logo.png' width='85' height='40' alt='Pinct'/>
<img class='hide' src='http://pinct.ru/img/logo5.png' width='85' height='40' alt='Pinct'/>
<div id='tooltip-menu14' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>на&nbsp;главную
</div>
</div></a>

<div id='box-right' class='allright'>










<div id='right-right' class='menuright2'>




<a href='' return='false'><div id='top-plus' class='pplus'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div id='top-plus-nav' class='topplusmenu'>
<img src='http://pinct.ru/img/tik-top-blue.png' align='center' width='20'/>загрузить

<div id='top-plus-text'>

<ul>
 <a href='#' class='account' return='false'><li>
Из&nbsp;интернета
 </li></a>
 <a href='#' class='account' return='false'><li>
С&nbsp;компьютера
 </li></a>
  <a href='#' class='account last-el' return='false'><li>
Коллекция
 </li></a>
 </ul>

</div>


</div>

<div id='tooltip-menu15' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>добавить
</div>

</div></a>

<a href='' return='false'><div id='plus-user' class='userplus'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<div id='plus-nav' class='plusmenu'>
<img src='http://pinct.ru/img/tik-top-blue.png' align='center' width='20'/>пользователи

<div id='plus-text'>

<ul>
 <a href='#' class='account' return='false'><li>
Пользователь&nbsp;#1
 </li></a>
 <a href='#' class='account' return='false'><li>
Пользователь&nbsp;#2
 </li></a>
  <a href='#' class='account last-el' return='false'><li>
Пользователь&nbsp;#3
 </li></a>
 </ul>

</div>


</div>






<div id='tooltip-menu16' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>добавить&nbsp;пользователей
</div>

</div></a>

<a href='' return='false'><div id='top-messages' class='messages'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<div id='natif-nav' class='natifmenu'>
<img src='http://pinct.ru/img/tik-top-blue.png' align='center' width='20'/>уведомления

<div id='natif-text'>

<ul>
 <a href='#' class='account' return='false'><li>
Уведомление&nbsp;#1
 </li></a>
 <a href='#' class='account' return='false'><li>
Уведомление&nbsp;#2
 </li></a>
  <a href='#' class='account last-el' return='false'><li>
Уведомление&nbsp;#3
 </li></a>
 </ul>

</div>

</div>

<div id='tooltip-menu17' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>уведомления
</div>

</div></a>








<div id='top-account' class='account'>
<img class='img-nav' src='http://pinct.ru/img/100.jpg' align='left' width='44' alt='user'/>
<img class='tr-nav' src='http://pinct.ru/img/tr-down.png' align='right' width='10'/>
<img class='tr-nav2' src='http://pinct.ru/img/tr-down2.png' align='right' width='10'/>

<div id='account-nav' class='account-menu3'>
<img src='http://pinct.ru/img/tik-top-blue.png' width='20'/>профиль

<div id='account-text'>

<ul>
 <a href='http://pinct.ru/users/scanderberg' class='account' return='false'><li>
Мои&nbsp;посты
 </li></a>
 <a href='http://pinct.ru/users/scanderberg/boards' class='account' return='false'><li>
Мои&nbsp;доски
 </li></a>
 <a href='http://pinct.ru/users/scanderberg/likes' class='account' return='false'><li>
Мои&nbsp;лайки
 </li></a>
 <a href='http://pinct.ru/users/scanderberg/followers' class='account' return='false'><li>
Подписчики
 </li></a>
 <a href='http://pinct.ru/users/scanderberg/followings' class='account' return='false'><li>
Последователи
 </li></a>
 <a href='http://pinct.ru/users/scanderberg/account-plus' class='account' return='false'><li>
Аккаунт+
 </li></a>
 <a href='http://pinct.ru/settings' class='account' return='false'><li>
Настройки
 </li></a>
  <a href='http://pinct.ru/logout' class='logout last-el' return='false'><li>
Выйти
 </li></a>
 </ul>

</div>


</div>

<div id='tooltip-menu17' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>профиль
</div>



</div>

</div>

</div>


</header>
