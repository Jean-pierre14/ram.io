<script src="../js/vendor/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script>
<script>
$(document).ready(function() {
    select()
    allEmployees()
})
// Dashboard
function allEmployees() {
    let action = 'allEmployees'
    $.ajax({
        url: '../config/config.php',
        method: 'POST',
        data: {
            action
        },
        success: function(data) {
            $('.allEmployees').html(data)
        }
    })
    // setTimeout('allEmployees()', 1000)
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
</script>

</body>

</html>