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