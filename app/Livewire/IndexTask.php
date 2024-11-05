<?php

namespace App\Livewire;

use Session;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Http;
use App\Models\Project;
use App\Models\Task;

class IndexTask extends Component
{
    public $projects = [];
    public $tasks = [];
    public $project_id;
    public $taskClicked;

    public function mount()
    {
        $this->projects = $this->getProjects();
    }

    public function render()
    {
        return view('livewire.index-tasks');
    }

    public function getProjects()
    {
        $projects = Project::all();
        return $projects;
    }

    public function reqByProject()
    {
        if ($this->project_id) {
            $this->tasks = $this->getTasks($this->project_id);
            if(count($this->tasks)< 1){
                return redirect()->back()->with('warning', 'Project has no task');
            }
        } else {
            return redirect()->back()->with('warning', 'Select A Project');
        }
    }

    public function handleTask()
    {
        $this->taskClicked = true;
        if ($this->project_id) {
            $this->tasks = $this->getTasks($this->project_id);
        } else {
            return redirect()->back()->with('warning', 'Select a project');
        }
    }

    public function getTasks($id)
    {
        return Task::where('project_id', $id)->orderBy('priority')->get();
    }

    public function getProjectName($id)
    {
        $project = Project::where('id', $id)->first();
        return $project['name'];
    }

    public function reorder($tasks) {
        foreach ($tasks as $task) {
            Task::find($task['value'])->update(['priority' => $task['order']]);
            
        }
        
    }
}
