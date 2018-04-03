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