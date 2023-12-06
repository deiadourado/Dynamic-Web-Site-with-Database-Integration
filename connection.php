<?php

class Database {
    private $conn;

    // Constructor: Establishes a database connection
    function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "geekdb"); // Replace with your credentials
        if ($this->conn->connect_error) {
            die("Failed to connect to MySQL: " . $this->conn->connect_error);
        }
    }

    // Getter method to retrieve the database connection
    public function getConnection() {
        return $this->conn;
    }

    // Method to create a new user in the database
    public function create_user($firstname, $lastname, $username, $hashed_password, $profilePicture, $favoriteMovie, $favoriteMusic) {
        $stmt = $this->conn->prepare("INSERT INTO users (firstname, lastname, username, password, profilePicture, favorite_movie, favorite_music) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $firstname, $lastname, $username, $hashed_password, $profilePicture, $favoriteMovie, $favoriteMusic);
        
        if ($stmt->execute()) {
            echo "Your data has been saved successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
    
        $stmt->close();
    }

    // Method to update user information in the database
    public function update_user($id, $firstname, $lastname, $username, $profilePicture, $favoriteMovie, $favoriteMusic) {
        $stmt = $this->conn->prepare("UPDATE users set firstname = ?, lastname = ?, username = ?, profilePicture = ?, favorite_movie = ?, favorite_music = ? where id = $id");
        $stmt->bind_param("ssssss", $firstname, $lastname, $username, $profilePicture, $favoriteMovie, $favoriteMusic);
        
        if ($stmt->execute()) {
            echo "Your data has been saved successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
    
        $stmt->close();
    }

    // Method to retrieve a list of all users from the database
    public function list_user() {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        return $result;
    }

    // Method to retrieve user information by ID
    public function get_user($id) {
        $sql = "SELECT * FROM users where id = $id";
        $result = $this->conn->query($sql);
        return mysqli_fetch_array($result);
    }

}

// Instantiate the Database class
$database = new Database();
?>
