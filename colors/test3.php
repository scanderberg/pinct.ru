<?php
require_once 'main/conf.php';
require_once 'main/db.php';
?>

<!DOCTYPE html>
<html lang='ru'>
 <head>
 
   <title>Pinct</title>
   
   <meta charset='utf-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
   
   <link href='http://pinct.ru/newstyle.css' rel='stylesheet'>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <script type='text/javascript' src='http://pinct.ru/js/easing.js'></script>
   <script type="text/javascript" src="http://pinct.ru/js/jqueryrotate.2.1.js"></script>
   <script type='text/javascript' src='http://pinct.ru/js/pinct2-1.js'></script>
   <script type='text/javascript' src='http://pinct.ru/js/pinct1-1.js'></script>

 </head>

<body class='allwidth' id='allbody' onload='start()'>

<div align='center' id='my-auth888' class='box-auth'>

<div align='center' id='step-reg888' class='step-register' style='margin-bottom: 7px;'>
<div align='center'>
<div align='center' class='step-capt'>
Ваши интересы и увлечения.
</div>
<div align='center' class='step2'>
1
</div>
<div align='center' class='step-middle'></div>
<div align='center' class='step1'>
2
</div>

</div>
</div> 

<div align='center' class='center-register2'>

<span>Помогите нам найти Ваши увлечения и интересы, введя их через запятую :)<span>

<br>

<input type='text' name='reg-search' id='reg-search' placeholder='Введите хобби, увлечения, интересы...'>
  
  <input type='image' name='image-reg-search' id='image-reg-search' src='http://pinct.ru/img/search-register1.png'>
<br>
<span>Выберите не менее 3-х вариантов.<span>
<br>

<div align='center' class='content-register2'>

<div align='center' class='left-register2-capt'></div>
<div align='center' class='center-register2-capt'>
Альбомы
</div>
<div align='center' class='right-register2-capt'></div>
<br><br>

<div class='box col4' id='board17'>

<div align='center' id='board17' class='sectionboard'>
<div align='center' id='board-img17' class='imgboard'>

<a class='myauthor' href='#' return='false'><img class='sectionboard' src='http://pinct.ru/boards/530121_wookmark-boards.jpg' align='bottom' width='249px' alt='user'/></a>
<div align='center' id='board-name17' class='nameboard'>
<div align='center'>
<?php echo resBoardsName($q); ?>
</div>
</div>
<a class='myauthor' href='#' return='false'><img class='pictboard' src='http://pinct.ru/tag/f19b14536fa7405fc11a0247f7cc6c75-hash.jpg' align='bottom' width='59px' alt='user'/></a>

<a class='myauthor' href='#' return='false'><img class='pictboard' src='http://pinct.ru/tag/7fada22109fc18e4700fc95beb9ff7b9-hash.jpg' align='bottom' width='59px' alt='user'/></a>

<a class='myauthor' href='#' return='false'><img class='pictboard' src='http://pinct.ru/tag/14327489188nkg4-hash.jpg' align='bottom' width='59px' alt='user'/></a>

<a class='myauthor' href='#' return='false'><img class='lastboard'  src='http://pinct.ru/tag/14324965214gk8n-hash.jpg' align='bottom' width='59px' alt='user'/></a>

<a class='sub-author' id='sub17' href='' return='false'><div align='center' class='subscribe' id='sub17'>Подписаться</div></a>

<span class='follow-sub'><b>25</b> Подписчиков</span>
<br><br>
</div>
	
  </div>
</div>














</div>

</div>




</div>


<div align='center' id='show-auth888' class='show-auth'>
<div align='center'>

</div>
</div>

<script type='text/javascript'>

$(document).ready(function() { 

$('div.show-auth').animate({
'marginTop': '-1530px'
}, 120000, 'linear');

$('div.step-register').animate({
'opacity': '1'
}, 1000, 'linear');

$('div.box-auth').delegate('div.open-reg','click',function(){
event.preventDefault();
$('div.center-auth').animate({
'marginLeft': '-2200px'
}, 500, 'easeInBack');
});

});

</script>

</body>
</html>
