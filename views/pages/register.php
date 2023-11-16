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
        <h3 class="mt-3">Регистрация</h3>
        <hr>
    </div>
    <div class="container d-flex justify-content-center">


        <form action="/register" method="post" class="d-flex flex-column justify-content-center w-50 gap-2 mt-5 mb-5">
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" name="name"
                               class="form-control <?= $session->has('name') ? 'is-invalid' : ''; ?>" id="name"
                               placeholder="Иван Иванов">
                        <label for="name">Имя</label>
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
                        <input type="email" name="email" class="form-control <?= $session->has('email') ? 'is-invalid' : ''; ?>" id="email" placeholder="name@areaweb.su">
                        <label for="email">E-mail</label>
                        <?php if ($session->has('email')) { ?>
                            <?php foreach ($session->getFlash('email') as $error) {?>
                                <div id="email" class="invalid-feedback">
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
                        <input type="password" class="form-control <?= $session->has('password') ? 'is-invalid' : ''; ?>" name="password" id="password"
                               placeholder="*********">
                        <label for="password">Пароль</label>
                        <?php if ($session->has('password')) { ?>
                            <?php foreach ($session->getFlash('password') as $error) {?>
                                <div id="password" class="invalid-feedback">
                                    <?= $error ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="password" class="form-control <?= $session->has('password_confirmation') ? 'is-invalid' : ''; ?>" name="password_confirmation"
                               id="password_confirmation" placeholder="*********">
                        <label for="password_confirmation">Подтверждение</label>
                        <?php if ($session->has('password_confirmation')) { ?>
                            <?php foreach ($session->getFlash('password_confirmation') as $error) {?>
                                <div id="password_confirmation" class="invalid-feedback">
                                    <?= $error ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <button type="submit" class="btn btn-primary">Создать аккаунт</button>
            </div>
        </form>
    </div>
</main>

<?php $view->component('end'); ?>
