<?php
session_start();
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $username = $_SESSION["username"];
}

$_SESSION["prevPage"] = "Index.php";

include "../Controller/KategoriController.php";
include "../Controller/BarangController.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BelanjaIn | Situs Belanja Abal-abal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Asset/css/Index.css">
    <link rel="stylesheet" href="../Asset/css/Scrollbar.css">
    <style>
        .zoom {
            transition: transform .5s;
        }

        .zoom:hover {
            transform: scale(1.05);

        }

        .shadow {
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
            outline: none;

        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: linear-gradient(108deg,#0d6efd 20%, #ffc107);">
        <div class="container">
            <a class="navbar-brand" href="./Index.php"><img src="../Asset/image/BelanjainLogoNav.png" alt="" srcset=""></a>
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

    <!-- BANNER -->
    <div class="container mt-5" style="padding-top:2.4rem;">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img src="../Asset/image/Banner/promo.png" class="w-100" alt="..." class="d-block">
                </div>
                <div class="carousel-item active">
                    <img src="../Asset/image/Banner/lebaran fes.png" class="w-100" alt="..." class="d-block">
                </div>
                <div class="carousel-item active">
                    <img src="../Asset/image/Banner/gratis.png" class="w-100" alt="..." class="d-block">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- CATEGORY -->
    <div class="container mt-4">
        <div class="p-3 rounded" style="background-color :#E5E0F0">
            <h6>KATEGORI</h6>
            <div class="d-flex flex-row overflow-auto ps-md-4 ps-lg-0 box-category">
                <?php foreach ($kategori->getAll() as $k) { ?>
                    <a class="btn btn-light p-3 me-3" href="Kategori.php?kategori=<?= $k["kategori"] ?>" role="button">
                        <img src="../Asset/image/Kategori/<?= $k["gambar"] ?>" alt="" width="40">
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container mt-4">
        <h3 class="mb-3">Produk Terbaru</h3>
        <div class="row">
            <?php foreach ($barang->getAllNew() as $b) { ?>
                <div class="col-6 col-md-3 col-lg-2 mb-4 zoom">
                    <div class="card h-100 border-0 shadow">
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
    <div class="container-fluid mt-4 bg-light">
        <div class="container">
            <div class="row d-flex justify-content-between pt-2 pb-5">
                <div class="col-6 col-md-2 mb-3">
                    <h5 class="text-dark">Kategori</h5>
                    <?php foreach ($kategori->getAll() as $k) { ?>
                        <a class="d-block text-decoration-none link-secondary" href="Kategori.php?kategori=<?= $k["kategori"] ?>"><?= $k["kategori"] ?></a>
                    <?php } ?>
                </div>
                <div class="col-6 col-md-2 mb-3 text-secondary">
                    <h5 class="text-dark">Company</h5>
                    <p class="m-0">About us</p>
                    <p class="m-0">Contact us</p>
                    <p class="m-0">Privacy police</p>
                    <p class="m-0">Terms of service</p>
                </div>
                <div class="col-8 col-md-2 mb-3 text-secondary">
                    <h5 class="text-dark">Team</h5>
                    <p class="m-0">Riyo Hendry Hermawan</p>
                    <p class="m-0">Gilang Hidayatullah</p>
                    <p class="m-0">Dimas Akmal Widi Pradana</p>
                </div>
                <div class="col-12 col-md-5 mb-3 h-100">
                    <div class="card border-0 bg-light shadow p-5  mt-4"><img class="my-3" src="../Asset/image/BelanjainLogo.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <script src="../Asset/js/ResponsiveNavUser.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>