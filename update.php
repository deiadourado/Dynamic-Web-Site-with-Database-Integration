<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : "";
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : "";
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    // $profilePicture = isset($_POST['profilePicture']) ? $_POST['profilePicture'] : "";

    $database->update_user($id, $first_name, $last_name, $username, $profilePicture);

    // Redirecione para a página de login
    header("Location: view.php");
    exit();
    }

?>