<?php

require_once __DIR__ . "/Views/TodoView.php";

$todolistView = new TodoView();

echo "TODO LIST APP" . PHP_EOL;

$todolistView->addTodolist();
