<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\Session $session
 */
?>

<?php $view->component('start'); ?>

<h1>Add Movie page</h1>
<form action="/admin/movies/add" method="post" enctype="multipart/form-data">
    <p>Name</p>
    <div>
        <input type="text" name="name" id="name">
    </div>
    <?php if ($session->has('name')) { ?>
    <ul>
        <?php foreach ($session->getFlash('name') as $error) { ?>
        <li style="color: red"><?= $error ?></li>
        <?php } ?>
    </ul>
    <?php } ?>
    <br>
    <div>
        <input type="file" name="image" id="name">
    </div>
    <div>
        <button type="submit">Add</button>
    </div>
</form>
<?php $view->component('end'); ?>
