<?php

class Database {
    private $conn;

    function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "geekdb"); //database file
    if(mysqli_connect_error()) {
      die("Failed to connect to MySQL: " . mysqli_connect_error());
    }
  }

  public function create_user($fname, $lname, $birthday, $email, $checkbox) {
    $sql = "INSERT INTO geekperson (fname, lname, email, birthday, checkbox) VALUES ('$fname', '$lname', '$email', '$birthday', '$checkbox')";
    $result = mysqli_query($this->conn, $sql);

    if ($result) {
        echo "Your data has been saved successfully!";
    } else {
        echo "Error: " . mysqli_error($this->conn);
    }
}
    public function list_user() {
        $sql = "SELECT id, fname, lname, email, birthday, checkbox FROM geekperson";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function update_user($fname, $lname, $birthday, $email, $checkbox) {
    $sql = "";
    }
}
$database = new Database();
?>