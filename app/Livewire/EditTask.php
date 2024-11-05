<?php

namespace App\Livewire;

use Session;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Models\Task;
use App\Models\Project;

class EditTask extends Component
{
    public $task = [];
    public $projects = [];
    public $project_id;
    public $priority;
    public $name;

    public function render()
    {
        return view('livewire.edit-task');
    }

    public function mount($id)
    {
        $this->task = $this->getTask($id);
        $this->name = $this->task['name'];
        $this->priority = $this->task['priority'];
        $this->project_id = $this->task['project_id'];
        $this->projects = $this->getProjects();
    }

    public function getTask($id)
    {
        return Task::where('id', $id)->first();
    }

    public function getProjects()
    {
        $projects = Project::all();
        return $projects;
    }

    public function update()
    {
        $validated = $this->validate([
            'name' => ['required', 'string'],
            'priority' => ['required', 'integer'],
            'project_id' => ['nullable', 'integer'],
        ]);

        $data = [];
        $data['name'] = $this->name ?  $validated['name'] : $this->task['name']; ;
        $data['priority'] = $this->priority ? $validated['priority'] : $this->task['priority'];
        $data['project_id'] = $this->project_id ? $validated['project_id'] : $this->task['project_id'];

        try {
            Task::where('id', '=', $this->task['id'])->update($data);
            return redirect()->route('task.index')->with('success', 'Task updated successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Unable to update task!');
        }
    }
}
