<?php

namespace App\Livewire;

use Session;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\Task;
use App\Models\Project;

class ShowTask extends Component
{
    public $task = [];
    public $projects = [];
    public $project_id;
    public $priority;
    public $name;

    public function render()
    {
        return view('livewire.show-task');
    }

    public function mount($id)
    {

        $this->task = $this->getTask($id);
        $this->name = $this->task['name'];
        $this->priority = $this->task['priority'];
        $this->project_id = $this->task['project_id'];
    }

    public function getTask($id)
    {
        return Task::where('id', $id)->first();
    }

    public function getProjectName($id)
    {
        $project = Project::where('id', $id)->first();
        return $project['name'];
    }

   

}
