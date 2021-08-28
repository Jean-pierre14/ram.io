<?php

$id = $_GET['actionEdit'];

$sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE id =$id");

if(@mysqli_num_rows($sql) > 0){
    $r = mysqli_fetch_array($sql);
    print '
    <div class="bg-white shadow-sm p-2">
        <h4 class="d-flex justify-content-between align-item-center flex-wrap">
            <span>Username</span>
            <span>'.$r['username'].'</span>
        </h4>
        <h4 class="d-flex justify-content-between align-item-center flex-wrap">
            <span>Fullname</span>
            <span>'.$r['fullname'].'</span>
        </h4>
        <h5 class="d-flex justify-content-between align-item-center flex-wrap">
            <span>Email</span>
            <span>'.$r['email'].'</span>
        </h5>
        <h5 class="d-flex justify-content-between align-item-center flex-wrap">
            <span>Salary:</span>
            <span>'.$r['salary'].'</span>
        </h5>
        <p class="d-flex justify-content-between align-item-center flex-wrap">
            <span>Status:</span>
            <span>'.$r['status'].'</span>
        </p>
        <p class="d-flex justify-content-between align-item-center flex-wrap">
            <span>He starts at:</span>
            <span>'.$r['created_at'].'</span>
        </p>
        <a href="retired.php" class="btn btn-link btn-secondary">Back to the list</a>
    </div>
    ';
}else{
    print '<div class="alert alert-danger">
        <p class="text-center">Fuck you :(</p>
    </div>'
}