@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Update Category</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form class="yourform" action="{{ route('category.update', $category->id)}}" method="post" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>category Name</label>
                        <input type="text" class="form-control @error('name') isinvalid @enderror" name="name" value="{{ $category->name}}"
                            required>
                        @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br />
                    <input type="submit" name="submit" class="btn btn-danger" value="Update" required>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection