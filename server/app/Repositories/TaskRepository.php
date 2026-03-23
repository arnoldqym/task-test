<?php

namespace App\Repositories;

use App\Models\Task;

class TaskRepository
{
    public function getAllTasks()
    {
        return Task::latest()->get();
    }

    public function createTask($data)
    {
        return Task::create($data);
    }

    public function updateTask($id, $data)
    {
        $task = Task::findOrFail($id);
        $task->update($data);
        return $task;
    }

    public function deleteTask($id){
        $task = Task::findOrFail($id);
        return (bool) $task->delete();
    }
}
