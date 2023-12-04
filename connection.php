<?php

class Database {
    private $conn;

    function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "geekdb"); // Substitua com suas credenciais
        if ($this->conn->connect_error) {
            die("Failed to connect to MySQL: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function create_user($firstname, $lastname, $username, $hashed_password, $profilePicture) {
        $stmt = $this->conn->prepare("INSERT INTO users (firstname, lastname, username, password, profilePicture) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $firstname, $lastname, $username, $hashed_password, $profilePicture);
        
        if ($stmt->execute()) {
            echo "Your data has been saved successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
    
        $stmt->close();
    }

    public function update_user($id, $firstname, $lastname, $username, $profilePicture) {
        $stmt = $this->conn->prepare("UPDATE users set firstname = ?, lastname = ?, username = ?, profilePicture = ? where id = $id");
        $stmt->bind_param("ssss", $firstname, $lastname, $username, $profilePicture);
        
        if ($stmt->execute()) {
            echo "Your data has been saved successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
    
        $stmt->close();
    }

    public function list_user() {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function get_user($id) {
        $sql = "SELECT * FROM users where id = $id";
        $result = $this->conn->query($sql);
        return mysqli_fetch_array($result);
    }

}

$database = new Database();
?>
