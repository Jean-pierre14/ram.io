<script src="../js/vendor/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script>
<script>
$(document).ready(function() {
    select()
    select2()
    allEmployees()
    M_empl()
    W_empl()
    children()
    $('.addWoman').click(function() {
        $('.addWomanForm').fadeToggle("slow")
    })
    $('#AddWomanBtn').click(function() {
        let action = 'addPartner'
        let id = $('#userIdGet').val()
        let woman = $('#woman').val()
        if (!woman || woman === '' || woman === undefined || woman.length < 4) {
            $('#errorsAjax').html('<p class="alert alert-danger">Invalid name</p>')
        } else {
            $.ajax({
                url: '../config/config.jp.php',
                method: 'post',
                data: {
                    action,
                    id,
                    woman
                },
                success: function(data) {
                    if (data === 'success') {
                        window.location.href = `viewemployees.php?actionEdit=${id}`
                    } else {
                        $('#errorsAjax').html(
                            '<p class="alert alert-danger">Invalid name</p>')
                    }
                }
            })
        }
    })
    $('#children').keyup(function() {
        let action = 'children'
        let countKid = $(this).val()
        if (countKid < 0) {
            $('#errorChildren').html('<p class="alert alert-danger">What do you want?</p>')
        } else {
            $.ajax({
                url: '../config/config.jp.php',
                method: 'POST',
                data: {
                    action,
                    countKid
                },
                success: function(data) {
                    $('#errorChildren').html('')
                    $('#resultChildren2').html(data)
                }
            })
        }

    })
})

var myAlert = document.getElementById('myAlert')
var bsAlert = new bootstrap.Alert(myAlert)

var alertList = document.querySelectorAll('.alert')
alertList.forEach(function(alert) {
    new bootstrap.Alert(alert)
})
// Children
function children() {
    let action = 'children'
    let countKid = $('#children').val()
    $.ajax({
        url: '../config/config.jp.php',
        method: 'POST',
        data: {
            action,
            countKid
        },
        success: function(data) {

            $('#resultChildren').html(data)
        }
    })
}

// Dashboard
function allEmployees() {
    let action = 'allEmployees'
    $.ajax({
        url: '../config/config.jp.php',
        method: 'POST',
        data: {
            action
        },
        success: function(data) {
            $('.allEmployees').html(data)
        }
    })
    setTimeout('allEmployees()', 1000)
}

function M_empl() {
    let action = 'M_emp'
    $.ajax({
        url: '../config/config.jp.php',
        method: 'POST',
        data: {
            action
        },
        success: function(data) {
            $('.M_emp').html(data)
        }
    })
}

function W_empl() {
    let action = 'W_emp'
    $.ajax({
        url: '../config/config.jp.php',
        method: 'POST',
        data: {
            action
        },
        success: function(data) {
            $('.W_emp').html(data)
        }
    })
}


function select() {
    let action = 'select'
    $.ajax({
        url: '../config/config.jp.php',
        method: 'POST',
        data: {
            action
        },
        success: function(data) {
            $('#select').html(data)
        }
    })
}

function select2() {
    let action = 'select2'
    $.ajax({
        url: '../config/config.jp.php',
        method: 'POST',
        data: {
            action
        },
        success: function(data) {
            $('#select2').html(data)
        }
    })
}
</script>

</body>

</html>