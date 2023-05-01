<?php
include "../Model/Transaksi.php";
include "../Controller/KeranjangController.php";

$transaksi = new Transaksi();

if (isset($_POST["checkout"])) {
    $t = $transaksi->insertTransaksi($_POST["id"], $_POST["total"]);
    if ($t == false) {
        echo "<script>
            alert('Gagal checkout!')
            window.location.href = '../View/Keranjang.php';
        </script>";
    }
    $keranjang->deleteKeranjangByIdUser($_POST["id"]);
    echo "<script>
    window.location.href = '../View/Checkout.php';
    </script>";
}
