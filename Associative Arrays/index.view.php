<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
      header {
        background: #e3e3e3;

        padding: 2em;

        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php foreach ($person as $key => $value) : ?>
      <li><?= $key .'=>'. $value ?></li>
    <?php endforeach; ?>
  </body>
</html>