<?php
session_start();
include "../Controller/AdminController.php";

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
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="../Asset/css/StyleAdmin.css">
    <!-- css gg  -->
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/math-plus.css' rel='stylesheet'>
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

        /* Gaya tombol */
        .btn-edit,
        .btn-delete {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            margin-right: 5px;
        }

        /* Gaya tombol saat di-hover */
        .btn-edit:hover,
        .btn-delete:hover {
            background-color: #0062cc;
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
            <div class="container mt-4">
                <div class="row">
                    <div class="container">
                        <div class="card" style="padding: 10px;">
                            <div class="card-header">
                                <div class="content-header">
                                    <h2 class="text-header mb-5">Admin View</h2>
                                    <div class="overflow-auto">
                                        <form action="../Controller/AdminController.php" method="post" class="d-flex flex-row">
                                            <div class="mb-3 d-flex flex-row align-items-center me-3">
                                                <label for="" class="form-label me-3">Username</label>
                                                <input type="text" class="form-control w-auto" id="" name="username">
                                            </div>
                                            <div class="mb-3 d-flex flex-row align-items-center me-3">
                                                <label for="" class="form-label me-3">Password</label>
                                                <input type="password" class="form-control w-auto" id="" name="password">
                                            </div>
                                            <div>
                                                <input class="btn btn-primary" type="submit" name="insertAdmin" value="Add Admin">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 overflow-auto">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($admin->getAll() as $a) {
                                            if ($a["role"] != "superadmin") {
                                        ?>
                                                <tr>
                                                    <td class=" text-center"><?= $no++ ?></td>
                                                    <td><?= $a['username'] ?></td>
                                                    <?php
                                                    $pw = "";
                                                    for ($i = 0; $i < strlen($a["password"]); $i++) {
                                                        $pw .= "*";
                                                    }
                                                    ?>
                                                    <td><?= $pw ?></td>
                                                    <td class="text-center">
                                                        <div class="d-flex flex-row">
                                                            <form action="../Controller/AdminController.php" method="post">
                                                                <input type="hidden" name="id" value="<?= $a["id"] ?>">
                                                                <input type="hidden" id="newUsername<?= $a["id"] ?>" name="newUsername" value="">
                                                                <button class="btn btn-warning border-secondary me-1" type="submit" name="editAdmin" onclick="promptJumlah(<?= $a['id'] ?>)"><img src="../Asset/image/edit.png" alt=""></button>
                                                            </form>
                                                            <form action="../Controller/AdminController.php" method="post">
                                                                <input type="hidden" name="id" value="<?= $a["id"] ?>">
                                                                <input type="hidden" name="role" value="<?= $a["role"] ?>">
                                                                <button class="btn btn-danger border-secondary" type="submit" name="deleteAdmin"><img src="../Asset/image/trash.png" alt=""></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <?php }
                                        } ?>
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
    <script>
        function promptJumlah(id) {
            newUsername = prompt("masukkan username baru");
            if (newUsername == null) {
                return alert("Ndak boleh yaa!")
            } else {
                document.querySelector("#newUsername" + id).setAttribute("value", "")
                return document.querySelector("#newUsername" + id).setAttribute("value", newUsername)
            }
        }
    </script>
    <!-- Core theme JS-->
    <script src="../Asset/js/scripts.js"></script>
    <script src="../Asset/js/ResponsiveNavUser.js"></script>
</body>

</html>