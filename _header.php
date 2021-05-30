<!DOCTYPE html>
<html lang="zxx" class="no-js">

<!-- Mirrored from preview.colorlib.com/theme/coffee/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 May 2021 08:36:57 GMT -->

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/fav.html">

    <meta name="author" content="Jean-pierre14">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta charset="UTF-8">

    <title>RamaLL</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php include './config/config.jp.php'; ?>

    <?php
    session_start();
    if ($_SESSION['autho'] == 1) {
        header("Location: ./admin/");
    } elseif ($_SESSION['autho'] == 2) {
        header("Location: ./boss/");
    } else {
        header("Location: ./users/");
    }