<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
                <div class="card-header">
                    <strong>Form Tambah Data Author</strong>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nm_author">Name Author</label>
                            <input type="text" name="nm_author" class="form-control" id="nm_author">
                            <small class="form-text text-danger"><?= form_error('nm_author') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email') ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>