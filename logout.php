<?php
require_once '/var/www/www-root/data/www/pinct.ru/main/conf.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/db.php';
require_once '/var/www/www-root/data/www/pinct.ru/main/options.php';
?>


<!DOCTYPE html>
<html lang='ru'>
 <head>
 
   <title>Вход - Коллекции и идеи со всего мира | Pinct</title>
   
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

<?php
$myRand = rand(1, 13);
?>

<div align='center' id='my-auth888' class='box-auth'>

<div align='center' id='step-reg888' class='step-register'>
<div align='center'>
<div align='center' class='step-capt'>
Регистрация в 2 шага.
</div>
<div align='center' class='step1'>
1
</div>
<div align='center' class='step-middle'></div>
<div align='center' class='step2'>
2
</div>

</div>
</div> 

<div align='center' class='center-register'>


<div align='center' id='my-register888' class='boxed-register' style='background-image:url(register/<?php echo $myRand; ?>.jpg); background-repeat: no-repeat;'> 
  
<a class='open-auth' id='open-auth888' href='' return='false'><div align='center' class='open-auth' id='open-auth888'>Уже есть аккаунт</div></a>
  
<div align='center' id='logo-reg888' class='logo-register'>
<img class='logo-icon' src='http://pinct.ru/img/logo4.png' align='center' width='85'/>
</div>

<div align='center' id='capt-reg888' class='capt-reg'>
<span class='title'><?php

if ($myRand == 1) {

echo "Здесь она нашла идеи для новой причёски!";

}

elseif ($myRand == 2 or $myRand == 4) {

echo "Здесь она нашла новые рецепты пиццы!";

}

elseif ($myRand == 3) {

echo "Здесь он нашёл вдохновение для ремонта!";

}

elseif ($myRand == 5) {

echo "Здесь он нашёл целые тонны инфографики!";

}

elseif ($myRand == 6) {

echo "Здесь он открыл для себя подводный мир!";

}

elseif ($myRand == 7) {

echo "Здесь он увидел идеи для своего ландшафта!";

}

elseif ($myRand == 8) {

echo "Здесь она наткнулась на прикольных котиков!";

}

elseif ($myRand == 9) {

echo "Здесь он открыл для себя новые галактики!";

}

elseif ($myRand == 10) {

echo "Здесь она ушла с головой в онлайн-шопинг!";

}

elseif ($myRand == 11) {

echo "Здесь она узнала, как нужно одеваться!";

}

elseif ($myRand == 12) {

echo "Здесь он увидел новые идеи для интерьера!";

}

elseif ($myRand == 13) {

echo "Здесь он нашёл новые карты и схемы!";

}

else {

echo "Здесь она нашла новое вдохновение!";

}

?></span>
<br>
<span class='descr'>Находите и сохраняйте всё, что вас вдохновляет. Присоединяйтесь к Pinct!</span> 
</div>
<div align='center' id='social-reg888' class='social-reg'>
<div align='center' class='left-social-capt'></div>
<div align='center' class='center-social-capt'>
<span class='social'>войдите через соц. сети</span>
</div>
<div align='center' class='right-social-capt'></div>
<br>

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
  
<div align='center' id='only-auth888' class='only-auth'>

<div align='center' class='left-only-auth-capt'></div>
<div align='center' class='center-only-auth-capt'>
<span class='reg-only-auth'>или зарегистрируйтесь</span>
</div>
<div align='center' class='right-only-auth-capt'></div>


  
<div align='center' id='form-register888' class='form-register'>
<div align='center'>
<div align='center'>
  
<div align='right' class='error-reg-email' id='error-reg-email'><img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/></div>

<input type='text' id='email-register' class='email-register' name='email-register' placeholder='Адрес эл. почты' maxlength='50' />
<br>
<img class='captcha-img' align='left' src='http://pinct.ru/plugins/captcha.php' height='50px' />
<div align='center' class='refresher'>

<div id='tooltip-refresh-register' class='navtooltip'>
обновить&nbsp;код<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/></div>

<a href='' class='refresh-reg' return='false'><div align='left' class='refresh-reg'></div></a>
</div>
<div align='right' class='error-reg-captcha' id='error-reg-captcha'><img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/></div>

 <input id='captcha-register' class='captcha-register' type='text' name='captcha_code' value='' maxlength='4' placeholder='Код с картинки' />
 <br>
<input type='submit' id='submit-register' class='submit-register' name='submit-register' value='Хочу зарегистрироваться' />
 <br> 
 <div align='center'>
 <div class='checkboxes' style='width: 270px!important; margin-top: 11px!important;'>
<noindex>
<div align='center' class='check-active' id='input-check-reg' style='color: white; text-shadow: 1px 1px 2px #000000;'>Добавить друзей <a href='http://pinct.ru/url.php?r=https://vk.com' rel='nofollow' target='_blank'>Вконтакте</a> и <a href='http://pinct.ru/url.php?r=https://www.facebook.com' rel='nofollow' target='_blank'>Facebook</a>.</div>
</noindex>
</div>
</div>
  
</div>
  
</div>
</div>
</div>
</div>

<div class='rules-register'>
Региструясь, вы соглашаетесь с <a href='#' target='_blank'>Условиями использования нашего сайта</a> и <a href='#' target='_blank'>Политикой использования данных</a>.
</div>

</div>

<br>

<div class='reg-niz-coumt'>
20+
</div>
<div align='left' class='reg-niz-info'>
тыс. классных <br>
пинов
</div>
<div class='reg-niz-coumt-center'>
10+
</div>
<div align='left' class='reg-niz-info-center'>
тыс. новых <br>
пользователей
</div>
<div class='reg-niz-coumt'>
20
</div>
<div align='left' class='reg-niz-info'>
секунд и вы <br>
зарегистрированы
</div>




</div>


<div align='center' id='show-auth888' class='show-auth'>
<div align='center'>

</div>
</div>









<script type='text/javascript'>

$(document).ready(function() { 

$('div.form-register').delegate('input.submit-register','mouseover',function(){
$('input.submit-register').toggleClass('submit-register-hover', true);

});
   
$('div.form-register').delegate('input.submit-register','mouseleave',function(){
$('input.submit-register').toggleClass('submit-register-hover', false);

});

inputEmail1 = $('input#email-register');
emailText1 = $('input#email-register').attr('value');
patternEmail1 = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
matchEmail1 = emailText1.match(patternEmail1);

inputCaptcha1 = $('input#captcha-register');
captchaText1 = $('input#captcha-register').attr('value');
patternCaptcha1 = /^[a-zA-Z0-9]+$/i;
matchCaptcha1 =  captchaText1.match(patternCaptcha1);

if (emailText1.length < 8) {
	
if (emailText1 != '') {	

$('input#email-register').css('border','#e74c3c');
$('input#email-register').css('color','#e74c3c');
$('div#error-reg-email').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Не&nbsp;менее&nbsp;8&nbsp;символов!");
$('div#error-reg-email').css('display','block');
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');

}

}

else {
	
if (!matchEmail1) {
$('input#email-register').css('border','#e74c3c');
$('input#email-register').css('color','#e74c3c');
$('div#error-reg-email').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Это&nbsp;НЕ&nbsp;Email&nbsp;:(");
$('div#error-reg-email').css('display','block');
}
else {
$('input#email-register').css('border','none');
$('input#email-register').css('color','#000000');
$('div#error-reg-email').css('display','none');	
if (captchaText1.length == 4) {
if (matchCaptcha1) {
$('input.submit-register').toggleClass('submit-register-hold', false);
$('input.submit-register').toggleClass('submit-register-hover', false);
$('input.submit-register').css('cursor','pointer');
$('input.submit-register').removeAttr('disabled');
}
}
}
	
}

if (captchaText1.length < 4) {
	
if (captchaText1 != '') {

$('input#captcha-register').css('border','#e74c3c');
$('input#captcha-register').css('color','#e74c3c');
$('div#error-reg-captcha').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Должно&nbsp;быть&nbsp;4&nbsp;цифры&nbsp;:)");
$('div#error-reg-captcha').css('display','block');
if (emailText1.length >= 8) {
if (matchEmail1) {
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');

}
}
}

}

else {
	
if (!matchCaptcha1) {
$('input#captcha-register').css('border','#e74c3c');
$('input#captcha-register').css('color','#e74c3c');
$('div#error-reg-captcha').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Только&nbsp;числа&nbsp;и&nbsp;латиница!");
$('div#error-reg-captcha').css('display','block');
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');

}
else {
$('input#captcha-register').css('border','none');
$('input#captcha-register').css('color','#000000');
$('div#error-reg-captcha').css('display','none');	
if (emailText1.length >= 8) {
if (matchEmail1) {
$('input.submit-register').toggleClass('submit-register-hold', false);
$('input.submit-register').toggleClass('submit-register-hover', false);
$('input.submit-register').css('cursor','pointer');
$('input.submit-register').removeAttr('disabled');
}
}
}
	
}	
   
if ((emailText1 == '') || (captchaText1 == '') || (!matchEmail1) || (!matchCaptcha1) || (captchaText1.length < 4) || (emailText1.length < 8)) {

$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');
 
}

});

$(document).ready(function() { 

	$('div.check-active').click(function(){

	$("div.check-active").toggleClass("check-unhover");
	
	});
	
	$('div.check').click(function(){

	$('div.check').toggleClass('check-active-hover');
	
	});
	

	
	

$('input#email-register').keyup(function(){
inputEmail = $(this);
emailText = $(this).attr('value');
patternEmail = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
matchEmail =  emailText.match(patternEmail);

if (emailText.length < 8) {
	
if (emailText == '') {	
$(this).css('color','#e74c3c');
$('div#error-reg-email').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-reg-email').css('display','block');
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');

}
else {
$(this).css('color','#e74c3c');
$('div#error-reg-email').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Не&nbsp;менее&nbsp;8&nbsp;символов!");
$('div#error-reg-email').css('display','block');
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');

}

}

else if (emailText.length > 8) {
	
if (!matchEmail) {
$(this).css('color','#e74c3c');
$('div#error-reg-email').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Это&nbsp;НЕ&nbsp;Email&nbsp;:(");
$('div#error-reg-email').css('display','block');

$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');


}
else {
$(this).css('color','#000000');
$('div#error-reg-email').css('display','none');	
if (captchaText.length == 4) {
if (matchCaptcha) {
$('input.submit-register').toggleClass('submit-register-hold', false);
$('input.submit-register').toggleClass('submit-register-hover', false);
$('input.submit-register').css('cursor','pointer');
$('input.submit-register').removeAttr('disabled');
}
else {
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');

}
}
else {
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');

}
}
	
}

   });
   

   
$('input#captcha-register').keyup(function(){
inputCaptcha = $(this);
captchaText = $(this).attr('value');
patternCaptcha = /^[a-zA-Z0-9]+$/i;
matchCaptcha =  captchaText.match(patternCaptcha);

if (captchaText.length != 4) {
	
if (captchaText == '') {
$(this).css('color','#e74c3c');	
$('div#error-reg-captcha').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-reg-captcha').css('display','block');
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');

}
else {
$(this).css('color','#e74c3c');
$('div#error-reg-captcha').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Должно&nbsp;быть&nbsp;4&nbsp;цифры&nbsp;:)");
$('div#error-reg-captcha').css('display','block');
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');


}

}

else {
	
if (!matchCaptcha) {
$(this).css('color','#e74c3c');
$('div#error-reg-captcha').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Только&nbsp;числа&nbsp;и&nbsp;латиница!");
$('div#error-reg-captcha').css('display','block');
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');

}
else {
$(this).css('color','#000000');
$('div#error-reg-captcha').css('display','none');	
if (emailText.length > 8) {
if (matchEmail) {
$('input.submit-register').toggleClass('submit-register-hold', false);
$('input.submit-register').toggleClass('submit-register-hover', false);
$('input.submit-register').css('cursor','pointer');
$('input.submit-register').removeAttr('disabled');
}
else {
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');

}
}
else {
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');

}
}
	
}


   });
   
$('input#submit-register').click(function(){
   
inputEmail2 = $('input#email-register');
emailText2 = $('input#email-register').attr('value');
patternEmail2 = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
matchEmail2 = emailText2.match(patternEmail2);

inputCaptcha2 = $('input#captcha-register');
captchaText2 = $('input#captcha-register').attr('value');
patternCaptcha2 = /^[a-zA-Z0-9]+$/i;
matchCaptcha12 =  captchaText2.match(patternCaptcha2);
   
if (emailText2 == '') {	
$('input#email-register').css('color','#e74c3c');
$('div#error-reg-email').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-reg-email').css('display','block');
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');
}
   
if (captchaText2 == '') {
$('input#captcha-register').css('color','#e74c3c');	
$('div#error-reg-captcha').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-reg-captcha').css('display','block');
$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');
}
   
if ((emailText2 == '') || (captchaText2 == '') || (!matchEmail2) || (!matchCaptcha2) || (captchaText2.length < 4) || (emailText2.length < 8)) {

$('input.submit-register').toggleClass('submit-register-hold', true);
$('input.submit-register').css('cursor','default');
 
}
   
   });


$('div.form-register').delegate('div.refresher','mouseover',function(){
$('div.refresh-reg').toggleClass('refresh-reg-hover', true);
$('div.refresher .navtooltip').css('display','block');
});

$('div.form-register').delegate('div.refresher','mouseleave',function(){
$('div.refresh-reg').toggleClass('refresh-reg-hover', false);
$('div.refresher .navtooltip').css('display','none');
});

function fRotation() {
      $("img.captcha-img").attr("src","http://pinct.ru/plugins/captcha.php");
}

$('div.refresher').rotate({ 

bind: { 
click : function() { 
event.preventDefault();
$('div.refresh-reg').rotate({
animateTo: 360,
angle:0,
callback: fRotation

})


}
} 

});
   
$('div.social-reg').delegate('div.facebook-register','mouseover',function(){
$('div.facebook-register').toggleClass('facebook-register-hover', true);
$('.facebook-register .navtooltip').css('display','inline');
});

$('div.social-reg').delegate('div.facebook-register','mouseleave',function(){
$('div.facebook-register').toggleClass('facebook-register-hover', false);
$('.facebook-register .navtooltip').css('display','none');
});

$('div.social-reg').delegate('div.google-register','mouseover',function(){
$('div.google-register').toggleClass('google-register-hover', true);
$('.google-register .navtooltip').css('display','inline');
});

$('div.social-reg').delegate('div.google-register','mouseleave',function(){
$('div.google-register').toggleClass('google-register-hover', false);
$('.google-register .navtooltip').css('display','none');
});

$('div.social-reg').delegate('div.vkontakte-register','mouseover',function(){
$('div.vkontakte-register').toggleClass('vkontakte-register-hover', true);
$('.vkontakte-register .navtooltip').css('display','inline');
});

$('div.social-reg').delegate('div.vkontakte-register','mouseleave',function(){
$('div.vkontakte-register').toggleClass('vkontakte-register-hover', false);
$('.vkontakte-register .navtooltip').css('display','none');
});

$('div.social-reg').delegate('div.mail-ru-register','mouseover',function(){
$('div.mail-ru-register').toggleClass('mail-ru-register-hover', true);
$('.mail-ru-register .navtooltip').css('display','inline');
});

$('div.social-reg').delegate('div.mail-ru-register','mouseleave',function(){
$('div.mail-ru-register').toggleClass('mail-ru-register-hover', false);
$('.mail-ru-register .navtooltip').css('display','none');
});

$('div.social-reg').delegate('div.odnoklassniki-register','mouseover',function(){
$('div.odnoklassniki-register').toggleClass('odnoklassniki-register-hover', true);
$('.odnoklassniki-register .navtooltip').css('display','inline');
});

$('div.social-reg').delegate('div.odnoklassniki-register','mouseleave',function(){
$('div.odnoklassniki-register').toggleClass('odnoklassniki-register-hover', false);
$('.odnoklassniki-register .navtooltip').css('display','none');
});

$('div.social-reg').delegate('div.twitter-register','mouseover',function(){
$('div.twitter-register').toggleClass('twitter-register-hover', true);
$('.twitter-register .navtooltip').css('display','inline');
});

$('div.social-reg').delegate('div.twitter-register','mouseleave',function(){
$('div.twitter-register').toggleClass('twitter-register-hover', false);
$('.twitter-register .navtooltip').css('display','none');
});








$('div.show-auth').animate({
'marginTop': '-1530px'
}, 120000, 'linear');

$('div.step-register').animate({
'opacity': '1'
}, 1000, 'linear');

$('div.box-auth').delegate('div.open-auth','click',function(){
event.preventDefault();
$('div.center-register').animate({
'marginLeft': '2200px'
}, 500, 'easeInBack');
});




});







</script>

</body>
</html>
