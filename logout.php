<?php
session_start();

session_unset();
$_SESSION['loggedin'] = false;
session_destroy();

header("location: login.php");
exit;
?>