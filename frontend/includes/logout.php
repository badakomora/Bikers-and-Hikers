<?php
session_start();
unset($_SESSION["email"]);
session_destroy();
$msg = "Sign out action Successful!";
echo "<script type='text/javascript'>alert('$msg');</script>";
header("refresh: 0, ../");

?>