<?php
session_start();

include "../Model/Admin.php";
include "../Model/User.php";

if (substr($_POST["username"], 0, 5) == "admin") {
    $a = new Admin();
    $result = $a->getAdmin($_POST["username"]);

    if (md5($_POST["password"]) == $result[0]["password"]) {
        $_SESSION["id"] = $result[0]["id"];
        $_SESSION["username"] = $result[0]["username"];
        $_SESSION["role"] = $result[0]["role"];
        header("Location: ../View/DashAdmin.php");
    } else {
        echo "false";
        echo "<script>
        alert('username atau sandi salah!')
        window.location.href = '../View/Login.php';
        </script>";
    }
} else {
    $u = new User();
    $result = $u->getUser($_POST["username"]);

    if (md5($_POST["password"]) == $result[0]["password"]) {
        $_SESSION["id"] = $result[0]["id"];
        $_SESSION["username"] = $result[0]["username"];
        $_SESSION["role"] = "user";
        header("Location: ../View/Index.php");
    } else {
        echo "<script>
            alert('username atau sandi salah!')
            window.location.href = '../View/Login.php';
        </script>";
    }
}
