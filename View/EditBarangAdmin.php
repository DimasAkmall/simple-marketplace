<?php
session_start();
include "../Controller/BarangController.php";
include "../Controller/KategoriController.php";

$username = $_SESSION["username"];
$b = $barang->getBarangById($_POST["id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Admin</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="../Asset/css/StyleAdmin.css">
    <!-- css gg  -->
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/math-plus.css' rel='stylesheet'>
    <style>
        label {
            width: 10rem;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light fs-4 py-1 fw-semibold"><img src="../Asset/image/BelanjainLogoNav.png" alt="" height="43"></div>
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
        <div id="page-content-wrapper" style="background-color: #f1f1f1;">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
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
            <div class="container mt-4 px-md-5">
                <div class="card shadow p-5 mx-md-5">
                    <h1 class="mb-4">Edit Barang</h1>
                    <form action="../Controller/BarangController.php" method="post" class="d-flex flex-column" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $b[0]["id"] ?>">
                        <input type="hidden" name="gambarBackup" value="<?= $b[0]["gambar"] ?>">
                        <div class="mb-3 d-flex align-items-center">
                            <label for="" class="form-label pe-3">Kode Barang:</label>
                            <input type="text" class="form-control w-auto" id="" name="kode" value="<?= $b[0]["kodeBrg"] ?>" readonly>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="" class="form-label pe-3">Nama Barang:</label>
                            <input type="text" class="form-control" id="" name="nama" style="width:30rem;" value="<?= $b[0]["namaBrg"] ?>" required>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="" class="form-label pe-3">Harga:</label>
                            <input type="number" class="form-control w-auto" id="" name="harga" value="<?= $b[0]["harga"] ?>" required min="0">
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="" class="form-label">Gambar:</label>
                            <input type="file" class="form-control" id="" name="gambar" style="width:30rem" accept="image/png, image/jpeg, image/jpg">
                        </div>
                        <div class=" mb-3 d-flex align-items-start">
                            <label for="" class="form-label pe-3">Deskripsi:</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="" name="desc" style="width:30rem;height:100px;"><?= $b[0]["desc"] ?></textarea>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="" class="form-label pe-3">Kategori:</label>
                            <select name="kategori" id="" class="rounded border w-auto p-1">
                                <?php foreach ($kategori->getAll() as $k) { ?>
                                    <option value="<?= $k["id"] ?>" <?php if ($b[0]["kategori"] == $k["kategori"]) {
                                                                        echo "selected";
                                                                    } ?>><?= $k["id"] ?> - <?= $k["kategori"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit" style="width:10rem;" name="editBrg">Save Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../Asset/js/scripts.js"></script>
    <script src="../Asset/js/ResponsiveNavUser.js"></script>
</body>

</html>