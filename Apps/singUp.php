<?php

session_start();

$name = $_POST['name'];
$lastname = $_POST ['lastName'];
$username = $_POST['userName'];
$password = $_POST['password'];

include ("database.php");

$query = "INSERT INTO users VALUES('$name', '$lastname', '$username', '$password')";

if(mysqli_query($conn, $query)){
    mysqli_close($conn);
    $_SESSION["registered"] = true;
}else{
    $_SESSION["registered"] = false;
}


?>