<?php
include_once '../config/Database.php';

class User {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conn;
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM `crud`";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM `crud` WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function insertUser($name, $email, $mobile, $password) {
        $sql = "INSERT INTO `crud` (`name`, `email`, `mobile`, `password`) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ssss', $name, $email, $mobile, $password);
        return $stmt->execute();
    }

    public function updateUser($id, $name, $email, $mobile, $password) {
        $sql = "UPDATE `crud` SET name = ?, email = ?, mobile = ?, password = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ssssi', $name, $email, $mobile, $password, $id);
        return $stmt->execute();
    }

    public function deleteUser($id) {
        $sql = "DELETE FROM `crud` WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
?>
