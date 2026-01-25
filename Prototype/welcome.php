<?php

session_start();

    echo "Your message sent successfully!";
    echo "<br>";   
    echo "Welcome " . $_SESSION['username'];
    echo "<br>";
    echo "<a href='process.php'>Back to homepage</a>";


