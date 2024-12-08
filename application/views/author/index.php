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
            <a href="<?= base_url(); ?>author/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Author page</h3>
            <ul class="list-group">
                <?php foreach ($author as $aut) : ?>
                    <li class="list-group-item">
                        <?= $aut['nm_author'] ?>
                        <a href="<?= base_url(); ?>author/hapus/<?= $aut['id_author'] ?>" class="badge badge-danger float-right" onclick="return confirm('yakin? ');">hapus</a>
                        <a href="<?= base_url(); ?>author/ubah/<?= $aut['id_author'] ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>author/detail/<?= $aut['id_author'] ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>