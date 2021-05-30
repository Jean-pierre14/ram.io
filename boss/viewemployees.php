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
                    <div class="app-header-right">
                        <div class="search-wrapper">
                            <i class="search-icon-wrapper typcn typcn-zoom-outline"></i>
                            <input type="text" placeholder="Search...">
                        </div>
                        <div class="header-btn-lg pr-0">
                            <div class="header-dots">
                                <div class="dropdown">
                                    <button type="button" aria-haspopup="true" aria-expanded="false"
                                        data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                        <i class="typcn typcn-th-large-outline"></i>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-vicious-stance">
                                                <div class="menu-header-image opacity-4"
                                                    style="background-image: url('assets/images/dropdown-header/city5.jpg');">
                                                </div>
                                                <div class="menu-header-content text-white">
                                                    <h5 class="menu-header-title">Grid Dashboard</h5>
                                                    <h6 class="menu-header-subtitle">Easy grid navigation inside
                                                        dropdowns</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-menu grid-menu-xl grid-menu-3col">
                                            <div class="no-gutters row">
                                                <div class="col-sm-6 col-xl-4">
                                                    <button
                                                        class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i
                                                            class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                        Automation
                                                    </button>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <button
                                                        class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i
                                                            class="pe-7s-piggy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                        </i>
                                                        Reports
                                                    </button>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <button
                                                        class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i
                                                            class="pe-7s-config icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                        </i>
                                                        Settings
                                                    </button>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <button
                                                        class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i
                                                            class="pe-7s-browser icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                        </i>
                                                        Content
                                                    </button>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <button
                                                        class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i
                                                            class="pe-7s-hourglass icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                        </i>
                                                        Activity
                                                    </button>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <button
                                                        class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i
                                                            class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                        </i>
                                                        Contacts
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item-divider nav-item"></li>
                                            <li class="nav-item-btn text-center nav-item">
                                                <button class="btn-shadow btn btn-primary btn-sm">Follow-ups</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button type="button" aria-haspopup="true" aria-expanded="false"
                                        data-toggle="dropdown" class="p-0 btn btn-link">
                                        <i class="typcn typcn-bell"></i>
                                        <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header mb-0">
                                            <div class="dropdown-menu-header-inner bg-night-sky">
                                                <div class="menu-header-image opacity-5"
                                                    style="background-image: url('assets/images/dropdown-header/city2.jpg');">
                                                </div>
                                                <div class="menu-header-content text-light">
                                                    <h5 class="menu-header-title">Notifications</h5>
                                                    <h6 class="menu-header-subtitle">You have <b>21</b> unread
                                                        messages</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <ul
                                            class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link active" data-toggle="tab"
                                                    href="#tab-messages-header">
                                                    <span>Messages</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link" data-toggle="tab"
                                                    href="#tab-events-header">
                                                    <span>Events</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link" data-toggle="tab"
                                                    href="#tab-errors-header">
                                                    <span>System</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="nav flex-column">
                                            <li class="nav-item-divider nav-item"></li>
                                            <li class="nav-item-btn text-center nav-item">
                                                <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View
                                                    Latest Changes</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="btn-group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                class="p-0 btn">
                                                <img width="42" class="rounded" src="assets/images/avatars/3.jpg"
                                                    alt="">
                                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true"
                                                class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                <div class="dropdown-menu-header">
                                                    <div class="dropdown-menu-header-inner bg-info">
                                                        <div class="menu-header-image opacity-2"
                                                            style="background-image: url('assets/images/dropdown-header/city1.jpg');">
                                                        </div>
                                                        <div class="menu-header-content text-left">
                                                            <div class="widget-content p-0">
                                                                <?php include '_user.php'; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="scroll-area-xs" style="height: 150px;">
                                                    <div class="scrollbar-container ps">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item-header nav-item">Activity
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="javascript:void(0);" class="nav-link">Chat
                                                                    <div class="ml-auto badge badge-pill badge-info">
                                                                        8
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="javascript:void(0);" class="nav-link">Recover
                                                                    Password
                                                                </a>
                                                            </li>
                                                            <li class="nav-item-header nav-item">My Account
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="javascript:void(0);" class="nav-link">Settings
                                                                    <div class="ml-auto badge badge-success">New
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="javascript:void(0);" class="nav-link">Messages
                                                                    <div class="ml-auto badge badge-warning">512
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="javascript:void(0);" class="nav-link">Logs
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-divider mb-0 nav-item"></li>
                                                </ul>
                                                <div class="grid-menu grid-menu-2col">
                                                    <div class="no-gutters row">
                                                        <div class="col-sm-6">
                                                            <button
                                                                class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                                <i
                                                                    class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                                Message Inbox
                                                            </button>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <button
                                                                class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                                <i
                                                                    class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                                <b>Support Tickets</b>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-divider nav-item">
                                                    </li>
                                                    <li class="nav-item-btn text-center nav-item">
                                                        <button class="btn-wide btn btn-primary btn-sm">
                                                            Open Messages
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                    <a href="viewemployees.php"
                                                        class="ml-auto btn btn-sm btn-danger">Back</a>
                                                </div>
                                                <div class="card-body">
                                                    <?php
                                                                include './_error.php'; ?>
                                                    <form action="" method="post">
                                                        <input type="hidden" name="userIdGet" id="userIdGet"
                                                            value="<?= $_GET['actionEdit']; ?>" class="form-control">
                                                        <div class="form-row">
                                                            <div class="col-md-4 form-group">
                                                                <label for="username">Username</label>
                                                                <input type="text" name="username" id="username"
                                                                    placeholder="Username"
                                                                    value="<?= $row['username']; ?>"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <label for="fullname">Fullname</label>
                                                                <input type="text" name="fullname" id="fullname"
                                                                    placeholder="Fullname" spellcheck="false"
                                                                    value="<?= $row['fullname']; ?>"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="sex">Gender &nbsp;</label><span
                                                                    class="badge badge-success"><?= $row['gender']; ?></span>
                                                                <select name="gender" id="sex" class="form-control">
                                                                    <option value=""> -- Select -- </option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="email">E-mail</label>
                                                                <input type="email" name="email" id="email"
                                                                    placeholder="E-mail@ramall.cd" spellcheck="false"
                                                                    value="<?= $row['email']; ?>" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="status">Status &nbsp;</label><span
                                                                    class="badge badge-success"><?= $row['status']; ?></span>
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
                                                                <div class="form-group addWomanForm"
                                                                    style="display: none;">
                                                                    <label for="woman">Partner name</label>
                                                                    <input type="text" name="woman" id="woman"
                                                                        placeholder="Enter the name"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button type="button"
                                                                        class="addWoman btn btn-sm btn-warning">Add
                                                                        Partner
                                                                    </button>
                                                                    <button type="button" id="AddWomanBtn"
                                                                        style="display: none;"
                                                                        class="addWomanForm btn btn-sm btn-success">
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
                                                                            <input type="text" name="woman" id="woman"
                                                                                value="<?= $row['woman_name']; ?>"
                                                                                placeholder="Woman" spellcheck="false"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="col-md-5 form-group">
                                                                            <div id="errorChildren"></div>
                                                                            <label for="children">Number of
                                                                                children</label>
                                                                            <input type="number" max="3" name="children"
                                                                                id="children"
                                                                                value="<?= $row['children']; ?>"
                                                                                placeholder="Entre the number of children"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <?php endif; ?>
                                                            <div class="form-group col-md-4 mt-2">
                                                                <button type="submit" name="UpdateUserGET"
                                                                    id="<?= $row['id']; ?>"
                                                                    class="UpdateUserGET btn btn-block btn-warning">Update</button>
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
                                                            <button class="my-1 btn_oper btn btn-success" type="button"
                                                                id="<?= $row['id']; ?>">Record</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card my-1">
                                                <div class="card-body">
                                                    <form action="" method="post">
                                                        <div id="errorSalary"></div>
                                                        <div class="form-group">
                                                            <label for="salary">Salary</label> <span
                                                                class="badge badge-success"><?= $row['salary']; ?></span>
                                                            <input type="number" id="salary"
                                                                value="<?= $row['salary']; ?>"
                                                                placeholder="Enter salary" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="btn btn-success btn_salary"
                                                                id="<?= $row['id']; ?>">Record</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <?php if ($row['children'] != '') : ?>
                                            <div class="card my-2">
                                                <div class="card-header">
                                                    <p>Children</p>
                                                </div>
                                                <div class="card-body">
                                                    <div id="resultChildren2"></div>
                                                    <div id="resultChildren">
                                                        <p class="alert alert-warning">You may insert information about
                                                            he/her kid but network is bad</p>
                                                    </div>
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
                                            <div
                                                class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6">
                                                </i>Easy
                                                Employees
                                            </div>
                                            <div class="btn-actions-pane-right actions-icon-btn">
                                                <div class="btn-group dropdown">
                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="btn-icon btn-icon-only btn btn-link"><i
                                                            class="pe-7s-menu btn-icon-wrapper"></i></button>
                                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                                        class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                        <h6 tabindex="-1" class="dropdown-header">
                                                            Header</h6>
                                                        <button type="button" tabindex="0" class="dropdown-item"><i
                                                                class="dropdown-icon lnr-inbox">
                                                            </i><span>Menus</span>
                                                        </button>
                                                        <button type="button" tabindex="0" class="dropdown-item"><i
                                                                class="dropdown-icon lnr-file-empty">
                                                            </i><span>Settings</span>
                                                        </button>
                                                        <button type="button" tabindex="0" class="dropdown-item"><i
                                                                class="dropdown-icon lnr-book">
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
                                                <table style="width: 100%;" id="example"
                                                    class="table table-sm table-responsive-sm table-hover table-striped table-bordered">
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
                                                                    <a href="viewemployees.php?actionEdit=<?= $row['id']; ?>"
                                                                        class="btn btn-success"><i
                                                                            class="fa fa-edit"></i></a>
                                                                    <a href="viewemployees.php?actionDelete=<?= $row['id']; ?>"
                                                                        class="btn btn-danger"
                                                                        title="Delete <?= $row['fullnane'] ?>?"><i
                                                                            class="fa fa-trash"></i></a>
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