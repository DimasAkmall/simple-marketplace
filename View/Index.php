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
            <?php if (isset($_SESSION["role"])) : ?>
                <ul class="navbar-nav ms-auto py-1">
                    <button type="button" class="btn btn-primary me-2">Login</button>
                    <button type="button" class="btn btn-secondary">Sign Up</button>
                </ul>
            <?php else : ?>
                <div class="navbar-expand-md d-flex flex-row">
                    <div class="nav-item d-flex align-items-center">
                        <a class="nav-link" href="KeranjangBarang.php"><img src="../Asset/image/cart.png" alt="" width="30" /></a>
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
        <div class="p-3 bg-secondary rounded">
            <p class="d-block">CATEGORY</p>
            <div class="d-flex flex-row justify-content-evenly overflow-auto pe-3">
                <div class="box p-3 bg-dark rounded ms-3">
                    <img src="../Asset/image/Kategori/snack.png" alt="" width="40">
                </div>
                <div class="box p-3 bg-dark rounded ms-3">
                    <img src="../Asset/image/Kategori/soft-drink.png" alt="" width="40">
                </div>
                <div class="box p-3 bg-dark rounded ms-3">
                    <img src="../Asset/image/Kategori/soap.png" alt="" width="40">
                </div>
                <div class="box p-3 bg-dark rounded ms-3">
                    <img src="../Asset/image/Kategori/cigarettes.png" alt="" width="40">
                </div>
                <div class="box p-3 bg-dark rounded ms-3">
                    <img src="../Asset/image/Kategori/pills.png" alt="" width="40">
                </div>
                <div class="box p-3 bg-dark rounded ms-3">
                    <img src="../Asset/image/Kategori/grocery.png" alt="" width="40">
                </div>
                <div class="box p-3 bg-dark rounded ms-3">
                    <img src="../Asset/image/Kategori/cleaning.png" alt="" width="40">
                </div>
                <div class="box p-3 bg-dark rounded ms-3">
                    <img src="../Asset/image/Kategori/pencil-box.png" alt="" width="40">
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 col-md-3 col-lg-2 mb-4">
                <div class="card">
                    <img src="../Asset/image/Makanan/chitato-rl-35gr.png" class="card-img-top w-auto m-2" alt="...">
                    <div class=" card-body">
                        <h5 class="card-title">Chitato Rumput Laut 35gr</h5>
                        <p class="card-text">Rp.8000</p>
                        <a href="#" class="btn btn-primary w-100">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 mb-4">
                <div class="card">
                    <img src="../Asset/image/Makanan/chitato-rl-35gr.png" class="card-img-top w-auto m-2" alt="...">
                    <div class=" card-body">
                        <h5 class="card-title">Chitato Rumput Laut 35gr</h5>
                        <p class="card-text">Rp.8000</p>
                        <a href="#" class="btn btn-primary w-100">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 mb-4">
                <div class="card">
                    <img src="../Asset/image/Makanan/chitato-rl-35gr.png" class="card-img-top w-auto m-2" alt="...">
                    <div class=" card-body">
                        <h5 class="card-title">Chitato Rumput Laut 35gr</h5>
                        <p class="card-text">Rp.8000</p>
                        <a href="#" class="btn btn-primary w-100">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 mb-4">
                <div class="card">
                    <img src="../Asset/image/Makanan/chitato-rl-35gr.png" class="card-img-top w-auto m-2" alt="...">
                    <div class=" card-body">
                        <h5 class="card-title">Chitato Rumput Laut 35gr</h5>
                        <p class="card-text">Rp.8000</p>
                        <a href="#" class="btn btn-primary w-100">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 mb-4">
                <div class="card">
                    <img src="../Asset/image/Makanan/chitato-rl-35gr.png" class="card-img-top w-auto m-2" alt="...">
                    <div class=" card-body">
                        <h5 class="card-title">Chitato Rumput Laut 35gr</h5>
                        <p class="card-text">Rp.8000</p>
                        <a href="#" class="btn btn-primary w-100">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 mb-4">
                <div class="card">
                    <img src="../Asset/image/Makanan/chitato-rl-35gr.png" class="card-img-top w-auto m-2" alt="...">
                    <div class=" card-body">
                        <h5 class="card-title">Chitato Rumput Laut 35gr</h5>
                        <p class="card-text">Rp.8000</p>
                        <a href="#" class="btn btn-primary w-100">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 mb-4">
                <div class="card">
                    <img src="../Asset/image/Makanan/chitato-rl-35gr.png" class="card-img-top w-auto m-2" alt="...">
                    <div class=" card-body">
                        <h5 class="card-title">Chitato Rumput Laut 35gr</h5>
                        <p class="card-text">Rp.8000</p>
                        <a href="#" class="btn btn-primary w-100">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 mb-4">
                <div class="card">
                    <img src="../Asset/image/Makanan/chitato-rl-35gr.png" class="card-img-top w-auto m-2" alt="...">
                    <div class=" card-body">
                        <h5 class="card-title">Chitato Rumput Laut 35gr</h5>
                        <p class="card-text">Rp.8000</p>
                        <a href="#" class="btn btn-primary w-100">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 mb-4">
                <div class="card">
                    <img src="../Asset/image/Makanan/chitato-rl-35gr.png" class="card-img-top w-auto m-2" alt="...">
                    <div class=" card-body">
                        <h5 class="card-title">Chitato Rumput Laut 35gr</h5>
                        <p class="card-text">Rp.8000</p>
                        <a href="#" class="btn btn-primary w-100">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 mb-4">
                <div class="card">
                    <img src="../Asset/image/Makanan/chitato-rl-35gr.png" class="card-img-top w-auto m-2" alt="...">
                    <div class=" card-body">
                        <h5 class="card-title">Chitato Rumput Laut 35gr</h5>
                        <p class="card-text">Rp.8000</p>
                        <a href="#" class="btn btn-primary w-100">Beli</a>
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