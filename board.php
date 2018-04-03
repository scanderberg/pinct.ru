<br>

<div align='center' id='all-section-main' class='allcontent'>

<div align='center' id='main' class='content'>

<?php dataMyBoards("$url2", false); ?>

<br><br>

<div class='caption'>
<div class='category'>

<h1><?php echo resMyBoardsName(0); ?></h1>

</div>
</div>

<div align='center' class='switch'>

<a href='http://pinct.ru/#' class='popular' return='false'>
<span class='popular'>Популярное</span>
</a>

<a href='http://pinct.ru/#' class='new' return='false'>
<span class='new'>Новое</span>
</a>

</div>

<br>

<div align='center' id='social-reg888' class='social-reg'>

<a href='' id='register-facebook888' class='facebook-register' return='false'><div id='facebook-reg888' class='facebook-register'>
<div id='tooltip-facebook-register' class='navtooltip'>
 facebook<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='register-google888' class='google-register' return='false'><div id='google-reg888' class='google-register'>
<div id='tooltip-google-register' class='navtooltip'>
 google+1<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='register-vkontakte888' class='vkontakte-register' return='false'><div id='vkontakte-reg888' class='vkontakte-register'>
<div id='tooltip-vkontakte-register' class='navtooltip'>
 вконтакте<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='register-mail-ru888' class='mail-ru-register' return='false'><div id='mail-ru-reg888' class='mail-ru-register'>
<div id='tooltip-mail-ru-register' class='navtooltip'>
 майл.ru<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='register-odnoklassniki888' class='odnoklassniki-register' return='false'><div id='odnoklassniki-reg888' class='odnoklassniki-register'>
<div id='tooltip-odnoklassniki-register' class='navtooltip'>
 одноклассники<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='register-twitter888' class='twitter-register' return='false'><div id='twitter-reg888' class='twitter-register'>
<div id='tooltip-twitter-register' class='navtooltip'>
 твиттер<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/>
</div>
</div></a>

</div>

<div align='center' id='my-area'>
    
<div align='center' id='container_infinity' class='transitions-enabled infinite-scroll clearfix'>

<?php 

$qs=0;

if (rowsMyBoards()) {

dataPin("pin", "category", resMyBoardsCategory(0), "", false);
	
for($qs=0; $qs<=rowsPin(); $qs++) { 
if (resPinName($qs)) {
?>

<div class='box col3' id='pin<?php echo resPinId($qs); ?>'>

<div align='center' class='head-post' id='head<?php echo resPinId($qs); ?>'>
<span>Восстановить</span>
</div>

<div align='center' id='pinned<?php echo resPinId($qs); ?>' class='sectionpin'>
<div align='center' id='img<?php echo resPinId($qs); ?>' class='imgpin'>

<div align='left'>
<div align='center' id='action<?php echo resPinId($qs); ?>' class='actionbar'>

<a href='' return='false'><div align='center' id='thumb<?php echo resPinId($qs); ?>' class='thumb-autor'>

<img class='img-nav' src='http://pinct.ru/user/<?php echo resPinAutorThumb($qs); ?>' align='left' width='50px'/>

<div id='pin-nav<?php echo resPinId($qs); ?>' class='navpin'>
<img src='http://pinct.ru/img/tik-top-pin.png' align='left' width='20'/><?php echo resPinAutor($qs); ?>

<div id='pin-nav-text<?php echo resPinId($qs); ?>' class='navpintext'>

<ul>
 <a href='http://pinct.ru/users/<?php echo resPinAutor($qs); ?>' class='myauthor first-el' return='false'><li>
Посты
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor($qs); ?>/boards' return='false' class='myauthor'><li>
Альбомы
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor($qs); ?>/likes' return='false'class='myauthor'><li>
Лайки
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor($qs); ?>/repins' return='false'class='myauthor'><li>
Репосты
 </li></a>
 <a href='http://pinct.ru/users/<?php echo resPinAutor($qs); ?>/followers' return='false'class='myauthor'><li>
Подписчики
 </li></a>
  <a href='http://pinct.ru/users/<?php echo resPinAutor($qs); ?>/followings' class='myauthor last-el' return='false'><li>
Подписки
 </li></a>
 </ul>

</div>

</div>

<div id='tooltip-menu<?php echo resPinId($qs); ?>-user' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/><?php echo resPinAutor($qs); ?>
</div>

</div></a>

<a href='' return='false'><div align='center' id='repin<?php echo resPinId($qs); ?>' class='repin-autor'>

       <div id='tooltip-menu<?php echo resPinId($qs); ?>-repin' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>репост
</div>

</div></a>

<a href='' return='false'><div align='center' id='like<?php echo resPinId($qs); ?>' class='like-autor'>

<div id='tooltip-menu<?php echo resPinId($qs); ?>-like' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>лайк
</div>
</div>
</a>

<a href='' return='false'>
<div align='center' id='unlike<?php echo resPinId($qs); ?>' class='unlike-autor'>
<div id='tooltip-menu<?php echo resPinId($qs); ?>-unlike' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>убрать&nbsp;лайк
</div>
</div>
</a>

<a href='' return='false'><div align='center' id='comment<?php echo resPinId($qs); ?>' class='comment-autor'>

<div id='tooltip-menu<?php echo resPinId($qs); ?>-comment' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>написать
</div>

</div></a>

<a href='' return='false'><div align='center' id='dop<?php echo resPinId($qs); ?>' class='set-autor'>

<div id='tooltip-menu<?php echo resPinId($qs); ?>-set' class='navtooltip'>
<img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>
<div align='center' class='pin-head'>
скрыть
</div>
<div align='center' class='pin-obuz'>
пожаловаться
</div>
</div>
</div>
</a>

</div>
</div>

<a href='http://pinct.ru/pin/<?php echo resPinPath($qs); ?>' class='pin-view' return='false'><img class='sectionpin' id='img<?php echo resPinId($qs); ?>' src='http://pinct.ru/pins/<?php echo resPinThumb($qs); ?>' align='bottom' width='200px' height='<?php echo resPinMinheight($qs); ?>px' alt='user'/></a>
</div>

<span><?php echo resPinName($qs) . rowsMyBoards(); ?></span>
<br><br>

<?php dataTag(resPinId($qs), false); ?>
<?php if ( rowsTags() > 0 ) { ?>
<div align='center' id='tags<?php echo resPinId($qs); ?>' class='tagspin'><?php $t=0; for($t=0; $t<=rowsTags(); $t++) { if (resTagName($t)) { ?><a class='tagclick' href='http://pinct.ru/tags/<?php echo resTagPath($t); ?>' return='false'><span>#<?php echo resTagName($t); ?></span></a><?php }} ?></div><?php } ?>

<?php if ( resPinCommentsId($qs) > 0 ) { ?>

<?php dataComments(resPinCommentsId($qs), false); ?>
<div align='left' id='desqus<?php echo resPinId($qs); ?>' class='mini-desqus'>

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

<div align='center' id='send<?php echo resPinId($qs); ?>' class='send-comment'>

<form name='send-comment' id='send-comment<?php echo resPinId($qs); ?>' method='GET' action='cat.php'>
  
  <textarea name='send-text' id='send<?php echo resPinId($qs); ?>' placeholder='Напишите что-нибудь...'></textarea>
  <br><br>
  <input type='button' name='mini-comment' id='mini-comment' class='mycomment' value='комментировать'>
  
  </form>

</div>

<div align='center' id='puzo' class='puzomerki'>
<div align='center' class='small-like' id='small-likes<?php echo resPinId($qs); ?>'><?php echo resPinLikes($qs); ?></div><div align='center' class='small-repin'><?php echo resPinRepins($qs); ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo resPinComments($qs); ?>&nbsp;&nbsp;</div>
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
$sw=0;
for($sw=0; $sw<=rowsPin(); $sw++) { 
if (resPinId($sw)) {

myPin(resPinId($sw));

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
				
				loadBar();
			
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
				
				loadBar();
			
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
				
				loadBar();
			
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
				
				loadBar();
			
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
				
				loadBar();
				
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
		
		$.getScript('http://pinct.ru/ajax/js.php/<?php echo $url1; ?>/<?php echo $url2; ?>/<?php echo $url3; ?>/?scroll='+window.myScript<?php echo $myRand3; ?>);
		myScript<?php echo $myRand3; ?>++;
		
		            $('a.pin-view').click(function() {
						
						loadBar();
			
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
				
				loadBar();
			
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
				
				loadBar();
			
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