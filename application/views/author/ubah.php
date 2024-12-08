<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <strong>Form Ubah Data Author</strong>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_author" value="<?= $author['id_author']; ?>">
                        <div class="form-group">
                            <label for="nm_author">Name Author</label>
                            <input type="text" name="nm_author" class="form-control" id="nm_author" value="<?= $author['nm_author']; ?>">
                            <small class="form-text text-danger"><?= form_error('nm_author') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $author['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email') ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>