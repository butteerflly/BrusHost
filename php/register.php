<?php

$link = mysqli_connect("localhost", "root", "root", "login");

$user  = $_POST['user'];
$email = $_POST['email'];
$senha = $_POST['password'];

$verifica = mysqli_query($link, "SELECT * FROM users WHERE email = '$email'");

if (mysqli_num_rows($verifica) <= 0) {
    mysqli_query($link, "INSERT INTO users(email, usuario, senha) values ('$email', '$user', '$senha')");
    header("Location: /First App");
} else {
    echo "<script language='javascript' type='text/javascript'>
    alert('E-mail já cadastrado!');window.location
    .href='/First App';</script>";
    die();
}
?>