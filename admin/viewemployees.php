<?php include '_header.php'; ?>

<div class="app-container app-theme-gray">
    <div class="app-main">
        <?php include '_sidebar.php'; ?>
        <div class="app-sidebar-overlay d-none animated fadeIn"></div>
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="header-mobile-wrapper">
                    <div class="app-header__logo">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template" class="logo-src"></a>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                        <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="app-header">
                    <div class="page-title-heading">
                        Employees
                        <div class="page-title-subheading">
                            <?= $prooject_name; ?> we are the best
                        </div>
                    </div>

                    <div class="app-header-overlay d-none animated fadeIn"></div>
                </div>
                <div class="app-inner-layout app-inner-layout-page">

                    <div class="app-inner-layout__wrapper">

                        <div class="app-inner-layout__content">
                            <div class="tab-content">
                                <div class="container-fluid">
                                    <a href="addemployee.php" class="mb-2 btn btn-sm btn-success">Add new</a>

                                    <?php if (isset($_GET['actionEdit'])) : ?>
                                        <div class="card mb-3">
                                            <div class="card-header">
                                                <div class="close">
                                                    <a href="viewemployees.php" class="btn btn-sm btn-danger">Back</a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="" method="post">
                                                    <div class="form-row">
                                                        <div class="col-md-4 form-group">
                                                            <label for="username">Username</label>
                                                            <input type="text" name="username" id="username" placeholder="Username" value="<?= $username; ?>" class="form-control">
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <label for="fullname">Fullname</label>
                                                            <input type="text" name="fullname" id="fullname" placeholder="Fullname" spellcheck="false" value="<?= $fullname; ?>" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="sex">Gender</label>
                                                            <select name="gender" id="sex" class="form-control">
                                                                <option> -- Select -- </option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="email">E-mail</label>
                                                            <input type="email" name="email" id="email" placeholder="E-mail@ramall.cd" spellcheck="false" value="<?= $email ?>" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="status">Status</label>
                                                            <select name="status" id="status" class="form-control">
                                                                <option> -- select -- </option>
                                                                <option value="Single">Single</option>
                                                                <option value="Fiance">Fiance</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorce">Divorce</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="card card-body">
                                                                <div class="row">
                                                                    <div class="form-group col-md-7">
                                                                        <label for="woman">Woman name</label>
                                                                        <input type="text" name="woman" id="woman" value="<?= $woman; ?>" placeholder="Woman" spellcheck="false" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-5 form-group">
                                                                        <label for="children">Number of children</label>
                                                                        <input type="number" name="children" id="children" value="<?= $children; ?>" placeholder="Entre the number of children" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-2 card card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6 form-group">
                                                                        <label for="pass">Password</label>
                                                                        <input type="password" name="password1" id="pass" value="<?= $password1; ?>" placeholder="Password" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                        <label for="pass2">Confirm password</label>
                                                                        <input type="password" name="password2" id="pass2" value="<?= $password2; ?>" placeholder="Confirm password" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4 mt-2">
                                                            <button type="submit" class="btn btn-block btn-warning">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <form action="" method="post">
                                            <input type="search" id="search" placeholder="Search..." class="mb-2 form-control">
                                        </form>
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
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
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