<?php
$error = [];
  if (isset($_POST ['submit'])) {
    if (empty($_POST['username']) || empty($_POST['email'])) {
        $error [] = "All fields are required.";
    }else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error [] = "Invalide Email!";
    }else {
        $success = "Form sent successfully";
    }
}

if (isset($error)) {
    echo "<ul style='color:red;'>";
    foreach ($error as $err) {
        echo "<li>$err</li>";
    }
    echo "</ul>";
}
if (isset($success)) {
    echo "<p style='color:green'>$success</p>";
}


?>