@push('styles')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

    <style>
        
    </style>
@endpush

<div class="container mt-2">

    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12">
            @include('messages.flash')
            <div class="col-12 col-lg-12 col-xxl-12 mb-3 d-flex justify-content-between">
                <div>
                    <label for="project_id">Select Project</label>
                    <select wire:model="project_id" wire:change="reqByProject" class="form-select">
                        <option selected>Choose Project</option>
                        @forelse($projects as $project)
                            <option value="{{ $project['id'] }}">{{ $project['name'] }}</option>
                        @empty
                            <option>No projects</option>
                        @endforelse
                    </select>
                </div>
                <div class="dropdown ">
                    <a type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Actions
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="{{ route('task.create') }}">
                                <i class="bi bi-plus"></i>
                                Create Tasks
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a wire:click="handleTask" class="nav-link text-capitalize {{ $taskClicked ? 'active' : '' }}"
                    id="nav-task-tab" data-bs-toggle="tab" data-bs-target="#nav-task" href="#tasks" type="button"
                    role="tab" aria-controls="nav-task" aria-selected="true">Tasks</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade {{ $taskClicked ? 'show active' : '' }}" id="nav-task" role="tabpanel"
                aria-labelledby="nav-task-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        @if (count($tasks) > 0)
                            <h4 class="text-capitalize fw-bold my-3">List of Tasks</h4>
                        @endif
                        <div class="border bg-white rounded-3 shadow px-4 py-3 mt-4">
                            @if (count($tasks) > 0)
                                <table class="table table-hover" id="sortable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Priority</th>
                                            <th scope="col">Project</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody wire:sortable ="reorder">
                                        @foreach ($tasks as $task)
                                            <tr wire:sortable.item="{{ $task['id'] }}" wire:key="task-{{ $task['id'] }}">
                                                <td>
                                                    <a class="text-capitalize rounded"
                                                        href="{{ route('task.show', $task['id']) }}">{{ $task['name'] }}</a>
                                                </td>
                                                <td>{{ $task['priority'] }}</td>
                                                <td class="project-name">
                                                    {{ $this->getProjectName($task['project_id']) }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-outline-primary text-capitalize rounded"
                                                        href="{{ route('task.edit', $task['id']) }}">
                                                        Edit
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="text-center text-capitalize">
                                    @include('messages.flash')
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>

    <script>
        $(function() {
            $("#sortable").sortable();
        });
    </script>
@endpush
