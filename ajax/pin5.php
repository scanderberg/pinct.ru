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

if ($_GET['scroll']){

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

$q=0;

if (resLikesPinId($step)){
?>

<div align='center' id='container' class='transitions-enabled clearfix'>

<?php 
}
for($q=$step; $q<=$step2; $q++) {
dataPin("pin", $ids, resLikesPinId($q), "", false); 
if (resLikesPinId($q)) {
?>

<div class='box col3' id='pin<?php echo resPinId($q); ?>' style='visibility: hidden;'>

<div align='center' id='pinned<?php echo resPinId($q); ?>' class='sectionpin'>
<div align='center' id='img<?php echo resPinId($q); ?>' class='imgpin'>

<div align='left'>
<div align='center' id='action<?php echo resPinId($q); ?>' class='actionbar'>

<a href='' return='false'><div align='center' id='thumb<?php echo resPinId($q); ?>' class='thumb-autor'>

<img class='img-nav' src='http://pinct.ru/user/<?php echo resPinAutorThumb($q); ?>' align='left' width='50px'/>

<div id='pin-nav<?php echo resPinId($q); ?>' class='navpin'>
<img src='http://pinct.ru/img/tik-top-pin.png' align='left' width='20'/><?php echo resPinAutor($q); ?>

<div id='pin-nav-text<?php echo resPinId($q); ?>' class='navpintext'>

<ul>
 <a href='http://pinct.ru/users/<?php echo resPinAutor($q); ?>' class='myauthor first-el' return='false'><li>
Посты
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor($q); ?>/boards' return='false' class='myauthor'><li>
Альбомы
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor($q); ?>/likes' return='false'class='myauthor'><li>
Лайки
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor($q); ?>/repins' return='false'class='myauthor'><li>
Репосты
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor($q); ?>/followers' return='false'class='myauthor'><li>
Подписчики
 </li></a>
  <a href='http://pinct.ru/users/<?php echo resPinAutor($q); ?>/followings' class='myauthor last-el' return='false'><li>
Подписки
 </li></a>
 </ul>

</div>

</div>

<div id='tooltip-menu<?php echo resPinId($q); ?>-user' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/><?php echo resPinAutor($q); ?>
</div>

</div></a>

<a href='' return='false'><div align='center' id='repin<?php echo resPinId($q); ?>' class='repin-autor'>

       <div id='tooltip-menu<?php echo resPinId($q); ?>-repin' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>репост
</div>

</div></a>

<a href='' return='false'><div align='center' id='like<?php echo resPinId($q); ?>' class='like-autor'>

<div id='tooltip-menu<?php echo resPinId($q); ?>-like' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>лайк
</div>
</div>
</a>

<a href='' return='false'>
<div align='center' id='unlike<?php echo resPinId($q); ?>' class='unlike-autor'>
<div id='tooltip-menu<?php echo resPinId($q); ?>-unlike' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>убрать&nbsp;лайк
</div>
</div>
</a>

<a href='' return='false'><div align='center' id='comment<?php echo resPinId($q); ?>' class='comment-autor'>

<div id='tooltip-menu<?php echo resPinId($q); ?>-comment' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>написать
</div>

</div></a>

<a href='' return='false'><div align='center' id='dop<?php echo resPinId($q); ?>' class='set-autor'>

<div id='tooltip-menu<?php echo resPinId($q); ?>-set' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>настроить
</div>
</div>
</a>

</div>
</div>

<a href='http://pinct.ru/pin/<?php echo resPinPath($q); ?>' class='pin-view' return='false'><img class='sectionpin' id='img<?php echo resPinId($q); ?>' src='http://pinct.ru/pins/<?php echo resPinThumb($q); ?>' align='bottom' width='200px' height='<?php echo resPinMinheight($q); ?>px' alt='user'/></a>
</div>

<span><?php echo resPinName($q); ?></span>
<br><br>

<?php dataTag(resPinId($q), false); ?>
<?php if ( rowsTags() > 0 ) { ?>
<div align='center' id='tags<?php echo resPinId($q); ?>' class='tagspin'><?php $t=0; for($t=0; $t<=rowsTags(); $t++) { if (resTagName($t)) { ?><a class='tagclick' href='http://pinct.ru/tags/<?php echo resTagPath($t); ?>' return='false'><span>#<?php echo resTagName($t); ?></span></a><?php }} ?></div><?php } ?>

<?php if ( resPinCommentsId($q) > 0 ) { ?>

<?php dataComments(resPinCommentsId($q), false); ?>
<div align='left' id='desqus<?php echo resPinId($q); ?>' class='mini-desqus'>

<?php 
$x=0;
for($x=0; $x<=rowsComments(); $x++) { 
if (resCommentsText($x)) {
?>

<div align='left' id='comment<?php echo resPinId($x); ?>' class='mini-comment'>
<a href='' return='false'><img class='mini-comment<?php echo defineNum($x); ?>' src='http://pinct.ru/user/<?php echo resCommentsThumb($x); ?>' align='<?php echo defineFloat($x); ?>' width='35px'/></a>

<div align='left' class='mini-reply<?php echo defineNum($x); ?>'>
<img class='tik' src='http://pinct.ru/img/tik-comment<?php echo defineNum($x); ?>.png' align='<?php echo defineFloat($x); ?>' width='15px'/>
<b class='mini-user'>
<?php
$i=0;
if (strlen(resCommentsAutor($x)) > 7 ) {
for($i=0; $i<=5; $i++) {
echo resCommentsAutor($x)[$i];
}
echo "..";
}
else {
for($i=0; $i<=7; $i++) {
echo resCommentsAutor($x)[$i];
}
}

?> | <?php echo resCommentsTime($x); ?></b>
<br>
<?php echo resCommentsText($x); ?>
</div>

</div>

<?php 
}
} 
?>

</div>

<?php } ?>

<div align='center' id='send<?php echo resPinId($q); ?>' class='send-comment'>

<form name='send-comment' id='send-comment<?php echo resPinId($q); ?>' method='GET' action='cat.php'>
  
  <textarea name='send-text' id='send<?php echo resPinId($q); ?>' placeholder='Напишите что-нибудь...'></textarea>
  <br><br>
  <input type='button' name='mini-comment' id='mini-comment' class='mycomment' value='комментировать'>
  
  </form>

</div>

<div align='center' id='puzo<?php echo resPinId($q); ?>' class='puzomerki'>
<div align='center' class='small-like' id='small-likes<?php echo resPinId($q); ?>'><?php echo resPinLikes($q); ?></div><div align='center' class='small-repin'><?php echo resPinRepins($q); ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo resPinComments($q); ?>&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>


<?php } } ?>  



<?php 
if (resPinName($step)){
?> 

</div> <!-- #container -->

<?php 
}

}

else {

dataPin("pin", $data3, $data4, "", false);

$q=0;

if (resPinName($step)){
?>

<div align='center' id='container' class='transitions-enabled clearfix'>

<?php 
}
for($q=$step; $q<=$step2; $q++) { 
if (resPinName($q)) {
?>

<div class='box col3' id='pin<?php echo resPinId($q); ?>'>

<div align='center' id='pinned<?php echo resPinId($q); ?>' class='sectionpin'>
<div align='center' id='img<?php echo resPinId($q); ?>' class='imgpin' style='height: <?php echo resPinMinheight($q); ?>px; background-color: <?php echo randColor(); ?>;'>

<div align='left' id='bar-place<?php echo $_GET['scroll']; ?><?php echo resPinId($q); ?>' style='display: none'></div>

<a href='http://pinct.ru/pin/<?php echo resPinPath($q); ?>' id='pin-view<?php echo $_GET['scroll']; ?><?php echo resPinId($q); ?>' class='pin-view' return='false'></a>
</div>

<span><?php echo resPinName($q); ?></span>
<br><br>

<?php dataTag(resPinId($q), false); ?>
<?php if ( rowsTags() > 0 ) { ?>
<div align='center' id='tags<?php echo resPinId($q); ?>' class='tagspin'><?php $t=0; for($t=0; $t<=rowsTags(); $t++) { if (resTagName($t)) { ?><a class='tagclick' href='http://pinct.ru/tags/<?php echo resTagPath($t); ?>' return='false'><span>#<?php echo resTagName($t); ?></span></a><?php }} ?></div><?php } ?>

<?php if ( resPinCommentsId($q) > 0 ) { ?>


<div align='left' id='desqus<?php echo $_GET['scroll']; ?><?php echo resPinId($q); ?>' class='mini-desqus'>



</div>

<?php } ?>

<div align='center' id='send<?php echo resPinId($q); ?>' class='send-comment'>

<form name='send-comment' id='send-comment<?php echo resPinId($q); ?>' method='GET' action='cat.php'>
  
  <textarea name='send-text' id='send<?php echo resPinId($q); ?>' placeholder='Напишите что-нибудь...'></textarea>
  <br><br>
  <input type='button' name='mini-comment' id='mini-comment' class='mycomment' value='комментировать'>
  
  </form>

</div>

<div align='center' id='puzo<?php echo $_GET['scroll']; ?><?php echo resPinId($q); ?>' class='puzomerki'>

</div>

<br>
</div>
  
  </div>


<?php } } ?>  



<?php 
if (resPinName($step)){
?> 

</div> <!-- #container -->

<?php 
}

}
?> 

 




 
 
 
 
 


<?php

}

?>

