<?php
include_once "include/init.php";

if (isset($_POST['btnlogin'])) {
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    login($phone , $password);
}

if (isset($_GET['login'])){
    $msg = 'ابتدا وارد شوید';
    phpAlert($msg);
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
    <div class="wrapper">
        <div class="title">
            Login Form
        </div>
        <form action="" method="POST">
            <div class="field">
                <input name="phone" type="text" required>
                <label>Phone Number</label>
            </div>
            <div class="field">
                <input name="password" type="password" required>
                <label>Password</label>
                </div>
            <div class="field">
                <input name="btnlogin" type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>