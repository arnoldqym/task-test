<?php

namespace App\Interfaces;

interface TaskInterface
{
    public function getAll();
    public function findTask($id);
    public function createTask();
    public function updateTask();
    public function deleteTask();
}
