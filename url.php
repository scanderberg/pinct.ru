<?php
require_once 'main/conf.php';
require_once 'main/db.php';

$strRedirect = $_GET['r'];
$redirDelay = $_GET['s'];

if ($redirDelay) {
$redirTime = $redirDelay;
}
else {
$redirTime = 2;
}

if ($strRedirect) {
header( "Refresh: $redirTime; url=$strRedirect" );
}
else {
header( "Location: http://pinct.ru" );
}
?>
<!DOCTYPE html>
<html lang='ru'>
 <head>
 
   <title>Pinct - переход на сайт</title>
   
   <meta charset='utf-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
   
   <link href='http://pinct.ru/newstyle.css' rel='stylesheet'>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <script type='text/javascript' src='http://pinct.ru/js/easing.js'></script>
   <script type="text/javascript" src="http://pinct.ru/js/jqueryrotate.2.1.js"></script>

 </head>

<body class='allwidth'>

<div align='center' class='logo-middle'>
<div align='center' class='logo-rotate'></div>
</div>

<script type='text/javascript'>

$(document).ready(function() { 

jQuery("div.logo-rotate").rotate({duration:40000,animateTo:7200});

});

</script>

</body>
</html>