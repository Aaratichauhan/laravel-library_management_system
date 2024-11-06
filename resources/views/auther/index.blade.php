@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>All Authors</h2>
    </div>
    <div class="card-body">
        <a href="{{ route('auther.create') }}" class="btn btn-success btn-sm" title="Add New Auther">
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
                        <th>Author Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authers as $auth)
                    <tr>
                        <td>{{$auth->id}}</td>
                        <td>{{$auth->name}}</td>
                        <td class="edit">
                            <a href="{{ route('auther.edit',$auth->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td class="delete">
                            <form action="{{route('auther.destroy',$auth->id)}}" method="post" class="form-hidden">
                                <button class="btn btn-danger delete-author">Delete</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection