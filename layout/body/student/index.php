<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Data Mahasiswa
        </div>
        <div class="card-body">

            <a href="<?= baseURL("index.php?page=students/add") ?>" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>NPM</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($students as $student) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $student["name"] ?></td>
                            <td><?= $student["npm"] ?></td>
                            <td><?= $student["email"] ?></td>
                            <td><a href="<?= baseURL("index.php?page=students/edit/" . $student["id"]) ?>" class="btn btn-success btn-sm">Edit Data</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>