<?php
$link = mysqli_connect("localhost", "root", "root", "login");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $senha = $_POST["password"];

    $verifica = mysqli_query($link, "SELECT * from users where email = '$email' and senha = '$senha'");

    if (mysqli_num_rows($verifica) <= 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='/First App';</script>";
        die();
    } else {
        setcookie("login", $login);
        header("Location:/First App/page2.html");
    }
}
?>