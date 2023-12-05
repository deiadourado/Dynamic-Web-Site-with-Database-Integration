<?php
include('connection.php');
session_start(); // Move session_start to the top

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password']; // Updated from 'senha'

        if (empty($username)) {
            echo "Please fill in your username";
        } else if (empty($password)) {
            echo "Please fill in your password";
        } else {
            $username = $database->getConnection()->real_escape_string($username);

            // Query the database using the username to retrieve user information
            $sql_code = "SELECT * FROM users WHERE username = '$username'";
            $sql_query = $database->getConnection()->query($sql_code);

            if ($sql_query->num_rows == 1) {
                $user = $sql_query->fetch_assoc();

                if ($password == $user['password']) {
                    // Correct password, allow login
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['firstname'] = $user['firstname'];

                    header("Location: view.php"); // Update with the correct location
                    exit();
                } else {
                    echo "Login failed! Incorrect username or password";
                }
            } else {
                echo "Login failed! Incorrect username or password";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/cat.png" type="image/png">
    <title>Geek's Gossip</title>
</head>

<body>
    <header>
    <div class="logo-container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="header logo"></a>
        <h1>Geek's Gossip</h1>
    </div>
    <h2>Your geek news portal!</h2>


    <h2 class="login">Login</h2>
    <form action="" method="POST">
        <p>
            <label>Username</label>
            <input type="text" name="username">
        </p>
        <p>
            <label>Password</label>
            <input type="password" name="password">
        </p>
        <p>
        <div class="button-container">
            <button type="submit" class="btn-primary">Sign In</button>
            <br>
            <a href="signup.php" class="btn-signup">Sign Up</a>
        </div>

        </p>
    </form>
</html>