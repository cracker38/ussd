<?php

$sessionid=$_POST['sessionid'];
$servicecode=$_POST['servicecode'];
$phonenumber=$_POST['phonenumber'];
$text=$_POST['text'];

if($text=="")
{

    $response="CON check what you want to choose:\n";
    $response.="1. Account No";
    $response.="2. phone Number";
}else if($text=="1"){
    $response="Choose depend on what you want:\n";
    $response.="1. Account Code Number";
    $response.="2. Account Balance";
}else if($text=="2"){
    $response="End my phone number ".$phonenumber;
    exit();
}else if($text=="1.1"){
    $accountcode="CC101";
    $response="End My Account code ".$accountcode;
    exit();
}else if($text=="1.2"){
    $balance="RFW 1000";
    $response="End My Account balance ".$balance;
}


header("Content-Type: application/json");
echo $response;
?>
