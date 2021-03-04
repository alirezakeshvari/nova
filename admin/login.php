<?php
include_once "include/init.php";

if (isset($_SESSION['admin'])) {
    header('location:index.php');
}

if (isset($_POST['btnlogin'])) {
    $_SESSION['phone'] = $_POST['phone'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    login($phone , $password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <title>ورود به پنل مدیریت</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row m-0">
            <div style="margin-top: 100px;"></div>
            
            <?php
            if (isset($_GET['login'])) {
            ?>
            <div class="p-2 col-6 offset-3 alert alert-warning">
                <p>Please Login first!</p>
            </div>
            <?php } ?>
            <?php
            if (isset($_GET['auth'])) {
            ?>
            <div class="p-2 col-6 offset-3 alert alert-danger">
                <p>Login error! Phone number or password is incorrect</p>
            </div>
            <?php } ?>

            <div class="col-6 offset-3 bg-light mt-1">
                <h1 class="text-center mt-3">Login</h1>
                <form action="" method="post">
                    <div class="form-group text-center">
                        <input type="text" name="phone" class="form-control mt-1" placeholder="Phone Number" <?php if(isset($_SESSION['phone'])){echo "value={$_SESSION['phone']}";} ?> required>
                    </div>
                    <div class="form-group text-center">
                        <input type="password" name="password" class="form-control mt-1" placeholder="Password" required>
                    </div>
                    <button name="btnlogin" class="btn btn-primary col-12 mt-1">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>