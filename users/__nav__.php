
<nav class="navbar navbar-expand-md navbar-fixed bg-dark navbar-dark">
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
                <a class="nav-link active" id="profileContext" href="javascript:void(0)">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="messageContext" href="javascript:void(0)">messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>