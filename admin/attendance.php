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
                        Attendance
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
                                <div class="container-fluid p-0 mb-5">
                                    <div class="row justify-content-center">
                                        <div id="" class="col-md-5 col-sm-12">
                                            <form action="" method="post" class="mb-2">
                                                <input type="search" id="searchAtt" name="searchAtt" autocomplete="off" placeholder="Search..." class="form-control">
                                            </form>
                                            <div id="attendanceResults" style="max-height: 470px; overflow-y: auto">
                                                <img src="../img/loading.gif" alt="Loading..." class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <div id="SeeData">

                                                <div class="card card-body">
                                                    <h3 class="text-center" class="text-center">Welcome to the Attendance</h3>
                                                    <p class="text-center">You know how to do!</p>
                                                    <button class="btn btn-sm btn-success"><?= date('Y-m-d');?></button>
                                                </div>
                                            </div>
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