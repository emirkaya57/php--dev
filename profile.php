<?php
session_start();
require 'safe.php';
require 'router.php';
 
echo "Hoşgeldiniz Sayın " .$_SESSION["username"];

echo "<a href='exit.php'>Logout</a>"



?>