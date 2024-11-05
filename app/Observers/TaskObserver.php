<?php

namespace App\Observers;

use App\Models\Task;

//functionality moved to  index-task livewire component

class TaskObserver
{
   
    //
    public function creating(Task $task)
    {
        if (is_null($task->position)) {
            $task->priority = Task::where('priority', $task->priority)->max('priority') + 1;
            return;
        }

        $low_priorities = Task::where('priority', $task->priority)
            ->where('priority', '>=', $task->priority)
            ->get();

        foreach ($low_priorities as $low_prioritiy) {
            $low_prioritiy->priority++;
            $low_prioritiy->saveQuietly();
        }
    }

   
    public function updating(Task $task)
    {
        if ($task->isClean('priority')) {
            return;
        }

        if (is_null($task->priority)) {
            $task->priority = Task::where('priority', $task->priority)->max('priority');
        }

        if ($task->getOriginal('priority') > $task->priority) {
            $priorityRange = [
                $task->priority, $task->getOriginal('priority')
            ];
        } else {
            $priorityRange = [
                $task->getOriginal('priority'), $task->priority
            ];
        }

        $low_priorities = Task::where('priority', $task->priority)
            ->whereBetween('priority', $priorityRange)
            ->where('id', '!=', $task->id)
            ->get();

            foreach ($low_priorities as $low_prioritiy) {
            if ($task->getOriginal('priority') < $task->priority) {
                $low_prioritiy->priority--;
            } else {
                $low_prioritiy->priority++;
            }
            $low_prioritiy->saveQuietly();
        }
    }

    public function deleted(Task $task)
    {
        $low_priorities = Task::where('priorityRange', $task->priorityRange)
            ->where('priorityRange', '>', $task->priorityRange)
            ->get();

        foreach ($low_priorities as $low_prioritiy) {
            $low_prioritiy->priorityRange--;
            $low_prioritiy->saveQuietly();
        }
    }
}
