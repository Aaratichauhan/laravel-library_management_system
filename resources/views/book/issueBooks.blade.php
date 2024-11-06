@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>All Book Issue</h2>
    </div>
    <div class="card-body">
        <a href="{{ route('book_issue.create') }}" class="btn btn-success btn-sm" title="Add Book Issue">
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
                            <th>Book Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Issue Date</th>
                            <th>Return Date</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @forelse ($book_issue as $data)
                                <tr style='@if (date('Y-m-d') > $data->return_date->format('d-m-Y') && $data->issue_status == 'N') ) background:rgba(255,0,0,0.2) @endif'>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->student->name }}</td>
                                    <td>{{ $data->book->name }}</td>
                                    <td>{{ $data->student->phone }}</td>
                                    <td>{{ $data->student->email }}</td>
                                    <td>{{ $data->issue_date->format('d M, Y') }}</td>
                                    <td>{{ $data->return_date->format('d M, Y') }}</td>
                                    <td>
                                        @if ($data->issue_status == 'Y')
                                            <span>Returned</span>
                                        @else
                                            <span>Issued</span>
                                        @endif
                                    </td>
                                    <td class="edit">
                                        <a href="{{ route('book_issue.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="delete">
                                        <form action="{{ route('book_issue.destroy', $data) }}" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger">Delete</button>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10">No Books Issued</td>
                                </tr>
                            @endforelse
                        </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
