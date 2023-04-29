<?php
session_start();
include "../Model/User.php";

if (strlen($_POST["username"]) < 8 || strlen($_POST["password"]) < 8 || strlen($_POST["cPassword"]) < 8) {
    echo "<script>
            alert('username dan sandi minimal 8 karakter')
            window.location.href = '../View/Signup.php';
        </script>";
} else if (substr($_POST["username"], 0, 5) == "admin") {
    echo "<script>
            alert('username telah digunakan!')
            window.location.href = '../View/Signup.php';
        </script>";
} else {
    $u = new User();
    $check = $u->getUser($_POST["username"]);

    if ($check[0]["username"] == $_POST["username"]) {
        echo "<script>
            alert('username telah digunakan!')
            window.location.href = '../View/Signup.php';
        </script>";
    } else {
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $result = $u->insertUser($username, $password);

        if ($result == true) {
            echo "<script>
                alert('Berhasil membuat akun')
                window.location.href = '../View/Login.php';
            </script>";
        } else {
            echo "<script>
                alert('Gagal membuat akun!')
                window.location.href = '../View/Signup.php';
            </script>";
        }
    }
}
