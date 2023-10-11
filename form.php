<?php
require_once('geekdb.php'); // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    
    // Checkbox values handling
    $topics = [];
    if(isset($_POST['movies'])) $topics[] = 'Movies';
    if(isset($_POST['music'])) $topics[] = 'Music';
    if(isset($_POST['animes'])) $topics[] = 'Animes';
    if(isset($_POST['series'])) $topics[] = 'Series';
    if(isset($_POST['books'])) $topics[] = 'Books';
    
    // Insert data into the database
    $sql = "INSERT INTO subscribers (first_name, last_name, email, birthday, topics) VALUES ('$fname', '$lname', '$email', '$birthday', '" . implode(',', $topics) . "')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
