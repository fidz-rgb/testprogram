<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
                <div class="card-header">
                    <strong>Form Tambah Data</strong>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="title_article">Title Article</label>
                            <input type="text" name="title_article" class="form-control" id="title_article">
                            <small class="form-text text-danger"><?= form_error('title_article') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <input type="text" name="content" class="form-control" id="content">
                            <small class="form-text text-danger"><?= form_error('content') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_author">ID Author</label>
                            <input type="text" name="id_author" class="form-control" id="id_author">
                            <small class="form-text text-danger"><?= form_error('id_author') ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>