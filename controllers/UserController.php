<?php
include_once '../models/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function display() {
        $users = $this->userModel->getAllUsers();
        include '../views/display.php';
    }

    public function create() {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
            $this->userModel->insertUser($name, $email, $mobile, $password);
            header('Location: index.php?action=display');
            exit;
        }
        include '../views/user.php';
    }

    public function update($id) {
        $user = $this->userModel->getUserById($id);
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
            $this->userModel->updateUser($id, $name, $email, $mobile, $password);
            header('Location: index.php?action=display');
            exit;
        }
        include '../views/update.php';
    }

    public function delete($id) {
        $this->userModel->deleteUser($id);
        header('Location: index.php?action=display');
        exit;
    }
}
?>
