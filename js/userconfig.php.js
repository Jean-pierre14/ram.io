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
                                <div class="col-md-9">
                                    <h5 class="d-flex justify-content-between align-content-center">
                                        <span>Email:</span>
                                        <span>${data.email}</span> 
                                    </h5>
                                </div>
                                <div class="col-md-4">
                                    <p class="d-flex justify-content-between align-content-center">
                                        <span>Gender: </span>
                                        <span class="badge badge-success">${data.gender}</span>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="d-flex justify-content-between align-content-center">
                                        <span>Partner: </span>
                                        <span class="badge badge-success">${data.woman}</span>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="d-flex justify-content-between align-content-center">
                                        <span>Number of children: </span>
                                        <span class="badge badge-success">${data.children}</span>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="d-flex justify-content-between align-content-center">
                                        <span>Salary: </span>
                                        <span class="badge badge-success">${data.salary}, 00$</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-success btn-sm">Print</button>
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">
                            I have a request
                        </button>
                    </div>
                </div>
                `)
            }
        })
    }
    // setTimeout('userProfil()', 1000)
}