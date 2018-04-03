<?php
require_once 'main/conf.php';
require_once 'main/db.php';


mysql_query("SET NAMES utf8");

function defineNum($a) {
if ($a%2==0 && $a>0 && round($a)==$a) $class="";
elseif ($a%2==1 && $a>0 && round($a)==$a) $class="2";
else $class="";
return $class; 
}

function defineFloat($a) {
if ($a%2==0 && $a>0 && round($a)==$a) $float="left";
elseif ($a%2==1 && $a>0 && round($a)==$a) $float="right";
else $float="left";
return $float; 
}

function dataViewPin($url2, $sort) {

if ($url2) {

$vibor = "WHERE path = '$url2'";

}

else {

echo "функции нехватает данных!";

}

if($sort = true) {
$sort = "timestring ASC";
}
else {
$sort = "timestring DESC";
}
global $dataViewPin;
$dataViewPin = @mysql_query("SELECT DISTINCT * FROM pin $vibor ORDER BY $sort;");

}
// id пинов

function rowsViewPin() {
global $dataViewPin;
$result = @mysql_num_rows($dataViewPin);
return $result;
}

function resViewPinId() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 0);
return $res;

}
// type пинов
function resViewPinType() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 1);
return $res;

}
// маленькое фото пинов
function resViewPinThumb() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 2);
return $res;

}
// фото пинов
function resViewPinView() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 3);
return $res;

}
// большое фото пинов
function resViewPinBig() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 4);
return $res;

}
// название пинов
function resViewPinName() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 5);
return $res;

}
// source пинов
function resViewPinSource() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 6);
return $res;

}

// source пинов
function resViewPinColors() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 7);
return $res;

}

// высота пинов
function resViewPinMinheight() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 8);
return $res;

}

// ширина открытого пина
function resViewPinMaxwidth() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 9);
return $res;

}

// высота открытого пина
function resViewPinMaxheight() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 10);
return $res;

}

// репосты
function resViewPinRepins() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 11);
return $res;

}

// лайки
function resViewPinLikes() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 12);
return $res;

}

function resViewPinComments() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 13);
return $res;

}

// путь пинов
function resViewPinPath() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 14);
return $res;

}
// категории пинов
function resViewPinCategory() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 15);
return $res;

}

// альбомы пинов
function resViewPinBoard() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 16);
return $res;

}

// id репостов
function resViewPinRepinsId() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 17);
return $res;

}

// id лайков
function resViewPinLikesId() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 18);
return $res;

}

// id комментов
function resViewPinCommentsId() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 19);
return $res;

}


// автор пинов
function resViewPinAutor() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 20);
return $res;

}

// первый автор пинов
function resViewPinAutorId() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 21);
return $res;

}

// первый автор пинов
function resViewPinOrigAutor() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 22);
return $res;

}

// id первого автора
function resViewPinOrigId() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 23);
return $res;

}

// user пинов
function resViewPinUser() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 24);
return $res;

}

// ава автора пинов
function resViewPinAutorThumb() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 25);
return $res;

}

// кол-во пинов автора
function resViewPinAutorPins() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 26);
return $res;

}

// кол-во альбомов автора
function resViewPinAutorBoards() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 27);
return $res;

}

// кол-во лайков автора
function resViewPinAutorLikes() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 28);
return $res;

}

// кол-во репостов автора
function resViewPinAutorRepins() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 29);
return $res;

}

// кол-во подписчиков автора
function resViewPinAutorFollowers() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 30);
return $res;

}

// кол-во подпиок автора
function resViewPinAutorFollowings() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 31);
return $res;

}

// дата появления пинов
function resViewPinDate() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 32);
return $res;

}

// время появления пинов
function resViewPinTime() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 33);
return $res;

}

// type пинов
function resViewPinTimeString() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 34);
return $res;

}

// type пинов
function resViewPinTagThumb() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 35);
return $res;

}

// type пинов
function resViewPinSite() {

global $dataViewPin;
$res = @mysql_result($dataViewPin, 0, 36);
return $res;

}


// таблица пинов
function dataPin($mytable, $url1, $url2, $search, $sort) {

if ($url1) {
if ($url2) {
if ($search) {

$vibor = "WHERE $url1 = '$url2'";
$and = "AND";
$string = "pinname LIKE '%$search%'";

}

else {

$vibor = "WHERE $url1 = '$url2'";

}

}
}

else {

if ($search) {

$string = "WHERE pinname LIKE '%$search%'";

}

}

if($sort = true) {
$sort = "timestring ASC";
}
else {
$sort = "timestring DESC";
}
global $dataPin;
$dataPin = @mysql_query("SELECT DISTINCT * FROM $mytable $vibor $and $string ORDER BY $sort;");

}




function rowsPin() {
global $dataPin;
$result = @mysql_num_rows($dataPin);
return $result;
}

function resPinId($pinId) {

global $dataPin;
$res = @mysql_result($dataPin, $pinId, 0);
return $res;

}
// type пинов
function resPinType($pinType) {

global $dataPin;
$res = @mysql_result($dataPin, $pinType, 1);
return $res;

}
// маленькое фото пинов
function resPinThumb($pinThumb) {

global $dataPin;
$res = @mysql_result($dataPin, $pinThumb, 2);
return $res;

}
// фото пинов
function resPinView($pinView) {

global $dataPin;
$res = @mysql_result($dataPin, $pinView, 3);
return $res;

}
// большое фото пинов
function resPinBig($pinBig) {

global $dataPin;
$res = @mysql_result($dataPin, $pinBig, 4);
return $res;

}
// название пинов
function resPinName($pinName) {

global $dataPin;
$res = @mysql_result($dataPin, $pinName, 5);
return $res;

}
// source пинов
function resPinSource($pinSource) {

global $dataPin;
$res = @mysql_result($dataPin, $pinSource, 6);
return $res;

}

// source пинов
function resPinColors($pinColors) {

global $dataPin;
$res = @mysql_result($dataPin, $pinColors, 7);
return $res;

}

// высота пинов
function resPinMinheight($pinMinheight) {

global $dataPin;
$res = @mysql_result($dataPin, $pinMinheight, 8);
return $res;

}

// ширина открытого пина
function resPinMaxwidth($pinMaxwidth) {

global $dataPin;
$res = @mysql_result($dataPin, $pinMaxwidth, 9);
return $res;

}

// высота открытого пина
function resPinMaxheight($pinMaxheight) {

global $dataPin;
$res = @mysql_result($dataPin, $pinMaxheight, 10);
return $res;

}

// репосты
function resPinRepins($pinRepins) {

global $dataPin;
$res = @mysql_result($dataPin, $pinRepins, 11);
return $res;

}

// лайки
function resPinLikes($pinLikes) {

global $dataPin;
$res = @mysql_result($dataPin, $pinLikes, 12);
return $res;

}

// комменты
function resPinComments($pinComments) {

global $dataPin;
$res = @mysql_result($dataPin, $pinComments, 13);
return $res;

}

// путь пинов
function resPinPath($pinPath) {

global $dataPin;
$res = @mysql_result($dataPin, $pinPath, 14);
return $res;

}
// категории пинов
function resPinCategory($pinCategory) {

global $dataPin;
$res = @mysql_result($dataPin, $pinCategory, 15);
return $res;

}

// альбомы пинов
function resPinBoard($pinBoard) {

global $dataPin;
$res = @mysql_result($dataPin, $pinBoard, 16);
return $res;

}

// id репостов
function resPinRepinsId($pinRepinsId) {

global $dataPin;
$res = @mysql_result($dataPin, $pinRepinsId, 17);
return $res;

}

// id лайков
function resPinLikesId($pinLikesId) {

global $dataPin;
$res = @mysql_result($dataPin, $pinLikesId, 18);
return $res;

}

// id комментов
function resPinCommentsId($pinCommentsId) {

global $dataPin;
$res = @mysql_result($dataPin, $pinCommentsId, 19);
return $res;

}
// таблица комментов
function dataComments($CommentsId, $sort) {

$vibor = "WHERE ids = '$CommentsId'";
if($sort = true) {
$sort = "timestring ASC";
}
else {
$sort = "timestring DESC";
}
global $dataComments;
$dataComments = @mysql_query("SELECT DISTINCT * FROM comments $vibor ORDER BY $sort;");

}
// кол-во комментов
function rowsComments() {
global $dataComments;
$result = @mysql_num_rows($dataComments);
return $result;
}

// Id комментов
function resCommentsId($number1) {

global $dataComments;
$res = @mysql_result($dataComments, $number1, 0);
return $res;

}
// автор комментов
function resCommentsAutor($number1) {

global $dataComments;
$res = @mysql_result($dataComments, $number1, 1);
return $res;

}
// текст комментов
function resCommentsText($number1) {

global $dataComments;
$res = @mysql_result($dataComments, $number1, 2);
return $res;

}
// Users комментов
function resCommentsUsers($number1) {

global $dataComments;
$res = @mysql_result($dataComments, $number1, 3);
return $res;

}
// ава автора коммента
function resCommentsThumb($number1) {

global $dataComments;
$res = @mysql_result($dataComments, $number1, 4);
return $res;

}
// дата коммента
function resCommentsDate($number1) {

global $dataComments;
$res = @mysql_result($dataComments, $number1, 5);
return $res;

}
// время коммента
function resCommentsTime($number1) {

global $dataComments;
$res = @mysql_result($dataComments, $number1, 6);
return $res;

}
// TimeString коммента
function resCommentsTimeString($number1) {

global $dataComments;
$res = @mysql_result($dataComments, $number1, 7);
return $res;

}

// автор пинов
function resPinAutor($pinAutor) {

global $dataPin;
$res = @mysql_result($dataPin, $pinAutor, 20);
return $res;

}

// первый автор пинов
function resPinAutorId($pinAutorId) {

global $dataPin;
$res = @mysql_result($dataPin, $pinAutorId, 21);
return $res;

}

// первый автор пинов
function resPinOrigAutor($pinOrigAutor) {

global $dataPin;
$res = @mysql_result($dataPin, $pinOrigAutor, 22);
return $res;

}

// id первого автора
function resPinOrigId($pinOrigId) {

global $dataPin;
$res = @mysql_result($dataPin, $pinOrigId, 23);
return $res;

}

// user пинов
function resPinUser($pinUser) {

global $dataPin;
$res = @mysql_result($dataPin, $pinUser, 24);
return $res;

}

// ава автора пинов
function resPinAutorThumb($pinAutorThumb) {

global $dataPin;
$res = @mysql_result($dataPin, $pinAutorThumb,25);
return $res;

}

// кол-во пинов автора
function resPinAutorPins($pinAutorPins) {

global $dataPin;
$res = @mysql_result($dataPin, $pinAutorPins, 26);
return $res;

}

// кол-во альбомов автора
function resPinAutorBoards($pinAutorBoards) {

global $dataPin;
$res = @mysql_result($dataPin, $pinAutorBoards, 27);
return $res;

}

// кол-во лайков автора
function resPinAutorLikes($pinAutorLikes) {

global $dataPin;
$res = @mysql_result($dataPin, $pinAutorLikes, 28);
return $res;

}

// кол-во репостов автора
function resPinAutorRepins($pinAutorRepins) {

global $dataPin;
$res = @mysql_result($dataPin, $pinAutorRepins, 29);
return $res;

}

// кол-во подписчиков автора
function resPinAutorFollowers($pinAutorFollowers) {

global $dataPin;
$res = @mysql_result($dataPin, $pinAutorFollowers, 30);
return $res;

}

// кол-во подпиок автора
function resPinAutorFollowings($pinAutorFollowings) {

global $dataPin;
$res = @mysql_result($dataPin, $pinAutorFollowings, 31);
return $res;

}

// дата появления пинов
function resPinDate($pinDate) {

global $dataPin;
$res = @mysql_result($dataPin, $pinDate, 32);
return $res;

}

// время появления пинов
function resPinTime($pinTime) {

global $dataPin;
$res = @mysql_result($dataPin, $pinTime, 33);
return $res;

}

// type пинов
function resPinTimeString($pinTimeString) {

global $dataPin;
$res = @mysql_result($dataPin, $pinTimeString, 34);
return $res;

}

// type пинов
function resPinTagThumb($pinTagThumb) {

global $dataPin;
$res = @mysql_result($dataPin, $pinTagThumb, 35);
return $res;

}

// type пинов
function resPinSite($pinSite) {

global $dataPin;
$res = @mysql_result($dataPin, $pinSite, 36);
return $res;

}

function dataAllCategory($sort) {

$vibor = "WHERE urls = '$categoryId'";
if($sort = true) {
$sort = "caty ASC";
}
else {
$sort = "caty DESC";
}
global $dataAllCategory;
$dataAllCategory = @mysql_query("SELECT DISTINCT * FROM category ORDER BY $sort;");

}

// type пинов
function resAllCategoryId($num) {

global $dataAllCategory;
$res = @mysql_result($dataAllCategory, $num, 0);
return $res;

}

// type пинов
function resAllCategoryName($num) {

global $dataAllCategory;
$res = @mysql_result($dataAllCategory, $num, 1);
return $res;

}

// type пинов
function resAllCategoryUrl($num) {

global $dataAllCategory;
$res = @mysql_result($dataAllCategory, $num, 2);
return $res;

}

// type пинов
function resAllCategoryThumb($num) {

global $dataAllCategory;
$res = @mysql_result($dataAllCategory, $num, 3);
return $res;

}

// type пинов
function resAllCategoryDate($num) {

global $dataAllCategory;
$res = @mysql_result($dataAllCategory, $num, 4);
return $res;

}

// type пинов
function resAllCategoryTime($num) {

global $dataAllCategory;
$res = @mysql_result($dataAllCategory, $num, 5);
return $res;

}

// type пинов
function resAllCategoryTimeString($num) {

global $dataAllCategory;
$res = @mysql_result($dataAllCategory, $num, 6);
return $res;

}

// кол-во комментов
function rowsAllCategory() {
global $dataAllCategory;
$result = @mysql_num_rows($dataAllCategory);
return $result;
}

function dataCategory($categoryId, $sort) {

$vibor = "WHERE urls = '$categoryId'";
if($sort = true) {
$sort = "timestring ASC";
}
else {
$sort = "timestring DESC";
}
global $dataCategory;
$dataCategory = @mysql_query("SELECT DISTINCT * FROM category $vibor ORDER BY $sort;");

}

// кол-во комментов
function rowsCategory() {
global $dataCategory;
$result = @mysql_num_rows($dataCategory);
return $result;
}





function dataUser($user, $sort) {

$vibor = "WHERE autor = '$user'";
if($sort = true) {
$sort = "timestring ASC";
}
else {
$sort = "timestring DESC";
}
global $dataUser;
$dataUser = @mysql_query("SELECT DISTINCT * FROM pin $vibor ORDER BY $sort;");

}

// кол-во комментов
function rowsUser() {
global $dataUser;
$result = @mysql_num_rows($dataUser);
return $result;
}

dataUser("scanderberg", false);

// id пользователя
function resUserId($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 0);
return $res;

}

// id пользователя
function resUserType($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 1);
return $res;

}
// id пользователя
function resUserPinThumb($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 2);
return $res;

}
// id пользователя
function resUserPinView($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 3);
return $res;

}// id пользователя
function resUserPinBig($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 4);
return $res;

}
// id пользователя
function resUserPinName($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 5);
return $res;

}
// id пользователя
function resUserSource($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 6);
return $res;

}// id пользователя
function resUserColors($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 7);
return $res;

}

// id пользователя
function resUserMinHeight($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 8);
return $res;

}
// id пользователя
function resUserMaxWidth($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 9);
return $res;

}
// id пользователя
function resUserMaxHeight ($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 10);
return $res;

}
// id пользователя
function resUserRepins ($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 11);
return $res;

}
// id пользователя
function resUserLikes ($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 12);
return $res;

}
// id пользователя
function resUserComments ($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 13);
return $res;

}

// id пользователя
function resUserPath ($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 14);
return $res;

}

// id пользователя
function resUserCategory ($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 15);
return $res;

}

// id пользователя
function resUserBoard ($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 16);
return $res;

}
// id пользователя
function resUserRepinsId ($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 17);
return $res;

}// id пользователя
function resUserLikesId ($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 18);
return $res;

}
// id пользователя
function resUserCommentsId($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 19);
return $res;

}
// id пользователя
function resUserAutor($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 20);
return $res;

}
// id пользователя
function resUserAutorId($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 21);
return $res;

}
// id пользователя
function resUserOrigAutor($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 22);
return $res;

}
// id пользователя
function resUserOrigId($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 23);
return $res;

}
// id пользователя
function resUserUsers($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 24);
return $res;

}
// id пользователя
function resUserThumb($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 25);
return $res;

}
// id пользователя
function resUserAutorPins($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 26);
return $res;

}
// id пользователя
function resUserAutorBoards($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 27);
return $res;

}
// id пользователя
function resUserAutorLikes($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 28);
return $res;

}

// id пользователя
function resUserAutorRepins($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 29);
return $res;

}

// id пользователя
function resUserAutorFollowers($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 30);
return $res;

}

// id пользователя
function resUserAutorFollowings($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 31);
return $res;

}

// id пользователя
function resUserDate($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 32);
return $res;

}

// id пользователя
function resUserTime($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 33);
return $res;

}

// id пользователя
function resUserTimeString($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 34);
return $res;

}

// id пользователя
function resUserTagThumb($number) {

global $dataUser;
$res = @mysql_result($dataUser, $number, 35);
return $res;

}

function dataProfile($user, $sort) {

$vibor = "WHERE users = '$user'";
if($sort = true) {
$sort = "timestring ASC";
}
else {
$sort = "timestring DESC";
}
global $dataProfile;
$dataProfile = @mysql_query("SELECT DISTINCT * FROM users $vibor ORDER BY $sort;");

}

// кол-во комментов
function rowsProfile() {
global $dataProfile;
$result = @mysql_num_rows($dataProfile);
return $result;
}

// id пользователя
function resProfileId() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 0);
return $res;

}

// id пользователя
function resProfileRules() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 1);
return $res;

}

// id пользователя
function resProfileUsers() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 2);
return $res;

}

// id пользователя
function resProfileName() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 3);
return $res;

}

// id пользователя
function resProfileSoname() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 4);
return $res;

}

// id пользователя
function resProfileAge() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 5);
return $res;

}

// id пользователя
function resProfileCountry() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 6);
return $res;

}

// id пользователя
function resProfileCity() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 7);
return $res;

}

// id пользователя
function resProfileAbout() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 8);
return $res;

}

// id пользователя
function resProfileMiniThumb() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 9);
return $res;

}

// id пользователя
function resProfileThumb() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 10);
return $res;

}

// id пользователя
function resProfileBigThumb() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 11);
return $res;

}

// id пользователя
function resProfileAutorPins() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 12);
return $res;

}

// id пользователя
function resProfileAutorBoards() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 13);
return $res;

}

// id пользователя
function resProfileAutorLikes() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 14);
return $res;

}

// id пользователя
function resProfileAutorRepins() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 15);
return $res;

}

// id пользователя
function resProfileAutorFollowers() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 16);
return $res;

}

// id пользователя
function resProfileAutorFollowings() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 17);
return $res;

}

// id пользователя
function resProfileDate() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 18);
return $res;

}

// id пользователя
function resProfileTime() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 19);
return $res;

}

// id пользователя
function resProfileTimeString() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 20);
return $res;

}

// id пользователя
function resProfileCover() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 21);
return $res;

}

// id пользователя
function resProfileVK() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 22);
return $res;

}

// id пользователя
function resProfileFB() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 23);
return $res;

}

// id пользователя
function resProfileTW() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 25);
return $res;

}

// id пользователя
function resProfileGL() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 26);
return $res;

}


// id пользователя
function resProfileWWW() {

global $dataProfile;
$res = @mysql_result($dataProfile, 0, 27);
return $res;

}

// type пинов
function resCategoryId() {

global $dataCategory;
$res = @mysql_result($dataCategory, 0, 0);
return $res;

}

// type пинов
function resCategoryName() {

global $dataCategory;
$res = @mysql_result($dataCategory, 0, 1);
return $res;

}

// type пинов
function resCategoryUrl() {

global $dataCategory;
$res = @mysql_result($dataCategory, 0, 2);
return $res;

}

// type пинов
function resCategoryThumb() {

global $dataCategory;
$res = @mysql_result($dataCategory, 0, 3);
return $res;

}

// type пинов
function resCategoryDate() {

global $dataCategory;
$res = @mysql_result($dataCategory, 0, 4);
return $res;

}

// type пинов
function resCategoryTime() {

global $dataCategory;
$res = @mysql_result($dataCategory, 0, 5);
return $res;

}

// type пинов
function resCategoryTimeString() {

global $dataCategory;
$res = @mysql_result($dataCategory, 0, 6);
return $res;

}



// таблица тэгов
function dataTag($TagId, $sort) {

$vibor = "WHERE pinid = '$TagId'";
if($sort = true) {
$sort = "timestring ASC";
}
else {
$sort = "timestring DESC";
}
global $dataTag;
$dataTag = @mysql_query("SELECT * FROM tags $vibor ORDER BY $sort;");

}

// кол-во тэгов
function rowsTags() {
global $dataTag;
$result = @mysql_num_rows($dataTag);
return $result;
}



// Id тэга
function resTagId($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 0);
return $res;

}

// Id тэга
function resTagAllIds($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 1);
return $res;

}

// Id тэга
function resTagName($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 2);
return $res;

}

// Id тэга
function resTagUsers($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 3);
return $res;

}

// Id тэга
function resTagPath($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 4);
return $res;

}
// Id тэга
function resTagStatus($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 5);
return $res;

}

// Id тэга
function resTagThumb($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 6);
return $res;

}
// Id тэга
function resTagPinId($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 7);
return $res;

}
// Id тэга
function resTagPopularId($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 8);
return $res;

}

// Id тэга
function resTagPopularName($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 9);
return $res;

}

// Id тэга
function resTagPopularImg($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 10);
return $res;

}

// Id тэга
function resTagDate($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 11);
return $res;

}

// Id тэга
function resTagTime($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 12);
return $res;

}

// Id тэга
function resTagTimeString($number1) {

global $dataTag;
$res = @mysql_result($dataTag, $number1, 13);
return $res;

}



function dataGetTags($TagsPath, $sort) {

$vibor = "WHERE path = '$TagsPath'";
if($sort = true) {
$sort = "status ASC";
}
else {
$sort = "status DESC";
}
global $dataGetTags;
$dataGetTags = @mysql_query("SELECT DISTINCT * FROM tags $vibor ORDER BY $sort;");

}

function rowsGetTags() {
global $dataGetTags;
$result = @mysql_num_rows($dataGetTags);
return $result;
}


function resGetTagsId($GetTagsId) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsId, 0);
return $res;

}

function resGetTagsAllId($GetTagsAllId) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsAllId, 1);
return $res;

}

function resGetTagsName($GetTagsName) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsName, 2);
return $res;

}

function resGetTagsUsers($GetTagsUsers) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsUsers, 3);
return $res;

}

function resGetTagsPath($GetTagsPath) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsPath, 4);
return $res;

}

function resGetTagsStatus($GetTagsStatus) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsStatus, 5);
return $res;

}

function resGetTagsThumb($GetTagsThumb) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsThumb, 6);
return $res;

}

function resGetTagsPinId($GetTagsPinId) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsPinId, 7);
return $res;

}

function resGetTagsPopularId($GetTagsPopularId) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsPopularId, 8);
return $res;

}
function resGetTagsPopularName($GetTagsPopularName) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsPopularName, 9);
return $res;

}
function resGetTagsPopularImg($GetTagsPopularImg) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsPopularImg, 10);
return $res;

}
function resGetTagsDate($GetTagsDate) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsDate, 11);
return $res;

}
function resGetTagsTime($GetTagsTime) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsTime, 12);
return $res;

}
function resGetTagsTimeString($GetTagsTimeString) {

global $dataGetTags;
$res = @mysql_result($dataGetTags, $GetTagsTimeString, 13);
return $res;

}


function dataLikes($user, $sort) {

$vibor = "WHERE users = '$user'";
if($sort = true) {
$sort = "timestring ASC";
}
else {
$sort = "timestring DESC";
}
global $dataLikes;
$dataLikes = @mysql_query("SELECT DISTINCT * FROM likes $vibor ORDER BY $sort;");

}

// кол-во лайков
function rowsLikes() {
global $dataLikes;
$result = @mysql_num_rows($dataLikes);
return $result;
}

// id лайка
function resLikesId($number) {

global $dataLikes;
$res = @mysql_result($dataLikes, $number, 0);
return $res;

}

// user лайка
function resLikesUsers($number) {

global $dataLikes;
$res = @mysql_result($dataLikes, $number, 1);
return $res;

}
// фото лайка
function resLikesThumb($number) {

global $dataLikes;
$res = @mysql_result($dataLikes, $number, 2);
return $res;

}
// дата лайка
function resLikesDate($number) {

global $dataLikes;
$res = @mysql_result($dataLikes, $number, 3);
return $res;

}

// время лайка
function resLikesTime($number) {

global $dataLikes;
$res = @mysql_result($dataLikes, $number, 4);
return $res;

}
// строка времени лайка
function resLikesTimeString($number) {

global $dataLikes;
$res = @mysql_result($dataLikes, $number, 5);
return $res;

}
// id пина
function resLikesPinId($number) {

global $dataLikes;
$res = @mysql_result($dataLikes, $number, 6);
return $res;

}

function dataFollow ($users, $sort) {

$vibor = "WHERE type = 'followers' AND users = '$users'";
if($sort = true) {
$sort = "ids ASC";
}
else {
$sort = "ids DESC";
}
global $dataFollow;
$dataFollow = @mysql_query("SELECT DISTINCT * FROM following $vibor ORDER BY $sort;");

}

// кол-во лайков
function rowsFollow() {
global $dataFollow;
$result = @mysql_num_rows($dataFollow);
return $result;
}

function resFollowId ($number) {

global $dataFollow;
$res = @mysql_result($dataFollow, $number, 0);
return $res;

}

function resFollowType ($number) {

global $dataFollow;
$res = @mysql_result($dataFollow, $number, 1);
return $res;

}

function resFollowUsers ($number) {

global $dataFollow;
$res = @mysql_result($dataFollow, $number, 2);
return $res;

}

function resFollowObj ($number) {

global $dataFollow;
$res = @mysql_result($dataFollow, $number, 3);
return $res;

}

function resFollowObjId ($number) {

global $dataFollow;
$res = @mysql_result($dataFollow, $number, 4);
return $res;

}

function dataBoards ($users, $sort) {

$vibor = "WHERE users = '$users'";
if($sort = true) {
$sort = "timestring ASC";
}
else {
$sort = "timestring DESC";
}
global $dataBoards;
$dataBoards = @mysql_query("SELECT DISTINCT * FROM boards $vibor ORDER BY $sort;");

}

// кол-во лайков
function rowsBoards() {
global $dataBoards;
$result = @mysql_num_rows($dataBoards);
return $result;
}

// Id Board
function resBoardsId ($number) {

global $dataBoards;
$res = @mysql_result($dataBoards, $number, 0);
return $res;

}

// Id Board
function resBoardsName ($number) {

global $dataBoards;
$res = @mysql_result($dataBoards, $number, 1);
return $res;

}

// Id Board
function resBoardsCategory ($number) {

global $dataBoards;
$res = @mysql_result($dataBoards, $number, 2);
return $res;

}

// Id Board
function resBoardsPath ($number) {

global $dataBoards;
$res = @mysql_result($dataBoards, $number, 3);
return $res;

}

// Id Board
function resBoardsUsers ($number) {

global $dataBoards;
$res = @mysql_result($dataBoards, $number, 4);
return $res;

}

// Id Board
function resBoardsThumb ($number) {

global $dataBoards;
$res = @mysql_result($dataBoards, $number, 5);
return $res;

}
// Id Board
function resBoardsDate ($number) {

global $dataBoards;
$res = @mysql_result($dataBoards, $number, 6);
return $res;

}

// Id Board
function resBoardsTime ($number) {

global $dataBoards;
$res = @mysql_result($dataBoards, $number, 7);
return $res;

}

// Id Board
function resBoardsTimeString ($number) {

global $dataBoards;
$res = @mysql_result($dataBoards, $number, 8);
return $res;

}

function dataMyBoards ($path, $sort) {

$vibor = "WHERE path = '$path'";
if($sort = true) {
$sort = "timestring ASC";
}
else {
$sort = "timestring DESC";
}
global $dataMyBoards;
$dataMyBoards = @mysql_query("SELECT DISTINCT * FROM boards $vibor ORDER BY $sort;");

}

// кол-во лайков
function rowsMyBoards() {
global $dataMyBoards;
$result = @mysql_num_rows($dataMyBoards);
return $result;
}

// Id Board
function resMyBoardsId ($number) {

global $dataMyBoards;
$res = @mysql_result($dataMyBoards, $number, 0);
return $res;

}

// Id Board
function resMyBoardsName ($number) {

global $dataMyBoards;
$res = @mysql_result($dataMyBoards, $number, 1);
return $res;

}

// Id Board
function resMyBoardsCategory ($number) {

global $dataMyBoards;
$res = @mysql_result($dataMyBoards, $number, 2);
return $res;

}

// Id Board
function resMyBoardsPath ($number) {

global $dataMyBoards;
$res = @mysql_result($dataMyBoards, $number, 3);
return $res;

}

// Id Board
function resMyBoardsUsers ($number) {

global $dataMyBoards;
$res = @mysql_result($dataMyBoards, $number, 4);
return $res;

}

// Id Board
function resMyBoardsThumb ($number) {

global $dataMyBoards;
$res = @mysql_result($dataMyBoards, $number, 5);
return $res;

}
// Id Board
function resMyBoardsDate ($number) {

global $dataMyBoards;
$res = @mysql_result($dataMyBoards, $number, 6);
return $res;

}

// Id Board
function resMyBoardsTime ($number) {

global $dataMyBoards;
$res = @mysql_result($dataMyBoards, $number, 7);
return $res;

}

// Id Board
function resMyBoardsTimeString ($number) {

global $dataMyBoards;
$res = @mysql_result($dataMyBoards, $number, 8);
return $res;

}





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
