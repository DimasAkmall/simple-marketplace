<?php
include "../Controller/BarangController.php";

$b = $barang->getBarangById($_GET["id"]);
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
                    <a class="nav-link" href="./Keranjang.php"><img src="../Asset/image/cart.png" alt="" width="30" /></a>
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
                            <div class="product p-4 w-100 h-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i>
                                        <a href="wellcome.html">
                                            <a href="Index.php" class="fs-5 text-decoration-none text-dark"><img src="../Asset/image/back-button.png" alt=""> Back</a>
                                    </div> <i class="fa fa-shopping-cart text-muted"></i>
                                </div>
                                <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"><?= $b[0]["kategori"] ?></span>
                                    <h5 class="text-uppercase"><?= $b[0]["namaBrg"] ?></h5>
                                    <div class="ml-2"> <small class="dis-price">Rp. <?= $b[0]["harga"] ?></small></div>
                                </div>

                                <div class="container">
                                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis eligendi fugiat blanditiis veniam! Repellat velit, quidem eius ipsam quisquam facere error corrupti praesentium assumenda voluptates nisi, culpa, voluptate dignissimos omnis.</p> -->
                                    <p><?= $b[0]["desc"] ?></p>
                                    <div class="Jumlah mt-5">
                                        <h6 class="text-uppercase">Jumlah</h6>
                                        <input type="number" class="form-control form-control-lg text-center" value="1">
                                    </div>
                                    <div class="cart mt-4 mb-4 d-flex justify-content-end">
                                        <button class="btn btn-primary text-uppercase mr-2 px-4">Keranjang</button>
                                        <i class="fa fa-heart text-muted"></i>
                                        <i class="fa fa-share-alt text-muted"></i>
                                    </div>
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
    <div class="container-fluid mt-4 bg-secondary">
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
    </div>

    <script src="../Asset/js/ResponsiveNavUser.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>