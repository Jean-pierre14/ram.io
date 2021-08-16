<?php
$numero = "(+243) 976-353-543";
$prooject_name = "RamaLL";
$number_of_children = 4;

$today = date('Y-m-d');

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
            $USER = '
            <div class="card">
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
            $_SESSION['id'] = (int)$_SESSION['id'];

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
    $children = mysqli_real_escape_string($con, trim($_POST['children']));

    // $password1 = mysqli_real_escape_string($con, trim(htmlentities($_POST['password1'])));
    // $password2 = mysqli_real_escape_string($con, trim(htmlentities($_POST['password2'])));

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
    // if (empty($password1)) {
    //     array_push($errors, "Password is required");
    // }
    // if (empty($password2)) {
    //     array_push($errors, "Confirm password is required");
    // }

    // now to compare passwords
    // if ($password1 != $password2) {
    //     array_push($errors, "Passwords are not match");
    // }
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
        $password = 1234;
        $salary = 1200;
        // Now to hash password
        $passHash = md5($password);
        $oper = 'OPERATIONNEL';

        $sql = mysqli_query($con, "INSERT INTO employees_tb(salary, username, fullname, email, `gender`, `status`,oper, `woman_name`, children, `password`) VALUES('$salary','$user','$fullname','$email', '$gender','$status', '$oper', '$woman','$children','$passHash')");

        if ($sql) {
            // $thisemail = mysqli_query($con, "SELECT id FROM employees_tb WHERE email= '$email'");
            header("Location: viewemployees.php");
        }else{
            array_push($errors, "Sql error");
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
    if ($_POST['action'] == 'search_txt') {
        print 'seaching...';
    }
    if ($_POST['action'] == 'payResults') {
        sleep(2);
        $sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE oper = 'OPERATIONNEL'");
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
                                <input type="checkbox" id="exampleCustomCheckbox12' . $row['id'] . '"
                                    class="custom-control-input"><label
                                    class="custom-control-label"
                                    for="exampleCustomCheckbox12' . $row['id'] . '">&nbsp;</label>
                            </div>
                        </div>
                        <div class="widget-content-left">
                            <div class="widget-heading">' . $row['fullname'] . '
                                ';
                if ($row['oper'] == 'OPERATIONNEL') {
                    $output .= '
                                    <div class="badge badge-success ml-2">
                                    ' . $row['oper'] . '
                                </div>
                                    ';
                } elseif ($row['oper'] == 'RETIRED') {
                    $output .= '
                                    <div class="badge badge-warning ml-2">
                                    ' . $row['oper'] . '
                                </div>
                                    ';
                } else {
                    $output .= '
                                    <div class="badge badge-danger ml-2">
                                    ' . $row['oper'] . '
                                </div>
                                    ';
                }
                $output .= '
                            </div>
                            <div class="widget-subheading">
                                <i>' . $row['username'] . ' $ <span class="badge badge-danger">' . $row['salary'] . '</span></i>
                            </div>
                        </div>
                        <div class="widget-content-right widget-content-actions">
                            <button id="' . $row['id'] . '"
                                class="payConfirm border-0 btn-transition btn btn-outline-success">
                                <i class="fa fa-check"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </li>
                ';
            }
            $output .= '</ul>';
        } else {
            $output .= '<p class="alert alert-danger">There no data in our system</p>';
        }
        print $output;
    }
    if ($_POST['action'] == 'sendrequest') {

        $email = $_POST['email'];
        $message = $_POST['message'];

        if (empty($email)) {
            array_push($errors, "Empty");
        }
        if (empty($message)) {
            array_push($errors, "Empty");
        }

        if (count($errors) == 0) {
            $sql = mysqli_query($con, "INSERT INTO employees_request_tb(`email`, `message`) VALUE('$email','$message')");
            if ($sql) {
                print 'success';
            } else {
                print 'error';
            }
        } else {
            print 'email: ' . $email . 'message: ' . $message;
        }
    }
    if ($_POST['action'] == 'profil') {
        $id = $_POST['id'];
        $sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE id = $id");

        if (mysqli_num_rows($sql) == 1) {
            
            $datas = array();
            $row = mysqli_fetch_array($sql);
            $datas['username'] = $row['username'];
            $datas['fullname'] = $row['fullname'];
            $datas['email'] = $row['email'];
            $datas['salary'] = $row['salary'];
            $datas['gender'] = $row['gender'];
            $datas['status'] = $row['status'];
            $datas['oper'] = $row['oper'];
            $datas['woman'] = $row['woman_name'];
            $datas['children'] = $row['children'];

            print json_encode($datas);
        } else {
            print 'error';
        }
    }
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
                                <a href="retired.php?actionEdit=' . $row['id'] . '" id="' . $row['id'] . '"
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
    if ($_POST['action'] == 'search_text') {
        $txt = mysqli_real_escape_string($con, trim(htmlentities($_POST['txt'])));
        $sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE (username LIKE '%" . trim(htmlentities($_POST['txt'])) . "%' OR fullname LIKE '%" . trim(htmlentities($_POST['txt'])) . "%' OR email LIKE '%" . trim(htmlentities($_POST['txt'])) . "%') AND oper = 'OPERATIONNEL'");
        
        if(@mysqli_num_rows($sql) > 0){
            $output .= '<ul class="todo-list-wrapper list-group list-group-flush">';
            while ($row = mysqli_fetch_array($sql)) {
                $output .= '
                <li class="list-group-item">
                <div class="todo-indicator bg-warning"></div>
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left mr-2">
                            <div class="custom-checkbox custom-control">
                                <input type="checkbox" id="exampleCustomCheckbox12' . $row['id'] . '"
                                    class="custom-control-input"><label
                                    class="custom-control-label"
                                    for="exampleCustomCheckbox12' . $row['id'] . '">&nbsp;</label>
                            </div>
                        </div>
                        <div class="widget-content-left">
                            <div class="widget-heading">' . $row['fullname'] . '
                                ';
                if ($row['oper'] == 'OPERATIONNEL') {
                    $output .= '
                                    <div class="badge badge-success ml-2">
                                    ' . $row['oper'] . '
                                </div>
                                    ';
                } elseif ($row['oper'] == 'RETIRED') {
                    $output .= '
                                    <div class="badge badge-warning ml-2">
                                    ' . $row['oper'] . '
                                </div>
                                    ';
                } else {
                    $output .= '
                                    <div class="badge badge-danger ml-2">
                                    ' . $row['oper'] . '
                                </div>
                                    ';
                }
                $output .= '
                            </div>
                            <div class="widget-subheading">
                                <i>' . $row['username'] . ' $ <span class="badge badge-danger">' . $row['salary'] . '</span></i>
                            </div>
                        </div>
                        <div class="widget-content-right widget-content-actions">
                            <button id="' . $row['id'] . '"
                                class="payConfirm border-0 btn-transition btn btn-outline-success">
                                <i class="fa fa-check"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </li>
                ';
            }
            $output .= '</ul>';
        }else{
            $output .= '<p class="alert alert-warning">This username is not found '.$txt.'</p>';
        }

        print $output;
    }
    if ($_POST['action'] == 'search_retired') {
        $txt = mysqli_real_escape_string($con, trim(htmlentities($_POST['txt'])));
        $sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE (username LIKE '%" . trim(htmlentities($_POST['txt'])) . "%' OR fullname LIKE '%" . trim(htmlentities($_POST['txt'])) . "%' OR email LIKE '%" . trim(htmlentities($_POST['txt'])) . "%') AND oper = 'RETIRED'");
        
        if(@mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_array($sql)){
            $output .= '
                <div class="content shadow-sm">
                    <p class="d-flex justify-content-between align-item-center">
                        <span>Username:</span>
                        <span>'.$row['username'].'</span>
                    </p>
                </div>
            ';
            }
        }else{
            $output .= '<p class="alert alert-warning">This username is not found '.$txt.'</p>';
        }

        print $output;
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
            $output .= '
            <form action="" method="post" autocomplete="off" id="childrenForm">
                <input type="hidden" class="form-control" name="action" value="childrenBtn"/>
            ';

            for ($i = 1; $i <= $count; $i++) {
                if ($count == 4) {
                    break;
                }
                $output .= '
                <div class="form-group">
                    <label for="childres' . $i . '">Kid ' . $i . '</label>
                    <input type="text" class="form-control" placeholder="Kid ' . $i . '" name="childrenName[]">
                </div>';
            }
            $output .= '
            <button type="button" id="childrenBtnSubmit" class="btn btn-block btn-success">Register</button>
        </form>';
        } else {
            $output .= '<p class="badge badge-info">Enter the number kid</p>';
        }
        print $output;
    }
    // Insert those children now
    if($_POST['action'] == 'childrenBtn'){
        
        $data = [];
        $userid = $_POST['userId'];
        $data = $_POST['childrenName'];
        $number = 1;
        if($number > 0){
            for($i=0; $i < $number; $i++){
                if(trim($_POST['childrenName']) != ''){
                    $sql = mysqli_query($con, "INSERT INTO children_tb(employee_id, `name`) VALUES($userid, '".mysqli_real_escape_string($con, $_POST['childrenName'][$i])."')");
                    if($sql){
                        $output .= 'success';
                    }else{
                        $output .= 'error';
                    }
                }
            }
        }
        print $output;
    }
    if($_POST['action'] == 'childrenSaved'){
        print 'childrenSaved';
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
                $sql_children = mysqli_query($con, "DELETE FROM children WHERE employees_id = $id");
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
    if($_POST['action'] == 'TodayAttendance'){
        $select = mysqli_query($con, "SELECT attendance FROM employees_tb");
        $r = mysqli_fetch_array($select);
        if($r['attendance'] != $today || $r['attendance'] == 'no'){
            mysqli_query($con, "UPDATE employees_tb SET attendance = ''");
        }
    }
    if($_POST['action'] == 'attendanceResults'){
        $sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE oper = 'OPERATIONNEL'");
        if(@mysqli_num_rows($sql) > 0){
            $output .= '<ul class="list-group">';
            while($row = mysqli_fetch_array($sql)):
                if($row['attendance'] == $today){
                    $output .= '
                        <li class="list-group-item d-flex justify-content-between align-item-center">
                            <span>'.$row['fullname'].'</span>
                            <span clss="delete">
                                <button type="button" class="btn btn-sm btn-success See" id="'.$row['id'].'"><i class="fa fa-eye"></i></button>
                            </span>
                        </li>
                    ';
                }elseif($row['attendance'] == 'no'){
                    $output .= '
                        <li class="list-group-item d-flex justify-content-between align-item-center">
                            <span>'.$row['fullname'].'</span>
                            <span>
                                <button type="button" class="btn btn-sm btn-danger See" id="'.$row['id'].'"><i class="fa fa-eye"></i></button>
                            </span>
                        </li>
                    ';
                }else{
                    $output .= '
                    <li class="list-group-item d-flex justify-content-between align-item-center">
                        <span>'.$row['fullname'].'</span>
                        <span class="btn-group">
                            <button type="button" class="btn btn-sm btn-success yes" id="'.$row['id'].'"><i class="fa fa-thumbs-up"></i></button>
                            <button type="button" class="btn btn-sm btn-danger no" id="'.$row['id'].'"><i class="fa fa-thumbs-down" style="rotate: 180deg"></i></button>
                        </span>
                    </li>
                ';
                }
            endwhile;
            $output .= '</ul>';
        }else{
            $output .= '<p>There no data into your databse</p>';
        }
        print $output;
    }
    // If yes
    if($_POST['action'] == 'yes'){
        $today = date('Y-m-d');
        $id = $_POST['id'];
        
        $sql = mysqli_query($con, "UPDATE employees_tb SET attendance = '$today' WHERE id = $id");
        if($sql){
            mysqli_query($con, "INSERT INTO attendance_tb(employee_id, DateTo, statistique) VALUES('$id', '$today', 1)");
        }else{
            print 'Error';
        }
    }
    // If no
    if($_POST['action'] == 'no'){
        $today = date('Y-m-d');
        $id = $_POST['id'];
        
        $sql = mysqli_query($con, "UPDATE employees_tb SET attendance = 'no' WHERE id = $id");
        if($sql){
            mysqli_query($con, "INSERT INTO attendance_tb(employee_id, DateTo, statistique) VALUES('$id', '$today', 0)");
        }else{
            print 'Error';
        }
    }
    // To see the attendance of the user
    if($_POST['action'] == 'see'){

        $id = $_POST['id'];
        $sql = mysqli_query($con, "SELECT * FROM attendance_tb WHERE employee_id = $id");

        $p = mysqli_query($con, "SELECT count(statistique) AS countP FROM attendance_tb WHERE statistique = 1 AND employee_id = $id");
        $presence = mysqli_fetch_array($p);
        $a = mysqli_query($con, "SELECT count(statistique) AS countP FROM attendance_tb WHERE statistique = 0 AND employee_id = $id");
        $absence = mysqli_fetch_array($a);

        $d = mysqli_query($con, "SELECT * FROM employeeS_tb WHERE id = $id");
        $data = mysqli_fetch_array($d);
        if(@mysqli_num_rows($sql) > 0){
            
            $output .= '
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>
                        <span> Fullname: </span>
                        <span> '.$data['fullname'].'</span>
                    </h4>
                </div>
                <div class="p-5">
                    <h4 class="d-flex justify-content-between align-item-center">Presence: <span class="btn btn-sm btn-success">'.$presence['countP'].'</span></h4>
                    <h4 class="d-flex justify-content-between align-item-center">Absence: <span class="btn btn-sm btn-danger">'.$absence['countP'].'</span></h4>
                    <select class="selectOnly ml-1 form-control" id="'.$id.'">
                        <option value="">-- Select --</option>
                        <option value="0">Absence</option>
                        <option value="1">Presence</option>
                    </select>
                </div>
                <div class="card-body row justify-content-center" id="OnlyData">
                ';

            while($row = mysqli_fetch_array($sql)){
                $output .= '        
                    <span class="col-md-4 text-center my-1 shadow-sm" style="padding: 8px;">
                        <span class="">'.$row['DateTo'].'</span>';
                        if($row['statistique'] == 1){
                            $output .= '<span class="btn btn-sm btn-success"><i class="fa fa-thumbs-up"></i></span>';
                        }else{
                            $output .= '<span class="btn btn-sm btn-danger"><i class="fa fa-thumbs-down"></i></span>';
                        }
                        $output .= '
                    </span>
                ';
            }
            $output .= '
                </div>
            </div>';
        }else{
            $output .= '<p>The user doesn\'t attende the job</p>';
        }
        print $output;
    }
    // Select only one part of data from the attendance list
    if($_POST['action'] == 'selectOnly'){
        $id = $_POST['id'];
        $select = trim(htmlentities($_POST['d']));

        $sql = mysqli_query($con, "SELECT * FROM attendance_tb WHERE employee_id = $id AND statistique = $select");
        if(@mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_array($sql)){
                if($select == 1){
                    $output .= '
                        <span class="bg-white shadow-sm mx-1" style="padding: 8px;">
                                <span class="mr-5">'.$row['DateTo'].'</span>
                                <span class="btn btn-sm btn-success"><i class="fa fa-thumbs-up"></i></span>
                            </span>
                        ';
                }else{
                    $output .= '
                    <span class="bg-white shadow-sm mx-1" style="padding: 8px;">
                            <span class="mr-5">'.$row['DateTo'].'</span>
                            <span class="btn btn-sm btn-danger"><i class="fa fa-thumbs-up"></i></span>
                        </span>
                    ';
                }
            }
        }else{
            if($select == 1){
                $situation = 'attended';
            }elseif($select == 0){ 
                $situation = 'missed';
            }else{
                $situation = ':( sorry OS';
            }
            $output .= '<p class="alert alert-warning">Sorry but this employee doesn\'t <b><i>'.$situation.' </b></i>the job even once</p>';
        }
        print $output;
    }
    // Search form
    if($_POST['action'] == 'searchAtt'){
        $txt = mysqli_real_escape_string($con, htmlentities(trim($_POST['txt'])));
        $sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE username LIKE '%".$txt."%' OR fullname LIKE '%".$txt."%' OR email LIKE '%".$txt."%' OR gender LIKE '%".$txt."%' ORDER BY username");

        if(@mysqli_num_rows($sql) > 0){
            $output .= '<ul class="list-group">';
            while($row = mysqli_fetch_array($sql)):
                if($row['attendance'] == $today){
                    $output .= '
                        <li class="list-group-item d-flex justify-content-between align-item-center">
                            <span>'.$row['fullname'].'</span>
                            <span clss="delete">
                                <button type="button" class="btn btn-sm btn-success See" id="'.$row['id'].'"><i class="fa fa-eye"></i></button>
                            </span>
                        </li>
                    ';
                }elseif($row['attendance'] == 'no'){
                    $output .= '
                        <li class="list-group-item d-flex justify-content-between align-item-center">
                            <span>'.$row['fullname'].'</span>
                            <span>
                                <button type="button" class="btn btn-sm btn-danger See" id="'.$row['id'].'"><i class="fa fa-eye"></i></button>
                            </span>
                        </li>
                    ';
                }else{
                    $output .= '
                    <li class="list-group-item d-flex justify-content-between align-item-center">
                        <span>'.$row['fullname'].'</span>
                        <span class="btn-group">
                            <button type="button" class="btn btn-sm btn-success yes" id="'.$row['id'].'"><i class="fa fa-thumbs-up"></i></button>
                            <button type="button" class="btn btn-sm btn-danger no" id="'.$row['id'].'"><i class="fa fa-thumbs-down" style="rotate: 180deg"></i></button>
                        </span>
                    </li>
                ';
                }
            endwhile;
            $output .= '</ul>';
        }else{
            $output .= '<p class="alert alert-warning">We can\'t find '.$txt.' </p>';
        }
        print $output;
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
    // Message fetch first
    if($_POST['action'] == 'messageFetch'){
        $id = $_POST['myId'];
        $sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE id != $id ORDER BY username ASC");

        $output .= '
        <div class="row my-2">
            <div class="col-md-5 col-sm-0 hidden-sm-sidebar">
                <form autocomplete="off" method="POST">
                    <input type="search" placeholder="Search..." class="form-control"/>
                </form>
                <div class="mt-2" id="ListUser">
        ';
        if(mysqli_num_rows($sql) > 0){
            $output .= '<ul class="list-group">';
            while($row = mysqli_fetch_array($sql)){
                $output .= '<li class="list-group-item list-group-item-action" id="'.$row['id'].'">'.$row['fullname'].'</li>';
            }
            $output .= '</ul>';
        }else{
            $output .= '<p class="alert alert-warning">There is no data</p>';
        }
        $output .= '
                </div>
            </div>
            <div class="col-md-7 col-sm-12 p-0">
                <div id="messageOfThisUser" class="container-fluid p-0">
                    <h4>Messages can be share trough us</h4>
                    <p>
                        We are trying to change this world 
                    </p>
                </div>
            </div>
        </div>
        ';
        print $output;
    }
    if($_POST['action'] == 'messageOfThisUser'){
        $id = $_POST['id'];
        $myId = $_POST['myId'];
        $sql = mysqli_query($con, "SELECT * FROM messages_tb WHERE (receiverId = $id AND senderId = $myId) ||  (receiverId = $myId AND senderId = $id)");
        
        if(@mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_array($sql)){
                $output .= '
                <div class="msgBox">
                    <div>
                        <p>'.$row['context'].'</p>
                    </div>
                    <div>
                        <small>
                            <i>'.$row['created_at'].'</i>
                        </small>
                    </div>
                </div>
                ';
            }
        }else{
            $output .= '<p class="alert alert-info">He never text you! :( Be the first :)</p>';
        }
        $output .= '
            <div class="__footer-msg">
                <div class="error"></div>
                <form autocomplete="off" method="post" id="myMsg" class="form-group">
                    <textarea class="form-control msgContext" name="msg" id="'.$id.'" placeholder="Tying..."/>
                    <button type="button" id="SubmitMyMsg" class="btn btn-success btn-sm btn-block">Send</button>
                </form>
            </div>
            ';
        print $output;
    }
    if($_POST['action'] == 'sendMsg'){
        $sendId = $_POST['senderId'];
        $receiverId = $_POST['receiverId'];
        $msg = mysqli_real_escape_string($con, trim($_POST['msg']));

        if(empty($msg)){
            print 'Error';
        }

        $sql = mysqli_query($con, "INSERT INTO messages_tb(context, senderId, receiverId, msgStatus, viewStatus) VALUES('$msg', $sendId, $receiverId, 'oper', 'unready')");

        if($sql){
            print 'success';
        }else{
            print 'error';
        }
    }
    if($_POST['action'] == 'UsersMessage'){
        $id = $_POST['id'];
        $sql = mysqli_query($con, "SELECT id, fullname FROM employees_tb WHERE id != $id ORDER BY fullname");
        if(@mysqli_num_rows($sql) > 0){
            $output .= '<ul class="list-group">';
                while($row = mysqli_fetch_array($sql)):
                    $output .= '<li class="list-group-item list-group-item-action" id="'.$row['id'].'">'.$row['fullname'].'</li>';
                endwhile;
            $output .= '</ul>';
        }else{
            $output .= '<p class="alert alert-danger">There no Users registered</p>';
        }
        print $output;
    }
    if($_POST['action'] == 'SeachMessageUser'){
        $id = $_POST['id'];
        $txt = $_POST['txt'];
        $sql = mysqli_query($con, "SELECT id, fullname FROM employees_tb WHERE fullname LIKE '%".$txt."%'");
        if(@mysqli_num_rows($sql) > 0){
            $output .= '<ul class="list-group">';
            while($row = mysqli_fetch_array($sql)):
                $output .= '<li class="list-group-item list-group-item-action" id="'.$row['id'].'">'.$row['fullname'].'</li>';
            endwhile;
            $output .= '</ul>';
        }else{
            $output .= '<div class="alert alert-warning text-center">
                <span>We can\'t found this <b>'.$txt.'</b></span>
            </div>';
        }
        print $output;
    }
    if($_POST['action'] == 'GetUserMessages'){
        $id = $_POST['id'];
        $myId = $_POST['myId'];

        $sql = mysqli_query($con, "SELECT * FROM messages_tb WHERE (senderId = $id AND receiverId = $myId) OR (senderId = $myId AND receiverId = $id)");

        
        $Receiver = mysqli_query($con, "SELECT fullname FROM employees_tb WHERE id = $id");
        $ReceiverRoW = mysqli_fetch_array($Receiver);        
        $output .= '
        <div class="Messages">
        ';
        if(@mysqli_num_rows($sql) > 0){
            
            $output .= '
                
                    <div class="MessagesBox">
                        <div class="bg-white mb-2 p-2">
                            <h3>'.$ReceiverRoW['fullname'].'<h3>
                        </div>
                    <div class="MessagesContent">
            ';
                
            while($row = mysqli_fetch_array($sql)):
                $Sender = mysqli_query($con, "SELECT * FROM employees_tb WHERE id = '".$row['senderId']."'");
                $SenderRow = mysqli_fetch_array($Sender);
                $Receiver = mysqli_query($con, "SELECT * FROM employees_tb WHERE id = '".$row['receiverId']."'");
                $ReceiverRow = mysqli_fetch_array($Receiver);
                $output .= '
                <div class="boxMsg">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="">'.$SenderRow['username'].'</span>
                        <small>'.$row['created_at'].'</small>
                    </div>
                    <span class="my-1 text-bold">'.$row['context'].'</span>
                </div>';
            endwhile;
            $output .= '
            </div>
            </div>
            ';
        }else{
            $output .= '<div class="alert alert-success">
                <h4>Be the first to write...</h4>
            </div>';
        }
        $output .= '

                <div class="footerMessage">
                    <input type="hidden" value="'.$id.'" id="ReceiverId" class="form">
                    <form method="post" autocomplete="off" class="form-inline">
                        <input type="text" class="form-control" id="messageTXT" placeholder="Typing...">
                        <button type="button" id="SendMessage" class="button btn btn-success">Send</button>
                    </form>
                </div>
            </div>
        ';
        print $output;
    }
    if($_POST['action'] == 'SendMessageAdmin'){
        $id = $_POST['id'];
        $myId = $_POST['myId'];
        $msg = trim($_POST['msg']);

        if(empty($msg)){
            print 'error';
        }else{
            $sql = mysqli_query($con, "INSERT INTO messages_tb(context, senderId, receiverId, msgStatus, viewStatus) VALUES('$msg', $myId, $id, 'oper', 'unready')");
            if($sql){
                print 'success';
            }else{
                print 'error';
            }
        }
    }
    if($_POST['action'] == 'ResultEmployees'){
        print 'ResultEmployees()';
    }
}

if(isset($_POST['childrenSaved'])){
    $number = count($_POST['childrenName']);

    if($number > 0){
        for($i = 0; $i < $number; $i++){
            if(trim($_POST['childrenName']) != ''){
                $sql = mysqli_query($con, "INSERT INTO children_tb(employee_id, `name`) VALUES($userid, '".mysqli_real_escape_string($con, $_POST['childrenName'][$i])."')");
                if($sql){
                    $output .= 'success';
                }else{
                    $output .= 'error';
                }
            }
        }
    }
    print $number;
}