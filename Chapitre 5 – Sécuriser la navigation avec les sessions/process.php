<?php

session_start();

if (isset($_POST['submit']) && !empty($_POST['username'])) {

    if ($_POST['username'] === 'admin' && $_POST['password'] === '1234') {
        session_regenerate_id(true);
        $_SESSION['username'] = $_POST['username'];
        header('Location: dashboard.php');
        exit;
    }else {
        echo "Something not working try again!";
        echo "<br>";
        echo "<a href='login.php'>Go back to login</a>";
    }
}

?>