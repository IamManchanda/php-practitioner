<?php

// Functions
require 'functions/dd.php';

// Classes
require 'classes/Task.php';

// Bootstrap
$dbQuery = require 'bootstrap.php';

$tasks = $dbQuery -> selectAll('todos', 'Task');

// Templates
require 'templates/index.view.php';
