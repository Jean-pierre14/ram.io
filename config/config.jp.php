<?php
$numero = "(+243) 976-353-543";
$prooject_name = "RamaLL";
$number_of_children = 4;

$con = mysqli_connect("localhost", "root", "", "ramall") or die("Couln't connect to the database");

$errors = [];

$success = [];
$output = '';

$id = "";
$row['id'] = "";

$user = '';
$username = '';
$fullname = '';
$email = '';
$gender = '';
$woman = '';
$children = '';

$password = '';
$password1 = '';
$password2 = '';

$username = '';
$password = '';

// function GetDate()
// {

//     for ($i = 0; $i <= 5; $i++) {
//         print $i;
//     }
//     return 'data';
// }

// Session user and other user
if (isset($_SESSION['username'])) {
    $id = $_SESSION['id'];
    $sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE id = $id");
    if (mysqli_num_rows($sql) == 1) {
        while ($row = mysqli_fetch_array($sql)) {
            $output .= '<div class="card">
            <div class="card-body">
                <h2>My information ' . $row['fullname'] . '</h3>
            </div>
            </div>';
        }
    } else {
        header("Location: ../login.php");
    }
}

if (isset($_POST['signIn'])) {
    $username = mysqli_real_escape_string($con, trim(htmlentities($_POST['username'])));
    $password = mysqli_real_escape_string($con, trim(htmlentities($_POST['password'])));

    if (empty($username)) {
        array_push($errors, "Username is blank");
    }
    if (empty($password)) {
        array_push($errors, "Password is blank");
    }

    if (count($errors) == 0) {
        $pass = md5($password);
        $sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE (username = '$username' AND `password` = '$pass')");
        if (mysqli_num_rows($sql) == 1) {
            session_start();
            $_SESSION = @mysqli_fetch_array($sql, MYSQLI_ASSOC);
            $_SESSION['autho'] = (int)$_SESSION['autho'];

            if ($_SESSION['autho'] === 1) {
                $url = './admin/';
            } elseif ($_SESSION['autho'] === 2) {
                $url = './boss/';
            } else {
                $url = './users/';
            }
            header("Location: " . $url);
        } else {
            array_push($errors, "Username or Password invalid");
        }
    }
    // header("Location: ./admin/");
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
        $oper = 'OPERATIONNEL';

        $sql = mysqli_query($con, "INSERT INTO employees_tb(username, fullname, email, `gender`, `status`,oper, `woman_name`, children, `password`) VALUES('$user','$fullname','$email','$gender','$status', '$oper', '$woman','$children','$passHash')");

        if ($sql) {
            header("Location: viewemployees.php");
            array_push($success, "Employee Registered ");
        } else {
            array_push($errors, "Somethings are wrong :(");
        }
    }
}

// Update
if (isset($_POST['UpdateUserGET'])) {
    $id = $_POST['userIdGet'];
    $user = mysqli_real_escape_string($con, trim(htmlentities($_POST['username'])));
    $fullname = mysqli_real_escape_string($con, trim(htmlentities($_POST['fullname'])));
    $gender = mysqli_real_escape_string($con, trim(htmlentities($_POST['gender'])));
    $email = mysqli_real_escape_string($con, trim(htmlentities($_POST['email'])));
    $status = mysqli_real_escape_string($con, trim(htmlentities($_POST['status'])));

    // To check if fields are not empty
    if (empty($user)) {
        array_push($errors, "Username is required");
    }
    if (empty($user)) {
        array_push($errors, "Fullname is required");
    }
    if (empty($gender)) {
        array_push($errors, "Gender is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($status)) {
        array_push($errors, "Status is required");
    }

    $check = mysqli_query($con, "SELECT * FROM employees_tb WHERE id != $id");
    $data = @mysqli_fetch_array($check);

    if ($user == $data['username']) {
        array_push($errors, "Username used by another user");
    }
    if ($fullname == $data['username']) {
        array_push($errors, "Username used by another user");
    }

    if (count($errors) == 0) {
        $sql = mysqli_query($con, "UPDATE employees_tb SET username = '$user', fullname = '$fullname', gender = '$gender', `status` = '$status' WHERE id = $id");
        if ($sql) {
?>
<script>
window.location.href = 'viewemployees.php'
</script>
<?php
        } else {
            array_push($errors, "Something is going wrong");
        }
    }
}


// Actions
if (isset($_POST['action'])) {
    // UPdate account partner
    if ($_POST['action'] == 'addPartner') {
        $id = $_POST['id'];
        $partner = mysqli_real_escape_string($con, trim($_POST['woman']));

        if (empty($partner)) {
            print 'error';
        }
        if (count($errors) == 0) {
            $sql = mysqli_query($con, "UPDATE employees_tb SET woman_name = '$partner' WHERE id = $id");
            print 'success';
        }
    }
    // Update oper
    if ($_POST['action'] == 'oper') {
        $id = $_POST['id'];
        $oper = mysqli_real_escape_string($con, $_POST['operVal']);

        $sql = mysqli_query($con, "UPDATE employees_tb SET oper = '$oper' WHERE id = $id");
        if ($sql) {
            print 'success';
        } else {
            print 'error';
        }
    }

    if ($_POST['action'] == 'retired') {
        $sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE oper = 'RETIRED' ORDER BY fullname ASC");
        if (@mysqli_num_rows($sql) > 0) {
            $output .= '<ul class="todo-list-wrapper list-group list-group-flush">';
            while ($row = mysqli_fetch_array($sql)) {
                $output .= '
                <li class="list-group-item">
                    <div class="todo-indicator bg-warning"></div>
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left mr-2">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" id="exampleCustomCheckbox' . $row['id'] . '"
                                        class="custom-control-input"><label
                                        class="custom-control-label"
                                        for="exampleCustomCheckbox' . $row['id'] . '">&nbsp;</label>
                                </div>
                            </div>
                            <div class="widget-content-left">
                                <div class="widget-heading">' . $row['fullname'] . '
                                    <div class="badge badge-danger ml-2">
                                        ' . $row['oper'] . '
                                    </div>
                                </div>
                                <div class="widget-subheading">
                                    <i>' . $row['username'] . ' ' . $row['created_at'] . '</i>
                                </div>     
                            </div>
                            <div class="widget-content-right widget-content-actions">
                                <a href="viewemployees.php?actionEdit=' . $row['id'] . '" id="' . $row['id'] . '"
                                    class="border-0 btn-transition btn btn-outline-success">
                                    <i class="fa fa-check"></i>
                                </a>
                                <button id="' . $row['id'] . '"
                                    class="border-0 btn-transition btn btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                ';
            }
            $output .= '</ul>';
        } else {
            $output .= '<p class="alert alert-dismissible alert-danger">There is no one Retired</p>';
        }
        print $output;
    }
    if ($_POST['action'] == 'search_retired') {
        $txt = mysqli_real_escape_string($con, trim(htmlentities($_POST['txt'])));
        $sql = mysqli_query($con, "SELECT * FROM employees_tb LIKE (username = %%)");
    }
    // salary 
    if ($_POST['action'] == 'salary') {
        $id = $_POST['id'];
        $salary = mysqli_real_escape_string($con, trim(htmlentities($_POST['salaryVal'])));

        if (empty($salary)) {
            array_push($errors, "Error");
        }

        if (count($errors) == 0) {
            $sql = mysqli_query($con, "UPDATE employees_tb SET salary = '$salary' WHERE id = $id");
            if ($sql) {
                print 'success';
            } else {
                print 'error';
            }
        } else {
            print 'error';
        }
    }
    // children container For loop
    if ($_POST['action'] == 'children') {
        $count = 0;
        $count = @mysqli_real_escape_string($con, trim(htmlentities($_POST['countKid'])));
        if ($count != 0) {
            $output .= '<form action="" method="post">';
            for ($i = 1; $i <= $count; $i++) {
                if ($count == 4) {
                    break;
                }
                $output .= '
                <div class="form-group">
                    <label for="childres' . $i . '">Kid ' . $i . '</label>
                    <input type="text" class="form-control" placeholder="Kid ' . $i . '" name="children' . $i . '">
                </div>';
            }
            $output .= '
            <button type="submit" class="btn btn-block btn-success">Register</button>
        </form>';
        } else {
            $output .= '<p class="badge badge-info">Enter the number kid</p>';
        }
        print $output;
    }
    // Dashboard
    if ($_POST['action'] == 'allEmployees') {
        $sql = mysqli_query($con, "SELECT COUNT(*) AS idCount FROM employees_tb WHERE oper = 'OPERATIONNEL'");
        if (@mysqli_num_rows($sql) > 0) {
            $row = @mysqli_fetch_array($sql);
            $output = '<p class="text-warning">' . $row['idCount'] . '</p>';
        } else {
            $output = '<p class="text-warning">Zero</p>';
        }
        print $output;
    }
    if ($_POST['action'] == 'M_emp') {
        $sql = mysqli_query($con, "SELECT COUNT(*) AS idCount FROM employees_tb WHERE gender = 'Male'");
        if (@mysqli_num_rows($sql) > 0) {
            $row = @mysqli_fetch_array($sql);
            $output = '<p class="text-danger">' . $row['idCount'] . '</p>';
        } else {
            $output = '<p class="text-danger">Zero</p>';
        }
        print $output;
    }
    if ($_POST['action'] == 'W_emp') {
        $sql = mysqli_query($con, "SELECT COUNT(*) AS idCount FROM employees_tb WHERE gender = 'Female'");
        if (@mysqli_num_rows($sql) > 0) {
            $row = @mysqli_fetch_array($sql);
            $output = $row['idCount'];
        } else {
            $output = '<p class="text-success">Zero</p>';
        }
        print $output;
    }
    // Select
    if ($_POST['action'] == 'select') {
        $procedure = "CREATE PROCEDURE selectEmpl()
        BEGIN
         SELECT * FROM employees_tb WHERE oper = 'OPERATIONNEL' ORDER BY id DESC ;
        END;
        ";

        if (mysqli_query($con, "DROP PROCEDURE IF EXISTS selectEmpl")) {
            if (mysqli_query($con, $procedure)) {
                $query = "CALL selectEmpl()";
                $response = mysqli_query($con, $query);

                if (mysqli_num_rows($response) > 0) {
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
                    while ($row = mysqli_fetch_array($response)) {
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
                                    <button type="button" id="' . $row['id'] . '" class="deleteEmpl btn btn-danger" title="Delete ' . $row['fullname'] . '?"><i class="fa fa-trash"></i></button>
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
            }
        }
        print $output;
    }
    // Delete
    if ($_POST['action'] == 'deleteEmpl') {
        $id = $_POST['id'];
        $getEmpl = mysqli_query($con, "SELECT * FROM employees_tb WHERE id = $id");
        if (@mysqli_num_rows($getEmpl) == 1) {
            $fetch = mysqli_fetch_array($getEmpl);
            $remove = mysqli_query($con, "INSERT INTO deleted_tb (username, fullname, email, gender, salary, `status`, `password`, woman_name, children, oper, created_at) VALUES('" . $fetch['username'] . "','" . $fetch['fullname'] . "','" . $fetch['email'] . "','" . $fetch['gender'] . "','" . $fetch['salary'] . "','" . $fetch['`status`'] . "', '" . $fetch['`password`'] . "','" . $fetch['woman_name'] . "', '" . $fetch['children'] . "', '" . $fetch['oper'] . "', '" . $fetch['created_at'] . "')");
            if ($remove) {
                $sql = mysqli_query($con, "DELETE FROM employees_tb WHERE id = $id");
                if ($sql) {
                    print 'success';
                } else {
                    print 'error sql';
                }
            } else {
                print 'error remove';
            }
        } else {
            print 'error';
        }
    }
    if ($_POST['action'] == 'select2') {
        $procedure = "CREATE PROCEDURE selectEmpl2()
        BEGIN
         SELECT * FROM employees_tb ORDER BY id DESC LIMIT 6;
        END;
        ";

        if (mysqli_query($con, "DROP PROCEDURE IF EXISTS selectEmpl2")) {
            if (mysqli_query($con, $procedure)) {
                $query = "CALL selectEmpl2()";
                $response = mysqli_query($con, $query);

                if (mysqli_num_rows($response) > 0) {
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
                    while ($row = mysqli_fetch_array($response)) {
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
            }
        }
        print $output;
    }
}