<?php

// $tasks = $query->selectAll('todos', 'Task');
$tasks = $query->selectAll('todos');

require 'views/index.view.php';