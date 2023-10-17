@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Edit Task</h6>
                        <hr />
                        <form action="{{ route('task.update', $task->id) }}" method="POST" class="row g-3">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label class="form-label">Task Name</label>
                                <input type="text" class="form-control" name="task_name" value="{{ $task->task_name }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Task Details</label>
                                <textarea name="task_description" class="form-control">{{ $task->task_description }}</textarea>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update Task</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
