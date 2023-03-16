<?php
require_once __DIR__ . "/../Controllers/TodoController.php";

class TodoView
{
    protected $TodoController;

    function __construct()
    {
        $this->TodoController = new TodoController();
    }
    public function showTodoList()
    {
        # Showing todo list
    }

    public function addTodoList()
    {
        echo "Todo (x for cancel) : ";
        $action = trim(fgets(STDIN));

        if ($action == 'x') {
            echo "Cancel to add Todo" . PHP_EOL;
        } else {
            $this->TodoController->createTodoList($action);
        }
    }

    public function checkTodo()
    {
        echo "Todo (x for cancel) : ";
        $action = trim(fgets(STDIN));

        if ($action == 'x') {
            echo "Cancel to add Todo" . PHP_EOL;
        } else {
            # Update TODO
        }
    }

    public function removeTodo()
    {
        # remove TODO
    }
}
