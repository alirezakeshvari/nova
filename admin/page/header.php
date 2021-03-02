<?php
include_once 'include/init.php';
if (isset($_SESSION['admin'])){

} else {
    header('location:login.php?login=failed');
}

$admin = selectAdmin($_SESSION['admin']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    
<div class="container">
    <div class="header">
        <ul>
            <li><a href="#">خانه</a></li>
            <li><a href="#">کاربران</a></li>
            <li><a href="products.php">محصولات</a></li>
            <li><a href="exit.php">خروج</a></li>
        </ul>
    </div>
</div>