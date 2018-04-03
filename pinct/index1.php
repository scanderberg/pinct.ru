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
$url3 = $parseURL[3];
$url4 = $parseURL[4];

// если аякс 
if ($_GET['ajax']){
// и не главная
if ($_SERVER['REQUEST_URI'] != '/'){

// ajax и все пользователи
if ($url1 == 'all'){
if ($url2 == 'users'){
?>

<br><br>
 
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

    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<?php 
 

$q=0;
dataAllProfile(false);
if (rowsAllProfile()) {
for($q=0; $q<=9; $q++) { 
dataProfile(resAllProfileUsers($q), $sort);
dataPin("pin", "autorid", resAllProfileId($q), "", false);
if (resProfileName()) {
?>

<div class='box col4' id='user<?php echo resProfileId(); ?>'>

<div align='center' id='user<?php echo resProfileId(); ?>' class='section-user'>
<div align='center' id='user-name<?php echo resProfileId(); ?>' class='my-user'>
<div align='center' id='user-name<?php echo resProfileId(); ?>' class='username'>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><?php echo resProfileName() . " " . resProfileSoname(); ?></a></div>
<div align='center' id='col<?php echo resProfileId(); ?>' class='my-col'>
<div align='center' id='user-post<?php echo resProfileId(); ?>' class='colpost'><?php if (resProfileAutorPins()) { if (resProfileAutorPins() > 0) { echo resProfileAutorPins(); } else { echo "0"; } } else { echo "0"; } ?>
 постов
</div>
<div align='center' id='user-board<?php echo resProfileId(); ?>' class='colboard'><?php if (resProfileAutorBoards()) { if (resProfileAutorBoards() > 0) { echo resProfileAutorBoards(); } else { echo "0"; } } else { echo "0"; } ?>
 альбомов
</div>

<div align='center' id='user-ava<?php echo resProfileId(); ?>' class='user-avatar'>
<div align='center' class='my-avatar'>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pict-avatar' src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); } else { echo "default-male-100.gif"; } ?>' align='center' width='64px' alt='user'/></a>

</div>
</div>

</div>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(0)) {echo resPinTagThumb(0); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(1)) {echo resPinTagThumb(1); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(2)) {echo resPinTagThumb(2); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(3)) {echo resPinTagThumb(3); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(4)) {echo resPinTagThumb(4); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='lastuser'  src='http://pinct.ru/tag/<?php if (resPinTagThumb(5)) {echo resPinTagThumb(5); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='sub-author' id='sub<?php echo resProfileId(); ?>' href='' return='false'><div align='center' class='subscribe' id='sub<?php echo resProfileId(); ?>'>Подписаться</div></a>
<a class='unsub-author' id='unsub<?php echo resProfileId(); ?>' href='' return='false'><div align='center' class='unsubscribe' id='unsub<?php echo resProfileId(); ?>'>Отписаться</div></a>


<span class='follow-sub'><b>
<?php 
dataFollow2(resAllProfileUsers($q), false);
if (rowsFollow2()) {
if (rowsFollow2() > 0) {
echo "+" . rowsFollow2(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
</b> Подписчиков</span>
<br><br>
</div>
	
  </div>
</div>







<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll=2&i=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

document.title = "Все пользователи";


///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);


<?php
	  
if (rowsAllProfile()) {
for($b=0; $b<=rowsAllProfile(); $b++) { 
	  
mySubsribe(resAllProfileId($b));
	  
}
}
	  
?>



$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&w='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });


myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsAllProfile() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		
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

// ajax и страница альбома
elseif ($url1 == 'boards'){

?>



<br><br>

<div class='caption'>
<div class='category' style='width: 250px!important;'>

<?php dataMyBoards ($url2, false); ?>

<h1>Альбом: <?php echo resMyBoardsName(0); ?></h1>

</div>
</div>
 
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<?php
dataPin("pin", "board", resMyBoardsName(0), "", false);

$q=0;
if (rowsPin()) {
for($q=0; $q<=9; $q++) { 
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

<div align='center' id='puzo' class='puzomerki'>
<div align='center' class='small-like' id='small-likes<?php echo resPinId($q); ?>'><?php echo resPinLikes($q); ?></div><div align='center' class='small-repin'><?php echo resPinRepins($q); ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo resPinComments($q); ?>&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll=2&r=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsPin() > 5) { ?>

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
	  
	  
<?php } ?>

document.title = "Альбом <?php echo resMyBoardsName(0); ?>";


<?php 
$s=0;
for($s=0; $s<=10; $s++) { 
if (resPinName($s)) {

myPin(resPinId($s));

}

}

?>

///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
					
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });



myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsPin() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&v='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Категория";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
					
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
	
<?php } ?>



   <!-- #content -->

<?php 

}

// ajax и страница пользователя
elseif ($url1 == 'users'){

?>



<?php

if ($url3 == 'boards'){

?>

<br><br><br><br>

<?php dataProfile($url2, false); ?>

<div align='center' id='user' class='back-user' style='background-image: url(http://pinct.ru/user/<?php 
if (resProfileCover()) { echo resProfileCover(); } else { echo "cover.png"; } ?>)!important;'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo resProfileName(); ?>

<?php echo resProfileSoname(); ?>

</span><span class='city'>
<?php echo resProfileCity(); ?>
,
 <?php echo resProfileCountry(); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (resProfileAbout()) {
echo resProfileAbout(); 
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
<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
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
<img src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); }
else { echo "default-male-100.gif"; } ?>' align='center' width='100px' alt='user'/>
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
 
 <div align='center' id='menu-pin' class="menucapt">
<div align='center' id='menu-boxed' class="menuboxed">

<ul>
   <li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><b>

<?php 

if (resProfileAutorPins()) {
if (resProfileAutorPins() > 0) {
echo resProfileAutorPins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Постов<a>
</li><li style='background-color: #969696!important; color: #ffffff!important;'>
<a style='color: #ffffff!important;' class='profile' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/boards' return='false'><b style='color: #ffffff!important;'>

<?php 

if (resProfileAutorBoards()) {
if (resProfileAutorBoards() > 0) {
echo resProfileAutorBoards(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Альбомов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/likes' return='false'><b>

<?php 

if (resProfileAutorLikes()) {
if (resProfileAutorLikes() > 0) {
echo resProfileAutorLikes(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Лайка<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/repins' return='false'><b>

<?php 

if (resProfileAutorRepins()) {
if (resProfileAutorRepins() > 0) {
echo resProfileAutorRepins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Репоста<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followers' return='false'><b>

<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписчика<a>
</li>
<li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followings' return='false'><b>

<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписок<a>
</li>
<li>
<a href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/account-plus' code='Аккаунт+' return='false'>Аккаунт+<a>
</li>
<li>
<a href='http://pinct.ru/settings' return='false'><b>Редактировать профиль</b><a>
</li>
<li>
<a href='#' return='false'><b>Ещё</b><a>
</li>
</ul>

</div>
</div>
 
 <br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<?php 
 
dataBoards("$url2", false);
$q=0;

if (rowsBoards()) {
for($q=0; $q<=rowsBoards(); $q++) { 
dataPin("pin", "board", resBoardsName($q), "", false);
dataFollow(resBoardsUsers($q), false);
if (resBoardsName($q)) {
?>

<div class='box col4' id='board<?php echo resBoardsId($q); ?>'>

<div align='center' id='board<?php echo resBoardsId($q); ?>' class='sectionboard'>
<div align='center' id='board-img<?php echo resBoardsId($q); ?>' class='imgboard'>

<a class='myauthor' href='http://pinct.ru/boards/<?php echo resBoardsPath($q); ?>' return='false'><img class='sectionboard' src='http://pinct.ru/boards/<?php echo resBoardsThumb($q); ?>' align='bottom' width='249px' alt='user'/></a>
<div align='center' id='board-name<?php echo resBoardsId($q); ?>' class='nameboard'>
<div align='center'>
<?php echo resBoardsName($q); ?>
</div>
</div>
<a class='myauthor' href='http://pinct.ru/boards/<?php echo resBoardsPath($q); ?>' return='false'><img class='pictboard' src='http://pinct.ru/tag/<?php if (resPinTagThumb(1)) {echo resPinTagThumb(1); } else { echo "default.png"; } ?>' align='bottom' width='59px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/boards/<?php echo resBoardsPath($q); ?>' return='false'><img class='pictboard' src='http://pinct.ru/tag/<?php if (resPinTagThumb(2)) {echo resPinTagThumb(2); } else { echo "default.png"; } ?>' align='bottom' width='59px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/boards/<?php echo resBoardsPath($q); ?>' return='false'><img class='pictboard' src='http://pinct.ru/tag/<?php if (resPinTagThumb(3)) {echo resPinTagThumb(3); } else { echo "default.png"; } ?>' align='bottom' width='59px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/boards/<?php echo resBoardsPath($q); ?>' return='false'><img class='lastboard'  src='http://pinct.ru/tag/<?php if (resPinTagThumb(4)) {echo resPinTagThumb(4); } else { echo "default.png"; } ?>' align='bottom' width='59px' alt='user'/></a>

<a class='sub-author' id='sub<?php echo resBoardsId($q); ?>' href='' return='false'><div align='center' class='subscribe' id='sub<?php echo resBoardsId($q); ?>'>Подписаться</div></a>
<a class='unsub-author' id='unsub<?php echo resBoardsId($q); ?>' href='' return='false'><div align='center' class='unsubscribe' id='unsub<?php echo resBoardsId($q); ?>'>Отписаться</div></a>


<span class='follow-sub'><b>
<?php 
dataFollow2(resBoardsUsers($q), false);
if (rowsFollow2()) {
if (rowsFollow2() > 0) {
echo "+" . rowsFollow2(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
</b> Подписчиков</span>
<br><br>
</div>
	
  </div>
</div>

<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll=2&i=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

document.title = "Альбомы пользователя <?php echo resProfileUsers(); ?>";


<?php
	  
if (rowsBoards()) {
for($g=0; $g<=rowsBoards(); $g++) { 
	  
boardSubsribe(resBoardsId($g));
	  
}
}
	  
?>

///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });



myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>

	
 <!-- #content -->

	
	
<?php
	


}

elseif ($url3 == 'likes'){

?>

<br><br><br><br>

<?php dataProfile($url2, false); ?>

<div align='center' id='user' class='back-user' style='background-image: url(http://pinct.ru/user/<?php 
if (resProfileCover()) { echo resProfileCover(); } else { echo "cover.png"; } ?>)!important;'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo resProfileName(); ?>

<?php echo resProfileSoname(); ?>

</span><span class='city'>
<?php echo resProfileCity(); ?>
,
 <?php echo resProfileCountry(); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (resProfileAbout()) {
echo resProfileAbout(); 
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
<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
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
<img src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); }
else { echo "default-male-100.gif"; } ?>' align='center' width='100px' alt='user'/>
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
 
 <div align='center' id='menu-pin' class="menucapt">
<div align='center' id='menu-boxed' class="menuboxed">

<ul>
   <li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><b>

<?php 

if (resProfileAutorPins()) {
if (resProfileAutorPins() > 0) {
echo resProfileAutorPins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Постов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/boards' return='false'><b>

<?php 

if (resProfileAutorBoards()) {
if (resProfileAutorBoards() > 0) {
echo resProfileAutorBoards(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Альбомов<a>
</li><li style='background-color: #969696!important; color: #ffffff!important;'>
<a style='color: #ffffff!important;' class='profile' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/likes' return='false'><b style='color: #ffffff!important;'>

<?php 

if (resProfileAutorLikes()) {
if (resProfileAutorLikes() > 0) {
echo resProfileAutorLikes(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Лайка<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/repins' return='false'><b>

<?php 

if (resProfileAutorRepins()) {
if (resProfileAutorRepins() > 0) {
echo resProfileAutorRepins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Репоста<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followers' return='false'><b>

<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписчика<a>
</li>
<li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followings' return='false'><b>

<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписок<a>
</li>
<li>
<a href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/account-plus' code='Аккаунт+' return='false'>Аккаунт+<a>
</li>
<li>
<a href='http://pinct.ru/settings' return='false'><b>Редактировать профиль</b><a>
</li>
<li>
<a href='#' return='false'><b>Ещё</b><a>
</li>
</ul>

</div>
</div>
 
 <br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<?php 
 
dataLikes("$url2", false);
$q=0;

if (rowsLikes()) {
for($q=0; $q<=9; $q++) { 
dataPin("pin", $ids, resLikesPinId($q), "", false);
if (resPinName(0)) {
?>

<div class='box col3' id='pin<?php echo resPinId(0); ?>'>

<div align='center' id='pinned<?php echo resPinId(0); ?>' class='sectionpin'>
<div align='center' id='img<?php echo resPinId(0); ?>' class='imgpin'>

<div align='left'>
<div align='center' id='action<?php echo resPinId(0); ?>' class='actionbar'>

<a href='' return='false'><div align='center' id='thumb<?php echo resPinId(0); ?>' class='thumb-autor'>

<img class='img-nav' src='http://pinct.ru/user/<?php echo resPinAutorThumb(0); ?>' align='left' width='50px'/>

<div id='pin-nav<?php echo resPinId(0); ?>' class='navpin'>
<img src='http://pinct.ru/img/tik-top-pin.png' align='left' width='20'/><?php echo resPinAutor(0); ?>

<div id='pin-nav-text<?php echo resPinId(0); ?>' class='navpintext'>

<ul>
 <a href='http://pinct.ru/users/<?php echo resPinAutor(0); ?>' class='myauthor first-el' return='false'><li>
Посты
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor(0); ?>/boards' return='false' class='myauthor'><li>
Альбомы
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor(0); ?>/likes' return='false'class='myauthor'><li>
Лайки
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor(0); ?>/repins' return='false'class='myauthor'><li>
Репосты
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor(0); ?>/followers' return='false'class='myauthor'><li>
Подписчики
 </li></a>
  <a href='http://pinct.ru/users/<?php echo resPinAutor(0); ?>/followings' class='myauthor last-el' return='false'><li>
Подписки
 </li></a>
 </ul>

</div>

</div>

<div id='tooltip-menu<?php echo resPinId(0); ?>-user' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/><?php echo resPinAutor(0); ?>
</div>

</div></a>

<a href='' return='false'><div align='center' id='repin<?php echo resPinId(0); ?>' class='repin-autor'>

       <div id='tooltip-menu<?php echo resPinId(0); ?>-repin' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>репост
</div>

</div></a>

<a href='' return='false'><div align='center' id='like<?php echo resPinId(0); ?>' class='like-autor'>

<div id='tooltip-menu<?php echo resPinId(0); ?>-like' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>лайк
</div>
</div>
</a>

<a href='' return='false'>
<div align='center' id='unlike<?php echo resPinId(0); ?>' class='unlike-autor'>
<div id='tooltip-menu<?php echo resPinId(0); ?>-unlike' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>убрать&nbsp;лайк
</div>
</div>
</a>

<a href='' return='false'><div align='center' id='comment<?php echo resPinId(0); ?>' class='comment-autor'>

<div id='tooltip-menu<?php echo resPinId(0); ?>-comment' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>написать
</div>

</div></a>

</div>
</div>

<a href='http://pinct.ru/pin/<?php echo resPinPath(0); ?>' class='pin-view' return='false'><img class='sectionpin' id='img<?php echo resPinId(0); ?>' src='http://pinct.ru/pins/<?php echo resPinThumb(0); ?>' align='bottom' width='200px' height='<?php echo resPinMinheight(0); ?>px' alt='user'/></a>
</div>

<span><?php echo resPinName(0); ?></span>
<br><br>

<?php dataTag(resPinId(0), false); ?>
<?php if ( rowsTags() > 0 ) { ?>
<div align='center' id='tags<?php echo resPinId(0); ?>' class='tagspin'><?php $t=0; for($t=0; $t<=rowsTags(); $t++) { if (resTagName($t)) { ?><a class='tagclick' href='http://pinct.ru/tags/<?php echo resTagPath($t); ?>' return='false'><span>#<?php echo resTagName($t); ?></span></a><?php }} ?></div><?php } ?>

<?php if ( resPinCommentsId(0) > 0 ) { ?>

<?php dataComments(resPinCommentsId(0), false); ?>
<div align='left' id='desqus<?php echo resPinId(0); ?>' class='mini-desqus'>

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

<div align='center' id='send<?php echo resPinId(0); ?>' class='send-comment'>

<form name='send-comment' id='send-comment<?php echo resPinId(0); ?>' method='GET' action='cat.php'>
  
  <textarea name='send-text' id='send<?php echo resPinId(0); ?>' placeholder='Напишите что-нибудь...'></textarea>
  <br><br>
  <input type='button' name='mini-comment' id='mini-comment' class='mycomment' value='комментировать'>
  
  </form>

</div>

<div align='center' id='puzo' class='puzomerki'>
<div align='center' class='small-like' id='small-likes<?php echo resPinId(0); ?>'><?php echo resPinLikes(0); ?></div><div align='center' class='small-repin'><?php echo resPinRepins(0); ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo resPinComments(0); ?>&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll=2&i=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsLikes() > 5) { ?>

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
	  
	  
<?php } ?>

document.title = "Лайки пользователя <?php echo resProfileUsers(); ?>";


<?php 
$s=0;
for($s=0; $s<=10; $s++) { 
if (resLikesPinId($s)) {

myPin2(resLikesPinId($s));

}

}

?>

///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
					
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		
		
/* потом вставить в категории, когда будет больше пинов

         $('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&random<?php echo $myRand3; ?>='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });

            $(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&random<?php echo $myRand4; ?>='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });

*/



myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsLikes() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&v='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Категория";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
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

elseif ($url3 == 'repins'){

?>

<br><br><br><br><br><br><br><br>
repins

<?php

}
// followers и ajax
elseif ($url3 == 'followers'){

?>




<br><br><br><br>

<?php dataProfile($url2, false); ?>

<div align='center' id='user' class='back-user' style='background-image: url(http://pinct.ru/user/<?php 
if (resProfileCover()) { echo resProfileCover(); } else { echo "cover.png"; } ?>)!important;'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo resProfileName(); ?>

<?php echo resProfileSoname(); ?>

</span><span class='city'>
<?php echo resProfileCity(); ?>
,
 <?php echo resProfileCountry(); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (resProfileAbout()) {
echo resProfileAbout(); 
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
<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
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
<img src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); }
else { echo "default-male-100.gif"; } ?>' align='center' width='100px' alt='user'/>
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
 
 <div align='center' id='menu-pin' class="menucapt">
<div align='center' id='menu-boxed' class="menuboxed">

<ul>
   <li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><b>

<?php 

if (resProfileAutorPins()) {
if (resProfileAutorPins() > 0) {
echo resProfileAutorPins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Постов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/boards' return='false'><b>

<?php 

if (resProfileAutorBoards()) {
if (resProfileAutorBoards() > 0) {
echo resProfileAutorBoards(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Альбомов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/likes' return='false'><b>

<?php 

if (resProfileAutorLikes()) {
if (resProfileAutorLikes() > 0) {
echo resProfileAutorLikes(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Лайка<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/repins' return='false'><b>

<?php 

if (resProfileAutorRepins()) {
if (resProfileAutorRepins() > 0) {
echo resProfileAutorRepins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Репоста<a>
</li><li style='background-color: #969696!important; color: #ffffff!important;'>
<a style='color: #ffffff!important;' class='profile' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followers' return='false'><b style='color: #ffffff!important;'>

<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписчика<a>
</li>
<li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followings' return='false'><b>

<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписок<a>
</li>
<li>
<a href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/account-plus' code='Аккаунт+' return='false'>Аккаунт+<a>
</li>
<li>
<a href='http://pinct.ru/settings' return='false'><b>Редактировать профиль</b><a>
</li>
<li>
<a href='#' return='false'><b>Ещё</b><a>
</li>
</ul>

</div>
</div>
 
 <br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<?php 
 

$q=0;
dataFollow($url2, false);
if (rowsFollow()) {
for($q=0; $q<=9; $q++) { 
dataProfile(resFollowObj($q), $sort);
dataPin("pin", "autorid", resFollowObjId($q), "", false);
if (resProfileName()) {
?>

<div class='box col4' id='user<?php echo resProfileId(); ?>'>

<div align='center' id='user<?php echo resProfileId(); ?>' class='section-user'>
<div align='center' id='user-name<?php echo resProfileId(); ?>' class='my-user'>
<div align='center' id='user-name<?php echo resProfileId(); ?>' class='username'>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><?php echo resProfileName() . " " . resProfileSoname(); ?></a></div>
<div align='center' id='col<?php echo resProfileId(); ?>' class='my-col'>
<div align='center' id='user-post<?php echo resProfileId(); ?>' class='colpost'><?php if (resProfileAutorPins()) { if (resProfileAutorPins() > 0) { echo resProfileAutorPins(); } else { echo "0"; } } else { echo "0"; } ?>
 постов
</div>
<div align='center' id='user-board<?php echo resProfileId(); ?>' class='colboard'><?php if (resProfileAutorBoards()) { if (resProfileAutorBoards() > 0) { echo resProfileAutorBoards(); } else { echo "0"; } } else { echo "0"; } ?>
 альбомов
</div>

<div align='center' id='user-ava<?php echo resProfileId(); ?>' class='user-avatar'>
<div align='center' class='my-avatar'>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pict-avatar' src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); } else { echo "default-male-100.gif"; } ?>' align='center' width='64px' alt='user'/></a>

</div>
</div>

</div>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(0)) {echo resPinTagThumb(0); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(1)) {echo resPinTagThumb(1); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(2)) {echo resPinTagThumb(2); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(3)) {echo resPinTagThumb(3); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(4)) {echo resPinTagThumb(4); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='lastuser'  src='http://pinct.ru/tag/<?php if (resPinTagThumb(5)) {echo resPinTagThumb(5); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='sub-author' id='sub<?php echo resProfileId(); ?>' href='' return='false'><div align='center' class='subscribe' id='sub<?php echo resProfileId(); ?>'>Подписаться</div></a>
<a class='unsub-author' id='unsub<?php echo resProfileId(); ?>' href='' return='false'><div align='center' class='unsubscribe' id='unsub<?php echo resProfileId(); ?>'>Отписаться</div></a>


<span class='follow-sub'><b>
<?php 
dataFollow2(resFollowObj($q), false);
if (rowsFollow2()) {
if (rowsFollow2() > 0) {
echo "+" . rowsFollow2(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
</b> Подписчиков</span>
<br><br>
</div>
	
  </div>
</div>







<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll=2&i=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

document.title = "Подписчики пользователя <?php echo resFollowUsers(0); ?>";


///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);


<?php
	  
if (rowsFollow()) {
for($c=0; $c<=rowsFollow(); $c++) { 
	  
mySubsribe(resFollowObjId($c));
	  
}
}
	  
?>



$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&w='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });


myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsFollow() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		
      }
    );
    
  });
  
 loadMason();
  
</script>
	
 <!-- #content -->

	
	
<?php
	
}

}
elseif ($url3 == 'followings'){

?>

<br><br><br><br>

<?php dataProfile($url2, false); ?>

<div align='center' id='user' class='back-user' style='background-image: url(http://pinct.ru/user/<?php 
if (resProfileCover()) { echo resProfileCover(); } else { echo "cover.png"; } ?>)!important;'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo resProfileName(); ?>

<?php echo resProfileSoname(); ?>

</span><span class='city'>
<?php echo resProfileCity(); ?>
,
 <?php echo resProfileCountry(); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (resProfileAbout()) {
echo resProfileAbout(); 
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
<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
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
<img src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); }
else { echo "default-male-100.gif"; } ?>' align='center' width='100px' alt='user'/>
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
 
 <div align='center' id='menu-pin' class="menucapt">
<div align='center' id='menu-boxed' class="menuboxed">

<ul>
   <li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><b>

<?php 

if (resProfileAutorPins()) {
if (resProfileAutorPins() > 0) {
echo resProfileAutorPins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Постов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/boards' return='false'><b>

<?php 

if (resProfileAutorBoards()) {
if (resProfileAutorBoards() > 0) {
echo resProfileAutorBoards(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Альбомов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/likes' return='false'><b>

<?php 

if (resProfileAutorLikes()) {
if (resProfileAutorLikes() > 0) {
echo resProfileAutorLikes(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Лайка<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/repins' return='false'><b>

<?php 

if (resProfileAutorRepins()) {
if (resProfileAutorRepins() > 0) {
echo resProfileAutorRepins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Репоста<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followers' return='false'><b>

<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписчика<a>
</li>
<li style='background-color: #969696!important; color: #ffffff!important;'>
<a style='color: #ffffff!important;' class='profile' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followings' return='false'><b style='color: #ffffff!important;'>

<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписок<a>
</li>
<li>
<a href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/account-plus' code='Аккаунт+' return='false'>Аккаунт+<a>
</li>
<li>
<a href='http://pinct.ru/settings' return='false'><b>Редактировать профиль</b><a>
</li>
<li>
<a href='#' return='false'><b>Ещё</b><a>
</li>
</ul>

</div>
</div>
 
 <br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<?php 
 

$q=0;
dataFollowing($url2, false);
if (rowsFollowing()) {
for($q=0; $q<=9; $q++) { 
dataProfile(resFollowingObj($q), $sort);
dataPin("pin", "autorid", resFollowingObjId($q), "", false);
if (resProfileName()) {
?>

<div class='box col4' id='user<?php echo resProfileId(); ?>'>

<div align='center' id='user<?php echo resProfileId(); ?>' class='section-user'>
<div align='center' id='user-name<?php echo resProfileId(); ?>' class='my-user'>
<div align='center' id='user-name<?php echo resProfileId(); ?>' class='username'>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><?php echo resProfileName() . " " . resProfileSoname(); ?></a></div>
<div align='center' id='col<?php echo resProfileId(); ?>' class='my-col'>
<div align='center' id='user-post<?php echo resProfileId(); ?>' class='colpost'><?php if (resProfileAutorPins()) { if (resProfileAutorPins() > 0) { echo resProfileAutorPins(); } else { echo "0"; } } else { echo "0"; } ?>
 постов
</div>
<div align='center' id='user-board<?php echo resProfileId(); ?>' class='colboard'><?php if (resProfileAutorBoards()) { if (resProfileAutorBoards() > 0) { echo resProfileAutorBoards(); } else { echo "0"; } } else { echo "0"; } ?>
 альбомов
</div>

<div align='center' id='user-ava<?php echo resProfileId(); ?>' class='user-avatar'>
<div align='center' class='my-avatar'>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pict-avatar' src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); } else { echo "default-male-100.gif"; } ?>' align='center' width='64px' alt='user'/></a>

</div>
</div>

</div>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(0)) {echo resPinTagThumb(0); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(1)) {echo resPinTagThumb(1); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(2)) {echo resPinTagThumb(2); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(3)) {echo resPinTagThumb(3); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(4)) {echo resPinTagThumb(4); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='lastuser'  src='http://pinct.ru/tag/<?php if (resPinTagThumb(5)) {echo resPinTagThumb(5); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='sub-author' id='sub<?php echo resProfileId(); ?>' href='' return='false'><div align='center' class='subscribe' id='sub<?php echo resProfileId(); ?>'>Подписаться</div></a>
<a class='unsub-author' id='unsub<?php echo resProfileId(); ?>' href='' return='false'><div align='center' class='unsubscribe' id='unsub<?php echo resProfileId(); ?>'>Отписаться</div></a>


<span class='follow-sub'><b>
<?php 
dataFollow2(resFollowingObj($q), false);
if (rowsFollow2()) {
if (rowsFollow2() > 0) {
echo "+" . rowsFollow2(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
</b> Подписчиков</span>
<br><br>
</div>
	
  </div>
</div>







<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll=2&i=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

document.title = "Подписки пользователя <?php echo resFollowingUsers(0); ?>";


///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);


<?php
	  
if (rowsFollowing()) {
for($c=0; $c<=rowsFollowing(); $c++) { 
	  
mySubsribe(resFollowingObjId($c));
	  
}
}
	  
?>



$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&w='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });


myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsFollow() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		
      }
    );
    
  });
  
 loadMason();
  
</script>
	
 <!-- #content -->

	
	
<?php
	
}

}
elseif ($url3 == 'account-plus'){

?>

<br><br><br><br>

<?php dataProfile($url2, false); ?>

<div align='center' id='user' class='back-user' style='background-image: url(http://pinct.ru/user/<?php 
if (resProfileCover()) { echo resProfileCover(); } else { echo "cover.png"; } ?>)!important;'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo resProfileName(); ?>

<?php echo resProfileSoname(); ?>

</span><span class='city'>
<?php echo resProfileCity(); ?>
,
 <?php echo resProfileCountry(); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (resProfileAbout()) {
echo resProfileAbout(); 
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
<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
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
<img src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); }
else { echo "default-male-100.gif"; } ?>' align='center' width='100px' alt='user'/>
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
 
 <div align='center' id='menu-pin' class="menucapt">
<div align='center' id='menu-boxed' class="menuboxed">

<ul>
   <li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><b>

<?php 

if (resProfileAutorPins()) {
if (resProfileAutorPins() > 0) {
echo resProfileAutorPins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Постов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/boards' return='false'><b>

<?php 

if (resProfileAutorBoards()) {
if (resProfileAutorBoards() > 0) {
echo resProfileAutorBoards(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Альбомов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/likes' return='false'><b>

<?php 

if (resProfileAutorLikes()) {
if (resProfileAutorLikes() > 0) {
echo resProfileAutorLikes(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Лайка<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/repins' return='false'><b>

<?php 

if (resProfileAutorRepins()) {
if (resProfileAutorRepins() > 0) {
echo resProfileAutorRepins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Репоста<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followers' return='false'><b>

<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписчика<a>
</li>
<li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followings' return='false'><b>

<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписок<a>
</li>
<li style='background-color: #969696!important; color: #ffffff!important;'>
<a class='myauthor' style='color: #ffffff!important;' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/account-plus' code='Аккаунт+' return='false'>Аккаунт+<a>
</li>
<li>
<a class='myauthor' href='http://pinct.ru/settings' return='false'><b>Редактировать профиль</b><a>
</li>
<li>
<a href='#' return='false'><b>Ещё</b><a>
</li>
</ul>

</div>
</div>
 
 <br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>



<div class='account-plus'>
  <div class='columns clearfix'>
    <div class='column'>
      <h4 class='title-3 center bgcolor-2 color-5 border-color-1' style='margin: 0px; padding: 18px 0px 20px; font-size: 18px; line-height: 22px; font-weight: bold; color: rgb(255, 255, 255); border-color: rgb(197, 65, 51); text-align: center; border-radius: 3px 3px 0px 0px; border-bottom-width: 3px; border-bottom-style: solid; position: relative; background-color: rgb(231, 76, 60);'>Аккаунт Lite<a href='' title='' class='button-qmark event-tooltip' style='margin: 0px 0px 0px -13px; padding: 0px; text-decoration: none; color: rgb(102, 118, 134); display: inline-block; width: 26px; height: 26px; border: 2px solid rgb(255, 255, 255); text-indent: -50000px; border-radius: 50%; position: absolute; left: 118px; bottom: -15px; background-image: url(http://pinct.ru/img/icon-qmark.png); background-color: rgb(229, 229, 229); background-position: 50% 50%; background-repeat: no-repeat;'>?</a></h4>
      <ul class='features' style='margin: 0px; padding: 0px; list-style-type: none; text-align: center; width: 236px; display: table; color: rgb(102, 118, 134); font-size: 14px; line-height: 18px;'>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgb(231, 235, 236); vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>1 месяц</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Все пользователи с похожими интересами автоматически следуют за Вами</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие рекламы</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие спама</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Неограниченная загрузка фото и видео</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Возможность скрывать посты и альбомы</span></li>
      </ul>
      <p class='price color-4' style='margin: 0px; padding: 15px 0px 21px; color: rgb(231, 76, 60); text-align: center; font-size: 30px; line-height: 34px; font-weight: bold; background-color: rgb(231, 235, 236);'><s>P</s> 1.000</p>
      <p class='order center bgcolor-1' style='margin: 0px; padding: 15px 0px; text-align: center; border-radius: 0px 0px 3px 3px; background-color: rgb(255, 255, 255);'><a href='' data-id='3' class='event-add-subscribe button button-color-1 button-size-small' style='margin: 0px; padding: 10px 20px; text-decoration: none; color: rgb(255, 255, 255); display: inline-block; font-size: 13px; line-height: 13px; font-weight: bold; border-radius: 5px; transition: all 0.2s ease-out; border: 1px solid rgb(231, 76, 60); background-color: rgb(231, 76, 60);'>Купить</a></p>
    </div>
    <div class='column' style='margin: 0px 14px 0px 0px; padding: 0px; float: left; width: 236px;'>
      <h4 class='title-3 center bgcolor-3 color-5 border-color-2' style='margin: 0px; padding: 18px 0px 20px; font-size: 18px; line-height: 22px; font-weight: bold; color: rgb(255, 255, 255); border-color: rgb(0, 166, 156); text-align: center; border-radius: 3px 3px 0px 0px; border-bottom-width: 3px; border-bottom-style: solid; position: relative; background-color: rgb(26, 188, 156);'>Аккаунт Business<a href='' title='' class='button-qmark event-tooltip' style='margin: 0px 0px 0px -13px; padding: 0px; text-decoration: none; color: rgb(102, 118, 134); display: inline-block; width: 26px; height: 26px; border: 2px solid rgb(255, 255, 255); text-indent: -50000px; border-radius: 50%; position: absolute; left: 118px; bottom: -15px; background-image: url(http://pinct.ru/img/icon-qmark.png); background-color: rgb(229, 229, 229); background-position: 50% 50%; background-repeat: no-repeat;'>?</a></h4>
      <ul class='features' style='margin: 0px; padding: 0px; list-style-type: none; text-align: center; width: 236px; display: table; color: rgb(102, 118, 134); font-size: 14px; line-height: 18px;'>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgb(231, 235, 236); vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>2 месяца</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Все пользователи с похожими интересами автоматически следуют за Вами</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие рекламы</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие спама</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Неограниченная загрузка фото и видео</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Возможность скрывать посты и альбомы</span></li>
        
      </ul>
      <p class='price color-7' style='margin: 0px; padding: 15px 0px 21px; color: rgb(26, 188, 156); text-align: center; font-size: 30px; line-height: 34px; font-weight: bold; background-color: rgb(231, 235, 236);'><s>P</s> 2.000</p>
      <p class='order center bgcolor-1' style='margin: 0px; padding: 15px 0px; text-align: center; border-radius: 0px 0px 3px 3px; background-color: rgb(255, 255, 255);'><a href='' data-id='3' class='event-add-subscribe button button-color-1 button-size-small' style='margin: 0px; padding: 10px 20px; text-decoration: none; color: rgb(255, 255, 255); display: inline-block; font-size: 13px; line-height: 13px; font-weight: bold; border-radius: 5px; transition: all 0.2s ease-out; border: 1px solid rgb(26, 188, 156); background-color: rgb(26, 188, 156);'>Купить</a></p>
    </div>
    <div class='column' style='margin: 0px 14px 0px 0px; padding: 0px; float: left; width: 236px;'>
      <h4 class='title-3 center bgcolor-4 color-5 border-color-3' style='margin: 0px; padding: 18px 0px 20px; font-size: 18px; line-height: 22px; font-weight: bold; color: rgb(255, 255, 255); border-color: rgb(245, 153, 54); text-align: center; border-radius: 3px 3px 0px 0px; border-bottom-width: 3px; border-bottom-style: solid; position: relative; background-color: rgb(251, 175, 93);'>Аккаунт Gold<a href='' title='' class='button-qmark event-tooltip' style='margin: 0px 0px 0px -13px; padding: 0px; text-decoration: none; color: rgb(102, 118, 134); display: inline-block; width: 26px; height: 26px; border: 2px solid rgb(255, 255, 255); text-indent: -50000px; border-radius: 50%; position: absolute; left: 118px; bottom: -15px; background-image: url(http://pinct.ru/img/icon-qmark.png); background-color: rgb(229, 229, 229); background-position: 50% 50%; background-repeat: no-repeat;'>?</a></h4>
      <ul class='features' style='margin: 0px; padding: 0px; list-style-type: none; text-align: center; width: 236px; display: table; color: rgb(102, 118, 134); font-size: 14px; line-height: 18px;'>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgb(231, 235, 236); vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>3 месяца</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Все пользователи с похожими интересами автоматически следуют за Вами</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие рекламы</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие спама</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Неограниченная загрузка фото и видео</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Возможность скрывать посты и альбомы</span></li>
      </ul>
      <p class='price color-9' style='margin: 0px; padding: 15px 0px 21px; color: rgb(251, 175, 93); text-align: center; font-size: 30px; line-height: 34px; font-weight: bold; background-color: rgb(231, 235, 236);'><s>P</s> 3.000</p>
      <p class='order center bgcolor-1' style='margin: 0px; padding: 15px 0px; text-align: center; border-radius: 0px 0px 3px 3px; background-color: rgb(255, 255, 255);'><a href='' data-id='1' class='event-add-subscribe button button-color-7 button-size-small' style='margin: 0px; padding: 10px 20px; text-decoration: none; color: rgb(255, 255, 255); display: inline-block; font-size: 13px; line-height: 13px; font-weight: bold; border-radius: 5px; transition: all 0.2s ease-out; border: 1px solid rgb(251, 175, 93); background-color: rgb(251, 175, 93);'>Купить</a></p>
    </div>
    <div class='column' style='margin: 0px; padding: 0px; float: left; width: 236px;'>
      <h4 class='title-3 center bgcolor-2 color-5 border-color-1' style='margin: 0px; padding: 18px 0px 20px; font-size: 18px; line-height: 22px; font-weight: bold; color: rgb(255, 255, 255); border-color: #2b63d3; text-align: center; border-radius: 3px 3px 0px 0px; border-bottom-width: 3px; border-bottom-style: solid; position: relative; background-color: #52c1df;'>Аккаунт Premium<a href='' title='' class='button-qmark event-tooltip' style='margin: 0px 0px 0px -13px; padding: 0px; text-decoration: none; color: rgb(102, 118, 134); display: inline-block; width: 26px; height: 26px; border: 2px solid rgb(255, 255, 255); text-indent: -50000px; border-radius: 50%; position: absolute; left: 118px; bottom: -15px; background-image: url(http://pinct.ru/img/icon-qmark.png); background-color: rgb(229, 229, 229); background-position: 50% 50%; background-repeat: no-repeat;'>?</a></h4>
      <ul class='features' style='margin: 0px; padding: 0px; list-style-type: none; text-align: center; width: 236px; display: table; color: rgb(102, 118, 134); font-size: 14px; line-height: 18px;'>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgb(231, 235, 236); vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>6 месяцев</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Все пользователи с похожими интересами автоматически следуют за Вами</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие рекламы</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие спама</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Неограниченная загрузка фото и видео</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Возможность скрывать посты и альбомы</span></li>
      </ul>
      <p class='price color-4' style='margin: 0px; padding: 15px 0px 21px; color: #52c1df; text-align: center; font-size: 30px; line-height: 34px; font-weight: bold; background-color: rgb(231, 235, 236);'><s>P</s> 6.000</p>
      <p class='order center bgcolor-1' style='margin: 0px; padding: 15px 0px; text-align: center; border-radius: 0px 0px 3px 3px; background-color: rgb(255, 255, 255);'><a href='' data-id='4' class='event-add-subscribe button button-color-1 button-size-small' style='margin: 0px; padding: 10px 20px; text-decoration: none; color: rgb(255, 255, 255); display: inline-block; font-size: 13px; line-height: 13px; font-weight: bold; border-radius: 5px; transition: all 0.2s ease-out; border: 1px solid #52c1df; background-color: #52c1df;'>Купить</a></p>
    </div>
  </div>

</div>



  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll=2&i=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

document.title = "Аккаунт+";


<?php
	  
if (rowsBoards()) {
for($g=0; $g<=rowsBoards(); $g++) { 
	  
boardSubsribe(resBoardsId($g));
	  
}
}
	  
?>

///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
					
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		

myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>

	
 <!-- #content -->

	
	
<?php
	


}

// просто user и ajax
else {

?>

<br><br><br><br>

<?php dataProfile($url2, false); ?>

<div align='center' id='user' class='back-user' style='background-image: url(http://pinct.ru/user/<?php 
if (resProfileCover()) { echo resProfileCover(); } else { echo "cover.png"; } ?>)!important;'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo resProfileName(); ?>

<?php echo resProfileSoname(); ?>

</span><span class='city'>
<?php echo resProfileCity(); ?>
,
 <?php echo resProfileCountry(); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (resProfileAbout()) {
echo resProfileAbout(); 
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
<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
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
<img src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); }
else { echo "default-male-100.gif"; } ?>' align='center' width='100px' alt='user'/>
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
 
 <div align='center' id='menu-pin' class="menucapt">
<div align='center' id='menu-boxed' class="menuboxed">

<ul>
   <li style='background-color: #969696!important; color: #ffffff!important;'>
<a style='color: #ffffff!important;' class='profile' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><b style='color: #ffffff!important;'>

<?php 

if (resProfileAutorPins()) {
if (resProfileAutorPins() > 0) {
echo resProfileAutorPins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Постов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/boards' return='false'><b>

<?php 

if (resProfileAutorBoards()) {
if (resProfileAutorBoards() > 0) {
echo resProfileAutorBoards(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Альбомов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/likes' return='false'><b>

<?php 

if (resProfileAutorLikes()) {
if (resProfileAutorLikes() > 0) {
echo resProfileAutorLikes(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Лайка<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/repins' return='false'><b>

<?php 

if (resProfileAutorRepins()) {
if (resProfileAutorRepins() > 0) {
echo resProfileAutorRepins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Репоста<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followers' return='false'><b>

<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписчика<a>
</li>
<li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followings' return='false'><b>

<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписок<a>
</li>
<li>
<a href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/account-plus' code='Аккаунт+' return='false'>Аккаунт+<a>
</li>
<li>
<a href='http://pinct.ru/settings' return='false'><b>Редактировать профиль</b><a>
</li>
<li>
<a href='#' return='false'><b>Ещё</b><a>
</li>
</ul>

</div>
</div>
 
 <br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

 <?php 
 
dataPin("pin", "$url1", "$url2", "", false);

$q=0;
if (rowsPin()) {
for($q=0; $q<=9; $q++) { 
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

<div align='center' id='puzo' class='puzomerki'>
<div align='center' class='small-like' id='small-likes<?php echo resPinId($q); ?>'><?php echo resPinLikes($q); ?></div><div align='center' class='small-repin'><?php echo resPinRepins($q); ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo resPinComments($q); ?>&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll=2&r=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsPin() > 5) { ?>

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
	  
	  
<?php } ?>

document.title = "Посты пользователя <?php echo resProfileUsers(); ?>";


<?php 
$s=0;
for($s=0; $s<=10; $s++) { 
if (resPinName($s)) {

myPin(resPinId($s));

}

}

?>

///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		
		
/* потом вставить в категории, когда будет больше пинов

         $('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&random<?php echo $myRand3; ?>='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
					
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });

            $(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&random<?php echo $myRand4; ?>='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });

*/



myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsPin() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&v='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Категория";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
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


elseif ($url1 == 'category'){



?>
<br><br>


<?php
dataPin("pin", "$url1", "$url2", "", false);
dataCategory("$url2", false);
?>

<div class='caption'>
<div class='category'>

<h1><?php echo resCategoryName(); ?></h1>

</div>
</div>
 
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

 <?php 

$q=0;
if (rowsPin()) {
for($q=0; $q<=9; $q++) { 
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

<div align='center' id='puzo' class='puzomerki'>
<div align='center' class='small-like' id='small-likes<?php echo resPinId($q); ?>'><?php echo resPinLikes($q); ?></div><div align='center' class='small-repin'><?php echo resPinRepins($q); ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo resPinComments($q); ?>&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll=2&r=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsPin() > 5) { ?>

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
	  
	  
<?php } ?>

document.title = "<?php echo resCategoryName(); ?>";


<?php 
$s=0;
for($s=0; $s<=10; $s++) { 
if (resPinName($s)) {

myPin(resPinId($s));

}

}

?>

///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
					
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		
		
/* потом вставить в категории, когда будет больше пинов

         $('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&random<?php echo $myRand3; ?>='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });

            $(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&random<?php echo $myRand4; ?>='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });

*/



myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsPin() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&v='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Категория";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
					
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
	
<?php } ?>



   <!-- #content -->

<?php 

}


// если теги и аякс
elseif ($url1 == 'tags'){

?>
<br><br>


<?php

dataGetTags($url2, false);

?>

<div class='caption'>
<div class='category'>

<h1>#<?php echo resGetTagsName(0); ?></h1>

</div>
</div>
 
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

 <?php 

$j=0;
$stepp = rowsGetTags() - 1;
if (rowsGetTags()) {
for($j=0; $j<=$stepp; $j++) { 
dataPin("pin", $ids, resGetTagsPinId($j), "", false);

if (rowsPin()) {

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

<div align='center' id='puzo' class='puzomerki'>
<div align='center' class='small-like' id='small-likes<?php echo resPinId($q); ?>'><?php echo resPinLikes($q); ?></div><div align='center' class='small-repin'><?php echo resPinRepins($q); ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo resPinComments($q); ?>&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

<?php  } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll=2&e=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsPin() > 5) { ?>

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
	  
	  
<?php } ?>

<?php

$x=0;
if (rowsGetTags()) {
for($x=0; $x<=rowsGetTags(); $x++) { 
if (rowsGetTags()) {

myPin(resGetTagsPinId($x));

}

}

}

?>
$(document).ready(function(){
<?php

$a=0;
if (rowsGetTags()) {
for($a=0; $a<=rowsGetTags(); $a++) { 
if (rowsGetTags()) {

myPin2(resGetTagsPinId($a));

}

}

}
?>

});

document.title = "Хэш-тег #<?php echo resGetTagsName(0); ?>";




///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>



        $(document).ready(function() {  
	  
	  
// нашёл

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		
		
/* потом вставить в категории, когда будет больше пинов

         $('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&random<?php echo $myRand3; ?>='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });

            $(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&random<?php echo $myRand4; ?>='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });

*/



myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsGetTags() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&v='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Категория";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
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
	
<?php } ?>



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
for($q=0; $q<=9; $q++) { 
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

<div align='center' id='puzo' class='puzomerki'>
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


<nav id='page-nav'>

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

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000); 

<?php 

$myRand = rand(1, 999);
$s=0;
for($s=0; $s<=10; $s++) { 
if (resPinName($s)) {

myPin(resPinId($s));

}

}

?>

///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>
        $(document).ready(function() {
		
            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&u='+window.randomAjax2,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });

myScript<?php echo $myRand3; ?> = 2;
			
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
		
		$.getScript('http://pinct.ru/ajax/js.php?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&y='+window.randomAjax4,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
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

elseif ($_GET['pin-view']){
if ($url1 == 'pin') {

?>


<div id='box-img' class='box-view'>
  
</div>

<div align='center' id='zoom-img' class='box-zoom'>
  
<div id='dark888' class='box-dark'>
  
<div id='close-dark888' class='close-dark'></div>
  
</div>

<div align='center' id='photo-dark888' class='boxed-dark'></div>

</div>

<div align='center' id='photo-view' class='boxed-view'>
<div align='center'>

<a href='' id='user-left888' class='my-left' return='false'><div id='left888' class='left-view'></div></a>

<div id='close888' class='close-view'></div>

<a href='' id='user-right888' class='my-right' return='false'><div id='right888' class='right-view'></div></a>

<div id='load-view'>

<div align='center' id='left-photo888' class='main-left'>

<div id='social888' class='social-view'>

<?php dataViewPin($url2, false); ?>

<a href='' id='user-facebook888' class='facebook-this' return='false'><div id='facebook888' class='facebook-view'>
<div id='tooltip-facebook-view' class='navtooltip'>
 facebook<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-google888' class='google-this' return='false'><div id='google888' class='google-view'>
<div id='tooltip-google-view' class='navtooltip'>
 google&nbsp;+1<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-vkontakte888' class='vkontakte-this' return='false'><div id='vkontakte888' class='vkontakte-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 вконтакте<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-mail-ru888' class='mail-ru-this' return='false'><div id='mail-ru888' class='mail-ru-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 майл.ru<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-odnoklassniki888' class='odnoklassniki-this' return='false'><div id='odnoklassniki888' class='odnoklassniki-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 одноклассники<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-twitter888' class='twitter-this' return='false'><div id='twitter888' class='twitter-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 твиттер<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-mail888' class='mail-this' return='false'><div id='mail888' class='mail-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 письмо&nbsp;другу<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-reports888' class='reports-this' return='false'><div id='err888' class='reports-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 нашли&nbsp;ошибку?<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-code888' class='code-this' return='false'><div id='code888' class='code-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 получить&nbsp;код<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

</div>



<div align='center' id='fix888' class='fix-left'>

<div align='center' id='photo888' class='main-photo'>

<h1><?php echo resViewPinName(); ?></h1>

<div align='center' id='this888' class='this-photo'><a target='_blank' href='http://pinct.ru/bigpins/<?php echo resViewPinView(); ?>' class='only-this-photo' id='only-this888'><img id='my-img888' class='this-img' src='http://pinct.ru/bigpins/<?php echo resViewPinView(); ?>' alt='Чёрный кот' title='Чёрный кот' align='bottom' /></a></div>

</div>


<?php

/*      only likes

<div align='center' id='puzomerki888' class='main-cool'>

<div align='left' class='only-like-cat'>Лайки</div>
<div align='center' id='only-like-this888' class='only-like-photo'>

<a href='' id='only-user-like888' class='only-my-this' return='false'><div align='center' id='only-user-like888' class='only-my-this'><img id='only-like-img888' class='only-this-like' src='http://pinct.ru/user/100.jpg' width='50px' alt='scanderberg' align='center' /></div></a><a href='' id='only-user-like888' class='only-my-this' return='false'><div align='center' id='only-user-like888' class='only-my-this'><img id='only-like-img888' class='only-this-like' src='http://pinct.ru/user/1416427575i4e08-150x150.jpg' width='50px' alt='vyumsh' align='center' /></div></a><a href='' id='only-user-like888' class='only-my-this' return='false'><div align='center' id='only-user-like888' class='only-my-this'><img id='only-like-img888' class='only-this-like' src='http://pinct.ru/user/14164245112nk04.jpg' width='50px' alt='culwork' align='center' /></div></a>
<span class='like-count'>&nbsp;&nbsp;&nbsp;ещё +10</span>
</div>

</div>

*/

/*      only repins

<div align='center' id='puzomerki888' class='main-cool'>

<div align='left' class='only-repin-cat'>Репосты</div>
<div align='center' id='only-repin-this888' class='only-repin-photo'>

<a href='' id='only-user-repin888' class='only-my-repin' return='false'><div align='center' id='only-user-repin888' class='only-my-repin'><img id='only-repin-img888' class='only-this-repin' src='http://pinct.ru/user/100.jpg' width='50px' alt='scanderberg' align='center' /></div></a><a href='' id='only-user-repin888' class='only-my-repin' return='false'><div align='center' id='only-user-repin888' class='only-my-repin'><img id='only-repin-img888' class='only-this-repin' src='http://pinct.ru/user/1416427575i4e08-150x150.jpg' width='50px' alt='vyumsh' align='center' /></div></a><a href='' id='only-user-repin888' class='only-my-repin' return='false'><div align='center' id='only-user-repin888' class='only-my-repin'><img id='only-repin-img888' class='only-this-repin' src='http://pinct.ru/user/14164245112nk04.jpg' width='50px' alt='culwork' align='center' /></div></a>
<span class='repin-count'>ещё +10</span>
</div>

</div>
*/

?>


<div align='center' id='puzomerki888' class='main-cool'>

<div align='left' class='like-cat'>Лайки</div>
<div align='center' id='like-this888' class='like-photo'>

<a href='' id='user-like888' class='my-this' return='false'><div align='center' id='user-like888' class='my-this'><img id='like-img888' class='this-like' src='http://pinct.ru/user/100.jpg' width='50px' alt='scanderberg' align='center' /></div></a><a href='' id='user-like888' class='my-this' return='false'><div align='center' id='user-like888' class='my-this'><img id='like-img888' class='this-like' src='http://pinct.ru/user/1416427575i4e08-150x150.jpg' width='50px' alt='vyumsh' align='center' /></div></a><a href='' id='user-like888' class='my-this' return='false'><div align='center' id='user-like888' class='my-this'><img id='like-img888' class='this-like' src='http://pinct.ru/user/14164245112nk04.jpg' width='50px' alt='culwork' align='center' /></div></a>
<span class='like-count'>ещё +10</span>
</div>

<div align='left' class='repin-cat'>Репосты</div>
<div align='center' id='repin-this888' class='repin-photo'>

<a href='' id='user-repin888' class='my-repin' return='false'><div align='center' id='user-repin888' class='my-repin'><img id='repin-img888' class='this-repin' src='http://pinct.ru/user/100.jpg' width='50px' alt='scanderberg' align='center' /></div></a><a href='' id='user-repin888' class='my-repin' return='false'><div align='center' id='user-repin888' class='my-repin'><img id='repin-img888' class='this-repin' src='http://pinct.ru/user/1416427575i4e08-150x150.jpg' width='50px' alt='vyumsh' align='center' /></div></a><a href='' id='user-repin888' class='my-repin' return='false'><div align='center' id='user-repin888' class='my-repin'><img id='repin-img888' class='this-repin' src='http://pinct.ru/user/14164245112nk04.jpg' width='50px' alt='culwork' align='center' /></div></a>
<span class='repin-count'>ещё +10</span>
</div>

</div>

<div align='left' id='max-desqus117' class='max-desqus'>

<h2 align='center'>Комментарии</h2>

<div align='left' id='max-comment117' class='max-comment'>
<a href='' return='false'><img class='max-comment' src='http://pinct.ru/user/14164245112nk04.jpg' align='left' width='35px'/></a>

<div align='left' class='max-reply'>
<img class='tik' src='http://pinct.ru/img/tik-comment.png' align='left' width='15px'/>
<b class='max-user'>
culwork | 15:03:15</b>
<br>
Привет! Как дела? Скоро лето2!</div>

</div>

<div align='left' id='max-comment145' class='max-comment'>
<a href='' return='false'><img class='max-comment2' src='http://pinct.ru/user/100.jpg' align='right' width='35px'/></a>

<div align='left' class='max-reply2'>
<img class='tik' src='http://pinct.ru/img/tik-comment2.png' align='right' width='15px'/>
<b class='max-user'>
scande.. | 15:03:15</b>
<br>
Привет! Как дела? Скоро лето!</div>

</div>


</div>


<div align='center' id='max-send117' class='max-send-comment'>

<form name='max-send-comment' id='max-send-comment117' method='GET' action='cat.php'>
  
  <textarea name='max-send-text' id='max-send117' placeholder='Кликните, чтобы ответить...'></textarea>
  <br>
  
<div align='center' id='max-my-send117' class='max-my-comment'>
<br>
  <input type='button' name='max-comment' id='max-comment' class='max-mycomment' value='комментировать'>
</div>
  
  
  </form>

</div>

</div>

</div>

<div align='center' id='myright888' class='main-right'>

<div align='center' id='autors888' class='main-autor'>

<div align='center' id='main-bar888' class='view-bar'>

<a href='' class='view-autor' id='click-myautor888' return='false'><div align='left' id='autor-bar888' class='view-autor'>
<img class='view-autor' id='autor-bar888' src='http://pinct.ru/user/100.jpg' align='left' width='70px'/>
<div id='tooltip-menu-myrepin' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>scanderberg
</div>
</div></a>

<a href='' class='view-myrepin' id='click-myrepin888' return='false'><div align='center' id='repin-bar888' class='view-repin'>
<div id='tooltip-menu-myrepin' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>репост
</div>
</div></a>
<a href='' class='view-mylike' id='click-mylike888' return='false'><div align='center' id='like-bar888' class='like-view'>
<div id='tooltip-menu-myrepin' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>лайк
</div>
</div></a>
<a href='' class='view-myunlike' id='click-myunlike888' return='false'><div align='center' id='unlike-bar888' class='unlike-view'>
<div id='tooltip-menu-myrepin' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>убрать&nbsp;лайк
</div>
</div></a>
<a href='' class='view-myreport' id='click-myreport888' return='false'><div align='center' id='report-bar888' class='report-view'>
<div id='tooltip-menu-myrepin' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>пожаловаться
</div>
</div></a>
<a target='_blank' href='http://pinct.ru/bigpins/570xN.551859075-view.jpg' class='view-myzoom' id='click-myzoom888' return='false'><div align='center' id='zoom-bar888' class='zoom-view'>
<div id='tooltip-menu-myrepin' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>увеличить
</div>
</div></a>

</div>

<div align='left' id='thumb-autor-view888' class='thumb-area'>

<div align='left' id='line-view888' class='line-thumb'>

<div align='left' id='one-view888' class='one-thumb'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='one-view888' class='one-thumb'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='one-view888' class='one-thumb' style='margin-right: 0px!important;'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='line-view888' class='line-thumb'>

<div align='left' id='one-view888' class='one-thumb'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>

<div align='left' id='one-view888' class='one-thumb' style='margin-right: 0px!important;'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='line-view888' class='line-thumb'>

<div align='left' id='one-view888' class='one-thumb'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='line-view888' class='line-thumb' style='margin-bottom: 0px!important;'>

<div align='left' id='one-view888' class='one-thumb'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='one-view888' class='one-thumb'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='one-view888' class='one-thumb' style='margin-right: 0px!important;'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

</div>

<a class='sub-author-view' id='author-view-sub888' href='' return='false'><div align='center' class='view-subscribe' id='author-view-sub888'>Подписаться</div></a>

<a class='unsub-author-view' id='author-view-unsub888' href='' return='false'><div align='center' class='view-unsubscribe' id='author-view-unsub888'>Отписаться</div></a>

<span class='follow-sub'><b>+10</b> Подписчиков</span>
<br><br>

<div align='center' id='count-stat888' class='count-numder'>

<div align='center' id='count-post888' class='post-numder'>
+17 Постов
</div>
<div align='center' id='count-board888' class='board-numder'>
+12 Альбомов
</div>

</div>

</div>

<div align='center' id='myboard-view888' class='main-board'>

<div align='left' id='board-bar888' class='board-autor'>
<img class='board-autor' id='board-bar888' src='http://pinct.ru/tag/54534223-hash.jpg' align='left' width='70px'/>
<br>
Ещё посты из альбома 
<a href='' class='board-link' id='board-noview888' return='false'>котики</a>
</div>

<div align='left' id='board-thumb-autor-view888' class='board-thumb-area'>

<div align='left' id='board-line-view888' class='board-line-thumb'>

<div align='left' id='board-one-view888' class='board-one-thumb'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='board-one-view888' class='board-one-thumb'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='board-one-view888' class='board-one-thumb' style='margin-right: 0px!important;'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='board-line-view888' class='board-line-thumb'>

<div align='left' id='board-one-view888' class='board-one-thumb'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>

<div align='left' id='board-one-view888' class='board-one-thumb' style='margin-right: 0px!important;'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='board-line-view888' class='board-line-thumb'>

<div align='left' id='board-one-view888' class='board-one-thumb'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>


</div>

<div align='left' id='board-line-view888' class='board-line-thumb' style='margin-bottom: 0px!important;'>

<div align='left' id='board-one-view888' class='board-one-thumb'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='board-one-view888' class='board-one-thumb'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='board-one-view888' class='board-one-thumb' style='margin-right: 0px!important;'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

</div>

<a class='sub-board-view' id='board-view-sub888' href='' return='false'><div align='center' class='view-subscribe' id='board-view-sub888'>Подписаться</div></a>

<a class='unsub-board-view' id='board-view-unsub888' href='' return='false'><div align='center' class='view-unsubscribe' id='board-view-unsub888'>Отписаться</div></a>

<span class='follow-sub'><b>+7</b> Подписчиков</span>
<br><br>

</div>

<div align='center' id='mycategory-view888' class='main-category'>

<div align='left' id='category-bar888' class='category-autor'>
<img class='category-autor' id='category-bar888' src='http://pinct.ru/category/cats.png' align='left' height='70px'/>
<br>
Ещё из категории
<a href='' class='category-link' id='category-noview888' return='false'>котики</a>
</div>

<div align='left' id='category-thumb-autor-view888' class='category-thumb-area'>

<div align='left' id='category-line-view888' class='category-line-thumb'>

<div align='left' id='category-one-view888' class='category-one-thumb'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='category-one-view888' class='category-one-thumb'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='category-one-view888' class='category-one-thumb' style='margin-right: 0px!important;'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='category-line-view888' class='category-line-thumb'>

<div align='left' id='category-one-view888' class='category-one-thumb'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>

<div align='left' id='category-one-view888' class='category-one-thumb' style='margin-right: 0px!important;'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='category-line-view888' class='category-line-thumb'>

<div align='left' id='category-one-view888' class='category-one-thumb'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>


</div>

<div align='left' id='category-line-view888' class='category-line-thumb' style='margin-bottom: 0px!important;'>

<div align='left' id='category-one-view888' class='category-one-thumb'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='category-one-view888' class='category-one-thumb'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='category-one-view888' class='category-one-thumb' style='margin-right: 0px!important;'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

</div>

</div>

</div>

</div>

</div>
</div>

<script type='text/javascript'>
$(document).ready(function() { 

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

event.preventDefault();
allHeight = $('div.boxed-view').height()+20;
fixHeight = 300;
heightSectionMain = $('#all-section-main').height();
scrollBody = $(window).scrollTop();


$('#all-section-main').animate({
'marginTop': '0px',
        'marginTop': '-='+window.resy+'px'

}, 0, function(){ 

$(this).toggleClass('fixed', true);
$(window).scrollTop(0);
$.getScript('http://pinct.ru/ajax/view-js.js');  

$('div.box-view').animate({
        'height': fixHeight+'px'

}, 0);

 });


 
 
 

 
$('div#load-view').delegate('div.box-view, div.close-view','click',function(){
event.preventDefault();
$('div.boxed-view').remove();
$('div.box-view').remove();
$('#all-section-main').toggleClass('fixed', false).animate({
'marginTop': '0px'
}, 0);
history.go(-1);
});

$(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?pin-view=1&w='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#load-view').html(data);
$('#all-section-main').toggleClass('fixed', false).animate({
'marginTop': '0px'
}, 0);
                    }
                });
            });




});


</script>

<?php

}
}

else {

if ($_SERVER['REQUEST_URI'] != '/'){


// перезагрузка - все пользователи
if ($url1 == 'all'){
if ($url2 == 'users'){

require_once '/var/www/pinct.ru/main/conf.php';
require_once '/var/www/pinct.ru/main/db.php';
require_once '/var/www/pinct.ru/main/options.php';
require_once '/var/www/pinct.ru/top.php';
require_once '/var/www/pinct.ru/chat.php';

?>

<br>

<div align='center' id='all-section-main' class='allcontent'>

<div align='center' id='main' class='content'>


<br><br>
 
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

    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<?php 
 

$q=0;
dataAllProfile(false);
if (rowsAllProfile()) {
for($q=0; $q<=9; $q++) { 
dataProfile(resAllProfileUsers($q), $sort);
dataPin("pin", "autorid", resAllProfileId($q), "", false);
if (resProfileName()) {
?>

<div class='box col4' id='user<?php echo resProfileId(); ?>'>

<div align='center' id='user<?php echo resProfileId(); ?>' class='section-user'>
<div align='center' id='user-name<?php echo resProfileId(); ?>' class='my-user'>
<div align='center' id='user-name<?php echo resProfileId(); ?>' class='username'>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><?php echo resProfileName() . " " . resProfileSoname(); ?></a></div>
<div align='center' id='col<?php echo resProfileId(); ?>' class='my-col'>
<div align='center' id='user-post<?php echo resProfileId(); ?>' class='colpost'><?php if (resProfileAutorPins()) { if (resProfileAutorPins() > 0) { echo resProfileAutorPins(); } else { echo "0"; } } else { echo "0"; } ?>
 постов
</div>
<div align='center' id='user-board<?php echo resProfileId(); ?>' class='colboard'><?php if (resProfileAutorBoards()) { if (resProfileAutorBoards() > 0) { echo resProfileAutorBoards(); } else { echo "0"; } } else { echo "0"; } ?>
 альбомов
</div>

<div align='center' id='user-ava<?php echo resProfileId(); ?>' class='user-avatar'>
<div align='center' class='my-avatar'>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pict-avatar' src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); } else { echo "default-male-100.gif"; } ?>' align='center' width='64px' alt='user'/></a>

</div>
</div>

</div>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(0)) {echo resPinTagThumb(0); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(1)) {echo resPinTagThumb(1); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(2)) {echo resPinTagThumb(2); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(3)) {echo resPinTagThumb(3); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(4)) {echo resPinTagThumb(4); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='lastuser'  src='http://pinct.ru/tag/<?php if (resPinTagThumb(5)) {echo resPinTagThumb(5); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='sub-author' id='sub<?php echo resProfileId(); ?>' href='' return='false'><div align='center' class='subscribe' id='sub<?php echo resProfileId(); ?>'>Подписаться</div></a>
<a class='unsub-author' id='unsub<?php echo resProfileId(); ?>' href='' return='false'><div align='center' class='unsubscribe' id='unsub<?php echo resProfileId(); ?>'>Отписаться</div></a>


<span class='follow-sub'><b>
<?php 
dataFollow2(resAllProfileUsers($q), false);
if (rowsFollow2()) {
if (rowsFollow2() > 0) {
echo "+" . rowsFollow2(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
</b> Подписчиков</span>
<br><br>
</div>
	
  </div>
</div>







<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll=2&i=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>
   document.createElement('aside');
   document.createElement('article');
   document.createElement('nav');
   document.createElement('header');
   document.createElement('footer');
   document.createElement('section');
  </script>

<!--[if lt IE 9]><script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script><![endif]-->

<script type='text/javascript'>

$(document).ready(function(){

document.title = "Все пользователи";

});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);


<?php
	  
if (rowsAllProfile()) {
for($b=0; $b<=rowsAllProfile(); $b++) { 
	  
mySubsribe(resAllProfileId($b));
	  
}
}
	  
?>
			
        });
		
// нашёл


     $(document).ready(function() {
		
		$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		
		
            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&d='+window.randomAjax1,
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
		
		$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		
            $('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&s='+window.randomAjax2,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });

            $(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&w='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });

myScript<?php echo $myRand3; ?> = 2;
			
        });
		
    </script>
	
<?php if (rowsAllProfile() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		   $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&z='+window.randomAjax4,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
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
	
</div>

</div><!-- #content -->

</body>
</html>

	
	
<?php
	
}
}

}

// перезагрузка страницы альбома
elseif ($url1 == 'boards'){

require_once '/var/www/pinct.ru/main/conf.php';
require_once '/var/www/pinct.ru/main/db.php';
require_once '/var/www/pinct.ru/main/options.php';
require_once '/var/www/pinct.ru/top.php';
require_once '/var/www/pinct.ru/chat.php';

?>

<br>

<div align='center' id='all-section-main' class='allcontent'>

<div align='center' id='main' class='content'>

<br><br>

<div class='caption'>
<div class='category' style='width: 250px!important;'>

<?php dataMyBoards ($url2, false); ?>

<h1>Альбом: <?php echo resMyBoardsName(0); ?></h1>

</div>
</div>
 
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<?php
dataPin("pin", "board", resMyBoardsName(0), "", false);

$q=0;
if (rowsPin()) {
for($q=0; $q<=9; $q++) { 
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

<div align='center' id='puzo' class='puzomerki'>
<div align='center' class='small-like' id='small-likes<?php echo resPinId($q); ?>'><?php echo resPinLikes($q); ?></div><div align='center' class='small-repin'><?php echo resPinRepins($q); ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo resPinComments($q); ?>&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll=2&r=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>
   document.createElement('aside');
   document.createElement('article');
   document.createElement('nav');
   document.createElement('header');
   document.createElement('footer');
   document.createElement('section');
  </script>

<!--[if lt IE 9]><script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script><![endif]-->

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsPin() > 5) { ?>

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
	  
	  
<?php } ?>


<?php 
$s=0;
for($s=0; $s<=10; $s++) { 
if (resPinName($s)) {

myPin(resPinId($s));

}

}

?>

///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
					
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		
		


         $('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&random<?php echo $myRand3; ?>='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });

            $(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&random<?php echo $myRand4; ?>='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });





myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsPin() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&v='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Категория";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
					
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
	
<?php } ?>


</div>

</div><!-- #content -->

</body>
</html>

<?php 

}

// перезагрузка страницы категории
elseif ($url1 == 'category'){

require_once '/var/www/pinct.ru/main/conf.php';
require_once '/var/www/pinct.ru/main/db.php';
require_once '/var/www/pinct.ru/main/options.php';
require_once '/var/www/pinct.ru/top.php';
require_once '/var/www/pinct.ru/chat.php';

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


<br><br>


<?php
dataPin("pin", "$url1", "$url2", "", false);
dataCategory("$url2", false);
?>

<div class='caption'>
<div class='category'>

<h1><?php echo resCategoryName(); ?></h1>

</div>
</div>
 
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

 <?php 

$q=0;
if (rowsPin()) {
for($q=0; $q<=9; $q++) { 
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

<div align='center' id='puzo' class='puzomerki'>
<div align='center' class='small-like' id='small-likes<?php echo resPinId($q); ?>'><?php echo resPinLikes($q); ?></div><div align='center' class='small-repin'><?php echo resPinRepins($q); ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo resPinComments($q); ?>&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll=2&r=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>
   document.createElement('aside');
   document.createElement('article');
   document.createElement('nav');
   document.createElement('header');
   document.createElement('footer');
   document.createElement('section');
  </script>

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsPin() > 5) { ?>

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
	  
<?php } ?>
	  
randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

});
  
  </script>
  
<script type='text/javascript'>
        $(document).ready(function() {
		
		$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		
		
            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&d='+window.randomAjax1,
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
		
		$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		
            $('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&s='+window.randomAjax2,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });

            $(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&w='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });

myScript<?php echo $myRand3; ?> = 2;
			
        });
		
    </script>
	
<?php if (rowsPin() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&z='+window.randomAjax4,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
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

<?php } ?>
	
<script type='text/javascript'>

$(document).ready(function(){

<?php 
for($o=0; $o<=10; $o++) { 
if (resPinName($o)) {

myPin(resPinId($o));
?>
$(window).scroll(function(){
bodyHeight = $('body').height();
$("#screen2").html("Высота: <b>"+bodyHeight+"</b>");

<?php 

myPin2(resPinId($o));

?>




});

<?php 

}
} 

?>

});





</script>


</div>

 
 
</div><!-- #content -->

</body>
</html>
   
   
   
   

<?php

}

// перезагрузка тегов
elseif ($url1 == 'tags'){

require_once '/var/www/pinct.ru/main/conf.php';
require_once '/var/www/pinct.ru/main/db.php';
require_once '/var/www/pinct.ru/main/options.php';
require_once '/var/www/pinct.ru/top.php';
require_once '/var/www/pinct.ru/chat.php';

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


<br><br>

<?php

dataGetTags($url2, false);

?>

<div class='caption'>
<div class='category'>

<h1>#<?php echo resGetTagsName(0); ?></h1>

</div>
</div>
 
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

 <?php 

$j=0;
$stepp = rowsGetTags() - 1;
if (rowsGetTags()) {
for($j=0; $j<=$stepp; $j++) { 
dataPin("pin", $ids, resGetTagsPinId($j), "", false);

if (rowsPin()) {

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

<div align='center' id='puzo' class='puzomerki'>
<div align='center' class='small-like' id='small-likes<?php echo resPinId($q); ?>'><?php echo resPinLikes($q); ?></div><div align='center' class='small-repin'><?php echo resPinRepins($q); ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo resPinComments($q); ?>&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

<?php  } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll=2&e=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>
   document.createElement('aside');
   document.createElement('article');
   document.createElement('nav');
   document.createElement('header');
   document.createElement('footer');
   document.createElement('section');
  </script>

<!--[if lt IE 9]><script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script><![endif]-->

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsPin() > 5) { ?>

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
	  
	  
<?php } ?>


 

 
<?php

$x=0;
if (rowsGetTags()) {
for($x=0; $x<=rowsGetTags(); $x++) { 
if (rowsGetTags()) {

myPin(resGetTagsPinId($x));

}

}

}

?>
$(document).ready(function(){
<?php

$a=0;
if (rowsGetTags()) {
for($a=0; $a<=rowsGetTags(); $a++) { 
if (rowsGetTags()) {

myPin2(resGetTagsPinId($a));

}

}

}
?>

});





document.title = "Хэш-тег #<?php echo resGetTagsName(0); ?>";




///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>



        $(document).ready(function() {  
	  
// нашёл

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		
		


         $('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&random<?php echo $myRand3; ?>='+window.randomAjax3,
					cache: false,
					async: true,
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
                    url:     location.pathname + '?ajax=1&random<?php echo $myRand4; ?>='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });





myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsGetTags() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&v='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Категория";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
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
	
<?php } ?>

</div><!-- #content -->

</div>

</body>
</html>
   
   
   
   
   
<?php 

}


// перезагрузка страницы пользователя
elseif ($url1 == 'users'){


if ($url3 == 'boards'){


require_once '/var/www/pinct.ru/main/conf.php';
require_once '/var/www/pinct.ru/main/db.php';
require_once '/var/www/pinct.ru/main/options.php';
require_once '/var/www/pinct.ru/top.php';
require_once '/var/www/pinct.ru/chat.php';

?>
<br>

<div align='center' id='all-section-main' class='allcontent'>

<div align='center' id='main' class='content'>

<br><br><br><br>

<?php dataProfile($url2, false); ?>

<div align='center' id='user' class='back-user' style='background-image: url(http://pinct.ru/user/<?php 
if (resProfileCover()) { echo resProfileCover(); } else { echo "cover.png"; } ?>)!important;'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo resProfileName(); ?>

<?php echo resProfileSoname(); ?>

</span><span class='city'>
<?php echo resProfileCity(); ?>
,
 <?php echo resProfileCountry(); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (resProfileAbout()) {
echo resProfileAbout(); 
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
<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
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
<img src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); }
else { echo "default-male-100.gif"; } ?>' align='center' width='100px' alt='user'/>
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
 
 <div align='center' id='menu-pin' class="menucapt">
<div align='center' id='menu-boxed' class="menuboxed">

<ul>
   <li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><b>

<?php 

if (resProfileAutorPins()) {
if (resProfileAutorPins() > 0) {
echo resProfileAutorPins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Постов<a>
</li><li style='background-color: #969696!important; color: #ffffff!important;'>
<a style='color: #ffffff!important;' class='profile' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/boards' return='false'><b style='color: #ffffff!important;'>

<?php 

if (resProfileAutorBoards()) {
if (resProfileAutorBoards() > 0) {
echo resProfileAutorBoards(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Альбомов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/likes' return='false'><b>

<?php 

if (resProfileAutorLikes()) {
if (resProfileAutorLikes() > 0) {
echo resProfileAutorLikes(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Лайка<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/repins' return='false'><b>

<?php 

if (resProfileAutorRepins()) {
if (resProfileAutorRepins() > 0) {
echo resProfileAutorRepins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Репоста<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followers' return='false'><b>

<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписчика<a>
</li>
<li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followings' return='false'><b>

<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписок<a>
</li>
<li>
<a href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/account-plus' code='Аккаунт+' return='false'>Аккаунт+<a>
</li>
<li>
<a href='http://pinct.ru/settings' return='false'><b>Редактировать профиль</b><a>
</li>
<li>
<a href='#' return='false'><b>Ещё</b><a>
</li>
</ul>

</div>
</div>
 
 <br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<?php 
 
dataBoards("$url2", false);
$q=0;

if (rowsBoards()) {
for($q=0; $q<=rowsBoards(); $q++) { 
dataPin("pin", "board", resBoardsName($q), "", false);
dataFollow(resBoardsUsers($q), false);
if (resBoardsName($q)) {
?>

<div class='box col4' id='board<?php echo resBoardsId($q); ?>'>

<div align='center' id='board<?php echo resBoardsId($q); ?>' class='sectionboard'>
<div align='center' id='board-img<?php echo resBoardsId($q); ?>' class='imgboard'>

<a class='myauthor' href='http://pinct.ru/boards/<?php echo resBoardsPath($q); ?>' return='false'><img class='sectionboard' src='http://pinct.ru/boards/<?php echo resBoardsThumb($q); ?>' align='bottom' width='249px' alt='user'/></a>
<div align='center' id='board-name<?php echo resBoardsId($q); ?>' class='nameboard'>
<div align='center'>
<?php echo resBoardsName($q); ?>
</div>
</div>
<a class='myauthor' href='http://pinct.ru/boards/<?php echo resBoardsPath($q); ?>' return='false'><img class='pictboard' src='http://pinct.ru/tag/<?php if (resPinTagThumb(1)) {echo resPinTagThumb(1); } else { echo "default.png"; } ?>' align='bottom' width='59px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/boards/<?php echo resBoardsPath($q); ?>' return='false'><img class='pictboard' src='http://pinct.ru/tag/<?php if (resPinTagThumb(2)) {echo resPinTagThumb(2); } else { echo "default.png"; } ?>' align='bottom' width='59px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/boards/<?php echo resBoardsPath($q); ?>' return='false'><img class='pictboard' src='http://pinct.ru/tag/<?php if (resPinTagThumb(3)) {echo resPinTagThumb(3); } else { echo "default.png"; } ?>' align='bottom' width='59px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/boards/<?php echo resBoardsPath($q); ?>' return='false'><img class='lastboard'  src='http://pinct.ru/tag/<?php if (resPinTagThumb(4)) {echo resPinTagThumb(4); } else { echo "default.png"; } ?>' align='bottom' width='59px' alt='user'/></a>

<a class='sub-author' id='sub<?php echo resBoardsId($q); ?>' href='' return='false'><div align='center' class='subscribe' id='sub<?php echo resBoardsId($q); ?>'>Подписаться</div></a>
<a class='unsub-author' id='unsub<?php echo resBoardsId($q); ?>' href='' return='false'><div align='center' class='unsubscribe' id='unsub<?php echo resBoardsId($q); ?>'>Отписаться</div></a>


<span class='follow-sub'><b>
<?php 
dataFollow2(resBoardsUsers($q), false);
if (rowsFollow2()) {
if (rowsFollow2() > 0) {
echo "+" . rowsFollow2(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
</b> Подписчиков</span>
<br><br>
</div>
	
  </div>
</div>

<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll=2&i=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsBoards() > 20) { ?>

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
	  
	  
<?php } ?>

document.title = "Альбомы пользователя <?php echo resCategoryName(); ?>";


<?php
	  
if (rowsBoards()) {
for($g=0; $g<=rowsBoards(); $g++) { 
	  
boardSubsribe(resBoardsId($g));
	  
}
}
	  
?>

///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		

         $('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&random<?php echo $myRand3; ?>='+window.randomAjax3,
					cache: false,
					async: true,
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
                    url:     location.pathname + '?ajax=1&random<?php echo $myRand4; ?>='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });



myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
	<?php if (rowsBoards() > 20) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&v='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Категория";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
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
	
<?php } ?>

	
</div><!-- #content -->

</div>

</body>
</html>

	
	
<?php
	

}

elseif ($url3 == 'likes'){


require_once '/var/www/pinct.ru/main/conf.php';
require_once '/var/www/pinct.ru/main/db.php';
require_once '/var/www/pinct.ru/main/options.php';
require_once '/var/www/pinct.ru/top.php';
require_once '/var/www/pinct.ru/chat.php';

?>
<br>

<div align='center' id='all-section-main' class='allcontent'>

<div align='center' id='main' class='content'>

<br><br><br><br>

<?php dataProfile($url2, false); ?>

<div align='center' id='user' class='back-user' style='background-image: url(http://pinct.ru/user/<?php 
if (resProfileCover()) { echo resProfileCover(); } else { echo "cover.png"; } ?>)!important;'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo resProfileName(); ?>

<?php echo resProfileSoname(); ?>

</span><span class='city'>
<?php echo resProfileCity(); ?>
,
 <?php echo resProfileCountry(); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (resProfileAbout()) {
echo resProfileAbout(); 
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
<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
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
<img src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); }
else { echo "default-male-100.gif"; } ?>' align='center' width='100px' alt='user'/>
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
 
 <div align='center' id='menu-pin' class="menucapt">
<div align='center' id='menu-boxed' class="menuboxed">

<ul>
   <li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><b>

<?php 

if (resProfileAutorPins()) {
if (resProfileAutorPins() > 0) {
echo resProfileAutorPins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Постов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/boards' return='false'><b>

<?php 

if (resProfileAutorBoards()) {
if (resProfileAutorBoards() > 0) {
echo resProfileAutorBoards(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Альбомов<a>
</li><li>
<li style='background-color: #969696!important; color: #ffffff!important;'>
<a style='color: #ffffff!important;' class='profile' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/likes' return='false'><b style='color: #ffffff!important;'>

<?php 

if (resProfileAutorLikes()) {
if (resProfileAutorLikes() > 0) {
echo resProfileAutorLikes(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Лайка<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/repins' return='false'><b>

<?php 

if (resProfileAutorRepins()) {
if (resProfileAutorRepins() > 0) {
echo resProfileAutorRepins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Репоста<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followers' return='false'><b>

<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписчика<a>
</li>
<li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followings' return='false'><b>

<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписок<a>
</li>
<li>
<a href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/account-plus' code='Аккаунт+' return='false'>Аккаунт+<a>
</li>
<li>
<a href='http://pinct.ru/settings' return='false'><b>Редактировать профиль</b><a>
</li>
<li>
<a href='#' return='false'><b>Ещё</b><a>
</li>
</ul>

</div>
</div>
 
 <br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

 <?php 
 
dataLikes("$url2", false);
$q=0;

if (rowsLikes()) {
for($q=0; $q<=9; $q++) { 
dataPin("pin", $ids, resLikesPinId($q), "", false);
if (resPinName(0)) {
?>

<div class='box col3' id='pin<?php echo resPinId(0); ?>'>

<div align='center' id='pinned<?php echo resPinId(0); ?>' class='sectionpin'>
<div align='center' id='img<?php echo resPinId(0); ?>' class='imgpin'>

<div align='left'>
<div align='center' id='action<?php echo resPinId(0); ?>' class='actionbar'>

<a href='' return='false'><div align='center' id='thumb<?php echo resPinId(0); ?>' class='thumb-autor'>

<img class='img-nav' src='http://pinct.ru/user/<?php echo resPinAutorThumb(0); ?>' align='left' width='50px'/>

<div id='pin-nav<?php echo resPinId(0); ?>' class='navpin'>
<img src='http://pinct.ru/img/tik-top-pin.png' align='left' width='20'/><?php echo resPinAutor(0); ?>

<div id='pin-nav-text<?php echo resPinId(0); ?>' class='navpintext'>

<ul>
 <a href='http://pinct.ru/users/<?php echo resPinAutor(0); ?>' class='myauthor first-el' return='false'><li>
Посты
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor(0); ?>/boards' return='false' class='myauthor'><li>
Альбомы
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor(0); ?>/likes' return='false'class='myauthor'><li>
Лайки
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor(0); ?>/repins' return='false'class='myauthor'><li>
Репосты
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor(0); ?>/followers' return='false'class='myauthor'><li>
Подписчики
 </li></a>
  <a href='http://pinct.ru/users/<?php echo resPinAutor(0); ?>/followings' class='myauthor last-el' return='false'><li>
Подписки
 </li></a>
 </ul>

</div>

</div>

<div id='tooltip-menu<?php echo resPinId(0); ?>-user' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/><?php echo resPinAutor(0); ?>
</div>

</div></a>

<a href='' return='false'><div align='center' id='repin<?php echo resPinId(0); ?>' class='repin-autor'>

       <div id='tooltip-menu<?php echo resPinId(0); ?>-repin' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>репост
</div>

</div></a>

<a href='' return='false'><div align='center' id='like<?php echo resPinId(0); ?>' class='like-autor'>

<div id='tooltip-menu<?php echo resPinId(0); ?>-like' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>лайк
</div>
</div>
</a>

<a href='' return='false'>
<div align='center' id='unlike<?php echo resPinId(0); ?>' class='unlike-autor'>
<div id='tooltip-menu<?php echo resPinId(0); ?>-unlike' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>убрать&nbsp;лайк
</div>
</div>
</a>

<a href='' return='false'><div align='center' id='comment<?php echo resPinId(0); ?>' class='comment-autor'>

<div id='tooltip-menu<?php echo resPinId(0); ?>-comment' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>написать
</div>

</div></a>

</div>
</div>

<a href='http://pinct.ru/pin/<?php echo resPinPath(0); ?>' class='pin-view' return='false'><img class='sectionpin' id='img<?php echo resPinId(0); ?>' src='http://pinct.ru/pins/<?php echo resPinThumb(0); ?>' align='bottom' width='200px' height='<?php echo resPinMinheight(0); ?>px' alt='user'/></a>
</div>

<span><?php echo resPinName(0); ?></span>
<br><br>

<?php dataTag(resPinId(0), false); ?>
<?php if ( rowsTags() > 0 ) { ?>
<div align='center' id='tags<?php echo resPinId(0); ?>' class='tagspin'><?php $t=0; for($t=0; $t<=rowsTags(); $t++) { if (resTagName($t)) { ?><a class='tagclick' href='http://pinct.ru/tags/<?php echo resTagPath($t); ?>' return='false'><span>#<?php echo resTagName($t); ?></span></a><?php }} ?></div><?php } ?>

<?php if ( resPinCommentsId(0) > 0 ) { ?>

<?php dataComments(resPinCommentsId(0), false); ?>
<div align='left' id='desqus<?php echo resPinId(0); ?>' class='mini-desqus'>

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

<div align='center' id='send<?php echo resPinId(0); ?>' class='send-comment'>

<form name='send-comment' id='send-comment<?php echo resPinId(0); ?>' method='GET' action='cat.php'>
  
  <textarea name='send-text' id='send<?php echo resPinId(0); ?>' placeholder='Напишите что-нибудь...'></textarea>
  <br><br>
  <input type='button' name='mini-comment' id='mini-comment' class='mycomment' value='комментировать'>
  
  </form>

</div>

<div align='center' id='puzo' class='puzomerki'>
<div align='center' class='small-like' id='small-likes<?php echo resPinId(0); ?>'><?php echo resPinLikes(0); ?></div><div align='center' class='small-repin'><?php echo resPinRepins(0); ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo resPinComments(0); ?>&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll=2&i=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>
   document.createElement('aside');
   document.createElement('article');
   document.createElement('nav');
   document.createElement('header');
   document.createElement('footer');
   document.createElement('section');
  </script>

<!--[if lt IE 9]><script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script><![endif]-->

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsLikes() > 5) { ?>

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
	  
	  
<?php } ?>

document.title = "<?php echo resCategoryName(); ?>";


<?php 
$s=0;
for($s=0; $s<=10; $s++) { 
if (resLikesPinId($s)) {

myPin(resLikesPinId($s));

}

}

?>

});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			
			$('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&s='+window.randomAjax2,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						

						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			
			$(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&w='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });


myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsLikes() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&v='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Категория";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
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
	
</div><!-- #content -->

</div>

</body>
</html>

	
	
	
	
	
<?php
	
}

}

elseif ($url3 == 'followers'){


require_once '/var/www/pinct.ru/main/conf.php';
require_once '/var/www/pinct.ru/main/db.php';
require_once '/var/www/pinct.ru/main/options.php';
require_once '/var/www/pinct.ru/top.php';
require_once '/var/www/pinct.ru/chat.php';

?>
<br>

<div align='center' id='all-section-main' class='allcontent'>

<div align='center' id='main' class='content'>

<br><br><br><br>

<?php dataProfile($url2, false); ?>

<div align='center' id='user' class='back-user' style='background-image: url(http://pinct.ru/user/<?php 
if (resProfileCover()) { echo resProfileCover(); } else { echo "cover.png"; } ?>)!important;'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo resProfileName(); ?>

<?php echo resProfileSoname(); ?>

</span><span class='city'>
<?php echo resProfileCity(); ?>
,
 <?php echo resProfileCountry(); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (resProfileAbout()) {
echo resProfileAbout(); 
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
<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
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
<img src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); }
else { echo "default-male-100.gif"; } ?>' align='center' width='100px' alt='user'/>
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
 
 <div align='center' id='menu-pin' class="menucapt">
<div align='center' id='menu-boxed' class="menuboxed">

<ul>
   <li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><b>

<?php 

if (resProfileAutorPins()) {
if (resProfileAutorPins() > 0) {
echo resProfileAutorPins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Постов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/boards' return='false'><b>

<?php 

if (resProfileAutorBoards()) {
if (resProfileAutorBoards() > 0) {
echo resProfileAutorBoards(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Альбомов<a>
</li><li>
<li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/likes' return='false'><b>

<?php 

if (resProfileAutorLikes()) {
if (resProfileAutorLikes() > 0) {
echo resProfileAutorLikes(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Лайка<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/repins' return='false'><b>

<?php 

if (resProfileAutorRepins()) {
if (resProfileAutorRepins() > 0) {
echo resProfileAutorRepins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Репоста<a>
</li><li style='background-color: #969696!important; color: #ffffff!important;'>
<a style='color: #ffffff!important;' class='profile' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followers' return='false'><b style='color: #ffffff!important;'>

<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписчика<a>
</li>
<li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followings' return='false'><b>

<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписок<a>
</li>
<li>
<a href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/account-plus' code='Аккаунт+' return='false'>Аккаунт+<a>
</li>
<li>
<a href='http://pinct.ru/settings' return='false'><b>Редактировать профиль</b><a>
</li>
<li>
<a href='#' return='false'><b>Ещё</b><a>
</li>
</ul>

</div>
</div>
 
 <br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<?php 
 

$q=0;
dataFollow($url2, false);
if (rowsFollow()) {
for($q=0; $q<=9; $q++) { 
dataProfile(resFollowObj($q), $sort);
dataPin("pin", "autorid", resFollowObjId($q), "", false);
if (resProfileName()) {
?>

<div class='box col4' id='user<?php echo resProfileId(); ?>'>

<div align='center' id='user<?php echo resProfileId(); ?>' class='section-user'>
<div align='center' id='user-name<?php echo resProfileId(); ?>' class='my-user'>
<div align='center' id='user-name<?php echo resProfileId(); ?>' class='username'>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><?php echo resProfileName() . " " . resProfileSoname(); ?></a></div>
<div align='center' id='col<?php echo resProfileId(); ?>' class='my-col'>
<div align='center' id='user-post<?php echo resProfileId(); ?>' class='colpost'><?php if (resProfileAutorPins()) { if (resProfileAutorPins() > 0) { echo resProfileAutorPins(); } else { echo "0"; } } else { echo "0"; } ?>
 постов
</div>
<div align='center' id='user-board<?php echo resProfileId(); ?>' class='colboard'><?php if (resProfileAutorBoards()) { if (resProfileAutorBoards() > 0) { echo resProfileAutorBoards(); } else { echo "0"; } } else { echo "0"; } ?>
 альбомов
</div>

<div align='center' id='user-ava<?php echo resProfileId(); ?>' class='user-avatar'>
<div align='center' class='my-avatar'>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pict-avatar' src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); } else { echo "default-male-100.gif"; } ?>' align='center' width='64px' alt='user'/></a>

</div>
</div>

</div>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(0)) {echo resPinTagThumb(0); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(1)) {echo resPinTagThumb(1); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(2)) {echo resPinTagThumb(2); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(3)) {echo resPinTagThumb(3); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(4)) {echo resPinTagThumb(4); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='lastuser'  src='http://pinct.ru/tag/<?php if (resPinTagThumb(5)) {echo resPinTagThumb(5); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='sub-author' id='sub<?php echo resProfileId(); ?>' href='' return='false'><div align='center' class='subscribe' id='sub<?php echo resProfileId(); ?>'>Подписаться</div></a>
<a class='unsub-author' id='unsub<?php echo resProfileId(); ?>' href='' return='false'><div align='center' class='unsubscribe' id='unsub<?php echo resProfileId(); ?>'>Отписаться</div></a>


<span class='follow-sub'><b>
<?php 
dataFollow2(resFollowObj($q), false);
if (rowsFollow2()) {
if (rowsFollow2() > 0) {
echo "+" . rowsFollow2(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
</b> Подписчиков</span>
<br><br>
</div>
	
  </div>
</div>







<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll=2&i=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>
   document.createElement('aside');
   document.createElement('article');
   document.createElement('nav');
   document.createElement('header');
   document.createElement('footer');
   document.createElement('section');
  </script>

<!--[if lt IE 9]><script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script><![endif]-->

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsFollow() > 5) { ?>

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
	  
	  
<?php } ?>

document.title = "Подписчики <?php echo resCategoryName(); ?>";


<?php
	  
if (rowsFollow()) {
for($c=0; $c<=rowsFollow(); $c++) { 
	  
mySubsribe(resFollowObjId($c));
	  
}
}
	  
?>

});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			
			$('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&s='+window.randomAjax2,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						

						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			
			$(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&w='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });


myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsFollow() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&v='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Категория";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
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
	
</div><!-- #content -->

</div>

</body>
</html>

	
	
	
	
	
<?php
	
}

}


// перезагрузка и followings
elseif ($url3 == 'followings'){


require_once '/var/www/pinct.ru/main/conf.php';
require_once '/var/www/pinct.ru/main/db.php';
require_once '/var/www/pinct.ru/main/options.php';
require_once '/var/www/pinct.ru/top.php';
require_once '/var/www/pinct.ru/chat.php';

?>
<br>

<div align='center' id='all-section-main' class='allcontent'>

<div align='center' id='main' class='content'>

<br><br><br><br>

<?php dataProfile($url2, false); ?>

<div align='center' id='user' class='back-user' style='background-image: url(http://pinct.ru/user/<?php 
if (resProfileCover()) { echo resProfileCover(); } else { echo "cover.png"; } ?>)!important;'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo resProfileName(); ?>

<?php echo resProfileSoname(); ?>

</span><span class='city'>
<?php echo resProfileCity(); ?>
,
 <?php echo resProfileCountry(); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (resProfileAbout()) {
echo resProfileAbout(); 
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
<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
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
<img src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); }
else { echo "default-male-100.gif"; } ?>' align='center' width='100px' alt='user'/>
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
 
 <div align='center' id='menu-pin' class="menucapt">
<div align='center' id='menu-boxed' class="menuboxed">

<ul>
   <li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><b>

<?php 

if (resProfileAutorPins()) {
if (resProfileAutorPins() > 0) {
echo resProfileAutorPins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Постов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/boards' return='false'><b>

<?php 

if (resProfileAutorBoards()) {
if (resProfileAutorBoards() > 0) {
echo resProfileAutorBoards(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Альбомов<a>
</li><li>
<li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/likes' return='false'><b>

<?php 

if (resProfileAutorLikes()) {
if (resProfileAutorLikes() > 0) {
echo resProfileAutorLikes(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Лайка<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/repins' return='false'><b>

<?php 

if (resProfileAutorRepins()) {
if (resProfileAutorRepins() > 0) {
echo resProfileAutorRepins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Репоста<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followers' return='false'><b>

<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписчика<a>
</li>
<li style='background-color: #969696!important; color: #ffffff!important;'>
<a style='color: #ffffff!important;' class='profile' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followings' return='false'><b style='color: #ffffff!important;'>

<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписок<a>
</li>
<li>
<a href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/account-plus' code='Аккаунт+' return='false'>Аккаунт+<a>
</li>
<li>
<a href='http://pinct.ru/settings' return='false'><b>Редактировать профиль</b><a>
</li>
<li>
<a href='#' return='false'><b>Ещё</b><a>
</li>
</ul>

</div>
</div>
 
 <br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<?php 
 

$q=0;
dataFollowing($url2, false);
if (rowsFollowing()) {
for($q=0; $q<=9; $q++) { 
dataProfile(resFollowingObj($q), $sort);
dataPin("pin", "autorid", resFollowingObjId($q), "", false);
if (resProfileName()) {
?>

<div class='box col4' id='user<?php echo resProfileId(); ?>'>

<div align='center' id='user<?php echo resProfileId(); ?>' class='section-user'>
<div align='center' id='user-name<?php echo resProfileId(); ?>' class='my-user'>
<div align='center' id='user-name<?php echo resProfileId(); ?>' class='username'>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><?php echo resProfileName() . " " . resProfileSoname(); ?></a></div>
<div align='center' id='col<?php echo resProfileId(); ?>' class='my-col'>
<div align='center' id='user-post<?php echo resProfileId(); ?>' class='colpost'><?php if (resProfileAutorPins()) { if (resProfileAutorPins() > 0) { echo resProfileAutorPins(); } else { echo "0"; } } else { echo "0"; } ?>
 постов
</div>
<div align='center' id='user-board<?php echo resProfileId(); ?>' class='colboard'><?php if (resProfileAutorBoards()) { if (resProfileAutorBoards() > 0) { echo resProfileAutorBoards(); } else { echo "0"; } } else { echo "0"; } ?>
 альбомов
</div>

<div align='center' id='user-ava<?php echo resProfileId(); ?>' class='user-avatar'>
<div align='center' class='my-avatar'>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pict-avatar' src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); } else { echo "default-male-100.gif"; } ?>' align='center' width='64px' alt='user'/></a>

</div>
</div>

</div>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(0)) {echo resPinTagThumb(0); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(1)) {echo resPinTagThumb(1); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(2)) {echo resPinTagThumb(2); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(3)) {echo resPinTagThumb(3); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='pictuser' src='http://pinct.ru/tag/<?php if (resPinTagThumb(4)) {echo resPinTagThumb(4); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><img class='lastuser'  src='http://pinct.ru/tag/<?php if (resPinTagThumb(5)) {echo resPinTagThumb(5); } else { echo "default.png"; } ?>' align='bottom' width='80px' alt='user'/></a>

<a class='sub-author' id='sub<?php echo resProfileId(); ?>' href='' return='false'><div align='center' class='subscribe' id='sub<?php echo resProfileId(); ?>'>Подписаться</div></a>
<a class='unsub-author' id='unsub<?php echo resProfileId(); ?>' href='' return='false'><div align='center' class='unsubscribe' id='unsub<?php echo resProfileId(); ?>'>Отписаться</div></a>


<span class='follow-sub'><b>
<?php 
dataFollow2(resFollowingObj($q), false);
if (rowsFollow2()) {
if (rowsFollow2() > 0) {
echo "+" . rowsFollow2(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
</b> Подписчиков</span>
<br><br>
</div>
	
  </div>
</div>







<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll=2&i=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>
   document.createElement('aside');
   document.createElement('article');
   document.createElement('nav');
   document.createElement('header');
   document.createElement('footer');
   document.createElement('section');
  </script>

<!--[if lt IE 9]><script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script><![endif]-->

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsFollowing() > 5) { ?>

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
	  
	  
<?php } ?>

document.title = "Подписчики <?php echo resCategoryName(); ?>";


<?php
	  
if (rowsFollowing()) {
for($c=0; $c<=rowsFollowing(); $c++) { 
	  
mySubsribe(resFollowingObjId($c));
	  
}
}
	  
?>

});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			
			$('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&s='+window.randomAjax2,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						

						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			
			$(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&w='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });


myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsFollowing() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&v='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Категория";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
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
	
</div><!-- #content -->

</div>

</body>
</html>

	
	
	
	
	
<?php
	
}

}


elseif ($url3 == 'account-plus'){

require_once '/var/www/pinct.ru/main/conf.php';
require_once '/var/www/pinct.ru/main/db.php';
require_once '/var/www/pinct.ru/main/options.php';
require_once '/var/www/pinct.ru/top.php';
require_once '/var/www/pinct.ru/chat.php';

?>
<br>

<div align='center' id='all-section-main' class='allcontent'>

<div align='center' id='main' class='content'>

<br><br><br><br>

<?php dataProfile($url2, false); ?>

<div align='center' id='user' class='back-user' style='background-image: url(http://pinct.ru/user/<?php 
if (resProfileCover()) { echo resProfileCover(); } else { echo "cover.png"; } ?>)!important;'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo resProfileName(); ?>

<?php echo resProfileSoname(); ?>

</span><span class='city'>
<?php echo resProfileCity(); ?>
,
 <?php echo resProfileCountry(); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (resProfileAbout()) {
echo resProfileAbout(); 
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
<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
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
<img src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); }
else { echo "default-male-100.gif"; } ?>' align='center' width='100px' alt='user'/>
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
 
 <div align='center' id='menu-pin' class="menucapt">
<div align='center' id='menu-boxed' class="menuboxed">

<ul>
   <li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><b>

<?php 

if (resProfileAutorPins()) {
if (resProfileAutorPins() > 0) {
echo resProfileAutorPins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Постов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/boards' return='false'><b>

<?php 

if (resProfileAutorBoards()) {
if (resProfileAutorBoards() > 0) {
echo resProfileAutorBoards(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Альбомов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/likes' return='false'><b>

<?php 

if (resProfileAutorLikes()) {
if (resProfileAutorLikes() > 0) {
echo resProfileAutorLikes(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Лайка<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/repins' return='false'><b>

<?php 

if (resProfileAutorRepins()) {
if (resProfileAutorRepins() > 0) {
echo resProfileAutorRepins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Репоста<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followers' return='false'><b>

<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписчика<a>
</li>
<li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followings' return='false'><b>

<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписок<a>
</li>
<li style='background-color: #969696!important; color: #ffffff!important;'>
<a class='myauthor' style='color: #ffffff!important;' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/account-plus' code='Аккаунт+' return='false'>Аккаунт+<a>
</li>
<li>
<a class='myauthor' href='http://pinct.ru/settings' return='false'><b>Редактировать профиль</b><a>
</li>
<li>
<a href='#' return='false'><b>Ещё</b><a>
</li>
</ul>

</div>
</div>
 
 <br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>



<div class='account-plus'>
  <div class='columns clearfix'>
    <div class='column'>
      <h4 class='title-3 center bgcolor-2 color-5 border-color-1' style='margin: 0px; padding: 18px 0px 20px; font-size: 18px; line-height: 22px; font-weight: bold; color: rgb(255, 255, 255); border-color: rgb(197, 65, 51); text-align: center; border-radius: 3px 3px 0px 0px; border-bottom-width: 3px; border-bottom-style: solid; position: relative; background-color: rgb(231, 76, 60);'>Аккаунт Lite<a href='' title='' class='button-qmark event-tooltip' style='margin: 0px 0px 0px -13px; padding: 0px; text-decoration: none; color: rgb(102, 118, 134); display: inline-block; width: 26px; height: 26px; border: 2px solid rgb(255, 255, 255); text-indent: -50000px; border-radius: 50%; position: absolute; left: 118px; bottom: -15px; background-image: url(http://pinct.ru/img/icon-qmark.png); background-color: rgb(229, 229, 229); background-position: 50% 50%; background-repeat: no-repeat;'>?</a></h4>
      <ul class='features' style='margin: 0px; padding: 0px; list-style-type: none; text-align: center; width: 236px; display: table; color: rgb(102, 118, 134); font-size: 14px; line-height: 18px;'>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgb(231, 235, 236); vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>1 месяц</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Все пользователи с похожими интересами автоматически следуют за Вами</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие рекламы</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие спама</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Неограниченная загрузка фото и видео</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Возможность скрывать посты и альбомы</span></li>
      </ul>
      <p class='price color-4' style='margin: 0px; padding: 15px 0px 21px; color: rgb(231, 76, 60); text-align: center; font-size: 30px; line-height: 34px; font-weight: bold; background-color: rgb(231, 235, 236);'><s>P</s> 1.000</p>
      <p class='order center bgcolor-1' style='margin: 0px; padding: 15px 0px; text-align: center; border-radius: 0px 0px 3px 3px; background-color: rgb(255, 255, 255);'><a href='' data-id='3' class='event-add-subscribe button button-color-1 button-size-small' style='margin: 0px; padding: 10px 20px; text-decoration: none; color: rgb(255, 255, 255); display: inline-block; font-size: 13px; line-height: 13px; font-weight: bold; border-radius: 5px; transition: all 0.2s ease-out; border: 1px solid rgb(231, 76, 60); background-color: rgb(231, 76, 60);'>Купить</a></p>
    </div>
    <div class='column' style='margin: 0px 14px 0px 0px; padding: 0px; float: left; width: 236px;'>
      <h4 class='title-3 center bgcolor-3 color-5 border-color-2' style='margin: 0px; padding: 18px 0px 20px; font-size: 18px; line-height: 22px; font-weight: bold; color: rgb(255, 255, 255); border-color: rgb(0, 166, 156); text-align: center; border-radius: 3px 3px 0px 0px; border-bottom-width: 3px; border-bottom-style: solid; position: relative; background-color: rgb(26, 188, 156);'>Аккаунт Business<a href='' title='' class='button-qmark event-tooltip' style='margin: 0px 0px 0px -13px; padding: 0px; text-decoration: none; color: rgb(102, 118, 134); display: inline-block; width: 26px; height: 26px; border: 2px solid rgb(255, 255, 255); text-indent: -50000px; border-radius: 50%; position: absolute; left: 118px; bottom: -15px; background-image: url(http://pinct.ru/img/icon-qmark.png); background-color: rgb(229, 229, 229); background-position: 50% 50%; background-repeat: no-repeat;'>?</a></h4>
      <ul class='features' style='margin: 0px; padding: 0px; list-style-type: none; text-align: center; width: 236px; display: table; color: rgb(102, 118, 134); font-size: 14px; line-height: 18px;'>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgb(231, 235, 236); vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>2 месяца</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Все пользователи с похожими интересами автоматически следуют за Вами</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие рекламы</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие спама</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Неограниченная загрузка фото и видео</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Возможность скрывать посты и альбомы</span></li>
        
      </ul>
      <p class='price color-7' style='margin: 0px; padding: 15px 0px 21px; color: rgb(26, 188, 156); text-align: center; font-size: 30px; line-height: 34px; font-weight: bold; background-color: rgb(231, 235, 236);'><s>P</s> 2.000</p>
      <p class='order center bgcolor-1' style='margin: 0px; padding: 15px 0px; text-align: center; border-radius: 0px 0px 3px 3px; background-color: rgb(255, 255, 255);'><a href='' data-id='3' class='event-add-subscribe button button-color-1 button-size-small' style='margin: 0px; padding: 10px 20px; text-decoration: none; color: rgb(255, 255, 255); display: inline-block; font-size: 13px; line-height: 13px; font-weight: bold; border-radius: 5px; transition: all 0.2s ease-out; border: 1px solid rgb(26, 188, 156); background-color: rgb(26, 188, 156);'>Купить</a></p>
    </div>
    <div class='column' style='margin: 0px 14px 0px 0px; padding: 0px; float: left; width: 236px;'>
      <h4 class='title-3 center bgcolor-4 color-5 border-color-3' style='margin: 0px; padding: 18px 0px 20px; font-size: 18px; line-height: 22px; font-weight: bold; color: rgb(255, 255, 255); border-color: rgb(245, 153, 54); text-align: center; border-radius: 3px 3px 0px 0px; border-bottom-width: 3px; border-bottom-style: solid; position: relative; background-color: rgb(251, 175, 93);'>Аккаунт Gold<a href='' title='' class='button-qmark event-tooltip' style='margin: 0px 0px 0px -13px; padding: 0px; text-decoration: none; color: rgb(102, 118, 134); display: inline-block; width: 26px; height: 26px; border: 2px solid rgb(255, 255, 255); text-indent: -50000px; border-radius: 50%; position: absolute; left: 118px; bottom: -15px; background-image: url(http://pinct.ru/img/icon-qmark.png); background-color: rgb(229, 229, 229); background-position: 50% 50%; background-repeat: no-repeat;'>?</a></h4>
      <ul class='features' style='margin: 0px; padding: 0px; list-style-type: none; text-align: center; width: 236px; display: table; color: rgb(102, 118, 134); font-size: 14px; line-height: 18px;'>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgb(231, 235, 236); vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>3 месяца</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Все пользователи с похожими интересами автоматически следуют за Вами</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие рекламы</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие спама</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Неограниченная загрузка фото и видео</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Возможность скрывать посты и альбомы</span></li>
      </ul>
      <p class='price color-9' style='margin: 0px; padding: 15px 0px 21px; color: rgb(251, 175, 93); text-align: center; font-size: 30px; line-height: 34px; font-weight: bold; background-color: rgb(231, 235, 236);'><s>P</s> 3.000</p>
      <p class='order center bgcolor-1' style='margin: 0px; padding: 15px 0px; text-align: center; border-radius: 0px 0px 3px 3px; background-color: rgb(255, 255, 255);'><a href='' data-id='1' class='event-add-subscribe button button-color-7 button-size-small' style='margin: 0px; padding: 10px 20px; text-decoration: none; color: rgb(255, 255, 255); display: inline-block; font-size: 13px; line-height: 13px; font-weight: bold; border-radius: 5px; transition: all 0.2s ease-out; border: 1px solid rgb(251, 175, 93); background-color: rgb(251, 175, 93);'>Купить</a></p>
    </div>
    <div class='column' style='margin: 0px; padding: 0px; float: left; width: 236px;'>
      <h4 class='title-3 center bgcolor-2 color-5 border-color-1' style='margin: 0px; padding: 18px 0px 20px; font-size: 18px; line-height: 22px; font-weight: bold; color: rgb(255, 255, 255); border-color: #2b63d3; text-align: center; border-radius: 3px 3px 0px 0px; border-bottom-width: 3px; border-bottom-style: solid; position: relative; background-color: #52c1df;'>Аккаунт Premium<a href='' title='' class='button-qmark event-tooltip' style='margin: 0px 0px 0px -13px; padding: 0px; text-decoration: none; color: rgb(102, 118, 134); display: inline-block; width: 26px; height: 26px; border: 2px solid rgb(255, 255, 255); text-indent: -50000px; border-radius: 50%; position: absolute; left: 118px; bottom: -15px; background-image: url(http://pinct.ru/img/icon-qmark.png); background-color: rgb(229, 229, 229); background-position: 50% 50%; background-repeat: no-repeat;'>?</a></h4>
      <ul class='features' style='margin: 0px; padding: 0px; list-style-type: none; text-align: center; width: 236px; display: table; color: rgb(102, 118, 134); font-size: 14px; line-height: 18px;'>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgb(231, 235, 236); vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>6 месяцев</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Все пользователи с похожими интересами автоматически следуют за Вами</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие рекламы</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Отсутствие спама</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Неограниченная загрузка фото и видео</span></li>
        <li style='margin: 0px; padding: 0px; display: table-row;'><span class='feature' style='margin: 0px; padding: 10px; border-bottom-style: none; vertical-align: middle; display: table-cell; height: 36px; background-color: rgb(255, 255, 255);'>Возможность скрывать посты и альбомы</span></li>
      </ul>
      <p class='price color-4' style='margin: 0px; padding: 15px 0px 21px; color: #52c1df; text-align: center; font-size: 30px; line-height: 34px; font-weight: bold; background-color: rgb(231, 235, 236);'><s>P</s> 6.000</p>
      <p class='order center bgcolor-1' style='margin: 0px; padding: 15px 0px; text-align: center; border-radius: 0px 0px 3px 3px; background-color: rgb(255, 255, 255);'><a href='' data-id='4' class='event-add-subscribe button button-color-1 button-size-small' style='margin: 0px; padding: 10px 20px; text-decoration: none; color: rgb(255, 255, 255); display: inline-block; font-size: 13px; line-height: 13px; font-weight: bold; border-radius: 5px; transition: all 0.2s ease-out; border: 1px solid #52c1df; background-color: #52c1df;'>Купить</a></p>
    </div>
  </div>

</div>



  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll=2&i=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>

$(document).ready(function(){

document.title = "Альбомы пользователя <?php echo resCategoryName(); ?>";


<?php
	  
if (rowsBoards()) {
for($g=0; $g<=rowsBoards(); $g++) { 
	  
boardSubsribe(resBoardsId($g));
	  
}
}
	  
?>

///////////////////////////////// перезапуск infinite
$(window).unbind('.infscr');
$(document).trigger('retrieve.infscr');
/////////////////////////////////////////////////////////////////////////


});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
		

myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>

</div><!-- #content -->

</div>

</body>
</html>

	
	
<?php
	


}



else {

require_once '/var/www/pinct.ru/main/conf.php';
require_once '/var/www/pinct.ru/main/db.php';
require_once '/var/www/pinct.ru/main/options.php';
require_once '/var/www/pinct.ru/top.php';
require_once '/var/www/pinct.ru/chat.php';

?>
<br>

<div align='center' id='all-section-main' class='allcontent'>

<div align='center' id='main' class='content'>

<br><br><br><br>

<?php dataProfile($url2, false); ?>

<div align='center' id='user' class='back-user' style='background-image: url(http://pinct.ru/user/<?php 
if (resProfileCover()) { echo resProfileCover(); } else { echo "cover.png"; } ?>)!important;'>

<div id='infa-user' class='infauser'>

<span class='name-user'>
<?php echo resProfileName(); ?>

<?php echo resProfileSoname(); ?>

</span><span class='city'>
<?php echo resProfileCity(); ?>
,
 <?php echo resProfileCountry(); ?>
 </span>
<br><br>
<span class='user-status'>
<?php 
if (resProfileAbout()) {
echo resProfileAbout(); 
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
<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
<br>
<span>Подписчиков</span>
</div>

<div class='following'>
<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>
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
<img src='http://pinct.ru/user/<?php if (resProfileThumb()) { echo resProfileThumb(); }
else { echo "default-male-100.gif"; } ?>' align='center' width='100px' alt='user'/>
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
 
 <div align='center' id='menu-pin' class="menucapt">
<div align='center' id='menu-boxed' class="menuboxed">

<ul>
   <li style='background-color: #969696!important; color: #ffffff!important;'>
<a style='color: #ffffff!important;' class='profile' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>' return='false'><b style='color: #ffffff!important;'>

<?php 

if (resProfileAutorPins()) {
if (resProfileAutorPins() > 0) {
echo resProfileAutorPins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Постов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/boards' return='false'><b>

<?php 

if (resProfileAutorBoards()) {
if (resProfileAutorBoards() > 0) {
echo resProfileAutorBoards(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Альбомов<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/likes' return='false'><b>

<?php 

if (resProfileAutorLikes()) {
if (resProfileAutorLikes() > 0) {
echo resProfileAutorLikes(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Лайка<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/repins' return='false'><b>

<?php 

if (resProfileAutorRepins()) {
if (resProfileAutorRepins() > 0) {
echo resProfileAutorRepins(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Репоста<a>
</li><li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followers' return='false'><b>

<?php 

if (resProfileAutorFollowers()) {
if (resProfileAutorFollowers() > 0) {
echo resProfileAutorFollowers(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписчика<a>
</li>
<li>
<a class='myauthor' href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/followings' return='false'><b>

<?php 

if (resProfileAutorFollowings()) {
if (resProfileAutorFollowings() > 0) {
echo resProfileAutorFollowings(); 
}
else {
echo "0";
} 
}
else {
echo "0";
}

?>

</b> Подписок<a>
</li>
<li>
<a href='http://pinct.ru/users/<?php echo resProfileUsers(); ?>/account-plus' code='Аккаунт+' return='false'>Аккаунт+<a>
</li>
<li>
<a href='http://pinct.ru/settings' return='false'><b>Редактировать профиль</b><a>
</li>
<li>
<a href='#' return='false'><b>Ещё</b><a>
</li>
</ul>

</div>
</div>
 
 <br>
    
<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

 <?php 
 
dataPin("pin", "$url1", "$url2", "", false);

$q=0;
if (rowsPin()) {
for($q=0; $q<=9; $q++) { 
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

<div align='center' id='puzo' class='puzomerki'>
<div align='center' class='small-like' id='small-likes<?php echo resPinId($q); ?>'><?php echo resPinLikes($q); ?></div><div align='center' class='small-repin'><?php echo resPinRepins($q); ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo resPinComments($q); ?>&nbsp;&nbsp;</div>
</div>

<br>
</div>
  
  </div>

<?php } } }

else {

?>

<h1>Здесь пока ничего нет.</h1>


<?php } ?>
  
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


<nav id='page-nav'>

<a href='http://pinct.ru/ajax/pin.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll=2&r=<?php echo $myRand6; ?>'></a>
</nav>

<script type='text/javascript'>
   document.createElement('aside');
   document.createElement('article');
   document.createElement('nav');
   document.createElement('header');
   document.createElement('footer');
   document.createElement('section');
  </script>

<!--[if lt IE 9]><script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script><![endif]-->

<script type='text/javascript'>

$(document).ready(function(){

<?php if (rowsPin() > 5) { ?>

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
	  
	  
<?php } ?>

document.title = "<?php echo resCategoryName(); ?>";


<?php 
$s=0;
for($s=0; $s<=10; $s++) { 
if (resPinName($s)) {

myPin(resPinId($s));

}

}

?>

});
  
  </script>
  
<script type='text/javascript'>

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);

            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&h='+window.randomAjax5,
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
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			
			$('a.account').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&s='+window.randomAjax2,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						

						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			
			$(window).bind('popstate', function() {
                $.ajax({
                    url:     location.pathname + '?ajax=1&w='+window.randomAjax3,
					cache: false,
					async: true,
                    success: function(data) {
                        $('#main').html(data);
						document.title = data;
                    }
                });
            });


myScript<?php echo $myRand3; ?> = 2;
			
        });
		
// нашёл
		
    </script>
	
<?php if (rowsPin() > 10) { ?>
	
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&v='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').prepend(data);
						document.title = "Категория";
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.myauthor').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax4,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
                    }
                });

                if(url != window.location){
                    window.history.pushState(null, null, url);
                }

                return false;
            });
			
			$('a.tagclick').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&k='+window.randomAjax6,
					cache: false,
					async: true,
                    success: function(data){
                        $('#main').html(data);
						
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
	
</div><!-- #content -->

</div>

</body>
</html>

	
	
	
	
	
<?php
	
}

}

}


}

else {
    include_once 'content.php';
	}
	
}

?>






