<?php require 'partials/head.php'; ?>

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

<?php require 'partials/foot.php'; ?>