<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add children</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/animate.min.css">
</head>

<body>

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
            $.ajax({
                url: '../config/add.php',
                method: 'POST',
                data: { action },
                success: function (data) {
                    $("#childrenCount").html(data)
                }
            })
        }
    </script>
</body>

</html>