<?php

require 'functions/dd.php';
require 'functions/connectToDb.php';
require 'functions/fetchAllTasks.php';

require 'classes/Task.php';

$pdo = connectToDB();
$tasks = fetchAllTasks($pdo);

require 'templates/index.view.php';
