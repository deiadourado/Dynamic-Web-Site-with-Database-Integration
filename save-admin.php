<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : "";
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : "";
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $favorite_movie = isset($_POST['favorite_movie']) ? $_POST['favorite_movie'] : "";
    $favorite_music = isset($_POST['favorite_music']) ? $_POST['favorite_music'] : "";
    $profilePicture = isset($_POST['profilePicture']) ? $_POST['profilePicture'] : "";
    $confirm = isset($_POST['confirm']) ? $_POST['confirm'] : "";

    // Validar os campos (adapte conforme necessário)
    if (empty($first_name) || empty($last_name) || empty($username) || empty($password) || empty($favorite_movie) || empty($favorite_music) || empty($confirm)) {
        echo "Fill all spaces.";
    } elseif ($password !== $confirm) {
        echo "Passwords doesn't match.";
    } else {

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
    
            // Move the uploaded file to the desired location
            if (move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $targetFilePath)) {
                // Chame o método create_user do objeto Database para salvar o usuário
                $database->create_user($first_name, $last_name, $username, $password, $fileName);

                // Redirecione para a página de login
                header("Location: index.php");
                exit();
            }
        }
    }
}
?>





<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        // Specify the directory where you want to save the uploaded file
        $uploadDir = "uploads/";
        // Create the directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Get the file information
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $uploadDir . $fileName;

        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // File upload successful
            // Retrieve other form data
            $data = $_POST["data"];

            // Save data to a file or database
            $saveData = "Data: $data\n";
            file_put_contents("data.txt", $saveData, FILE_APPEND);

            echo "File uploaded successfully!";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Error: " . $_FILES["file"]["error"];
    }
}
?>