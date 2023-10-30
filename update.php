<?php
if(!empty($_GET['id'])) {
    $id = $_GET['id'];
    $geekperson =
    $geekpersonObj->displayRecordbyId($id);

    $conn = mysqli_connect("localhost", "root", "", "geekdb");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}
?>


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
        <h3>Update Records</h3>
    </header>

    <div class="menu">
            <span class="menu-item"><a href="index.php">Home</a></span>
            <span class="menu-item"><a href="view.php">View</a></span>
    </div>

    <div class="form-group">
        <label for="fname"> First Name</label>
        <input type="text" class="form-control" name="ufname" value="<?php echo $geekperson['fname']; ?>" required="">
    </div>

    <div class="form-group">
        <label for="lname"> Last Name</label>
        <input type="text" class="form-control" name="ulname" value="<?php echo $geekperson['lname']; ?>" required="">
    </div>

    <div class="form-group">
        <label for="email"> Email</label>
        <input type="text" class="form-control" name="ufname" value="<?php echo $geekperson['email']; ?>" required="">
    </div>
   
    <div class="form-group">
        <label for="birthday"> Birthday</label>
        <input type="date" class="form-control" name="ubirthday" value="<?php echo $geekperson['birthday']; ?>" required="">
    </div>

    <footer>
        Made by Andreia Dourado (2023)
    </footer>
</body>

</html>