<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HTML with Php</title>
</head>
<body>
  <ul>
    <?php foreach ($tasks as $task) : ?>
      <li>
        <?php if($task -> completed) : ?>
          <strike> <?= $task -> description; ?> </strike>
        <?php else: ?>
          <span> <?= $task -> description; ?> </span>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
