<!DOCTYPE html>
<html>
 <head>
 
   <title>Pinct | Мир ярких картинок</title>
   
   <meta charset='utf-8'>
   
   <link href='http://pinct.ru/newstyle.css' rel='stylesheet'>

	
		<!--[if lt IE 9]>
		<script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script>a
	<![endif]-->
   
<script>
   document.createElement('aside');
   document.createElement('article');
   document.createElement('nav');
   document.createElement('header');
   document.createElement('footer');
   document.createElement('section');
  </script>
   
	<script type='text/javascript' src='http://pinct.ru/infinity/jquery-1.6.1.min.js'></script>
	
<script src='http://code.angularjs.org/1.1.4/angular.min.js'></script>
<script type='text/javascript' src='http://pinct.ru/js/jquery.masonry.min.js'></script>
<script type='text/javascript' src='http://pinct.ru/js/jquery.infinitescroll.min.js'></script>
<script type='text/javascript' src='http://pinct.ru/js/pinct.angular.js'></script>
<script type='text/javascript' src='http://pinct.ru/js/pinct.js'></script>
<script type='text/javascript' src='http://pinct.ru/js/pinct2.js'></script>

<script>
        $(document).ready(function() {

	
$('a.account').click(function() {
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1',
                    success: function(data){
                        $('#all-section-main').html(data);
						document.title = data;
						
$("#all-section-main").delegate("#pin888","mouseover",function(){
$("#action888").toggleClass("actionbar-hover", true);
      });
	  
$("#all-section-main").delegate("#pin888","mouseleave",function(){
$("#action888").removeClass("actionbar-hover");
$("#pin-nav888").removeClass("navpin-show");
$(".thumb-autor img").toggleClass("thumb-autor-hover", false);
$(".thumb-autor .navtooltip, .comment-autor .navtooltip, .like-autor .navtooltip, .repin-autor .navtooltip, .unlike-autor .navtooltip").toggleClass("navtooltip-hide", false);
      });
	  
$("#all-section-main").delegate("#repin888","mouseover",function(){
$("#repin888").toggleClass("repin-autor-hover");
$(".repin-autor .navtooltip").css("display","inline");
      });
	  
$("#all-section-main").delegate("#repin888","mouseout",function(){
$("#repin888").removeClass("repin-autor-hover");
$(".repin-autor .navtooltip").css("display","none");
      });	  
	  
$("#all-section-main").delegate("#like888","mouseover",function(){
$("#like888").toggleClass("like-autor-hover");
$(".like-autor .navtooltip").css("display","inline");
      });
	  
$("#all-section-main").delegate("#like888","mouseout",function(){
$("#like888").removeClass("like-autor-hover");
$(".like-autor .navtooltip").css("display","none");
      });
	  
	  $("#all-section-main").delegate("#unlike888","mouseover",function(){
$("#unlike888").toggleClass("unlike-autor-hover", true);
$(".unlike-autor .navtooltip").css("display","inline");
      });
	  
$("#all-section-main").delegate("#unlike888","mouseout",function(){
$("#unlike888").removeClass("unlike-autor-hover");
$(".unlike-autor .navtooltip").css("display","none");
      });
	  
$("#all-section-main").delegate("#comment888","mouseover",function(){
$("#comment888").toggleClass("comment-autor-hover");
$(".comment-autor .navtooltip").css("display","inline");
      });
	  
$("#all-section-main").delegate("#comment888","mouseout",function(){
$("#comment888").removeClass("comment-autor-hover");
$(".comment-autor .navtooltip").css("display","none");
      }); 
	  
$("#all-section-main").delegate("#like888","click",function(){
event.preventDefault();
var like = $("#small-like888").html();
like++;
$("a div#like888").css("display","none");
$("a div#unlike888").css("display","inline-block");
$("#small-like888").html(like);
      });
	  
$("#all-section-main").delegate("#unlike888","click",function(){
event.preventDefault();
var unlike = $("#small-like888").html();
unlike--;
$("a div#unlike888").css("display","none");
$("a div#like888").css("display","inline-block");
$("#small-like888").html(unlike);
      });
	  
$("#all-section-main").delegate("#comment888","click",function(){
event.preventDefault();
$("#send888").toggleClass("send-comment-click");
      });
	  
$("#all-section-main").delegate("#thumb888","mouseover",function(){
$(".thumb-autor .navtooltip").css("display","inline");
      });
	  
$("#all-section-main").delegate("#thumb888","mouseout",function(){
$(".thumb-autor .navtooltip").css("display","none");
      });  

$("#all-section-main").delegate("#thumb888","click",function(){
event.preventDefault();
$("#pin-nav888").toggleClass("navpin-show");
$(".thumb-autor img").toggleClass("thumb-autor-hover");
$(".thumb-autor .navtooltip, .comment-autor .navtooltip, .like-autor .navtooltip, .repin-autor .navtooltip, .unlike-autor .navtooltip").toggleClass("navtooltip-hide");
      });
 	
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
						
$("#all-section-main").delegate("#pin888","mouseover",function(){
$("#action888").toggleClass("actionbar-hover", true);
      });
	  
$("#all-section-main").delegate("#pin888","mouseleave",function(){
$("#action888").removeClass("actionbar-hover");
$("#pin-nav888").removeClass("navpin-show");
$(".thumb-autor img").toggleClass("thumb-autor-hover", false);
$(".thumb-autor .navtooltip, .comment-autor .navtooltip, .like-autor .navtooltip, .repin-autor .navtooltip, .unlike-autor .navtooltip").toggleClass("navtooltip-hide", false);
      });
	  
$("#all-section-main").delegate("#repin888","mouseover",function(){
$("#repin888").toggleClass("repin-autor-hover", true);
$(".repin-autor .navtooltip").css("display","inline");
      });
	  
$("#all-section-main").delegate("#repin888","mouseout",function(){
$("#repin888").removeClass("repin-autor-hover");
$(".repin-autor .navtooltip").css("display","none");
      });	  
	  
$("#all-section-main").delegate("#like888","mouseover",function(){
$("#like888").toggleClass("like-autor-hover", true);
$(".like-autor .navtooltip").css("display","inline");
      });
	  
	  
$("#all-section-main").delegate("#like888","mouseout",function(){
$("#like888").removeClass("like-autor-hover");
$(".like-autor .navtooltip").css("display","none");
      });
	  
	  $("#all-section-main").delegate("#unlike888","mouseover",function(){
$("#unlike888").toggleClass("unlike-autor-hover", true);
$(".unlike-autor .navtooltip").css("display","inline");
      });
	  
$("#all-section-main").delegate("#unlike888","mouseout",function(){
$("#unlike888").removeClass("unlike-autor-hover");
$(".unlike-autor .navtooltip").css("display","none");
      });
	  
$("#all-section-main").delegate("#comment888","mouseover",function(){
$("#comment888").toggleClass("comment-autor-hover", true);
$(".comment-autor .navtooltip").css("display","inline");
      });
	  
$("#all-section-main").delegate("#comment888","mouseout",function(){
$("#comment888").removeClass("comment-autor-hover");
$(".comment-autor .navtooltip").css("display","none");
      }); 
	  
$("#all-section-main").delegate("#like888","click",function(){
event.preventDefault();
var like = $("#small-like888").html();
like++;
like--;
$("a div#like888").css("display","none");
$("a div#unlike888").css("display","inline-block");
$("#small-like888").html(like);
      });
	  
$("#all-section-main").delegate("#unlike888","click",function(){
event.preventDefault();
var unlike = $("#small-like888").html();
unlike--;
unlike++;
$("a div#unlike888").css("display","none");
$("a div#like888").css("display","inline-block");
$("#small-like888").html(unlike);
      });
	  
$("#all-section-main").delegate("#comment888","click",function(){
event.preventDefault();
$("#send888").toggleClass("send-comment-click", true);
      });
	  
$("#all-section-main").delegate("#thumb888","mouseover",function(){
$(".thumb-autor .navtooltip").css("display","inline");
      });
	  
$("#all-section-main").delegate("#thumb888","mouseout",function(){
$(".thumb-autor .navtooltip").css("display","none");
      });  

$("#all-section-main").delegate("#thumb888","click",function(){
event.preventDefault();
$("#pin-nav888").toggleClass("navpin-show", true);
$(".thumb-autor img").toggleClass("thumb-autor-hover", true);
$(".thumb-autor .navtooltip, .comment-autor .navtooltip, .like-autor .navtooltip, .repin-autor .navtooltip, .unlike-autor .navtooltip").toggleClass("navtooltip-hide", true);
      });
						
						
						
                    }
                });
            });
        });
    </script>


 </head>