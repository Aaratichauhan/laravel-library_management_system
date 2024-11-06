@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Settings</h2>
    </div>
    <br/>
        <div class="row">
            <div class="offset-md-3 col-md-6">
            <form class="yourform" action="{{ route('setting') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Return Days</label>
                            <input type="number" class="form-control" name="return_days" value="{{ $data->return_days }}"
                                required>
                            @error('return_days')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br/>
                        <div class="form-group">
                            <label>Fine (in Rs.)</label>
                            <input type="number" class="form-control" name="fine" value="{{ $data->fine }}" required>
                            @error('fine')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-danger" value="Update" required>
                        <br/>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection