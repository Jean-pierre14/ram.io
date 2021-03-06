<?php include '_header.php'; ?>

<div class="app-container app-theme-gray">
    <div class="app-main">
        <?php include '_sidebar.php'; ?>
        <div class="app-sidebar-overlay d-none animated fadeIn"></div>
        <div class="app-main__outer">
            <div class="app-main__inner">
                <?php include '_header_mobile.php'; ?>
                <div class="app-header">
                    <div class="page-title-heading">
                        Employees
                        <div class="page-title-subheading">
                            <?= $prooject_name; ?> we are the best
                        </div>
                    </div>
                    <?php include './_app.user.php'; ?>
                    <div class="app-header-overlay d-none animated fadeIn"></div>
                </div>
                <div class="app-inner-layout app-inner-layout-page">

                    <div class="app-inner-layout__wrapper">

                        <div class="app-inner-layout__content">
                            <div class="tab-content">
                                <div class="container-fluid">
                                    <div class="btn-group">
                                        <a href="addemployee.php" class="mb-2 btn btn-sm btn-success">Add new</a>
                                        <!-- <a href="viewemployees.php" class="mb-2 btn btn-sm btn-info">View list</a> -->
                                    </div>

                                    <?php if (isset($_GET['actionEdit'])) :
                                        $userId = $_GET['actionEdit'];
                                        $sql = mysqli_query($con, "SELECT * FROM employees_tb WHERE id = '$userId'");
                                        if (mysqli_num_rows($sql) == 1) {
                                            while ($row = mysqli_fetch_array($sql)) : ?>
                                                <div class="row">
                                                    <div class="col-md-7">

                                                        <div class="card mb-3">
                                                            <div class="card-header">
                                                                <p class="mr-a"><?= $row['fullname']; ?></p>
                                                                <a href="viewemployees.php" class="ml-auto btn btn-sm btn-danger">Back</a>
                                                            </div>
                                                            <div class="card-body">
                                                                <?php
                                                                include './_error.php'; ?>
                                                                <form action="" method="post">
                                                                    <input type="hidden" name="userIdGet" id="userIdGet" value="<?= $_GET['actionEdit']; ?>" class="form-control">
                                                                    <div class="form-row">
                                                                        <div class="col-md-4 form-group">
                                                                            <label for="username">Username</label>
                                                                            <input type="text" name="username" id="username" placeholder="Username" value="<?= $row['username']; ?>" class="form-control">
                                                                        </div>
                                                                        <div class="col-md-8 form-group">
                                                                            <label for="fullname">Fullname</label>
                                                                            <input type="text" name="fullname" id="fullname" placeholder="Fullname" spellcheck="false" value="<?= $row['fullname']; ?>" class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label for="sex">Gender &nbsp;</label><span class="badge badge-success"><?= $row['gender']; ?></span>
                                                                            <select name="gender" id="sex" class="form-control">
                                                                                <option value=""> -- Select -- </option>
                                                                                <option value="Male">Male</option>
                                                                                <option value="Female">Female</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label for="email">E-mail</label>
                                                                            <input type="email" name="email" id="email" placeholder="E-mail@ramall.cd" spellcheck="false" value="<?= $row['email']; ?>" class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label for="status">Status &nbsp;</label><span class="badge badge-success"><?= $row['status']; ?></span>
                                                                            <select name="status" id="status" class="form-control">
                                                                                <option value=""> -- select -- </option>
                                                                                <option value="Single">Single</option>
                                                                                <option value="Fiance">Fiance</option>
                                                                                <option value="Married">Married</option>
                                                                                <option value="Divorce">Divorce</option>
                                                                            </select>
                                                                        </div>
                                                                        <?php if ($row['woman_name'] == '') : ?>
                                                                            <div class="alert alert-info">
                                                                                <p>
                                                                                    <?= $row['fullname']; ?>`s doesn't have a partern
                                                                                </p>
                                                                                <p class="errorsAjax"></p>
                                                                                <div class="form-group addWomanForm" style="display: none;">
                                                                                    <label for="woman">Partner name</label>
                                                                                    <input type="text" name="woman" id="woman" placeholder="Enter the name" class="form-control">
                                                                                </div>
                                                                                <div class="btn-group">
                                                                                    <button type="button" class="addWoman btn btn-sm btn-warning">Add
                                                                                        Partner
                                                                                    </button>
                                                                                    <button type="button" id="AddWomanBtn" style="display: none;" class="addWomanForm btn btn-sm btn-success">
                                                                                        Register
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        <?php else : ?>
                                                                            <div class="col-md-12">
                                                                                <div class="card card-body">
                                                                                    <div class="row">
                                                                                        <div class="form-group col-md-7">
                                                                                            <label for="woman">Woman name</label>
                                                                                            <input type="text" name="woman" id="woman" value="<?= $row['woman_name']; ?>" placeholder="Woman" spellcheck="false" class="form-control">
                                                                                        </div>
                                                                                        <div class="col-md-5 form-group">
                                                                                            <div id="errorChildren"></div>
                                                                                            <label for="children">Number of
                                                                                                children</label>
                                                                                            <input type="number" max="3" name="children" id="children" value="<?= $row['children']; ?>" placeholder="Entre the number of children" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        <?php endif; ?>
                                                                        <div class="form-group col-md-4 mt-2">
                                                                            <button type="submit" name="UpdateUserGET" id="<?= $row['id']; ?>" class="UpdateUserGET btn btn-block btn-warning">Update</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="card mb-1">
                                                            <div class="card-body">
                                                                <form action="" method="post">
                                                                    <div class="form-group">
                                                                        <label for="oper">Oper</label>
                                                                        <span class="badge badge-success"><?= $row['oper']; ?>
                                                                        </span>
                                                                        <select name="oper" id="oper" class="form-control">
                                                                            <option value="">-- select --</option>
                                                                            <option value="OPERATIONNEL">Operationnel</option>
                                                                            <option value="RETIRED">Retired</option>
                                                                            <option value="REMOVED">Removed</option>
                                                                        </select>
                                                                        <button class="my-1 btn_oper btn btn-success" type="button" id="<?= $row['id']; ?>">Record</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="card my-1">
                                                            <div class="card-body">
                                                                <form action="" method="post">
                                                                    <div id="errorSalary"></div>
                                                                    <div class="form-group">
                                                                        <label for="salary">Salary</label> <span class="badge badge-success"><?= $row['salary']; ?></span>
                                                                        <input type="number" id="salary" value="<?= $row['salary']; ?>" placeholder="Enter salary" class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button class="btn btn-success btn_salary" id="<?= $row['id']; ?>">Record</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <?php if ($row['children'] != '') : ?>
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h6>children</h6>
                                                                </div>
                                                                    <div class="card-body">
                                                                    <?php 
                                                                        $output = '';
                                                                        $sql = mysqli_query($con, "SELECT * FROM children_tb WHERE employee_id = '".$_GET['actionEdit']."'");
                                                                        if($sql){
                                                                            if(mysqli_num_rows($sql) > 0){
                                                                                $output .= '<ul class="list-group">';
                                                                                while($d = mysqli_fetch_array($sql)){
                                                                                    $output .= '<li class="list-group-item" id="'.$d['id'].'">'.$d['name'].'</li>';
                                                                                }
                                                                                $output .= '</ul>';
                                                                            }else{
                                                                                include './_addChildren.php';
                                                                            }
                                                                        }
                                                                        print $output;
                                                                    ?>
                                                                    </div>
                                                                </div>
                                                    </div>
                                                <?php endif; ?>
                                                </div>
                                            <?php endwhile;
                                        } else {
                                            ?>
                                            <p class="alert alert-danger">
                                                Sorry but this userID <b><?= $userId; ?></b> doesn't exist :(
                                            </p>
                                        <?php
                                        }
                                        ?>

                                    <?php else : ?>

                                        <div class="card mb-3">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                    <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6">
                                                    </i>Easy
                                                    Employees
                                                </div>
                                                <div class="btn-actions-pane-right actions-icon-btn">
                                                    <div class="btn-group dropdown">
                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-menu btn-icon-wrapper"></i></button>
                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                            <h6 tabindex="-1" class="dropdown-header">
                                                                Header</h6>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox">
                                                                </i><span>Menus</span>
                                                            </button>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty">
                                                                </i><span>Settings</span>
                                                            </button>
                                                            <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book">
                                                                </i><span>Actions</span>
                                                            </button>
                                                            <div tabindex="-1" class="dropdown-divider"></div>
                                                            <div class="p-3 text-right">
                                                                <button class="mr-2 btn-shadow btn-sm btn btn-link">View
                                                                    Details
                                                                </button>
                                                                <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                                                    Action
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="select">
                                                    <table style="width: 100%;" id="example" class="table table-sm table-responsive-sm table-hover table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Fullname</th>
                                                                <th>Email</th>
                                                                <th>Gender</th>
                                                                <th>Age</th>
                                                                <th>Start date</th>
                                                                <th>Events</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Genuis</td>
                                                                <td>Genuis Team</td>
                                                                <td>males</td>
                                                                <td>4</td>
                                                                <td>2011/04/25</td>
                                                                <td>
                                                                    <div class="btn-group p-0 btn-sm event">
                                                                        <a href="viewemployees.php?actionEdit=<?= $row['id']; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                                        <a href="viewemployees.php?actionDelete=<?= $row['id']; ?>" class="btn btn-danger" title="Delete <?= $row['fullnane'] ?>?"><i class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
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
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include '_app.footer.php'; ?>
        </div>
    </div>
</div>

<?php include '_footer.php'; ?>