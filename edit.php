<?php
include('protect.php');
?>

<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    include("connection.php");
    
    $r = $database ->get_user($id);

} else {
    echo "Invalid request";
}
?>

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
        <h1>Geek's View</h1>
    </div>
    </header>

    <nav>
        <div class="menu-item">
            <a href="index.php">Home</a>
        </div>
        <div class="menu-item">
            <a href="view.php">View</a>
        </div>
    </nav>

    <p class="welcome"> You can edit your data, <b><?php echo $_SESSION['firstname']; ?></b>. </p>

    <main class="container">
        <div class="table-container">
        <form method="post" action="update.php" enctype="multipart/form-data">
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
            <input type="hidden" id="profilePictureOriginal" name="profilePictureOriginal" value="<?php echo $r['profilePicture']; ?>" />

            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input class="form-control" name="first_name" type="text" id="first_name" placeholder="Enter your first name" value="<?php echo $r['firstname']; ?>" required />
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input class="form-control" name="last_name" type="text" id="last_name" placeholder="Enter your last name" value="<?php echo $r['lastname']; ?>" required />
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input class="form-control" name="username" type="text" id="username" placeholder="Choose a username" value="<?php echo $r['username']; ?>" required />
            </div>

            <div class="form-group">
                <label for="favoriteMovie">Favorite Movie:</label>
                <input class="form-control" name="favoriteMovie" type="text" id="favoriteMovie" placeholder="Your favorite movie" value="<?php echo $r['favorite_movie']; ?>" required />
            </div>

            <div class="form-group">
                <label for="favoriteMusic">Favorite Music:</label>
                <input class="form-control" name="favoriteMusic" type="text" id="favoriteMusic" placeholder="Your favorite music" value="<?php echo $r['favorite_music']; ?>" required />
            </div>

            <div class="form-group">
                <label for="profilePicture">Profile Picture:</label>
                <input type="file" class="form-control" name="profilePicture" id="profilePicture" accept="image/*" placeholder="Upload here your profile picture" value="<?php echo $r['profilePicture']; ?>">
            </div>
            <br>
            <div class="form-group">
                <button class="btn btn-primary btn-lg" type="submit" name="submit">Save</button>
            </div>

        </form>

        <div class="button-container">
                <a href="logout.php" class="btn-logout">Logout</a>
            </div>

        </div>
    </main>
</html>
