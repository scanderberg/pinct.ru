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