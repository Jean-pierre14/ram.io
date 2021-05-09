<?php
include '_header.php';
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="mt-4 col-md-3 col-sm-12">
            <div class="card card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="User-name" id="username" value="<?= $username;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Username</label>
                        <input type="password" name="password" id="password" placeholder="Password" value="<?= $password;?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="signIn" class="btn btn-block btn-success">Log In</button>
                    </div>
                    <p>
                        I don't have an account <a href="index.php" class="btn btn-link">back</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include '_footer.php';
?>