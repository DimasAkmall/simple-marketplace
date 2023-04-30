<?php
include "../Model/Kategori.php";

$kategori = new Kategori();


if (isset($_POST["insertKategori"])) {
    $k = $kategori->insertKategori($_POST["kategori"], $_FILES["gambar"]["name"]);
    if ($k == false) {
        echo "<script>
            alert('Gagal menginput!')
            window.location.href = '../View/KategoriAdmin.php';
        </script>";
    }
    echo "<script>
        alert('Berhasil menginput!')
        window.location.href = '../View/KategoriAdmin.php';
    </script>";
}

if (isset($_POST["editKategori"])) {
    if ($_POST["kategori"] != null) {
        if ($_FILES["gambar"]["name"] == "") {
            $k = $kategori->updateKategori($_POST["id"], $_POST["kategori"], $_POST["gambarBackup"]);
        } else {
            $k = $kategori->updateKategori($_POST["id"], $_POST["kategori"], $_FILES["gambar"]["name"]);
        }
        if ($k == false) {
            echo "<script>
            alert('Gagal mengupdate!')
            window.location.href = '../View/KategoriAdmin.php';
            </script>";
        }
        echo "<script>
        alert('Berhasil mengupdate!')
        window.location.href = '../View/KategoriAdmin.php';
        </script>";
    }
    return header("Location: ../View/KategoriAdmin.php");
}

if (isset($_POST["deleteKategori"])) {
    $k = $kategori->deleteKategori($_POST["id"]);
    if ($k == false) {
        echo "<script>
            alert('Gagal menghapus!')
            window.location.href = '../View/KategoriAdmin.php';
        </script>";
    }
    echo "<script>
        alert('Berhasil menghapus!')
        window.location.href = '../View/KategoriAdmin.php';
    </script>";
}
