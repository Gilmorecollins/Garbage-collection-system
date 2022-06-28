<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username   = "isaiahwainaina34@gmail.com";
$apikey     = "03606d9914992244e562affb91889d2589e41a659e479a2ba55e329ddc893429";

// Initialize the SDK
$AT         = new AfricasTalking($username, $apiKey);

// Get the payments service
$payments   = $AT->payments();

// Set the name of your Africa's Talking payment product
$productName  = "Gabbage";

// Set the phone number you want to send to in international format
$phoneNumber  = "+254757365384";

// Set The 3-Letter ISO currency code and the checkout amount
$currencyCode = "KES";
$amount       = 100.50;

// Set any metadata that you would like to send along with this request.
// This metadata will be included when we send back the final payment notification
$metadata = [
    "agentId"   => "654",
    "productId" => "321"
];

// Thats it, hit send and we'll take care of the rest.
try {
    $result = $payments->mobileCheckout([
        "productName"  => $productName,
        "phoneNumber"  => $phoneNumber,
        "currencyCode" => $currencyCode,
        "amount"       => $amount,
        "metadata"     => $metadata
    ]);

    print_r($result);
} catch(Exception $e) {
    echo "Error: ".$e->getMessage();
}
