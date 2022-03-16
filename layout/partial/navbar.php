<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?= baseURL("") ?>">EnigmaApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  <?= (@$_GET["page"] == "" || @$_GET["page"] == "dashboard") ? "active" : "" ?>" href="<?= baseURL("index.php?page=dashboard") ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (@$_GET["page"] == "students") ? "active" : "" ?>" href="<?= baseURL("index.php?page=students") ?>">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?= (@$_GET["page"] == "users") ? "active" : "" ?>" href="<?= baseURL("index.php?page=users") ?>">User</a>
                </li>
            </ul>
        </div>
    </div>
</nav>