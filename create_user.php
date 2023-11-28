<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Geek's Gossip - Create User</title>
</head>

<body>
    <header>
        <div style="text-align: center;">
            <h1>Geek's Gossip</h1>
        </div>
        <h2>Your geek news portal!</h2>
        <h3>Create User</h3>
    </header>

    <div class="menu">
        <span class="menu-item"><a href="index.php">Home</a></span>
        <span class="menu-item"><a href="view.php">View</a></span>
    </div>

    <form method="post" action="create_user_script.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" name="fname" required>
        </div>

        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" name="lname" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" required>
        </div>

        <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="date" class="form-control" name="birthday" required>
        </div>

        <div class="form-group">
            <label for="profilePic">Profile Picture</label>
            <input type="file" class="form-control" name="profilePic" accept="image/*">
        </div>

        <button type="submit">Create User</button>
    </form>

    <footer>
        Made by Andreia Dourado (2023)
    </footer>
</body>

</html>
