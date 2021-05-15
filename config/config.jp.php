<?php
$numero = "(+243) 976-353-543";
$prooject_name = "RamaLL";

$con = mysqli_connect("localhost", "root", "", "ramall") or die("Couln't connect to the database");

$errors = [];
$success = [];
$output = '';

$id = "";
$row['id'] = "";

$user = '';
$fullname = '';
$email = '';
$gender = '';
$woman = '';
$children = '';

$password = '';
$password1 = '';
$password2 = '';

if (isset($_POST['signIn'])) {
    $username = mysqli_real_escape_string($con, trim(htmlentities($_POST['username'])));
    $password = mysqli_real_escape_string($con, trim(htmlentities($_POST['password'])));

    header("Location: ./admin/");
}

// Registration

if (isset($_POST['addempl'])) {
    // init variables
    $user = mysqli_real_escape_string($con, trim(htmlentities($_POST['username'])));
    $fullname = mysqli_real_escape_string($con, trim(htmlentities($_POST['fullname'])));
    $email = mysqli_real_escape_string($con, trim(htmlentities($_POST['email'])));
    $gender = mysqli_real_escape_string($con, trim(htmlentities($_POST['gender'])));
    $status = mysqli_real_escape_string($con, trim(htmlentities($_POST['status'])));
    $woman = mysqli_real_escape_string($con, trim(htmlentities($_POST['woman'])));
    $children = mysqli_real_escape_string($con, trim(htmlentities($_POST['children'])));
    $password1 = mysqli_real_escape_string($con, trim(htmlentities($_POST['password1'])));
    $password2 = mysqli_real_escape_string($con, trim(htmlentities($_POST['password2'])));

    // To errors, the fields are not empty
    if (empty($user)) {
        array_push($errors, "Username is required");
    }
    if (empty($fullname)) {
        array_push($errors, "Fullname is required");
    }
    if (empty($gender)) {
        array_push($errors, "Email is required");
    }
    if (empty($gender)) {
        array_push($errors, "Gender is required");
    }
    if (empty($status)) {
        array_push($errors, "Status is required");
    }
    // if(empty($username)){array_push($errors, "Name of  required");}
    // if(empty($username)){array_push($errors, "Children is required");}
    if (empty($password1)) {
        array_push($errors, "Password is required");
    }
    if (empty($password2)) {
        array_push($errors, "Confirm password is required");
    }

    // now to compare passwords
    if ($password1 != $password2) {
        array_push($errors, "Passwords are not match");
    }
    // To check if the new user is not yet register
    $check = mysqli_query($con, "SELECT * FROM employees_tb");
    $datas = mysqli_fetch_array($check);

    if ($user == $datas['username']) {
        array_push($errors, "This username is taken");
    }
    if ($fullname == $datas['username']) {
        array_push($errors, "Fullname's taken");
    }
    if ($email == $datas['username']) {
        array_push($errors, "Email is taken");
    }

    if (count($errors) == 0) {

        // Now to hash password
        $passHash = md5($password1);
        $sql = mysqli_query($con, "INSERT INTO employees_tb(username, fullname, email, `gender`, `status`, `woman_name`, children, `password`) VALUES('$user','$fullname','$email','$gender','$status','$woman','$children','$passHash')");

        if ($sql) {
            array_push($success, "Employee Registered ");
        } else {
            array_push($errors, "Somethings are wrong :(");
        }
    }
}

// Actions
if (isset($_POST['action'])) {
    if ($_POST['action'] == 'select') {
        $sql = mysqli_query($con, sprintf("SELECT * FROM employees_tb ORDER BY id DESC"));

        if (mysqli_num_rows($sql) > 0) {
            $output .= '
            <table style="width: 100%;" id="example" class="table table-sm table-responsive-sm table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Marital Status</th>
                        <th>Start date</th>
                        <th>Events</th>
                    </tr>
                </thead>
                <tbody>
            ';
            while ($row = mysqli_fetch_array($sql)) {
                $output .= '
                <tr>
                    <td>' . $row['username'] . '</td>
                    <td>' . $row['fullname'] . '</td>
                    <td>' . $row['gender'] . '</td>
                    <td>' . $row['status'] . '</td>
                    <td>' . $row['created_at'] . '</td>
                    <td>
                        <div class="btn-group p-0 btn-sm event">
                            <a href="viewemployees.php?actionEdit=' . $row['id'] . '" class="btn btn-success">
                                <i class="fa fa-edit"></i></a>
                            <a href="viewemployees.php?actionDelete=' . $row['id'] . '" class="btn btn-danger" title="Delete ' . $row['fullname'] . '?"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                ';
            }
            $output .= '
            </tbody>
            <tfoot>
                <tr>
                    <th>Fullame</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Events</th>
                </tr>
            </tfoot>
        </table>
            ';
        } else {
            $output .= '<p class="alert alert-warning">There is no data registered</p>';
        }
        print $output;
    }
}
