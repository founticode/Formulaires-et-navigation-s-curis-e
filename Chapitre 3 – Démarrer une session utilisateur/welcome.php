<?php

session_start();

if (!isset($_SESSION['name'])) {
    echo "Acces denied!";
    exit;
}

echo "Welcome " . $_SESSION['name'];
echo "<br>";
echo "<a href='logout.php'>Logout</a>";





?>