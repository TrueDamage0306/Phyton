<?php
session_start();
include "config.php";
$a=$_SESSION['username'];

$sql20 = "UPDATE usuarios SET on_line='off-line' WHERE username='$a'";
$conn->exec($sql20);



session_destroy();
$days = 30;
setcookie ("rememberme","", time() - ($days *  24 * 60 * 60 * 1000) );

header('Location: index.php');
header("Location: index.php");
?>