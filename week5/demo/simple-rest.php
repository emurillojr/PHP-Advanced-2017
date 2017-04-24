<?php

/*
 * At the simplest level, you are setting the headers to send JSON
 * then populating the response with data. Then echo out the array
 * to a json.  Any application that access this page will be able to
 * get the JSON and process the data how they like.
 */
header("Access-Control-Allow-Orgin: *");  // means who can access this page * = your site   allows anywebsite to your api
header("Content-Type: application/json; charset=utf8");  // default is html  content type is json
// status codes match http codes http://www.restapitutorial.com/httpstatuscodes.html
$status_codes = array(
    200 => 'OK',
    500 => 'Internal Server Error',
);

$status = 200;

// send header and status status code
header("HTTP/1.1 " . $status . " " . $status_codes[$status]);


$message = 'hello';

$response = array(
    "status" => $status,
    "status_message" => $status_codes[$status],
    "message" => $message
);


echo json_encode($response, JSON_PRETTY_PRINT);

// gives response whether good or bad based on server code   good rest api always gives a response
?>
