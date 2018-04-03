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

 <?php 
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

<a href='http://pinct.ru/pin/<?php echo resPinPath($q); ?>' return='false'><img class='sectionpin' id='img<?php echo resPinId($q); ?>' src='http://pinct.ru/pins/<?php echo resPinThumb($q); ?>' align='bottom' width='200px' height='<?php echo resPinMinheight($q); ?>px' alt='user'/></a>
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

<nav id='page-nav'>

<a href='#'></a>
</nav>

 </div>
</div> <!-- #content -->



<script type='text/javascript' src='http://pinct.ru/infinity/jquery-1.6.1.min.js'></script>
<script type='text/javascript' src='http://pinct.ru/infinity/jquery.masonry.min.js'></script>
<script type='text/javascript' src='http://pinct.ru/infinity/jquery.infinitescroll.js'></script>

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

<?php 
for($u=0; $u<=20; $u++) { 
if (resPinName($u)) {
?>

$('#pin<?php echo resPinId($u); ?>').delegate('#pinned<?php echo resPinId($u); ?>','mouseover',function(){
$('#action<?php echo resPinId($u); ?>').toggleClass('actionbar-hover', true);
      });
	  
$('#pin<?php echo resPinId($u); ?>').delegate('#pinned<?php echo resPinId($u); ?>','mouseleave',function(){
$('#action<?php echo resPinId($u); ?>').removeClass('actionbar-hover');
$('#pin-nav<?php echo resPinId($u); ?>').removeClass('navpin-show');
$('.thumb-autor img').toggleClass('thumb-autor-hover', false);
$('.thumb-autor .navtooltip, .comment-autor .navtooltip, .like-autor .navtooltip, .repin-autor .navtooltip, .unlike-autor .navtooltip').toggleClass('navtooltip-hide', false);
      });

$('#pin<?php echo resPinId($u); ?>').delegate('#repin<?php echo resPinId($u); ?>','mouseover',function(){
$('#repin<?php echo resPinId($u); ?>').toggleClass('repin-autor-hover', true);
$('.repin-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo resPinId($u); ?>').delegate('#repin<?php echo resPinId($u); ?>','mouseleave',function(){
$('#repin<?php echo resPinId($u); ?>').toggleClass('repin-autor-hover', false);
$('.repin-autor .navtooltip').css('display','none');
      });	  
	  
$('#pin<?php echo resPinId($u); ?>').delegate('#like<?php echo resPinId($u); ?>','mouseover',function(){
$('#like<?php echo resPinId($u); ?>').toggleClass('like-autor-hover', true);
$('.like-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo resPinId($u); ?>').delegate('#like<?php echo resPinId($u); ?>','mouseleave',function(){
$('#like<?php echo resPinId($u); ?>').toggleClass('like-autor-hover', false);
$('.like-autor .navtooltip').css('display','none');
      });
	  
	  $('#pin<?php echo resPinId($u); ?>').delegate('#unlike<?php echo resPinId($u); ?>','mouseover',function(){
$('#unlike<?php echo resPinId($u); ?>').toggleClass('unlike-autor-hover', true);
$('.unlike-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo resPinId($u); ?>').delegate('#unlike<?php echo resPinId($u); ?>','mouseleave',function(){
$('#unlike<?php echo resPinId($u); ?>').toggleClass('unlike-autor-hover', false);
$('.unlike-autor .navtooltip').css('display','none');
      });
	  
$('#pin<?php echo resPinId($u); ?>').delegate('a #comment<?php echo resPinId($u); ?>','mouseover',function(){
$('#comment<?php echo resPinId($u); ?>').toggleClass('comment-autor-hover', true);
$('.comment-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo resPinId($u); ?>').delegate('a #comment<?php echo resPinId($u); ?>','mouseleave',function(){
$('#comment<?php echo resPinId($u); ?>').toggleClass('comment-autor-hover', false);
$('.comment-autor .navtooltip').css('display','none');
      }); 
	  
$('#pin<?php echo resPinId($u); ?>').delegate('#like<?php echo resPinId($u); ?>','click',function(){
event.preventDefault();
var like = $('#small-likes<?php echo resPinId($u); ?>').html();
like++;
$('a div#like<?php echo resPinId($u); ?>').css('display','none');
$('a div#unlike<?php echo resPinId($u); ?>').css('display','inline-block');
$('#small-likes<?php echo resPinId($u); ?>').html(like);
      });
	  
$('#pin<?php echo resPinId($u); ?>').delegate('#unlike<?php echo resPinId($u); ?>','click',function(){
event.preventDefault();
var unlike = $('#small-likes<?php echo resPinId($u); ?>').html();
unlike--;
$('a div#unlike<?php echo resPinId($u); ?>').css('display','none');
$('a div#like<?php echo resPinId($u); ?>').css('display','inline-block');
$('#small-likes<?php echo resPinId($u); ?>').html(unlike);
      });
	  
$('#pin<?php echo resPinId($u); ?>').delegate('a #comment<?php echo resPinId($u); ?>','click',function(){
event.preventDefault();
$('#send<?php echo resPinId($u); ?>').toggleClass('send-comment-click');
var $container = $('#container_infinity');
$container.masonry();

      });
	  

	  
$('#pin<?php echo resPinId($u); ?>').delegate('#repin<?php echo resPinId($u); ?>','click',function(event){
event.preventDefault();
$('#all-section-main').toggleClass('fixed', true);
$('.box-re').css('display','block');
allheight<?php echo resPinId($u); ?> = $('.boxed-repin').height();
allheight1<?php echo resPinId($u); ?> = allheight<?php echo resPinId($u); ?>+50;
scrolli<?php echo resPinId($u); ?> = $('body').scrollTop();
scrolliz<?php echo resPinId($u); ?> = scrolli<?php echo resPinId($u); ?>+30;
allheight2<?php echo resPinId($u); ?> = allheight<?php echo resPinId($u); ?>+scrolliz<?php echo resPinId($u); ?>;
scrollim<?php echo resPinId($u); ?> = scrolli<?php echo resPinId($u); ?>+1000;
scrollix<?php echo resPinId($u); ?> = scrolli<?php echo resPinId($u); ?>;
$('#all-section-main').animate({
        'marginTop': '-='+scrollim<?php echo resPinId($u); ?>+'px'

}, 0);

$('.box-re').animate({
        'marginTop': '-='+scrolli<?php echo resPinId($u); ?>+'px',
		'height': allheight2<?php echo resPinId($u); ?>
}, 0);

$('.boxed-repin').animate({
        'marginTop': '+='+scrollix<?php echo resPinId($u); ?>+'px'
}, 0);

myid2<?php echo resPinId($u); ?> = '<?php echo resPinId($u); ?>';
$('.boxed-repin').html(myid2<?php echo resPinId($u); ?>);

      });  
	  
$('#pin<?php echo resPinId($u); ?>').delegate('#thumb<?php echo resPinId($u); ?>','mouseover',function(){
$('.thumb-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo resPinId($u); ?>').delegate('#thumb<?php echo resPinId($u); ?>','mouseleave',function(){
$('.thumb-autor .navtooltip').css('display','none');
      });  

$('#pin<?php echo resPinId($u); ?>').delegate('#thumb<?php echo resPinId($u); ?>','click',function(){
event.preventDefault();
$('#pin-nav<?php echo resPinId($u); ?>').toggleClass('navpin-show');
$('.thumb-autor img').toggleClass('thumb-autor-hover');
$('.thumb-autor .navtooltip, .comment-autor .navtooltip, .like-autor .navtooltip, .repin-autor .navtooltip, .unlike-autor .navtooltip').toggleClass('navtooltip-hide');
      });  

<?php 
}
} 
?>

$('#page-nav a').attr('href','/ajax/pin.php/user/?scroll=2');

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

});
  
  </script>

<script type='text/javascript'>
        $(document).ready(function() {
            $('a.account, a img.sectionpin').click(function() {
			
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
