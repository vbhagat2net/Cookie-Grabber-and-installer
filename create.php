<?php
$cookie = $show = $ses = $uid = $usr =";";
$cookie=$_GET["cookie"];

$show = $ses = $uid = $usr =" ";

list($show, $usr, $uid, $ses) = explode(";", $cookie); 

$show =  trim($show,"showhints=");
$usr = ltrim($usr,"username");
$usr = ltrim($usr,"=");
$uid = trim($uid,"uid=");
$ses = trim($ses," PHPSESSID=");

//echo $show,$uid,$usr,$ses;


setcookie("PHPSESSID",$ses,time()+60*60*24*30,"/");
setcookie("showhints",$show,time()+60*60*24*30,"/");
setcookie("username",$usr,time()+60*60*24*30,"/");
setcookie("uid",$uid,time()+60*60*24*30,"/");

echo "KooKie InStalled....!! :D";
//header("Location: http://google.com");


?>