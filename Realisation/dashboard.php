<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            background-color: #f2f4f8;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }

        h2 {
            color: #1e3a8a;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #22c55e;
            color: white;
            text-decoration: none;
        }

        a:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<h2>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?> 👋</h2>
<p>You are successfully logged in.</p>

<a href="logout.php">Logout</a>

</body>
</html>
