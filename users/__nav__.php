<?php
    stream_wrapper_register("foo",FooWrapper::class, STREAM_IS_URL) or die("Duplication stream wrapper registered");
    class FooWrapper{
        public $context;
        private $url;
    }
?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php">
        <?= $prooject_name; ?> /
        <?= $_SESSION['username']; ?>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="message.php">messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>