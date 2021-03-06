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
                                        <div class="col-md-7 col-sm-12">
                                            <h4>List of employees payed <?= date('m-Y');?></h4>
                                            <div class="card card-body mb-2">
                                                
                                                <div id="PayedData" class="max-height">
                                                    <img src="../img/loading.gif" alt="Loadding" class="imgLoading">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-12">
                                            <form action="" method="post" class="mb-2">
                                                <input type="search" id="search_text" placeholder="Search..."
                                                    class="form-control"/>
                                            </form>
                                            <div id="payResults" class="max-height"></div>
                                            <div id="resultSearch" class="max-height"></div>
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