<?php
session_start();
include "../Controller/BarangController.php";
include "../Controller/KategoriController.php";
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $username = $_SESSION["username"];
}

$_SESSION["prevPage"] = "Kategori.php";
$_SESSION["currentKategori"] = $_GET["kategori"];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BelanjaIn | <?= $_GET["kategori"] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Asset/css/Index.css">
    <link rel="stylesheet" href="../Asset/css/Scrollbar.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./Index.php">BelanjaIn</a>
            <?php if (!isset($_SESSION["role"])) : ?>
                <ul class="navbar-nav ms-auto py-1 d-flex flex-row">
                    <a class="btn btn-primary me-2" href="Login.php" role="button">Login</a>
                    <a class="btn btn-secondary" href="Signup.php" role="button">Sign up</a>
                </ul>
            <?php else : ?>
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
            <?php endif; ?>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container mt-5" style="padding-top:2.4rem">
        <div class="d-flex mb-3">
            <a class="btn btn-secondary text-dark me-1" href="./Index.php" role="button"><img src="../Asset/image/back-button.png" alt="" class="me-1" width="25"> Back</a>
            <h3><?= $_GET["kategori"] ?></h3>
        </div>
        <div class="row">
            <?php foreach ($barang->getBarangByKategori($_GET["kategori"]) as $b) { ?>
                <div class="col-6 col-md-3 col-lg-2 mb-4">
                    <div class="card h-100">
                        <img src="../Asset/image/<?= $b["kategori"] ?>/<?= $b["gambar"] ?>" class="card-img-top w-auto m-2" alt="...">
                        <div class="card-body d-flex justify-content-between flex-column">
                            <div>
                                <h5 class="card-title"><?= $b["namaBrg"] ?></h5>
                                <p class="card-text">Rp. <?= number_format($b["harga"]) ?></p>
                            </div>
                            <a href="./DetailBarang.php?id=<?= $b["id"] ?>" class="btn btn-primary w-100 mt-3">Beli</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <!-- FOOTER -->
    <!-- <div class="container-fluid mt-4 bg-secondary">
        <div class="container">
            <div class="row d-flex justify-content-between pt-2 pb-5">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Kategori</h5>
                    <p class="m-0">1</p>
                    <p class="m-0">2</p>
                    <p class="m-0">3</p>
                    <p class="m-0">4</p>
                    <p class="m-0">5</p>
                    <p class="m-0">6</p>
                    <p class="m-0">7</p>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h5>About</h5>
                    <p class="m-0">1</p>
                    <p class="m-0">2</p>
                    <p class="m-0">3</p>
                    <p class="m-0">4</p>
                </div>
                <div class="col-8 col-md-2 mb-3">
                    <h5>Contact</h5>
                    <p class="m-0">1</p>
                    <p class="m-0">2</p>
                    <p class="m-0">3</p>
                </div>
                <div class="col-12 col-md-5 mb-3">
                    <h5>LOGO BELANJAIN</h5>
                </div>
            </div>
        </div>
    </div> -->

    <script src="../Asset/js/ResponsiveNavUser.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

</html>