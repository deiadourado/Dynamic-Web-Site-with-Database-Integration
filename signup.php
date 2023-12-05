<?php
include('connection.php');
session_start(); // Move session_start to the top
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

    <section class="form-row row">
    <div class="col-sm-12 col-md-6 col-lg-6">
        <h3>Don't have an account? Sign up below!</h3>
        <form method="post" action="save-admin.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input class="form-control" name="first_name" type="text" id="first_name" placeholder="Enter your first name" required/>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input class="form-control" name="last_name" type="text" id="last_name" placeholder="Enter your last name" required />
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input class="form-control" name="username" type="text" id="username" placeholder="Choose a username" required />
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" name="password" type="password" id="password" placeholder="Enter your password" required />
            </div>

            <div class="form-group">
                <label for="confirm">Confirm Password:</label>
                <input class="form-control" name="confirm" type="password" id="confirm" placeholder="Confirm your password" required />
            </div>

            <div class="form-group">
                <label for="favorite_movie">Favorite Movie:</label>
                <input class="form-control" name="favorite_movie" type="text" id="favorite_movie" placeholder="Your favorite movie" required />
            </div>

            <div class="form-group">
                <label for="favorite_music">Favorite Music:</label>
                <input class="form-control" name="favorite_music" type="text" id="favorite_music" placeholder="Your favorite music" required />
            </div>

            <div class="form-group">
                <label for="profilePicture">Profile Picture:</label>
                <input type="file" class="form-control" name="profilePicture" id="profilePicture" accept="image/*" required="">
            </div>

            <div class="form-group">
                <input class="btn btn-light btn-lg" type="submit" name="submit" value="Register" />
            </div>
        </form>
    </div>
</section>

        </div>
    </section>
</body>
</html>