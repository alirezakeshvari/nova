<?php 

// Login

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
        session_unset($_SESSION['notAdmin']);
        header('location:index.php');
        return $result;
    } else {
        $_SESSION['notAdmin'] = 'شماره یا رمز وارد شده اشتباه میباشد.';
        header('location:users.php');
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

function showAll()
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