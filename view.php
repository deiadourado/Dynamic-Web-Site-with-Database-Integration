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

    <div class="menu">
            <span class="menu-item"><a href="index.php">Home</a></span>
            <span class="menu-item"><a href="view.php">View</a></span>
    </div>

    <main class="container">
        <div class="table-container">
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th>Topics</th>
                </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "geekdb"); //database file

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT id, fname, lname, email, birthday, checkbox FROM geekperson";
    $res = mysqli_query($conn, $sql);
    
    while($r = mysqli_fetch_assoc($res)){
        
    ?>
    <tr>
        <td><?php echo $r['fname']; ?></td>
        <td><?php echo $r['lname']; ?></td>
        <td><?php echo $r['email']; ?></td>
        <td><?php echo $r['birthday']; ?></td>
        <td><?php echo $r['checkbox']; ?></td>
        <td><a href="delete.php?id=<?php echo $r['id']; ?>">Delete</a></td>
        <td><a href="update.php?id=<?php echo $r['id']; ?>">Update</a></td>
    </tr>

    <?php
    }

// close the connection
$conn->close();
?>
            </table>
        </div>
      </main>

    <footer>
        Made by Andreia Dourado (2023)
    </footer>
</body>

</html>
