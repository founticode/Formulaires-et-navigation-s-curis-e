<?php

$texxt = "Hello";
echo strlen($texxt);   // 5
echo "<br>";

echo strtoupper("hello");  // HELLO
echo "<br>";

echo strtolower("HELLO");  // hello
echo "<br>";

echo ucfirst("ali");  // Ali
echo "<br>";

$teext = "I love PHP";
echo strpos($teext, "PHP");  // 7
echo "<br>";


$text = "I love PHP";
echo str_replace("PHP", "JavaScript", $text);  // I love JavaScript
echo "<br>";

$textt = "HTML,CSS,PHP";
$array = explode(",", $textt);  // ["HTML", "CSS", "PHP"]
echo "<br>";

$array = ["HTML", "CSS", "PHP"];
echo implode(" - ", $array);  // HTML - CSS - PHP
echo "<br>";

$ttext = "   Hello World   ";
echo trim($ttext);  // Hello World
echo "<br>";

$name = "Ali";
echo "Hello " . $name;  // Hello Ali
echo "<br>";


?>