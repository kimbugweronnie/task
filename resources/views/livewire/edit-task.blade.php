<div class="container-fluid p-0">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between">
            <h3 class="text-capitalize">{{ $task['name'] }}</h3>
            <a class="btn btn-secondary px-3" href="{{ route('task.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left mb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                    <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg>
                Back
            </a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="border rounded-3 bg-white shadow py-4 px-5">
                <form  wire:submit="update">
                    <div class="row mb-2">
                        <div class="col-4">
                            <label for="has_report" class="form-label text-capitalize">Project</label>
                            <select wire:model="project_id"  aria-label="Default select choice" class="form-select @error('project_id') is-invalid @enderror" >
                                <option selected>Select choice</option>
                                @if ($projects)
                                    @foreach($projects as $project)
                                        <option value="{{ $project['id'] }}">{{ $project['name'] }}</option>
                                    @endforeach
                                @else
                                    <option value="">No project</option>
                                @endif
                            </select>
                            @error('project_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>The project is required.</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="activity_name" class="form-label text-capitalize">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name" value="{{ $name }}" id="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="start_date" class="form-label text-capitalize">Priority</label>
                            <input type="number" class="form-control @error('priority') is-invalid @enderror" wire:model="priority" placeholder="{{  $priority }}" id="priority">
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
</div>