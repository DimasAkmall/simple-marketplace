<?php
if (!isset($_SESSION)) {
    session_start();
}
include "../Model/Keranjang.php";

$keranjang = new Keranjang();

if (isset($_POST["keranjang"])) {
    if (!isset($_SESSION["id"])) {
        echo "<script>
        alert('Silahkan Login!')
        window.location.href = '../View/Index.php';
    </script>";
    }

    $k = $keranjang->insertKeranjang($_POST["id_user"], $_POST["id_barang"], $_POST["jumlah"]);
    if ($k == false) {
        echo "<script>
            alert('Gagal masuk keranjang!')
            window.location.href = '../View/Index.php';
        </script>";
    }

    return header("Location: ../View/Keranjang.php?id=" . $_SESSION["id"]);
}

if (isset($_POST["delete"])) {
    $k = $keranjang->deleteKeranjang($_POST["id"]);
    if ($k == false) {
        echo "<script>
            alert('Gagal menghapus!')
            window.location.href = '../View/Index.php';
        </script>";
    }

    return header("Location: ../View/Keranjang.php?id=" . $_SESSION["id"]);
}

if (isset($_POST["edit"])) {
    if (!$_POST["newJumlah"] < 1) {
        $k = $keranjang->updateKeranjang($_POST["id"], $_POST["newJumlah"]);
        if ($k == false) {
            echo "<script>
                alert('Gagal mengupdate!')
                window.location.href = '../View/Index.php';
            </script>";
        }
    }
    return header("Location: ../View/Keranjang.php?id=" . $_SESSION["id"]);
}
