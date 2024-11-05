<?php

namespace App\Livewire;

use Session;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\Project;
use App\Models\Task;

class CreateTask extends Component
{
   
    public $name;
    public $priority;
    public $projects = [];
    public $project_id;

    public function mount()
    {
        $this->projects = $this->getProjects();
    }

    public function getProjects()
    {
        $projects = Project::all();
        return $projects;
    }

    
    public function storeTask()
    {
        $validatedData = $this->validate([
            'name' => ['string', 'required'],
            'project_id' => ['required', 'integer'],
            'priority' => ['required', 'integer'],
        ]);
        $data = [];
        $data['name'] = $validatedData['name'];
        $data['project_id'] = $validatedData['project_id'];
        $data['priority'] = $validatedData['priority'];
        try {
            Task::create($data);
            return redirect()->route('task.index')->with('success', 'Task created successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('task.create')->with('error', 'Unable to create task!');
        }
        

    }

    public function render()
    {
        return view('livewire.create-task');
    }

}
