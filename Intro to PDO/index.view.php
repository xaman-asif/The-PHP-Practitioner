<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <h1>Task For The Day</h1>
  <ul>
    <?php foreach ($tasks as $task) : ?>
      <?php if ($task->isComplete()) : ?>
        <s>
        <?php endif ?>
        <li><?= $task->description ?></li>
        <?php if ($task->isComplete()) : ?>
        </s>
      <?php endif ?>

    <?php endforeach; ?>
  </ul>

</body>

</html>