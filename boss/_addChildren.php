<div id="error"></div>
<form action="" method="post" id="MyForm">
    <input type="hidden" name="action" id="action" value="childrenCount" class="form-control">
    <input type="hidden" name="userId" id="userId" value="<?= $_GET['actionEdit'];?>" class="form-control">
    <div id="childrenCount"></div>
    <div class="form-group">
        <button type="button" class="btn btn-sm btn-success" id="saveKid">Record</button>
    </div>
</form>
<script src="../js/vendor/jquery-2.2.4.min.js"></script>
<script>
    $(document).ready(function () {
        childrenCount()
        $('#saveKid').click(function () {
            let id = $('#userId').val()
            $.ajax({
                url: '../config/add.php',
                method: 'POST',
                data: $('#MyForm').serialize(),
                success: function (data) {
                    if (data === 'success') {
                        window.location.href = `viewemployees.php?actionEdit=${id}`
                    } else {
                        $('#error').html('<p class="alert alert-danger p-2">Something does worng</p>')
                    }
                }
            })
        })
    })

    function childrenCount() {
        let action = 'GetKid'
        let id = $('#userId').val()
        $.ajax({
            url: '../config/add.php',
            method: 'POST',
            data: { action, id },
            success: function (data) {
                $("#childrenCount").html(data)
            }
        })
    }
</script>