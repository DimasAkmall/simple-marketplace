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


    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <h3 class="display-5 mt-5 mb-2 text-center"><img src="foto/BelanjaInLogo.png" alt=""></h3>
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
                            <tr class="bg-primary">
                                <td data-th="Product" class="bg-danger ">
                                    <div class="row ">
                                        <div class="col-md-3 text-left">
                                            <img src="../Asset/image/Mandi/garnier-acno-fight.png" alt="" class="img-fluid d-none d-md-block rounded mb-2" width="80">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h5>Product Name</h5>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Harga"><p class="fs-5">Rp. 20.000,00</p></td>
                                <td data-th="Jumlah">
                                    <input type="number" class="form-control form-control-lg text-center" value="1">
                                </td>
                                <td class="actions" data-th="">
                                    <div class="text-right">
                                    <button class="btn btn-white border-secondary bg-warning btn-md mb-2">
                                            <img src="../Asset/image/edit.png" alt="">
                                        </button>
                                        <button class="btn btn-white border-secondary bg-danger btn-md mb-2">
                                            <img src="../Asset/image/trash.png" alt="">
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="float-right text-right" style="text-align: right;">
                        <h4>Total:</h4>
                        <h1>Rp 99.000,00</h1>
                    </div>
                </div>
            </div>
            <div class="row container mt-4 d-flex align-items-center">
                <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                    <a href="wellcome.html">
                        <i class="fas fa-arrow-left mr-2"></i> Continue Shopping</a>
                </div>
                <div class="col-sm-6 order-md-2 text-right" style="text-align: right;">
                    <a href="#" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Checkout</a>
                </div>
            </div>
        </div>
    </section>


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