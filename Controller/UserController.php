<?php
include "../Model/User.php";

$user = new User();


if (isset($_POST["editUser"])) {
    if ($_POST["newUsername"] != null) {
        $u = $user->updateUser($_POST["id"], $_POST["newUsername"]);
        if ($u == false) {
            echo "<script>
                alert('Gagal mengupdate!')
                window.location.href = '../View/UserAdmin.php';
            </script>";
        }
        echo "<script>
        alert('Berhasil mengupdate!')
        window.location.href = '../View/UserAdmin.php';
    </script>";
    }
    return header("Location: ../View/UserAdmin.php");
}

if (isset($_POST["deleteUser"])) {
    $u = $user->deleteUser($_POST["id"]);
    if ($u == false) {
        echo "<script>
            alert('Gagal menghapus!')
            window.location.href = '../View/Index.php';
        </script>";
    }
    echo "<script>
        alert('Berhasil menghapus!')
        window.location.href = '../View/UserAdmin.php';
    </script>";
}
