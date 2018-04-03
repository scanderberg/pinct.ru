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

<div align='center' id='my-auth888' class='box-auth' style='height: 400%!important;'>

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





<?php 
for($q=17; $q<=32; $q++) {
?>

<div class='box-mini col2' id='board<?php echo $q; ?>'>

<div align='center' id='board-name-sweatch<?php echo $q; ?>' class='nameboard-sweatch'>

<div align='center' id='board-name-mini<?php echo $q; ?>' class='nameboard-mini'>
Самолёты
</div>

<div align='center' id='board-name-galka<?php echo $q; ?>' class='nameboard-galka'></div>
</div>


<div align='center' id='board-dropp-mini<?php echo $q; ?>' class='nameboard-dropp'>

<div align='center' id='board-hover-mini<?php echo $q; ?>' class='nameboard-hover'>
<div align='center' class='plus-hover' id='plus-hover17'></div>
</div>

<div align='center' id='board-unhover-mini<?php echo $q; ?>' class='nameboard-unhover'>
<div align='center' class='galka-hover' id='galka-hover<?php echo $q; ?>'></div>
</div>

<div align='center' id='board-hover-pins<?php echo $q; ?>' class='board-hover-pins'>
Самолёты

<div align='center' class='board-hover-fix'>

<img class='tik-fix' id='tik-fix<?php echo $q; ?>' src='http://pinct.ru/img/tik.png' align='left' width='20'/>

<div align='center' class='board-hover-height'>


<div align='center' class='subscribe-register' id='sub-register<?php echo $q; ?>'>Подписаться</div>
<div align='center' class='unsubscribe-register' id='unsub-register<?php echo $q; ?>'>Отписаться</div>
<br>
<span class='follow-sub-register'><b>25</b> Подписчиков</span>
<br>

<div align='center'>
<div align='center' class='board-hover-content'>
<div align='center' id='board-pin-elem1<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/0f65158b4e8227ce61438a51e51e6fc0-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr1<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/2bbf0e5f13393391608b38c1205d31c6-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/5c8ce065fa5ca05d7919f6968eaf3ab9-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/7fada22109fc18e4700fc95beb9ff7b9-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/086a21bb94704d7c9fc63ffff7353ede-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/810a07566d21b7960b7b00f1cb82b7ff-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/530463-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/530477-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/479850_wookmark-hash.gif' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/529057_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/529088_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/530046_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/530065_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/530121_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/531035-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='board-pin-elem<?php echo $q; ?>' class='board-pin-elem'><img src='http://pinct.ru/tag/531000-hash.jpg' align='center' width='92'/><div align='center' id='board-pin-descr<?php echo $q; ?>' class='board-pin-descr'><div align='center'>Аренда квартир</div></div></div>
<br>
<a align='center' class='more-board-register' id='more-register<?php echo $q; ?>' href='' return='false'><div align='center' class='more-register' id='more-register<?php echo $q; ?>'>Посмотреть ещё</div></a>
<br>
  
</div>
</div>

</div>
</div>

<div align='center' class='board-niz-fix'></div>

</div>

</div>

<div align='center' id='board<?php echo $q; ?>' class='sectionboard-mini'>
<div align='center' id='board-img<?php echo $q; ?>' class='imgboard-mini'>

<a class='myauthor' href='#' return='false'><img class='sectionboard-mini' src='http://pinct.ru/boards/530121_wookmark-boards.jpg' align='bottom' width='148px' alt='user'/></a>
<br>
<a class='myauthor' href='#' return='false'><img class='qastboard-mini' src='http://pinct.ru/tag/f19b14536fa7405fc11a0247f7cc6c75-hash.jpg' align='bottom' width='34px' alt='user'/></a>

<a class='myauthor' href='#' return='false'><img class='pictboard-mini' src='http://pinct.ru/tag/7fada22109fc18e4700fc95beb9ff7b9-hash.jpg' align='bottom' width='34px' alt='user'/></a>

<a class='myauthor' href='#' return='false'><img class='pictboard-mini' src='http://pinct.ru/tag/14327489188nkg4-hash.jpg' align='bottom' width='34px' alt='user'/></a>

<a class='myauthor' href='#' return='false'><img class='lastboard-mini'  src='http://pinct.ru/tag/14324965214gk8n-hash.jpg' align='bottom' width='33px' height='34px' alt='user'/></a>

</div>
	
  </div>
</div>

<?php 
}
?>

<br><br>



<div align='center' id='load-register2' class='load-register'>
Загрузить ещё
</div>

<br>

<div align='center' class='left-register2-capt' style='width: 43%!important;'></div>
<div align='center' class='center-register2-capt'>
Хэш-теги
</div>
<div align='center' class='right-register2-capt' style='width: 43%!important;'></div>
<br><br>

<div align='center' id='hash-tag-register17' class='hash-tag-register'>
<b>#ИдёмВКино</b>






<?php echo $j; ?>


<div align='center' id='hash-tag-hover-pins<?php echo $j; ?>' class='hash-tag-hover-pins'>
#ИдёмВКино

<div align='center' class='hash-tag-hover-fix'>

<img class='tik-fix' id='tik-fix<?php echo $j; ?>' src='http://pinct.ru/img/tik.png' align='left' width='20'/>

<div align='center' class='hash-tag-hover-height'>


<div align='center' class='subscribe-register-hash-tag' id='sub-register<?php echo $j; ?>'>Подписаться</div>
<div align='center' class='unsubscribe-register-hash-tag' id='unsub-register<?php echo $j; ?>'>Отписаться</div>
<br>
<span class='follow-sub-register'><b>25</b> Подписчиков</span>
<br>

<div align='center'>
<div align='center' class='hash-tag-hover-content'>
<div align='center' id='hash-tag-pin-elem1<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/0f65158b4e8227ce61438a51e51e6fc0-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr1<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/2bbf0e5f13393391608b38c1205d31c6-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/5c8ce065fa5ca05d7919f6968eaf3ab9-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/7fada22109fc18e4700fc95beb9ff7b9-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/086a21bb94704d7c9fc63ffff7353ede-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/810a07566d21b7960b7b00f1cb82b7ff-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/530463-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/530477-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/479850_wookmark-hash.gif' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/529057_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/529088_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/530046_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/530065_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/530121_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/531035-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div><div align='center' id='hash-tag-pin-elem<?php echo $j; ?>' class='hash-tag-pin-elem'><img src='http://pinct.ru/tag/531000-hash.jpg' align='center' width='92'/><div align='center' id='hash-tag-pin-descr<?php echo $j; ?>' class='hash-tag-pin-descr'><div align='center'>Аренда квартир</div></div></div>
<br>
<a align='center' class='more-hash-tag-register' id='more-register<?php echo $j; ?>' href='' return='false'><div align='center' class='more-register' id='more-register<?php echo $j; ?>'>Посмотреть ещё</div></a>
<br>
  
</div>
</div>

</div>
</div>

<div align='center' class='hash-tag-niz-fix'></div>

</div>











</div>

<br><br>

<div align='center' id='load-register5' class='load-register'>
Загрузить ещё
</div>

<br>

<div align='center' class='left-register2-capt' style='width: 41%!important;'></div>
<div align='center' class='center-register2-capt'>
Пользователи
</div>
<div align='center' class='right-register2-capt' style='width: 41%!important;'></div>
<br><br>

<?php 
for($m=17; $m<=32; $m++) {
?>

<div class='box-mini col2' id='user-reg<?php echo $m; ?>'>


<div align='center' id='user-name-sweatch<?php echo $m; ?>' class='nameuser-sweatch'>

<div align='center' id='user-name-mini<?php echo $m; ?>' class='nameuser-mini'>
redfoxx
</div>

<div align='center' id='user-name-galka<?php echo $m; ?>' class='nameuser-galka'></div>
</div>


<div align='center' id='user-dropp-mini<?php echo $m; ?>' class='nameuser-dropp'>

<div align='center' id='user-hover-mini<?php echo $m; ?>' class='nameuser-hover'>
<div align='center' class='plus-hover-user' id='plus-hover-user17'></div>
</div>

<div align='center' id='user-unhover-mini<?php echo $m; ?>' class='nameuser-unhover'>
<div align='center' class='galka-hover-user' id='galka-hover-user<?php echo $m; ?>'></div>
</div>

<div align='center' id='user-hover-pins<?php echo $m; ?>' class='user-hover-pins'>
redfoxx

<div align='center' class='user-hover-fix'>

<img class='tik-fix-user' id='tik-fix-user<?php echo $m; ?>' src='http://pinct.ru/img/tik.png' align='left' width='20'/>

<div align='center' class='user-hover-height'>

<div align='center' class='subscribe-register' id='sub-register-user<?php echo $m; ?>'>Подписаться</div>
<div align='center' class='unsubscribe-register' id='unsub-register-user<?php echo $m; ?>'>Отписаться</div>
<br>
<span class='follow-sub-register' id='follow-sub-register-user<?php echo $m; ?>'><b>177</b> Подписчиков</span>
<br>

<div align='center'>
<div align='center' class='user-hover-content'>
<div align='center' id='user-pin-elem1<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/0f65158b4e8227ce61438a51e51e6fc0-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr1<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/2bbf0e5f13393391608b38c1205d31c6-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/5c8ce065fa5ca05d7919f6968eaf3ab9-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/7fada22109fc18e4700fc95beb9ff7b9-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/086a21bb94704d7c9fc63ffff7353ede-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/810a07566d21b7960b7b00f1cb82b7ff-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/530463-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/530477-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/479850_wookmark-hash.gif' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/529057_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/529088_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/530046_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/530065_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/530121_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/531035-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div><div align='center' id='user-pin-elem<?php echo $m; ?>' class='user-pin-elem'><img src='http://pinct.ru/tag/531000-hash.jpg' align='center' width='92'/><div align='center' id='user-pin-descr<?php echo $m; ?>' class='user-pin-descr'><div align='center'>Мой интерьер</div></div></div>
<br>
<a align='center' class='more-board-register' id='more-register<?php echo $m; ?>' href='' return='false'><div align='center' class='more-register' id='more-register<?php echo $m; ?>'>Посмотреть ещё</div></a>
<br>
  
</div>
</div>

</div>
</div>

<div align='center' class='user-niz-fix'></div>

</div>

</div>


<div align='center' id='user-reg-mini' class='sectionuser-mini'>
<div align='center' id='user-img-mini' class='imguser-mini'>

<img class='pictuser-mini' src='http://pinct.ru/tag/f19b14536fa7405fc11a0247f7cc6c75-hash.jpg' align='center' width='71px' alt='user'/>

<img class='pictuser-mini' src='http://pinct.ru/tag/7fada22109fc18e4700fc95beb9ff7b9-hash.jpg' align='center' width='71px' alt='user'/>

<img class='pictuser-mini' src='http://pinct.ru/tag/14327489188nkg4-hash.jpg' align='center' width='71px' alt='user'/>

<img class='pictuser-mini'  src='http://pinct.ru/tag/14324965214gk8n-hash.jpg' align='center' width='71px' alt='user'/>
<div align='center' class='avatar-reg' id='avatar-reg'>
<img src='http://pinct.ru/user/14164245112nk04.jpg' align='center' width='100px' alt='user'/>
</div>
</div>
	
  </div>
</div>

<?php 
}
?>

<br><br>

<div align='center' id='load-register3' class='load-register'>
Загрузить ещё
</div>

<br>

<div align='center' class='left-register2-capt' style='width: 42.5%!important;'></div>
<div align='center' class='center-register2-capt'>
Категории
</div>
<div align='center' class='right-register2-capt' style='width: 42.5%!important;'></div>

<br>
<br>

<?php 
for($p=17; $p<=32; $p++) {
?>

<div class='box-mini col2' id='category-reg<?php echo $p; ?>'>


<div align='center' id='category-name-sweatch<?php echo $p; ?>' class='namecategory-sweatch'>

<div align='center' id='category-name-mini<?php echo $p; ?>' class='namecategory-mini'>
Котики
</div>

<div align='center' id='category-name-galka<?php echo $p; ?>' class='namecategory-galka'></div>
</div>


<div align='center' id='category-dropp-mini<?php echo $p; ?>' class='namecategory-dropp'>

<div align='center' id='category-hover-mini<?php echo $p; ?>' class='namecategory-hover'>
<div align='center' class='plus-hover-category' id='plus-hover-category17'></div>
</div>

<div align='center' id='category-unhover-mini<?php echo $p; ?>' class='namecategory-unhover'>
<div align='center' class='galka-hover-category' id='galka-hover-category<?php echo $p; ?>'></div>
</div>

<div align='center' id='category-hover-pins<?php echo $p; ?>' class='category-hover-pins'>
Котики

<div align='center' class='category-hover-fix'>

<img class='tik-fix-category' id='tik-fix-category<?php echo $p; ?>' src='http://pinct.ru/img/tik.png' align='left' width='20'/>

<div align='center' class='category-hover-height'>

<div align='center' class='subscribe-register' id='sub-register-category<?php echo $p; ?>'>Подписаться</div>
<div align='center' class='unsubscribe-register' id='unsub-register-category<?php echo $p; ?>'>Отписаться</div>
<br>
<span class='follow-sub-register' id='follow-sub-register-category<?php echo $p; ?>'><b>1578</b> Подписчиков</span>
<br>

<div align='center'>
<div align='center' class='category-hover-content'>
<div align='center' id='category-pin-elem1<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/0f65158b4e8227ce61438a51e51e6fc0-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr1<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/2bbf0e5f13393391608b38c1205d31c6-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/5c8ce065fa5ca05d7919f6968eaf3ab9-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/7fada22109fc18e4700fc95beb9ff7b9-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/086a21bb94704d7c9fc63ffff7353ede-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/810a07566d21b7960b7b00f1cb82b7ff-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/530463-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/530477-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/479850_wookmark-hash.gif' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/529057_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/529088_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/530046_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/530065_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/530121_wookmark-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/531035-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div><div align='center' id='category-pin-elem<?php echo $p; ?>' class='category-pin-elem'><img src='http://pinct.ru/tag/531000-hash.jpg' align='center' width='92'/><div align='center' id='category-pin-descr<?php echo $p; ?>' class='category-pin-descr'><div align='center'>Мой котэ</div></div></div>
<br>
<a align='center' class='more-board-register' id='more-register<?php echo $p; ?>' href='' return='false'><div align='center' class='more-register' id='more-register<?php echo $p; ?>'>Посмотреть ещё</div></a>
<br>
  
</div>
</div>

</div>
</div>

<div align='center' class='category-niz-fix'></div>

</div>

</div>


<div align='center' id='category-reg-mini' class='sectioncategory-mini'>
<div align='center' id='category-img-mini' class='imgcategory-mini'>

<img class='pictcategory-mini' src='http://pinct.ru/tag/f19b14536fa7405fc11a0247f7cc6c75-hash.jpg' align='center' width='71px' alt='category'/>

<img class='pictcategory-mini' src='http://pinct.ru/tag/7fada22109fc18e4700fc95beb9ff7b9-hash.jpg' align='center' width='71px' alt='category'/>

<img class='pictcategory-mini' src='http://pinct.ru/tag/14327489188nkg4-hash.jpg' align='center' width='71px' alt='category'/>

<img class='pictcategory-mini'  src='http://pinct.ru/tag/14324965214gk8n-hash.jpg' align='center' width='71px' alt='category'/>


</div>
	
  </div>
</div>

<?php 
}
?>

<br><br>

<div align='center' id='load-register4' class='load-register'>
Загрузить ещё
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br>








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

screenWidthRegister = $('body').width();

<?php 
for($z=17; $z<=32; $z++) {
?>

changeDropp<?php echo $z; ?> = $('div#board<?php echo $z; ?>').offset();
offsDropp<?php echo $z; ?> = screenWidthRegister - changeDropp<?php echo $z; ?>.left;

if (offsDropp<?php echo $z; ?> < 400) {
	
$('div#board-hover-pins<?php echo $z; ?>').toggleClass('board-hover-pins-left', true);
$('img#tik-fix<?php echo $z; ?>').toggleClass('tik-fix-right', true);
$('img#tik-fix<?php echo $z; ?>').attr('src', 'http://pinct.ru/img/tik-right.png');
	
}

$(window).scroll(function(){
	
screenWidthRegisterRes<?php echo $z; ?> = $('body').width();
changeDroppRes<?php echo $z; ?> = $('div#board<?php echo $z; ?>').offset();
offsDroppRes<?php echo $z; ?> = screenWidthRegisterRes<?php echo $z; ?> - changeDroppRes<?php echo $z; ?>.left;
	
if (offsDroppRes<?php echo $z; ?> < 400) {
$('div#board-hover-pins<?php echo $z; ?>').toggleClass('board-hover-pins-left', true);
$('img#tik-fix<?php echo $z; ?>').toggleClass('tik-fix-right', true);
$('img#tik-fix<?php echo $z; ?>').attr('src', 'http://pinct.ru/img/tik-right.png');
}
else {
$('div#board-hover-pins<?php echo $z; ?>').toggleClass('board-hover-pins-left',false);
$('img#tik-fix<?php echo $z; ?>').toggleClass('tik-fix-right', false);
$('img#tik-fix<?php echo $z; ?>').attr('src', 'http://pinct.ru/img/tik.png');
}
	
});


/*
$('div#board<?php echo $z; ?>').delegate('div#board-pin-elem1<?php echo $z; ?>','mouseover',function(){
$('div#board-pin-descr1<?php echo $z; ?>').css('display','none');
});

$('div#board<?php echo $z; ?>').delegate('div#board-pin-elem1<?php echo $z; ?>','mouseleave',function(){
$('div#board-pin-descr1<?php echo $z; ?>').css('display','block');
});
*/


$('div.content-register2').delegate('div#board<?php echo $z; ?>','mouseover',function(){
$('div#board-name-sweatch<?php echo $z; ?>').css('display','none');
$('div#board-dropp-mini<?php echo $z; ?>').css('display','block');
});

$('div.content-register2').delegate('div#board<?php echo $z; ?>','mouseleave',function(){
$('div#board-dropp-mini<?php echo $z; ?>').css('display','none');
$('div#board-name-sweatch<?php echo $z; ?>').css('display','block');
});

$('div#board-dropp-mini<?php echo $z; ?>').delegate('div#board-hover-mini<?php echo $z; ?>','click',function(){

$('div#board-hover-mini<?php echo $z; ?>').css('display','none');
$('div#board-name-mini<?php echo $z; ?>').css('display','none');
$('div#board-unhover-mini<?php echo $z; ?>').css('display','block');
$('div#board-name-galka<?php echo $z; ?>').css('display','block');
$('div#sub-register<?php echo $z; ?>').css('display','none');
$('div#unsub-register<?php echo $z; ?>').css('display','inline-block');

});

$('div#board-dropp-mini<?php echo $z; ?>').delegate('div#board-unhover-mini<?php echo $z; ?>','click',function(){

$('div#board-hover-mini<?php echo $z; ?>').css('display','block');
$('div#board-name-mini<?php echo $z; ?>').css('display','block');
$('div#board-unhover-mini<?php echo $z; ?>').css('display','none');
$('div#board-name-galka<?php echo $z; ?>').css('display','none');
$('div#sub-register<?php echo $z; ?>').css('display','inline-block');
$('div#unsub-register<?php echo $z; ?>').css('display','none');	

});

$('div#board-dropp-mini<?php echo $z; ?>').delegate('div#sub-register<?php echo $z; ?>','click',function(){

$('div#board-hover-mini<?php echo $z; ?>').css('display','none');
$('div#board-name-mini<?php echo $z; ?>').css('display','none');
$('div#board-unhover-mini<?php echo $z; ?>').css('display','block');
$('div#board-name-galka<?php echo $z; ?>').css('display','block');
$('div#sub-register<?php echo $z; ?>').css('display','none');
$('div#unsub-register<?php echo $z; ?>').css('display','inline-block');

});

$('div#board-dropp-mini<?php echo $z; ?>').delegate('div#unsub-register<?php echo $z; ?>','click',function(){

$('div#board-hover-mini<?php echo $z; ?>').css('display','block');
$('div#board-name-mini<?php echo $z; ?>').css('display','block');
$('div#board-unhover-mini<?php echo $z; ?>').css('display','none');
$('div#board-name-galka<?php echo $z; ?>').css('display','none');
$('div#sub-register<?php echo $z; ?>').css('display','inline-block');
$('div#unsub-register<?php echo $z; ?>').css('display','none');	

});

<?php 
}
?>

$('div.content-register2').delegate('div#load-register2','mouseover',function(){
$('div#load-register2').toggleClass('load-register-hover', true);
});

$('div.content-register2').delegate('div#load-register2','mouseleave',function(){
$('div#load-register2').toggleClass('load-register-hover', false);
});


<?php 
for($s=17; $s<=32; $s++) {
?>

changeDroppUser<?php echo $s; ?> = $('div#user-reg<?php echo $s; ?>').offset();
offsDroppUser<?php echo $s; ?> = screenWidthRegister - changeDroppUser<?php echo $s; ?>.left;

if (offsDroppUser<?php echo $s; ?> < 400) {
	
$('div#user-hover-pins<?php echo $s; ?>').toggleClass('board-hover-pins-left', true);
$('img#tik-fix-user<?php echo $s; ?>').toggleClass('tik-fix-right', true);
$('img#tik-fix-user<?php echo $s; ?>').attr('src', 'http://pinct.ru/img/tik-right.png');
	
}

$(window).scroll(function(){
	
screenWidthRegisterResUser<?php echo $s; ?> = $('body').width();
changeDroppResUser<?php echo $s; ?> = $('div#user-reg<?php echo $s; ?>').offset();
offsDroppResUser<?php echo $s; ?> = screenWidthRegisterResUser<?php echo $s; ?> - changeDroppResUser<?php echo $s; ?>.left;
	
if (offsDroppResUser<?php echo $s; ?> < 400) {
$('div#user-hover-pins<?php echo $s; ?>').toggleClass('board-hover-pins-left', true);
$('img#tik-fix-user<?php echo $s; ?>').toggleClass('tik-fix-right', true);
$('img#tik-fix-user<?php echo $s; ?>').attr('src', 'http://pinct.ru/img/tik-right.png');
}
else {
$('div#user-hover-pins<?php echo $s; ?>').toggleClass('board-hover-pins-left',false);
$('img#tik-fix-user<?php echo $s; ?>').toggleClass('tik-fix-right', false);
$('img#tik-fix-user<?php echo $s; ?>').attr('src', 'http://pinct.ru/img/tik.png');
}
	
});

$('div.content-register2').delegate('div#user-reg<?php echo $s; ?>','mouseover',function(){
$('div#user-name-sweatch<?php echo $s; ?>').css('display','none');
$('div#user-dropp-mini<?php echo $s; ?>').css('display','block');
});

$('div.content-register2').delegate('div#user-reg<?php echo $s; ?>','mouseleave',function(){
$('div#user-dropp-mini<?php echo $s; ?>').css('display','none');
$('div#user-name-sweatch<?php echo $s; ?>').css('display','block');
});


$('div#user-dropp-mini<?php echo $s; ?>').delegate('div#user-hover-mini<?php echo $s; ?>','click',function(){

$('div#user-hover-mini<?php echo $s; ?>').css('display','none');
$('div#user-name-mini<?php echo $s; ?>').css('display','none');
$('div#user-unhover-mini<?php echo $s; ?>').css('display','block');
$('div#user-name-galka<?php echo $s; ?>').css('display','block');
$('div#sub-register-user<?php echo $s; ?>').css('display','none');
$('div#unsub-register-user<?php echo $s; ?>').css('display','inline-block');

});

$('div#user-dropp-mini<?php echo $s; ?>').delegate('div#user-unhover-mini<?php echo $s; ?>','click',function(){

$('div#user-hover-mini<?php echo $s; ?>').css('display','block');
$('div#user-name-mini<?php echo $s; ?>').css('display','block');
$('div#user-unhover-mini<?php echo $s; ?>').css('display','none');
$('div#user-name-galka<?php echo $s; ?>').css('display','none');
$('div#sub-register-user<?php echo $s; ?>').css('display','inline-block');
$('div#unsub-register-user<?php echo $s; ?>').css('display','none');	

});

$('div#user-dropp-mini<?php echo $s; ?>').delegate('div#sub-register-user<?php echo $s; ?>','click',function(){

$('div#user-hover-mini<?php echo $s; ?>').css('display','none');
$('div#user-name-mini<?php echo $s; ?>').css('display','none');
$('div#user-unhover-mini<?php echo $s; ?>').css('display','block');
$('div#user-name-galka<?php echo $s; ?>').css('display','block');
$('div#sub-register-user<?php echo $s; ?>').css('display','none');
$('div#unsub-register-user<?php echo $s; ?>').css('display','inline-block');

});

$('div#user-dropp-mini<?php echo $s; ?>').delegate('div#unsub-register-user<?php echo $s; ?>','click',function(){

$('div#user-hover-mini<?php echo $s; ?>').css('display','block');
$('div#user-name-mini<?php echo $s; ?>').css('display','block');
$('div#user-unhover-mini<?php echo $s; ?>').css('display','none');
$('div#user-name-galka<?php echo $s; ?>').css('display','none');
$('div#sub-register-user<?php echo $s; ?>').css('display','inline-block');
$('div#unsub-register-user<?php echo $s; ?>').css('display','none');	

});

<?php 
}
?>




<?php 
for($q=17; $q<=32; $q++) {
?>

changeDroppCategory<?php echo $q; ?> = $('div#category-reg<?php echo $q; ?>').offset();
offsDroppCategory<?php echo $q; ?> = screenWidthRegister - changeDroppCategory<?php echo $q; ?>.left;

if (offsDroppCategory<?php echo $q; ?> < 400) {
	
$('div#category-hover-pins<?php echo $q; ?>').toggleClass('board-hover-pins-left', true);
$('img#tik-fix-category<?php echo $q; ?>').toggleClass('tik-fix-right', true);
$('img#tik-fix-category<?php echo $q; ?>').attr('src', 'http://pinct.ru/img/tik-right.png');
	
}

$(window).scroll(function(){
	
screenWidthRegisterResCategory<?php echo $q; ?> = $('body').width();
changeDroppResCategory<?php echo $q; ?> = $('div#category-reg<?php echo $q; ?>').offset();
offsDroppResCategory<?php echo $q; ?> = screenWidthRegisterResCategory<?php echo $q; ?> - changeDroppResCategory<?php echo $q; ?>.left;
	
if (offsDroppResCategory<?php echo $q; ?> < 400) {
$('div#category-hover-pins<?php echo $q; ?>').toggleClass('board-hover-pins-left', true);
$('img#tik-fix-category<?php echo $q; ?>').toggleClass('tik-fix-right', true);
$('img#tik-fix-category<?php echo $q; ?>').attr('src', 'http://pinct.ru/img/tik-right.png');
}
else {
$('div#category-hover-pins<?php echo $q; ?>').toggleClass('board-hover-pins-left',false);
$('img#tik-fix-category<?php echo $q; ?>').toggleClass('tik-fix-right', false);
$('img#tik-fix-category<?php echo $q; ?>').attr('src', 'http://pinct.ru/img/tik.png');
}
	
});

$('div.content-register2').delegate('div#category-reg<?php echo $q; ?>','mouseover',function(){
$('div#category-name-sweatch<?php echo $q; ?>').css('display','none');
$('div#category-dropp-mini<?php echo $q; ?>').css('display','block');
});

$('div.content-register2').delegate('div#category-reg<?php echo $q; ?>','mouseleave',function(){
$('div#category-dropp-mini<?php echo $q; ?>').css('display','none');
$('div#category-name-sweatch<?php echo $q; ?>').css('display','block');
});


$('div#category-dropp-mini<?php echo $q; ?>').delegate('div#category-hover-mini<?php echo $q; ?>','click',function(){

$('div#category-hover-mini<?php echo $q; ?>').css('display','none');
$('div#category-name-mini<?php echo $q; ?>').css('display','none');
$('div#category-unhover-mini<?php echo $q; ?>').css('display','block');
$('div#category-name-galka<?php echo $q; ?>').css('display','block');
$('div#sub-register-category<?php echo $q; ?>').css('display','none');
$('div#unsub-register-category<?php echo $q; ?>').css('display','inline-block');

});

$('div#category-dropp-mini<?php echo $q; ?>').delegate('div#category-unhover-mini<?php echo $q; ?>','click',function(){

$('div#category-hover-mini<?php echo $q; ?>').css('display','block');
$('div#category-name-mini<?php echo $q; ?>').css('display','block');
$('div#category-unhover-mini<?php echo $q; ?>').css('display','none');
$('div#category-name-galka<?php echo $q; ?>').css('display','none');
$('div#sub-register-category<?php echo $q; ?>').css('display','inline-block');
$('div#unsub-register-category<?php echo $q; ?>').css('display','none');	

});

$('div#category-dropp-mini<?php echo $q; ?>').delegate('div#sub-register-category<?php echo $q; ?>','click',function(){

$('div#category-hover-mini<?php echo $q; ?>').css('display','none');
$('div#category-name-mini<?php echo $q; ?>').css('display','none');
$('div#category-unhover-mini<?php echo $q; ?>').css('display','block');
$('div#category-name-galka<?php echo $q; ?>').css('display','block');
$('div#sub-register-category<?php echo $q; ?>').css('display','none');
$('div#unsub-register-category<?php echo $q; ?>').css('display','inline-block');

});

$('div#category-dropp-mini<?php echo $q; ?>').delegate('div#unsub-register-category<?php echo $q; ?>','click',function(){

$('div#category-hover-mini<?php echo $q; ?>').css('display','block');
$('div#category-name-mini<?php echo $q; ?>').css('display','block');
$('div#category-unhover-mini<?php echo $q; ?>').css('display','none');
$('div#category-name-galka<?php echo $q; ?>').css('display','none');
$('div#sub-register-category<?php echo $q; ?>').css('display','inline-block');
$('div#unsub-register-category<?php echo $q; ?>').css('display','none');	

});

<?php 
}
?>

$('div.content-register2').delegate('div#hash-tag-register17','mouseover',function(){
$('div#hash-tag-register17').toggleClass('hash-tag-register-hover', true);
$('div#hash-tag-register17 b').toggleClass('hash-tag-b-hover', true);
});

$('div.content-register2').delegate('div#hash-tag-register17','mouseleave',function(){
$('div#hash-tag-register17').toggleClass('hash-tag-register-hover', false);
$('div#hash-tag-register17 b').toggleClass('hash-tag-b-hover', true);
});











$('div.content-register2').delegate('div#load-register3','mouseover',function(){
$('div#load-register3').toggleClass('load-register-hover', true);
});

$('div.content-register2').delegate('div#load-register3','mouseleave',function(){
$('div#load-register3').toggleClass('load-register-hover', false);
});

$('div.content-register2').delegate('div#load-register4','mouseover',function(){
$('div#load-register4').toggleClass('load-register-hover', true);
});

$('div.content-register2').delegate('div#load-register4','mouseleave',function(){
$('div#load-register4').toggleClass('load-register-hover', false);
});

$('div.content-register2').delegate('div#load-register5','mouseover',function(){
$('div#load-register5').toggleClass('load-register-hover', true);
});

$('div.content-register2').delegate('div#load-register5','mouseleave',function(){
$('div#load-register5').toggleClass('load-register-hover', false);
});


});

</script>

</body>
</html>
