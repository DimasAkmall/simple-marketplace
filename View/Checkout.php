<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makasih :)</title>
    <link rel="stylesheet" href="../Asset/css/Checkout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-image: url(../Asset/image/backgroundcekout.png);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="popup text-light" id="popup">
            <img src="../Asset/image/Checkout/404-tick.png">
            <h2>Makasih ! :)</h2>
            <p>Detail Belanja boleh minta ke Kasir ya</p>
            <button type="button" onclick="closePopup()">OK</button>
        </div>
    </div>
    <script>
        window.addEventListener("load", () => {
            popup.classList.add("open-popup");

        })

        function closePopup() {
            popup.classList.remove("open-popup");
            window.location.href = '../View/Keranjang.php'
        }
    </script>

</body>

</html>