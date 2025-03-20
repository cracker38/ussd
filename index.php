<?php

$sessionid = $_POST['sessionid'] ?? '';
$servicecode = $_POST['servicecode'] ?? '';
$phonenumber = $_POST['phonenumber'] ?? '';
$text = $_POST['text'] ?? '';

if ($text == "") {
    $response = "CON Check what you want to choose:\n";
    $response .= "1. Account No\n";
    $response .= "2. Phone Number";
} elseif ($text == "1") {
    $response = "CON Choose depending on what you want:\n";
    $response .= "1.1 Account Code Number\n";
    $response .= "1.2 Account Balance";
} elseif ($text == "2") {
    $response = "END My phone number is " . $phonenumber;
} elseif ($text == "1*1") { 
    $accountcode = "CC101";
    $response = "END My Account Code: " . $accountcode;
} elseif ($text == "1*2") { 
    $balance = "RWF 1000";
    $response = "END My Account Balance: " . $balance;
}

header("Content-Type: text/plain");
echo $response;

?>
