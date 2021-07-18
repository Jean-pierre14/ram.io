<?php

$con = mysqli_connect("localhost", "root", "", "ramall") or die("Couln't connect to the database");

$output = '';

if(isset($_POST['action'])){
    if($_POST['action'] == 'GetKid'){
        $id = $_POST['id'];
        $sql = mysqli_query($con, "SELECT children FROM employees_tb WHERE id = $id");
        $d = mysqli_fetch_array($sql);
        $n = $d['children'];

        for($i = 0; $i <= $n; $i++){
            $output .= '
            <div class="form-group">
                <label for="kid">Enter the name</label>
                <input type="text" name="kid[]" placeholder="Kid" class="form-control"/>
            </div>
            ';
        }
        print $output;
    }
    if($_POST['action'] == 'childrenCount'){
        $USER = $_POST['userId'];
        $num = count($_POST['kid']);
        if($num > 0){
            for($i = 0; $i < $num; $i++){
                if(trim($_POST['kid'][$i]) != ''){
                    $sql = mysqli_query($con, "INSERT INTO children_tb(employee_id, `name`) VALUES('$USER', '".mysqli_real_escape_string($con, $_POST['kid'][$i])."')");
                }
            }
            if($sql){
                print 'success';
            }
        }
    }
}