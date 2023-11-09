<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 */
?>

<?php $view->component('start'); ?>

<h1>Add Movie page</h1>
<form action="/admin/movies/add" method="post">
    <p>Name</p>
    <div>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <button type="submit">Add</button>
    </div>
</form>
<?php $view->component('end'); ?>
