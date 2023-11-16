<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Geek's Gossip</title>
</head>

<body>
    <header>
        <div align="center">
            <h1>Geek's Gossip</h1>
        </div>
        <h2>Your geek news portal!</h2>
    </header>

<?php
        include("connection.php");


if (session_status()!==PHP_SESSION_ACTIVE)session_start();
if (isset($_SESSION['POST'])){
    $_POST = $_SESSION['POST'];
    unset($_SESSION['POST']);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
       // $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        
        // checkbox values
        $checkbox = [];
        if(isset($_POST['movies'])) $checkbox[] = 'Movies';
        if(isset($_POST['music'])) $checkbox[] = 'Music';
        if(isset($_POST['animes'])) $checkbox[] = 'Animes';
        if(isset($_POST['series'])) $checkbox[] = 'Series';
        if(isset($_POST['books'])) $checkbox[] = 'Books';
        
        $checkboxString = implode(',', $checkbox);
        
        // to insert data
        $res = $database -> create_user($fname, $lname, $birthday, $email, $checkbox);
}
?>

<footer>
        Made by Andreia Dourado (2023)
    </footer>
</body>
</html>