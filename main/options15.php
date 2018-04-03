<?php



mysql_query("SET NAMES utf8");

$colUser = "user";
$likes = "likes";
$pin = "pin";
$boards = "boards";
$orig = "origautor";

$dds = "ids";

function mySelect($mytable, $kolonka, $value, $y, $v, $asort) {

if($asort = true) {
$asort = "ids ASC";
}
else {
$asort = "ids DESC";
}

$data = @mysql_query("SELECT DISTINCT * FROM $mytable WHERE $kolonka = '$value' ORDER BY $asort;");

$res = @mysql_result($data, $y, $v);

return $res;

}

function myElem($mytable, $kolonka, $value, $y, $v, $asort) {

if($asort = true) {
$asort = "ids ASC";
}
else {
$asort = "ids DESC";
}

$data = @mysql_query("SELECT DISTINCT * FROM $mytable WHERE $kolonka = '$value' ORDER BY $asort;");

$res = mysql_num_rows($data);

return $res;

}

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

return false;

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
// id пинов


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

function dataAllProfile($sort) {

if($sort = true) {
$sort = "timestring ASC";
}
else {
$sort = "timestring DESC";
}
global $dataAllProfile;
$dataAllProfile = @mysql_query("SELECT DISTINCT * FROM users ORDER BY $sort;");

}

// кол-во комментов
function rowsAllProfile() {
global $dataAllProfile;
$result = @mysql_num_rows($dataAllProfile);
return $result;
}

// id пользователя
function resAllProfileId($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 0);
return $res;

}

// id пользователя
function resAllProfileRules($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 1);
return $res;

}

// id пользователя
function resAllProfileUsers($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 2);
return $res;

}

// id пользователя
function resAllProfileName($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 3);
return $res;

}

// id пользователя
function resAllProfileSoname($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 4);
return $res;

}

// id пользователя
function resAllProfileAge($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 5);
return $res;

}

// id пользователя
function resAllProfileCountry($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 6);
return $res;

}

// id пользователя
function resAllProfileCity($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 7);
return $res;

}

// id пользователя
function resAllProfileAbout($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 8);
return $res;

}

// id пользователя
function resAllProfileMiniThumb($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 9);
return $res;

}

// id пользователя
function resAllProfileThumb($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 10);
return $res;

}

// id пользователя
function resAllProfileBigThumb($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 11);
return $res;

}

// id пользователя
function resAllProfileAutorPins($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 12);
return $res;

}

// id пользователя
function resAllProfileAutorBoards($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 13);
return $res;

}

// id пользователя
function resAllProfileAutorLikes($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 14);
return $res;

}

// id пользователя
function resAllProfileAutorRepins($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 15);
return $res;

}

// id пользователя
function resAllProfileAutorFollowers($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 16);
return $res;

}

// id пользователя
function resAllProfileAutorFollowings($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 17);
return $res;

}

// id пользователя
function resAllProfileDate($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 18);
return $res;

}

// id пользователя
function resAllProfileTime($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 19);
return $res;

}

// id пользователя
function resAllProfileTimeString($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 20);
return $res;

}

// id пользователя
function resAllProfileCover($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 21);
return $res;

}

// id пользователя
function resAllProfileVK($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 22);
return $res;

}

// id пользователя
function resAllProfileFB($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 23);
return $res;

}

// id пользователя
function resAllProfileTW($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 25);
return $res;

}

// id пользователя
function resAllProfileGL($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 26);
return $res;

}


// id пользователя
function resAllProfileWWW($number) {

global $dataAllProfile;
$res = @mysql_result($dataAllProfile, $number, 27);
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

function dataFollowing ($users, $sort) {

$vibor = "WHERE type = 'followings' AND users = '$users'";
if($sort = true) {
$sort = "ids ASC";
}
else {
$sort = "ids DESC";
}
global $dataFollowing;
$dataFollowing = @mysql_query("SELECT DISTINCT * FROM following $vibor ORDER BY $sort;");

}

// кол-во лайков
function rowsFollowing() {
global $dataFollowing;
$result = @mysql_num_rows($dataFollowing);
return $result;
}

function resFollowingId ($number) {

global $dataFollowing;
$res = @mysql_result($dataFollowing, $number, 0);
return $res;

}

function resFollowingType ($number) {

global $dataFollowing;
$res = @mysql_result($dataFollowing, $number, 1);
return $res;

}

function resFollowingUsers ($number) {

global $dataFollowing;
$res = @mysql_result($dataFollowing, $number, 2);
return $res;

}

function resFollowingObj ($number) {

global $dataFollowing;
$res = @mysql_result($dataFollowing, $number, 3);
return $res;

}

function resFollowingObjId ($number) {

global $dataFollowing;
$res = @mysql_result($dataFollowing, $number, 4);
return $res;

}





function dataFollow2 ($users, $sort) {

$vibor = "WHERE type = 'followers' AND users = '$users'";
if($sort = true) {
$sort = "ids ASC";
}
else {
$sort = "ids DESC";
}
global $dataFollow2;
$dataFollow2 = @mysql_query("SELECT DISTINCT * FROM following $vibor ORDER BY $sort;");

}

// кол-во лайков
function rowsFollow2() {
global $dataFollow2;
$result = @mysql_num_rows($dataFollow2);
return $result;
}

function resFollowId2 ($number) {

global $dataFollow2;
$res = @mysql_result($dataFollow2, $number, 0);
return $res;

}

function resFollowType2 ($number) {

global $dataFollow2;
$res = @mysql_result($dataFollow2, $number, 1);
return $res;

}

function resFollowUsers2 ($number) {

global $dataFollow2;
$res = @mysql_result($dataFollow2, $number, 2);
return $res;

}

function resFollowObj2 ($number) {

global $dataFollow2;
$res = @mysql_result($dataFollow2, $number, 3);
return $res;

}

function resFollowObjId2 ($number) {

global $dataFollow2;
$res = @mysql_result($dataFollow2, $number, 4);
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





// nameBoard

function nameBoard ($boardName, $sort) {

$vibor = "WHERE boardname = '$boardName'";
if($sort = true) {
$sort = "timestring ASC";
}
else {
$sort = "timestring DESC";
}
global $nameBoard;
$nameBoard = @mysql_query("SELECT DISTINCT * FROM boards $vibor ORDER BY $sort;");

}

// кол-во лайков
function rowsNameBoard() {
global $nameBoard;
$result = @mysql_num_rows($nameBoard);
return $result;
}

// Id Board
function nameBoardId () {

global $nameBoard;
$res = @mysql_result($nameBoard, 0, 0);
return $res;

}

// Id Board
function nameBoardName () {

global $nameBoard;
$res = @mysql_result($nameBoard, 0, 1);
return $res;

}

// Id Board
function nameBoardCategory () {

global $nameBoard;
$res = @mysql_result($nameBoard, 0, 2);
return $res;

}

// Id Board
function nameBoardPath () {

global $nameBoard;
$res = @mysql_result($nameBoard, 0, 3);
return $res;

}

// Id Board
function nameBoardUsers () {

global $nameBoard;
$res = @mysql_result($nameBoard, 0, 4);
return $res;

}

// Id Board
function nameBoardThumb () {

global $nameBoard;
$res = @mysql_result($nameBoard, 0, 5);
return $res;

}
// Id Board
function nameBoardDate () {

global $nameBoard;
$res = @mysql_result($nameBoard, 0, 6);
return $res;

}

// Id Board
function nameBoardTime () {

global $nameBoard;
$res = @mysql_result($nameBoard, 0, 7);
return $res;

}

// Id Board
function nameBoardTimeString () {

global $nameBoard;
$res = @mysql_result($dataBoard, 0, 8);
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

function generateStr($length = 8){
  $chars = 'abdefhiknrstyz1234567890';
  $numChars = strlen($chars);
  $string = '';
  for ($d = 0; $d < $length; $d++) {
    $string .= substr($chars, rand(1, $numChars) - 1, 1);
  }
  return $string;
}

function randColor(){
$arrColors = array("#52c1df", "#ffb6c1", "#a40061", "#00ff01", "#7e0b80", "#e74c3c", "#fde5cb", "#fe6700", "#9aff99", "#0e1541", "#fde5cb", "#035709", "#feef00", "#0056a3", "#dbdbdb"); 
$rColor = rand(0, 15);
return $arrColors[$rColor];
}

function myPin($numPin){

?>

$('#pin<?php echo $numPin; ?>').delegate('#pinned<?php echo $numPin; ?>','mouseover',function(){
$('#action<?php echo $numPin; ?>').toggleClass('actionbar-hover', true);
      });
	  
$('#pin<?php echo $numPin; ?>').delegate('#pinned<?php echo $numPin; ?>','mouseleave',function(){
$('#action<?php echo $numPin; ?>').removeClass('actionbar-hover');
$('#pin-nav<?php echo $numPin; ?>').removeClass('navpin-show');
$('.thumb-autor img').toggleClass('thumb-autor-hover', false);
$('.thumb-autor .navtooltip, .comment-autor .navtooltip, .like-autor .navtooltip, .repin-autor .navtooltip, .unlike-autor .navtooltip').toggleClass('navtooltip-hide', false);
      });

$('#pin<?php echo $numPin; ?>').delegate('#repin<?php echo $numPin; ?>','mouseover',function(){
$('#repin<?php echo $numPin; ?>').toggleClass('repin-autor-hover', true);
$('.repin-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPin; ?>').delegate('#repin<?php echo $numPin; ?>','mouseleave',function(){
$('#repin<?php echo $numPin; ?>').toggleClass('repin-autor-hover', false);
$('.repin-autor .navtooltip').css('display','none');
      });	  
	  
$('#pin<?php echo $numPin; ?>').delegate('#like<?php echo $numPin; ?>','mouseover',function(){
$('#like<?php echo $numPin; ?>').toggleClass('like-autor-hover', true);
$('.like-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPin; ?>').delegate('#like<?php echo $numPin; ?>','mouseleave',function(){
$('#like<?php echo $numPin; ?>').toggleClass('like-autor-hover', false);
$('.like-autor .navtooltip').css('display','none');
      });
	  
	  $('#pin<?php echo $numPin; ?>').delegate('#unlike<?php echo $numPin; ?>','mouseover',function(){
$('#unlike<?php echo $numPin; ?>').toggleClass('unlike-autor-hover', true);
$('.unlike-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPin; ?>').delegate('#unlike<?php echo $numPin; ?>','mouseleave',function(){
$('#unlike<?php echo $numPin; ?>').toggleClass('unlike-autor-hover', false);
$('.unlike-autor .navtooltip').css('display','none');
      });
	  
$('#pin<?php echo $numPin; ?>').delegate('a #comment<?php echo $numPin; ?>','mouseover',function(){
$('#comment<?php echo $numPin; ?>').toggleClass('comment-autor-hover', true);
$('.comment-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPin; ?>').delegate('a #comment<?php echo $numPin; ?>','mouseleave',function(){
$('#comment<?php echo $numPin; ?>').toggleClass('comment-autor-hover', false);
$('.comment-autor .navtooltip').css('display','none');
      }); 
	  
$('#pin<?php echo $numPin; ?>').delegate('a #dop<?php echo $numPin; ?>','mouseover',function(){
$('#dop<?php echo $numPin; ?>').toggleClass('set-autor-hover', true);
$('.set-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPin; ?>').delegate('a #dop<?php echo $numPin; ?>','mouseleave',function(){
$('#dop<?php echo $numPin; ?>').toggleClass('set-autor-hover', false);
$('.set-autor .navtooltip').css('display','none');
      });  
	  
$('#pin<?php echo $numPin; ?>').delegate('#like<?php echo $numPin; ?>','click',function(){
event.preventDefault();
var like = $('#small-likes<?php echo $numPin; ?>').html();
like++;
$('a div#like<?php echo $numPin; ?>').css('display','none');
$('a div#unlike<?php echo $numPin; ?>').css('display','inline-block');
$('#small-likes<?php echo $numPin; ?>').html(like);
      });
	  
$('#pin<?php echo $numPin; ?>').delegate('#unlike<?php echo $numPin; ?>','click',function(){
event.preventDefault();
var unlike = $('#small-likes<?php echo $numPin; ?>').html();
unlike--;
$('a div#unlike<?php echo $numPin; ?>').css('display','none');
$('a div#like<?php echo $numPin; ?>').css('display','inline-block');
$('#small-likes<?php echo $numPin; ?>').html(unlike);
      });
	  
$('#pin<?php echo $numPin; ?>').delegate('a #comment<?php echo $numPin; ?>','click',function(){
event.preventDefault();
$('#send<?php echo $numPin; ?>').toggleClass('send-comment-click');
<?php if (rowsPin() > 5 or rowsLikes() > 5) { ?>
var $container = $('#container_infinity');
$container.masonry();
<?php } ?>
      });
	  
$('#pin<?php echo $numPin; ?>').delegate('#dop<?php echo $numPin; ?>','click',function(){
event.preventDefault();
$('#pinned<?php echo $numPin; ?>').css('display','none');
$('#head<?php echo $numPin; ?>').css('display','block');
var $container3 = $('#container_infinity');
$container3.masonry();
      });
$('#pin<?php echo $numPin; ?>').delegate('#head<?php echo $numPin; ?>','click',function(){
event.preventDefault();
$('#pinned<?php echo $numPin; ?>').css('display','block');
$('#head<?php echo $numPin; ?>').css('display','none');
var $container4 = $('#container_infinity');
$container4.masonry();
      });
	  
	  
	  
	  
	  
$('#pin<?php echo $numPin; ?>').delegate('#repin<?php echo $numPin; ?>','click',function(event){
event.preventDefault();
$('#all-section-main').toggleClass('fixed', true);
$('.box-re').css('display','block');
allheight<?php echo $numPin; ?> = $('.boxed-repin').height();
allheight1<?php echo $numPin; ?> = allheight<?php echo $numPin; ?>+50;
scrolli<?php echo $numPin; ?> = $('body').scrollTop();
scrolliz<?php echo $numPin; ?> = scrolli<?php echo $numPin; ?>+30;
allheight2<?php echo $numPin; ?> = allheight<?php echo $numPin; ?>+scrolliz<?php echo $numPin; ?>;
scrollim<?php echo $numPin; ?> = scrolli<?php echo $numPin; ?>+1000;
scrollix<?php echo $numPin; ?> = scrolli<?php echo $numPin; ?>;
$('#all-section-main').animate({
        'marginTop': '-='+scrollim<?php echo $numPin; ?>+'px'

}, 0);

$('.box-re').animate({
        'marginTop': '-='+scrolli<?php echo $numPin; ?>+'px',
		'height': allheight2<?php echo $numPin; ?>
}, 0);

$('.boxed-repin').animate({
        'marginTop': '+='+scrollix<?php echo $numPin; ?>+'px'
}, 0);

myid2<?php echo $numPin; ?> = '<?php echo $numPin; ?>';
$('.boxed-repin').html(myid2<?php echo $numPin; ?>);

      });    

$('#pin<?php echo $numPin; ?>').delegate('#thumb<?php echo $numPin; ?>','mouseover',function(){
$('#pin-nav<?php echo $numPin; ?>').toggleClass('navpin-show', true);
$('.thumb-autor img').toggleClass('thumb-autor-hover', true);
      });  
	  
$('#pin<?php echo $numPin; ?>').delegate('#thumb<?php echo $numPin; ?>','mouseleave',function(){
$('#pin-nav<?php echo $numPin; ?>').toggleClass('navpin-show', false);
$('.thumb-autor img').toggleClass('thumb-autor-hover', false);
      }); 
	  
$('#pin<?php echo $numPin; ?>').delegate('#thumb<?php echo $numPin; ?>','click',function(){
event.preventDefault();
});
	  

<?php

}

function myPin2($numPin2, $dmgPin2, $scroll2, $repinsPin2, $likesPin2, $commentsPin2, $commentsId2, $autorPin2, $autorThumbPin2, $resPinType2, $resPinSource2){

if ($commentsId2 > 0) {
dataComments($commentsId2, false);
}

?>

$('#pin<?php echo $numPin2; ?>').undelegate();
<?php
if ($scroll2 > 1) {
?>
$('#pin<?php echo $numPin2; ?>').css('display','none').delay(300).fadeIn(700, function(){
	
$('a#pin-view<?php echo $scroll2; ?><?php echo $numPin2; ?> img#img<?php echo $numPin2; ?>').fadeIn(1000, 'easeInExpo', function(){ 

var $container = $('#container_infinity');
$container.masonry();

$('div#bar-place<?php echo $scroll2; ?><?php echo $numPin2; ?>').html("<div align='center' id='action<?php echo $numPin2; ?>' class='actionbar'><a href='' return='false'><div align='center' id='thumb<?php echo $numPin2; ?>' class='thumb-autor'><img class='img-nav' src='http://pinct.ru/user/<?php echo $autorThumbPin2; ?>' align='left' width='50px'/><div id='pin-nav<?php echo $numPin2; ?>' class='navpin'><img src='http://pinct.ru/img/tik-top-pin.png' align='left' width='20'/><?php echo $autorPin2; ?><div id='pin-nav-text<?php echo $numPin2; ?>' class='navpintext'><ul><a href='http://pinct.ru/users/<?php echo $autorPin2; ?>' class='myauthor first-el' return='false'><li>Посты</li></a><a href='http://pinct.ru/users/<?php echo $autorPin2; ?>/boards' return='false' class='myauthor'><li>Альбомы</li></a><a href='http://pinct.ru/users/<?php echo $autorPin2; ?>/likes' return='false'class='myauthor'><li>Лайки</li></a><a href='http://pinct.ru/users/<?php echo $autorPin2; ?>/repins' return='false'class='myauthor'><li>Репосты</li></a><a href='http://pinct.ru/users/<?php echo $autorPin2; ?>/followers' return='false'class='myauthor'><li>Подписчики</li></a><a href='http://pinct.ru/users/<?php echo $autorPin2; ?>/followings' class='myauthor last-el' return='false'><li>Подписки</li></a></ul></div></div><div id='tooltip-menu<?php echo $numPin2; ?>-user' class='navtooltip'><img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/><?php echo $autorPin2; ?></div></div></a><a href='' return='false'><div align='center' id='repin<?php echo $numPin2; ?>' class='repin-autor' style='margin-left: 7px; margin-right: 4px;'><div id='tooltip-menu<?php echo $numPin2; ?>-repin' class='navtooltip'><img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>репост</div></div></a><a href='' return='false'><div align='center' id='like<?php echo $numPin2; ?>' class='like-autor' style='margin-left: 4px; margin-right: 4px;'><div id='tooltip-menu<?php echo $numPin2; ?>-like' class='navtooltip'><img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>лайк</div></div></a><a href='' return='false'><div align='center' id='unlike<?php echo $numPin2; ?>' class='unlike-autor' style='margin-left: 4px; margin-right: 4px;'><div id='tooltip-menu<?php echo $numPin2; ?>-unlike' class='navtooltip'><img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>убрать&nbsp;лайк</div></div></a><a href='' return='false'><div align='center' id='comment<?php echo $numPin2; ?>' class='comment-autor' style='margin-left: 4px; margin-right: 4px;'><div id='tooltip-menu<?php echo $numPin2; ?>-comment' class='navtooltip'><img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>написать</div></div></a><a href='' return='false'><div align='center' id='dop<?php echo $numPin2; ?>' class='set-autor' style='margin-left: 3px;'><div id='tooltip-menu<?php echo $numPin2; ?>-set' class='navtooltip'><img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/><div align='center' class='pin-head'>скрыть</div><div align='center' class='pin-obuz'>пожаловаться</div></div></div></a></div>").fadeIn(300);

$('div#bar-place<?php echo $scroll2; ?><?php echo $numPin2; ?>').css('display','block');

 });
	
 });
<?php
}
?>

$('a#pin-view<?php echo $scroll2; ?><?php echo $numPin2; ?>').html("<img class='sectionpin' id='img<?php echo $numPin2; ?>' style='display: none;' src='http://pinct.ru/pins/<?php echo $dmgPin2; ?>'/>");



$('div#desqus<?php echo $scroll2; ?><?php echo $numPin2; ?>').html("<?php $v=0; for($v=0; $v<=rowsComments(); $v++) {  if (resCommentsText($v)) { ?><div align='left' id='comment<?php echo resPinId($v); ?>' class='mini-comment'><a href='' return='false'><img class='mini-comment<?php echo defineNum($v); ?>' src='http://pinct.ru/user/<?php echo resCommentsThumb($v); ?>' align='<?php echo defineFloat($v); ?>' width='35px'/></a><div align='left' class='mini-reply<?php echo defineNum($v); ?>'><img class='tik' src='http://pinct.ru/img/tik-comment<?php echo defineNum($v); ?>.png' align='<?php echo defineFloat($v); ?>' width='15px'/><b class='mini-user'><?php $d=0; if (strlen(resCommentsAutor($v)) > 7 ) { for($d=0; $d<=5; $d++) { echo resCommentsAutor($v)[$d]; } echo ".."; } else { for($d=0; $d<=7; $d++) { echo resCommentsAutor($v)[$d]; }}?>&nbsp;|&nbsp;<?php echo resCommentsTime($v); ?></b><br><?php echo resCommentsText($v); ?></div></div><?php }} ?>");

$('div#puzo<?php echo $scroll2; ?><?php echo $numPin2; ?>').html("<div align='center' class='small-like' id='small-likes<?php echo $numPin2; ?>'><?php echo $likesPin2; ?></div><div align='center' class='small-repin'><?php echo $repinsPin2; ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo $commentsPin2; ?>&nbsp;&nbsp;</div>");









 
 
 
 
 
 
 
 
 

$('#pin<?php echo $numPin2; ?>').delegate('#pinned<?php echo $numPin2; ?>','mouseover',function(){
$('#action<?php echo $numPin2; ?>').toggleClass('actionbar-hover', true);
      });
	  
$('#pin<?php echo $numPin2; ?>').delegate('#pinned<?php echo $numPin2; ?>','mouseleave',function(){
$('#action<?php echo $numPin2; ?>').removeClass('actionbar-hover');
$('#pin-nav<?php echo $numPin2; ?>').removeClass('navpin-show');
$('.thumb-autor img').toggleClass('thumb-autor-hover', false);
$('.thumb-autor .navtooltip, .comment-autor .navtooltip, .like-autor .navtooltip, .repin-autor .navtooltip, .unlike-autor .navtooltip').toggleClass('navtooltip-hide', false);
      });

$('#pin<?php echo $numPin2; ?>').delegate('#repin<?php echo $numPin2; ?>','mouseover',function(){
$('#repin<?php echo $numPin2; ?>').toggleClass('repin-autor-hover', true);
$('.repin-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPin2; ?>').delegate('#repin<?php echo $numPin2; ?>','mouseleave',function(){
$('#repin<?php echo $numPin2; ?>').toggleClass('repin-autor-hover', false);
$('.repin-autor .navtooltip').css('display','none');
      });	  
	  
$('#pin<?php echo $numPin2; ?>').delegate('#like<?php echo $numPin2; ?>','mouseover',function(){
$('#like<?php echo $numPin2; ?>').toggleClass('like-autor-hover', true);
$('.like-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPin2; ?>').delegate('#like<?php echo $numPin2; ?>','mouseleave',function(){
$('#like<?php echo $numPin2; ?>').toggleClass('like-autor-hover', false);
$('.like-autor .navtooltip').css('display','none');
      });
	  
	  $('#pin<?php echo $numPin2; ?>').delegate('#unlike<?php echo $numPin2; ?>','mouseover',function(){
$('#unlike<?php echo $numPin2; ?>').toggleClass('unlike-autor-hover', true);
$('.unlike-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPin2; ?>').delegate('#unlike<?php echo $numPin2; ?>','mouseleave',function(){
$('#unlike<?php echo $numPin2; ?>').toggleClass('unlike-autor-hover', false);
$('.unlike-autor .navtooltip').css('display','none');
      });
	  
$('#pin<?php echo $numPin2; ?>').delegate('a #comment<?php echo $numPin2; ?>','mouseover',function(){
$('#comment<?php echo $numPin2; ?>').toggleClass('comment-autor-hover', true);
$('.comment-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPin2; ?>').delegate('a #comment<?php echo $numPin2; ?>','mouseleave',function(){
$('#comment<?php echo $numPin2; ?>').toggleClass('comment-autor-hover', false);
$('.comment-autor .navtooltip').css('display','none');
      }); 
	  
$('#pin<?php echo $numPin2; ?>').delegate('a #dop<?php echo $numPin2; ?>','mouseover',function(){
$('#dop<?php echo $numPin2; ?>').toggleClass('set-autor-hover', true);
$('.set-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPin2; ?>').delegate('a #dop<?php echo $numPin2; ?>','mouseleave',function(){
$('#dop<?php echo $numPin2; ?>').toggleClass('set-autor-hover', false);
$('.set-autor .navtooltip').css('display','none');
      }); 
	  
	  
	  
	  
	  
$('#pin<?php echo $numPin2; ?>').delegate('#like<?php echo $numPin2; ?>','click',function(){
event.preventDefault();
var like = $('#small-likes<?php echo $numPin2; ?>').html();
like++;
$('a div#like<?php echo $numPin2; ?>').css('display','none');
$('a div#unlike<?php echo $numPin2; ?>').css('display','inline-block');
$('#small-likes<?php echo $numPin2; ?>').html(like);
      });
	  
$('#pin<?php echo $numPin2; ?>').delegate('#unlike<?php echo $numPin2; ?>','click',function(){
event.preventDefault();
var unlike = $('#small-likes<?php echo $numPin2; ?>').html();
unlike--;
$('a div#unlike<?php echo $numPin2; ?>').css('display','none');
$('a div#like<?php echo $numPin2; ?>').css('display','inline-block');
$('#small-likes<?php echo $numPin2; ?>').html(unlike);
      });
	  
$('#pin<?php echo $numPin2; ?>').delegate('a #comment<?php echo $numPin2; ?>','click',function(){
event.preventDefault();
$('#send<?php echo $numPin2; ?>').toggleClass('send-comment-click');
<?php if (rowsPin() > 5 or rowsLikes() > 5) { ?>
var $container = $('#container_infinity');
$container.masonry();
<?php } ?>
      });
	  
$('#pin<?php echo $numPin2; ?>').delegate('#dop<?php echo $numPin2; ?>','click',function(){
event.preventDefault();
$('#pinned<?php echo $numPin2; ?>').css('display','none');
$('#head<?php echo $numPin2; ?>').css('display','block');
var $container3 = $('#container_infinity');
$container3.masonry();
      });
$('#pin<?php echo $numPin2; ?>').delegate('#head<?php echo $numPin2; ?>','click',function(){
event.preventDefault();
$('#pinned<?php echo $numPin2; ?>').css('display','block');
$('#head<?php echo $numPin2; ?>').css('display','none');
var $container4 = $('#container_infinity');
$container4.masonry();
      });
	  
	  
$('#pin<?php echo $numPin2; ?>').delegate('#repin<?php echo $numPin2; ?>','click',function(event){
event.preventDefault();
$('#all-section-main').toggleClass('fixed', true);
$('.box-re').css('display','block');
allheight<?php echo $numPin2; ?> = $('.boxed-repin').height();
allheight1<?php echo $numPin2; ?> = allheight<?php echo $numPin2; ?>+50;
scrolli<?php echo $numPin2; ?> = $('body').scrollTop();
scrolliz<?php echo $numPin2; ?> = scrolli<?php echo $numPin2; ?>+30;
allheight2<?php echo $numPin2; ?> = allheight<?php echo $numPin2; ?>+scrolliz<?php echo $numPin2; ?>;
scrollim<?php echo $numPin2; ?> = scrolli<?php echo $numPin2; ?>+1000;
scrollix<?php echo $numPin2; ?> = scrolli<?php echo $numPin2; ?>;
$('#all-section-main').animate({
        'marginTop': '-='+scrollim<?php echo $numPin2; ?>+'px'

}, 0);

$('.box-re').animate({
        'marginTop': '-='+scrolli<?php echo $numPin2; ?>+'px',
		'height': allheight2<?php echo $numPin2; ?>
}, 0);

$('.boxed-repin').animate({
        'marginTop': '+='+scrollix<?php echo $numPin2; ?>+'px'
}, 0);

myid2<?php echo $numPin2; ?> = '<?php echo $numPin2; ?>';
$('.boxed-repin').html(myid2<?php echo $numPin2; ?>);

      });  
	  
$('#pin<?php echo $numPin2; ?>').delegate('#thumb<?php echo $numPin2; ?>','mouseover',function(){
$('#pin-nav<?php echo $numPin2; ?>').toggleClass('navpin-show', true);
$('.thumb-autor img').toggleClass('thumb-autor-hover', true);
      });  
	  
$('#pin<?php echo $numPin2; ?>').delegate('#thumb<?php echo $numPin2; ?>','mouseleave',function(){
$('#pin-nav<?php echo $numPin2; ?>').toggleClass('navpin-show', false);
$('.thumb-autor img').toggleClass('thumb-autor-hover', false);
      }); 
	  
$('#pin<?php echo $numPin2; ?>').delegate('#thumb<?php echo $numPin2; ?>','click',function(){
event.preventDefault();
}); 

randomAjax15 = Math.round(Math.random()*1000);
	  
$('div.navpintext').undelegate();
	    
$('div.navpintext').delegate('a.myauthor','click',function(event){
	
                var url = $(this).attr('href');

                $.ajax({
                    url:     url + '?ajax=1&z='+window.randomAjax15,
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
	 

	 
	 

<?php

}

function myPinLikes2($numPinLikes2){

if ($commentsId2 > 0) {
dataComments($commentsId2, false);
}

?>



$('#pin<?php echo $numPinLikes2; ?>').undelegate();


$('a#pin-view<?php echo $scroll2; ?><?php echo $numPinLikes2; ?>').html("<img class='sectionpin' id='img<?php echo $numPinLikes2; ?>' style='display: none;' src='http://pinct.ru/pins/<?php echo $dmgPin2; ?>'/>");



$('div#desqus<?php echo $scroll2; ?><?php echo $numPinLikes2; ?>').html("<?php $v=0; for($v=0; $v<=rowsComments(); $v++) {  if (resCommentsText($v)) { ?><div align='left' id='comment<?php echo resPinId($v); ?>' class='mini-comment'><a href='' return='false'><img class='mini-comment<?php echo defineNum($v); ?>' src='http://pinct.ru/user/<?php echo resCommentsThumb($v); ?>' align='<?php echo defineFloat($v); ?>' width='35px'/></a><div align='left' class='mini-reply<?php echo defineNum($v); ?>'><img class='tik' src='http://pinct.ru/img/tik-comment<?php echo defineNum($v); ?>.png' align='<?php echo defineFloat($v); ?>' width='15px'/><b class='mini-user'><?php $d=0; if (strlen(resCommentsAutor($v)) > 7 ) { for($d=0; $d<=5; $d++) { echo resCommentsAutor($v)[$d]; } echo ".."; } else { for($d=0; $d<=7; $d++) { echo resCommentsAutor($v)[$d]; }}?>&nbsp;|&nbsp;<?php echo resCommentsTime($v); ?></b><br><?php echo resCommentsText($v); ?></div></div><?php }} ?>");



$('div#puzo<?php echo $scroll2; ?><?php echo $numPinLikes2; ?>').html("<div align='center' class='small-like' id='small-likes<?php echo $numPinLikes2; ?>'><?php echo $likesPin2; ?></div><div align='center' class='small-repin'><?php echo $repinsPin2; ?>&nbsp;&nbsp;</div><div align='center' class='small-comment'><?php echo $commentsPin2; ?>&nbsp;&nbsp;</div>");

$('a#pin-view<?php echo $scroll2; ?><?php echo $numPinLikes2; ?> img#img<?php echo $numPinLikes2; ?>').fadeIn(1000, 'easeInExpo', function(){ 

var $container = $('#container_infinity');
$container.masonry();

$('div#bar-place<?php echo $scroll2; ?><?php echo $numPinLikes2; ?>').html("<div align='center' id='action<?php echo $numPinLikes2; ?>' class='actionbar'><a href='' return='false'><div align='center' id='thumb<?php echo $numPinLikes2; ?>' class='thumb-autor'><img class='img-nav' src='http://pinct.ru/user/<?php echo $autorThumbPin2; ?>' align='left' width='50px'/><div id='pin-nav<?php echo $numPinLikes2; ?>' class='navpin'><img src='http://pinct.ru/img/tik-top-pin.png' align='left' width='20'/><?php echo $autorPin2; ?><div id='pin-nav-text<?php echo $numPinLikes2; ?>' class='navpintext'><ul><a href='http://pinct.ru/users/<?php echo $autorPin2; ?>' class='myauthor first-el' return='false'><li>Посты</li></a><a href='http://pinct.ru/users/<?php echo $autorPin2; ?>/boards' return='false' class='myauthor'><li>Альбомы</li></a><a href='http://pinct.ru/users/<?php echo $autorPin2; ?>/likes' return='false'class='myauthor'><li>Лайки</li></a><a href='http://pinct.ru/users/<?php echo $autorPin2; ?>/repins' return='false'class='myauthor'><li>Репосты</li></a><a href='http://pinct.ru/users/<?php echo $autorPin2; ?>/followers' return='false'class='myauthor'><li>Подписчики</li></a><a href='http://pinct.ru/users/<?php echo $autorPin2; ?>/followings' class='myauthor last-el' return='false'><li>Подписки</li></a></ul></div></div><div id='tooltip-menu<?php echo $numPinLikes2; ?>-user' class='navtooltip'><img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/><?php echo $autorPin2; ?></div></div></a><a href='' return='false'><div align='center' id='repin<?php echo $numPinLikes2; ?>' class='repin-autor'><div id='tooltip-menu<?php echo $numPinLikes2; ?>-repin' class='navtooltip'><img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>репост</div></div></a><a href='' return='false'><div align='center' id='like<?php echo $numPinLikes2; ?>' class='like-autor'><div id='tooltip-menu<?php echo $numPinLikes2; ?>-like' class='navtooltip'><img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>лайк</div></div></a><a href='' return='false'><div align='center' id='unlike<?php echo $numPinLikes2; ?>' class='unlike-autor'><div id='tooltip-menu<?php echo $numPinLikes2; ?>-unlike' class='navtooltip'><img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>убрать&nbsp;лайк</div></div></a><a href='' return='false'><div align='center' id='comment<?php echo $numPinLikes2; ?>' class='comment-autor'><div id='tooltip-menu<?php echo $numPinLikes2; ?>-comment' class='navtooltip'><img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>написать</div></div></a></div>").fadeIn(300);

$('div#bar-place<?php echo $scroll2; ?><?php echo $numPinLikes2; ?>').css('display','block');

 });

$('#pin<?php echo $numPinLikes2; ?>').delegate('#pinned<?php echo $numPinLikes2; ?>','mouseover',function(){
$('#action<?php echo $numPinLikes2; ?>').toggleClass('actionbar-hover', true);
      });
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('#pinned<?php echo $numPinLikes2; ?>','mouseleave',function(){
$('#action<?php echo $numPinLikes2; ?>').removeClass('actionbar-hover');
$('#pin-nav<?php echo $numPinLikes2; ?>').removeClass('navpin-show');
$('.thumb-autor img').toggleClass('thumb-autor-hover', false);
$('.thumb-autor .navtooltip, .comment-autor .navtooltip, .like-autor .navtooltip, .repin-autor .navtooltip, .unlike-autor .navtooltip').toggleClass('navtooltip-hide', false);
      });

$('#pin<?php echo $numPinLikes2; ?>').delegate('#repin<?php echo $numPinLikes2; ?>','mouseover',function(){
$('#repin<?php echo $numPinLikes2; ?>').toggleClass('repin-autor-hover', true);
$('.repin-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('#repin<?php echo $numPinLikes2; ?>','mouseleave',function(){
$('#repin<?php echo $numPinLikes2; ?>').toggleClass('repin-autor-hover', false);
$('.repin-autor .navtooltip').css('display','none');
      });	  
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('#like<?php echo $numPinLikes2; ?>','mouseover',function(){
$('#like<?php echo $numPinLikes2; ?>').toggleClass('like-autor-hover', true);
$('.like-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('#like<?php echo $numPinLikes2; ?>','mouseleave',function(){
$('#like<?php echo $numPinLikes2; ?>').toggleClass('like-autor-hover', false);
$('.like-autor .navtooltip').css('display','none');
      });
	  
	  $('#pin<?php echo $numPinLikes2; ?>').delegate('#unlike<?php echo $numPinLikes2; ?>','mouseover',function(){
$('#unlike<?php echo $numPinLikes2; ?>').toggleClass('unlike-autor-hover', true);
$('.unlike-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('#unlike<?php echo $numPinLikes2; ?>','mouseleave',function(){
$('#unlike<?php echo $numPinLikes2; ?>').toggleClass('unlike-autor-hover', false);
$('.unlike-autor .navtooltip').css('display','none');
      });
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('a #comment<?php echo $numPinLikes2; ?>','mouseover',function(){
$('#comment<?php echo $numPinLikes2; ?>').toggleClass('comment-autor-hover', true);
$('.comment-autor .navtooltip').css('display','inline');
      });
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('a #comment<?php echo $numPinLikes2; ?>','mouseleave',function(){
$('#comment<?php echo $numPinLikes2; ?>').toggleClass('comment-autor-hover', false);
$('.comment-autor .navtooltip').css('display','none');
      }); 
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('#like<?php echo $numPinLikes2; ?>','click',function(){
event.preventDefault();
var like = $('#small-likes<?php echo $numPinLikes2; ?>').html();
like++;
$('a div#like<?php echo $numPinLikes2; ?>').css('display','none');
$('a div#unlike<?php echo $numPinLikes2; ?>').css('display','inline-block');
$('#small-likes<?php echo $numPinLikes2; ?>').html(like);
      });
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('#unlike<?php echo $numPinLikes2; ?>','click',function(){
event.preventDefault();
var unlike = $('#small-likes<?php echo $numPinLikes2; ?>').html();
unlike--;
$('a div#unlike<?php echo $numPinLikes2; ?>').css('display','none');
$('a div#like<?php echo $numPinLikes2; ?>').css('display','inline-block');
$('#small-likes<?php echo $numPinLikes2; ?>').html(unlike);
      });
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('a #comment<?php echo $numPinLikes2; ?>','click',function(){
event.preventDefault();
$('#send<?php echo $numPinLikes2; ?>').toggleClass('send-comment-click');
<?php if (rowsPin() > 5 or rowsLikes() > 5) { ?>
var $container = $('#container_infinity');
$container.masonry();
<?php } ?>
      });
	  

	  
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('#repin<?php echo $numPinLikes2; ?>','click',function(event){
event.preventDefault();
$('#all-section-main').toggleClass('fixed', true);
$('.box-re').css('display','block');
allheight<?php echo $numPinLikes2; ?> = $('.boxed-repin').height();
allheight1<?php echo $numPinLikes2; ?> = allheight<?php echo $numPinLikes2; ?>+50;
scrolli<?php echo $numPinLikes2; ?> = $('body').scrollTop();
scrolliz<?php echo $numPinLikes2; ?> = scrolli<?php echo $numPinLikes2; ?>+30;
allheight2<?php echo $numPinLikes2; ?> = allheight<?php echo $numPinLikes2; ?>+scrolliz<?php echo $numPinLikes2; ?>;
scrollim<?php echo $numPinLikes2; ?> = scrolli<?php echo $numPinLikes2; ?>+1000;
scrollix<?php echo $numPinLikes2; ?> = scrolli<?php echo $numPinLikes2; ?>;
$('#all-section-main').animate({
        'marginTop': '-='+scrollim<?php echo $numPinLikes2; ?>+'px'

}, 0);

$('.box-re').animate({
        'marginTop': '-='+scrolli<?php echo $numPinLikes2; ?>+'px',
		'height': allheight2<?php echo $numPinLikes2; ?>
}, 0);

$('.boxed-repin').animate({
        'marginTop': '+='+scrollix<?php echo $numPinLikes2; ?>+'px'
}, 0);

myid2<?php echo $numPinLikes2; ?> = '<?php echo $numPinLikes2; ?>';
$('.boxed-repin').html(myid2<?php echo $numPinLikes2; ?>);

      });  
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('#thumb<?php echo $numPinLikes2; ?>','mouseover',function(){
$('#pin-nav<?php echo $numPinLikes2; ?>').toggleClass('navpin-show', true);
$('.thumb-autor img').toggleClass('thumb-autor-hover', true);
      });  
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('#thumb<?php echo $numPinLikes2; ?>','mouseleave',function(){
$('#pin-nav<?php echo $numPinLikes2; ?>').toggleClass('navpin-show', false);
$('.thumb-autor img').toggleClass('thumb-autor-hover', false);
      }); 
	  
$('#pin<?php echo $numPinLikes2; ?>').delegate('#thumb<?php echo $numPinLikes2; ?>','click',function(){
event.preventDefault();
}); 
	  
	 
	 

	 
	 
<?php

}

?>

<?php

function mySubsribe($SubId){
?>
$('div#user<?php echo $SubId; ?>').delegate('div#sub<?php echo $SubId; ?>','click',function(){
event.preventDefault();
$('div#sub<?php echo $SubId; ?>').css('display','none');
$('div#unsub<?php echo $SubId; ?>').css('display','block');
      });  
$('div#user<?php echo $SubId; ?>').delegate('div#unsub<?php echo $SubId; ?>','click',function(){
event.preventDefault();
$('div#unsub<?php echo $SubId; ?>').css('display','none');
$('div#sub<?php echo $SubId; ?>').css('display','block');
      });
<?php
	  }

function mySubsribe2($SubId2){
?>
$('div#user<?php echo $SubId2; ?>').undelegate();
$('div#user<?php echo $SubId2; ?>').delegate('div#sub<?php echo $SubId2; ?>','click',function(){
event.preventDefault();
$('div#sub<?php echo $SubId2; ?>').css('display','none');
$('div#unsub<?php echo $SubId2; ?>').css('display','block');
      });  
$('div#user<?php echo $SubId2; ?>').delegate('div#unsub<?php echo $SubId2; ?>','click',function(){
event.preventDefault();
$('div#unsub<?php echo $SubId2; ?>').css('display','none');
$('div#sub<?php echo $SubId2; ?>').css('display','block');
      });
<?php
	  }

?>


<?php

function boardSubsribe($SubId){
?>
$('div#board<?php echo $SubId; ?>').delegate('div#sub<?php echo $SubId; ?>','click',function(){
event.preventDefault();
$('div#sub<?php echo $SubId; ?>').css('display','none');
$('div#unsub<?php echo $SubId; ?>').css('display','block');
      });  
$('div#board<?php echo $SubId; ?>').delegate('div#unsub<?php echo $SubId; ?>','click',function(){
event.preventDefault();
$('div#unsub<?php echo $SubId; ?>').css('display','none');
$('div#sub<?php echo $SubId; ?>').css('display','block');
      });
<?php
	  }

function boardSubsribe2($SubId2){
?>
$('div#board<?php echo $SubId2; ?>').undelegate();
$('div#board<?php echo $SubId2; ?>').delegate('div#sub<?php echo $SubId2; ?>','click',function(){
event.preventDefault();
$('div#sub<?php echo $SubId2; ?>').css('display','none');
$('div#unsub<?php echo $SubId2; ?>').css('display','block');
      });  
$('div#board<?php echo $SubId2; ?>').delegate('div#unsub<?php echo $SubId2; ?>','click',function(){
event.preventDefault();
$('div#unsub<?php echo $SubId2; ?>').css('display','none');
$('div#sub<?php echo $SubId2; ?>').css('display','block');
      });
<?php
	  }

?>


