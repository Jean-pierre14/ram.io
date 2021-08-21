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
                        HUMAN RESSOURCE
                        <div class="page-title-subheading">
                            <?= $prooject_name; ?>: We are the best
                        </div>
                    </div>
                    <?php include '_app.user.php'; ?>
                    <div class="app-header-overlay d-none animated fadeIn"></div>
                </div>
                <div class="app-inner-layout app-inner-layout-page">
                    <div class="app-inner-layout__wrapper">
                        <div class="app-inner-layout__content">
                            <div class="tab-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <form action="" method="post">
                                                <input type="search" name="search" id="searchHR" placeholder="Search..." class="form-control">
                                            </form>
                                        </div>
                                        <div class="col-md-8">
                                            fata
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <? include './_app.footer.php'; ?>
        </div>
    </div>
</div>

<?php include '_footer.php'; ?>