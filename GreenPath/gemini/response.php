<?php

require "vendor/autoload.php";

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

function response($text){
    $client = new Client("AIzaSyB2EKWlyxIxXfCyAKHHG7mrqVvNxlDgSjw");

    $response = $client->geminiPro()->generateContent(
        new TextPart($text),
    );

    $send = $response->text();
    return $send;
}
?>