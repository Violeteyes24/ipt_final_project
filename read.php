<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Acces-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

include('function.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "GET"){

    $positive_compliment = get_positive_compliment();
    echo $positive_compliment;

}
else
{
    $data = [
        'status' => 405,
        'message' => $requestMethod. 'Method Not Allowed'
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);    
}
?>