<?php 

// Alert

function phpAlert($msg)
{
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

// Admin Account

function login($phone, $password)
{
    global $connect;
    $sql = "select * from user_table where phone=? and password=? and role=?";
    $result = $connect->prepare($sql);
    $result->bindValue(1, $phone);
    $result->bindValue(2, md5($password));
    $result->bindValue(3, 'admin');
    $result->execute();

    if ($result->rowCount())
    {   
        $_SESSION['admin'] = $phone;
        header('location:index.php');
        return $result;
    } else {
        header('location:login.php?auth=error');
        return false;
    }
}

function selectAdmin($phone)
{
    global $connect;
    $sql = 'select * from user_table where phone=?';
    $result = $connect->prepare($sql);
    $result->bindValue(1, $phone);
    $result->execute();

    if ($result->rowCount())
    {
        return $result->fetch(PDO::FETCH_ASSOC);
    } else {
        return false;
    }
}

// Products

function showAllProducts()
{
    global $connect;
    $sql = 'select * from product_table';
    $result = $connect->prepare($sql);
    $result->execute();

    if ($result->rowCount())
    {
        return $result->fetchAll(PDO::FETCH_ASSOC);
    } else {
        return false;
    }
}

// Users

function showAllUsers()
{
    global $connect;
    $sql = 'select * from user_table';
    $result = $connect->prepare($sql);
    $result->execute();

    if ($result->rowCount())
    {
        return $result->fetchAll(PDO::FETCH_ASSOC);
    } else {
        return false;
    }
}

?>