<?php
session_start();
include "../Controller/BarangController.php";
include "../Controller/KategoriController.php";
include "../Controller/UserController.php";
include "../Controller/AdminController.php";
include "../Controller/TransaksiController.php";

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="../Asset/css/StyleAdmin.css">
    <!-- css gg  -->
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
    <style>
        /* CSS untuk menghilangkan border pada card */
        .card {
            box-shadow: 0 1px 6px 0 rgba(49, 53, 59, 0.12);
            border: none;
            opacity: 0.9;
        }

        .title-body {
            font-weight: 700;
            font-size: 22px;
            color: #0086ad;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light fs-4 py-2">BelanjaIn</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="DashAdmin.php">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="BarangAdmin.php">Barang</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="KategoriAdmin.php">Kategori</a>

                <?php if ($_SESSION["role"] == "superadmin") { ?>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="AdminAdmin.php">Administrator</a>
                <?php } else { ?>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="UserAdmin.php">Pengguna</a>
                <?php } ?>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="HistoryAdmin.php">History</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn p-3" id="sidebarToggle"><i class="gg-menu"></i></button>
                    <div class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle m-auto text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="toggler">
                            <img src=" ../Asset/image/user.png" alt="" class="rounded-circle" width="35" height="35" />
                            <span id="usernameField"><?= $username ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="../Controller/LogoutController.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page content-->
            <main class="" role="main">
                <div class="container">
                    <div class="content-header mt-1 mb-3 ml-3">
                        <h2 class="text-header">Dashboard</h2>
                    </div>
                    <div class="row widget">
                        <div class="col-md-3 mb-3">
                            <div class="card" style="background-color:#b7e2c3;">
                                <div class="card-body">
                                    <div class="float-left">
                                        <?php
                                        $jumlah = 0;
                                        foreach ($barang->getAll() as $b) {
                                            $jumlah++;
                                        } ?>
                                        <h3 class="value-widget"><?= $jumlah ?></h3>
                                        <label class="title-widget">Barang</label>
                                    </div>
                                    <div class="float-right">
                                        <i class="mdi mdi-cash-usd-outline mdi-48px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card" style="background-color:#FFF4D2;">
                                <div class="card-body">
                                    <div class="float-left">
                                        <?php
                                        $jumlah = 0;
                                        foreach ($kategori->getAll() as $b) {
                                            $jumlah++;
                                        } ?>
                                        <h3 class="value-widget"><?= $jumlah ?></h3>
                                        <label class="title-widget">Kategori</label>
                                    </div>
                                    <div class="float-right">
                                        <i class="mdi mdi-cart mdi-48px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($_SESSION["role"] == "superadmin") { ?>
                            <div class="col-md-3 mb-3">
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <div class="float-left">
                                            <?php
                                            $jumlah = 0;
                                            foreach ($admin->getAll() as $a) {
                                                if ($a["role"] != "superadmin") {
                                                    $jumlah++;
                                                }
                                            } ?>
                                            <h3 class="value-widget"><?= $jumlah ?></h3>
                                            <label class="title-widget">Admin</label>
                                        </div>
                                        <div class="float-right">
                                            <i class="mdi mdi-ticket-account mdi-48px"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="col-md-3 mb-3">
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <div class="float-left">
                                            <?php
                                            $jumlah = 0;
                                            foreach ($user->getAll() as $b) {
                                                $jumlah++;
                                            } ?>
                                            <h3 class="value-widget"><?= $jumlah ?></h3>
                                            <label class="title-widget">User</label>
                                        </div>
                                        <div class="float-right">
                                            <i class="mdi mdi-ticket-account mdi-48px"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                        <div class="col-md-3 mb-3">
                            <div class="card text-white bg-dark">
                                <div class="card-body">
                                    <div class="float-left">
                                        <?php
                                        $jumlah = 0;
                                        foreach ($transaksi->getAll() as $b) {
                                            $jumlah++;
                                        } ?>
                                        <h3 class="value-widget"><?= $jumlah ?></h3>
                                        <label class="title-widget">History</label>
                                    </div>
                                    <div class="float-right">
                                        <i class="mdi mdi-gift mdi-48px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row basic mb-3">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <label class="title-body">Chart Daily</label>
                                    <canvas style="width: 100%"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <label class="title-body">Todo List</label>
                                    <canvas style="width: 100%" height="140"></canvas>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../Asset/js/scripts.js"></script>
    <script src="../Asset/js/ResponsiveNavUser.js"></script>
</body>

</html>