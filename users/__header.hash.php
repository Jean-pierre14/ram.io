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
    <style>
        * {
            box-sizing: border-box
        }
        ::-webkit-scrollbar{
            width: 5px;
        }
        ::-webkit-scrollbar-track{
            background-color: #ccc;
        }
        ::-webkit-scrollbar-thumb{
            background-color: coral;
        }
        #ListUser{
            position: relative;
            width: 100%;
            height: calc(100vh - 100px);
            overflow-y: auto;
        }
        #messageOfThisUser{
            position: relative;
            width: 100%;
            height: 400px;
        }
        #profileContainer,
        #messageContainer,
        #salaryContainer
        {
            width: 100%;
            max-height: calc(100vh - 70px);
            overflow-y:auto;
        }

        .msgBox {
            position: relative;
            padding: 10px;
            width: 70%;
            display: block;
            margin: 5px 0;
            border-radius: 0.5rem;
            background: rgb(248, 253, 179);
        }
    </style>
</head>

<body>