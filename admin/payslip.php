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
                    <?php include './_app.user.php'; ?>
                    <div class="app-header-overlay d-none animated fadeIn"></div>
                </div>
                <div class="app-inner-layout app-inner-layout-page">
                    <div class="app-inner-layout__wrapper">
                        <div class="app-inner-layout__content">
                            <div class="tab-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-12">
                                            <form action="" method="post" class="mb-2">
                                                <input type="search" id="search_text" placeholder="Seach..."
                                                    class="form-control">
                                            </form>
                                            <div class="card card-body mb-2">
                                                <div id="resultSearch"></div>
                                                <div id="payResults text-center">
                                                    <img src="../img/loading.gif" alt="Loadding" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-12">
                                            <form action="" method="post">
                                                <input type="text" name="search" id="searchPayslip" placeholder="Search..." class="form-control">
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
<script>
$(document).ready(function() {

    $('#seach_text').keyup(function() {

        let action = 'search_txt'
        let txt = $(this).val()
        if (txt != '') {
            $.ajax({
                url: '../config/config.jp.php',
                method: 'POST',
                data: {
                    action,
                    txt
                },
                success: function(data) {
                    $('#resultSearch').html(data)
                    $('#payResults').hide(300)
                }
            })
        } else {
            $('#resultSearch').html('')
            $('#payResults').show(300)
        }
    })
})
</script>