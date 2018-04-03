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

 </head>

<body class='allwidth' id='allbody'>

<div id='load-view'>

<div id='box-img' class='box-view'>
  
</div>

<div align='center' id='photo-view' class='boxed-view'>
<div align='center'>



<a href='' id='user-left888' class='my-left' return='false'><div id='left888' class='left-view'></div></a>

<div id='close888' class='close-view'></div>

<a href='' id='user-right888' class='my-right' return='false'><div id='right888' class='right-view'></div></a>

<div align='center' id='left-photo888' class='main-left'>




<div id='social888' class='social-view'>

<a href='' id='user-facebook888' class='facebook-this' return='false'><div id='facebook888' class='facebook-view'>
<div id='tooltip-facebook-view' class='navtooltip'>
 facebook<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-google888' class='google-this' return='false'><div id='google888' class='google-view'>
<div id='tooltip-google-view' class='navtooltip'>
 google&nbsp;+1<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-vkontakte888' class='vkontakte-this' return='false'><div id='vkontakte888' class='vkontakte-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 вконтакте<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-mail-ru888' class='mail-ru-this' return='false'><div id='mail-ru888' class='mail-ru-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 майл.ru<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-odnoklassniki888' class='odnoklassniki-this' return='false'><div id='odnoklassniki888' class='odnoklassniki-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 одноклассники<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-twitter888' class='twitter-this' return='false'><div id='twitter888' class='twitter-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 твиттер<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-mail888' class='mail-this' return='false'><div id='mail888' class='mail-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 письмо&nbsp;другу<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-reports888' class='reports-this' return='false'><div id='report888' class='reports-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 нашёл&nbsp;ошибку?<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

<a href='' id='user-code888' class='code-this' return='false'><div id='code888' class='code-view'>
<div id='tooltip-vkontakte-view' class='navtooltip'>
 получить&nbsp;код<img src='http://pinct.ru/img/tik-menu-right.png' align='right' width='17'/>
</div>
</div></a>

</div>



<div align='center' id='fix888' class='fix-left'>

<div align='center' id='photo888' class='main-photo'>

<h1>Чёрный кот</h1>

<div align='center' id='this888' class='this-photo'><img id='my-img888' class='this-img' src='http://pinct.ru/bigpins/570xN.551859075-view.jpg' alt='Чёрный кот' title='Чёрный кот' align='bottom' /></div>

</div>

<div align='center' id='puzomerki888' class='main-cool'>

<div align='left' class='like-cat'>Лайки</div>
<div align='center' id='like-this888' class='like-photo'>

<a href='' id='user-like888' class='my-this' return='false'><div align='center' id='user-like888' class='my-this'><img id='like-img888' class='this-like' src='http://pinct.ru/user/100.jpg' width='50px' alt='scanderberg' align='center' /><div align='center' id='tooltip-user-like-view888' class='navtooltip'><img src='http://pinct.ru/img/tik-menu-top.png' align='center' width='17'/>scanderberberg</div></div></a><a href='' id='user-like888' class='my-this' return='false'><div align='center' id='user-like888' class='my-this'><img id='like-img888' class='this-like' src='http://pinct.ru/user/1416427575i4e08-150x150.jpg' width='50px' alt='vyumsh' align='center' /></div></a><a href='' id='user-like888' class='my-this' return='false'><div align='center' id='user-like888' class='my-this'><img id='like-img888' class='this-like' src='http://pinct.ru/user/14164245112nk04.jpg' width='50px' alt='culwork' align='center' /></div></a>
<span class='like-count'>ещё +10</span>
</div>

<div align='left' class='repin-cat'>Репосты</div>
<div align='center' id='repin-this888' class='repin-photo'>

<a href='' id='user-repin888' class='my-repin' return='false'><div align='center' id='user-repin888' class='my-repin'><img id='repin-img888' class='this-repin' src='http://pinct.ru/user/100.jpg' width='50px' alt='scanderberg' align='center' /></div></a><a href='' id='user-repin888' class='my-repin' return='false'><div align='center' id='user-repin888' class='my-repin'><img id='repin-img888' class='this-repin' src='http://pinct.ru/user/1416427575i4e08-150x150.jpg' width='50px' alt='vyumsh' align='center' /></div></a><a href='' id='user-repin888' class='my-repin' return='false'><div align='center' id='user-repin888' class='my-repin'><img id='repin-img888' class='this-repin' src='http://pinct.ru/user/14164245112nk04.jpg' width='50px' alt='culwork' align='center' /></div></a>
<span class='repin-count'>ещё +10</span>
</div>

</div>

<div align='left' id='max-desqus117' class='max-desqus'>

<h2 align='center'>Комментарии</h2>

<div align='left' id='max-comment117' class='max-comment'>
<a href='' return='false'><img class='max-comment' src='http://pinct.ru/user/14164245112nk04.jpg' align='left' width='35px'/></a>

<div align='left' class='max-reply'>
<img class='tik' src='http://pinct.ru/img/tik-comment.png' align='left' width='15px'/>
<b class='max-user'>
culwork | 15:03:15</b>
<br>
Привет! Как дела? Скоро лето2!</div>

</div>

<div align='left' id='max-comment145' class='max-comment'>
<a href='' return='false'><img class='max-comment2' src='http://pinct.ru/user/100.jpg' align='right' width='35px'/></a>

<div align='left' class='max-reply2'>
<img class='tik' src='http://pinct.ru/img/tik-comment2.png' align='right' width='15px'/>
<b class='max-user'>
scande.. | 15:03:15</b>
<br>
Привет! Как дела? Скоро лето!</div>

</div>


</div>


<div align='center' id='max-send117' class='max-send-comment'>

<form name='max-send-comment' id='max-send-comment117' method='GET' action='cat.php'>
  
  <textarea name='max-send-text' id='max-send117' placeholder='Кликните, чтобы ответить...'></textarea>
  <br>
  
<div align='center' id='max-my-send117' class='max-my-comment'>
<br>
  <input type='button' name='max-comment' id='max-comment' class='max-mycomment' value='комментировать'>
</div>
  
  
  </form>

</div>

</div>

</div>

<div align='center' id='myright888' class='main-right'>

<div align='center' id='autors888' class='main-autor'>

<div align='center' id='main-bar888' class='view-bar'>

<a href='' class='view-autor' id='click-myautor888' return='false'><div align='left' id='autor-bar888' class='view-autor'>
<img class='view-autor' id='autor-bar888' src='http://pinct.ru/user/100.jpg' align='left' width='70px'/>
</div></a>

<a href='' class='view-myrepin' id='click-myrepin888' return='false'><div align='center' id='repin-bar888' class='view-repin'>
<div id='tooltip-menu-myrepin' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>репост
</div>
</div></a>
<a href='' class='view-mylike' id='click-mylike888' return='false'><div align='center' id='like-bar888' class='like-view'>
<div id='tooltip-menu-myrepin' class='navtooltip'>
 <img src='http://pinct.ru/img/tik-menu-top.png' align='left' width='17'/>лайк
</div>
</div></a>
<a href='' class='view-myunlike' id='click-myunlike888' return='false'><div align='center' id='unlike-bar888' class='unlike-view'></div></a>
<a href='' class='view-myreport' id='click-myreport888' return='false'><div align='center' id='edit-bar888' class='report-view'></div></a>
<a href='' class='view-myzoom' id='click-myzoom888' return='false'><div align='center' id='zoom-bar888' class='zoom-view'></div></a>

</div>

<div align='left' id='thumb-autor-view888' class='thumb-area'>

<div align='left' id='line-view888' class='line-thumb'>

<div align='left' id='one-view888' class='one-thumb'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='one-view888' class='one-thumb'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='one-view888' class='one-thumb' style='margin-right: 0px!important;'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='line-view888' class='line-thumb'>

<div align='left' id='one-view888' class='one-thumb'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>

<div align='left' id='one-view888' class='one-thumb' style='margin-right: 0px!important;'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='line-view888' class='line-thumb'>

<div align='left' id='one-view888' class='one-thumb'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='line-view888' class='line-thumb' style='margin-bottom: 0px!important;'>

<div align='left' id='one-view888' class='one-thumb'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='one-view888' class='one-thumb'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='one-view888' class='one-thumb' style='margin-right: 0px!important;'>
<a href='' class='click-myview' id='second-view888' return='false'><img class='view-pict' id='autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

</div>

<div align='center' class='subscribe'>Подписаться</div>

<span class='follow-sub'><b>+10</b> Подписчиков</span>
<br><br>

<div align='center' id='count-stat888' class='count-numder'>

<div align='center' id='count-post888' class='post-numder'>
+17 Постов
</div>
<div align='center' id='count-board888' class='board-numder'>
+12 Альбомов
</div>

</div>

</div>

<div align='center' id='myboard-view888' class='main-board'>

<div align='left' id='board-bar888' class='board-autor'>
<img class='board-autor' id='board-bar888' src='http://pinct.ru/tag/54534223-hash.jpg' align='left' width='70px'/>
<br>
Ещё посты из альбома 
<a href='' class='board-link' id='board-noview888' return='false'>котики</a>
</div>

<div align='left' id='board-thumb-autor-view888' class='board-thumb-area'>

<div align='left' id='board-line-view888' class='board-line-thumb'>

<div align='left' id='board-one-view888' class='board-one-thumb'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='board-one-view888' class='board-one-thumb'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='board-one-view888' class='board-one-thumb' style='margin-right: 0px!important;'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='board-line-view888' class='board-line-thumb'>

<div align='left' id='board-one-view888' class='board-one-thumb'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>

<div align='left' id='board-one-view888' class='board-one-thumb' style='margin-right: 0px!important;'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='board-line-view888' class='board-line-thumb'>

<div align='left' id='board-one-view888' class='board-one-thumb'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>


</div>

<div align='left' id='board-line-view888' class='board-line-thumb' style='margin-bottom: 0px!important;'>

<div align='left' id='board-one-view888' class='board-one-thumb'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='board-one-view888' class='board-one-thumb'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='board-one-view888' class='board-one-thumb' style='margin-right: 0px!important;'>
<a href='' class='board-click-myview' id='board-second-view888' return='false'><img class='board-view-pict' id='board-autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

</div>

<div align='center' class='subscribe'>Подписаться</div>

<span class='follow-sub'><b>+7</b> Подписчиков</span>
<br><br>

</div>








<div align='center' id='mycategory-view888' class='main-category'>

<div align='left' id='category-bar888' class='category-autor'>
<img class='category-autor' id='category-bar888' src='http://pinct.ru/category/cats.png' align='left' height='70px'/>
<br>
Ещё из категории
<a href='' class='category-link' id='category-noview888' return='false'>котики</a>
</div>

<div align='left' id='category-thumb-autor-view888' class='category-thumb-area'>

<div align='left' id='category-line-view888' class='category-line-thumb'>

<div align='left' id='category-one-view888' class='category-one-thumb'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='category-one-view888' class='category-one-thumb'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='category-one-view888' class='category-one-thumb' style='margin-right: 0px!important;'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='category-line-view888' class='category-line-thumb'>

<div align='left' id='category-one-view888' class='category-one-thumb'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>

<div align='left' id='category-one-view888' class='category-one-thumb' style='margin-right: 0px!important;'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

<div align='left' id='category-line-view888' class='category-line-thumb'>

<div align='left' id='category-one-view888' class='category-one-thumb'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>


</div>

<div align='left' id='category-line-view888' class='category-line-thumb' style='margin-bottom: 0px!important;'>

<div align='left' id='category-one-view888' class='category-one-thumb'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/7dc4fb9e66a493bc0940c75327d17f43-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='category-one-view888' class='category-one-thumb'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/570xN551859075-hash.jpg' align='left' width='89px'/></a>
</div>
<div align='left' id='category-one-view888' class='category-one-thumb' style='margin-right: 0px!important;'>
<a href='' class='category-click-myview' id='category-second-view888' return='false'><img class='category-view-pict' id='category-autor-pict888' src='http://pinct.ru/tag/53067-hash.jpg' align='left' width='89px'/></a>
</div>

</div>

</div>














</div>







</div>

</div>
</div>

</div>













<?php 

dataMyBoards ("753253258", false);
echo resMyBoardsTimeString(0);

?>

  <div class='box col4' id='board2352466878786'>

<div align='center' id='board2352466878786' class='sectionboard'>
<div align='center' id='board-img2352466878786' class='imgboard'>

<a href='' return='false'><img class='sectionboard' src='http://pinct.ru/boards/0f65158b4e8227ce61438a51e51e6fc0-boards.jpg' align='bottom' width='249px' alt='user'/></a>
<div align='center' id='board-name2352466878786' class='nameboard'>
<div align='center'>
Интерьер
</div>
</div>
<a href='' return='false'><img class='pictboard' src='http://pinct.ru/boards/2bbf0e5f13393391608b38c1205d31c6-boards.jpg' align='bottom' width='59px' alt='user'/></a>

<a href='' return='false'><img class='pictboard' src='http://pinct.ru/boards/7dc4fb9e66a493bc0940c75327d17f43-boards.jpg' align='bottom' width='59px' alt='user'/></a>

<a href='' return='false'><img class='pictboard' src='http://pinct.ru/boards/086a21bb94704d7c9fc63ffff7353ede-boards.jpg' align='bottom' width='59px' alt='user'/></a>

<a href='' return='false'><img class='lastboard'  src='http://pinct.ru/boards/810a07566d21b7960b7b00f1cb82b7ff-boards.jpg' align='bottom' width='59px' alt='user'/></a>

<div align='center' class='subscribe'>Подписаться</div>


<span class='follow-sub'><b>+8</b> Подписчиков</span>
<br><br>
</div>
	
  </div>
</div>









<div class='box col4' id='user2352466878786'>

<div align='center' id='user2352466878786' class='section-user'>
<div align='center' id='user-name2352466878786' class='my-user'>
<div align='center' id='user-name2352466878786' class='username'>
Валерий Юмшанов
</div>
<div align='center' id='col2352466878786' class='my-col'>
<div align='center' id='user-post2352466878786' class='colpost'>
120 постов
</div>
<div align='center' id='user-board2352466878786' class='colboard'>
8 альбомов
</div>

<div align='center' id='user-ava2352466878786' class='user-avatar'>
<div align='center' class='my-avatar'>
<a href='' return='false'><img class='pict-avatar' src='http://pinct.ru/user/100.jpg' align='center' width='64px' alt='user'/></a>
</div>
</div>

</div>



<a href='' return='false'><img class='pictuser' src='http://pinct.ru/user/2bbf0e5f13393391608b38c1205d31c6-boards.jpg' align='bottom' width='80px' alt='user'/></a>

<a href='' return='false'><img class='pictuser' src='http://pinct.ru/user/7dc4fb9e66a493bc0940c75327d17f43-boards.jpg' align='bottom' width='80px' alt='user'/></a>

<a href='' return='false'><img class='pictuser' src='http://pinct.ru/user/086a21bb94704d7c9fc63ffff7353ede-boards.jpg' align='bottom' width='80px' alt='user'/></a>

<a href='' return='false'><img class='pictuser' src='http://pinct.ru/user/529088_wookmark-hash.jpg' align='bottom' width='80px' alt='user'/></a>

<a href='' return='false'><img class='pictuser' src='http://pinct.ru/user/530463-hash.jpg' align='bottom' width='80px' alt='user'/></a>

<a href='' return='false'><img class='lastuser'  src='http://pinct.ru/user/810a07566d21b7960b7b00f1cb82b7ff-boards.jpg' align='bottom' width='80px' alt='user'/></a>

<div align='center' class='subscribe'>Подписаться</div>


<span class='follow-sub'><b>+10</b> Подписчиков</span>
<br><br>
</div>
	
  </div>
</div>



<script type='text/javascript'>

$(document).ready(function() { 

fixHeight = $('div.boxed-view').height()+20;
pinViewHeight = 712 + $('div.max-desqus').height() - 220;
fixSocialHeight = $('div.social-view').height();
offScrollHeight = pinViewHeight-fixSocialHeight;
$('body').mousemove(function(ev){
 scOffset = $(this).offset();
  scBrowserY = (ev.clientY);
  scRelativeY = (ev.pageY - scOffset.top);
  scResy = scRelativeY - scBrowserY;
  absSocialHeight = scResy;
  });

$('div.box-view').animate({
        'height': fixHeight+'px'

}, 0);

 $(window).scroll(function(ev){
 
scrollVerx = $('body').scrollTop();
if (scrollVerx > pinViewHeight) {

$('div.social-view').css('position','absolute');
$('div.social-view').animate({
		'top': pinViewHeight+'px'

}, 0);
}

else {

$('div.social-view').css('position','fixed');
$('div.social-view').animate({
		'top': '60px'

}, 0);
}

$('div.max-desqus h2').html('abs: '+absSocialHeight+' left: '+pinViewHeight+' social: '+fixSocialHeight+' scrollTop: '+scrollVerx);
});

$('div#max-send117').delegate('textarea#max-send117','focus',function(){
$('textarea#max-send117').animate({
		'height': '100px'

}, 100);
$("textarea#max-send117").attr('placeholder','Напишите что-нибудь...');
$('div#max-my-send117').css('display','inline');

});

$('div#max-send117').delegate('textarea#max-send117','blur',function(){
$('textarea#max-send117').animate({
		'height': '18px'

}, 100);
$("textarea#max-send117").attr('placeholder','Кликните, чтобы ответить...');
$('div#max-my-send117').css('display','none');
});

$('div.boxed-view').delegate('div.left-view','mouseover',function(){
$('div.left-view').toggleClass('left-view-hover', true);
});

$('div.boxed-view').delegate('div.left-view','mouseleave',function(){
$('div.left-view').toggleClass('left-view-hover', false);
});

$('div.boxed-view').delegate('div.right-view','mouseover',function(){
$('div.right-view').toggleClass('right-view-hover', true);
});

$('div.boxed-view').delegate('div.right-view','mouseleave',function(){
$('div.right-view').toggleClass('right-view-hover', false);
});

$('div.boxed-view').delegate('div.close-view','mouseover',function(){
$('div.close-view').toggleClass('close-view-hover', true);
});

$('div.boxed-view').delegate('div.close-view','mouseleave',function(){
$('div.close-view').toggleClass('close-view-hover', false);
});


$('div.main-left').delegate('div.social-view','mouseover',function(){

$('div.social-view').animate({
        'marginLeft': '-45px'

}, 100);
});

$('div.main-left').delegate('div.social-view','mouseleave',function(){

$('div.social-view').animate({
        'marginLeft': '-20px'

}, 100);
});

$('div.social-view').delegate('div.facebook-view','mouseover',function(){
$('div.facebook-view').toggleClass('facebook-view-hover', true);
$('.facebook-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.facebook-view','mouseleave',function(){
$('div.facebook-view').toggleClass('facebook-view-hover', false);
$('.facebook-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.google-view','mouseover',function(){
$('div.google-view').toggleClass('google-view-hover', true);
$('.google-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.google-view','mouseleave',function(){
$('div.google-view').toggleClass('google-view-hover', false);
$('.google-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.vkontakte-view','mouseover',function(){
$('div.vkontakte-view').toggleClass('vkontakte-view-hover', true);
$('.vkontakte-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.vkontakte-view','mouseleave',function(){
$('div.vkontakte-view').toggleClass('vkontakte-view-hover', false);
$('.vkontakte-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.mail-ru-view','mouseover',function(){
$('div.mail-ru-view').toggleClass('mail-ru-view-hover', true);
$('.mail-ru-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.mail-ru-view','mouseleave',function(){
$('div.mail-ru-view').toggleClass('mail-ru-view-hover', false);
$('.mail-ru-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.odnoklassniki-view','mouseover',function(){
$('div.odnoklassniki-view').toggleClass('odnoklassniki-view-hover', true);
$('.odnoklassniki-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.odnoklassniki-view','mouseleave',function(){
$('div.odnoklassniki-view').toggleClass('odnoklassniki-view-hover', false);
$('.odnoklassniki-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.twitter-view','mouseover',function(){
$('div.twitter-view').toggleClass('twitter-view-hover', true);
$('.twitter-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.twitter-view','mouseleave',function(){
$('div.twitter-view').toggleClass('twitter-view-hover', false);
$('.twitter-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.mail-view','mouseover',function(){
$('div.mail-view').toggleClass('mail-view-hover', true);
$('.mail-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.mail-view','mouseleave',function(){
$('div.mail-view').toggleClass('mail-view-hover', false);
$('.mail-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.reports-view','mouseover',function(){
$('div.reports-view').toggleClass('reports-view-hover', true);
$('.reports-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.reports-view','mouseleave',function(){
$('div.reports-view').toggleClass('reports-view-hover', false);
$('.reports-view .navtooltip').css('display','none');
});

$('div.social-view').delegate('div.code-view','mouseover',function(){
$('div.code-view').toggleClass('code-view-hover', true);
$('.code-view .navtooltip').css('display','inline');
});

$('div.social-view').delegate('div.code-view','mouseleave',function(){
$('div.code-view').toggleClass('code-view-hover', false);
$('.code-view .navtooltip').css('display','none');
});



$('div.view-bar').delegate('div.view-repin','mouseover',function(){
$('div.view-repin').toggleClass('view-repin-hover', true);
$('.view-repin .navtooltip').css('display','inline');
});

$('div.view-bar').delegate('div.view-repin','mouseleave',function(){
$('div.view-repin').toggleClass('view-repin-hover', false);
$('.view-repin .navtooltip').css('display','none');
});

$('div.view-bar').delegate('div.like-view','mouseover',function(){
$('div.like-view').toggleClass('like-view-hover', true);
});

$('div.view-bar').delegate('div.like-view','mouseleave',function(){
$('div.like-view').toggleClass('like-view-hover', false);
});

$('div.view-bar').delegate('div.unlike-view','mouseover',function(){
$('div.unlike-view').toggleClass('unlike-view-hover', true);
});

$('div.view-bar').delegate('div.unlike-view','mouseleave',function(){
$('div.unlike-view').toggleClass('unlike-view-hover', false);
});

$('div.view-bar').delegate('div.report-view','mouseover',function(){
$('div.report-view').toggleClass('report-view-hover', true);
});

$('div.view-bar').delegate('div.report-view','mouseleave',function(){
$('div.report-view').toggleClass('report-view-hover', false);
});

$('div.view-bar').delegate('div.zoom-view','mouseover',function(){
$('div.zoom-view').toggleClass('zoom-view-hover', true);
});

$('div.view-bar').delegate('div.zoom-view','mouseleave',function(){
$('div.zoom-view').toggleClass('zoom-view-hover', false);
});

$('div.view-bar').delegate('div.like-view','click',function(){
event.preventDefault();
$('a div.like-view').css('display','none');
$('a div.unlike-view').css('display','inline-block');
      });

$('div.view-bar').delegate('div.unlike-view','click',function(){
event.preventDefault();
$('a div.unlike-view').css('display','none');
$('a div.like-view').css('display','inline-block');
      });




});


</script>


</body>
</html>
