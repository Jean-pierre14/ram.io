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
                        Message
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
                                <input type="hidden" name="myId" id="myId" value="<?= $_SESSION['id'];?>"
                                    class="form-control">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-12">
                                            <div id="MessagesOfThis">
                                                <img src="../img/undraw_Random_thoughts_re_cob6.png" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-0">
                                            <form method="POST" autocomplete="off">
                                                <input type="text" name="search" id="search" placeholder="Search..."
                                                    class="form-control">
                                            </form>
                                            <div class="UI">
                                                <div id="SearchResult"></div>
                                                <div id="UsersMessage">
                                                    <img src="./assets/images/ajax-loader.gif" alt="Loading"
                                                        class="img-fluid img-center">
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
            <? include './_app.footer.php'; ?>
        </div>
    </div>
</div>

<?php include '_footer.php'; ?>

<script>
    $(document).ready(function () {
        UsersMessage()
        $('#search').keyup(function () {
            $('#SearchResult').html('')
            const id = $('#myId').val()
            let text = $(this).val()
            let txt = text.trim()

            if (!txt == '') {
                // alert(txt)
                $.ajax({
                    url: '../config/config.jp.php',
                    method: 'POST',
                    data: { action: 'SeachMessageUser', txt, id },
                    success: function (data) {
                        $('#UsersMessage').hide()
                        $('#SearchResult').html(data)
                    }
                })
            } else {
                $('#SearchResutl').html('')
                $('#UsersMessage').show()
                UsersMessage()
            }
        })
        $(document).on("click", ".list-group-item", function () {
            let id = $(this).attr('id');
            let myId = $('#myId').val();
            $('.list-group-item').removeClass('list-group-item-success');
            $(this).addClass('list-group-item-success');
            $.ajax({
                url: '../config/config.jp.php',
                method: 'POST',
                data: { id, myId, action: 'GetUserMessages' },
                success: function (data) {
                    alert(data)
                }
            })
        })
    })
    function UsersMessage() {
        const id = $('#myId').val()
        $.ajax({
            url: '../config/config.jp.php',
            method: 'POST',
            data: { action: 'UsersMessage', id },
            success: function (data) {
                $('#UsersMessage').html(data)
            }
        })
    }
</script>