<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// Preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Response data
$response = [
    "email" => "quainnblink9@gmail.com",  
    "timestamp" => date("c"), 
    "github_url" => "https://github.com/proud-obinna/hngapi" 
];

// Output JSON 
echo json_encode($response, JSON_PRETTY_PRINT);
?>
