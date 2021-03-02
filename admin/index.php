<?php
$title = 'پنل مدیریت';
include_once 'page/header.php';

if (isset($_SESSION['admin'])){

} else {
    header('location:login.php?login=failed');
}

$admin = selectAdmin($_SESSION['admin']);
?>

<div>
    <div>
        <?php
            echo $admin['name'];
        ?>
    </div>
</div>

<?php
include_once 'page/footer.php';
?>