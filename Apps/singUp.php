<?php

session_start();

$name = $_POST['name'];
$lastname = $_POST['lastName'];
$userMail = $_POST['email'];
$username = $_POST['userName'];
$password = $_POST['password'];

if (!empty($username)) {
    $sender = "From German.Inc <Test email>";

    $message = "You have been successfully registered. Your dates \n Name: $name \n Sourname: $lastname \n Email: $userMail \n User: $username \n Password: $password";
    $myEmail = "delamoragr129@gmail.com";

    mail($userMail, "Dates of registered a my site", $message, $sender);

    include ("database.php");

    $query = "INSERT INTO users VALUES('$name', '$lastname', '$userMail',  '$username', '$password')";

    if (mysqli_query($conn, $query)) {
        mysqli_close($conn);
        $_SESSION["registered"] = true;
    } else {
        $_SESSION["registered"] = false;
    }
    header("Location: ../index.php");
} else {
    echo ("No se registraron los datos");
}
?>