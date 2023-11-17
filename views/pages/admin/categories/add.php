<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>


<?php
$view->component('start');
?>

<main>
    <div class="container">
        <h3 class="mt-3">Добавить новый жанр</h3>
        <hr>
    </div>
    <div class="container d-flex justify-content-start">


        <form action="/admin/categories/add" method="post" class="d-flex flex-column justify-content-center w-50 gap-2 mt-5 mb-5">
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" name="name"
                               class="form-control <?= $session->has('name') ? 'is-invalid' : ''; ?>" id="name"
                               placeholder="Иван Иванов">
                        <label for="name">Название</label>
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


            <div class="row g-0">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
</main>

<?php $view->component('end'); ?>
