<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $birthday = $_POST["birthday"];
    $checkbox = $_POST["checkbox"]; // Certifique-se de que o campo de checkbox tenha o atributo 'name="checkbox"'

    // Adicione validações e tratamentos de erro conforme necessário

    $database->create_user($fname, $lname, $email, $birthday, $checkbox);

    // Redirecionar para a página de visualização ou exibir uma mensagem de sucesso
    header("Location: view.php");
    exit();
}
?>
