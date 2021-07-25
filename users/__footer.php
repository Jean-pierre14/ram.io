
</body>

<script src="../js/vendor/jquery-2.2.4.min.js"></script>
<script src="../admin/assets/scripts/main.07a59de7b920cd76b874.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../js/userconfig.php.js"></script>
<script>
    jQuery(document).ready(function () {

        $(document).on('click', '#printThis', function () {

            $("#profil").printThis({
                debug: false, // show the iframe for debugging
                importCSS: true, // import parent page css
                importStyle: false, // import style tags
                printContainer: true, // print outer container/$.selector
                loadCSS: "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", // path to additional css file - use an array [] for multiple
                pageTitle: "", // add title to print page
                removeInline: false, // remove inline styles from print elements
                removeInlineSelector: "*", // custom selectors to filter inline styles. removeInline must be true
                printDelay: 333, // variable print delay
                header: null, // prefix to html
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
        })
        $(document).on('click', '#SendRequest', function () {

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
                    success: function (data) {
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