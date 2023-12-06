<?php
include('connection.php');
session_start(); // Start session to manage user data across pages

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set in the POST request
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate username and password
        if (empty($username)) {
            echo "Please fill in your username";
        } else if (empty($password)) {
            echo "Please fill in your password";
        } else {
            $username = $database->getConnection()->real_escape_string($username);

            // Query the database to retrieve user information using the provided username
            $sql_code = "SELECT * FROM users WHERE username = '$username'";
            $sql_query = $database->getConnection()->query($sql_code);

            if ($sql_query->num_rows == 1) {
                $user = $sql_query->fetch_assoc();

                if ($password == $user['password']) {
                    // Correct password, allow login
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['firstname'] = $user['firstname'];

                    header("Location: view.php"); // Redirect to view.php upon successful login
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
    <!-- Meta tags for character set and viewport -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to the external stylesheet and favicon -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/cat.png" type="image/png">
    <!-- Title of the webpage -->
    <title>Geek's Gossip</title>
</head>

<body>
    <!-- Header section with logo and title -->
    <header>
        <div class="logo-container">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="header logo"></a>
            <h1>Geek's Gossip</h1>
        </div>
        <h2>Your geek news portal!</h2>

        <!-- Login section with form -->
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
                <!-- Container for buttons with Sign In and Sign Up options -->
                <div class="button-container">
                    <button type="submit" class="btn-primary">Sign In</button>
                    <br>
                    <a href="signup.php" class="btn-signup">Sign Up</a>
                </div>
            </p>
        </form>
    </header>
</body>

</html>
