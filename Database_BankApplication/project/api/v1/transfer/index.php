<?php

/**  API /api/v1/clients */

header('Access-Control-Allow-Origin:  *');
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
require_once 'transfer_controller.php';

$http_method = $_SERVER['REQUEST_METHOD'];

switch ($http_method) {
    case 'GET':
        return;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        $packet = send_transfer($data);
        echo json_encode($packet);
        return;
    case 'PUT':
        return;
    default:
        echo json_encode(array("error" => 'Server error.'));
        return;
}
