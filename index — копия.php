<?php

require_once 'main/conf.php';
require_once 'main/db.php';
require_once 'main/options.php';

$content = "Hello! " . $_SERVER['REQUEST_URI'];

$uri = $_SERVER['QUERY_STRING'];

$parseURI = explode("?", $_SERVER['REQUEST_URI']);

$parseURL = explode("/", $parseURI[0]);

$url1 = $parseURL[1];
$url2 = $parseURL[2];

// если аякс 
if ($_GET['ajax']){
// и не главная
if ($_SERVER['REQUEST_URI'] != '/'){
// и страница пользователя
if ($url1 == 'users'){

?>

<br><br><br><br>
<div align='center' id='main' class='content'>

<div align='center' id='user' class='back-user'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo mySelect($url1, $colUser, $url2, 0, 3, true); ?>
.
<?php echo mySelect($url1, $colUser, $url2, 0, 3, true); ?>

</span><span class='city'>
<?php echo mySelect($url1, $colUser, $url2, 0, 7, true); ?>
,
 <?php echo mySelect($url1, $colUser, $url2, 0, 6, true); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (mySelect($url1, $colUser, $url2, 0, 8, true)) {
echo mySelect($url1, $colUser, $url2, 0, 8, true); 
}
else {
echo "Здесь всегда можно что-нибудь написать, например о том, что ты любишь читать, чем увлекаешься или просто инфу о себе.";
}

?>
</span><span class='quotes'>&nbsp;&nbsp;</span>
<br><br><br>

<div align='center'>
<span class='vk'>&nbsp;&nbsp;&nbsp;&nbsp;</span><span class='fb'>&nbsp;&nbsp;&nbsp;&nbsp;</span><span class='gl'>&nbsp;&nbsp;&nbsp;&nbsp;</span><span class='tw'>&nbsp;&nbsp;&nbsp;&nbsp;</span>
</div>

</div>

<div id='follow-user' class='followuser'>

<div class='followuser'>
<?php echo mySelect($url1, $colUser, $url2, 0, 16, true); ?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php echo mySelect($url1, $colUser, $url2, 0, 17, true); ?>
<br>
<span>Подписок</span>
</div>

<br>

<div class='follow' align='center'>

<form name='subscr' id='subscr' action='hand.php'>

<input name='subscr' id='subscr' type='button' value='Подписаться'>

</form>

</div>

</div>
<br>

<div align='center' id='ava-user' class='avataruser'>
<div align='center'>
<img src='http://pinct.ru/img/100.jpg' align='center' width='100px' alt='user'/>
</div>
</div>

</div>
 
 <div align='center' id='top-glider' class='glider'>


<div align='left' class='glider-left'>
&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<div align='left' class='glider-right'>
&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<div align='left' id='top-glide' class='glide'>


<div align='left' id='hash-tags'>

<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>

</div>

</div>

</div>
 
 
 <br>
<div id='screen'>
wvrwebbreee
</div>
<div id='scroll'>

</div>
<br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

  <div class='box col3' id='pin909'>
<div align='center' id='pin909' class='sectionpin'>

<div align='center' id='img909' class='imgpin'>
<a href='/profile/main' return='false'><img class='sectionpin' src='http://pinct.ru/pins/8b2f4bb58b1884f70fcac0e8c620daa5_b.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Куча белок</span>
<br>

<div align='center' id='tags909' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>

<div align='left' id='desqus909' class='mini-desqus'>

<div align='left' id='comment909' class='mini-comment'>

<a href='' return='false'><img class='mini-comment' src='http://pinct.ru/img/avatar13.png' align='left' width='35px'/></a>

<div align='left' class='mini-reply'>
<img class='tik' src='http://pinct.ru/img/tik-comment.png' align='left' width='15px'/>
<b class='mini-user'>Джон Смит | 12:30</b>
<br>
Привет! Как дела? Скоро лето!
</div>

</div>

<div align='left' id='comment909' class='mini-comment'>

<a href='' return='false'><img class='mini-comment2' src='http://pinct.ru/img/avatar7.png' align='right' width='35px'/></a>

<div align='left' class='mini-reply2'>
<img class='tik' src='http://pinct.ru/img/tik-comment2.png' align='right' width='15px'/>
<b class='mini-user'>Джон Смит | 12:30</b>
<br>
Привет! Как дела? Скоро лето!
</div>

</div>

</div>

<div align='center' id='send909' class='send-comment'>

<form name='send-comment' id='send-comment909' method='GET' action='cat.php'>
  
  <textarea name='send-text' id='send909' placeholder='Напишите что-нибудь...'></textarea>
  <br><br>
  <input type='button' name='mini-comment' id='mini-comment' class='mycomment' value='комментировать'>
  
  </form>

</div>

<div align='center' id='puzo909' class='puzomerki'>
<div align='center' class='small-like'>15</div><div align='center' class='small-repin'>17</div><div align='center' class='small-comment'>45</div>
</div>

<br>
</div>
  </div>

  <div class='box col3' id='pin2352466878786'>

<div align='center' id='pin2352466878786' class='sectionpin'>
<div align='center' id='img2352466878786' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/d2d1ffd0ce44f886efb1ba0a845c6089-1434735718g4k8n-200x300.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Модный лофт</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15</div><div align='center' class='small-repin'>17</div><div align='center' class='small-comment'>45</div>
</div>

<br>
</div>
	
  </div>

  

  <div class='box col3' id='pin235246611522'>

<div align='center' id='pin235246611522' class='sectionpin'>
<div align='center' id='img235246611522' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/c6d3655039595bfec796512857ea57a9-143473608648gkn-200x298.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Второй этаж</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

  <div class='box col3' id='pin23524665553'>

<div align='center' id='pin23524665553' class='sectionpin'>
<div align='center' id='img23524665553' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/tumblr_m8bwdij5qt1ryhlspo1_500-14327500358gk4n-200x300.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Мега балкон</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>
  
  

  <div class='box col3' id='pin235246324309'>

<div align='center' id='pin235246324309' class='sectionpin'>
<div align='center' id='img235246324309' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/tumblr_nox8x8abkq1qzu2tmo1_500-14327491144kng8-200x319.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>А вот и я!</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>

  </div>

  <div class='box col3' id='pin2352463223321'>

<div align='center' id='pin2352463223321' class='sectionpin'>
<div align='center' id='img2352463223321' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/4304125_original-1432750338ngk84-200x241.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Шикарная ванная</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>

  </div>

  <div class='box col3' id='pin23524632865845'>

<div align='center' id='pin23524632865845' class='sectionpin'>
<div align='center' id='img23524632865845' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/7dc4fb9e66a493bc0940c75327d17f43-1434735858gkn48-200x299.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Вход в гостиную</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div> 
  
  </div>

  <div class='box col3' id='pin235246328654664'>

<div align='center' id='pin235246328654664' class='sectionpin'>
<div align='center' id='img235246328654664' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/tumblr_noxfezeih11ta6jiso1_500-14327489188nkg4-200x328.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Сейчас я кого-то съем</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

  <div class='box col3' id='pin235246328654331'>

<div align='center' id='pin235246328654331' class='sectionpin'>
<div align='center' id='img235246328654331' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/4ca0e0ca3eecc-14197088624k8ng-200x296.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Как приручить дракона?</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

  <div class='box col3' id='pin235246328654115'>

<div align='center' id='pin235246328654115' class='sectionpin'>
<div align='center' id='img235246328654115' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/8c1e3-1435087880gn8k4-200x282.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Мальчик на скейте</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>

  </div>

  <div class='box col3' id='pin235246328542510'>

<div align='center' id='pin235246328542510' class='sectionpin'>
<div align='center' id='img235246328542510' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/b267edb1043583e6675db8979ba0f212-14347359528kgn4-200x299.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Красивая кухня</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

 
    <div class='box col3' id='pin235246328542225'>

<div align='center' id='pin235246328542225' class='sectionpin'>
<div align='center' id='img235246328542225' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/e431647b484916c5940f1302e5a15ef6-14347355728g4nk-200x245.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Ребёнок молится</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>
	
    </div>

 

  
  
  
</div> <!-- #container -->

</div>

<nav id='page-nav'>

<a href='#'></a>
</nav>




<script type='text/javascript'>

$(document).ready(function(){

var $container = $('#container_infinity');
$container.masonry({
        itemSelector: '.box',
		singleMode: true,
// все блоки одинаковой ширины
      isResizable: true,
// перестраивает блоки при изменении размеров окна
      isAnimated: true,
	  // анимируем перестроение блоков
	  isFitWidth: true
      });

	  
document.title = "Пользователь scanderberg";

$('#page-nav a').attr('href','http://pinct.ru/ajax/pin.php?scroll=2');

});
  
  </script>

<script type='text/javascript'>

  $(function(loadMason){
    
    var $container = $('#container_infinity');
    
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.box',
		singleMode: true,
// все блоки одинаковой ширины
      isResizable: true,
// перестраивает блоки при изменении размеров окна
      isAnimated: true,
	  // анимируем перестроение блоков
	  isFitWidth: true
      });
    });
    
    $container.infinitescroll({
      navSelector  : '#page-nav',    // селектор контейнера для навигации по старинцам
      nextSelector : '#page-nav a',  // селектор ссылки для первой загрузки данных  
      itemSelector : '.box',     // селектор блоков, к которым применяются эффекты  
      donetext  : 'всё загружено!',
      loadingImg : 'http://pinct.ru/img/feedback_loading.gif', // изображение ajaxljader
      debug: false, // выводит ошибки на консоль
      errorCallback: function() { 
        // сообщение об ошибках исчеазет по истечении 2 секундной анимации
        $('#infscr-loading').animate({opacity: .8},2000).fadeOut('normal');   
      }
      },
      // вызываем Masonry 
      function( newElements ) {
        var $newElems = $( newElements );
        // запускаем эффекты только после полной загрузки изображений
        $newElems.imagesLoaded(function(){
          $container.masonry( 'appended', $newElems, true ); 
        });
      }
    );
    
  });
  
 loadMason();
  
  

  
</script>

 </div> <!-- #content -->

	
	
<?php
	
}

elseif ($url1 == 'category'){



?>
<br><br>


<?php
dataPin("pin", "$url1", "$url2", "", false);
dataCategory("$url2", false);
?>

<div class='caption'>
<div class='category'>

<script type='text/javascript'>
document.title = '<?php echo resCategoryName(); ?>';
</script>

<h1><?php echo resCategoryName(); ?></h1>

</div>
</div>
 
 




<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

 <?php 

$q=0;
for($q=0; $q<=19; $q++) { 
if (resPinName($q)) {
?>

<div class='box col3' id='pin<?php echo resPinId($q); ?>'>

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
 <a href='#' class='first-el' return='false'><li>
Пины
 </li></a>
 <a href='#' return='false'><li>
Альбомы
 </li></a>
 <a href='#' return='false'><li>
Лайки
 </li></a>
 <a href='#' return='false'><li>
Репосты
 </li></a>
 <a href='#' return='false'><li>
Подписчики
 </li></a>
  <a href='#' class='last-el' return='false'><li>
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

</div>
</div>

<a href='http://pinct.ru/pin/<?php echo resPinPath($q); ?>' class='pin-view' return='false'><img class='sectionpin' id='img<?php echo resPinId($q); ?>' src='http://pinct.ru/pins/<?php echo resPinThumb($q); ?>' align='bottom' width='200px' height='<?php echo resPinMinheight($q); ?>px' alt='user'/></a>
</div>

<span><?php echo resPinName($q); ?></span>
<br><br>

<?php dataTag(resPinId($q), false); ?>
<?php if ( rowsTags() > 0 ) { ?>
<div align='center' id='tags<?php echo resPinId($q); ?>' class='tagspin'><?php $t=0; for($t=0; $t<=rowsTags(); $t++) { if (resTagName($t)) { ?><a href='http://pinct.ru/tags/<?php echo resTagPath($t); ?>' return='false'><span>#<?php echo resTagName($t); ?></span></a><?php }} ?></div><?php } ?>

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
  
</div> <!-- #container -->

</div> 

<?php 

$myRand = rand(1, 999);
$myRand2 = rand(1, 999);
$myRand3 = rand(1, 999);
$myRand4 = rand(1, 999);
$myRand5 = rand(1, 999);
$myRand6 = rand(1, 999);

?>


<nav id='page-nav<?php echo $myRand6; ?>'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll=2&r=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

var $container = $('#container_infinity');
$container.masonry({
        itemSelector: '.box',
		singleMode: true,
// все блоки одинаковой ширины
      isResizable: true,
// перестраивает блоки при изменении размеров окна
      isAnimated: true,
	  // анимируем перестроение блоков
	  isFitWidth: true
      });


<?php 
$s=0;
for($s=0; $s<=20; $s++) { 
if (resPinName($s)) {

myPin(resPinId($s));

}

}

?>

});
  
  </script>
  

	
	




   <!-- #content -->

<?php 

}

// если главная и аякс
else {

?>


 
 <div align='center' id='top-glider' class='glider'>


<div align='left' class='glider-left'>
&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<div align='left' class='glider-right'>
&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<div align='left' id='top-glide' class='glide'>


<div align='left' id='hash-tags'>

<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>


</div>

</div>

</div>
 
 
 <br>
<div id='screen'>
wvrwebbreee
</div>
<br>


<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

 <?php 
 
dataPin("pin", "", "", "", false);
 
$q=0;
for($q=0; $q<=19; $q++) { 
if (resPinName($q)) {
?>

<div class='box col3' id='pin<?php echo resPinId($q); ?>'>

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
 <a href='#' class='first-el' return='false'><li>
Пины
 </li></a>
 <a href='#' return='false'><li>
Альбомы
 </li></a>
 <a href='#' return='false'><li>
Лайки
 </li></a>
 <a href='#' return='false'><li>
Репосты
 </li></a>
 <a href='#' return='false'><li>
Подписчики
 </li></a>
  <a href='#' class='last-el' return='false'><li>
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

</div>
</div>

<a href='http://pinct.ru/pin/<?php echo resPinPath($q); ?>' class='pin-view' return='false'><img class='sectionpin' id='img<?php echo resPinId($q); ?>' src='http://pinct.ru/pins/<?php echo resPinThumb($q); ?>' align='bottom' width='200px' height='<?php echo resPinMinheight($q); ?>px' alt='user'/></a>
</div>

<span><?php echo resPinName($q); ?></span>
<br><br>

<?php dataTag(resPinId($q), false); ?>
<?php if ( rowsTags() > 0 ) { ?>
<div align='center' id='tags<?php echo resPinId($q); ?>' class='tagspin'><?php $t=0; for($t=0; $t<=rowsTags(); $t++) { if (resTagName($t)) { ?><a href='http://pinct.ru/tags/<?php echo resTagPath($t); ?>' return='false'><span>#<?php echo resTagName($t); ?></span></a><?php }} ?></div><?php } ?>

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
  
</div> <!-- #container -->

</div> 

<?php 

$myRand = rand(1, 999);
$myRand2 = rand(1, 999);
$myRand3 = rand(1, 999);
$myRand4 = rand(1, 999);
$myRand5 = rand(1, 999);
$myRand6 = rand(1, 999);

?>


<nav id='page-nav<?php echo $myRand5; ?>'>

<a href='http://pinct.ru/ajax/pin.php/?scroll=2&m<?php echo $myRand5; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

var $container = $('#container_infinity');
$container.masonry({
        itemSelector: '.box',
		singleMode: true,
// все блоки одинаковой ширины
      isResizable: true,
// перестраивает блоки при изменении размеров окна
      isAnimated: true,
	  // анимируем перестроение блоков
	  isFitWidth: true
      });

document.title = "Pinct | Мир ярких картинок";


<?php 

$myRand = rand(1, 999);
$s=0;
for($s=0; $s<=20; $s++) { 
if (resPinName($s)) {

myPin(resPinId($s));

}

}

?>




});
  
  </script>
  


<script type='text/javascript'>

myScript<?php echo $myRand; ?> = 2;

  $(function(loadMason){
    
    var $container = $('#container_infinity');
    
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.box',
		singleMode: true,
// все блоки одинаковой ширины
      isResizable: true,
// перестраивает блоки при изменении размеров окна
      isAnimated: true,
	  // анимируем перестроение блоков
	  isFitWidth: true
      });
    });
    
    $container.infinitescroll({
      navSelector  : '#page-nav<?php echo $myRand5; ?>',    // селектор контейнера для навигации по старинцам
      nextSelector : '#page-nav<?php echo $myRand5; ?> a',  // селектор ссылки для первой загрузки данных  
      itemSelector : '.box',     // селектор блоков, к которым применяются эффекты  
      donetext  : 'всё загружено!',
      loadingImg : 'http://pinct.ru/img/feedback_loading.gif', // изображение ajaxljader
      debug: false, // выводит ошибки на консоль
      errorCallback: function() { 
        // сообщение об ошибках исчеазет по истечении 2 секундной анимации
        $('#infscr-loading').animate({opacity: .8},2000).fadeOut('normal');   
      }
      },
      // вызываем Masonry 
      function( newElements ) {
        var $newElems = $( newElements );
        // запускаем эффекты только после полной загрузки изображений
        $newElems.imagesLoaded(function(){
          $container.masonry( 'appended', $newElems, true ); 
        });
		
		$.getScript('http://pinct.ru/ajax/js.php?scroll='+window.myScript<?php echo $myRand; ?>);
		myScript<?php echo $myRand; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1',
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Чёрный кот - пин от пользователя scanderberg";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		
      }
    );
    
  });
  
 loadMason();
  
  

  
</script>

<!-- #content -->




<?php

}


}


}

if ($_GET['pin-view']){
if ($url1 == 'pin') {

?>


<div id='box-img888' class='box-view'>

<div align='center' class='boxed-view' id='photo-view'>

vreebreerbe

</div>
  
</div>


<?php

}
}

else {
// перезагрузка страницы пользователя
if ($_SERVER['REQUEST_URI'] != '/'){

if ($url1 == 'users'){

?>

<?php
require_once 'main/conf.php';
require_once 'main/db.php';
require_once 'main/options.php';
require_once 'top.php';
require_once 'chat.php';
?>

<br>

<div align='center' id='all-section-main' class='allcontent'>

<div align='center' id='main' class='content'>
 
 <div align='center' id='top-glider' class='glider'>


<div align='left' class='glider-left'>
&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<div align='left' class='glider-right'>
&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<div align='left' id='top-glide' class='glide'>


<div align='left' id='hash-tags'>

<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>
<div class='tags'>
<img src='http://pinct.ru/img/paris.jpg' align='bottom' width='80px' alt='user'/>
</div>


</div>

</div>

</div>
 
 
 <br>
<div id='screen'>
wvrwebbreee
</div>
<br>


    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<div class='box col3' id='pin909'>
<div align='center' id='pin909' class='sectionpin'>

<div align='center' id='img909' class='imgpin'>
<a href='/profile/main' return='false'><img class='sectionpin' src='http://pinct.ru/pins/8b2f4bb58b1884f70fcac0e8c620daa5_b.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Куча белок</span>
<br>

<div align='center' id='tags909' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>

<div align='left' id='desqus909' class='mini-desqus'>

<div align='left' id='comment909' class='mini-comment'>

<a href='' return='false'><img class='mini-comment' src='http://pinct.ru/img/avatar13.png' align='left' width='35px'/></a>

<div align='left' class='mini-reply'>
<img class='tik' src='http://pinct.ru/img/tik-comment.png' align='left' width='15px'/>
<b class='mini-user'>Джон Смит | 12:30</b>
<br>
Привет! Как дела? Скоро лето!
</div>

</div>

<div align='left' id='comment909' class='mini-comment'>

<a href='' return='false'><img class='mini-comment2' src='http://pinct.ru/img/avatar7.png' align='right' width='35px'/></a>

<div align='left' class='mini-reply2'>
<img class='tik' src='http://pinct.ru/img/tik-comment2.png' align='right' width='15px'/>
<b class='mini-user'>Джон Смит | 12:30</b>
<br>
Привет! Как дела? Скоро лето!
</div>

</div>

</div>

<div align='center' id='send909' class='send-comment'>

<form name='send-comment' id='send-comment909' method='GET' action='cat.php'>
  
  <textarea name='send-text' id='send909' placeholder='Напишите что-нибудь...'></textarea>
  <br><br>
  <input type='button' name='mini-comment' id='mini-comment' class='mycomment' value='комментировать'>
  
  </form>

</div>

<div align='center' id='puzo909' class='puzomerki'>
<div align='center' class='small-like'>15</div><div align='center' class='small-repin'>17</div><div align='center' class='small-comment'>45</div>
</div>

<br>
</div>
  </div>

  <div class='box col3' id='pin2352466878786'>

<div align='center' id='pin2352466878786' class='sectionpin'>
<div align='center' id='img2352466878786' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/d2d1ffd0ce44f886efb1ba0a845c6089-1434735718g4k8n-200x300.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Модный лофт</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15</div><div align='center' class='small-repin'>17</div><div align='center' class='small-comment'>45</div>
</div>

<br>
</div>
	
  </div>

  

  <div class='box col3' id='pin235246611522'>

<div align='center' id='pin235246611522' class='sectionpin'>
<div align='center' id='img235246611522' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/c6d3655039595bfec796512857ea57a9-143473608648gkn-200x298.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Второй этаж</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

  <div class='box col3' id='pin23524665553'>

<div align='center' id='pin23524665553' class='sectionpin'>
<div align='center' id='img23524665553' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/tumblr_m8bwdij5qt1ryhlspo1_500-14327500358gk4n-200x300.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Мега балкон</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>
  
  

  <div class='box col3' id='pin235246324309'>

<div align='center' id='pin235246324309' class='sectionpin'>
<div align='center' id='img235246324309' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/tumblr_nox8x8abkq1qzu2tmo1_500-14327491144kng8-200x319.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>А вот и я!</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>

  </div>

  <div class='box col3' id='pin2352463223321'>

<div align='center' id='pin2352463223321' class='sectionpin'>
<div align='center' id='img2352463223321' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/4304125_original-1432750338ngk84-200x241.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Шикарная ванная</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>

  </div>

  <div class='box col3' id='pin23524632865845'>

<div align='center' id='pin23524632865845' class='sectionpin'>
<div align='center' id='img23524632865845' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/7dc4fb9e66a493bc0940c75327d17f43-1434735858gkn48-200x299.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Вход в гостиную</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div> 
  
  </div>

  <div class='box col3' id='pin235246328654664'>

<div align='center' id='pin235246328654664' class='sectionpin'>
<div align='center' id='img235246328654664' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/tumblr_noxfezeih11ta6jiso1_500-14327489188nkg4-200x328.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Сейчас я кого-то съем</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

  <div class='box col3' id='pin235246328654331'>

<div align='center' id='pin235246328654331' class='sectionpin'>
<div align='center' id='img235246328654331' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/4ca0e0ca3eecc-14197088624k8ng-200x296.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Как приручить дракона?</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

  <div class='box col3' id='pin235246328654115'>

<div align='center' id='pin235246328654115' class='sectionpin'>
<div align='center' id='img235246328654115' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/8c1e3-1435087880gn8k4-200x282.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Мальчик на скейте</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>

  </div>

  <div class='box col3' id='pin235246328542510'>

<div align='center' id='pin235246328542510' class='sectionpin'>
<div align='center' id='img235246328542510' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/b267edb1043583e6675db8979ba0f212-14347359528kgn4-200x299.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Красивая кухня</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

 
    <div class='box col3' id='pin235246328542225'>

<div align='center' id='pin235246328542225' class='sectionpin'>
<div align='center' id='img235246328542225' class='imgpin'>
<a href='' return='false'><img class='sectionpin' src='http://pinct.ru/pins/e431647b484916c5940f1302e5a15ef6-14347355728g4nk-200x245.jpg' align='bottom' width='200px' alt='user'/></a>
</div>

<span>Ребёнок молится</span>
<br>

<div align='center' id='tags235246642424' class='tagspin'>
<a href='' return='false'><span>#Котэ</span></a><a href='' return='false'><span>#Удивлён</span></a><a href='' return='false'><span>#Котик</span></a><a href='' return='false'><span>#Барсик</span></a><a href='' return='false'><span>#Прикольно</span></a>
</div>


<div align='center' id='puzo235246642424' class='puzomerki'>
<div align='center' class='small-like'>15&nbsp;&nbsp;</div><div align='center' class='small-repin'>17&nbsp;&nbsp;</div><div align='center' class='small-comment'>45&nbsp;&nbsp;</div>
</div>

<br>
</div>
	
    </div>

 

  
  
  
</div> <!-- #container -->

</div>

<nav id='page-nav'>

<a href='#'></a>
</nav>

 </div>
</div> <!-- #content -->



<script type='text/javascript' src='http://pinct.ru/infinity/jquery-1.6.1.min.js'></script>
<script type='text/javascript' src='http://pinct.ru/infinity/jquery.masonry.min.js'></script>
<script type='text/javascript' src='http://pinct.ru/infinity/jquery.infinitescroll.js'></script>

<script>
   document.createElement('aside');
   document.createElement('article');
   document.createElement('nav');
   document.createElement('header');
   document.createElement('footer');
   document.createElement('section');
  </script>
  
<script>

$(document).ready(function(){

$('#page-nav a').attr('href','/ajax/pin.php?scroll=2');

});

  </script>

<script type='text/javascript' src='http://pinct.ru/js/pinct1-1.js'></script>
<script type='text/javascript' src='http://pinct.ru/js/pinct2-1.js'></script>

<!--[if lt IE 9]><script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script><![endif]-->

<script type='text/javascript'>

$(document).ready(function(){

var $container = $('#container_infinity');
$container.masonry({
        itemSelector: '.box',
		singleMode: true,
// все блоки одинаковой ширины
      isResizable: true,
// перестраивает блоки при изменении размеров окна
      isAnimated: true,
	  // анимируем перестроение блоков
	  isFitWidth: true
      });
	  
document.title = "Пользователь scanderberg";

});
  
  </script>

<script>
        $(document).ready(function() {
            $('a.account').click(function() {
			event.preventDefault();
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1',
                    success: function(data){
                        $('#main').html(data);
						document.title = data;
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });

            $(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1',
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });
        });
		
$.getScript('http://pinct.ru/ajax/js.php?scroll=2');
		
    </script>



<script type='text/javascript'>

  $(function(loadMason){
    
    var $container = $('#container_infinity');
    
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.box',
		singleMode: true,
// все блоки одинаковой ширины
      isResizable: true,
// перестраивает блоки при изменении размеров окна
      isAnimated: true,
	  // анимируем перестроение блоков
	  isFitWidth: true
      });
    });
    
    $container.infinitescroll({
      navSelector  : '#page-nav',    // селектор контейнера для навигации по старинцам
      nextSelector : '#page-nav a',  // селектор ссылки для первой загрузки данных  
      itemSelector : '.box',     // селектор блоков, к которым применяются эффекты  
      donetext  : 'всё загружено!',
      loadingImg : 'http://pinct.ru/img/feedback_loading.gif', // изображение ajaxljader
      debug: false, // выводит ошибки на консоль
      errorCallback: function() { 
        // сообщение об ошибках исчеазет по истечении 2 секундной анимации
        $('#infscr-loading').animate({opacity: .8},2000).fadeOut('normal');   
      }
      },
      // вызываем Masonry 
      function( newElements ) {
        var $newElems = $( newElements );
        // запускаем эффекты только после полной загрузки изображений
        $newElems.imagesLoaded(function(){
          $container.masonry( 'appended', $newElems, true ); 
        });
      }
    );
    
  });
  
 loadMason();
  
  

  
</script>



</body>
</html>

<?php

}

}

else {
    include_once 'content.php';
	}
	
}

?>






