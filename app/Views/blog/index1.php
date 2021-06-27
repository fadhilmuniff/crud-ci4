<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4">Welcome My Blog</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information. Lorem ipsum dolor sit amet.</p>
        <a class="btn btn-primary" href="#" role="button">Get Started</a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col col-md-8">
            <?php foreach ($blog as $b) : ?>
                <div class="card mb-4">
                    <img src="/img/<?= $b['sampul'] ?>" class="card-img-top img-jumbo">
                    <div class="card-body">
                        <h3 class="card-title"><?= $b['judul'] ?></h3>
                        <p class="card-text"><?= $b['body'] ?>
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col col-md-4">
            <form>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search...." aria-label="Recipient's username" aria-describedby="button-addon2" id="keyword" name="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="btn-cari"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg></button>
                    </div>
                </div>
            </form>
            <div class="" style="width: 22rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a class="link" href="">Cras justo odio</a></li>
                    <li class="list-group-item"><a href="">Cras justo odio</a></li>
                    <li class="list-group-item"><a href="">Cras justo odio</a></li>
                    <li class="list-group-item"><a href="">Cras justo odio</a></li>
                    <li class="list-group-item"><a href="">Cras justo odio</a></li>
                    <li class="list-group-item"><a href="">Cras justo odio</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

</div>

<?= $this->endSection(); ?>