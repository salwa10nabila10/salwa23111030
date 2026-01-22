<?php
$username = $_GET['usrnm'];
$password = $_GET['pwd'];
$usertype = $_GET['usertype'];

if ($usertype == "admin" && $username == "useradmin" && $password == "123") {
    echo "Selamat Datang admin";
} elseif ($usertype == "finance" && $username == "userfinance" && $password == "1234") {
    echo "Selamat Datang finance";
} elseif ($usertype == "logistik" && $username == "userlogistik" && $password == "12345") {
    echo "Selamat Datang logistik";
} else {
    echo "login gagal";
}
?>