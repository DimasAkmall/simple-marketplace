<?php
session_start();
include "../Controller/BarangController.php";
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $username = $_SESSION["username"];
}

$b = $barang->getBarangById($_GET["id"]);
if ($_SESSION["prevPage"] != "Index.php" && $_SESSION["prevPage"] != "Kategori.php") {
    $_SESSION["prevPage"] = "DetailBarang.php";
}
$_SESSION["currentIdBarang"] = $b[0]["id"];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BelanjaIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Asset/css/Index.css">
    <link rel="stylesheet" href="../Asset/css/Scrollbar.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">BelanjaIn</a>
            <?php if (!isset($_SESSION["role"])) : ?>
                <ul class="navbar-nav ms-auto py-1 d-flex flex-row">
                    <a class="btn btn-primary me-2" href="Login.php" role="button">Login</a>
                    <a class="btn btn-secondary" href="Register.php" role="button">Sign up</a>
                </ul>
            <?php else : ?>
                <div class="navbar-expand-md d-flex flex-row">
                    <div class="nav-item d-flex align-items-center">
                        <a class="nav-link" href="./Keranjang.php?id=<?= $id ?>"><img src="../Asset/image/cart.png" alt="" width="30" /></a>
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
    <div class="container mt-5" style="padding-top:2.4rem;">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card cardbg text-dark">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="images ">
                                <img class="w-100 rounded-start" src="../Asset/image/<?= $b[0]["kategori"] ?>/<?= $b[0]["gambar"] ?>" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 d-flex align-items-center">
                            <div class="product p-3 w-100 h-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <?php if ($_SESSION["prevPage"] == "Kategori.php") { ?>
                                            <a class="btn btn-secondary mt-3" href="<?= $_SESSION["prevPage"] ?>?kategori=<?= $_SESSION["currentKategori"] ?>" role="button">
                                                <img src="../Asset/image/back-button.png" alt="" class="me-1" width="25">
                                                Back
                                            </a>
                                        <?php } else { ?>
                                            <a class="btn btn-secondary mt-3" href="<?= $_SESSION["prevPage"] ?>" role="button">
                                                <img src="../Asset/image/back-button.png" alt="" class="me-1" width="25">
                                                Back
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"><?= $b[0]["kategori"] ?></span>
                                    <h5 class="text-uppercase"><?= $b[0]["namaBrg"] ?></h5>
                                    <div class="ml-2"> <small class="dis-price">Rp. <?= number_format($b[0]["harga"]) ?></small></div>
                                </div>

                                <div class="container">
                                    <div class="overflow-auto" style="height:20vh">
                                        <p><?= $b[0]["desc"] ?></p>
                                    </div>
                                    <div class="Jumlah mt-5">
                                        <h6 class="text-uppercase">Jumlah</h6>
                                    </div>
                                    <form action="../Controller/KeranjangController.php" method="post">
                                        <div class="cart mt-4 mb-4 d-flex flex-column justify-content-end">
                                            <input type="hidden" name="id_user" value="<?= $id ?>">
                                            <input type="hidden" name="id_barang" value="<?= $b[0]["id"] ?>">
                                            <input type="number" name="jumlah" class="form-control form-control-lg text-center" value="1" min="1">
                                            <input class="btn btn-primary ms-auto mt-3 w-100 fs-5" type="submit" name="keranjang" value="Keranjang">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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