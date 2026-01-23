<?php

if (isset($_COOKIE['username'])) {
    echo "Welcome " . $_COOKIE['username'];
    echo "<br>";
    echo "<a href='delete.php'>Delete Cookie</a>";
}else  {
    echo "No Cookie found!";
    
}

?>