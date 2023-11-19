<?php


/**
 * @var \App\Models\Review $review
 */
?>

<div class="card">
    <div class="card-header">
        Пользователь: <?= $review->user()->name() ?>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p><?= $review->comment() ?></p>
            <footer class="blockquote-footer">Оценка <span class="badge bg-warning warn__badge"><?= $review->rating() ?></span></footer>
        </blockquote>
    </div>
</div>
