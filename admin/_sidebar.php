<div class="app-sidebar-wrapper">
    <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="<?= $prooject_name; ?>"
                class="logo-src"></a>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
        <div class="scrollbar-sidebar scrollbar-container">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <li class="app-sidebar__heading">Menu HR</li>
                    <li class="mm-active">
                        <a href="#">
                            <i class="metismenu-icon pe-7s-rocket"></i>
                            <?= $prooject_name; ?>
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul class="mm-show">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="addemployee.php">Add Employee</a></li>
                            <li><a href="viewemployees.php">View employees</a></li>
                            <li><a href="retired.php">Retired</a></li>
                            <li><a href="payslip.php">Pay Slip</a></li>
                            <li><a href="attendance.php">Attendance</a></li>
                            <li><a href="message.php">Messages</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>