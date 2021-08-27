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
                                            <div class="my-3 max-height">
                                                <?php
                                                    $output2 = '';
                                                    $Result = mysqli_query($con, "SELECT id, fullname FROM employees_tb WHERE oper = 'OPERATIONNEL' ORDER BY fullname");
                                                    if(@mysqli_num_rows($Result) > 0){
                                                        $output2 .= '<div class="list-group">';
                                                        while($row = mysqli_fetch_array($Result)){
                                                            $output2 .= '
                                                                <a class="list-group-item list-group-item-action" href="humanresource.php?action='.$row['id'].'">'.$row['fullname'].'</a>
                                                            ';
                                                        }
                                                        $output2 .= '</div>';
                                                    }else{
                                                        $output2 .= '<p class="alert alert-warning">Sorry there is no data</p>';
                                                    }
                                                    print $output2;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card">
                                                <?php if(isset($_GET['action'])):
                                                    $ID = $_GET['action'];
                                                    
                                                    $GetThis = mysqli_query($con, "SELECT * FROM employees_tb WHERE id = $ID");
                                                    if(@mysqli_num_rows($GetThis) > 0){
                                                        $RowThis = mysqli_fetch_array($GetThis);
                                                        ?>
                                                        <div class="card-body">
                                                            <h2><?= $RowThis['fullname'];?></h2>
                                                            <table class="table table-sm table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Field</th>
                                                                        <th>Value</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Username:</td>
                                                                        <td><?= $RowThis['username'];?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sex:</td>
                                                                        <td><?= $RowThis['gender'];?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Email:</td>
                                                                        <td><?= $RowThis['email'];?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Status</td>
                                                                        <td><?= $RowThis['oper'];?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <form method="post">
                                                                <select class="form-control">
                                                                    <option value="2">Human Resource</option>
                                                                    <option value="1">Administrator</option>
                                                                    <option value="0">Employee</option>
                                                                </select>
                                                                <button type="submit" class="btn btn-sm btn-success">Register</button>
                                                            </form>
                                                        </div>
                                                        <?php
                                                    }else{
                                                        print '<div class="card-body"><p class="alert alert-danger">Sorry Guy but you try :(</p></div>';
                                                    }
                                                    ?>
                                                <?php else:?>
                                                    <div class="card-body">
                                                        <h2>Human Resource and User Level</h2>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi explicabo sunt odio tempore et consequuntur quas, recusandae reiciendis veniam eum, dolorum voluptates itaque voluptas suscipit iusto ducimus blanditiis atque culpa?
                                                        </p>
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
            </div>
            <? include './_app.footer.php'; ?>
        </div>
    </div>
</div>

<?php include '_footer.php'; ?>