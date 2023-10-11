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
    
    // Checkbox values handling
    $topics = [];
    if(isset($_POST['movies'])) $checkbox[] = 'Movies';
    if(isset($_POST['music'])) $checkbox[] = 'Music';
    if(isset($_POST['animes'])) $checkbox[] = 'Animes';
    if(isset($_POST['series'])) $checkbox[] = 'Series';
    if(isset($_POST['books'])) $checkbox[] = 'Books';
    
    $checkboxString = implode(',', $checkbox);
    
    // Insert data into the database
    $sql = "INSERT INTO geekperson (fname, lname, email, birthday, checkbox) VALUES ('$fname', '$lname', '$email', '$birthday', '$checkboxString')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request"; // Handle non-POST requests
}

// Close the database connection
$conn->close();
?>
