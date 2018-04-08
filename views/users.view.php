<?php require 'partials/head.php'; ?>

  <h1>Users Page</h1>

  <h3>Submit your Name:</h3>

  <form method="POST" action="/users">
    <input name="name" />
    <button type="submit">Submit</button>
  </form>

  <h3>List of all users</h3>

  <?php foreach (array_reverse($users) as $user) :?>
    <li><?= $user -> name; ?></li>
  <?php endforeach; ?>

<?php require 'partials/foot.php'; ?>
