<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/LoginSingup.css">
</head>
<body>
<section class="vh-100 bgcolor">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card cardbg text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5">

              <div class="text-center" >
                <img src="../Belanjain/foto/Belanjainlogo.png" alt="">
              </div>

              <div class="form-outline form-white mb-4 mt-2">
                <label class="form-label"><b>Username</b></label>
                <input type="email" id="typeEmailX" placeholder="Username" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-4 mt-2" >
                <label class="form-label"><b>Password</b></label>
                <input type="password" id="typePasswordX" placeholder="···················" class="form-control form-control-lg" />
              </div>
              <div class="form-check mt-2">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label"><b>Admin</b></label>
              </div>
              <button class="btn btn-outline-light bg-primary px-5 w-100 mt-3" type="submit">Login</button>
              <div class="text-center mt-3">
                <p class="mb-0">Don't have an account? <a href="Singup.php" class="text-dark -50 fw-bold">Sign Up</a></p>
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>