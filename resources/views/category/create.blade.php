@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Add Category</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/category') }}" class="btn btn-success btn-sm" title="Add New category">
         All Category
        </a>
        <br />
        <br />
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form class="yourform" action="{{ route('category.store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control @error('name') isinvalid @enderror"
                            placeholder="category Name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br />
                    <input type="submit" name="save" class="btn btn-danger" value="save" required>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection