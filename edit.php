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
    <p class="welcome"> Welcome to the view page, <?php echo $_SESSION['firstname']; ?>. </p>

    <a href="logout.php">Logout</a>

    <main class="container">
        <div class="table-container">
            <form method="post" action="update.php" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value=<?php echo $id; ?> />
                <p><input class="form-control" name="first_name" type="text" placeholder="First Name" value="<?php echo $r['firstname']; ?>" required/></p>

                <p><input class="form-control" name="last_name" type="text" placeholder="Last Name" value="<?php echo $r['lastname']; ?>" required /></p>

                <p><input class="form-control" name="username" type="text" placeholder="Username" value="<?php echo $r['username']; ?>" required /></p>

                <div class="form-group">
                    <p><input type="file" class="form-control" name="profilePicture" accept="image/*" placeholder="Upload here your profile picture" required=""></p>
                </div>

                <input class="btn btn-light" type="submit" name="submit" value="Salvar" />
            </form>
        </div>
    </main>
</html>
