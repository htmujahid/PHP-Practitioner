<?php require('partials/head.php')?>
<h1>Home Page</h1>
<ul>
    <?php foreach($tasks as $task) : ?>
        <?php if($task->completed) : ?>
            <li>
                <s><?= $task->description; ?></s>
                - <a type="submit" href="" style="text-decoration:none;">❌</a>
            </li>
        <?php else : ?>
            <li>
                <?= $task->description; ?> 
                - <a type="submit" href="" style="text-decoration: none;">✔️</a>
            </li>
        <?php endif ?>
    <?php endforeach; ?>
</ul>

<form action="tasks" method="POST">
    <input type="text" name="description">
    <button type="submit">submit</button>
</form>
<?php require('partials/footer.php')?>