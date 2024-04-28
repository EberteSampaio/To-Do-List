<?php

namespace App\Interfaces;

use App\Http\Requests\CreateTaskRequest;
use App\Models\Task;

interface TaskRepositoryInterface
{
    public function allTask();

    public function createTask(CreateTaskRequest $task);

    public function findTaskById(int $id);

    public function updateTask(int $id, Task $task);

    public function deleteTask(int $id);
}
