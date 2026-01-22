<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);

    if (empty($username) || empty($email)) {
        echo "Fill all the fields";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email invalid";
    }else {
        echo "Welcome $username.";
    }
}


?>