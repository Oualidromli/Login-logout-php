<?php

$dbmail = "oualid.romli@gmail.com";
$dbpass = "123456";
$dbpassEnc=password_hash($dbpass,PASSWORD_DEFAULT);

$mail = $_POST["email"];
$pass = $_POST["pass"];

if($dbmail === $mail && password_verify($pass,$dbpassEnc)){
    session_start();
    $_SESSION["email"] = $mail;
    header("location:../panel.php");
}
else {
    header("location:../index.php?error_log");
}