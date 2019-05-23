<?php
$file_cabinet['first_name'] = "Derek";
$file_cabinet['last_name'] = "Trucks";
$file_cabinet['email'] = "derek@DerekTrucks.com";
$file_cabinet['facebook_url'] = "http://www.facebook.com/DerekTrucks";
$file_cabinet['twitter_handle'] = "@derekandsusan";
$first_name = $file_cabinet['first_name'];
$last_name = $file_cabinet['last_name'];
$email = $file_cabinet['email'];
$facebook_url = $file_cabinet['facebook_url'];
$twitter_handle = $file_cabinet['twitter_handle'];
echo $first_name . " " . $last_name;
echo "\nАдрес электронной почты: " . $email;
echo "\nURL-адрес в Facebook: " . $facebook_url;
echo "\nИдентификатор в Twitter: " . $twitter_handle;
?>
