<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('start'); ?>

<h1>Register</h1>
<form action="/register" method="post">
    <label for="">
        Email
        <input type="text" name="email">
    </label>
    <br>
    <?php if ($session->has('email')) { ?>
        <ul>
            <?php foreach ($session->getFlash('email') as $error) { ?>
                <li style="color: red"><?= $error ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

    <label for="">
        Password
        <input type="password" name="password">
    </label>
    <br>
    <?php if ($session->has('password')) { ?>
        <ul>
            <?php foreach ($session->getFlash('password') as $error) { ?>
                <li style="color: red"><?= $error ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

    <button type="submit">Register</button>
</form>

<?php $view->component('end'); ?>
