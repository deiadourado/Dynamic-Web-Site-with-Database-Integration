<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
    $conn = mysqli_connect("localhost", "root", "", "geekdb");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM users WHERE id = '$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    header("Location: view.php"); 
} else {
    echo "Invalid request";
}
?>
