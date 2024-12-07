<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Article
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $article['title_article']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $article['content'] ?></h6>
                    <p class="card-text"><?= $article['id_author'] ?></p>
                    <a href="<?= base_url(); ?>article" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>