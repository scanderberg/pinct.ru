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

<div align='center' class='center-auth'>


<div align='center' id='my-register888' class='boxed-auth' > 
  

  
<div align='center' id='logo-reg888' class='logo-auth'>
<img class='logo-icon' src='http://pinct.ru/img/logo-mini.png' align='center' width='29'/>
</div>

<div align='center' id='capt-auth888' class='capt-auth'>

<span class='title'>Войдите</span>
</div>

<div align='center' id='social-auth888' class='social-auth'>
<div align='center' class='left-social-auth'></div>
<div align='center' class='center-social-auth'>
<span class='social'>через социальные сети</span>
</div>
<div align='center' class='right-social-auth'></div>
<br>

<a href='' id='auth-facebook888' class='facebook-auth' return='false'><div id='facebook-auth888' class='facebook-auth'>
<div id='tooltip-facebook-auth' class='navtooltip'>
 facebook<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='auth-google888' class='google-auth' return='false'><div id='google-auth888' class='google-auth'>
<div id='tooltip-google-auth' class='navtooltip'>
 google+1<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='auth-vkontakte888' class='vkontakte-auth' return='false'><div id='vkontakte-auth888' class='vkontakte-auth'>
<div id='tooltip-vkontakte-auth' class='navtooltip'>
 вконтакте<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='auth-mail-ru888' class='mail-ru-auth' return='false'><div id='mail-ru-auth888' class='mail-ru-auth'>
<div id='tooltip-mail-ru-auth' class='navtooltip'>
 майл.ru<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='auth-odnoklassniki888' class='odnoklassniki-auth' return='false'><div id='odnoklassniki-auth888' class='odnoklassniki-auth'>
<div id='tooltip-odnoklassniki-auth' class='navtooltip'>
 одноклассники<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='auth-twitter888' class='twitter-auth' return='false'><div id='twitter-auth888' class='twitter-auth'>
<div id='tooltip-twitter-auth' class='navtooltip'>
 твиттер<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/>
</div>
</div></a>

</div>
  
<div align='center' id='only-auth888' class='only-auth'>

<div align='center' class='left-only-auth-capt2'></div>
<div align='center' class='center-only-auth-capt2'>
<span class='auth-only-auth'>или с помощью Email и пароля</span>
</div>
<div align='center' class='right-only-auth-capt2'></div>


  
<div align='center' id='form-auth888' class='form-auth'>
<div align='center'>
<div align='center'>
  
<div align='right' class='error-auth-email' id='error-auth-email'><img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/></div>

<input type='text' id='email-auth' class='email-auth' name='email-auth' placeholder='Адрес эл. почты' maxlength='50' />
<br>
<div align='right' class='error-auth-pass' id='error-auth-pass'><img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/></div>
<input type='password' id='pass-auth' class='pass-auth' name='pass-auth' placeholder='Пароль' maxlength='30' />
<br>
<img class='captcha-img-auth' align='left' src='http://pinct.ru/plugins/captcha.php' height='50px' />
<div align='center' class='refresher-auth'>

<div id='tooltip-refresh-register' class='navtooltip'>
обновить&nbsp;код<img src='http://pinct.ru/img/tik-menu-top.png' align='right' width='17'/></div>

<a href='' class='refresh-auth' return='false'><div align='left' class='refresh-auth'></div></a>
</div>
<div align='right' class='error-auth-captcha' id='error-auth-captcha'><img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/></div>

 <input id='captcha-auth' class='captcha-auth' type='text' name='captcha_code' value='' maxlength='4' placeholder='Код с картинки' />
 <br>
<input type='submit' id='submit-auth' class='submit-auth' name='submit-auth' value='Войти' />
 <br> 
 <div align='center'>
 <div class='checkboxes' style='width: 270px!important; margin-top: 11px!important;'>
<noindex>
<div align='center' class='check-active' id='input-check-auth' style='color: white; text-shadow: 1px 1px 2px #000000;'>Добавить друзей <a href='https://vk.com' rel='nofollow' target='_blank'>Вконтакте</a> и <a href='https://www.facebook.com' rel='nofollow' target='_blank'>Facebook</a>.</div>
</noindex>
</div>

<div align='center' id='capt-auth888' class='capt-auth2'>
<span class='title'>Ещё нет аккаунта?</span>
</div>

<div align='center' class='open-reg' id='open-reg888'>Регистрация</div>

</div>
  
</div>
  
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

$('div.form-register').delegate('input.submit-auth','mouseover',function(){
$('input.submit-auth').toggleClass('submit-auth-hover', true);

});
   
$('div.form-register').delegate('input.submit-auth','mouseleave',function(){
$('input.submit-auth').toggleClass('submit-auth-hover', false);

});

inputEmail1 = $('input#email-auth');
emailText1 = $('input#email-auth').attr('value');
patternEmail1 = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
matchEmail1 = emailText1.match(patternEmail1);

inputCaptcha1 = $('input#captcha-auth');
captchaText1 = $('input#captcha-auth').attr('value');
patternCaptcha1 = /^[a-zA-Z0-9]+$/i;
matchCaptcha1 =  captchaText1.match(patternCaptcha1);

if (emailText1.length < 8) {
	
if (emailText1 != '') {	

$('input#email-auth').css('border','#e74c3c');
$('input#email-auth').css('color','#e74c3c');
$('div#error-auth-email').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Не&nbsp;менее&nbsp;8&nbsp;символов!");
$('div#error-auth-email').css('display','block');
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');

}

}

else {
	
if (!matchEmail1) {
$('input#email-auth').css('border','#e74c3c');
$('input#email-auth').css('color','#e74c3c');
$('div#error-auth-email').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Это&nbsp;НЕ&nbsp;Email&nbsp;:(");
$('div#error-auth-email').css('display','block');
}
else {
$('input#email-auth').css('border','none');
$('input#email-auth').css('color','#000000');
$('div#error-auth-email').css('display','none');	
if (captchaText1.length == 4) {
if (matchCaptcha1) {
$('input.submit-auth').toggleClass('submit-auth-hold', false);
$('input.submit-auth').toggleClass('submit-auth-hover', false);
$('input.submit-auth').css('cursor','pointer');
$('input.submit-auth').removeAttr('disabled');
}
}
}
	
}

if (captchaText1.length < 4) {
	
if (captchaText1 != '') {

$('input#captcha-auth').css('border','#e74c3c');
$('input#captcha-auth').css('color','#e74c3c');
$('div#error-auth-captcha').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Должно&nbsp;быть&nbsp;4&nbsp;цифры&nbsp;:)");
$('div#error-auth-captcha').css('display','block');
if (emailText1.length >= 8) {
if (matchEmail1) {
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');

}
}
}

}

else {
	
if (!matchCaptcha1) {
$('input#captcha-auth').css('border','#e74c3c');
$('input#captcha-auth').css('color','#e74c3c');
$('div#error-auth-captcha').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Только&nbsp;числа&nbsp;и&nbsp;латиница!");
$('div#error-auth-captcha').css('display','block');
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');

}
else {
$('input#captcha-auth').css('border','none');
$('input#captcha-auth').css('color','#000000');
$('div#error-auth-captcha').css('display','none');	
if (emailText1.length >= 8) {
if (matchEmail1) {
$('input.submit-auth').toggleClass('submit-auth-hold', false);
$('input.submit-auth').toggleClass('submit-auth-hover', false);
$('input.submit-auth').css('cursor','pointer');
$('input.submit-auth').removeAttr('disabled');
}
}
}
	
}	
   
if ((emailText1 == '') || (captchaText1 == '') || (!matchEmail1) || (!matchCaptcha1) || (captchaText1.length < 4) || (emailText1.length < 8)) {

$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');
 
}

});

$(document).ready(function() { 

	$('div.check-active').click(function(){

	$("div.check-active").toggleClass("check-unhover");
	
	});
	
	$('div.check').click(function(){

	$('div.check').toggleClass('check-active-hover');
	
	});
	

	
	

$('input#email-auth').keyup(function(){
inputEmail = $(this);
emailText = $(this).attr('value');
patternEmail = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
matchEmail =  emailText.match(patternEmail);

if (emailText.length < 8) {
	
if (emailText == '') {	
$(this).css('color','#e74c3c');
$('div#error-auth-email').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-auth-email').css('display','block');
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');

}
else {
$(this).css('color','#e74c3c');
$('div#error-auth-email').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Не&nbsp;менее&nbsp;8&nbsp;символов!");
$('div#error-auth-email').css('display','block');
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');

}

}

else if (emailText.length > 8) {
	
if (!matchEmail) {
$(this).css('color','#e74c3c');
$('div#error-auth-email').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Это&nbsp;НЕ&nbsp;Email&nbsp;:(");
$('div#error-auth-email').css('display','block');

$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');


}
else {
$(this).css('color','#000000');
$('div#error-auth-email').css('display','none');	
if (captchaText.length == 4) {
if (matchCaptcha) {
$('input.submit-auth').toggleClass('submit-auth-hold', false);
$('input.submit-auth').toggleClass('submit-auth-hover', false);
$('input.submit-auth').css('cursor','pointer');
$('input.submit-auth').removeAttr('disabled');
}
else {
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');

}
}
else {
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');

}
}
	
}

   });
   

   
$('input#captcha-auth').keyup(function(){
inputCaptcha = $(this);
captchaText = $(this).attr('value');
patternCaptcha = /^[a-zA-Z0-9]+$/i;
matchCaptcha =  captchaText.match(patternCaptcha);

if (captchaText.length != 4) {
	
if (captchaText == '') {
$(this).css('color','#e74c3c');	
$('div#error-auth-captcha').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-auth-captcha').css('display','block');
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');

}
else {
$(this).css('color','#e74c3c');
$('div#error-auth-captcha').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Должно&nbsp;быть&nbsp;4&nbsp;цифры&nbsp;:)");
$('div#error-auth-captcha').css('display','block');
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');


}

}

else {
	
if (!matchCaptcha) {
$(this).css('color','#e74c3c');
$('div#error-auth-captcha').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Только&nbsp;числа&nbsp;и&nbsp;латиница!");
$('div#error-auth-captcha').css('display','block');
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');

}
else {
$(this).css('color','#000000');
$('div#error-auth-captcha').css('display','none');	
if (emailText.length > 8) {
if (matchEmail) {
$('input.submit-auth').toggleClass('submit-auth-hold', false);
$('input.submit-auth').toggleClass('submit-auth-hover', false);
$('input.submit-auth').css('cursor','pointer');
$('input.submit-auth').removeAttr('disabled');
}
else {
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');

}
}
else {
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');

}
}
	
}


   });
   
$('input#submit-auth').click(function(){
   
inputEmail2 = $('input#email-auth');
emailText2 = $('input#email-auth').attr('value');
patternEmail2 = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
matchEmail2 = emailText2.match(patternEmail2);

inputCaptcha2 = $('input#captcha-auth');
captchaText2 = $('input#captcha-auth').attr('value');
patternCaptcha2 = /^[a-zA-Z0-9]+$/i;
matchCaptcha12 =  captchaText2.match(patternCaptcha2);
   
if (emailText2 == '') {	
$('input#email-auth').css('color','#e74c3c');
$('div#error-auth-email').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-auth-email').css('display','block');
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');
}
   
if (captchaText2 == '') {
$('input#captcha-auth').css('color','#e74c3c');	
$('div#error-auth-captcha').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-auth-captcha').css('display','block');
$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');
}
   
if ((emailText2 == '') || (captchaText2 == '') || (!matchEmail2) || (!matchCaptcha2) || (captchaText2.length < 4) || (emailText2.length < 8)) {

$('input.submit-auth').toggleClass('submit-auth-hold', true);
$('input.submit-auth').css('cursor','default');
 
}
   
   });


$('div.form-auth').delegate('div.refresher-auth','mouseover',function(){
$('div.refresh-auth').toggleClass('refresh-auth-hover', true);
$('div.refresher-auth .navtooltip').css('display','block');
});

$('div.form-auth').delegate('div.refresher-auth','mouseleave',function(){
$('div.refresh-auth').toggleClass('refresh-auth-hover', false);
$('div.refresher-auth .navtooltip').css('display','none');
});

function fRotation2() {
      $("img.captcha-img-auth").attr("src","http://pinct.ru/plugins/captcha.php");
}

$('div.refresher-auth').rotate({ 

bind: { 
click : function() { 
event.preventDefault();
$('div.refresh-auth').rotate({
animateTo: 360,
angle:0,
callback: fRotation2

})


}
} 

});
   
$('div.social-auth').delegate('div.facebook-auth','mouseover',function(){
$('div.facebook-auth').toggleClass('facebook-auth-hover', true);
$('.facebook-auth .navtooltip').css('display','inline');
});

$('div.social-auth').delegate('div.facebook-auth','mouseleave',function(){
$('div.facebook-auth').toggleClass('facebook-auth-hover', false);
$('.facebook-auth .navtooltip').css('display','none');
});

$('div.social-auth').delegate('div.google-auth','mouseover',function(){
$('div.google-auth').toggleClass('google-auth-hover', true);
$('.google-auth .navtooltip').css('display','inline');
});

$('div.social-auth').delegate('div.google-auth','mouseleave',function(){
$('div.google-auth').toggleClass('google-auth-hover', false);
$('.google-auth .navtooltip').css('display','none');
});

$('div.social-auth').delegate('div.vkontakte-auth','mouseover',function(){
$('div.vkontakte-auth').toggleClass('vkontakte-auth-hover', true);
$('.vkontakte-auth .navtooltip').css('display','inline');
});

$('div.social-auth').delegate('div.vkontakte-auth','mouseleave',function(){
$('div.vkontakte-auth').toggleClass('vkontakte-auth-hover', false);
$('.vkontakte-auth .navtooltip').css('display','none');
});

$('div.social-auth').delegate('div.mail-ru-auth','mouseover',function(){
$('div.mail-ru-auth').toggleClass('mail-ru-auth-hover', true);
$('.mail-ru-auth .navtooltip').css('display','inline');
});

$('div.social-auth').delegate('div.mail-ru-auth','mouseleave',function(){
$('div.mail-ru-auth').toggleClass('mail-ru-auth-hover', false);
$('.mail-ru-auth .navtooltip').css('display','none');
});

$('div.social-auth').delegate('div.odnoklassniki-auth','mouseover',function(){
$('div.odnoklassniki-auth').toggleClass('odnoklassniki-auth-hover', true);
$('.odnoklassniki-auth .navtooltip').css('display','inline');
});

$('div.social-auth').delegate('div.odnoklassniki-auth','mouseleave',function(){
$('div.odnoklassniki-auth').toggleClass('odnoklassniki-auth-hover', false);
$('.odnoklassniki-auth .navtooltip').css('display','none');
});

$('div.social-auth').delegate('div.twitter-auth','mouseover',function(){
$('div.twitter-auth').toggleClass('twitter-auth-hover', true);
$('.twitter-auth .navtooltip').css('display','inline');
});

$('div.social-auth').delegate('div.twitter-auth','mouseleave',function(){
$('div.twitter-auth').toggleClass('twitter-auth-hover', false);
$('.twitter-auth .navtooltip').css('display','none');
});








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
