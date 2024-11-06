@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Monthwise Book Issue Report</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="offset-md-4 col-md-4">
                <form class="yourform mb-5" action="{{ route('reports.month_wise_generate') }}" method="post">
                    @csrf
                    <br />
                    <div class="form-group">
                        <input type="month" name="month" class="form-control" value="{{ date('Y-m') }}">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-danger" name="search_month" value="Search">
                </form>
            </div>
        </div>
        @if ($books)
            <div class="row">
                <div class="col-8">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>S.No</th>
                                <th>Student Name</th>
                                <th>Book Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Issue Date</th>
                            </thead>
                            <tbody>
                                @forelse ($books as $book)
                                    <tr>
                                        <td>{{ $book->id }}</td>
                                        <td>{{ $book->student->name }}</td>
                                        <td>{{ $book->book->name }}</td>
                                        <td>{{ $book->student->phone }}</td>
                                        <td>{{ $book->student->email }}</td>
                                        <td>{{ $book->issue_date->format('d M, Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10">No Record Found!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>


@endsection