<?php

namespace App\Repository;

use App\Http\Requests\CreateTaskRequest;
use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class TaskRepository implements TaskRepositoryInterface
{
    public function allTask()
    {
       // $allTask = Task::all();

        $allTask = [ 'id' => 1, 'title' => 'teste', 'description' =>'teste aí', 'time' => '12/12/2024 00:00:00', 'duration' => 3];

        return $allTask;
    }

    public function createTask(CreateTaskRequest $task)
    {
        dd($task);
        return response()->json(['message' => 'Tarefa criada com sucesso', 'task' => $task], 201);
    }

    public function deleteTask(int $id)
    {
        // TODO: Implement deleteTask() method.
    }
    public function findTaskById(int $id)
    {
        // TODO: Implement findTaskById() method.
    }

    public function updateTask(int $id, Task $task)
    {
        // TODO: Implement updateTask() method.
    }
}

