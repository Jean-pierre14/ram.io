<?php include '../config/config.jp.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
}else{
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    $sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE username = '".$_SESSION['username']."' AND id = $id");
    if(mysqli_num_rows($sql) == 1){
        // return true;
    }else{
        header("Location: ../login.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Jean-pierre14 and Titans">
    <link rel="stylesheet" href="../admin/main.07a59de7b920cd76b874.css">
    <link rel="shortcut icon" href="../admin/assets/images/ramallLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Ramail.org
        <?= $_SESSION['username']; ?>
    </title>
</head>

<body>