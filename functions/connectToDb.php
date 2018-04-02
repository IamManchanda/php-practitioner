<?php

function connectToDB() {
  try {
    // Replace `username` & `password` with username & password of your mysql connection
    return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'username', 'password');
  } catch(PDOException $e) {
    die($e -> getMessage());
  }
}
