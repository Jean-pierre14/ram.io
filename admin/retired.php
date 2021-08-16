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
                        Retired
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
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 border-right-2">
                                            <h4>Add new retired</h4>
                                            <form action="" method="post">
                                                <input type="text" id="employeesSearch" name="search" placeholder="Search..." class="form-control">
                                            </form>
                                            <div id="ResultEmployees" class="my-3"></div>
                                        </div>
                                        <div class="col-md-9 col-sm-12">
                                        <h4>Retired List and informations</h4>
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <input type="search" autocomplete="off" name="search" id="search_retired" placeholder="Search..." class="form-control">
                                            </div>
                                        </form>
                                            <?php if(isset($_GET['actionEdit'])):?>
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6 col-sm-12">
                                                        <?php include '_userGet.php';?>
                                                    </div>
                                                </div>
                                            <?php else:?>
                                                <div class="card card-body">
                                                    <div id="searchResult"></div>
                                                    <div id="resultRetired"></div>
                                                </div>
                                            <?php endif;?>
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