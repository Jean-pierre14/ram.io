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
                        Add Employee
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
                                            <?php include './_add_Form.php'; ?>
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