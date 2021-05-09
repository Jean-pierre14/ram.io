<?php
$numero = "(+243) 976-353-543";

$con = mysqli_connect("localhost", "root", "", "ramall") or die("Couln't connect to the database");

$errors = [];
$username = '';
$password = '';

if (isset($_POST['signIn'])) {
    $username = mysqli_real_escape_string($con, trim(htmlentities($_POST['username'])));
    $password = mysqli_real_escape_string($con, trim(htmlentities($_POST['password'])));

    header("Location: ./admin/");
}
