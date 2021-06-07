<?php include '../config/config.jp.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ramail.org</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Jean-pierre14 and Titans">
    <link rel="shortcut icon" href="../admin/assets/images/ramallLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title><?= $_SESSION['username']; ?></title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="index.php"><?= $prooject_name; ?>/<?= $_SESSION['username']; ?></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <input type="hidden" value="<?= $_SESSION['id']; ?>" id="myprofiledata">
                <div class="col-md-9 col-sm-12">
                    <div id="profil"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?= $_SESSION['fullname']; ?> Write your request</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div id="error"></div>
                        <input type="hidden" id="user_id" value="<?= $_SESSION['email']; ?>" class="form-control">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control"
                                placeholder="Enter your request"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" id="SendRequest" class="btn btn-success">Send</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../js/userconfig.php.js"></script>
<script>
jQuery(document).ready(function() {
    $("#printThis").printThis({
        debug: false, // show the iframe for debugging
        importCSS: true, // import parent page css
        importStyle: false, // import style tags
        printContainer: true, // print outer container/$.selector
        loadCSS: "", // path to additional css file - use an array [] for multiple
        pageTitle: "", // add title to print page
        removeInline: false, // remove inline styles from print elements
        removeInlineSelector: "*", // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333, // variable print delay
        header: `<h2><?= $_SESSION['fullname']; ?></h2>`, // prefix to html
        footer: null, // postfix to html
        base: false, // preserve the BASE tag or accept a string for the URL
        formValues: true, // preserve input/form values
        canvas: false, // copy canvas content
        doctypeString: '...', // enter a different doctype for older markup
        removeScripts: false, // remove script tags from print content
        copyTagClasses: false, // copy classes from the html & body tag
        beforePrintEvent: null, // function for printEvent in iframe
        beforePrint: null, // function called before iframe is filled
        afterPrint: null // function called before iframe is removed
    });
    $(document).on('click', '#SendRequest', function() {

        let email = $('#user_id').val()
        let message = $('#message').val()
        let action = 'sendrequest'

        if (email === '' || message === '') {
            $('#error').html(
                '<p class="alert alert-danger alert-dismissible">You can\'t send an empty message</p>'
            )
        } else {
            $.ajax({
                url: '../config/config.jp.php',
                method: 'POST',
                data: {
                    email,
                    message,
                    action
                },
                success: function(data) {
                    $('#error').html('')
                    $('#user_id').val('')
                    $('#message').val('')
                }
            })
        }
    })

})
</script>

</html>