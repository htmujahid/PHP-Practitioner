<?php require('partials/head.php')?>
<h1>Users Page</h1>
<ul>
    <?php foreach($users as $user) : ?>
        <li><?= $user->name; ?></li>
    <?php endforeach; ?>
</ul>

    <form action="users" method="POST">
        <input type="text" name="name">
        <button type="submit">submit</button>
    </form>

<?php require('partials/footer.php')?>