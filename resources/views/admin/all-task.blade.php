@extends('admin.master')
@section('content')
    @include('admin.message')
    <div class="card">
        <div class="card-body">
            <table class="table mb-0 table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Task Name</th>
                        <th scope="col">Task Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $data)
                        <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->task_name }}</td>
                            <td>{{ $data->task_description }}</td>
                            <td>
                                <a href="{{ route('task.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('task.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
