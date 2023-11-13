<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>
<?php $view->component('start'); ?>
<h1>Login</h1>
<form action="/login" method="post">
    <label for="">
        Email
        <input type="text" name="email">
    </label>
    <br>
    <label for="">
        Password
        <input type="password" name="password">
    </label>
    <br>
    <?php if ($session->has('error')) { ?>
        <p style="color: red">
            <?php echo $session->getFlash('email'); ?>
        </p>
    <?php } ?>

    <button type="submit">Login</button>
</form>
<?php $view->component('end'); ?>
