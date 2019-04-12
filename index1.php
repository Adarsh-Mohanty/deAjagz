<?php
$code=$_GET['code'];

$ch = curl_init('http://ajagz.com/written-list.php?urlId='.$code);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// get headers too with this line
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_COOKIE, '_ga=GA1.2.1876316035.1554251183; write='.$code.'; _gid=GA1.2.1207391942.1554969430; PHPSESSID=b5a1df5uc2u5u33qlduibuget6; _gat_gtag_UA_113214225_1=1');
$res=curl_exec($ch);
echo $res;
curl_close($ch);
?>