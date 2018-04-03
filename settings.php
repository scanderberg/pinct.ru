<br>

<div align='center' id='all-section-main' class='allcontent'>

<div align='center' id='main' class='content'>

<div align='center'>
<div align='center' class='user-settings'>
<div align='center' class='settings-avatar'>
<img src='http://pinct.ru/img/edit-user.png' width='100px' />
</div>
<h2>Настройки</h2>
<br>
<div align='right' class='error-login-set' id='error-login-set'><img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/></div>
<input type='text' id='login-set' class='login-set' name='login-set' placeholder='логин' maxlength='50' />
<br><br>
<div align='right' class='error-email-set' id='error-email-set'><img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/></div>
<input type='text' id='email-set' class='email-set' name='email-set' placeholder='Email' maxlength='50' />
<br><br>
<div align='right' class='error-name-set' id='error-name-set'><img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/></div>
<input type='text' id='name-set' class='name-set' name='name-set' placeholder='Имя' maxlength='50' />
<br><br>
<div align='right' class='error-soname-set' id='error-soname-set'><img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/></div>
<input type='text' id='soname-set' class='soname-set' name='soname-set' placeholder='Фамилия' maxlength='50' />
<br><br>
<input type='text' id='vk-set' class='vk-set' name='vk-set' placeholder='Страница Вконтакте' maxlength='50' />
<br><br>
<input type='text' id='fb-set' class='fb-set' name='fb-set' placeholder='Страница Facebook' maxlength='50' />
<br><br>
<input type='text' id='gl-set' class='gl-set' name='gl-set' placeholder='Страница Google+' maxlength='50' />
<br><br>
<input type='text' id='tw-set' class='tw-set' name='tw-set' placeholder='Страница Twitter' maxlength='50' />
<br><br>
<textarea id='about-set' class='about-set' name='about-set' placeholder='Обо мне' maxlength='50' /></textarea>
<br><br>
<input type='submit' id='submit-set' class='submit-set' name='submit-set' value='Изменить настройки' />

</div>

<div align='center' class='passw-settings'>
<h2>Сброс пароля</h2>
<br>
<div align='right' class='error-passw-set' id='error-passw-set'><img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/></div>
<input type='password' id='passw-set' class='login-set' name='login-set' placeholder='Новый пароль' maxlength='50' />
<br><br>
<div align='right' class='error-passw2-set' id='error-passw2-set'><img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/></div>
<input type='password' id='passw2-set' class='email-set' name='email-set' placeholder='Повтор пароля' maxlength='50' />
<br><br>
<input type='submit' id='passw-submit-set' class='passw-submit-set' name='passw-submit-set' value='Сбросить пароль' />

</div>

<br><br>





</div>

</div>

</div><!-- #content -->

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

// нашёл

        $(document).ready(function() {

randomAjax1 = Math.round(Math.random()*1000);
randomAjax2 = Math.round(Math.random()*1000);
randomAjax3 = Math.round(Math.random()*1000);
randomAjax4 = Math.round(Math.random()*1000);
randomAjax5 = Math.round(Math.random()*1000);
randomAjax6 = Math.round(Math.random()*1000);


<?php
	  
if (rowsAllProfile()) {
for($b=0; $b<=rowsAllProfile(); $b++) { 
	  
mySubsribe(resAllProfileId($b));
	  
}
}
	  
?>
			
        });
		
// нашёл

$(document).ready(function() { 

$('input#login-set').keyup(function(){
$(this).css('color','#555555');
$('div#error-login-set').css('display','none');
});
$('input#login-set').blur(function(){

loginSetText = $(this).attr('value');

if (loginSetText == '') {	
formStatus1 = "error";
$(this).css('color','#e74c3c');
$('div#error-login-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-login-set').css('display','block');
}
else {
formStatus1 = "error";
if (loginSetText.length < 8) {
$(this).css('color','#e74c3c');
$('div#error-login-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Не&nbsp;менее&nbsp;8&nbsp;символов!");
$('div#error-login-set').css('display','block');
}
else {
formStatus1 = "action";
$(this).css('color','#555555');
$('div#error-login-set').css('display','none');
}
}
});



$('input#email-set').keyup(function(){
$(this).css('color','#555555');
$('div#error-email-set').css('display','none');
});
$('input#email-set').blur(function(){
emailSetText = $(this).attr('value');
patternEmailSet = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
matchEmailSet =  emailSetText.match(patternEmailSet);

if (emailSetText == '') {	
formStatus1 = "error";
$(this).css('color','#e74c3c');
$('div#error-email-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-email-set').css('display','block');
}
else {
if (emailSetText.length < 8) {
formStatus1 = "error";
$(this).css('color','#e74c3c');
$('div#error-email-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Не&nbsp;менее&nbsp;8&nbsp;символов!");
$('div#error-email-set').css('display','block');
}
else {
if (!matchEmailSet) {
formStatus1 = "error";
$(this).css('color','#e74c3c');
$('div#error-email-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Это&nbsp;НЕ&nbsp;Email&nbsp;:(");
$('div#error-email-set').css('display','block');
}		
else {
formStatus1 = "action";
$(this).css('color','#555555');
$('div#error-email-set').css('display','none');
}
}
}
});



$('input#name-set').keyup(function(){
$(this).css('color','#555555');
$('div#error-name-set').css('display','none');
});
$('input#name-set').blur(function(){

nameSetText = $(this).attr('value');

if (nameSetText == '') {	
formStatus1 = "error";
$(this).css('color','#e74c3c');
$('div#error-name-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-name-set').css('display','block');
}
else {
if (nameSetText.length < 4) {
formStatus1 = "error";
$(this).css('color','#e74c3c');
$('div#error-name-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Не&nbsp;менее&nbsp;4&nbsp;символов!");
$('div#error-name-set').css('display','block');
}
else {
formStatus1 = "action";
$(this).css('color','#555555');
$('div#error-name-set').css('display','none');
}
}
});


$('input#soname-set').keyup(function(){
$(this).css('color','#555555');
$('div#error-soname-set').css('display','none');
});
$('input#soname-set').blur(function(){

sonameSetText = $(this).attr('value');

if (sonameSetText == '') {	
formStatus1 = "error";
$(this).css('color','#e74c3c');
$('div#error-soname-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-soname-set').css('display','block');
}
else {
if (sonameSetText.length < 5) {
formStatus1 = "error";
$(this).css('color','#e74c3c');
$('div#error-soname-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Не&nbsp;менее&nbsp;5&nbsp;символов!");
$('div#error-soname-set').css('display','block');
}
else {
formStatus1 = "action";
$(this).css('color','#555555');
$('div#error-soname-set').css('display','none');
}
}
});


$('input#passw-set').keyup(function(){
$(this).css('color','#555555');
$('div#error-passw-set').css('display','none');
});
$('input#passw-set').blur(function(){

passwSetText = $(this).attr('value');

if (passwSetText == '') {	
$(this).css('color','#e74c3c');
$('div#error-passw-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-passw-set').css('display','block');
}
else {
if (passwSetText.length < 6) {
$(this).css('color','#e74c3c');
$('div#error-passw-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Не&nbsp;менее&nbsp;6&nbsp;символов!");
$('div#error-passw-set').css('display','block');
}
else {
$(this).css('color','#555555');
$('div#error-passw-set').css('display','none');
}
}
});


$('input#passw2-set').keyup(function(){
$(this).css('color','#555555');
$('div#error-passw2-set').css('display','none');
});
$('input#passw2-set').blur(function(){

passw2SetText = $(this).attr('value');

if (passw2SetText == '') {	
$(this).css('color','#e74c3c');
$('div#error-passw2-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Заполните&nbsp;поле!");
$('div#error-passw2-set').css('display','block');
}
else {
if (passw2SetText.length < 6) {
$(this).css('color','#e74c3c');
$('div#error-passw2-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Не&nbsp;менее&nbsp;6&nbsp;символов!");
$('div#error-passw2-set').css('display','block');
}
else {
if (passw2SetText != passwSetText) {
$('div#error-passw2-set').html("<img src='http://pinct.ru/img/tik-error-left.png' align='left' width='17'/>Не&nbsp;совпадают&nbsp;пароли!");
$('div#error-passw2-set').css('display','block');
}
else {
$(this).css('color','#555555');
$('div#error-passw2-set').css('display','none');
}
}
}
});

$('input#submit-set').click(function(){

if (formStatus1 == "error") {
$(window).scrollTop(100);
}

});



});

     $(document).ready(function() {
		
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
		
		
            $('a.pin-view').click(function() {
			
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?pin-view=1&d='+window.randomAjax1,
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
		
            $('a.account').click(function() {
			
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
			
        });
		
    </script>

</body>
</html>