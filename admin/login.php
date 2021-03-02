<?php
include_once "include/init.php";

if (isset($_POST['btnlogin'])) {
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
    <title>ورود به پنل مدیریت</title>
</head>
<body>
    <div>
        <?php 
            if (isset($_GET['login'])){
                echo "<p>ابتدا وارد شوید</p>";
            } 
        ?>
    </div>
    <div>
        <form action="" method="POST">
            <input type="text" name="phone" placeholder="تلفن همراه">
            <input type="password" name="password" placeholder="رمز عبور">
            <button name="btnlogin">ورود</button>
        </form>
    </div>
    <?php
    $users = showAll();
    foreach ($users as $user) 
    {
        echo $user['name'];
        echo '<hr>';
    }
    ?>
</body>
</html>