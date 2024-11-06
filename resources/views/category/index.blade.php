@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>All Category</h2>
    </div>
    <div class="card-body">
        <a href="{{ route('category.create') }}" class="btn btn-success btn-sm" title="Add New category">
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
                        <th>Category Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td class="edit">
                            <a href="{{ route('category.edit',$data->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td class="delete">
                            <form action="{{route('category.destroy',$data->id)}}" method="post" class="form-hidden">
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