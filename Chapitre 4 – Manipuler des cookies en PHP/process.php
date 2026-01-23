<?php

if (isset($_POST['submit']) && !empty($_POST['username'])) {

    setcookie("username", $_POST['username'], time() + 3600);

    echo "Cookie saved successfully <br>";
    echo "<a href='welcome.php'>Go to Welcome Page</a>";
}


?>