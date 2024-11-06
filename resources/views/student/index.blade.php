@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>All Students</h2>
    </div>
    <div class="card-body">
        <a href="{{ route('student.create') }}" class="btn btn-success btn-sm" title="Add New Student">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br />
        <br />
        <div class="row">
            <div class="col-8">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>S.No</th>
                    <th>Student Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td class="id">{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td class="text-capitalize">{{ $student->gender }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->email }}</td>
                            <td class="edit">
                                <a href="{{ route('student.edit', $student) }}" class="btn btn-success">Edit</a>
                            </td>
                            <td class="delete">
                                <form action="{{ route('student.destroy', $student->id) }}" method="post"
                                    class="form-hidden">
                                    <button class="btn btn-danger delete-student">Delete</button>
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No Students Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection