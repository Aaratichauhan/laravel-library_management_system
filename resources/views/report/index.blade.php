@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Reports</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 14rem; margin: 0 auto;">
                    <div class="card-body text-center bg-dark">
                        <br />
                        <a href="{{ route('reports.date_wise') }}" class="card-link">
                            <h5 class="card-title text-light mb-0">Date Wise Report</h5>
                        </a>
                        <br />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 20rem; margin: 0 auto;">
                    <div class="card-body text-center bg-dark">
                        <br />
                        <a href="{{ route('reports.month_wise') }}" class="card-link">
                            <h5 class="card-title text-light mb-0">Monthly Wise Report</h5>
                        </a>
                        <br/>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 14rem; margin: 0 auto;">
                    <div class="card-body text-center bg-dark">
                        <br />
                        <a href="{{ route('reports.not_returned') }}" class="card-link">
                            <h5 class="card-title text-light mb-0">Not Returned</h5>
                        </a>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection