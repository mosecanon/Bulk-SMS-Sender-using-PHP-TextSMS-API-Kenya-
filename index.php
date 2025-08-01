<?php

$url = 'https://sms.textsms.co.ke/api/services/sendsms/';

$data = [
    "apikey" => "512994c5dd1710497411494567e87194",
    "partnerID" => "11179",
    "message" => "Hello, this is a test message from Veen Africa.",
    "shortcode" => "TextSMS",
    "mobile" => "254741575274"
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