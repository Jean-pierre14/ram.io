<form action="" method="post">
    <div class="form-row">
        <div class="col-md-4 form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Username" value="<?= $user; ?>"
                class="form-control">
        </div>
        <div class="col-md-8 form-group">
            <label for="fullname">Fullname</label>
            <input type="text" name="fullname" id="fullname" placeholder="Fullname" spellcheck="false"
                value="<?= $fullname; ?>" class="form-control">
        </div>
        <div class="form-group col-md-4">
            <label for="sex">Gender</label>
            <select name="gender" id="sex" class="form-control">
                <option value=""> -- Select -- </option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="E-mail@ramall.cd" spellcheck="false"
                value="<?= $email ?>" class="form-control">
        </div>
        <div class="form-group col-md-4">
            <label for="status">Status</label>
            <select name="status" id="status_slct" class="form-control">
                <option value="">-- select --</option>
                <option value="Single">Single</option>
                <option value="Fiance">Fiance</option>
                <option value="Married">Married</option>
                <option value="Divorce">Divorce</option>
            </select>
        </div>
        <div class="col-md-12 " id="married_ctn">
            <div class="card card-body none" style="display: none;">
                <div class="row">
                    <div class="form-group col-md-7">
                        <label for="woman">Woman name</label>
                        <input type="text" name="woman" id="woman" value="<?= $woman; ?>" placeholder="Woman"
                            spellcheck="false" class="form-control">
                    </div>
                    <div class="col-md-5 form-group">
                        <label for="children">Number of children</label>
                        <input type="number" max="3" min="0" name="children" id="children" value="<?= $children; ?>"
                            placeholder="Entre the number of children" class="form-control">
                    </div>
                </div>
            </div>
            <div class="mt-2 card card-body" style="display: none;">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="password1" id="pass" value="<?= $password1; ?>"
                            placeholder="Password" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="pass2">Confirm password</label>
                        <input type="password" name="password2" id="pass2" value="<?= $password2; ?>"
                            placeholder="Confirm password" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-md-4 mt-2">
            <button type="submit" name="addempl" class="btn btn-block btn-success">Register</button>
        </div>
    </div>
</form>