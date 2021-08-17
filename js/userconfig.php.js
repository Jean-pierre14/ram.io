jQuery(document).ready(function () {
    userProfil()
    let url = window.location.href
    $('.nav-link').click(function () {
        $('a').removeClass('active')
        $(this).addClass('active')
    })
    salaryResult()
    var Url = '../config/config.jp.php'
    function salaryResult() {
        let id = $('#myprofiledata').val()
        $.ajax({
            url: Url,
            method: 'POST',
            data: { action: 'salaryResult', id },
            success: function (data) {
                $('#salaryResult').html(data)
            }
        })
    }
    $('#salaryContext').click(function () {
        $('#messageContainer').hide(200)
        $('#profileContainer').hide(400)
        $('#salaryContainer').show(300)
        salaryResult()
    })
    $('#messageContext').click(function () {
        $('#messageContainer').show(500)
        $('#profileContainer').hide(200)
        $('#salaryContainer').hide(200)
        userProfil()
    })
    $('#profileContext').click(function () {
        $('#profileContainer').show(500)
        $('#messageContainer').hide(150)
        $('#salaryContainer').hide(150)
        messageFetch()
    })
    messageFetch()
    $(document).on("click", ".list-group-item", function () {
        $('li').removeClass('list-group-item-success')
        $(this).addClass('list-group-item-success')
        let id = $(this).attr('id')
        messageOfThisUser(id)
    })
    $(document).on("click", ".list-group-item", function () {
        let id = $(this).attr('id')
        messageOfThisUser(id)
    })
    $(document).on('click', '#SubmitMyMsg', function () {
        let msg = $('.msgContext').val()
        let senderId = $('#myprofiledata').val()
        let receiverId = $('.msgContext').attr('id')
        if (msg != '') {
            sendMsg(msg, senderId, receiverId)
        } else {
            $('#error').html('<p class="alert alert-danger">you can send blank message<p>')
        }
        // alert(msg + ' ' + receiverId + " " + senderId)
    })

})

function sendMsg(msg, senderId, receiverId) {
    $.ajax({
        url: '../config/config.jp.php',
        method: 'POST',
        data: { action: 'sendMsg', msg, senderId, receiverId },
        success: function (data) {
            if (data === 'success') {
                $('#error').html('')
                messageOfThisUser(receiverId)
                console.log(data)
            } else {
                $('#error').html('<p class="alert alert-warning">What do you want</p>')
            }
        }
    })
}

function messageOfThisUser(id) {
    let myId = $('#myprofiledata').val()
    $.ajax({
        url: '../config/config.jp.php',
        method: 'POST',
        data: { action: 'messageOfThisUser', id, myId },
        success: function (data) {
            $('#messageOfThisUser').html(data)
        }
    })
}

function messageFetch() {
    let myId = $('#myprofiledata').val()
    $.ajax({
        url: '../config/config.jp.php',
        method: 'POST',
        data: { action: 'messageFetch', myId },
        success: function (data) {
            $('#message').html(data)
        }
    })
}

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
            success: function (data) {
                $("#profil").html(`
                <div class="card mt-3">
                    <div class="card-header">
                        <h3>Welcome ${data.fullname}</h3>
                    </div>
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
                        <button type="button" class="btn btn-success btn-sm" id="printThis">Print</button>
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">
                            I have a request
                        </button>
                    </div>
                </div>
                `)
            }
        })
    }
}
