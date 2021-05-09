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
                                    <form action="" method="post">
                                        <input type="search" id="search" placeholder="Search..." class="mb-2 form-control">
                                    </form>
                                    <div class="card mb-3">
                                        <div class="card-header-tab card-header">
                                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6">
                                                </i>Easy
                                                Dynamic Tables
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
                                            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
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