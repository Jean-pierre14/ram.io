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
                        Dashboard
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
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                        <i class="typcn typcn-th-large-outline"></i>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-vicious-stance">
                                                <div class="menu-header-image opacity-4" style="background-image: url('assets/images/dropdown-header/city5.jpg');">
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
                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                        Automation
                                                    </button>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i class="pe-7s-piggy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                        </i>
                                                        Reports
                                                    </button>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i class="pe-7s-config icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                        </i>
                                                        Settings
                                                    </button>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i class="pe-7s-browser icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                        </i>
                                                        Content
                                                    </button>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i class="pe-7s-hourglass icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                                        </i>
                                                        Activity
                                                    </button>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                        <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
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
                                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 btn btn-link">
                                        <i class="typcn typcn-bell"></i>
                                        <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header mb-0">
                                            <div class="dropdown-menu-header-inner bg-night-sky">
                                                <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/city2.jpg');">
                                                </div>
                                                <div class="menu-header-content text-light">
                                                    <h5 class="menu-header-title">Notifications</h5>
                                                    <h6 class="menu-header-subtitle">You have <b>21</b> unread
                                                        messages</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                                    <span>Messages</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                                    <span>Events</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                                    <span>System</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <div class="p-3">
                                                            <div class="notifications-box">
                                                                <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands
                                                                                    Meeting</h4><span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Yet another one, at <span class="text-success">15:00
                                                                                        PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the
                                                                                    production release
                                                                                    <span class="badge badge-danger ml-2">NEW</span>
                                                                                </h4>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Something
                                                                                    not important
                                                                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img src="assets/images/avatars/1.jpg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img src="assets/images/avatars/2.jpg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img src="assets/images/avatars/3.jpg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img src="assets/images/avatars/4.jpg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img src="assets/images/avatars/5.jpg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img src="assets/images/avatars/9.jpg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img src="assets/images/avatars/7.jpg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                            <div class="avatar-icon">
                                                                                                <img src="assets/images/avatars/8.jpg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                            <div class="avatar-icon">
                                                                                                <i>+</i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </h4>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">This dot
                                                                                    has an info state</h4><span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands
                                                                                    Meeting</h4><span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Yet another one, at <span class="text-success">15:00
                                                                                        PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the
                                                                                    production release
                                                                                    <span class="badge badge-danger ml-2">NEW</span>
                                                                                </h4>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">This dot
                                                                                    has a dark state</h4><span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <div class="p-3">
                                                            <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success">
                                                                            </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">All Hands
                                                                                Meeting</h4>
                                                                            <p>Lorem ipsum dolor sic amet, today at
                                                                                <a href="javascript:void(0);">12:00
                                                                                    PM</a>
                                                                            </p><span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning">
                                                                            </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <p>Another meeting today, at <b class="text-danger">12:00 PM</b>
                                                                            </p>
                                                                            <p>Yet another one, at <span class="text-success">15:00
                                                                                    PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger">
                                                                            </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Build the
                                                                                production release</h4>
                                                                            <p>Lorem ipsum dolor sit
                                                                                amit,consectetur eiusmdd tempor
                                                                                incididunt ut labore et dolore magna
                                                                                elit enim at minim veniam quis
                                                                                nostrud</p><span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary">
                                                                            </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title text-success">
                                                                                Something not important</h4>
                                                                            <p>Lorem ipsum dolor sit
                                                                                amit,consectetur elit enim at minim
                                                                                veniam quis nostrud</p><span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success">
                                                                            </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">All Hands
                                                                                Meeting</h4>
                                                                            <p>Lorem ipsum dolor sic amet, today at
                                                                                <a href="javascript:void(0);">12:00
                                                                                    PM</a>
                                                                            </p><span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning">
                                                                            </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <p>Another meeting today, at <b class="text-danger">12:00 PM</b>
                                                                            </p>
                                                                            <p>Yet another one, at <span class="text-success">15:00
                                                                                    PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger">
                                                                            </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Build the
                                                                                production release</h4>
                                                                            <p>Lorem ipsum dolor sit
                                                                                amit,consectetur eiusmdd tempor
                                                                                incididunt ut labore et dolore magna
                                                                                elit enim at minim veniam quis
                                                                                nostrud</p><span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary">
                                                                            </i></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title text-success">
                                                                                Something not important</h4>
                                                                            <p>Lorem ipsum dolor sit
                                                                                amit,consectetur elit enim at minim
                                                                                veniam quis nostrud</p><span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                                <div class="scroll-area-sm">
                                                    <div class="scrollbar-container">
                                                        <div class="no-results pt-3 pb-0">
                                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);">
                                                                </div>
                                                                <span class="swal2-success-line-tip"></span>
                                                                <span class="swal2-success-line-long"></span>
                                                                <div class="swal2-success-ring"></div>
                                                                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);">
                                                                </div>
                                                                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);">
                                                                </div>
                                                            </div>
                                                            <div class="results-subtitle">All caught up!</div>
                                                            <div class="results-title">There are no system errors!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                <img width="42" class="rounded" src="assets/images/avatars/3.jpg" alt="">
                                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                <div class="dropdown-menu-header">
                                                    <div class="dropdown-menu-header-inner bg-info">
                                                        <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city1.jpg');">
                                                        </div>
                                                        <div class="menu-header-content text-left">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Minnie Betts
                                                                        </div>
                                                                        <div class="widget-subheading opacity-8">A
                                                                            short profile description
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right mr-2">
                                                                        <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                        </button>
                                                                    </div>
                                                                </div>
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
                                                                <a href="javascript:void(0);" class="nav-link">Recover Password
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
                                                            <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                                <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                                Message Inbox
                                                            </button>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                                <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
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
                    <div class="app-inner-bar">
                        <div class="inner-bar-left">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link show-menu-btn">
                                        <i class="fa fa-align-left mr-2"></i>
                                        <span class="hide-text-md">Show page menu</span>
                                    </a>
                                    <a href="#" class="nav-link close-menu-btn">
                                        <i class="fa fa-align-right mr-2"></i>
                                        <span class="hide-text-md">Close page menu</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="inner-bar-center">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                                        <span>Overview</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-1">
                                        <span>Audiences</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-2">
                                        <span>Demographics</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link opacity-8">
                                        <span>More</span>
                                        <i class="fa fa-angle-down ml-1 opacity-6"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                        <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty">
                                            </i><span>Settings</span></button>
                                        <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <div class="p-3 text-right">
                                            <button class="mr-2 btn-shadow btn-sm btn btn-link">View
                                                Details</button>
                                            <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="inner-bar-right">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link open-right-drawer">
                                        <span class="hide-text-md">Show right drawer</span>
                                        <i class="fa fa-align-right ml-2"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="app-inner-layout__wrapper">

                        <div class="app-inner-layout__content">
                            <div class="tab-content">
                                <div class="container-fluid">
                                    <div class="mb-3 card">
                                        <div class="card-header-tab card-header">
                                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                                                Dashboard <?= $prooject_name; ?>
                                            </div>
                                            <div class="btn-actions-pane-right text-capitalize">
                                                <button class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus btn-sm">
                                                    View All
                                                </button>
                                            </div>
                                        </div>
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 col-md-4 col-xl-4">
                                                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                                        <i class="lnr-laptop-phone text-dark opacity-8"></i>
                                                    </div>
                                                    <div class="widget-chart-content">
                                                        <div class="widget-subheading">All Employees</div>
                                                        <div class="widget-numbers" id="allEmployees">1,7M</div>
                                                        <div class="widget-description opacity-8 text-focus">
                                                            <div class="d-inline text-danger pr-1">
                                                                <i class="fa fa-angle-down"></i>
                                                                <span class="pl-1">54.1%</span>
                                                            </div>
                                                            less earnings
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="divider m-0 d-md-none d-sm-block"></div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xl-4">
                                                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                                        <i class="lnr-graduation-hat text-white"></i>
                                                    </div>
                                                    <div class="widget-chart-content">
                                                        <div class="widget-subheading">Men Employees</div>
                                                        <div class="widget-numbers" id="M_emp"><span>9M</span></div>
                                                        <div class="widget-description opacity-8 text-focus">
                                                            Rate:
                                                            <span class="text-info pl-1">
                                                                <i class="fa fa-angle-down"></i>
                                                                <span class="pl-1">14.1%</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="divider m-0 d-md-none d-sm-block"></div>
                                            </div>
                                            <div class="col-sm-12 col-md-4 col-xl-4">
                                                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                                        <i class="lnr-apartment text-white"></i>
                                                    </div>
                                                    <div class="widget-chart-content">
                                                        <div class="widget-subheading">Women Employees</div>
                                                        <div class="widget-numbers text-success"><span>$563</span>
                                                        </div>
                                                        <div class="widget-description text-focus">
                                                            Rate:
                                                            <span class="text-warning pl-1">
                                                                <i class="fa fa-angle-up"></i>
                                                                <span class="pl-1">7.35%</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center d-block p-3 card-footer">
                                            <button class="btn-pill btn-wide fsize-1 btn btn-primary">
                                                <span class="mr-2 opacity-7">
                                                    <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                                </span>
                                                <span class="mr-1">View Complete Report</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xl-3">
                                            <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">
                                                                <div class="widget-chart-flex">
                                                                    <div class="fsize-4">
                                                                        <small class="opacity-5">$</small>
                                                                        <span>874</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h6 class="widget-subheading mb-0 opacity-5">sales last
                                                            month</h6>
                                                    </div>
                                                    <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                                        <div class="col-md-9">
                                                            <div id="dashboard-sparklines-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-3">
                                            <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">
                                                                <div class="widget-chart-flex">
                                                                    <div class="fsize-4">
                                                                        <small class="opacity-5">$</small>
                                                                        <span>1283</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h6 class="widget-subheading mb-0 opacity-5">sales Income
                                                        </h6>
                                                    </div>
                                                    <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                                        <div class="col-md-9">
                                                            <div id="dashboard-sparklines-2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-3">
                                            <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">
                                                                <div class="widget-chart-flex">
                                                                    <div class="fsize-4">
                                                                        <small class="opacity-5">$</small>
                                                                        <span>1286</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h6 class="widget-subheading mb-0 opacity-5">last month
                                                            sales</h6>
                                                    </div>
                                                    <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                                        <div class="col-md-9">
                                                            <div id="dashboard-sparklines-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-3">
                                            <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">
                                                                <div class="widget-chart-flex">
                                                                    <div class="fsize-4">
                                                                        <small class="opacity-5">$</small>
                                                                        <span>564</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h6 class="widget-subheading mb-0 opacity-5">total revenue
                                                        </h6>
                                                    </div>
                                                    <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                                        <div class="col-md-9">
                                                            <div id="dashboard-sparklines-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

                                    <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
                                        <div class="card">
                                            <div class="no-gutters row">
                                                <div class="col-md-12 col-lg-4">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="bg-transparent list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-outer">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Total Orders
                                                                            </div>
                                                                            <div class="widget-subheading">Last year
                                                                                expenses
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <div class="widget-numbers text-success">
                                                                                1896
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="bg-transparent list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-outer">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Clients
                                                                            </div>
                                                                            <div class="widget-subheading">Total
                                                                                Clients
                                                                                Profit
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <div class="widget-numbers text-primary">
                                                                                $12.6k
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="bg-transparent list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-outer">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Followers
                                                                            </div>
                                                                            <div class="widget-subheading">People
                                                                                Interested
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <div class="widget-numbers text-danger">
                                                                                45,9%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="bg-transparent list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-outer">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Products
                                                                                Sold
                                                                            </div>
                                                                            <div class="widget-subheading">Total
                                                                                revenue
                                                                                streams
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <div class="widget-numbers text-warning">
                                                                                $3M
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-12 col-lg-4">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="bg-transparent list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-outer">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Total Orders
                                                                            </div>
                                                                            <div class="widget-subheading">Last year
                                                                                expenses
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <div class="widget-numbers text-success">
                                                                                1896
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="bg-transparent list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-outer">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Clients
                                                                            </div>
                                                                            <div class="widget-subheading">Total
                                                                                Clients
                                                                                Profit
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right">
                                                                            <div class="widget-numbers text-primary">
                                                                                $12.6k
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
            <div class="app-wrapper-footer">
                <div class="app-footer">
                    <div class="">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <div class="footer-dots">
                                    <div class="dropdown">
                                        <a aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dot-btn-wrapper">
                                            <i class="dot-btn-icon typcn typcn-warning-outline text-warning"></i>
                                            <div class="badge badge-dot badge-abs badge-dot-sm badge-danger">Danger
                                            </div>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
                                            <div class="dropdown-menu-header mb-0">
                                                <div class="dropdown-menu-header-inner bg-deep-blue">
                                                    <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');">
                                                    </div>
                                                    <div class="menu-header-content text-dark">
                                                        <h5 class="menu-header-title">Notifications</h5>
                                                        <h6 class="menu-header-subtitle">You have <b>21</b> unread
                                                            messages</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header1">
                                                        <span>Messages</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header1">
                                                        <span>Events</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header1">
                                                        <span>System</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-messages-header1" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="p-3">
                                                                <div class="notifications-box">
                                                                    <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">All
                                                                                        Hands Meeting</h4><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <p>Yet another one, at <span class="text-success">15:00
                                                                                            PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Build
                                                                                        the production release
                                                                                        <span class="badge badge-danger ml-2">NEW</span>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">
                                                                                        Something not important
                                                                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon">
                                                                                                    <img src="assets/images/avatars/1.jpg" alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon">
                                                                                                    <img src="assets/images/avatars/2.jpg" alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon">
                                                                                                    <img src="assets/images/avatars/3.jpg" alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon">
                                                                                                    <img src="assets/images/avatars/4.jpg" alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon">
                                                                                                    <img src="assets/images/avatars/5.jpg" alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon">
                                                                                                    <img src="assets/images/avatars/9.jpg" alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon">
                                                                                                    <img src="assets/images/avatars/7.jpg" alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon">
                                                                                                    <img src="assets/images/avatars/8.jpg" alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                                <div class="avatar-icon">
                                                                                                    <i>+</i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">This
                                                                                        dot has an info state</h4>
                                                                                    <span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">All
                                                                                        Hands Meeting</h4><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <p>Yet another one, at <span class="text-success">15:00
                                                                                            PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Build
                                                                                        the production release
                                                                                        <span class="badge badge-danger ml-2">NEW</span>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">This
                                                                                        dot has a dark state</h4>
                                                                                    <span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-events-header1" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="p-3">
                                                                <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success">
                                                                                </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands
                                                                                    Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today
                                                                                    at <a href="javascript:void(0);">12:00
                                                                                        PM</a></p><span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning">
                                                                                </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Another meeting today, at <b class="text-danger">12:00
                                                                                        PM</b></p>
                                                                                <p>Yet another one, at <span class="text-success">15:00
                                                                                        PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger">
                                                                                </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the
                                                                                    production release</h4>
                                                                                <p>Lorem ipsum dolor sit
                                                                                    amit,consectetur eiusmdd tempor
                                                                                    incididunt ut labore et dolore
                                                                                    magna elit enim at minim veniam
                                                                                    quis nostrud</p><span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary">
                                                                                </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title text-success">
                                                                                    Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit
                                                                                    amit,consectetur elit enim at
                                                                                    minim veniam quis nostrud</p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success">
                                                                                </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands
                                                                                    Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today
                                                                                    at <a href="javascript:void(0);">12:00
                                                                                        PM</a></p><span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning">
                                                                                </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Another meeting today, at <b class="text-danger">12:00
                                                                                        PM</b></p>
                                                                                <p>Yet another one, at <span class="text-success">15:00
                                                                                        PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger">
                                                                                </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the
                                                                                    production release</h4>
                                                                                <p>Lorem ipsum dolor sit
                                                                                    amit,consectetur eiusmdd tempor
                                                                                    incididunt ut labore et dolore
                                                                                    magna elit enim at minim veniam
                                                                                    quis nostrud</p><span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary">
                                                                                </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title text-success">
                                                                                    Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit
                                                                                    amit,consectetur elit enim at
                                                                                    minim veniam quis nostrud</p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-errors-header1" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="no-results pt-3 pb-0">
                                                                <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);">
                                                                    </div>
                                                                    <span class="swal2-success-line-tip"></span>
                                                                    <span class="swal2-success-line-long"></span>
                                                                    <div class="swal2-success-ring"></div>
                                                                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);">
                                                                    </div>
                                                                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);">
                                                                    </div>
                                                                </div>
                                                                <div class="results-subtitle">All caught up!</div>
                                                                <div class="results-title">There are no system
                                                                    errors!</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View
                                                        Latest Changes</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dots-separator"></div>
                                    <div class="dropdown">
                                        <a class="dot-btn-wrapper dd-chart-btn-2" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
                                            <i class="dot-btn-icon typcn typcn-chart-bar-outline text-danger"></i>
                                            <div class="badge badge-dot badge-abs badge-dot-sm badge-warning">
                                                Warning</div>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-premium-dark">
                                                    <div class="menu-header-image" style="background-image: url('assets/images/dropdown-header/abstract4.jpg');">
                                                    </div>
                                                    <div class="menu-header-content text-white">
                                                        <h5 class="menu-header-title">Users Online
                                                        </h5>
                                                        <h6 class="menu-header-subtitle">Recent Account Activity
                                                            Overview
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-chart">
                                                <div class="widget-chart-content">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg opacity-9 bg-focus">
                                                        </div>
                                                        <i class="lnr-users text-white">
                                                        </i>
                                                    </div>
                                                    <div class="widget-numbers">
                                                        <span>344k</span>
                                                    </div>
                                                    <div class="widget-subheading pt-2">
                                                        Profile views since last login
                                                    </div>
                                                    <div class="widget-description text-danger">
                                                        <span class="pr-1">
                                                            <span>176%</span>
                                                        </span>
                                                        <i class="fa fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                                <div class="widget-chart-wrapper">
                                                    <div id="dashboard-sparkline-carousel-4-pop"></div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mt-0 nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-shine btn-wide btn-pill btn btn-warning btn-sm">
                                                        <i class="fa fa-cog fa-spin mr-2">
                                                        </i>
                                                        View Details
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="app-footer-right">
                                <ul class="header-megamenu nav">
                                    <li class="nav-item">
                                        <a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link">
                                            Footer Menu
                                            <div class="badge badge-success ml-0 ml-1">
                                                <small>Old</small>
                                            </div>
                                            <i class="fa fa-angle-up ml-2 opacity-8"></i>
                                        </a>
                                        <div class="rm-max-width rm-pointers">
                                            <div class="d-none popover-custom-content">
                                                <div class="dropdown-mega-menu dropdown-mega-menu-sm">
                                                    <div class="grid-menu grid-menu-2col">
                                                        <div class="no-gutters row">
                                                            <div class="col-sm-6 col-xl-6">
                                                                <ul class="nav flex-column">
                                                                    <li class="nav-item-header nav-item">Overview
                                                                    </li>
                                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-inbox">
                                                                            </i><span>Contacts</span></a></li>
                                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-book">
                                                                            </i><span>Incidents</span>
                                                                            <div class="ml-auto badge badge-pill badge-danger">
                                                                                5</div>
                                                                        </a></li>
                                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-picture">
                                                                            </i><span>Companies</span></a></li>
                                                                    <li class="nav-item"><a disabled="" href="javascript:void(0);" class="nav-link disabled"><i class="nav-link-icon lnr-file-empty">
                                                                            </i><span>Dashboards</span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6 col-xl-6">
                                                                <ul class="nav flex-column">
                                                                    <li class="nav-item-header nav-item">Sales &amp;
                                                                        Marketing</li>
                                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Queues</a></li>
                                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Resource Groups</a>
                                                                    </li>
                                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Goal Metrics
                                                                            <div class="ml-auto badge badge-warning">
                                                                                3</div>
                                                                        </a></li>
                                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Campaigns</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '_footer.php'; ?>