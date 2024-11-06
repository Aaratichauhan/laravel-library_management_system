@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>All Books</h2>
    </div>
    <div class="card-body">
        <a href="{{ route('book.create') }}" class="btn btn-success btn-sm" title="Add New Books">
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
                    <tr>
                        <th>S.No</th>
                        <th>Book Name</th>
                        <th>Auther Name</th>
                        <th>Category Name</th>
                        <th>Publisher Name</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                            @forelse ($book as $data)
                                <tr>
                                    <td class="id">{{ $data->id }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->auther->name }}</td>
                                    <td>{{ $data->category->name }}</td>
                                    <td>{{ $data->publisher->name }}</td>
                                    <td>
                                        @if ($data->status == 'Y')
                                            <span>Available</span>
                                        @else
                                            <span>Issued</span>
                                        @endif
                                    </td>
                                    <td class="edit">
                                        <a href="{{ route('book.edit', $data) }}" class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="delete">
                                        <form action="{{ route('book.destroy', $data) }}" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger delete-book">Delete</button>
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">No Books Found</td>
                                </tr>
                            @endforelse
                        </tbody>
            </table>
        </div>
    </div>
</div>

@endsection