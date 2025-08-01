<?php

$url = 'https://sms.textsms.co.ke/api/services/sendsms/';

$data = [
    "apikey" => "YOUR API KEY",
    "partnerID" => "YOUR PARTNERID",
    "message" => "Hello, this is a test message from Veen Africa.",
    "shortcode" => "YOUR SENDERID",
    "mobile" => "Phone Number (multiple numbers should be comma separated"
];

$jsonData = json_encode($data);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
]);

curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo 'Response: Success' . $response;
}



curl_close($ch);
