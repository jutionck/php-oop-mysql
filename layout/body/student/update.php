<?php
$student = $mysql->getById("students", $_GET["id"]);
?>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Ubah Data Mahasiswa <?= $_GET['id']; ?>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?= $student["id"] ?>">
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?= $student["name"] ?>">
                    <label for="floatingInput">Nama Mahasiswa</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="npm" class="form-control" id="floatingPassword" placeholder="Password" value="<?= $student["npm"] ?>">
                    <label for="floatingPassword">NPM</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="email" class="form-control" id="floatingPassword" placeholder="Password" value="<?= $student["email"] ?>">
                    <label for="floatingPassword">Email</label>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>
</div>


<?php

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $npm = $_POST["npm"];
    $email = $_POST["email"];

    $save = $mysql->update("students", "name = '" . $name . "', npm = '" . $npm . "', email = '" . $email . "'", "'" . $id . "'");
    if ($save) {
        header("location:index.php?page=students", true);
    }
}
?>