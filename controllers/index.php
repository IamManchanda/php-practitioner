<?php

$users = $dbQuery -> selectAll('users', 'Task');

// Templates
require 'views/index.view.php';
