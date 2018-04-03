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

$js=0;
if (rowsGetTags()) {
for($js=0; $js<rowsGetTags(); $js++) { 
dataPin("pin", "ids", resGetTagsPinId($js), "", false);

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


<div align='center' class='pin-count'><div align='center' class='like-count'><?php echo resPinLikes(0); ?></div><div align='center' class='repin-count'><?php echo resPinRepins(0); ?></div><div align='center' class='comment-count'><?php echo resPinComments(0); ?></div></div>

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