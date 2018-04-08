<?php

$users = App::get('database') -> selectAll('users', 'Task');

// Templates
require 'views/index.view.php';
