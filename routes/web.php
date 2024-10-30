<?php
include_once '../controllers/UserController.php';

$userController = new UserController();

$action = isset($_GET['action']) ? $_GET['action'] : 'display';
switch ($action) {
    case 'create':
        $userController->create();
        break;
    case 'update':
        $id = $_GET['id'];
        $userController->update($id);
        break;
    case 'delete':
        $id = $_GET['id'];
        $userController->delete($id);
        break;
    default:
        $userController->display();
        break;
}
?>
