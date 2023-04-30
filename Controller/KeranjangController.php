<?php
if (!isset($_SESSION)) {
    session_start();
}
include "../Model/Keranjang.php";

$keranjang = new Keranjang();

if (isset($_POST["keranjang"])) {
    $cek = 0;
    if (!isset($_SESSION["id"])) {
        echo "<script>
        alert('Silahkan Login!')
        window.location.href = '../View/Index.php';
    </script>";
    }

    foreach ($keranjang->getKeranjangById($_SESSION["id"]) as $k) {
        if ($k["id_barang"] == $_POST["id_barang"]) {
            $jumlah = $k["jumlah"] + $_POST["jumlah"];
            $keranjang->updateKeranjang($k["id"], $jumlah);
            $cek++;
        }
    }

    if ($cek == 0) {
        $k = $keranjang->insertKeranjang($_POST["id_user"], $_POST["id_barang"], $_POST["jumlah"]);
        if ($k == false) {
            echo "<script>
            alert('Gagal masuk keranjang!')
            window.location.href = '../View/Index.php';
            </script>";
        }
    }

    return header("Location: ../View/Keranjang.php");
}

if (isset($_POST["delete"])) {
    $k = $keranjang->deleteKeranjang($_POST["id"]);
    if ($k == false) {
        echo "<script>
            alert('Gagal menghapus!')
            window.location.href = '../View/Index.php';
        </script>";
    }

    return header("Location: ../View/Keranjang.php");
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
    return header("Location: ../View/Keranjang.php");
}
