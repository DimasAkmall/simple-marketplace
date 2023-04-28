<?php
@include 'config.php';

if (isset($_POST['add_product'])) {
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/' . $product_image;

   if (empty($product_name) || empty($product_price) || empty($product_image)) {
      $message[] = 'Please fill out all fields.';
   } else {
      $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
      $upload = mysqli_query($conn, $insert);
      if ($upload) {
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'New product added successfully.';
      } else {
         $message[] = 'Could not add the product.';
      }
   }
}

if (isset($_GET['delete'])) {
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
   header('location:admin_page.php');
}
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
   <link href="../Asset/css/styles.css" rel="stylesheet" />
   <!-- css gg  -->
   <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="../Asset/css/style1.css">
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
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mt-lg-0">
                     <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../Asset/image/user.png" alt="" class="rounded-circle" width="35" height="35" />Username</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="#!">Logout</a>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>

         <!-- Page content-->
         <div class="container-fluid">
            <h1 class="mt-4 p-3">Tambah</h1>
            <?php
            if (isset($message)) {
               foreach ($message as $msg) {
                  echo '<span class="message">' . $msg . '</span>';
               }
            }
            ?>

            <div class="container">
               <div class="admin-product-form-container">
                  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                     <h3>add a new product</h3>
                     <input type="text" placeholder="enter product name" name="product_name" class="box">
                     <input type="number" placeholder="enter product price" name="product_price" class="box">
                     <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                     <input type="submit" class="btn" name="add_product" value="add product">
                  </form>
               </div>
               <?php
               $select = mysqli_query($conn, "SELECT * FROM products");
               ?>
               <div class="product-display">
                  <table class="product-display-table">
                     <thead>
                        <tr>
                           <th>product image</th>
                           <th>product name</th>
                           <th>product price</th>
                           <th>action</th>
                        </tr>
                     </thead>
                     <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                        <tr>
                           <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                           <td><?php echo $row['name']; ?></td>
                           <td>$<?php echo $row['price']; ?>/-</td>
                           <td>
                              <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                              <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
                           </td>
                        </tr>
                     <?php } ?>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Bootstrap core JS-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Core theme JS-->
   <script src="js/scripts.js"></script>
</body>

</html>