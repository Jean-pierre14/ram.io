<?php
$con = mysqli_connect("localhost", "root", "", "ramall") or die("Couln't connect to the database");

$number = 1;
if($number > 0){
    for($i=0; $i < $number; $i++){
        if(trim($_POST['childrenName'][$i]) != ''){
            $sql = mysqli_query($con, "INSERT INTO children_tb(employee_id, `name`) VALUES($userid, '".mysqli_real_escape_string($con, $_POST['childrenName'][$i])."')");
            if($sql){
                $output .= 'success';
            }else{
                $output .= 'error';
            }
        }
    }
}