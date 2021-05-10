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
                                            <h3>add</h3>
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