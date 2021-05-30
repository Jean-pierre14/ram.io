<?php include './config/config.jp.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>Login <?= $prooject_name; ?></title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./admin/main.07a59de7b920cd76b874.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="h-100 d-flex justify-content-center align-items-center bg-plum-plate"
                                        tabindex="-1">
                                        <div class="slide-img-bg"
                                            style="background-image: url('assets/images/originals/city.jpg');"></div>
                                        <div class="slider-content">
                                            <h3><?= $prooject_name; ?> Service</h3>
                                            <p><?= $prooject_name; ?> is like a dream. Some think it's too good to be
                                                true!</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4 class="mb-0">
                                <span class="d-block">Welcome back,</span>
                                <span>Please sign in to your account.</span>
                            </h4>

                            <div class="divider row"></div>
                            <div>
                                <?php include './admin/_error.php'; ?>
                                <form action="" autocomplete="false" method="post">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="username"
                                                    class="">Email</label><input name="username"
                                                    value="<?= $username; ?>" id="username"
                                                    placeholder="Username or Email" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="password"
                                                    class="">Password</label><input name="password" id="password"
                                                    placeholder="Password here..." type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-check"><input name="check" id="exampleCheck"
                                            type="checkbox" class="form-check-input"><label for="exampleCheck"
                                            class="form-check-label">Keep me logged in</label></div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto"><a href="javascript:void(0);"
                                                class="btn-lg btn btn-link">Recover Password</a>
                                            <button type="submit" name="signIn" class="btn btn-primary btn-lg">Login to
                                                Dashboard</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./admin/assets/scripts/main.07a59de7b920cd76b874.js"></script>
</body>

</html>