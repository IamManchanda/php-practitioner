<?php require 'partials/head.php'; ?>

<?php foreach ($users as $user) :?>
  <li><?= $user -> name; ?></li>
<?php endforeach; ?>

  <h3>Submit your Name:</h3>

  <form method="POST" action="/names">
    <input name="name" />
    <button type="submit">Submit</button>
  </form>

<?php require 'partials/foot.php'; ?>
