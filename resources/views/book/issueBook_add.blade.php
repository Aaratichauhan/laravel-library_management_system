@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Add Book Issue</h2>
    </div>
    <div class="card-body">
        <a href="" class="btn btn-success btn-sm" title="All Issue List">
            All Books
        </a>
        <br />
        <br />
        <div class="row">
            <div class="offset-md-3 col-md-6">
            <form class="yourform" action="{{ route('book_issue.create') }}" method="post"
                        autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Student Name</label>
                            <select class="form-control" name="student_id" required>
                                <option value="">Select Name</option>
                                @foreach ($students as $student)
                                    <option value='{{ $student->id }}'>{{ $student->name }}</option>
                                @endforeach
                            </select>
                            @error('student_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br />
                        <div class="form-group">
                            <label>Book Name</label>
                            <select class="form-control" name="book_id" required>
                                <option value="">Select Name</option>
                                @foreach ($books as $data)
                                    <option value='{{ $data->id }}'>{{ $data->name }}</option>
                                @endforeach
                            </select>
                            @error('book_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br />
                        <input type="submit" name="save" class="btn btn-danger" value="save">
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

