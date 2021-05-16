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
                        Add Employee
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
                                    <div class="mb-2 btn-group">
                                        <a href="viewemployees.php" class="btn btn-sm btn-success">View</a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-warning">Back</a>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Add Employee</h3>
                                        </div>
                                        <div class="card-body">
                                            <?php include './_error.php'; ?>
                                            <form action="" method="post">
                                                <div class="form-row">
                                                    <div class="col-md-4 form-group">
                                                        <label for="username">Username</label>
                                                        <input type="text" name="username" id="username" placeholder="Username" value="<?= $user; ?>" class="form-control">
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <label for="fullname">Fullname</label>
                                                        <input type="text" name="fullname" id="fullname" placeholder="Fullname" spellcheck="false" value="<?= $fullname; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="sex">Gender</label>
                                                        <select name="gender" id="sex" class="form-control">
                                                            <option value=""> -- Select -- </option>
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
                                                            <option value="">-- select --</option>
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
                                                        <button type="submit" name="addempl" class="btn btn-block btn-success">Register</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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