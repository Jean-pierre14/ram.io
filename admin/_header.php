<?php include '../config/config.jp.php';?>
<?php session_start(); ?>

<?php
    if(!isset($_SESSION['username'])){
        header("Location: ../login.php");
    }else{
        $id = $_SESSION['id'];
        $email = $_SESSION['email'];
        $UserName = $_SESSION['username'];
        $checkAuth = mysqli_query($con, "SELECT id,username FROM employees_tb WHERE id = $id AND username = '$UserName' AND email = '$email'");
        

        if(@mysqli_num_rows($checkAuth) == 1){
            $coll = 1;
        }else{
            header("Location: ../login.php");
        }
    }
?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ramail.org</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Ghost and Titans">
    <link rel="shortcut icon" href="./assets/images/ramallLogo.png" type="image/x-icon">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="main.07a59de7b920cd76b874.css" rel="stylesheet">
    <style>
    ::-webkit-scrollbar{
        width: 5px;
    }
    ::-webkit-scrollbar-thumb{
        background-color: coral;
    }
    ::-webkit-scrollbar-track{
        background-color: #ccc;
    }
    .list-group-item-action{
        cursor: pointer;
    }
    .UI{
        position: relative;
        width: 100%;
        margin: 10px 0;
        overflow-y: scroll;
        overflow-x:unset;
        height: calc(70vh - 50px)
    }
    .event {
        visibility: hidden;
        transition: all ease 0.2s;
    }

    table tr:hover .event {
        visibility: visible;
    }
    .content{
        width: 100%;
        padding: 20px;
        margin: 10px auto;
        border-radius: 0.9rem;
    }
    .delete{
        visibility: hidden;
        transition: all ease 0.3s;
    }
    ul li:hover .delete{
        visibility: visible;
    }

    </style>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>

<body>
    <?php include 'add.php';?>