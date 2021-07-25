<?php include '__header.hash.php'; include '__nav__.php';?>
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <input type="hidden" value="<?= $_SESSION['id']; ?>" id="myprofiledata">
            <div class="col-md-6 col-sm-12 profile">
                <div id="profil"></div>
            </div>
            <div class="col-md-8 col-sm-12 message">
                <div id="message" class="">
                    <div class="card card-body my-3">
                        <h3 class="display-3">Message</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <?= $_SESSION['fullname']; ?> Write your request
                </h4>
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

<?php include '__footer.php';?>