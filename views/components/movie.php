<?php
/**
 * @var \App\Models\Movie $movie
 * @var \App\Kernel\Storage\StorageInterface $storage
 */


?>


<a href="/movie?id=<?=$movie->id()?>" class="card text-decoration-none movies__item">
    <img src="<?= $storage->url($movie->preview()) ?>"
         height="200px" class="card-img-top" alt="<?= $movie->name() ?>">
    <div class="card-body">
        <h5 class="card-title"><?= $movie->name() ?></h5>
        <p class="card-text">Оценка <span class="badge bg-warning warn__badge">7.9</span></p>
        <p class="card-text"><?= $movie->description() ?></p>
    </div>
</a>