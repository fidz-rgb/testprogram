<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data <strong>Berhasil!</strong><?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>article/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Article page</h3>
            <ul class="list-group">
                <?php foreach ($article as $art) : ?>
                    <li class="list-group-item">
                        <?= $art['title_article'] ?>
                        <a href="<?= base_url(); ?>article/hapus/<?= $art['id_article'] ?>" class="badge badge-danger float-right" onclick="return confirm('yakin? ');">hapus</a>
                        <a href="<?= base_url(); ?>article/ubah/<?= $art['id_article'] ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>article/detail/<?= $art['id_article'] ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>