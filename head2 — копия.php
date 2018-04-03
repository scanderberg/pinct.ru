<!DOCTYPE html>
<html lang='ru'>
 <head>
 
   <title>Pinct | Мир ярких картинок</title>
   
   <meta charset='utf-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
   
   <link href='http://pinct.ru/newstyle.css' rel='stylesheet'>
   
<!--[if lt IE 9]><script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script><![endif]-->
   
<script>
   document.createElement('aside');
   document.createElement('article');
   document.createElement('nav');
   document.createElement('header');
   document.createElement('footer');
   document.createElement('section');
  </script>

<script>
        $(document).ready(function() {

	
$('a.account').click(function() {
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1',
                    success: function(data){
                        $('#all-section-main').html(data);
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
                        $('#all-section-main').html(data);
						document.title = data;	
						
                    }
                });
            });
        });
    </script>


 </head>