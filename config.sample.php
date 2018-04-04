<?php

// Replace/copy this `config.sample.php` to `config.php`

return [
  'database' => [
    'name' => 'mytodo', // Database Name
    'username' => 'root', // Username
    'password' => '', // Password
    'connection' => 'mysql:host=127.0.0.1', // Host
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ],
  ],
];
