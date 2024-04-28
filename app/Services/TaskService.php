<?php

namespace App\Services;

use App\Http\Requests\CreateTaskRequest;
use App\Interfaces\TaskRepositoryInterface;
use App\Repository\TaskRepository;


class TaskService
{
    private TaskRepositoryInterface $taskRepository;
    public function __construct(TaskRepositoryInterface $taskRepositoryInterface)
    {
        $this->taskRepository = $taskRepositoryInterface;
    }

    public function getAllTask()
    {
        return $this->taskRepository->allTask();
    }

    public function findTaskById()
    {
        return $this->taskRepository->findTaskById();
    }

    public function updateTask()
    {
        return $this->taskRepository->updateTask();
    }

    public function createTask(CreateTaskRequest $request)
    {
        return $this->taskRepository->createTask($request);
    }

    public function deleteTask()
    {
        return $this->taskRepository->deleteTask();
    }
}
