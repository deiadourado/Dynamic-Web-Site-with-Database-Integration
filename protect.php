<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("You can't access this page. <p><a href=\"index.php\">Log in</a></p>");
}


?>