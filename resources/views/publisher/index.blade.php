@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>All Publishers</h2>
    </div>
    <div class="card-body">
        <a href="{{ route('publisher.create') }}" class="btn btn-success btn-sm" title="Add New publisher">
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
                        <th>Publisher Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($publisher as $publish)
                    <tr>
                        <td>{{$publish->id}}</td>
                        <td>{{$publish->name}}</td>
                        <td class="edit">
                            <a href="{{ route('publisher.edit',$publish->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td class="delete">
                            <form action="{{route('publisher.destroy',$publish->id)}}" method="post" class="form-hidden">
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