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
    <link rel="stylesheet" href="../Asset/css/styles.css">
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
            <div class="sidebar-heading border-bottom bg-light">BelanjaIn</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Pengguna</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Kategori</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Barang</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">History</a>
            </div>
    </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn p-3" id="sidebarToggle"><i class="gg-menu"></i></button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown ms-3">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="../Asset/image/user.png" alt="" class="rounded-circle" width="20"
                                        height="20" />Username
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Logout</a>
                                </div>
                            </li>
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
                    <div class="row mb-3 widget">
                        <div class="col-md-3 pr-1">
                            <div class="card" style="background-color:#b7e2c3;">
                                <div class="card-body">
                                    <div class="float-left">
                                        <h3 class="value-widget">$ 153.000</h3>
                                        <label class="title-widget">Revenue</label>
                                    </div>
                                    <div class="float-right">
                                        <i class="mdi mdi-cash-usd-outline mdi-48px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 pr-1">
                            <div class="card" style="background-color:#FFF4D2;">
                                <div class="card-body">
                                    <div class="float-left">
                                        <h3 class="value-widget">20</h3>
                                        <label class="title-widget">Sales</label>
                                    </div>
                                    <div class="float-right">
                                        <i class="mdi mdi-cart mdi-48px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 pr-1">
                            <div class="card text-white bg-info">
                                <div class="card-body">
                                    <div class="float-left">
                                        <h3 class="value-widget">20</h3>
                                        <label class="title-widget">Customer</label>
                                    </div>
                                    <div class="float-right">
                                        <i class="mdi mdi-ticket-account mdi-48px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-dark">
                                <div class="card-body">
                                    <div class="float-left">
                                        <h3 class="value-widget">20</h3>
                                        <label class="title-widget">Employee</label>
                                    </div>
                                    <div class="float-right">
                                        <i class="mdi mdi-gift mdi-48px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row basic mb-3">
                        <div class="col-md-6 pr-1">
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
                    </div>
                </div>
            </main>
        </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>