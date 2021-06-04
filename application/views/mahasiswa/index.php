<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group  mt-3">
                <?php foreach ($mahasiswa as $data) : ?>
                    <li class="list-group-item"><?= $data['nama']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>