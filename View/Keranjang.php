<?php
include "../Controller/KeranjangController.php";
include "../Controller/BarangController.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BelanjaIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Asset/css/Index.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">BelanjaIn</a>
            <div class="navbar-expand-md d-flex flex-row">
                <div class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="#"><img src="../Asset/image/cart.png" alt="" width="30" /></a>
                </div>
                <div class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle m-auto text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="toggler">
                        <img src=" ../Asset/image/user.png" alt="" class="rounded-circle" width="35" height="35" />
                        <span id="usernameField">Username</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Logout</a></li>
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
                        foreach ($keranjang->getKeranjangById(1) as $k) {
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
                                        <p class="fs-5 text-center"><?= $b["harga"] ?></p>
                                    </td>
                                    <td data-th="Jumlah">
                                        <p class="fs-5 text-center"><?= $k["jumlah"] ?></p>
                                    </td>
                                    <td data-th="actions">
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-warning border-secondary me-1" onclick="promptJumlah()"><img src="../Asset/image/edit.png" alt=""></button>
                                            <button type="button" class="btn btn-danger border-secondary"><img src="../Asset/image/trash.png" alt=""></button>
                                        </div>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-6 col-md-4 col-lg-3 d-flex align-items-end">
                <a class="btn btn-secondary mt-3" href="./Index.php" role="button">Continue Shopping</a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 d-flex flex-column ms-auto">
                <div class="pe-md-4">
                    <h4 class="">Total:</h4>
                    <h1>Rp. <?= number_format($total) ?></h1>
                    <form action="">
                        <input type="hidden" name="id">
                        <input type="hidden" name="total">
                        <input class="btn btn-primary w-100 mt-3" type="submit" value="Checkout">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../Asset/js/ResponsiveNavUser.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        function promptJumlah() {
            $newJumlah = prompt("masukkan jumlah baru");
            console.log($newJumlah);
        }
    </script>
</body>

</html>