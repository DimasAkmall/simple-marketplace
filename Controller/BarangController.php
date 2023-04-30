<?php
include "../Model/Barang.php";

$barang = new Barang();

if (isset($_POST["insertBrg"])) {
    $b = $barang->insertBarang($_POST["kode"], $_POST["nama"], $_POST["harga"], $_FILES["gambar"]["name"], $_POST["desc"], $_POST["kategori"]);
    if ($b == false) {
        echo "<script>
                alert('Gagal menginput!')
                window.location.href = '../View/BarangAdmin.php';
            </script>";
    }
    echo "<script>
        alert('Berhasil menginput!')
        window.location.href = '../View/BarangAdmin.php';
    </script>";
}

if (isset($_POST["editBrg"])) {
    if ($_FILES["gambar"]["name"] == "") {
        $b = $barang->updateBarang($_POST["id"], $_POST["kode"], $_POST["nama"], $_POST["harga"], $_POST["gambarBackup"], $_POST["desc"], $_POST["kategori"]);
    } else {
        $b = $barang->updateBarang($_POST["id"], $_POST["kode"], $_POST["nama"], $_POST["harga"], $_FILES["gambar"]["name"], $_POST["desc"], $_POST["kategori"]);
    }
    if ($b == false) {
        echo "<script>
                alert('Gagal mengupdate!')
                window.location.href = '../View/BarangAdmin.php';
            </script>";
    }
    echo "<script>
            alert('Berhasil mengupdate!')
            window.location.href = '../View/BarangAdmin.php';
        </script>";
}


if (isset($_POST["deleteBrg"])) {
    $b = $barang->deleteBarang($_POST["id"]);
    if ($b == false) {
        echo "<script>
                alert('Gagal menghapus!')
                window.location.href = '../View/BarangAdmin.php';
            </script>";
    }
    echo "<script>
            alert('Berhasil menghapus!')
            window.location.href = '../View/BarangAdmin.php';
        </script>";
}
