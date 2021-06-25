<script src="../js/vendor/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script>
<script>
function Retired() {
    let action = 'retired'

    $.ajax({
        url: '../config/config.jp.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('#resultRetired').html(data)
        }
    })
}

function payResults() {
    // alert("Psy") Test of the fetch ajax()
    let action = 'payResults'
    $.ajax({
        url: '../config/config.jp.php',
        method: 'POST',
        data: {
            action
        },
        success: function(data) {
            $('#payResults').html(data)
        }
    })
}
$(document).ready(function() {
    $('#status_slct').change(function() {
        let d = $(this).val()
        if (d === "Married") {
            $('.none').show()
        } else {
            $('.none').hide()
        }
    })
    $('#children_num').keyup(function() {
        let u = $(this).val()
        if (u != '') {
            if (u > 3) {
                alert("the number can't be above 3")
            } else {
                for (i = 1; i <= u; i++) {
                    $('#uiChildren').append(`
                <div class="col-md-4 form-group">
                        <label for="children">Children ${i}</label>
                        <input type="text" name="name[]" id="children_num${i}"
                            placeholder="Name ${i}" class="form-control">
                </div>
                `)
                }
            }
        } else {
            $('#uiChildren').html('')
        }
    })
    payResults()
    select()
    select2()
    allEmployees()
    M_empl()
    W_empl()
    children()

    Retired()
    $(document).on('click', '.deleteEmpl', function() {
        let id = $(this).attr('id')
        let action = 'deleteEmpl'
        if (confirm("Do really want to delete this person?")) {
            $.ajax({
                url: '../config/config.jp.php',
                method: 'post',
                data: {
                    action,
                    id
                },
                success: function(data) {
                    select()
                }
            })
        } else {
            return false
        }
    })
    $('#search_retired').keyup(function() {
        let txt = $(this).val()
        let action = 'search_retired'
        if (txt !== '') {
            $.ajax({
                url: '../config/config.jp.php',
                method: 'post',
                data: {
                    action,
                    txt
                },
                success: function(data) {
                    $('#searchResult').html(data)
                    $('#resultRetired').hide()
                }
            })
        } else {
            $('#resultRetired').show()
            $('#searchResult').hide()
        }
    })
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
    $('.btn_oper').click(function() {
        let id = $(this).attr('id')
        let action = 'oper'
        let operVal = $('#oper').val()
        if (operVal !== '' || operVal !== undefined) {
            $.ajax({
                url: '../config/config.jp.php',
                method: 'POST',
                data: {
                    id,
                    operVal,
                    action
                },
                success: function(data) {
                    if (data === 'success') {
                        window.location.href = `viewemployees.php`
                    } else {
                        $('#errorOper').html('')
                    }
                }
            })
        } else {
            $('#errorOper').html(
                '<p class="alert alert-danger alert-dismissible">Change or letf joker with me</p>')
        }
    })
    $('.btn_salary').click(function() {
        let action = 'salary'
        let id = $(this).attr('id')
        let salaryVal = $('#salary').val()

        if (salaryVal === '' || salaryVal === undefined) {
            $('#errorSalary').html('<p class="alert alert-danger">Invalid Salary</p>')
        } else {
            $.ajax({
                url: '../config/config.jp.php',
                method: 'post',
                data: {
                    id,
                    action,
                    salaryVal
                },
                success: function(data) {
                    if (data === 'success') {
                        window.location.href = `viewemployees.php`
                    } else {
                        $('#errorSalary').html(
                            '<p class="alert alert-danger">Event fail</p>')
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