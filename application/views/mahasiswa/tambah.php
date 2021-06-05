<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="card">
                    <div class="card-header">
                        Form Data Mahasiwa
                    </div>
                    <div class="card-body">
                        <?= validation_errors(); ?>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" class="form-control" id="nrp" name="nrp">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Akhlaq">Teknik Akhlaq</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>