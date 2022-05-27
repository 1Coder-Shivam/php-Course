<?php
echo "Asli php yaha se start hai<br>";
// A session is a way to store information (in variables) to be used across multiple pages.
session_start();
$_SESSION['username'] = "Shivam";
$_SESSION['favcat']  = "Books";
echo "We have saved your session";



?>