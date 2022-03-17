<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Tambah Data Mahasiswa
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Nama Mahasiswa</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="npm" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">NPM</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="email" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Email</label>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>
</div>


<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $npm = $_POST["npm"];
    $email = $_POST["email"];

    $save = $mysql->create("students", "(name, npm, email)", "('" . $name . "','" . $npm . "', '" . $email . "')");
    if ($save) {
        header("location:index.php?page=students", true);
    }
}
?>