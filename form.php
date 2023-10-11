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
$conn = mysqli_connect("localhost", "root", "", "geekdb"); //database file

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    $sql = "INSERT INTO geekperson (fname, lname, email, birthday, checkbox) VALUES ('$fname', '$lname', '$email', '$birthday', '$checkboxString')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Your data has been saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request"; // Handle non-POST requests
}

// close the connection
$conn->close();
?>

<footer>
        <!-- Footer content here -->
    </footer>
</body>

</html>
