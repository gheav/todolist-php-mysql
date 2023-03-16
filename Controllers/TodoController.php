<?php

require_once __DIR__ . "/../Models/TodoModel.php";
class TodoController
{
    protected $TodoModel;

    function __construct()
    {
        $this->TodoModel =  new TodoModel();
    }

    public function createTodoList(String $action)
    {
        $this->TodoModel->save($action);
    }

    public function readTodoList()
    {
        # code...
    }

    public function updateTodoList()
    {
        # code...
    }

    public function deleteTodoList()
    {
        # code...
    }
}
