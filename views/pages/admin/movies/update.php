<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 * @var array<\App\Models\Category> $categories
 * @var \App\Models\Movie $movie
 */
?>


<?php
$view->component('start');
?>

<main>
    <div class="container">
        <h3 class="mt-3">Редактирование фильма</h3>
        <hr>
    </div>
    <div class="container d-flex justify-content-start">


        <form action="/admin/movies/update" method="post" enctype="multipart/form-data" class="d-flex flex-column justify-content-center w-50 gap-2 mt-5 mb-5">
            <input type="hidden" name="id" value="<?= $movie->id() ?>">
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text"
                               name="name"
                               value="<?= $movie->name() ?>"
                               class="form-control <?= $session->has('name') ? 'is-invalid' : ''; ?>"
                               id="name"
                               placeholder="Название фильма">
                        <label for="name">Название фильма</label>
                        <?php if ($session->has('name')) { ?>
                        <?php foreach ($session->getFlash('name') as $error) {?>
                        <div id="name" class="invalid-feedback">
                            <?= $error ?>
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <textarea style="height: 120px"
                                  name="description"
                                  class="form-control <?= $session->has('email') ? 'is-invalid' : ''; ?>"
                                  id="description"
                                  placeholder="">
                            <?= $movie->description() ?>
                        </textarea>
                        <label for="description">Описание</label>
                        <?php if ($session->has('description')) { ?>
                            <?php foreach ($session->getFlash('description') as $error) {?>
                                <div id="description" class="invalid-feedback">
                                    <?= $error ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="image" class="form-label">Изображение</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <select name="category" class="form-select" aria-label="Default select example">
                    <option>Выберите жанр</option>

                    <?php foreach ($categories as $category) { ?>
                    <option value="<?= $category->id() ?>" <?= $category->id() == $movie->category() ? 'selected' : ''; ?>>
                        <?= $category->name() ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="row g-2">
                <button type="submit" class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
</main>

<?php $view->component('end'); ?>
