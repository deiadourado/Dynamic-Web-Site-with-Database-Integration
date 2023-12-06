<?php
include('connection.php');

echo implode($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : "";
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : "";
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $favorite_movie = isset($_POST['favoriteMovie']) ? $_POST['favoriteMovie'] : "";
    $favorite_music = isset($_POST['favoriteMusic']) ? $_POST['favoriteMusic'] : "";
    $id = isset($_POST['id']) ? $_POST['id'] : "";
    $profilePicture = isset($_POST['profilePicture']) ? $_POST['profilePicture'] : "";

    if (isset($_FILES["profilePicture"]) && $_FILES["profilePicture"]["error"] == 0) {
        // Specify the directory where you want to save the uploaded file
        $uploadDir = "uploads/";
        // Create the directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Get the file information
        $fileName = basename($_FILES["profilePicture"]["name"]);
        $targetFilePath = $uploadDir . $fileName;

        if ($_FILES["profilePicture"] != $_FILES["profilePictureOriginal"]) {
            move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $targetFilePath);
        }

    } else {
            $fileName = $_POST['profilePictureOriginal'];
    }

    $database->update_user($id, $first_name, $last_name, $username, $fileName, $favorite_movie, $favorite_music); 
}

header("Location: view.php");
exit();

?>