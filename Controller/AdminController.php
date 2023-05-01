<?php
include "../Model/Admin.php";

$admin = new Admin();

if (isset($_POST["insertAdmin"])) {
    $a = $admin->insertAdmin($_POST["username"], md5($_POST["password"]));
    if ($a == false) {
        echo "<script>
            alert('Gagal menginput!')
            window.location.href = '../View/AdminAdmin.php';
        </script>";
    }
    echo "<script>
        alert('Berhasil menginput!')
        window.location.href = '../View/AdminAdmin.php';
    </script>";
}

if (isset($_POST["editAdmin"])) {
    if ($_POST["newUsername"] != null) {
        $a = $admin->updateAdmin($_POST["id"], $_POST["newUsername"]);
        if ($a == false) {
            echo "<script>
            alert('Gagal mengupdate!')
            window.location.href = '../View/AdminAdmin.php';
            </script>";
        }
        echo "<script>
        alert('Berhasil mengupdate!')
        window.location.href = '../View/AdminAdmin.php';
        </script>";
    }
    return header("Location: ../View/AdminAdmin.php");
}

if (isset($_POST["deleteAdmin"])) {
    $a = $admin->deleteAdmin($_POST["id"]);
    if ($a == false) {
        echo "<script>
            alert('Gagal menghapus!')
            window.location.href = '../View/AdminAdmin.php';
            </script>";
    }
    echo "<script>
        alert('Berhasil menghapus!')
        window.location.href = '../View/AdminAdmin.php';
        </script>";
}
