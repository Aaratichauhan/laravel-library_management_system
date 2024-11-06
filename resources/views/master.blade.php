@extends('layout')

@section('content')
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="admin-heading">Dashboard</h2>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 14rem; margin: 0 auto;">
                    <div class="card-body text-center bg-dark">
                        <br/>
                        <a href="{{ route('auther.index') }}">
                            <p class="card-text fs-2 text-light">{{ $authors }}</p>
                        </a>
                        <br/>
                        <h5 class="card-title text-light mb-0">Authors Listed</h5>
                        <br/>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 14rem; margin: 0 auto;">
                    <div class="card-body text-center bg-dark">
                    <br/>
                    <a href="{{ route('publisher.index') }}" class="card-link">
                        <p class="card-text fs-2 text-light">{{ $publishers }}</p>
                        </a>
                        <br/>
                        <h5 class="card-title text-light mb-0">Publishers Listed</h5>
                        <br/>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 14rem; margin: 0 auto;">
                    <div class="card-body text-center bg-dark">
                    <br/>
                    <a href="{{ route('category.index') }}" class="card-link">
                        <p class="card-text fs-2 text-light">{{ $categories }}</p>
                        </a>
                        <br/>
                        <h5 class="card-title text-light mb-0">Categories Listed</h5>
                        <br/>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 14rem; margin: 0 auto;">
                    <div class="card-body text-center bg-dark">
                    <br/>
                    <a href="{{ route('book.index') }}" class="card-link">
                        <p class="card-text fs-2 ttext-light">{{ $books }}</p>
                        </a>
                        <br/>
                        <h5 class="card-title text-light mb-0">Books Listed</h5>
                        <br/>
                    </div>    
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 14rem; margin: 0 auto;">
                    <div class="card-body text-center bg-dark">
                    <br/>
                    <a href="{{ route('student.index') }}" class="card-link">
                        <p class="card-text fs-2 text-light">{{ $students }}</p>
                        </a>
                        <br/>
                        <h5 class="card-title text-light mb-0">Register Students</h5>
                        <br/>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 14rem; margin: 0 auto;">
                    <div class="card-body text-center bg-dark">
                    <br/>
                    <a href="{{ route('book_issued') }}" class="card-link">
                        <p class="card-text fs-2 text-light">{{ $issued_books }}</p>
                        </a>
                        <br/>
                        <h5 class="card-title text-light mb-0">Book Issued</h5>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection