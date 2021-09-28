<?php

echo "bundles";

exit;

include_once("database.php");

$db = new Database();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $_POST = json_decode(file_get_contents('php://input'), true);
        $sql = "INSERT INTO bundles VALUES (;";
        $db->query($sql);
        $result = $db->single();
        echo json_encode($result);
        break;
    case 'GET':
        if (isset($_GET['id'])) {
            $_POST = json_decode(file_get_contents('php://input'), true);
            $sql = "SELECT * FROM categories;";
            $db->query($sql);
            $result = $db->single();
            echo json_encode($result);
        } else {
            //Alll
        }
        echo "GET";
        break;
    case 'PUT':
        $_PUT = json_decode(file_get_contents('php://input'), true);
        break;
    case 'DELETE':
        if (isset($_GET['id'])) {
            echo "DELETE " . $_GET['id'];
        }
        break;
}
