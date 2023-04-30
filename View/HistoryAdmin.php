<?php
session_start();
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
        .card-header {
            outline: none;
            border: none;
        }

        .card-body {
            outline: none;
            border: none;
            outline: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            outline: none;
            border: none;
            outline: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table.rounded {
            border-radius: 10px;
            overflow: hidden;
        }

        /* Menentukan warna latar belakang untuk baris genap */
        .table-striped tbody tr:nth-of-type(even) {
            background-color: #f8f9fa;
            border-collapse: collapse;
            width: 100%;
        }

        /* Menghilangkan garis pada bagian isi tabel */
        .table td,
        .table th {
            border: none;
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Menghilangkan garis di sisi kanan dan kiri pada sel tabel */
        .table td:not(:last-child),
        .table th:not(:last-child) {
            border-right: none;
            border-left: none;
        }
    </style>
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn p-3" id="sidebarToggle"><i class="gg-menu"></i></button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown ms-3">
                                <a class="nav-link dropdown-toggle p-0" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="../Asset/image/user.png" alt="" class="rounded-circle me-1" width="35" height="35" />
                                    <span id="usernameField"><?= $username ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../Controller/LogoutController.php">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page content-->
            <div class="container mt-4">
                <h6><? //echo //$message 
                    ?></h6>
                <div class="row">
                    <div class="container ">
                        <div class="card" style="background-color: #EBECED;">
                            <div class="card-header">
                                <div class="content-header mt-1 mb-3 ml-3">
                                    <h2 class="text-header">Histori Transaksi</h2>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped rounded">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($transaksi->getAll() as $t) { ?>
                                            <tr>
                                                <td><?= $t["idTransaksi"] ?></td>
                                                <td><?= $t["username"] ?></td>
                                                <td><?= $t["tglTransaksi"] ?></td>
                                                <td><?= number_format($t["total"]) ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../Asset/js/scripts.js"></script>
</body>

</html>