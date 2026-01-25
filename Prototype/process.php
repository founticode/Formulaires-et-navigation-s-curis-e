<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['msg'] ?? '');

    $messageStatu = '';

        if (empty($name) || empty($email) || empty($message)) {
            $messageStatu = "Fill all the fields"; 
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $messageStatu = "Invalid Email";
        }else {
            $_SESSION['username'] = $_POST['username'];
            header("Location: welcome.php");
            exit;
        }

} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

form {
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    background-color: #ffffff;
    border: 2px solid #1e3a8a;
}

label {
    color: #1e3a8a;
    font-weight: bold;
}

input, textarea {
    width: 100%;
    padding: 6px;
    margin-top: 5px;
    border: 1px solid #1e3a8a;
}

button {
    width: 100%;
    padding: 8px;
    background-color: #1e3a8a;
    color: white;
    border: none;
    cursor: pointer;
}

p {
    text-align: center;
    color: #1e3a8a;
    font-weight: bold;
}
</style>
<body>
    
    <form method="POST" action="">
        <label for="username">Full Name:</label><br>
        <input type="text" name="username"><br><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email"><br><br>

        <label for="message">Enter your message..</label><br>
        <textarea name="msg" id="message"></textarea><br><br>

        <button name="submit" type="submit">Send</button>
    </form>

    <?php if (!empty($messageStatu)) {
        echo "<p>$messageStatu</p>";
    }
    ?>

</body>
</html>