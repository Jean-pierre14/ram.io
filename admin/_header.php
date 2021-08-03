<?php include '../config/config.jp.php';?>
<?php session_start(); ?>

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