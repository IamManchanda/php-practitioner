<?php

$tasks = $dbQuery -> selectAll('todos', 'Task');

// Templates
require 'views/index.view.php';
