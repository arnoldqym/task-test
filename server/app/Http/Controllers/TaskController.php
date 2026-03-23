<?php

namespace App\Http\Controllers;

use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    protected TaskRepository $taskRepository;
    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }
    public function index()
    {
        $tasks = $this->taskRepository->getAllTasks();
        return response()->json($tasks);
    }
}
