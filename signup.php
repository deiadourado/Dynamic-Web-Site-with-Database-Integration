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
            <h3>Don't have an account, then sign up below!</h3>
                <form method="post" action="save-admin.php" enctype="multipart/form-data">
                    <p><input class="form-control" name="first_name" type="text" placeholder="First Name" required/></p>
                    <p><input class="form-control" name="last_name" type="text" placeholder="Last Name" required /></p>
                    <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
                    <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
                    <p><input class="form-control" name="confirm" type="password" placeholder="Confirm Password" required /></p>
                    <p><input class="form-control" name="favorite_movie" type="text" placeholder="Favorite Movie" required /></p>
                    <p><input class="form-control" name="favorite_music" type="text" placeholder="Favorite Music" required /></p>
                    <div class="form-group">
                        <p><input type="file" class="form-control" name="profilePicture" accept="image/*" placeholder="Upload here your profile picture" required=""></p>
                    </div>
                    <input class="btn btn-light" type="submit" name="submit" value="Register" />
                </form>
        </div>
    </section>
</body>
</html>