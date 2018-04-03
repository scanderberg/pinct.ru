<?php



$width1 = 110;               //Ширина изображения
$height1 = 50;               //Высота изображения
$font_size = 14;            //Размер шрифта
$let_amount = 4;            //Количество символов, которые нужно набрать
$fon_let_amount = 20;       //Количество символов на фоне
$font1 = "/var/www/www-root/data/www/pinct.ru/fonts/helveticaneuecyr-heavy.otf";         //Путь к шрифту
 
//набор символов
$letters = array("a","b","c","d","e","f","h","i","k","m","n","p","r","s","t","u","v","w","x","y","z","2","3","4","5","6","7","8");      
//цвета
$colors = array("100","110","130","150","170","190","210");  
 
$numcolors[0] = rand(0,6);
$numcolors[1] = rand(0,6);
$numcolors[2] = rand(0,6);
$numcolors[3] = rand(0,6);
$numcolors[4] = rand(0,6);
 
$newcolors1 = array("59","231","246","73","161","115","251"); 
$newcolors2 = array("87","76","135","200","169","97","157"); 
$newcolors3 = array("157","60","53","245","57","61","35"); 
 
 
$src1 = imagecreatetruecolor($width1,$height1);    //создаем изображение               
$fon = imagecolorallocate($src1,255,255,255);    //создаем фон
imagefill($src1,0,0,$fon);                       //заливаем изображение фоном
 
for($po=0;$po < $fon_let_amount;$po++)          //добавляем на фон буковки
{
    //случайный цвет
    $color = imagecolorallocatealpha($src1,rand(0,255),rand(0,255),rand(0,255),100); 
    //случайный символ
    $letter = $letters[rand(0,sizeof($letters)-1)]; 
    //случайный размер                              
    $size1 = rand($font_size+1,$font_size+1);                                            
    imagettftext($src1,$size1,rand(0,45),
        rand($width1*0.1,$width1-$width1*0.1),
        rand($height1*0.2,$height1),$color,$font1,$letter);
}
 
for($po=0;$po < $let_amount;$po++)      //то же самое для основных букв
{
   $color = imagecolorallocatealpha($src1,$newcolors1[$numcolors[$po]],
        $newcolors2[$numcolors[$po]],
        $newcolors3[$numcolors[$po]],rand(0,40)); 
   $letter = $letters[rand(0,sizeof($letters)-1)];
   $size1 = $font_size*2;
   $offset = $font_size+4;
   $x1 = ($po+1)*$offset;      //даем каждому символу случайное смещение
   $y1 = (($height1*2)/3) + rand(4,7);                            
   $cod[] = $letter;                        //запоминаем код
   imagettftext($src1,$size1,rand(0,15),$x1,$y1,$color,$font1,$letter);
}
 
$cod = implode("",$cod);                    //переводим код в строку
 session_start();
 $_SESSION['code']=$cod;
header ("Content-type: image/gif");         //выводим готовую картинку
imagegif($src1); 
?>