<?php
session_start();

if (isset($_POST['submit'])) {

    if (empty($_POST['name'])) {
        echo "Name is Required!";
    }else {
        $_SESSION['name'] = $_POST['name'];
        echo "Login successful <br>";
        echo "<a href='welcome.php'>Go to Welcome Page</a>";
 }
}


?>