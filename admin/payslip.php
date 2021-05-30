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
                        Pay Slip
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
                                    <div class="card card-body">
                                        <ul class="todo-list-wrapper list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="todo-indicator bg-warning"></div>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-2">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" id="exampleCustomCheckbox12"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="exampleCustomCheckbox12">&nbsp;</label>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Wash the
                                                                car
                                                                <div class="badge badge-danger ml-2">
                                                                    Rejected
                                                                </div>
                                                            </div>
                                                            <div class="widget-subheading">
                                                                <i>Written
                                                                    by Bob</i>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right widget-content-actions">
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-danger">
                                                                <i class="fa fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="todo-indicator bg-focus"></div>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-2">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" id="exampleCustomCheckbox1"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="exampleCustomCheckbox1">&nbsp;</label>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Task
                                                                with
                                                                dropdown menu
                                                            </div>
                                                            <div class="widget-subheading">
                                                                <div>By Johnny
                                                                    <div class="badge badge-pill badge-info ml-2">
                                                                        NEW
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right widget-content-actions">
                                                            <div class="d-inline-block dropdown">
                                                                <button type="button" data-toggle="dropdown"
                                                                    aria-haspopup="true" data-toggle="dropdown"
                                                                    aria-expanded="false"
                                                                    class="border-0 btn-transition btn btn-link">
                                                                    <i class="fa fa-ellipsis-h"></i>
                                                                </button>
                                                                <div tabindex="-1" role="menu" aria-hidden="true"
                                                                    class="dropdown-menu dropdown-menu-right">
                                                                    <h6 tabindex="-1" class="dropdown-header">
                                                                        Header</h6>
                                                                    <button type="button" disabled="" tabindex="-1"
                                                                        class="disabled dropdown-item">
                                                                        Action
                                                                    </button>
                                                                    <button type="button" tabindex="0"
                                                                        class="dropdown-item">
                                                                        Another Action
                                                                    </button>
                                                                    <div tabindex="-1" class="dropdown-divider">
                                                                    </div>
                                                                    <button type="button" tabindex="0"
                                                                        class="dropdown-item">
                                                                        Another Action
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="todo-indicator bg-primary"></div>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-2">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" id="exampleCustomCheckbox4"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="exampleCustomCheckbox4">&nbsp;</label>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading">Badge on
                                                                the
                                                                right task
                                                            </div>
                                                            <div class="widget-subheading">This
                                                                task
                                                                has show on hover actions!
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right widget-content-actions">
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                        </div>
                                                        <div class="widget-content-right ml-3">
                                                            <div class="badge badge-pill badge-success">
                                                                Latest Task
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="todo-indicator bg-info"></div>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-2">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" id="exampleCustomCheckbox2"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="exampleCustomCheckbox2">&nbsp;</label>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left mr-3">
                                                            <div class="widget-content-left">
                                                                <img width="42" class="rounded"
                                                                    src="assets/images/avatars/1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Go
                                                                grocery
                                                                shopping
                                                            </div>
                                                            <div class="widget-subheading">A
                                                                short
                                                                description for this todo item
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right widget-content-actions">
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-danger">
                                                                <i class="fa fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="todo-indicator bg-success"></div>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-2">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" id="exampleCustomCheckbox3"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="exampleCustomCheckbox3">&nbsp;</label>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading">
                                                                Development
                                                                Task
                                                            </div>
                                                            <div class="widget-subheading">
                                                                Finish
                                                                React ToDo List App
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="badge badge-warning mr-2">
                                                                69
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-danger">
                                                                <i class="fa fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="todo-indicator bg-warning"></div>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-2">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" id="exampleCustomCheckbox12"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="exampleCustomCheckbox12">&nbsp;</label>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Wash the
                                                                car
                                                                <div class="badge badge-danger ml-2">
                                                                    Rejected
                                                                </div>
                                                            </div>
                                                            <div class="widget-subheading">
                                                                <i>Written
                                                                    by Bob</i>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right widget-content-actions">
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-danger">
                                                                <i class="fa fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="todo-indicator bg-focus"></div>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-2">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" id="exampleCustomCheckbox1"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="exampleCustomCheckbox1">&nbsp;</label>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Task
                                                                with
                                                                dropdown menu
                                                            </div>
                                                            <div class="widget-subheading">
                                                                <div>By Johnny
                                                                    <div class="badge badge-pill badge-info ml-2">
                                                                        NEW
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right widget-content-actions">
                                                            <div class="d-inline-block dropdown">
                                                                <button type="button" data-toggle="dropdown"
                                                                    aria-haspopup="true" data-toggle="dropdown"
                                                                    aria-expanded="false"
                                                                    class="border-0 btn-transition btn btn-link">
                                                                    <i class="fa fa-ellipsis-h"></i>
                                                                </button>
                                                                <div tabindex="-1" role="menu" aria-hidden="true"
                                                                    class="dropdown-menu dropdown-menu-right">
                                                                    <h6 tabindex="-1" class="dropdown-header">
                                                                        Header</h6>
                                                                    <button type="button" disabled="" tabindex="-1"
                                                                        class="disabled dropdown-item">
                                                                        Action
                                                                    </button>
                                                                    <button type="button" tabindex="0"
                                                                        class="dropdown-item">
                                                                        Another Action
                                                                    </button>
                                                                    <div tabindex="-1" class="dropdown-divider">
                                                                    </div>
                                                                    <button type="button" tabindex="0"
                                                                        class="dropdown-item">
                                                                        Another Action
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="todo-indicator bg-primary"></div>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-2">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" id="exampleCustomCheckbox4"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="exampleCustomCheckbox4">&nbsp;</label>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading">Badge on
                                                                the
                                                                right task
                                                            </div>
                                                            <div class="widget-subheading">This
                                                                task
                                                                has show on hover actions!
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right widget-content-actions">
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                        </div>
                                                        <div class="widget-content-right ml-3">
                                                            <div class="badge badge-pill badge-success">
                                                                Latest Task
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="todo-indicator bg-info"></div>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-2">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" id="exampleCustomCheckbox2"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="exampleCustomCheckbox2">&nbsp;</label>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left mr-3">
                                                            <div class="widget-content-left">
                                                                <img width="42" class="rounded"
                                                                    src="assets/images/avatars/1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Go
                                                                grocery
                                                                shopping
                                                            </div>
                                                            <div class="widget-subheading">A
                                                                short
                                                                description for this todo item
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right widget-content-actions">
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-danger">
                                                                <i class="fa fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="todo-indicator bg-success"></div>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-2">
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" id="exampleCustomCheckbox3"
                                                                    class="custom-control-input"><label
                                                                    class="custom-control-label"
                                                                    for="exampleCustomCheckbox3">&nbsp;</label>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading">
                                                                Development
                                                                Task
                                                            </div>
                                                            <div class="widget-subheading">
                                                                Finish
                                                                React ToDo List App
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="badge badge-warning mr-2">
                                                                69
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-success">
                                                                <i class="fa fa-check"></i>
                                                            </button>
                                                            <button
                                                                class="border-0 btn-transition btn btn-outline-danger">
                                                                <i class="fa fa-trash-alt"></i>
                                                            </button>
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
            <?php include '_app.footer.php'; ?>
        </div>
    </div>
</div>

<?php include '_footer.php'; ?>