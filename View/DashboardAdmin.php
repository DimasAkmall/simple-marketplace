<?php
session_start();

if (!isset($_SESSION["role"])) {
    header("Location: Login.php");
} else if ($_SESSION["role"] == "user") {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../Controller/LogoutController.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
    <?php if ($_SESSION["role"] == "superadmin") { ?>
        <h1>SUPERADMIN</h1>
    <?php } else if ($_SESSION["role"] == "admin") { ?>
        <h1>ADMIN</h1>
    <?php } ?>
</body>

</html>