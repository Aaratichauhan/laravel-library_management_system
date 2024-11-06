@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Not Returned Books</h2>
    </div>
    <div class="card-body">
        @if ($books->isNotEmpty())
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
                                <th>Return Date</th>
                                <th>Over Days</th>
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
                                                            <td>{{ $book->return_date->format('d M, Y') }}</td>
                                                            <td>
                                                                @php
                                                                    $date1 = date_create(date('Y-m-d'));
                                                                    $date2 = date_create($book->return_date->format('Y-m-d'));
                                                                    if ($date1 > $date2) {
                                                                        $diff = date_diff($date1, $date2);
                                                                        echo $diff->format('%a days');
                                                                    } else {
                                                                        echo '0 days';
                                                                    }
                                                                @endphp
                                                            </td>
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