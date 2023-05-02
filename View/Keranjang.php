<?php
session_start();
include "../Controller/KeranjangController.php";
include "../Controller/BarangController.php";

if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $username = $_SESSION["username"];
}

if (!isset($_SESSION["id"])) {
    header("Location: Index.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BelanjaIn | Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Asset/css/Index.css">
    <link rel="stylesheet" href="../Asset/css/Scrollbar.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background: linear-gradient(108deg,#0d6efd 20%, #ffc107);">
        <div class="container">
            <a class="navbar-brand" href="./Index.php"><img src="../Asset/image/BelanjainLogoNav.png" alt="" srcset=""></a>
            <div class="navbar-expand-md d-flex flex-row">
                <div class="nav-item d-flex align-items-center">
                    <form action="Keranjang.php" method="post">
                        <button class="btn btn-tertiary p-0" type="submit" name=""><img src="../Asset/image/cart.png" alt="" width="30"></button>
                    </form>
                </div>
                <div class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle m-auto text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="toggler">
                        <img src=" ../Asset/image/user.png" alt="" class="rounded-circle me-1" width="35" height="35" />
                        <span id="usernameField"><?= $username ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="../Controller/LogoutController.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container mt-5" style="padding-top:2.4rem;">
        <div class="row w-100">
            <div class="col-lg-12 col-md-12 col-12">
                <h1 class="mb-3">Keranjangmu</h1>
                <table id="shoppingCart" class="table table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th style="width:55%">Product</th>
                            <th class=" text-center">Harga</th>
                            <th class=" text-center">Jumlah</th>
                            <th class=" text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        $jmlKeranjang = 0;
                        foreach ($keranjang->getKeranjangById($_SESSION["id"]) as $k) {
                            $jmlKeranjang++;
                            foreach ($barang->getBarangById($k["id_barang"]) as $b) {
                                $tempTotal = $k["jumlah"] * $b["harga"];
                                $total += $tempTotal; ?>
                                <tr>
                                    <td data-th="Product">
                                        <div class="row ">
                                            <div class="col-md-3">
                                                <img src="../Asset/image/<?= $b["kategori"] ?>/<?= $b["gambar"] ?>" alt="" class="img-fluid shadow d-none d-md-block rounded" width="60">
                                            </div>
                                            <div class="col-md-9">
                                                <h5><?= $b["namaBrg"] ?></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Harga">
                                        <p class="fs-5 text-center"><?= number_format($b["harga"]) ?></p>
                                    </td>
                                    <td data-th="Jumlah">
                                        <p class="fs-5 text-center"><?= $k["jumlah"] ?></p>
                                    </td>
                                    <td data-th="actions">
                                        <div class="d-flex justify-content-center">
                                            <form action="../Controller/KeranjangController.php" method="post">
                                                <input type="hidden" name="id" value="<?= $k["id"] ?>">
                                                <input type="hidden" id="newJumlah<?= $k["id"] ?>" name="newJumlah" value="">
                                                <button class="btn btn-warning border-secondary me-1" type="submit" name="edit" onclick="promptJumlah(<?= $k['id'] ?>)"><img src="../Asset/image/edit.png" alt=""></button>
                                            </form>
                                            <form action="../Controller/KeranjangController.php" method="post">
                                                <input type="hidden" name="id" value="<?= $k["id"] ?>">
                                                <button class="btn btn-danger border-secondary" type="submit" name="delete"><img src="../Asset/image/trash.png" alt=""></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-6 col-md-4 col-lg-3 d-flex align-items-end">
                <?php if ($_SESSION["prevPage"] == "DetailBarang.php") { ?>
                    <a class="btn mt-3 text-dark" href="<?= $_SESSION["prevPage"] ?>?id=<?= $_SESSION["currentIdBarang"] ?>" role="button" style="background-color :#E5E0F0">
                        <img src="../Asset/image/back-button.png" alt="" class="me-1" width="25">
                        Back
                    </a>
                <?php } else if ($_SESSION["prevPage"] == "Kategori.php") { ?>
                    <a class="btn mt-3 text-dark" href="<?= $_SESSION["prevPage"] ?>?kategori=<?= $_SESSION["currentKategori"] ?>" role="button" style="background-color :#E5E0F0">
                        <img src="../Asset/image/back-button.png" alt="" class="me-1" width="25">
                        Back
                    </a>
                <?php } else { ?>
                    <a class="btn mt-3 text-dark" href="<?= $_SESSION["prevPage"] ?>" role="button" style="background-color :#E5E0F0">
                        <img src="../Asset/image/back-button.png" alt="" class="me-1" width="25">
                        Back
                    </a>
                <?php } ?>
            </div>
            <div class="col-6 col-md-4 col-lg-3 d-flex flex-column ms-auto">
                <div class="pe-md-4">
                    <h4 class="">Total:</h4>
                    <h1>Rp. <?= number_format($total) ?></h1>
                    <form action="../Controller/TransaksiController.php" method="post">
                        <input type="hidden" name="id" value="<?= $_SESSION["id"] ?>">
                        <input type="hidden" name="username" value="<?= $_SESSION["username"] ?>">
                        <input type="hidden" name="total" value="<?= $total ?>">
                        <input class="btn btn-primary w-100 mt-3" type="submit" name="checkout" value="Checkout" <?php if ($jmlKeranjang == 0) {
                                                                                                                        echo "disabled";
                                                                                                                    } ?>>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../Asset/js/ResponsiveNavUser.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        function promptJumlah(id) {
            newJumlah = prompt("masukkan jumlah baru");
            if (newJumlah <= 0) {
                return alert("Ndak boleh yaa!")
            } else {
                document.querySelector("#newJumlah" + id).setAttribute("value", "")
                return document.querySelector("#newJumlah" + id).setAttribute("value", newJumlah)
            }
        }
    </script>
</body>

</html>