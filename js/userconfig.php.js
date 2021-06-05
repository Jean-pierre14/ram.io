jQuery(document).ready(function() {
    userProfil()
})

function userProfil() {
    let action = 'profil'
    let id = $('#myprofiledata').val()

    if (id === undefined || id === null || id === '') {
        window.location.href = "../login.php"
    } else {
        $.ajax({
            url: '../config/config.jp.php',
            method: 'POST',
            dataType: 'JSON',
            data: {
                id,
                action
            },
            success: function(data) {
                $("#profil").html(`
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <h5 class="d-flex justify-content-between align-content-center">
                                        <span>username:</span> 
                                        <span>${data.username}</span> 
                                    </h5>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="d-flex justify-content-between align-content-center">
                                        <span>Fullname:</span> 
                                        <span>${data.fullname}</span> 
                                    </h5>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-success">Print</button>
                    </div>
                </div>
                `)
            }
        })
    }
    setTimeout('userProfil()', 1000)
}