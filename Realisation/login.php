<?php
session_start();

$message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($username) || empty($password)) {
        $message = "Please fill all fields.";
    } 
    elseif ($username === "admin" && $password === "1234") {

        session_regenerate_id(true);

        $_SESSION['username'] = $username;

        header("Location: dashboard.php");
        exit;
    } 
    else {
        $message = "Invalid credentials.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: #f2f4f8;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: white;
            padding: 30px;
            width: 300px;
            border-radius: 8px;
            text-align: center;
        }

        h2 {
            color: #1e3a8a;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }

        button {
            width: 100%;
            padding: 8px;
            background-color: #22c55e;
            border: none;
            color: white;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Login</h2>

    <?php if (!empty($message)) { ?>
        <p class="error"><?php echo htmlspecialchars($message); ?></p>
    <?php } ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
