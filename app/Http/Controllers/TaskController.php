<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Repository\TaskRepository;
use App\Services\TaskService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    protected TaskService $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function allTask()
    {
        $allTaks =$this->taskService->getAllTask();

        return response()->json($allTaks,Response::HTTP_OK);
    }

    public function createTask(CreateTaskRequest $request)
    {
        return $this->taskService->createTask($request);
    }

}

