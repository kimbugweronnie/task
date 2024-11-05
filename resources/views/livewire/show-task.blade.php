<div class="container-fluid p-0">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between">
            <h3 class="text-capitalize">{{ $task['name'] }}</h3>
            <div class="dropdown ">
                <a type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Actions
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteTask" href="{{ route('task.destroy', $task['id']) }}">
                            <i class="bi bi-trash"></i>
                            Delete
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('task.index') }}">
                            <i class="bi bi-arrow-left"></i>
                            Back
                        </a>
                    </li>
                </ul>
                <form action="{{ route('task.destroy', $task['id']) }}" class="hidden" id="delete-task" method="POST">
                    @method('delete')
                    @csrf
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="border rounded-3 bg-white shadow py-4 px-5">
                <form wire:submit="update">
                    <div class="row mb-2">
                        <div class="col-4">
                            <label for="activity_name" class="form-label text-capitalize">Project</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                wire:model="{{ $this->getProjectName($task['id']) }}"
                                value="{{ $this->getProjectName($task['id']) }}" id="name" aria-label="Disabled"
                                disabled readonly>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="activity_name" class="form-label text-capitalize">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                wire:model="name" value="{{ $name }}" id="name" aria-label="Disabled"
                                disabled readonly>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="start_date" class="form-label text-capitalize">Priority</label>
                            <input type="number" class="form-control @error('priority') is-invalid @enderror"
                                wire:model="priority" value="{{ $priority }}" id="priority" aria-label="Disabled"
                                disabled readonly>
                            @error('priority')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 mt-4 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary px-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteTask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ $task['name'] }}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger text-white" onclick="event.preventDefault(); document.getElementById('delete-task').submit();">Delete</button>

                </div>
            </div>
        </div>
    </div>
</div>
